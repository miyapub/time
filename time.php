<?
require "conn.php";
require "nav.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    $time_id=mysql_real_escape_string($_GET['id']);
    $sql="select * from times where `id`='$time_id'";
    $result = mysql_query($sql,$conn);
    if($row = mysql_fetch_array($result)){
        ?>
        <?=$row['doing']?>
        <?=$row['address']?>
        <?=$row['who']?>
        <?=$row['start']?>
        <?=$row['end']?>
        <?
    }
}
?>
