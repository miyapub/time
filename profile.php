<?
require "conn.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    $profile_id=mysql_real_escape_string($_GET['id']);
    $sql="select * from users where `id`='$profile_id'";
    $result = mysql_query($sql,$conn);
    if($row = mysql_fetch_array($result)){
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Document</title>
        </head>
        <body>
            <?
            require "nav.php";
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
        </body>
        </html>

        <?
    }
}
?>
