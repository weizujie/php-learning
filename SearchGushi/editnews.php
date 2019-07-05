<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改古诗</title>
</head>
<body background="1.jpg">
<?php
include "config.php";


$id = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM gushi WHERE id=$id");
$sql_arr = mysqli_fetch_assoc($sql);

?>

<form action="action-editnews.php" method="post">
    <label>ID: </label><input type="text" name="id" value="<?php echo $sql_arr['id']?>">
    <label>标题：</label><input type="text" name="title" value="<?php echo $sql_arr['title']?>">
    <label>作者：</label><input type="text" name="author" value="<?php echo $sql_arr['author']?>">
    <label>内容：</label><input type="text" name="content" value="<?php echo $sql_arr['content']?>">
    <input type="submit" value="提交">
</form>

</body>
</html>