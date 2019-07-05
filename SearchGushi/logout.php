<?php
session_start();
header('Content-type:text/html;charset=utf-8');
if (isset($_SESSION['username'])) {
    session_unset();//free all session variable
    session_destroy();
}
header("Location:index.php");
?>