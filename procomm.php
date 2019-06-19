<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC');

include_once "config.php";

$title = $_POST["title"];
$comment = $_POST["nr"];

if (!$comment || !$title) {
    die("标题或留言内容不能为空!");
}

$time = date('Y-m-d H:i:s', time());
$isexist = 1;

$sql = " insert into messageboard (id,title,comment,time,exist) values 
( NULL,'" . $title . "', '" . $comment . "','" . $time . "','" . $isexist . "')";
if (mysqli_query($conn, $sql)) {
    echo "留言成功！<br/>";
} else {
    die("error" . mysqli_error($conn));
}
mysqli_close($conn);
?>
<a href="main.php">查看留言板</a>