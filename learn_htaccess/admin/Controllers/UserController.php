<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 15/03/18
 * Time: 17:29
 */

namespace admin\Controllers;
use Library\Database;
use Library\Session;


class UserController extends Controller
{
    private $db;

    const TYPE_HOBBY    = 1;
    const TYPE_PROGRAM  = 2;



    public function __construct()
    {
        $this->db = new Database();
    }


    // get all users not limit on page
    public static function allUser()
    {
        $self = new self();

        $sql = "SELECT * FROM user";

        $result = $self->db->query($sql);

        $result = $result->fetchAll();

        return $result;
    }


    // get users is limitted on page
    public static function listUser()
    {
        $self = new self();

        $where = '';
        $limit = self::LIMIT;


        $search = isset($_GET['search'])    ?   $_GET['search']  : '';

        $page   = (isset($_GET['page'])  && $_GET['page'] >= 0)  ?
                    (int)$_GET['page']    :  1;

        if ($search != '')
            $where .= " WHERE name LIKE '%$search%' ";

        $from = ($page == 1) ? 1 : ($page - 1) * $limit;

        $sql = "SELECT * FROM user " . $where . " ORDER BY id DESC LIMIT $from, $limit";

        $result = $self->db->query($sql);
        $result = $result->fetchAll();

        $countSql = "SELECT count(*) FROM user " . $where;

        $resultCount = $self->db->query($countSql);
        $resultCount = $resultCount->count();

        return [
            'items'         =>  $result,
            'current_page'  =>  $page,
            'limit'         =>  $limit,
            'total'         =>  $resultCount,
            'keysearch'     =>  $search,
            'from'          =>  $from
        ];
    }


    public static function insert()
    {
        $errors = [];
        $created_at = timestamp();

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = isset($_POST['name'])       ? trim(clear_input($_POST['name'])) : '';
            $email = isset($_POST['email'])     ? trim(clear_input($_POST['email'])) : '';
            $phone = isset($_POST['phone'])     ? trim(clear_input($_POST['phone'])) : '';
            $phone = preg_replace('/[\s.-]+/', '', $phone);
            $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];
            $program = isset($_POST['program']) ? $_POST['program'] : [];
            $gender =  clear_input($_POST['gender']);

            if ($name == '')
                $errors['name'] = 'Name is required';

            if ($email == '')
                $errors['email'] = 'Email is required';

            if ((strlen($phone) != 10)  && (strlen($phone) != 11))
                $errors['phone'] = 'Phone must be 10 or 11 number';

            if (!is_numeric($phone))
                $errors['phone'] = 'Phone must be number';

            if ($phone == '')
            $errors['phone'] = 'Phone is required';

            if ($hobbies == [])
                $errors['hobbies'] = 'Hobbies is required';

            if ($program == [])
                $errors['program'] = 'Program is required';

            if (empty($errors))
            {
                $sql    = "INSERT INTO user (name, email, phone, gender, created_at) 
                            VALUE ('$name', '$email', '$phone', '$gender', '$created_at')";

                $db     = new Database();

                $query  = $db::query($sql);

                $id     = $query->getLastId();
                $type = self::TYPE_HOBBY;

                foreach ($hobbies as $hobbie_id)
                {
                    $sql = "INSERT INTO tag_user (tag_id, user_id, type)
                             VALUE('$hobbie_id', '$id', '$type')";

                    $query = $db::query($sql);

                    if (!$query)
                    {
                        echo "Error: " . $db->error();
                        die();
                    }
                }

                $type = self::TYPE_PROGRAM;
                foreach ($program as $program_id)
                {
                    $sql = "INSERT INTO tag_user (tag_id, user_id, type)
                             VALUE('$program_id', '$id', '$type')";

                    $query = $db::query($sql);

                    if (!$query)
                    {
                        echo "Error: " . $db->error();
                        die();
                    }
                }

                Session::flash('add', 'add successfully');

                return redirect('index');
            }
            else
            {
                return [
                    'errors'    =>  $errors,
                    'name'      =>  $name,
                    'email'     =>  $email,
                    'phone'     =>  $phone,
                    'hobbies'   =>  $hobbies,
                    'program'   =>  $program,
                    'gender'    =>  $gender,
                ];
            }
        }
    }

    public static function update()
    {
        $errors = [];
        $updated_at = timestamp();

        $id     = isset($_GET['id'])   ? clear_input((int)($_GET['id']))    : '';
        $page   = isset($_GET['page']) ? clear_input((int)($_GET['page']))  : '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $name = isset($_POST['name']) ? clear_input($_POST['name']) : '';
            $email = isset($_POST['email']) ? clear_input($_POST['email']) : '';
            $phone = isset($_POST['phone']) ? clear_input($_POST['phone']) : '';
            $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : '';
            $program = isset($_POST['program']) ? $_POST['program'] : '';
            $gender =  clear_input($_POST['gender']);

            if ($name == '')
                $errors['name']     = 'Name is required';

            if ($email == '')
                $errors['email']    = 'Email is required';

            if ($phone == '')
                $errors['phone']    = 'Phone is required';

            if ($hobbies == '')
                $errors['hobbies']  = 'Hobbies is required';

            if ($program == '')
                $errors['program']  = 'Program is required';

            if (empty($errors))
            {
                $sql    =  "UPDATE user 
                            SET name = '$name', email = '$email' , phone = '$phone',
                                gender = '$gender' , updated_at = '$updated_at'
                            WHERE id = $id ";

                $db     = new Database();
                $query  = $db::query($sql);

                // Remove hobbies va program from tag_user table
                $sql = "DELETE FROM tag_user WHERE user_id = $id";
                $query  = $db::query($sql);

                // update hobbies of user
                $type = self::TYPE_HOBBY;
                foreach ($hobbies as $hobbie_id)
                {
                    $sql = "INSERT INTO tag_user (tag_id, user_id, type)
                            VALUE ('$hobbie_id', '$id', '$type')";

                    $query = $db::query($sql);

                    if (!$query)
                    {
                        echo "Error: " . $db->error();
                        die();
                    }
                }

                // update program of user
                $type = self::TYPE_PROGRAM;
                foreach ($program as $program_id)
                {
                    $sql = "INSERT INTO tag_user (tag_id, user_id, type)
                            VALUE ('$program_id', '$id', '$type')";

                    $query = $db::query($sql);

                    if (!$query)
                    {
                        echo "Error: " . $db->error();
                        die();
                    }
                }

                Session::flash('update', 'Update successfully');

                return redirect("index.php?page=$page");
            }
            else
            {
                return [
                    'errors'    =>  $errors,
                    'name'      =>  $name,
                    'email'     =>  $email,
                    'phone'     =>  $phone,
                    'hobbies'   =>  $hobbies,
                    'program'   =>  $program,
                    'gender'    =>  $gender,
                ];
            }
        }
    }


    public static function delete()
    {
        $id     =   isset($_GET['id'])   ? (int)$_GET['id']     : -1;
        $page   =   isset($_GET['page']) ? (int)$_GET['page']   : 1;

        $sql = "DELETE FROM user WHERE id = $id";

        $query = Database::query($sql);

        $sql = "DELETE FROM tag_user WHERE user_id = $id";

        $query = Database::query($sql);

        Session::flash('delete', 'Delete successfully');

        return redirect('index.php?page='.$page);
    }


    public static function findOneById()
    {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

        $sql = "SELECT * FROM user WHERE id = $id";

        $query = Database::query($sql);

        return $query->fetchAll();
    }

}