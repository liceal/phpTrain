
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <h2 style="text-align:center;">1000以内的完数</h2>
</head>
<body>

    <?php
        for($i=1;$i<=1000;$i++){
            $sum=0;
            for($j=1;$j<$i;$j++){
                if (intval($i/$j)==$i/$j){
                    $sum+=$j;
                }
            }
            if($sum==$i)
                echo $i.'<br/>';
        }
    ?>

</body>
</html>