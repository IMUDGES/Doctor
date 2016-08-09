<?php
include_once('json-fun.php');
function return_doctor($type)
{
	header('Content-Type:text/html;charset=utf-8');
	$mysqli=mysqli_connect('123.207.141.93','root','a96S04d02','user');
	$res="SELECT d_username,d_phonenumber,d_introduce,d_picture FROM doctor where d_type='$type';";
	$result=mysqli_query($mysqli,$res);
	while($out= mysqli_fetch_row($result))
	{
		$arr[]=$out;
	}
	$json=ch_json_encode($arr);
	echo $json;
}
$hh=$_GET['number1'];
echo $hh;
?>
