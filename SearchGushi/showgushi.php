<?php
include_once "config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<style type="text/css">
    .wrapper {width: 1000px;margin: 20px auto;}
    h2 {text-align: center;}
    .add {margin-bottom: 20px;}
    .add a {text-decoration: none;color: #fff;background-color: green;padding: 6px;border-radius: 5px;}
    td {text-align: center;}
</style>
<body background="1.jpg">
<div class="wrapper">
    <table width="960" border="1">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>作者</th>
            <th>内容</th>
        </tr>

        <?php
        $title = $_POST['title'];
        $sql = "SELECT * FROM gushi where title like '%$title'";
        // 结果集
        $result = mysqli_query($conn, $sql);


        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['title']}</td>";
            echo "<td>{$row['author']}</td>";
            echo "<td>{$row['content']}</td>";
            echo "<td>
    </td>";
        }
            echo "</tr>";
        // 5. 释放结果集
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
</div>

<a href="index.php">返回主页</a>

</body>
</html>