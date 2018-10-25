<?php
//echo '异步测试成功，传送门已开启!</br>';
require('6-1link.php');
//echo '连接成功！</br>';
//$sql1='insert into sqldemo1(name,point,regdate) values("张三",88,now())';
//插入数据
if(!empty($_POST['name'])&&!empty($_POST['point'])){
    echo '<input type="button" value="返回" onclick="location.replace(\'6-1.html\')"><br/>';
    $name=$_POST['name'];
    $point=$_POST['point'];
    $sql1="insert into sqldemo1(name,point,regdate) values('{$name}','{$point}',now())";
    mysqli_query($link,$sql1) or die('数据插入失败'.mysqli_error($link));
    echo '数据插入成功!</br>';
}else if (!empty($_POST['Xname'])&&!empty($_POST['Xpoint'])){
    echo '<input type="button" value="返回" onclick="location.replace(\'6-1.html\')"><br/>';
    $id=$_POST['XID'];
    $name=$_POST['Xname'];
    $point=$_POST['Xpoint'];
    $sql1="update sqldemo1 set name='$name',point='$point' where id='$id'";
    mysqli_query($link,$sql1) or die('数据修改失败'.mysqli_error($link));
    echo '数据修改成功!</br>';
} else{
    echo "<script>location.replace('6-1.html')</script>";
}
//读取输出数据
$sql2='select id,name,point,regdate from sqldemo1';
$query1=mysqli_query($link,$sql2) or die('数据访问失败'.mysqli_error($link));
$data=array();
while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC)){
    $data[]=$row;
}
function Out(){
    global $data;
    foreach ($data as $key=>$value){
        echo $value['id'].'</br>'.$value['name'].'</br>'.$value['point'].'</br>'.$value['regdate'].'<br/>';
        echo '<a href="6-1_1.php?action=delete&id='.$value['id'].'">删除</a><br/>';
        echo '<a href="6-1bianji.php?action=bianji&id='.$value['id'].'&name='.$value['name'].'&point='.$value['point'].'">编辑</a>';
        echo '<hr/>';
    }
}
Out();
//include ('6-1_1.php');
//charu($data,$link);
//echo "<script>location.replace('6-1.html')</script>";
mysqli_close($link);
?>
