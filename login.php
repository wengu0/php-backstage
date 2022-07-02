<?php
require_once('connt.php');


?>

 
 
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录</title>
	<link rel="stylesheet" href="bootstrap/css/spacelab.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="image/bc.png" style=" background-repeat:no-repeat ;background-size:100% 100%;
background-attachment: fixed;">
 
 
    <div class="modal-dialog" style="margin-top: 10%;">
        <form class="modal-content" action="test.php" method="post">
            <div class="modal-header">
 
                <h4 class="modal-title text-center" id="myModalLabel">登录</h4>
            </div>
            <div class="modal-body" id = "model-body">
                <div class="form-group">
 
                    <input type="text" name="username" class="form-control"placeholder="用户名" autocomplete="off">
                </div>
                <div class="form-group">
 
                    <input type="password" name="password" class="form-control" placeholder="密码" autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary form-control">登录</button>
                </div>
               
 
            </div>
		</form>
    </div>
 
</body>
</html>