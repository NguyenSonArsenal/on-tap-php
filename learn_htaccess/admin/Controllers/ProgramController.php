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

    public static function insert($value)
    {
        $sql = "INSERT INTO program (name) VALUE ('$value')";
        $query = Database::query($sql);

        Session::flash('add', 'add successfully');

        return redirect('index');
    }

    public static function update($id, $value)
    {
        $sql = "UPDATE program SET name = '$value' WHERE id = $id ";

        $query = Database::query($sql);

        var_dump($query);

        Session::flash('update', 'update successfully');

        return redirect('index');
    }

    public static function delete($id)
    {
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

    public static function selectById($id)
    {
        $sql = "SELECT * FROM program WHERE id = $id";

        $query = Database::query($sql);

        return $query->fetchAll();
    }

    public function listProgram()
    {
        $page  = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $limit = 2;

        $from = ($page -1 )*$limit;

        $sql = "SELECT * FROM program ORDER BY id DESC LIMIT $from, $limit";

        $countSql = "SELECT count(*) FROM program";

        $result = $this->db->query($sql);

        $result = $result->fetchAll();

        $resultCount = $this->db->query($countSql);
        $resultCount = $resultCount->count();

        return [
            'items'         =>  $result,
            'current_page'  =>  $page,
            'limit'         =>  $limit,
            'total'         =>  $resultCount,
        ];
    }
}