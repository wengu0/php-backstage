<?php
require_once('connt.php');
$title = $_POST['title'];
$id = $_POST['id'];
echo $id;

if((!isset($title))||($title=='')){
    echo"<script>alert('没有数据');location='class.php'</script>";
   }
else{  
    $result = $link->query("select * from category where title='".$title."'");
       
    if ($result->num_rows>0) {
        echo "<script>alert('已存在');location='class.php'</script>";
    }else{
        $result = $link->query("update category set title='{$title}' where id ='{$id}'");
        header('location:class.php');
}
} 
?>