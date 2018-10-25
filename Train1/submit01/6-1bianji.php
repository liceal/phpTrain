<html>
<head>

</head>
<body>
<?php
require ('6-1link.php');
$action=$_GET;
if ($action['action']=="bianji"){
?>
    <form method="post" action="6-1.php">
        <input type="hidden" name="XID" value="<?php echo $action['id']?>">
        姓名:<input type="text" name="Xname" value="<?php echo $action['name']?>"/><br/>
        成绩:<input type="text" name="Xpoint" value="<?php echo $action['point']?>"/><br/>
        <input type="submit" value="提交">
    </form>
<?php }?>
</body>
</html>
