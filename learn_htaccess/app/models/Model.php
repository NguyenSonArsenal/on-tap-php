<?php
/**
 * Created by PhpStorm.
 * User: hung
 * Date: 20/03/18
 * Time: 12:49
 */

namespace app\models;
use Library\Database;

class Model
{
    protected $table;
    protected $conn;
    protected $primaryKey = 'id';
    protected $database;

    const TYPE_HOBBY    = 1;
    const TYPE_PROGRAM  = 2;

    public function __construct()
    {
        $this->conn = new Database();
    }

    public function getTable()
    {
        return $this->table;
    }

    public function getPrimaryKey()
    {
        return $this->primaryKey;
    }

    public function getConn()
    {
        return $this->conn;
    }

    public function query($sql)
    {
        return $this->conn->query($sql);
    }

    public function findById()
    {

    }

    public function fetchAll()
    {
        return $this->conn->fetchAll();
    }

    public function count()
    {
        return $this->conn->count();
    }
}