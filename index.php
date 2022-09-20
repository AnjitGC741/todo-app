<?php
include('./db_connect.php');
if(isset($_POST['delete']))
{
  $val=$_POST['delete'];
  // $query= "DELETE FROM todo_list WHERE Id='$val'";
  $query = "DELETE from todo_list where Id=$val";

  $query_run = mysqli_query($conn,$query);  
}
if(isset($_POST['add']))
{
  // $query = "INSERT into todo_list(task) values ("$_POST['task']")";
  $val = $_POST['task'];
  $query = "INSERT into todo_list (task) values ('$val')";
  $query_run = mysqli_query($conn,$query); 
}

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TODO</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  
     </head>
  <body>
    <div class="add-box">
        <form action="" method="POST">
                <label for="">Add Task</label>
                <input type="text" name="task" class="form-control" placeholder="Enter your todo task">
                <button class="btn btn-success" type="submit" name="add">Add</button>
        </form>
    </div>
    <div class="mainBox">
             <div class="topic">
               <h1>Todo List</h1>
             </div>
             <div class="forTable">
             <table class="table">
 
  <tbody>
    <?php
    $i=1;
    $query= "SELECT * from todo_list";
    $query_run = mysqli_query($conn,$query);
    foreach($query_run as $value)
    {

    ?>
    <tr>
      
      <td><?= $i++?></td>
      <td><?= $value['task']?></td>
      <td><a href="edit.php?id=<?=$value['Id'];?>" class="btn btn-warning">Edit</a></td>
      <td>
         <form action="" method="POST">
        <button class="btn btn-danger" name="delete" value="<?=$value['Id'];?>" >Delete</button></td>
        <form>
    </tr>
     <?php
    }
    ?>
</tbody>
</table>
             </div>
    </div>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>