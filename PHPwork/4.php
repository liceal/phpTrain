
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <h2 style="text-align:center;">猴子爬山</h2>
</head>
<body>

<?php
    $arr=[0,0,1,1,2];
    for($i=5;$i<=50;$i++){
        $arr[$i]=$arr[$i-2]+$arr[$i-3]+$arr[$i-4];
    }
    echo $arr[50];
?>

</body>
</html>