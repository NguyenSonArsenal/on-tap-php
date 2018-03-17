<?php

namespace admin\Controllers;
use Library\Database;
use Library\Session;

class HobbiesController extends Controller
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public static function insert()
    {
        $errors = [];

        $created_at = timestamp();

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $hobbies = isset($_POST['hobbies']) ? clear_input($_POST['hobbies']) : '';

            if ($hobbies == '')
                $errors['hobbies'] = 'hobbies is required';

            if (empty($errors))
            {
                $sql = "INSERT INTO hobbies (name, created_at) 
                        VALUE ('$hobbies', '$created_at')";

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

        $id = isset($_GET['id']) ? clear_input((int)($_GET['id'])) : '';
        $page = isset($_GET['page']) ? clear_input((int)($_GET['page'])) : '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $hobbies = isset($_POST['hobbies']) ? clear_input($_POST['hobbies']) : '';

            if ($hobbies == '')
                $errors['hobbies'] = 'Hobbies is required';

            if (empty($errors))
            {
                $sql = "UPDATE hobbies 
                        SET name = '$hobbies', updated_at = '$updated_at'
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

        $sql = "DELETE FROM hobbies WHERE id = $id";
        $query = Database::query($sql);

        $sql = "DELETE FROM tag_user WHERE tag_id = $id AND type = 1";
        $query = Database::query($sql);

        Session::flash('delete', 'Delete successfully');

        return redirect('index');
    }


    public static function selectAll()
    {
        $sql = "SELECT * FROM hobbies ORDER BY id desc";
        $listAllHobbies = Database::query($sql);
        return $listAllHobbies->fetchAll();
    }


    public static function findOneById()
    {
        $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;

        $sql = "SELECT * FROM hobbies WHERE id = $id";

        $query = Database::query($sql);

        return $query->fetchAll();
    }


    public function listHobbies()
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

        $sql = "SELECT * FROM hobbies " . $where . " ORDER BY id DESC LIMIT $from, $limit";

        $countSql = "SELECT count(*) FROM hobbies " . $where;

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


    public static function getListHobbiesOfUser($user_id = -1)
    {
        if ($user_id == -1)
            $id = isset($_GET['id']) ? (int)$_GET['id'] : -1;
        else
            $id = $user_id;

        if ($id != -1 )
        {
            $sql = "SELECT hobbies.name, hobbies.id 
                FROM user
                INNER JOIN tag_user
                ON tag_user.user_id = user.id
                INNER JOIN hobbies
                ON tag_user.tag_id = hobbies.id
                WHERE tag_user.type = 1 AND user.id = $id";

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