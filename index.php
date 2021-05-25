<!DOCTYPE html>
<html>
<head>
    <title>To-do-List</title>
</head>
<body>
    <?php 
    include 'conn.php';
    $all = getData();
    // print_r($all);
    ?>

<table style="border: 1px solid black">
    <tr>
        <th>Lists</th>
    </tr>
 <?php
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><a href='indexTask.php?List_Id=<?php echo $row['Id']?>'><?php echo $row['Task_Name']?></a></td>
        <td><a href="update.php?Id=<?php echo $row['Id']?>&User=<?php echo $row['User']?>&Task_Name=<?php echo $row['Task_Name']?>">Update</a></td>
        <td><a href="delete.php?Id=<?php echo $row['Id']?>">Delete List</a></td>
    </tr>
<?php
    }
?>  
    <tr>
        <td><a href="create.php?Id=<?php echo $row['Id']?>">Create</a></td>  
    </tr>   
</body>
</html>