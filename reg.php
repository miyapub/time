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
        $msg= "该用户已经存在";
    }else{
        $msg= "没有该用户可以注册";
        $sql="INSERT INTO `users` (`id`, `name`, `pass`, `time`) VALUES (NULL, '$name', '$pass', CURRENT_TIMESTAMP); ";
        $result = mysql_query($sql,$conn);
        $id=mysql_insert_id($conn);
        $msg= "注册成功请登陆<a href='login.php'>登陆</a>";
    }
    //
}
?>
<form action="" method="post">
    <p><?=$msg?></p>
    <input type="text" name="name">
    <input type="text" name="pass">
    <input type="submit" value="注册">
</form>
