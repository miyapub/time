<?
require "conn.php";
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
    <?
    require "nav.php";
    ?>

    <?
    $sql="select * from times order by id desc";
    $result = mysql_query($sql,$conn);

    while($row = mysql_fetch_array($result)){
        ?>
        <li>
            <?=$row['doing']?>
            <?=$row['start']?>
            <?=$row['end']?>
        </li>
        <?
    }
    ?>
</body>
</html>
