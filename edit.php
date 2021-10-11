<?php include('const/header.php') ?>

<?php



$id=$_GET['id'];



if(isset($id)){

   
    $sql= "SELECT *  FROM `users` WHERE `id`='$id'";
    $query= mysqli_query($connection,$sql);
    $row=  mysqli_fetch_assoc($query);

}

?>



    <form action="update.php" method="post">
        <input type="text"  name="name" value= "<?=$row['name'];?>">
        <input type="text" name="email" value= "<?=$row['email'];?>">
        <input type="text" name="password" value= "<?=$row['password'];?>">
        <input type="hidden"  value="<?php echo $id;?>" name="id">
        <input type="submit" name="update" value="update">
    </form>


<?php include('const/footer.php') ?>