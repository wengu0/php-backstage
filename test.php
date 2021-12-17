<?php
require_once('connt.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$sql="select id,username,password from user where username='$username' AND password='$password';";
$result=mysqli_query($link,$sql);
$row=mysqli_num_rows($result);

if (!$result) {
    echo"<script>alert('登陆失败，用户名或密码错误');location='login.php'</script>";
}
if ($result->num_rows>0) {
    $_SESSION['username'] = $username;
    $unname = $username;
    $_SESSION['islogin'] = 1;
    header('Location:index.php');
} else {
    echo"<script>alert('登陆失败，用户名或密码错误');location='login.php'</script>";
}

?>