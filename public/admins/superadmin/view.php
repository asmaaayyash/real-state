<?php require_once('../../../private/initialize.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/admin_header.php'); ?>
<?php require_once(PRIVATE_PATH . '/includes/super_admin_header.php'); ?>

<div class="container">
  <a href="index.php">Admin details</a>
</br>

<table class="table">
  <?php

  $admins = Admin::find_by_id($_GET['id']);

  echo "<h3> ID: {$admin->id()}</h3>";

  echo "<h3> Name: {$admin->name()}</h3>";

  echo "<h3> Email: {$admin->email()}</h3>";

  echo "<h3> Username: {$admin->username()}</h3>";

  echo "<h3> Hashed password: {$admin->hashed_password()}</h3>";

  echo "<h3> Created at: {$admin->Created_at()}</h3>";

  echo "<h3> Updated at: {$admin->Updated_at()}</h3>";

  echo "<h3> Is super: {$admin->is_super()}</h3>";



  ?>
  </body>
</html>
