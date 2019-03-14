<html>
<title>BACKHAND</title>
<body>
<?php
$user='root';
$pass='';
$db='dbms';
$conn=new mysqli('localhost',$user,$pass,$db);
//if($conn->connect_error){
//	die("Connection failed:".$conn->connect_error);
//}
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$pwd=$_POST['pwd'];
$sql="insert into signup values($firstname,$lastname,$mail,$pwd)";
mysqli_query($conn,$sql);
if($conn->query($sql)===TRUE)
{
	echo "Sign in successfull";
}
$conn->close();
?>
</body>
</html>