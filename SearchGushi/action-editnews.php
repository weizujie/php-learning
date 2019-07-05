<?php
include_once "config.php";


$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$content = $_POST['content'];
// 更新数据
mysqli_query($conn, "UPDATE gushi SET title='$title',author='$author',content='$content' WHERE id=$id") or die('修改数据出错：'.mysqli_error($conn));
echo "<script>alert('修改成功');window.location.href='admin.php';</script>";