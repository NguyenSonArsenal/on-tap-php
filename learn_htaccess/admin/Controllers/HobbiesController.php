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

    public static function insert($value)
    {
        $sql = "INSERT INTO hobbies (name) VALUE ('$value')";
        $query = Database::query($sql);

        Session::flash('add', 'add successfully');

        return redirect('index');
    }

    public static function update($id, $value)
    {
        $sql = "UPDATE hobbies SET name = '$value' WHERE id = $id ";

        $query = Database::query($sql);

        Session::flash('update', 'update successfully');

        return redirect('index');
    }

    public static function delete($id)
    {
        $sql = "DELETE FROM hobbies WHERE id = $id";
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

    public static function selectById($id)
    {
        $sql = "SELECT * FROM hobbies WHERE id = $id";
        $query = Database::query($sql);

        return $query->fetchAll();
    }


    public function listHobbies()
    {
        $page  = isset($_GET['page']) ? (int)$_GET['page'] : 0;
        $limit = 2;

        $from = ($page -1 )*$limit;

        $sql = "SELECT * FROM hobbies ORDER BY id DESC LIMIT $from, $limit";

        $countSql = "SELECT count(*) FROM hobbies";

        $result = $this->db->query($sql);
        $result = $result->fetchAll();
        $resultCount = $this->db->query($countSql)->count();

        return [
            'items' => $result,
            'current_page'  => $page,
            'limit' => $limit,
            'total' => $resultCount,
        ];
    }
}