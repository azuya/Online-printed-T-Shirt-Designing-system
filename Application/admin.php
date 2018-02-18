<?php
require('no_redirect.php');
AdminOn(); // check if a session is already created
require('dbconnect.php');

?>

<?php require('header.php'); ?>

<body>

<div class="container" >
  <div class = "row">

    <center><img src="img/admin_logo.png" class="admin_logo"></center>

    <form class = "col s12" action="" method="POST">

      <div class = "row">

        <div class = "input-field col s6">
          <i class = "material-icons prefix">account_circle</i>
          <input placeholder = "Username"  name="user"   type = "text" class = "active validate" required />
          <label for = "name">Username</label>
        </div>

      </div>

      <div class = "row">

        <div class = "input-field col s6">
          <i class = "material-icons prefix">lock</i>

          <label for = "password">Password</label>
          <input id = "password" type = "password" placeholder = "Password" name="pass" class = "validate" required />
        </div>
      </div>

      <div class = "row">

        <div class = "input-field col s6">
          <button class="btn waves-effect waves-light" type="submit" name="submit">Login
            <i class="material-icons right">send</i>
          </center>

        </div>
      </div>

    </form>
  </div>
</div>

</body>

<?php  require ('admin_login_process.php'); ?>

<?php require('footer.php'); ?>
</html>
