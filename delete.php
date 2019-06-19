<?php

header("Content-type: text/html; charset=utf-8");

include_once "config.php";

$sql2 = "select * from messageboard where exist = '1' order by id";
$result1 = mysqli_query($conn, $sql2);
if (!mysqli_fetch_array($result1)) {
    echo "无留言!";
} else {
    $result2 = mysqli_query($conn, $sql2);
    while ($rows = mysqli_fetch_array($result2)) {
        ?>
        <table width="750" border="0" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
            <tr bgcolor="#eff3ff">
                <td width="375">标题：<?php echo $rows['title']; ?></td>
                <td width="375">时间: <?php echo $rows['time']; ?></td>
            </tr>
            <tr>
                <td>内容:
                    <?php
                    echo $rows['comment'];
                    $id = $rows['id'];
                    echo "<a href = prodel.php?id=" . $id . "> 删除</a>";
                    ?></td>
            </tr>
            <br>
        </table>
        <?php
    }
}
mysqli_close($conn);
?>