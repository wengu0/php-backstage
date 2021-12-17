<?php
require_once('connt.php');
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$email = $_POST['email'];
//替换修改的数据
mysqli_query($link,"update user set username='$username',password='$password',name='$name',email='$email' where id='$id'");
//回到index.php
header('Location:index.php');
?>