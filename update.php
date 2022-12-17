<?php
include('./db_conn.php');
//디비 접속
//select 쿼리 날려서
$uid=$_POST['a'];
$upassword = $_POST['upassword'];
$uname = $_POST['uname'];
$utel = $_POST['utel'];
$uemail = $_POST['uemail'];
$sel = $_POST['sel'];
$query = "select * from member_join where id=$uid"; //or "select password from bbs where id=$w_idx";
//mysqli_query()
$result = mysqli_query($conn, $query);
$re = mysqli_fetch_row($result);
//password가 들어있는 배열 방을 출력
// echo "password".$re[3];



if($re[2] == $upassword){
    $query = "update member_join set id = '$uid',
            upassword = '$upassword',uname = '$uname',
            utel = '$utel',uemail = '$uemail',
            ucity = '$sel'
          where id= $uid";

mysqli_query($conn,$query);
echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류'); history.go(-1);</script>";
}



?>