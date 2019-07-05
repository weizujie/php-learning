 <?php

include_once "config.php";
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from user where username='$username' and password='$password'";

$res=mysqli_query($conn,$sql);


if ($row=mysqli_fetch_array($res,MYSQLI_NUM)) {
    $_SESSION['username'] = $username;
    echo "<script>window.location.href='index.php'</script>";

}
else
{
    echo "<script>alert('登录失败, 请重试');window.location.href='login.html'</script>";
}

?>