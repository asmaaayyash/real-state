<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/admin_header.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/super_admin_header.php'); ?>
<<?php
$args['id'] = "5";
$admin = new Admin($args);

$result = $admin->delete();

if (!$result) {
  echo "error inserting your recod ";
}else {
  echo "Your record inserted successfully";
}





 ?>
