<?php
include "../model/task.php";

$page = (isset($_GET["page"]) ? $_GET["page"] : 1);
$perPage = (isset($_GET["per-page"]) && (($_GET["per-page"]) <= 50) ? $_GET["per-page"] : 5);
$start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
$total = Task::getAll()->num_rows;
$pages = ceil($total / $perPage);
$rows = Task::getInRange($start, $perPage); 


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Task Manager</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />
</head>

<body>
  <main>
    <div class="container-fluid">
      <div class="row">
        <h1 class="text-center" style="margin: 30px 0px">Task List</h1>
        <div class="col-md-10 offset-1">
          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">
            Create
          </button>
          <button type="button" class="btn float-end">Print</button>
          <hr />
          <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Task</th>
                <th scope="col">Description</th>
                <th scope="col">Date</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              <?php while ($row = $rows->fetch_assoc()) { ?>
                <tr>
                  <th scope="row" class="col-md-1">
                    <?php echo $row["id"]; ?>
                  </th>
                  <td class="col-md-3">
                    <?php echo $row["name"]; ?>
                  </td>
                  <td class="col-md-4">
                    <?php echo $row["description"]; ?>
                  </td>
                  <td class="col-md-2">
                    <?php echo $row["date"]; ?>
                  </td>
                  <td>
                    <a href="../controller/TaskController.php?op=update&id=<?php echo $row['id']; ?>" class="btn btn-primary">Update</a>
                    <a href="../controller/TaskController.php?op=delete&id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <ul class="pagination justify-content-center">
            <?php for ($i = 1; $i <= $pages; $i++) {
              if ($i == $page) {
                ?>
                <li class="page-item active" aria-current="page">
                  <a href="listaTareas.php?page=<?php echo $i; ?>" class="page-link">
                    <?php echo $i; ?>
                  </a>
                </li>
              <?php } else {
                ?>
                <li class="page-item">
                  <a href="listaTareas.php?page=<?php echo $i; ?>" class="page-link">
                    <?php echo $i; ?>
                  </a>
                </li>
              <?php }
            } ?>
          </ul>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal for Create Task -->
  <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
    aria-hidden="true">
    <form action="../controller/TaskController.php?op=create" method="post">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create Task</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
              <label for="taskName">Task Name</label>
              <input type="text" name="taskName" id="taskName" required class="form-control" />
              <label for="taskDes">Description</label>
              <input type="text" name="taskDes" id="taskDes" required class="form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <input type="submit" value="Save" name="save" class="btn btn-primary" />
          </div>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
</body>

</html>