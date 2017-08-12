<?
require "conn.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    $time_id=mysql_real_escape_string($_GET['id']);
    $sql="select * from times where `id`='$time_id'";
    $result = mysql_query($sql,$conn);
    if($row = mysql_fetch_array($result)){
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$row['doing']?></title>
</head>
<body>
    <?
    require "nav.php";
    ?>
    <?=$row['doing']?>
    <?=$row['address']?>
    <?=$row['who']?>
    <?=$row['start']?>
    <?=$row['end']?>
</body>
</html>