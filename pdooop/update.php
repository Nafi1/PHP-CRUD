<?php
include 'dbconnect.php';
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
		<th>MAIL</th>
		<th>PASSWORD</th>
		<th>ACTION</th>
	</tr>
	<?php
	$stmt=$conn->prepare(" SELECT * FROM lict ORDER BY id ASC");
	$stmt->execute();
	$results=$stmt->fetchAll();
	foreach($results as $row){
?>
<tr>
		<td><?=$row['name'];?></td>
		<td><?=$row['mail'];?></td>
		<td><?=$row['pass'];?></td>
		<td>
		<a href="edit.php?id=<?=$row['id']?>">Edit</a> |
		<a href="o.php?id=<?=$row['id']?>">Delete</a>
	</tr>

<?php
	}
?>
</table>
</body>
</html>