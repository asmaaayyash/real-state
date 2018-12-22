<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/admin_header.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/super_admin_header.php'); ?>

<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">Insert New Admin</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Provide all information below</p>

<?php

  $args['name'] = "fatma'' deif";
  $args['email'] = "fatma@gmail.com";
  $args['username'] = "fatmade ";
  $password = '123456';
  $args['hashed_password'] = password_hash($password, PASSWORD_BCRYPT);
  $args['is_super'] = 0;

  $admin = new Admin($args);
  $result = $admin->create();

  if (!$result) {
    echo "error inserting your recod ";
  }else {
    echo "Your record inserted successfully";
  }
  var_dump($args);
?>


</div>





  </body>
</html>
