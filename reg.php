<?php
/*
$user = $_POST["username"];
$pass = $_POST["password"];
$conn= new mysqli("localhost","root","root","mydb");
if($conn->connect_error){
	die("连接错误：".$conn->connect_error);
}

$stmt= $conn->prepare("INSERT INTO admin(user,pass)VALUES(?,?)");
$stmt->bind_param("ss",$user,$pass);
$stmt->execute();
echo "注册成功！";

$stmt->close();
$conn->close();
上面这种注册只是注册！*/
$user = $_POST["username"];
$pass = $_POST["password"];
$conn = new mysqli("localhost","root","root","mydb");
if($conn->connect_error){
	die("连接错误：".$conn->connect_error);
}
$sql = "SELECT * FROM admin where user=".$_POST["username"];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo("用户名存在");
}
else{
$stmt= $conn->prepare("INSERT INTO admin(user,pass)VALUES(?,?)");
$stmt->bind_param("ss",$user,$pass);
$stmt->execute();
echo "注册成功！";
$stmt->close();
}

$conn->close();
?>