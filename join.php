<?php
$uid=$_POST['uid'];
$upassword = $_POST['upassword'];
$uname = $_POST['uname'];
$utel = $_POST['utel'];
$uemail = $_POST['uemail'];
$sel = $_POST['sel'];

include('./db_conn.php');

$query = "insert into member_join(uid,upassword,uname,utel,uemail,ucity) values('$uid','$upassword','$uname','$utel','$uemail','$sel')";
mysqli_query($conn, $query);
echo "<script>alert('가입되었습니다')</script>";
?>
<meta http-equiv="refresh" content="0; url=http://localhost/member/join.html">