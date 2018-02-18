<?php

function AdminOn() //check if admin is logged in
{
  session_start();
  if(isset($_SESSION['username']))
  {
    header('Location:admin_home.php');
  }
}

function AdminOff() //check if admin is logged out ,si pena session ki fin create ...li redirect lor log in page

{
  session_start();
  if(!isset($_SESSION['username']))
  {
    header('Location:admin.php');
  }
}


// if(isset($_SESSION['last_time']) && (time() - $_SESSION['last_time'] > 1800))
// {
//   header('Location:logout.php');
// }




 ?>
