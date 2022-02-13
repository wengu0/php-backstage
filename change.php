<?php
//连接数据库
require_once('connt.php');
//获取id
$id = $_GET['id'];
//编写查询sql语句
$sql = "SELECT * FROM `user` WHERE `id`=$id";
//执行查询操作、处理结果集
$result = mysqli_query($link, $sql);
if (!$result) {
    exit('查询sql语句执行失败。错误信息：'.mysqli_error($link));  // 获取错误信息
}
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);

//将二维数数组转化为一维数组
foreach ($data as $key => $value) {
  foreach ($value as $k => $v) {
    $arr[$k]=$v;
  }
}

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
<body background="1.JPG" style=" background-repeat:no-repeat ;background-size:100% 100%;
background-attachment: fixed;">
 
 
    <div class="modal-dialog" style="margin-top: 5%;">
        <form class="modal-content" action="change_fun.php" method="post">
            <div class="modal-header">
 
                <h4 class="modal-title text-center" id="myModalLabel">修改</h4>
            </div>
            <div class="modal-body" id = "model-body">
            <div class="form-group">
                    <label>ID</label>
                    <input type="text" name="id" class="form-control"autocomplete="off" readonly="readonly" value="<?php echo $arr['id']?>">
                </div>
                <div class="form-group">
                    <label>用户名</label>
                    <input type="text" name="username" class="form-control"autocomplete="off"  value="<?php echo $arr['username']?>">
                </div>
                <div class="form-group">
                <label>密码</label>
                    <input type="password" name="password" class="form-control" autocomplete="off"  value="<?php echo $arr['password']?>">
                </div>
				
				<div class="form-group">
                <label>真实姓名</label>
				<input type="text" name="name" class="form-control" autocomplete="off"  value="<?php echo $arr['name']?>">
				</div>
				<div class="form-group">
                <label>邮箱</label>
				<input type="text" name="email" class="form-control" autocomplete="off"  value="<?php echo $arr['email']?>">
				</div>
            </div>
            <div class="modal-footer">
            <div class="form-group">
         
                <button type="button" onClick="javascript :history.back(-1);" class="btn btn-primary form-control">返回</button>
            </div>
           
                <div class="form-group">
                
                    <button type="submit" class="btn btn-primary form-control">提交</button>
                </div>
               
 
            </div>
		</form><!-- /.modal-content -->
    </div><!-- /.modal -->
 
</body>
</html>