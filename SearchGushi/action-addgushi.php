<?php

include_once "config.php";


$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];

mysqli_query($conn, "INSERT INTO gushi(title,author,content) VALUES ('$title','$author','$content')");
echo "<script>alert('增加成功');window.location.href='admin.php';</script>";