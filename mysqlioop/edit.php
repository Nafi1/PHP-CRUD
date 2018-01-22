<?php 
include'dbconfig.php';
if(isset($_POST['edited_submit'])){ 
    $sql="UPDATE table1 SET name = '".$_POST['edited_name']."',
                            batch = '".$_POST['edited_batch']."',
                            cgpa = '".$_POST['edited_cgpa']."',
                            uid = '".$_POST['edited_uid']."'
                            WHERE id='".$_POST['hid']."'
                            ";
                            if($conn->query($sql)){
                                header('location:view.php');
                            }
                            else{
                                echo "Error ".$conn->error;
                            }

                            } 
$id=$_GET['id'];                                                  
$name = "";
$batch = "";
$cgpa = "";
$uid = "";

    $sql = "SELECT id, name, batch, cgpa, uid FROM table1 where uid='$id'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
    $row=mysqli_fetch_all($result,MYSQLI_ASSOC);//mysqli_fetch_assoc();
$row =$row[0];

    $id=$row['id'];
    $name=$row['name'];
    $batch=$row['batch'];
    $cgpa=$row['cgpa'];
    $uid=$row['uid'];
    }
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>View Page</title>
</head>
<body>
<h2>Edit</h2>
<form action="" method="post">
<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="edited_name" required="required"  size="20" maxlength="20" value="<?=$name;?>" ></td>
        </tr>
        <tr>
        <td>Batch:</td>
        <td><input type=number name="edited_batch" required="required" min="1" max="22" value="<?=$batch;?>" /></td>
        </tr>
        <tr>
        <td>C.G.P.A:</td>
        <td><input type=number name="edited_cgpa" step=0.01 required="required" min="1" max="4" value="<?=$cgpa;?>""  /></td>
        </tr>
        <tr>
        <td>UID:</td>
        <td><input type="text" name="edited_uid" required="required" size="14" maxlength="14" value="<?=$uid;?>" ></td>
        </tr>
        <tr>
        <td>
        <input type="hidden" name="hid" value="<?=$id?>"/>
        </td>
        <td>
        <input type="submit"  name="edited_submit"/>
        </td>
        </tr>
</table>
</form>
</body>
</html>  