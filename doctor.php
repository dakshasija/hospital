<?php
require_once('./db.php')
$id=$_POST['did']; $name=$_POST['name']; $type=$_POST['type']; $tseats=$_POST['tseats']; $aseats=$_POST['aseats'];
$intime=$_POST['intime'];
$outime=$_POST['outime'];





$x=$_POST['day'];
foreach ($x as $day) {
	echo $x;


?>