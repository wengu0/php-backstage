<?php
require_once('connt.php');
  $email=$_POST['email'];
  $username=$_POST['username'];
  $name = $_POST['name'];
  $password=$_POST['password'];
  $password1=$_POST['password1'];
  // 开启会话
  session_start();
 
  try   {
    // 调用函数检查表单是否填写
      if (!filled_out($_POST)) {
        echo "<script>alert('表单没有填写完整')location='add.php'</script>";
      }
      //过滤用户名
      if(!preg_match("/^[A-Za-z0-9_]{3,16}+$/u",$username)){
        echo "<script>alert('用户名包含非法字符或长度错误，请重新输入！');location='add.php'</script>";
      }
      // 过滤密码
      if ($password !== $password1) {
        echo "<script>alert('两次输入的密码不一致，请重新输入！');location='add.php'</script>";
      }
      if(!preg_match("/^[A-Za-z0-9_]{6,16}+$/u",$password)){
        echo "<script>alert('密码包含非法字符或长度错误，请重新输入！');location='add.php'</script>";
      }
      if(!preg_match("/^[A-Za-z0-9_]{6,16}+$/u",$password1)){
        echo "<script>alert('密码包含非法字符或长度错误，请重新输入！');location='add.php'</script>";
      }
      // 过滤邮件地址
      if (!valid_email($email)) {
        echo "<script>alert('这不是一个有效的邮件地址，请重新填写！');location='add.php'</script>";
      }

      // 调用自定义函数向数据库插入注册信息
      register($username, $email, $password,$name);
      // 保存用户会话信息
      $_SESSION['valid_user'] = $username;


      echo "<script>alert('注册成功');location='login.php'</script>";
    }
    catch (Exception $e) {
         echo "<script>alert('数据错误');location='add.php'</script>";
         exit;
      }
?>