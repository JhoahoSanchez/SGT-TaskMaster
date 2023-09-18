<?php
include "../model/task.php";
$id = $_GET["id"];
$task = Task::getById($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
    <main>
        <div class="container-fluid" id="updateDiv">
            <form action="../controller/TaskController.php?op=saveUpdate" method="post">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Update Task</h3>
                    </div>
                    <div class="card-body">
                        <div>
                            <label for="taskName">Task Name</label>
                            <input type="hidden" name="taskId" id="taskId" value="<?php echo $task['id']; ?>">
                            <input type="text" name="taskName" id="taskName" required class="form-control"
                                value="<?php echo $task['name']; ?>" />
                            <label for="taskDes">Description</label>
                            <input type="text" name="taskDes" id="taskDes" required class="form-control"
                                value="<?php echo $task['description']; ?>" />
                            <label for="taskDes">Date</label>
                            <input type="text" name="taskDate" id="taskDate" required class="form-control"
                                value="<?php echo $task['date']; ?>" />
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="../view/listaTareas.php" class="btn btn-secondary">
                            Cancel
                        </a>
                        <input type="submit" value="Save Changes" name="save" class="btn btn-primary" />
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</body>

</html>