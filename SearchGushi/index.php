<?php
    include_once "config.php";
    session_start();
?>


</body>
</html>

<!DOCTYPE html>
<!-- saved from url=(0038)https://v3.bootcss.com/examples/cover/ -->
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./assets/css/cover.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
</head>

<body background="1.jpg">

<div class="site-wrapper">

    <div class="site-wrapper-inner">

        <div class="cover-container">

            <div class="masthead clearfix">
                <div class="inner">
                    <h3 style="color: black">古诗查询</h3>
                    <nav>
                    </nav>
                </div>
            </div>


            <div class="inner cover">
                <form action="showgushi.php" method="post">
                <h3 style="color: black">输入要查询的古诗</h3>
                <input type="text" name="title" style="color: black">
                <input type="submit" value="查询" id="submitButton">
                <br /><br />
                <?php
                if (!isset($_SESSION['username'])) {
                    echo "<a href='login.html'  style=\"color: black\">管理后台</a><br />";
                } else {
                    echo "欢迎您, 尊敬的".$_SESSION['username']."<br /><br />";
                    echo "<a href='admin.php'>管理后台</a>";
                    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php'>退出登录</a><br /><br />";
                }
                ?>
                </form>
            </div>

            </div>

        </div>

    </div>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="./assets/js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="./assets/js/jquery.min.js"><\/script>')</script>
<script src="./assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="./assets/js/ie10-viewport-bug-workaround.js"></script>


</body></html>