<?php
// setcookie(쿠키변수, 변수에 들어갈 값, 시간) (시간 = 로그인이 유지되는 시간이라는 뜻, 초 단위로 적어야 함, 근데 시간 생략해도 됨)
setcookie("myCookie", "shin", time()+3600);
echo $_COOKIE['myCookie'];
?>

<?php
session_start();
$_SESSION['city'] = 'seoul';
$_SESSION['id'] = 'userid';
echo $_SESSION['city']." ";
echo $_SESSION['id'];
?>