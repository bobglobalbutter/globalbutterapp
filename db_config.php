<?php
// Create connection
$HOST = 'globalbuttercorpdatabase.cfthiid2pigu.us-east-1.rds.amazonaws.com';
$DBUSER = 'rdscloudadmin';
$DBPASS = ''; // This will be added via a environment variable
$DBPORT = ''; // The port is a non-standard but common port, to confuse hackers!

$con=mysqli_connect($HOST,$DBUSER,$DBPASS,"flagdatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "<font style=\"color:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>