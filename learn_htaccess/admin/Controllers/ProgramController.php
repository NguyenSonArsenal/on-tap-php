<?php

namespace admin\Controllers;
use Library\Database;
use Library\Session;

class ProgramController extends Controller
{
    private $db;

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

            if (empty($errors))
            {
                $sql = "INSERT INTO program (name) VALUE ('$program')";

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

        $id = isset($_GET['id']) ? clear_input((int)($_GET['id'])) : '';
        $page = isset($_GET['page']) ? clear_input((int)($_GET['page'])) : '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $program = isset($_POST['program']) ? clear_input($_POST['program']) : '';

            if ($program == '')
                $errors['hobbies'] = 'Hobbies is required';

            if (empty($errors))
            {
                $sql = "UPDATE program SET name = '$program' WHERE id = $id";

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

        $page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;

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
}