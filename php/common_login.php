
<?php
$con=mysqli_connect("123.207.141.93","root","a96S04d02","user");
$name=$_GET['name'];
$password=$_GET['password'];
$sql = "select * from common where username='$name' and password='$password'";
$result = mysqli_query($con,$sql);
$row=mysqli_num_rows($result);
if($row===1)
{
    $json=json_encode($name);
    echo $json;
    /*session_start();
    $userinfo = array(
        'name' => '$name',
        'password'=>'$password'
    );
    header('Location:http://localhost:81/Doctor/mian.html');
    $_SESSION['name'] = $userinfo['name'];
    $_SESSION['password'] = $userinfo['password'];
    $_SESSION['userinfo'] = $userinfo;
    //* 将用户数据保存到cookie中的一个简单方法 */
    /*$secureKey = 'doctor'; //加密密钥
    $str = serialize($userinfo); //将用户信息序列化
//用户信息加密前
    $str = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), $str, MCRYPT_MODE_ECB));
//用户信息加密后
//将加密后的用户数据存储到cookie中
    setcookie('userinfo', $str);

//当需要使用时进行解密
    $str = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($secureKey), base64_decode($str), MCRYPT_MODE_ECB);
    $uinfo = unserialize($str);
    echo "解密后的用户信息：<br>";
    print_r($uinfo);*/
}
else
    echo "登录失败！";
?>
