<?php
require_once('connt.php');
$result=$link->query('select* from category');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
    <meta name="viewport" content="width=device-width">
    <title>分类管理</title>
    <link rel="stylesheet" href="bootstrap/css/spacelab.min.css">
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style>

    #hanpi{
        border-radius: 5px;
		box-shadow: 2px 2px 5px rgba(0,0,0,0.3);
		border: 2px solid #ccc;
		padding: 10px;
        height: 10000px;

    }
    .list{
        list-style-type: none;
    }
  
    </style>
<div class="row">
    <div class="col-md-2" id="hanpi">
        <dav>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="image/1.png" width="50px"></dav>
        <div id="per-mes"><?php echo "你好! ".$_SESSION['username'].' ,欢迎来到分类管理!<br>' ?></div>
        <ul class='list'>
            <li><a href="index.php">用户管理</a></li>
            
            <li><a href="class.php">分类管理</a></li>
            <li><a href="user.php">个人中心</a></li>
            <li><a href="out.php">退出登录</a></li>
        </ul>
    </div>
<div class="col-md-10">
 <div id="header">
     <h2>分类管理</h2>
     </div>
     <p class="text-left">
            <button type="button" class="btn btn-sm btn-primary btn-lg" data-toggle="modal" data-target="#myModal">添加分类</button>
        </p>
       <table class="table">
          <th>ID</th>
          <th>分类</th>
	      <th>操作</th>
  
				<?php
				
	
				foreach ($result as $key => $value) {
  					foreach ($value as $k => $v) {
    					$arr[$k] = $v;
  					}
  				echo "<tr>";
                echo "<td>{$arr['id']}</td>";
				echo "<td>{$arr['title']}</td>";
				
				
				echo "<td>
							<a class='btn btn-sm btn-primary' href='javascript:del({$arr['id']})'>删除</a>
							<button type='button' class='btn btn-sm btn-primary btn-lg' onclick='showDialog(this)'>修改</button>
					  </td>";
				echo "</tr>";
  	
				}
			
			

				
				
			?></table>
  </div>

</div>

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">添加分类</h4>
            </div>
            <div class="modal-body">
        <form action="class_fun.php"method="post">
                    <label>分类</label>
                    <input type="text" name="title" class="form-control">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
                <h4 class="modal-title" id="myModalLabel">修改</h4>
            </div>
            <div class="modal-body">
        <form action="class_charge.php"method="post">
            
                    <label>分类</label>
                    <input type="hidden" name="id" id="id" class="form-control">
                    <input type="text" name="title" id="title" class="form-control">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="submit" class="btn btn-primary">提交</button>
            </div>
        </form>
        </div>
    </div>
</div>

        <script type="text/javascript">
            function del(id) {
                if (confirm("确定删除该用户吗？")) {
                    window.location = "dele_class.php?id=" + id;
                }
            }
    function showDialog(obj){
	//点击更新按钮后展示模态框

	 $('#myModal2').modal('show');
	 //获取当前行的所有列
	 var tds= $(obj).parent().parent().find('td');

     var id = $(tds.eq(0)).text();
     var title = $(tds.eq(1)).text()
     //获取值，传入模态框
     $('#title').val(title);
     $('#id').val(id);
}
        </script>

   
    
    </div>
            </div>
        </div>
    </div>
</body>
 
</html>