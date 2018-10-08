<meta http-equiv="Content-Type"content="text/html;charset=utf-8">
<?php
    //echo $_POST['username'];
    $fp=fopen('D:\phpstudy\PHPTutorial\WWW\1.txt','w+');
    fwrite($fp,'fwriteTemp'.'<br/>'.'next line');
    //readfile('D:\phpstudy\PHPTutorial\WWW\1.txt');
    while(!feof($fp)){
        echo fgetc($fp);
        //sleep(1);
    }
    fclose($fp);
    echo '<hr/>'
?>