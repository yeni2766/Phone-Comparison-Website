<?php
$ServerName ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "phonedatabase" ;
$conn1 = mysqli_connect ($ServerName,$dbUsername,$dbPassword ,$dbName    );

if(!$conn1){

die("Connection failed: ". mysqli_connect_error());

}
?>
