<?php include('const/header.php') ?>
<?php



$id=$_GET['id'];

if(isset($id)){
$sql= "DELETE FROM `users` WHERE `id`='$id'";
$query= mysqli_query($connection,$sql);
}
if(mysqli_affected_rows($connection) > 0){
    header("location:index.php");
}else{
    echo "user not deleted";
}
?>
<?php include('const/footer.php') ?>