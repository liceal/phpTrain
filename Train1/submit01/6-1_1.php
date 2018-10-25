<?php
//输出数据
require ('6-1link.php');
function charu($data,$link){
    foreach ( $data as $key=>$value) {
        $name=$value['name'];
        $query="delect from sqldemo1 where name='$name'";
        echo '<tr>
        <td>'.$value['id'].'</td><br/>
        <td>'.$value['name'].'</td><br/>
        <td>'.$value['point'].'</td><br/>
        <td>'.$value['regdate'].'</td><br/>
        <a href="6-1.php?action=delete&id='.$value['id'].'">删除</a><br/>
        <hr/>
        </tr>';
    }
}
//删除数据
$action=$_GET;
$query="delete from sqldemo1 where id='{$action['id']}'";
if($action['action']=="delete"){
    mysqli_query($link,$query) or die('删除失败'.mysqli_error($link));
    //echo '删除成功';
    //require ('6-1.html');
    header('location:6-1.php');
}
?>
