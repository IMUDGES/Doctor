<?php
/**
 * Created by PhpStorm.
 * User: wodediannao
 * Date: 2016/7/29
 * Time: 10:59
*/
header('Content-Type:text/html;charset=utf-8');
$sql="INSERT INTO common(username,email,password)VALUES('$_GET[name]','$_GET[email]','$_GET[password2]');";
$mysqli = new mysqli('123.207.141.93', 'root', 'a96S04d02', 'user');
$res="SELECT * FROM common where username='{$_GET['name']}';";
$result = mysqli_query($mysqli,$res);
$row = mysqli_fetch_row($result);
mysqli_query($mysqli,"SET NAMES `UTF-8`");
if($row) {
    echo "failed";
}
else {
    if (mysqli_query($mysqli,$sql) != TRUE) {
        echo "INSERT attempt failed";
    }
}
header('Location:http://localhost:81/Doctor/mian.html');
?>