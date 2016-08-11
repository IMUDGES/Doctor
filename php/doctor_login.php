
<?php
$con=mysqli_connect("123.207.141.93","root","a96S04d02","user");
$name=$_POST['name'];
$password=$_POST['password'];
$sql = "select * from doctor where d_username='$name' and d_password='$password'";
$result = mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row===1)
{
	echo "恭喜你登录成功";
}
else
    echo "登录失败！";
?>
