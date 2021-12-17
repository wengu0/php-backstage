<?php
require_once('connt.php');
session_start();

$result=$link->query("select* from user where username like '{$_SESSION["username"]}'");
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width">
    <title>用户管理</title>
    <link rel="stylesheet" href="bootstrap/css/spacelab.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>

    /* div{
        border-radius: 5px;
		box-shadow: 1px 2px 5px rgba(0,0,0,0.3);
		border: 1px solid #ccc;
		padding: 5px;   

    } */
  
    </style>
<div class="row">
    <div class="col-md-2">
        <h3>记账后台管理系统</h1>
        <div id="per-mes"><?php echo "你好! ".$_SESSION['username'].' ,欢迎来到个人中心!<br>' ?></div>
        <ul>
            <li><a href="index.php">用户管理</a></li>
            
            <li><a href="class.php">分类管理</a></li>
            <li><a href="user.php">个人中心</a></li>
            <li><a href="out.php">退出登录</a></li>
        </ul>
    </div>
<div class="col-md-10">
 <div id="header">
     <h2>个人中心</h2>
       <table class="table">
          <th>ID</th>
          <th>用户名</th>
	        <th>真实姓名</th>
	        <th>邮箱</th>
	        <th>密码</th>
  
				<?php
				
	
				foreach ($result as $key => $value) {
  					foreach ($value as $k => $v) {
    					$arr[$k] = $v;
  					}
  				echo "<tr>";
                echo "<td>{$arr['id']}</td>";
				echo "<td>{$arr['username']}</td>";
				echo "<td>{$arr['name']}</td>";
				echo "<td>{$arr['email']}</td>";
				echo "<td>{$arr['password']}</td>";
				echo "</tr>";
  	
				}
			
			

				
				
			?></table></div>
   </div>
 </div>

</div>

</div>

        <script type="text/javascript">
            function del(id) {
                if (confirm("确定删除该用户吗？")) {
                    window.location = "delete.php?id=" + id;
                }
            }
            function add_info()
    {
        var form = document.getElementById('updateform');
        form.submit();
        $("#exampleModal").on("hidden.bs.modal", function() {
            $(this).removeData("bs.modal");
        });
 
    }
        </script>
</nav>
   
    
    </div>
            </div>
        </div>
    </div>
</body>
 
</html>

