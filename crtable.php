<?php
$servername="localhost";
$username="root";
$password="root";
$dbname="myDB";
//创建连接
$conn=new mysqli($servername,$username,$password,$dbname);
//测试连接
if($conn->connect_error){
	die("连接失败：".$conn->connect_error);
}
$sql="CREATE TABLE admin(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user VARCHAR(30) NOT NULL,
pass VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
$conn->close();
?>