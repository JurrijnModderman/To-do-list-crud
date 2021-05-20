<!DOCTYPE html>
<html>
<head>
    <title>To-do-List</title>
</head>
<body>
    <?php 
    include 'conn.php';
    $all = getData();
    ?>

<table style="border: 1px solid black">
    <tr>
        <th>Lists</th>
    </tr>
 <?php
 var_dump($all);
  foreach ($all as $row) {
 ?>   
    <tr>
        <td><a href="indexTask.php?Id=<?php echo $row['Id']?>"><?php echo $row['Task_Name']?></a></td>
    </tr>
<?php
    }
?>  
    <tr>
        <td><a href="create.php?Id=<?php echo $row['Id']?>">Create</a></td>  
    </tr>   
</body>
</html>