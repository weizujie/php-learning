<?php
    include_once "config.php";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新闻后台管理系统</title>
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
    <h2>古诗管理后台</h2>
    <div class="add">
        <a href="addgushi.html">增加古诗</a>
    </div>
    <table width="960" border="1">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>作者</th>
            <th>内容</th>
            <th>操作</th>
        </tr>

        <?php
                $sql = 'SELECT * FROM gushi';
                // 结果集
                $result = mysqli_query($conn, $sql);
                $newsNum=mysqli_num_rows($result);

                for($i=0; $i<$newsNum; $i++){
                    $row = mysqli_fetch_assoc($result);
                    echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['title']}</td>";
        echo "<td>{$row['author']}</td>";
        echo "<td>{$row['content']}</td>";
        echo "<td>
        <a href='javascript:del({$row['id']})'>删除</a>
        <a href='editnews.php?id={$row['id']}'>修改</a>
    </td>";
        echo "</tr>";
        }
        // 5. 释放结果集
        mysqli_free_result($result);
        mysqli_close($conn);
        ?>
    </table>
</div>

<a href="index.php">返回主页</a>
<a href="logout.php">退出登录</a>
<script type="text/javascript">
    function del (id) {
        if (confirm("确定删除这条新闻吗？")){
            window.location = "action-del.php?id="+id;
        }
    }
</script>
</body>
</html>