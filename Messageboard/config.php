<?php
header("Content-type: text/html; charset=utf-8");

$conn = mysqli_connect("localhost","root","toor", "messageboard");
mysqli_set_charset($conn, "utf8");
if(!$conn){
    die("连接数据库失败".$conn->connect_error);
}