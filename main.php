<?php
header("Content-type: text/html; charset=utf-8");

include_once "config.php";

$sql2 = "select * from messageboard where exist = '1' order by id";
$result1 = mysqli_query($conn, $sql2);
if (!mysqli_fetch_array($result1)) {
    echo "当前留言板内容为空，快去留言吧!";
} else {
    $pagesize = 5;
    $SQL = "select * from messageboard";
    $result = mysqli_query($conn, $SQL);
    $total = mysqli_num_rows($result);
    $totalpage = ceil($total / $pagesize);

    if (isset($_GET['page']) && $_GET['page'] <= $totalpage) {
        $thispage = $_GET['page'];
    } else {
        $thispage = 1;
    }
    $thispage = ($thispage - 1) * $pagesize;

    $SQL = "select * from messageboard limit $thispage,$pagesize";
    $result2 = mysqli_query($conn, $SQL);
    while ($rows = mysqli_fetch_array($result2)) {//这两句很精髓，记住mysql_fetch_array函数带给你的困扰.mmp
        ?>
        <table width="750" border="0" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
            <tr bgcolor="#eff3ff">
                <td>标题：<?php echo $rows['title']; ?></td>
                <td>时间: <?php echo $rows['time']; ?></td>
            </tr>
            <tr>
                <td width="750">内容:<?php echo $rows['comment'] ?>

            </tr>
            <br>
        </table>

        <?php
    }
    for ($i = 1; $i <= $totalpage; $i++) {
        echo '<a href ="?page=' . $i . '">' . $i . '</a>';
    }
    echo '</br>';
}
mysqli_close($conn);
?>
<a href="index.html">去写留言</a>
<a href="delete.php">删除留言</a>
<br/><br/><br/>