<?php
// echo $_GET['var'];
$con=mysqli_connect("localhost","root","","project");

$x=explode(" ", $_GET['var']);

$doc=$x[0];
$day=$x[1];

$sql="SELECT * FROM $day WHERE dname='$doc'";


?>