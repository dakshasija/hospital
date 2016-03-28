<?php
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$page=$_POST['page'];
$gender=$_POST['gender'];
$padd=$_POST['address'];
$con=mysqli_connect("localhost","root","","project");
if($con)
{
	echo "connected";
}
$sql="insert into patient (id,name,age,gender,address) values('$pid','$pname','$page','$gender','$padd')";
mysqli_query($con,$sql);

?>