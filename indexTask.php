<!DOCTYPE html>
<html>
<head>
	<title>To-do-List</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<?php
	include 'conn.php';
  // $isOrder;
  // function sortArray($order, $table) {
  //   if (isset($_GET[$order])) {
  //     $isOrder = filter_var($_GET[$order], FILTER_VALIDATE_BOOLEAN);
  //     $isOrder = !$isOrder;
  //     $all = getDataTasks($table, 1);
  //     return $all;
  //   } else {
  //     $isOrder = true;
  //     $all = getDataTasks($table, 0);
  //     return $all;
  //   }
  // }
  // $all = sortArray('ASC ', 'Time ');
  if (isset($_GET['ASC'])) {
    // filter(zorgt ervoor dat de var kan veranderen, filter validate boolean (maakt er een boolean van))
    $isASC = filter_var($_GET['ASC'], FILTER_VALIDATE_BOOLEAN) ;
    $isASC = !$isASC;
    $all = getDataTasks("Time ", 1);
  } else {
    $isASC = true;
    $all = getDataTasks("Time ", 0);
  }
  if (isset($_GET['DESC'])) {
    $isDESC = filter_var($_GET['DESC'], FILTER_VALIDATE_BOOLEAN) ;
    $isDESC = !$isDESC;
  } else {
    $isDESC = true;
  }
  if ($isDESC) {
    $all = getDataTasks("Status " , 0);
  } else {
    $all = getDataTasks("Status ", 1);
  }
  
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
      <th><a style="text-decoration: none;" href='indexTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>&DESC=<?php echo $isDESC ? "true" : "false"?>&ASC=<?php echo $isASC ? "true" : "false"?>'>Time(in minutes)</a></th>
      <th><a style="text-decoration: none;" href='indexTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>&ASC=<?php echo $isASC ? "true" : "false"?>&DESC=<?php echo $isDESC ? "true" : "false"?>'>Status</a></th>
      <!-- <td><a style="text-decoration: none;" href='indexTask.php?List_Id=<?php echo $_GET['List_Id']?>&Task_Name=<?php echo $_GET['Task_Name']?>&ASC=<?php echo $isASC ? "true" : "false"?>'>Sort</a></td> -->
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
      <td><?php echo $row['Description'] ?></td>
      <td><?php echo $row['Time'] ?></td>
      <td><?php echo $row['Status'] ?></td>
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