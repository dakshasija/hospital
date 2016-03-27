<?php
$con = new mysqli("localhost","root","","project");
$q=$_REQUEST['query'];
$result = $con->query("SELECT doc_types FROM types where doc_types like '%$q%'");
    while ($row = $result->fetch_object()){
         $user_arr[] = $row->doc_types;
     }
     $result->close();
     echo json_encode($user_arr);
?>