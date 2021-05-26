<!DOCTYPE html>
<html>
<head>
    <title>To-do-List</title>
</head>
<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <?php 
    include 'conn.php';
    $all = getData();
    ?>
<div class="container">
    <table class="table" style="border: 1px solid black;">
  <thead>
    <tr>
        <h3 style="text-align: center;">Lists</h3>
    </tr>
 <?php
 //loop to show all listnames and to crud them
  foreach ($all as $row) {
 ?>   
    <tr style="border: 1px solid black;">
        <td><a style="text-decoration: none;" href='indexTask.php?List_Id=<?php echo $row['Id']?>&Task_Name=<?php echo $row['Task_Name']?>'><?php echo $row['Task_Name']?></a></td>
        <td><a style="text-decoration: none;" href="update.php?Id=<?php echo $row['Id']?>&User=<?php echo $row['User']?>&Task_Name=<?php echo $row['Task_Name']?>">Update</a></td>
        <td><a style="text-decoration: none;" href="delete.php?Id=<?php echo $row['Id']?>">Delete List</a></td>
    </tr>
<?php
    }
?>  
</tbody>
</table>   
    <tr>
        <td><a style="text-decoration: none;" href="create.php?Id=<?php echo $row['Id']?>">Create</a></td>  
    </tr>  
    </div> 
</body>
</html>