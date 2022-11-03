<?php
$_b = $_GET['b'];
echo "아이디값:".$_b;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>member_join 삭제</h1>
    <form method="post" action="delete.php">
    <div class="form-floting mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        비밀번호 입력하세요<input type="password" name="upassword" class="form-control" id="example"/>  
    </div>
    <input type="hidden" name="idx" value="<?php echo $_b ?>"/>
    <button type="submit" class="btn btn-success">Delete</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </form>
</body>
</html>