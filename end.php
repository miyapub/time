<?
require "conn.php";
require "authorize.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    
}
if($method==='POST'){
    $time_id=mysql_real_escape_string($_POST['time_id']);
    $class_id=mysql_real_escape_string($_POST['class_id']);
    $doing=mysql_real_escape_string($_POST['doing']);
    $address=mysql_real_escape_string($_POST['address']);
    $who=mysql_real_escape_string($_POST['who']);
    $sql="UPDATE `times` SET `end` = now() ,`class_id`='$class_id',`user_id`='$user_id',`doing`='$doing',`address`='$address',`who`='$who' WHERE `times`.`id` = $time_id ";
    $result = mysql_query($sql,$conn);
    header("location: time.php?id=$time_id");
}
?>
