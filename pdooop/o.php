<?php
	require_once('dbconnect.php');
		if(isset($_GET['id'])){
			$id=$_GET['id'];
			try{
				$stmt=$conn->prepare("DELETE FROM lict WHERE id=?");
				$stmt->execute(array($id));
				header('Location:update.php');
			}catch(PDOException $ex){
				echo $ex->getMessage();
			}
		}
?>