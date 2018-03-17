<?php

namespace admin\Controllers;
use Library\Database;
use Library\Session;

class ProgramController extends Controller
{
    private $db;

    const TYPE_HOBBY    = 1;
    const TYPE_PROGRAM  = 2;

    public function __construct()
    {
        $this->db = new Database();


    }

    public static function insert()
    {
        $errors = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $program = isset($_POST['program']) ? clear_input($_POST['program']) : '';

            if ($program == '')
                $errors['program'] = 'Program is required';

            $created_at = timestamp();

            if (empty($errors))
            {
                $sql = "INSERT INTO program (name, created_at) VALUE ('$program', '$created_at')";

                $query = Database::query($sql);

                Session::flash('add', 'add successfully');

                return redirect('index');
            }
            else
            {
                return $errors;
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
            $program = isset($_POST['program']) ? clear_input($_POST['program']) : '';

            if ($program == '')
            $errors['hobbies'] = 'Hobbies is required';


            if (empty($errors))
            {
                $sql = "UPDATE program 
                        SET name = '$program', updated_at = '$updated_at'
                        WHERE id = $id";

                $query = Database::query($sql);

                Session::flash('update', 'update successfully');

                return redirect("index.php?page=$page");
            }
            else
            {
                return $errors;
            }
        }
    }

    public static function delete()
    {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

        $sql = "DELETE FROM program WHERE id = $id";
        $query = Database::query($sql);

        $sql = "DELETE FROM tag_user WHERE tag_id = $id AND type = 2";
        $query = Database::query($sql);

        Session::flash('delete', 'Delete successfully');

        return redirect('index');
    }

    public static function selectAll()
    {
        $sql = "SELECT * FROM program ORDER BY id desc";

        $listAllprogram = Database::query($sql);

        return $listAllprogram->fetchAll();
    }

    public static function findOneById()
    {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

        $sql = "SELECT * FROM program WHERE id = $id";

        $query = Database::query($sql);

        return $query->fetchAll();
    }

    public function listProgram()
    {
        $where = '';

        $search = isset($_GET['search']) ? $_GET['search'] : '';

        $page   = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $limit = 2;

        $from = ($page -1 )*$limit;

        if ($search != '')
        {
            $where .= "WHERE name LIKE '%$search%'";
        }

        $sql = "SELECT * FROM program " . $where . " ORDER BY id DESC LIMIT $from, $limit";

        $countSql = "SELECT count(*) FROM program " . $where;

        $result = $this->db->query($sql);

        $result = $result->fetchAll();

        $resultCount = $this->db->query($countSql);
        $resultCount = $resultCount->count();

        return [
            'items'         =>  $result,
            'current_page'  =>  $page,
            'limit'         =>  $limit,
            'total'         =>  $resultCount,
            'keysearch'     =>  $search
        ];
    }


    public static function getListProgramsOfUser($user_id = -1)
    {

        if ($user_id == -1)
            $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        else
            $id = $user_id;

        $type = self::TYPE_PROGRAM;

        if ($id != -1)
        {
            $sql = "SELECT program.name, program.id 
                    FROM user
                    INNER JOIN tag_user
                    ON tag_user.user_id = user.id
                    INNER JOIN program
                    ON tag_user.tag_id = program.id
                    WHERE tag_user.type = $type AND user.id = $id";

            $query = Database::query($sql);

            return $query->fetchAll();
        }
        else
        {
            echo '404.php';
            return false;
        }
    }
}