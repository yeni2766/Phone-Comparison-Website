<?php
require 'phonedatabasesql.php';
session_start();
$pin = $_REQUEST["search"];
$p = $_POST["search"];
$sql = "select * from phone WHERE phone_name LIKE '$p%' LIMIT 2";
$data = mysqli_query($conn, $sql);

if (mysqli_num_rows($data)> 0)
{
// this will then display it in the table

 echo  '<table class="table">
  <thead class="thead">
    <tr>
 
      <th scope="col">Phone Name</th>
      <th scope="col"<</th>
      
	
    </tr>
  </thead>';
  while($row = mysqli_fetch_array($data))
  {
	 echo
	   "
<tr>

<td>" .$row ['phone_name']."</td>
<td><img src=$row[image] class='rounded-circle' height = '100' width = '80'> </td>
	







</tr>



";
	  
  }

}

else {
echo "no records found";
}


