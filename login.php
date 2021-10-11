<?php include('const/header.php') ?>

<?php  
session_start();


if(isset($_POST['login'])){

$email=$_POST['email'];

$password=$_POST['password'];

$sql= "SELECT * FROM `users` WHERE `email`='$email' && `password`='$password'";
$query= mysqli_query($connection,$sql);

$result=mysqli_num_rows($query);

if($result == 1){
    $_SESSION['user']=$email;
    header("location:index.php");

}else{
    echo "email &password not valid";
}






}



?>


    <form action="login.php" method="post">
        <input type="text" name="email">
        <input type="text" name="password">
        <input type="submit" name="login" value="login">
    </form>
    <?php include('const/footer.php') ?>