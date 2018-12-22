<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/admin_header.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/super_admin_header.php'); ?>
<?php









 ?>

 <form role="form"  action="edit.php" method="post" enctype="multipart/form-data">

     <input type="hidden" name="id" value="<?php echo $admin->getId() ?>" />
     <input type="hidden" name="hashed_password" value="<?php echo $admin->getHashedPassword() ?>"/>
     <input type="hidden" name="is_super" value="<?php echo $admin->getIsSuper() ?>" />


     <div class="row">
       <div class="form-group col-lg-4">
         <label for="code">Admin Name:</label>
         <input type="text" name="name" value="<?php echo $admin->getName() ?>" class="form-control" />
       </div>
     </div>
     <div class="row">
       <div class="form-group col-lg-4">
         <label for="code">Email:</label>
         <input type="text" name="email "="<?php echo $admin->getEmail() ?>" class="form-control" />
       </div>
     </div>
     <div class="row">
       <div class="form-group col-lg-4">
         <label for="code">username:</label>
         <input type="text" name="username"="<?php echo $admin->getUsername() ?>" class="form-control" />
       </div>
     </div>
     <div class="row">
       <div class="form-group col-lg-4">
         <label for="code">Password:</label>
         <input type="text" name="passwoed"="<?php echo $admin->getUsername() ?>" class="form-control" />
       </div>
     </div>
     <div class="row">
       <div class="form-group col-lg-4">
         <label for="code">username:</label>
         <input type="text" name="$hashed_passwordPassword"="<?php echo $admin->getHashedPassword() ?>" class="form-control" />
       </div>
     </div>
     <div class="row">
         <div class="form-group col-lg-1 ">
           <input class="btn btn-primary"  type="submit" name="submit" value="Edit">
         </div>
       </div>



 </form>
 </div>


  </body>
</html>
