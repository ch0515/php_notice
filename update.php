<?php
include('./db_conn.php');
//디비 접속
//select 쿼리 날려서
$uid=$_POST['uid'];
$upassword = $_POST['upassword'];
$uname = $_POST['uname'];
$utel = $_POST['utel'];
$uemail = $_POST['uemail'];
$sel = $_POST['sel'];
$query = "select * from member_join where id=$w_idx"; //or "select password from bbs where id=$w_idx";
//mysqli_query()
$result = mysqli_query($conn, $query);
$re = mysqli_fetch_row($result);
//password가 들어있는 배열 방을 출력
// echo "password".$re[3];

//2. 사용자가 입력한 패스워드 출력
// echo "사용자 입력 password".$w_password;

//$re[3] 과 $_password가 같으면 수정
if($re[3] == $w_password){
    $query = "update bbs set id = '$uid',password = '$upassword',uname = '$uname',tel = '$utel' 
          where id= $w_idx";

mysqli_query($conn,$query);
echo "수정되었습니다";
}else{
    echo "<script>alert('비밀번호 오류'); history.go(-1);</script>";
}



?>