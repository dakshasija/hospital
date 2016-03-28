<html>
<head>
<style type="text/css">
table, th, td {
    border: 2px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 15px;
}
</style>

</head>
</html>

<?php
$p=array();
if (isset($_POST['qq'])) {
    {
    	$x=$_POST['qq'];
    	foreach ($x as $qq) 
    	{
    		if($qq!="")
    	array_push($p,$qq);
    	}
    
}

}
$cardio=0;$emed=0;$endo=0;$gastro=0;$hemato=0;$hepato=0;$geneti=0;$onco=0;$nephro=0;$neuro=0;$gyneco=0;$uro=0;$opthalmo=0;$oto=0;$perinato=0;$podia=0;$pulmo=0;$pheum=0;$sleep=0;
for ($i=0; $i <count($p) ; $i++) { 
	//echo $p[$i];
	if($p[$i]=="heart problem" || $p[$i]=="blood vessels problem")
		$cardio++;
	if($p[$i]=="illness" || $p[$i]=="injuries" || $p[$i]=="headache" || $p[$i]=="stomach pain")
		$emed++;
	if($p[$i]=="diabetes" || $p[$i]=="hormone imbalance" || $p[$i]=="thyroid disease" || $p[$i]=="endocrine disorder")
		$endo++;
		if($p[$i]=="digestion problem")
		$gastro++;
	if($p[$i]=="blood problem" || $p[$i]=="bone marrow problem")
		$hemato++;
	if($p[$i]=="liver problem")
		$hepato++;
	if($p[$i]=="genetic disease")
		$geneti++;
	if($p[$i]=="cancer" || $p[$i]=="tumor" || $p[$i]=="radiation effect")
		$onco++;
		if($p[$i]=="kidney problem")
		$nephro++;
			if($p[$i]=="brain problem" || $p[$i]=="spine problem" || $p[$i]=="nerves" || $p[$i]=="muscles problem" || $p[$i]=="nervous system problem")
		$neuro++;
			if($p[$i]=="female reproductive part problem")
		$gyneco++;
			if($p[$i]=="female urological problem")
		$uro++;
			if($p[$i]=="eye problem")
		$opthalmo++;
			if($p[$i]=="ear problem" || $p[$i]=="nose problem" || $p[$i]=="throat problem")
		$oto++;
			if($p[$i]=="pregnancy")
		$perinato++;
		 if($p[$i]=="foot and ankle problem")
		 $podia++;
		 if($p[$i]=="lungs problem")
		 $pulmo++;
		if($p[$i]=="joints problem")
		 $pheum++;
		 if($p[$i]=="sleep disorder")
		 $sleep++;		
}
$n=array();
//echo $emed.$neuro.$pulmo;
$n1=max($emed,$gastro);
$m=max($cardio,$endo,$hemato,$hepato,$geneti,$onco,$nephro,$neuro,$gyneco,$uro,$opthalmo,$oto,$perinato,$podia,$pulmo,$pheum,$sleep);
//$m=max($cardio,$emed,$endo,$gastro,$hemato,$hepato,$geneti,$onco,$nephro,$neuro,$gyneco,$uro,$opthalmo,$oto,$perinato,$podia,$pulmo,$pheum,$sleep);
if($m!=0)
{	
if($m==$cardio)
array_push($n,"cardiologist");
// if($m==$emed)
// array_push($n,"emergency");
if($m==$endo)
array_push($n,"endocrinologist");
//echo $m;
// if($m==$gastro)
// array_push($n,"gastroenterologist");
if($m==$hemato)
array_push($n,"hematologist");
if($m==$hepato)
array_push($n,"hepatologist");
if($m==$geneti)
array_push($n,"medical geneticst");
if($m==$onco)
array_push($n,"oncologist");
if($m==$nephro)
array_push($n,"nephrologist");
if($m==$neuro)
array_push($n,"neurologist");
if($m==$gyneco)
array_push($n,"gynecologist");
if($m==$uro)
array_push($n,"urogynecologist");
if($m==$opthalmo)
array_push($n,"opthalmologist");
if($m==$oto)
array_push($n,"otolarygologist");
if($m==$perinato)
array_push($n,"perinatologist");
if($m==$podia)
array_push($n,"podiatrist");
if($m==$pulmo)
array_push($n,"pulmologist");
if($m==$pheum)
array_push($n,"pheumatologist");
if($m==$sleep)
array_push($n,"sleep doctor");
}
else
{
 if($n1==$emed)
   array_push($n,"emergency");	
 if($n1==$gastro)
 array_push($n,"gastroenterologist");
}
// for($i=0;$i<count($n);$i++)
// 	echo $n[$i].'<br>';


// session_start();
$con=mysqli_connect("localhost","root","","project");
$days= array("monday","tuesday","wednesday","thursday","friday","saturday","sunday");
//$symptom='ortnfasf';
// echo $symptom=$_POST['search'];
for($i=0;$i<count($days);$i++)
{
	for($j=0;$j<count($n);$j++)
{
$sql="SELECT * from $days[$i] where type1='$n[$j]' AND aseats > 0";
// $sql="SELECT dname from days[$i] where type1='$symptom' AND aseats > 0";
$result=mysqli_query($con,$sql);
if($row=mysqli_fetch_assoc($result))
{
     echo '<h2>';
     echo $days[$i];
    echo '</h2>';
    echo '<table>';
    echo '<tr>
    <th>Doctor ID</th>
    <th>Doctor Name</th>
    <th>Seats Available</th>
    <th>Specialization</th>
    <th>In Time</th>
    <th>Out Time</th>
    </tr>';
while($row=mysqli_fetch_array($result))
    {
echo '<tr>';
        // echo '<a href="page.php?var='; echo $row['dname']; echo " "; echo $days[$i]; echo '">';
     echo '<td>'.$row['did'].'</td>';
     echo '<td>'.$row['dname'].'</td>';
     echo '<td>'.$row['aseats'].'</td>';
     echo '<td>'.$row['type1'].'</td>';
     echo '<td>'.$row['intime'].'</td>';
     echo '<td>'.$row['outtime'].'</td>';
     // echo " ";
     // echo $days[$i];
    // echo '<tr style="solid black 1px;" >';
    // echo $row['dname'];
    // echo '</tr>';
    //echo '<a/>';
    echo '<tr>';
    }
 echo '</table>';
}
//     else
//     { echo "<h2>";
//         echo "---";
//         echo "</h2>";
// }
}
}
// echo "<h2> Sorry! Please Give us more precised details</h2>";
?>