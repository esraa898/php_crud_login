<?php include('const/header.php') ?>


<form action="update.php" method="post">
        <input type="text"  name="name" value= "<?=$row['name'];?>">
        <input type="text" name="email" value= "<?=$row['email'];?>">
        <input type="text" name="password" value= "<?=$row['password'];?>">
        <input type="submit" name="update" value="update">
    </form>


    <?php include('const/footer.php') ?>