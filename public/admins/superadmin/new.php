<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/admin_header.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/super_admin_header.php'); ?>


<?php

  $args['name'] = "Mohammed Saudi";
  $args['email'] = "msaudi.cse@gmail.com";
  $args['username'] = "msaudi";
  $password = 'IUR123456';
  $args['hashed_password'] = password_hash($password, PASSWORD_BCRYPT);
  $args['is_super'] = 0;

  $admin = new Admin($args);
  $result = $admin->create();

  echo $result;
  //var_dump($args);*/
?>








  </body>
</html>
