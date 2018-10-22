<?php
//数据库链接
define('DB_NAME','mymessages');
header('Content-Type:text/html;charset=utf-8');
$conn=mysqli_connect('localhost','root','root',DB_NAME);
if(!!@$conn){
    echo '连接成功';
}else{
    echo '连接失败'.mysqli_error();
    exit();
}
echo '</br></br>';
//mysqli_select_db($conn,'DB_NAME') or die('选择链接失败');
//echo '选择连接成功';
//echo '</br></br>';
//提取指定表内容;
$firstname = 'fred';
$lastname  = 'fox';
$name=$_POST['username'];
$email=$_POST['useremail'];
$point=$_POST['userpoint'];
//echo $name;
$query="INSERT INTO sqldemo1(name,email,point,regdate)VALUES('{$name}','{$email}','{$point}',NOW())";
mysqli_query($conn,$query) or die('提交失败'.mysqli_error($conn));
mysqli_close($conn);
echo '<script>alert("提交成功！");history.back()</script>';

?>

