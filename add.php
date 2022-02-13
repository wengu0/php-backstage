<?php
require_once('connt.php')

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>注册</title>
	<link rel="stylesheet" href="bootstrap/css/spacelab.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body background="bc.png" style=" background-repeat:no-repeat ;background-size:100% 100%;
background-attachment: fixed;">
 
 
    <div class="modal-dialog" style="margin-top: 5%;">
        <form class="modal-content" action="add_fun.php" method="post">
            <div class="modal-header">
 
                <h4 class="modal-title text-center" id="myModalLabel">注册</h4>
            </div>
            <div class="modal-body" id = "model-body">
                <div class="form-group">
                    <label>用户名</label>
                    <input type="text" name="username" class="form-control"placeholder="禁止使用特殊字符，大于3个字符" autocomplete="off">
                </div>
                <div class="form-group">
                <label>密码</label>
                    <input type="password" name="password" class="form-control" placeholder="大于6字符小于16字符" autocomplete="off">
                </div>
				<div class="form-group">
                <label>确认密码</label>Z
				<input type="password" name="password1" class="form-control" placeholder="与密码相同" autocomplete="off">
				</div>
				<div class="form-group">
                <label>真实姓名</label>
				<input type="text" name="name" class="form-control" placeholder="小于5字符" autocomplete="off">
				</div>
				<div class="form-group">
                <label>邮箱</label>
				<input type="text" name="email" class="form-control" placeholder="输入正确邮箱" autocomplete="off">
				</div>
            </div>
            <div class="modal-footer">
            <div class="form-group">
         
                <button type="button" onClick="javascript :history.back(-1);" class="btn btn-primary form-control">返回</button>
            </div>
           
                <div class="form-group">
                
                    <button type="submit" class="btn btn-primary form-control">注册</button>
                </div>
               
 
            </div>
		</form><!-- /.modal-content -->
    </div><!-- /.modal -->
 
</body>
</html>