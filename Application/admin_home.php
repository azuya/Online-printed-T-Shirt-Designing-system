<?php
require('no_redirect.php');
AdminOff(); //chek if no session is created
require('dbconnect.php'); // connect db , db_name:tds_db

?>
<?php
if(isset($_SESSION['message']))
{
  echo "<div id='error_msg'>".$_SESSION['message']."</div>";
  unset($_SESSION['message']);
}
?>

<?php require('header.php'); ?>

<body>
  <div class="welcome">  Admin Account </br><i>Hi</i><b><i> <?php  if(isset($_SESSION['username'])){echo $_SESSION['username'];}else{ echo 'Session not set';}?>.! </li></b>
  </br>
    <a href="admin_logout.php"> <button class = "btn waves-effect waves-teal">Log out</button></a>

  </div>

</body>
</html>

<?php require('prevent_go_back_after_logout.php'); ?>

<?php require('footer.php'); ?>
