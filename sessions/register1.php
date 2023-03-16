<?php


require_once 'dashboardsql.php';

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];
 
// this checks the form data when it is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
		$errorvalue = false;
		$wrongemail = false;
    
   
   
   
  
   
   
   
    //checks to see if it is the right password
    if(empty(trim($_POST["password"]))){
		$errorvalue = true;
      	echo "<span class = 'errormessages'>please enter password</span>";
		
    } elseif(strlen(trim($_POST["password"])) < 7){
       	echo "<span class = 'errormessages'>Your password must have 7 characters.</span>";
    } 
	elseif(!preg_match("#[0-9]+#",$password)) {
		echo "<span class = 'errormessages'>Your password is missing a number.</span>";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) {
        echo "<span class = 'errormessages'>Your password does not have a uppercase letter.</span>";
    }
    elseif(!preg_match("#[a-z]+#",$password)) {
        echo "<span class = 'errormessages'>Your password does not have a lowercase letter.</span>";
    } 
	else{
        $password = trim($_POST["password"]);
		
    }
   
    // Validate confirm password
    if(empty(trim($_POST["confirmpassword"]))){
		$errorvalue = true;
			
      	echo "<span class = 'errormessages'>Please confirm your password</span>";
    } else{
        $confirmpassword = trim($_POST["confirmpassword"]);
        if($password != $confirmpassword){
					
            	echo "<span class = 'errormessages'>Wrong Password</span>";
        }
    }
   




if(empty(trim($_POST["email"]))){
       $wrongemail = true;
	   		
      	echo "<span class = 'errormessages'>Please enter your email</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
echo  "<span class = 'errormessages' > Invalid email format</span>";
}
	
	
	else{
		

//checks if it is the right email that selcts the entered email and checks if it is in the database
        $sql = "SELECT USERID FROM usersdetails WHERE email = ?";
       
        if($result= mysqli_prepare($conn, $sql)){
    // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_Email);
           

            $binded_Email = trim($_POST["email"]);
           
          
            if(mysqli_stmt_execute($result)){
       
                mysqli_stmt_store_result($result);
                              //if it matches the user input from the database it will send that message
                if(mysqli_stmt_num_rows($result) == 1){
                 $errorvalue = true;
      	echo "<span class = 'errormessages'>used email</span>";
                } else{
                    $email = trim($_POST['email']);
                }
            } else{
              $errorvalue = true;
      	echo "<span class = 'errormessages'>gone wrong</span>"; ;
            }

            // Close statement
            mysqli_stmt_close($result);
        }
    }

//email


//firstname
if(empty(trim($_POST["firstname"]))){
	$emptyvalue = true;
		echo "<span class = 'errormessages'>Fill in your first name</span>";
     
    } elseif(!preg_match("#[A-Za-z]+#",$firstname)) {
        echo "<span class = 'errormessages'>Your first name must only have letters.</span>";
    }
else{
        // Prepare a select statement where firstname is checked in the database
        $sql = "SELECT USERID FROM usersdetails WHERE Firstname = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
           // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_firstname);
           
            // Set parameters
            $binded_firstname = trim($_POST["firstname"]);
      
            if(mysqli_stmt_execute($result)){
         
                mysqli_stmt_store_result($result);
               
               
               
                 $firstname = trim($_POST['firstname']);
               
            } else{
           	echo "<span class = 'errormessages'>please try again</span>";
            }

            // Close the statement
            mysqli_stmt_close($result);
        }
    }

//lastname
//firstname
if(empty(trim($_POST["lastname"]))){
	 $emptyvalue = true;
	 	
       	echo "<span class = 'errormessages'>Fill in your last name</span>";
    } elseif(!preg_match("#[A-Za-z]+#",$lastname)) {
        echo "<span class = 'errormessages'>Your last name must only have letters.</span>";
    }
	
	
	
	else{
       // Prepare a select statement where lastname is checked in the database
        $sql = "SELECT USERID FROM usersdetails WHERE Lastname = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
                 // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_lastname);
           
            // Set parameters
            $binded_lastname = trim($_POST["lastname"]);
           

            if(mysqli_stmt_execute($result)){

                mysqli_stmt_store_result($result);
               
               
               
                 $lastname = trim($_POST['lastname']);
               
            } else{
					echo "<span class = 'errormessages'>Something is wrong</span>";
      
            }

            // Close the statement
            mysqli_stmt_close($result);
        }
    }





  //if the error messages variables are not set  then it will make the statement

        // Prepare an insert statement and store the form data into the database
   
   if($errorvalue == false & $wrongemail == false){
		$stmt = $conn->prepare("INSERT INTO usersdetails ( email, password, Firstname, Lastname) VALUES (?, ?, ?,?)");
		$stmt->bind_param("ssss", $email, $password, $firstname, $lastname);
		$result = $stmt->execute();
		echo $result;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
	else {

			echo "failed";
	}
}
?>


<script>



</script>