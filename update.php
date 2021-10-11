<?php include('const/header.php') ?>

<?php






if(isset($_POST['update'])){
 $id=$_POST['id'];
 $name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$sql="UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password'WHERE `id`='$id'";

$result_dp=  mysqli_query($connection,$sql);
header("location:index.php");

}
?>





<?php include('const/footer.php') ?>