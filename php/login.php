<?php
$con=mysqli_connect("123.207.141.93","root","a96S04d02","user");
function collect_data(){
    $con=mysqli_connect("123.207.141.93","root","a96S04d02","user");
$sql = "select * from common";
$result = mysqli_query($con,$sql);
$col= mysqli_fetch_array($result);
return $col;
}
$name=$_POST['name'];
$password=$_POST['password'];
while($colum=collect_data())
{

    if(($colum['name'] == $name) && ($colum['password'] == $password))

    {
        echo "<script>alert('登陆成功');</script>";
        break;
    }

    else

        echo"<script type='text/javascript'>alert('密码错误');</script>";

}

?>