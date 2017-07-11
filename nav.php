<?
if(isset($_SESSION['user_name'])){
    ?>

    <a href="index.php">首页</a>

    <a href="profile.php?id=<?=$_SESSION['user_id']?>"><?=$_SESSION['user_name']?></a>

    <a href="start.php">新建记时</a>

    <a href="logout.php">退出登录</a>
    <?
}else{
    ?>
    <a href="login.php">登录</a>
    <?
}
?>
