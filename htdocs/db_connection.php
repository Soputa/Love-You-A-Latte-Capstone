<?php
$host ="yellowdb.cga6xtmk1gfd.us-east-2.rds.amazonaws.com"; 
$username ="yellow";
$password ="YellowTeam-02";
$database ="loveyoualatte";

mssql_connect($host, $username, $password);
mssql_select_db($database);

if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}
?>