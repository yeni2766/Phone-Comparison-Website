<?php 
include 'phonedatabasesql.php';

if (isset($_POST['phonedetails'])){
$phonedetails = $_POST['phonedetails'];
	
$sql = "select * from phone where phone_name like '$phonedetails%'";
$executesql = $conn->query($sql);

 if ($executesql->num_rows > 0) {
while ($Result = MySQLi_fetch_array($executesql)) {
            // use the onclick function that defined in js file. you can use the `  sign in js instead of ' if you needed.
            echo "<a href = 'index.php?page=individualphone&phone_name={$Result['phone_name']}'><div id = 'user'><img src ='".$Result['image']."' width='36' height='50' id ='pic'/>&nbsp;<span class ='phonename'>".$Result['phone_name']."</span></div></a>";
         }
	 }else{
        echo "No Result Found!";      
    }
}
die();
	
?>


