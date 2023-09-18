<?php
include "../model/task.php";

date_default_timezone_set("America/Guayaquil");

if (isset($_GET)) {
    $op = $_GET["op"];

    switch ($op) {
        case 'create':
            Task::getAll();
            $task = new Task();
            $task->name = $_POST["taskName"];
            $task->description = $_POST["taskDes"];
            $task->date = date("d-m-Y");
            Task::create($task);
            header("Location: ../view/listaTareas.php");
            break;
        case 'update':
            $id = $_GET["id"];
            header("location: ../view/editTask.php?id=$id");
            break;
        case 'saveUpdate':
            $task = new Task();
            $task->id = $_POST["taskId"];
            $task->name = $_POST["taskName"];
            $task->description = $_POST["taskDes"];
            $task->date = $_POST["taskDate"];
            Task::update($task);
            header("Location: ../view/listaTareas.php");
            break;
        case 'delete':
            $id = $_GET["id"];
            Task::deleteById($id);
            header("Location: ../view/listaTareas.php");
            break;
        default:
            echo "wazaaa";
            break;
    }
}



?>