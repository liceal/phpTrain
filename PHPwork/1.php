
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <h2 style="text-align:center;">九九乘法表</h2>
</head>
<body>
    <?php
        for($i=1;$i<=9;$i++){
            if($i%2==1){
                echo '<span style="background:#ccc">';
            }else{
                echo '<span style="background: white">';
            }
            for($j=1;$j<=$i;$j++){
                echo $i.'×'.$j.'='.$i*$j.' ';
            }
            echo '</span>'.'<br/>';
        }
    ?>
</body>
</html>
