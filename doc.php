<?php
$con=mysqli_connect("localhost","root","","project");
if($con)
{
	echo "connected";
}
$did=$_POST['did'];
 $dname=$_POST['dname']; 
 $type=$_POST['type']; 
 $tseats=$_POST['tseats'];
  $aseats=$_POST['aseats'];
$intime=$_POST['intime'];
$outtime=$_POST['outtime'];




if(isset($_POST['day']))
{
$name=$_POST['day'];
foreach ($name as $day) {
	echo $day;
$sql="insert into $day (did,dname,tseats,aseats,type1,intime,outtime) values ('$did', '$dname','$tseats','$aseats','$type','$intime','$outtime')";
mysqli_query($con,$sql);
//echo "yes";
}
}
else
	echo 
"OKKKK";

?>