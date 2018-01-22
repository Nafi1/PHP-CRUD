<?php 
include('dbconfig.php');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Page</title>
</head>
<body>
<h2> View All Inserted Data </h2>


<br>
<table border="1">
    <tr>
        <th>NAME</th>
        <th>BATCH</th>
        <th>CGPA</th>
        <th>UID</th>
    </tr>
     <?php
     $sql = "SELECT id, name, batch, cgpa, uid FROM table1";
     $result = $conn->query($sql);
     if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

        ?>
        <tr>
        <td align="center"><?php echo $row['name']; ?></td>
        <td align="center"><?php echo $row['batch']; ?></td>
        <td align="center"><?php echo $row['cgpa']; ?></td>
        <td align="center"><?php echo $row['uid']; ?></td>
        <td>
        <a href="edit.php?id=<?=$row['uid']?>">Edit</a>
        <a href="del.php?id=<?=$row['id']?>">DELETE</a></td>
        </tr>

        <?php
     }
    }
     ?>
</table>
</body>
</html> 