<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<?php 
	include 'conn.php';
  // if (isset($_GET['Status']) == False) {
  //   $all = getDataTasks('Time', ' ASC');
  // } else if (isset($_GET['Time']) == ) {

  // } else {
  //   $all = getDataTasks();
  // }
  $all = getDataTasks('Time', ' ASC');
  // $status = False;
  // function orderStatus() {
  //   $status = !$status;
  //   $conn = connection();
  //   $List_Id = $_GET['List_Id'];
  //   $sql = 'SELECT Status FROM task WHERE List_Id = ' . $List_Id;;
  //   $query = $conn->prepare($sql);
  //   $query->execute();
  //   $all = $query->fetchAll();
  //   if ($status != True) {
  //     sort($all);
  //   } else {
  //     rsort($all);
  //   }
  //   var_dump($all);
  // }
  //  orderStatus();

  //   function orderTime() {
  //   $status =! $status;
  //   $conn = connection();
  //   $sql = 'SELECT Time FROM task';
  //   $query = $conn->prepare($sql);
  //   $query->execute();
  //   $all = $query->fetchAll();
  //   var_dump($all);
  //   if ($status =! True) {
  //     sort($all);
  //   } else {
  //     rsort($all);
  //   }
  // }
  //  orderTime();
	?>
    <div class="container">
    <table class="table" style="border: 1px solid black;">
  <thead>
    <tr>
        <h3 style="text-align: center;">
        <?php
        echo $_GET['Task_Name'];
        ?>
        </h3>
    </tr>
    <tr style="border-top: 1px solid black;">
      <th>Description</th>
      <th><a style="text-decoration: none;" href='indexTask.php?Task_Name=<?php echo $_GET['Task_Name']?>&List_Id=<?php echo $_GET['List_Id']?>&Time=<?php echo $_GET['Time']?>'>Time(in minutes)</a></th>
      <th><a style="text-decoration: none;" href='indexTask.php?Task_Name=<?php echo $_GET['Task_Name']?>&List_Id=<?php echo $_GET['List_Id']?>&Status=false'>Status</a></th>
      <td><a style="text-decoration: none;" href="index.php">Back</a></td>
      <th></th>
    </tr>
  </thead>   
 <tbody>
    <tr>
<?php
 //loop to show the task menu and to crud them
  foreach ($all as $row) {
?>
      <td><?php echo $row['Description'] ?> |</td>
      <td><?php echo $row['Time'] ?> |</td>
      <td><?php echo $row['Status'] ?> |</td>
      <td><a style="text-decoration: none;" href="updateTask.php?List_Id=<?php echo $row['List_Id']?>&Id=<?php echo $row['Id']?>&Description=<?php echo $row['Description']?>&Time=<?php echo $row['Time']?>&Status=<?php echo $row['Status']?>&Task_Name=<?php echo $_GET['Task_Name']?>">Update</a></td>
        <td><a style="text-decoration: none;" href="deleteTask.php?Id=<?php echo $row['Id']?>&List_Id=<?php echo $row['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>">Delete</a></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>   
    <tr>
        <td><a style="text-decoration: none;" href='createTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>'>Create</a></td> 
    </tr>  
    </div>
</body>
</html>