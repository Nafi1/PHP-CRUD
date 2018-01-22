<?php 
include'dbconfig.php';
$sql="DELETE FROM table1 WHERE id = ".$_GET['id'];
if($conn->query($sql)){
	echo "Record deleted successfully";
	header('Location:view.php');
}
else{
	 echo "Error deleting record: " . $conn->error;
	}
?>