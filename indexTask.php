<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<?php 
	include 'conn.php';
	$all = getDataTasks();
	?>
<!-- <table style="border: 1px solid black">
    <tr>
        <th>Description | </th>
        <th>Time | </th>
        <th>Status | </th>
        <td><a href="index.php">Back</a></td>
    </tr> -->
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
      <th scope="col">Description</th>
      <th scope="col">Time</th>
      <th scope="col">Status</th>
      <td><a href="index.php">Back</a></td>
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
      <td><a href="updateTask.php?List_Id=<?php echo $row['List_Id']?>&Id=<?php echo $row['Id']?>&Description=<?php echo $row['Description']?>&Time=<?php echo $row['Time']?>&Status=<?php echo $row['Status']?>&Task_Name=<?php echo $_GET['Task_Name']?>">Update</a></td>
        <td><a href="deleteTask.php?Id=<?php echo $row['Id']?>&List_Id=<?php echo $row['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>">Delete</a></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
    <!-- <tr>
        <td><?php echo $row['Description'] ?> |</td>
        <td><?php echo $row['Time'] ?> |</td>
        <td><?php echo $row['Status'] ?> |</td>
		<td><a href="updateTask.php?List_Id=<?php echo $row['List_Id']?>&Id=<?php echo $row['Id']?>&Description=<?php echo $row['Description']?>&Time=<?php echo $row['Time']?>&Status=<?php echo $row['Status']?>">Update</a></td>
		<td><a href="deleteTask.php?Id=<?php echo $row['Id']?>&List_Id=<?php echo $row['List_Id']?>">Delete</a></td>
    </tr> -->     
    <tr>
        <td><a href='createTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>'>Create</a></td> 
    </tr>  
    </div>
</body>
</html>