<?
require "conn.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    
}
if($method==='POST'){
    $name=mysql_real_escape_string($_POST['name']);
    $pass=mysql_real_escape_string($_POST['pass']);
    //
    $sql="SELECT * FROM `users` where `name`='$name'";
    $result = mysql_query($sql,$conn);
    $num_rows = mysql_num_rows($result);
    if($num_rows===1){
        $row = mysql_fetch_array($result);
        if($row['pass']===$pass){
            $_SESSION['user_id']=$row['id'];
            $_SESSION['user_name']=$row['name'];
            header("location: index.php");
            exit;
        }else{
            $msg="密码错误";
        }
    }else{
        $msg= "没有该用户";
    }
    //
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>柳比耶夫时间管理社区</title>
</head>
<body>
    <form action="" method="post">
        <p><?=$msg?></p>
        <input type="text" name="name">
        <input type="text" name="pass">
        <input type="submit" value="登录">
        <a href="reg.php">注册</a>
    </form>
</body>
</html>

