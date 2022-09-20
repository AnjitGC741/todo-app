<?php
include('./db_connect.php');
if(isset($_GET['id']))
{
    $value = $_GET['id'];
    $query = "SELECT * from todo_list where id='$value'";
    $query_run = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($query_run);
}
// if(isset($_POST['update']))
// {
//     $id= $_GET['id'];
//     $value1 = $POST['task'];
//     $query = "UPDATE todo_list SET task='$value1' WHERE Id='$id';
//     $query_run = mysqli_query($conn,$query);
// }
if(isset($_POST['update']))
  {
    $id = $_GET['id'];
    $value1 = $_POST['task'];
    $query = "UPDATE todo_list SET task = '$value1' WHERE Id = '$id'";
    $query_run = mysqli_query($conn,$query);
    header('location: ./index.php');
  }

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .edit-box
            {
                margin: 0 auto;
                width: 50%;
                margin-top:200px;
                border:1px solid black;
                padding:5px;
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
            .edit-box button
            {
                 margin-top:5px;
            }
        </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div class="edit-box">
        <form action="" method="POST">
                <label>Update Task</label>
                <input type="text" name="task" class="form-control" value="<?= $data['task']?>" placeholder="Enter your todo task">
                <button class="btn btn-warning" type="submit" name="update">Upadate</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>