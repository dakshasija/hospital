<?php
$conn = new mysqli("localhost","root", "","project");
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";
$id=$_POST["username"];
$pass=$_POST["password"];
$sql = "SELECT id, pass FROM doctor";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        if($id==$row["id"]&&$pass==$row["pass"])
		{
				
	$day= date("l");
	//echo $day;
	
	$sql = "SELECT pid FROM  register where  did='$id' and day1='$day'";
	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
		$r1=$row["pid"];
		$sql1 = "SELECT * FROM patient where pid='$r1'";
	
	$result1 = $conn->query($sql1);
		 while($row1 = $result1->fetch_assoc())
		 {echo $row1["pname"] ." ".$row1["age"] ." ". $row1["gender"] ." ". $row1["address"] ." ". $row1["pid"];}
           
			   
	}}
	$flag=1;
		}
	}
	
	if($flag==0)
		echo "INVALID USER PLEASE TRY AGAIN";
	}



?>