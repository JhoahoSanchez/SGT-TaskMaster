<?php

include "db.php";

class Task
{
    private $id;
    private $name;
    private $description;
    private $date;

    public function __construct()
    {
    }

    public function __get($property)
    {
        return $this->$property;
    }

    public function __set($property, $value)
    {
        $this->$property = $value;
    }

    public static function create(Task $task)
    {
        $sql = "insert into task (name, description, date) values ('$task->name', '$task->description', '$task->date')";
        BddConnection::open();
        $db = BddConnection::getConnection();
        $db->query($sql);
        BddConnection::close();
    }

    public static function update(Task $task)
    {
        $sql = "update task set name ='$task->name', description = '$task->description', date = '$task->date' where id = '$task->id' ";
        BddConnection::open();
        $db = BddConnection::getConnection();
        $db->query($sql);
        BddConnection::close();
    }

    public static function getAll()
    {
        $sql = "select * from task";
        BddConnection::open();
        $db = BddConnection::getConnection();
        $rows = $db->query($sql);
        BddConnection::close();
        return $rows;
    }

    public static function getById($id)
    {
        $sql = "select * from task where id = '$id'";
        BddConnection::open();
        $db = BddConnection::getConnection();
        $taskOr = $db->query($sql);
        $task = $taskOr->fetch_assoc();
        BddConnection::close();
        return $task;
    }

    public static function deleteById($id)
    {
        $sql = "delete from task where id = '$id'";
        BddConnection::open();
        $db = BddConnection::getConnection();
        $db->query($sql);
        BddConnection::close();
    }

    public static function getInRange($start, $size){
        $sql = "select * from task limit ".$start." , ".$size." ";
        BddConnection::open();
        $db = BddConnection::getConnection();
        $rows = $db->query($sql);
        BddConnection::close();
        return $rows;
    }


}


?>