<?
require "conn.php";
require "authorize.php";
$method = $_SERVER['REQUEST_METHOD'];
if($method==='GET'){
    $sql="INSERT INTO `times` (`id`, `start`, `end`, `user_id`, `class_id`, `doing`, `address`, `who`) VALUES (NULL, CURRENT_TIMESTAMP, NULL, '$user_id', '0', '', NULL, NULL); ";
    $result = mysql_query($sql,$conn);
    $time_id=mysql_insert_id($conn);
}
if($method==='POST'){

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>开始计时</title>
</head>
<body>
    <?
    require "nav.php";
    ?>
    <form action="end.php" method="post">
        <input type="hidden" name="time_id" value="<?=$time_id?>">
        <select class="select" name="class_id">
                    <?
                    $sql ="SELECT * FROM `classes` ORDER BY id DESC";
                    $result = mysql_query($sql,$conn); 
                    while($row = mysql_fetch_array($result)){
                        ?>
                        <option value="<?=$row['id']?>"><?=$row['title']?></option>
                        <?
                    }
                    ?>
                    
                    </select>
        <input type="text" name="doing" placeholder="做什么">
        <input type="text" name="address" placeholder="在哪儿">
        <input type="text" name="who" placeholder="和谁">
        <input type="submit" value="完成后，点击此结束按钮">
    </form>
</body>
</html>




