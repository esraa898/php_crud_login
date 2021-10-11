<?php include('const/header.php') ?>
<?php

session_start();

$sql= "SELECT * FROM `users`";
$query= mysqli_query($connection,$sql);




?>


   <table border ="1">
       <thead>
           <tr>
               <th> id</th>
               <th>  name</th>
               <th>  email</th>
               <?php if(!empty($_SESSION['user'])):?>
                <th> password</th>
               <th>  edit</th>
               <th>  delete</th>
             <?php endif;?>
           </tr>
       </thead>
       <tbody>
           <?php while($row =mysqli_fetch_assoc($query)): ?>
           <tr>
               <td> <?php echo $row['id']; ?></td>
           
               <td><?php echo $row['name']; ?></td>
           
               <td><?php echo $row['email']; ?></td>

                 <?php if(!empty($_SESSION['user'])):?>
                <td><?php echo $row['password']; ?></td>
                  <td>
                     <a href="edit.php?id=<?php echo$row['id'] ?>" > <i class="fa fa-edit"></i> </a>
                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo$row['id'] ?>"> <i class="fa fa-close"></i> </a>
                        </td>
                    </tr>
                     
                    <?php endif;?>
          <?php endwhile; ?> 

       </tbody>
   </table>
  <button  ><a href=" logout.php">log out</a></button>
   <button  ><a href=" login.php">login</a></button>
   <?php include('const/footer.php') ?>