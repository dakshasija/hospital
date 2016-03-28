<?php
$con = new mysqli("localhost","root","","project");
$q=$_REQUEST['query'];
$result = $con->query("SELECT sym FROM symptoms where sym like '%$q%'");
    while ($row = $result->fetch_object()){
         $user_arr[] = $row->sym;
     }
     $result->close();
     echo json_encode($user_arr);
?>