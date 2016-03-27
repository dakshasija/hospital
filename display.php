<?php
// session_start();


$con=mysqli_connect("localhost","root","","project");
$days= array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");
$symptom='ortnfasf';

// echo $symptom=$_POST['search'];
for($i=0;$i<count($days);$i++)
{

$sql="SELECT dname from $days[$i] where type1='$symptom' AND aseats > 0";

// $sql="SELECT dname from days[$i] where type1='$symptom' AND aseats > 0";
$result=mysqli_query($con,$sql);


if($row=mysqli_fetch_assoc($result))
{
	echo '<h2>';
	echo $days[$i];
	echo '</h2>';
while($row=mysqli_fetch_array($result))


	{

//echo '<table>';
		// echo '<a href="page.php?var='; echo $row['dname']; echo " "; echo $days[$i]; echo '">';
     echo $row['dname'];
     echo " ";
     echo $days[$i];
	// echo '<tr style="solid black 1px;" >';
	echo $row['dname'];
	// echo '</tr>';
	//echo '<a/>';
	//echo '<br>';
	}

// echo '</table>';

}


	else
	{ echo "<h2>";
	    echo "---";
	    echo "</h2>";

}
}

echo "<h2> Sorry! Please Give us more precised details";
?>
