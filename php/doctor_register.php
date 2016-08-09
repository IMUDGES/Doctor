<?php
header('Content-Type:text/html;charset=utf-8');
if($_GET[type]=="外科")
{
$sql="INSERT INTO doctor(d_username,d_email,d_phonenumber,d_type,d_introduce,d_password) 
VALUES('$_GET[name]','$_GET[email]','$_GET[phonenumber]','surgery','$_GET[introduce]','$_GET[password1]');";
}
else
{
	$sql="INSERT INTO doctor(d_username,d_email,d_phonenumber,d_type,d_introduce,d_password) 
VALUES('$_GET[name]','$_GET[email]','$_GET[phonenumber]','$_GET[type]','$_GET[introduce]','$_GET[password1]');";
}
$mysqli = new mysqli('123.207.141.93', 'root', 'a96S04d02', 'user');
$res="SELECT * FROM doctor where d_username='{$_GET['name']}';";
$result = mysqli_query($mysqli,$res);
$row = mysqli_fetch_row($result);
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