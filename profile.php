<?
require "conn.php";
require "nav.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    $profile_id=mysql_real_escape_string($_GET['id']);
    $sql="select * from users where `id`='$profile_id'";
    $result = mysql_query($sql,$conn);
    if($row = mysql_fetch_array($result)){
        ?>
        <?=$row['name']?>
        <?
        $sql="select * from times where `user_id`='$profile_id'";
        $times_result = mysql_query($sql,$conn);
        while($time_row = mysql_fetch_array($times_result)){
            ?>
            <?=$time_row['doing']?>
            <?
        }
        ?>
        <?
    }
}
?>