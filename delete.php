<?php

$_upassword = $_POST['upassword'];
$uid=$_POST['idx'];

include('./db_conn.php');

$query = "select * from member_join where id=$uid";
$result=mysqli_query($conn, $query);
$re=mysqli_fetch_row($result);

if($re[2] == $_upassword){
    $query = "delete from member_join where id=$uid";
    mysqli_query($conn, $query);
    echo "삭제되었습니다.";
}else{
    echo "<script>alert('비밀번호 오류');history.go(-1);</script>";
}

?>
<meta http-equiv="refresh" content="0; url=http://localhost/member">