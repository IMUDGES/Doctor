<?php
/**
 * Created by PhpStorm.
 * User: wodediannao
 * Date: 2016/7/29
 * Time: 10:59
*/
$sql="INSERT INTO common(username,email,password)VALUES('$_GET[name]','$_GET[email]','$_GET[password2]');";
$mysqli = new mysqli('123.207.141.93', 'root', 'a96S04d02', 'user');
if($mysqli->query($sql)==TRUE)
{
    echo "INSERT successsful";
}
else
{
    echo "INSERT attempt failed";
}
$mysqli->close();
//header('Location:http://localhost:63342/Doctor/mian.html?_ijt=7hv4mf6g8ds6irn04df8c8n3ss');
?>
