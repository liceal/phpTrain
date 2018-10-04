
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <h2 style="text-align:center;">猴子吃桃</h2>
</head>
<body>
<?php
$sum=1;
for($i=1;$i<10;$i++){
    $sum=($sum+1)*2;
    echo var_dump($sum).'<br/>';
}
echo $sum;
?>
</body>
</html>