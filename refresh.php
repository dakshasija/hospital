<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
$con=mysqli_connect("localhost","root","","project");
if($con)
{
   echo "connected";
$sql="select id from temp where 1";
$q=mysqli_query($con,$sql);
if(!emptyof($q))
   echo "not empty";
}
else 
echo "empty";
header('Location:http://www.google.com');
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        echo "Watch the page reload itself in 1 second!";
    ?>
    </body>
</html>