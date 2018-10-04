
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <h2 style="text-align:center;">水仙花</h2>
</head>
<body>
<ul>
<?php
for($i=100;$i<=999;$i++){
    if((pow(intval($i/100),3)+pow(intval($i/10%10),3)+pow(intval($i%10),3))==$i){
        echo '<li>'.$i.'</li>'.'<br/>';
    }
}
?>
</ul>
</body>
</html>