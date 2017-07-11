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
<form action="" method="post">
    <p><?=$msg?></p>
    <input type="text" name="name">
    <input type="text" name="pass">
    <input type="submit" value="登录">
    <a href="reg.php">注册</a>
</form>
