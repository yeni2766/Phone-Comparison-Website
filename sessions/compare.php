<?php
session_start();
require_once 'phonedatabasesql.php';
     $phone1 = trim($_POST["search_text"]);
	 $phone2 = trim($_POST["search_text1"]);
 $success = false;
// this will collect all the data from the form
if($_SERVER["REQUEST_METHOD"] == "POST"){
 $errorvalue = false;
   //it will check if the user has entered the email, if so it will store the email, and if not, it will bring the error message
   if(empty(trim($_POST["search_text"]))){
       $errorvalue = true;
	   		
      	echo "Please enter your Phone";
    } 
else{
	 $errorvalue = false;
	  $phone1= trim($_POST["search_text"]);	
}


	 if(empty(trim($_POST["search_text1"]))){
       $errorvalue = true;
	   		
      	echo "Please enter your Phone";
    } 
else{
	 $errorvalue = false;
	  $phone2= trim($_POST["search_text1"]);	
}
if ($errorvalue == false){


	$sql1 = "SELECT * FROM phone where phone_name LIKE  '$phone1%'";
   	$sql2 = "SELECT * FROM phone where phone_name LIKE  '$phone2%'";




if (mysqli_query($conn1, $sql1) && mysqli_query($conn1, $sql2)) {
	
	$_SESSION['phone1'] = $phone1;
$_SESSION['phone2'] = $phone2;
 echo	'<script>
                  
window.location.href = "phonevsphone.php";

					 </script>';
	
}


else {
	
	$worked = "Error: " . $sql ."<br>" .mysqli_error($conn1);
}





  
}

    mysqli_close($conn1);
}
?>
