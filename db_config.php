<?php
// Create connection

// Our internal security team has said it is not wise to put hostnames and other sensitive information in the source like this, so removing it.

$HOST = ''; // will read from environment variable as well
$DBUSER = ''; // will read from environment variable as well
$DBPASS = ''; // This will be added via a environment variable
$DBPORT = ''; // The port is a non-standard but common port, to confuse hackers!

$con=mysqli_connect($HOST,$DBUSER,$DBPASS,"flagdatabase");

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "<font style=\"color:#FF0000\">Could not connect:". mysqli_connect_error()."</font\>";
  }
?>