<?php


if(isset($_POST["submit"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {

    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");
    $numrows=mysqli_num_rows($query);

    if($numrows!=0)
    {
    while($row=mysqli_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];

    }

    if($user == $dbusername && $pass == $dbpassword)
    {
    session_start();
    $_SESSION['username']=$user;

    /* Redirect browser */
    header("Location: admin_home.php");
    }
    } else {
    echo "Invalid username or password!";
    }

} else {
    echo "All fields are required!";
}
}
?>
