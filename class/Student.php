<?php
/**
 * Created by PhpStorm.
 * User: tuan
 * Date: 18/04/19
 * Time: 10:33
 */
include_once "DB/DBConnect.php";
class Student
{
    public $connect;
    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=test";
        $username = "root";
        $password = "25251325";
        $db = new DBConnect($dsn, $username, $password);
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM studens";
        $data = $this->connect->query($sql);
        return $data->fetchAll();
    }
}