<?php


require_once 'dashboardsql.php';

$success = true;
$errormessages = array();

 
// this checks the form data when it is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    
   
    //checks to see if it is the right password
    if(empty(trim($_POST["Password"]))){
		$success = false;
		$errormessages[]= "Please enter a password.";  
    } 
	elseif(strlen(trim($_POST["Password"])) < 7){
		$success = false;
      $errormessages[]="Your password must have 7 characters at least to create an account.";
	
}


     else{
			$success = true;
        $password = trim($_POST["Password"]);
    }
   
    // Validate confirm password
    if(empty(trim($_POST["confirmpassword"]))){
		$success = false;
      $errormessages[]="Please confirm password.";  
    } else{
        $pwdrepeat = trim($_POST["confirmpassword"]);
        if ($Password != $pwdrepeat){
			$success = false;
              $errormessages[]="Password did not match. please try again";
        }
    }
   




if(empty(trim($_POST["email"]))){
		$success = false;
        $errormessages[]="Please enter a email.";
    } else{
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
					$success = false;
                    $errormessages[]= "This email is already taken. please enter another email";
                } else{
					$success = true;
                    $email = trim($_POST['email']);
                }
            } else{
				$success = false;
              $errormessages[]="Please try again later, something has gone wrong";
            }

            // Close statement
            mysqli_stmt_close($result);
        }
    }

//email


//firstname
if(empty(trim($_POST["firstname"]))){
		$success = false;
        $errormessages[]="Please enter a First Name.";
    } else{
        // Prepare a select statement where firstname is checked in the database
        $sql = "SELECT USERID FROM users WHERE Firstname = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
           // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_firstname);
           
            // Set parameters
            $binded_firstname = trim($_POST["firstname"]);
      
            if(mysqli_stmt_execute($result)){
         
                mysqli_stmt_store_result($result);
               
               
               $success = true;
                 $firstname = trim($_POST['firstname']);
               
            } else{
				$success = false;
        $errormessages[]="Please try again later, there has been a connection problem";
            }

            // Close the statement
            mysqli_stmt_close($result);
        }
    }

//lastname
//firstname
if(empty(trim($_POST["LastName"]))){
	$success = false;
        $errormessages[]="Please enter a Last name.";
    } else{
       // Prepare a select statement where lastname is checked in the database
        $sql = "SELECT USERID FROM usersdetails WHERE Lastname = ?";
       
        if($result = mysqli_prepare($conn, $sql)){
                 // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_lastname);
           
            // Set parameters
            $binded_lastname = trim($_POST["LastName"]);
           

            if(mysqli_stmt_execute($result)){

                mysqli_stmt_store_result($result);
               
               
               $success = true;
                 $lastname = trim($_POST['LastName']);
               
            } else{
					$success = false;
              $errormessages[]="Please try again later. Something is wrong at the moment";
            }

            // Close the statement
            mysqli_stmt_close($result);
        }
    }



 echo json_encode (
		
		array(
		
			'success' => $success,
			
			'errormessages' => $errormessages
		
		)
		
		
		
	);






 
   if(empty($wrongusername) && empty($wrongpassword) && empty($confirm_wrongpassword) && empty($wrongemail) && empty ($wrongfirstname) && empty ($wronglastname)) {
       
        // Prepare an insert statement and store the form data into the database
        $sql = "INSERT INTO usersdetails (USERID, email, password, Firstname, Lastname, Country) VALUES (?, ?, ?,?,?)";
         
        if($result = mysqli_prepare($conn, $sql)){
                  //this will bind the variables 
            mysqli_stmt_bind_param($result, "sssss", $binded_username, $binded_Email,$binded_password,  $binded_firstname,$binded_lastname);
           
      
        
            $binded_password = $Password;
$binded_Email = $email;
$binded_firstname = $firstname;
$binded_lastname = $lastname;
           
        
            if(mysqli_stmt_execute($result)){
              // takes user into this page
                header("location: index.php?page=loginpage");
            } else{
                echo  "Something is wrong, please try again later.";
            }


            mysqli_stmt_close($result);
        }

	
    mysqli_close($conn);
	
	
}
}
?>