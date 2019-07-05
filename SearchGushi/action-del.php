<?php
include_once "config.php";

$id = $_GET['id'];
//删除指定数据
mysqli_query($conn, "DELETE FROM gushi WHERE id={$id}") or die('删除数据出错：'.mysqli_error($conn));

echo "<script>alert('删除成功');window.location.href='admin.php';</script>";