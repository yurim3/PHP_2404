<?php
//uid, upss의 값을 가져오기

$a="kim";
$b="1111";

$_userid=$_POST['uid'];
$_userpass=$_POST['upass'];

if($_userid!=$a || $_userpass!=$b){
    echo "잘못입력";
}
else{
    setcookie('userid',$_userid,time()+3600);
    setcookie('userpass',$_userpass,time()+3600); 
}   