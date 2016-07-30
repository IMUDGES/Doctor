<?php
/**
 * Created by PhpStorm.
 * User: wodediannao
 * Date: 2016/7/29
 * Time: 10:59
*/
header("Content-type:text/html;charset=utf8");
$sql="INSERT INTO common(username,email,password)
VALUES('$_GET[name]','$_GET[email]','$_GET[password]')";
$mysqli = new mysqli('123.207.141.93', 'root', 'a96S04d02', 'user');
if($mysqli->query($sql)==TRUE)
{
    echo "user entry saved successfully";
}
else
{
    echo "INSERT attempt failed";
}
$mysqli->close();
/*echo $_GET["name"];
echo $_POST["email"];
echo $_POST["password1"];
echo $_post["password2"];*/
?>
