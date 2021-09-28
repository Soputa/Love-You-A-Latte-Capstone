<?php
// This is Gio's code
function OpenCon()
 {
 $dbhost = "yellowdb.cga6xtmk1gfd.us-east-2.rds.amazonaws.com";
 $dbuser = "yellow";
 $dbpass = "YellowTeam-02";
 $db = "loveyoualatte";
 $conn = new mssql($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
