<?php 

$ServerName ="localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "phonedatabase" ;
$conn = mysqli_connect ($ServerName,$dbUsername,$dbPassword ,$dbName    );

if(!$conn){

die("Connection failed: ". mysqli_connect_error());

}

isset($_POST["brandname"]) ? $brandname = $_POST["brandname"] : $brandname = '';

$phone_name= "";
$price ="";

$result = "SELECT * FROM phone WHERE brandname = '$brandname'";
$rows = $conn ->query($result);
$rowcount = $rows ->num_rows;
if ($rowcount > 0){
	while ($r = $rows->fetch_assoc()){
		$phone_name.= $r["phone_name"].",";
		$price .= $r["phone_price"]."";
		
	}
}
echo json_encode(
array(
"brandname" => $brandname,
"phonename" => substr($phone_name, 0, -1),
"prices" => substr($price, 0, -1)
)
);














?>