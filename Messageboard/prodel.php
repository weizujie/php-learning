<?php
header("Content-type: text/html; charset=utf-8");
include "config.php";

$exec = 'delete from messageboard where id ='.$_GET['id'];

mysqli_query($conn, $exec) or die('删除失败'.mysqli_error($conn));

echo "<script>alert('留言删除成功');</script>";


echo "<a href = main.php>返回留言板</a>";

?>