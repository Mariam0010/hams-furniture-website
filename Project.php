




<?php
include 'Login.html';
 $connect=mysqli_connect ("localhost", "root","", "login") or 
 
 die("Connection Failed");

if(!empty($_POST['save']))
{
$id=(int)$_POST['id'];
$email=$_POST ['email'];
$password=$_POST ['password'];
$query="select * from tbl1 where email='$email' and password='$password'";
$result=mysqli_query ($connect, $query);
$count=mysqli_num_rows($result);
if ($count>0){
echo"Login Successful";
}
else
{
echo "Login Not Successful";
}

}

?>


<!--?php 

$conn= new mysqli("localhost", "root", "", "login");
if(!$conn){
die("connection failed: ". mysqli_connect_error());
}
$stmt=$conn->prepare("insert into tbl1(email , password ) values (?,?)");
$stmt->bind_param('isss',$email,$password);
if(isset($_POST["save"])){

$email=$_POST["email"];
$password=$_POST["password"];

$stmt->execute();
echo 'values inserted';
}
$stmt->close();
$conn->close();

?-->