<?php
session_start();
session_destroy();
require "conn.php";
header("location: index.php");
?>