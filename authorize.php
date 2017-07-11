<?
if(isset($_SESSION['user_id'])){
    $user_id=$_SESSION['user_id'];
    $user_name=$_SESSION['user_name'];
}else{
    header("location: login.php");
}
?>
