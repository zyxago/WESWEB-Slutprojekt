<?php
//startar en session och ansluter till databasen
 session_start();

 $dbhost = "localhost";
 $dbuser = "SlutprojektUser";
 $dbpass = "ayIUopNrtHq23cJW";
 $db = "slutprojekt";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);
 
 if(!$conn) {
	echo "Failed to connect to database :/";
 }
?>