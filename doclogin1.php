<?php
$conn = new mysqli("localhost","root", "","project");
//if ($conn->connect_error) {
  //  die("Connection failed: " . $conn->connect_error);
//} 
//echo "Connected successfully";
echo "
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href='http://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='css/materialize.min.css'  media='screen,projection'/>

      <!--Let browser know website is optimized for mobile-->
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type='text/javascript' src='https://code.jquery.com/jquery-2.1.1.min.js'></script>
      <script type='text/javascript' src='js/materialize.min.js'></script>
<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById('mytable1').deleteRow(i);
}
</script>







<table class='bordered' id='mytable1'>
        <thead>
          <tr>
              <th data-field='name'>Name</th>
              <th data-field='age'>AGE</th>
              <th data-field='gender'>GENDER</th>
			  <th data-field='address'>ADDRESS</th>
			  <th data-field='id'>ID</th>
			  <th data-field='done'>SELECT</th>
          </tr>
        </thead>

        <tbody>
          ";
$id=$_POST["username"];
$pass=$_POST["password"];
$sql = "SELECT id, pass FROM doctor";
$result = $conn->query($sql);
$flag=0;
if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
        if($id==$row["id"]&&$pass==$row["pass"])
		{
				
	$day= date("l");//echo $day;
	
	$sql = "SELECT pid FROM  register where  did='$id' and day1='$day'";
	
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   
    while($row = $result->fetch_assoc()) {
		$r1=$row["pid"];
		$sql1 = "SELECT * FROM patient where pid='$r1'";
	
	$result1 = $conn->query($sql1);
		 while($row1 = $result1->fetch_assoc())
		 {
			 echo "<tr><td>".$row1["pname"]."</td><td>".$row1["age"] ."</td><td>". $row1["gender"] ." </td><td>". $row1["address"] ." </td><td>". $row1["pid"]."</td><td><button class='btn waves-effect waves-light' type='submit' name='action' onclick='deleteRow(this)'>DONE</button>"."</td></tr>";}
           
			   
	}}
	$flag=1;
		}
	}
	echo "</tbody>
      </table>
	  </body>
	  </html>";
	if($flag==0)
		echo "INVALID USER PLEASE TRY AGAIN";
	}



?>
