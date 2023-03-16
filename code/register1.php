<?php

require_once 'dashboardsql.php';

$email = $password = $confirmpassword = $firstname = $lastname = "";
$wrongemail = $wrongpassword = $confirm_wrongpassword = $wrongfirstname = $wronglastname = "";
 


 
// this checks the form data when it is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
 

    //checks to see if it is the right password
    if(empty(trim($_POST["Password"]))){
        $wrongpassword= "Please enter a password.";  
echo $wrongpassword;
    } elseif(strlen(trim($_POST["Password"])) < 7){
        $wrongpassword = "Your password must have 7 characters at least to create an account.";
echo $wrongpassword;
    } else{
        $password = trim($_POST["Password"]);
    }
   
    // Validate confirm password
    if(empty(trim($_POST["confirmpassword"]))){
        $confirm_wrongpassword  = "Please confirm password.";  
echo  $confirm_wrongpassword  ;
    } else{
        $pwdrepeat = trim($_POST["confirmpassword"]);
        if(empty($wrongpassword) && ($password != $pwdrepeat)){
            $confirmpassword = "Password did not match. please try again";
echo $confirmpassword;
        }
    }
  
  


if(empty(trim($_POST["email"]))){
        $wrongemail = "Please enter a email.";
echo $wrongemail;
    } else{
//checks if it is the right email that selcts the entered email and checks if it is in the database
        $sql = "SELECT usersid FROM users WHERE email = ?";
       
        if($result= mysqli_prepare($conn1, $sql)){
    // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_Email);
           

            $binded_Email = trim($_POST["email"]);
           
          
            if(mysqli_stmt_execute($result)){
       
                mysqli_stmt_store_result($result);
                              //if it matches the user input from the database it will send that message
                if(mysqli_stmt_num_rows($result) == 1){
                    $wrongemail = "This email is already taken. please enter another email";
echo $wrongemail;
                } else{
                    $email = trim($_POST['email']);
                }
            } else{
                echo " Please try again later, something has gone wrong";
            }

            // Close statement
            mysqli_stmt_close($result);
        }
    }





//email


//firstname
if(empty(trim($_POST["firstname"]))){
        $wrongfirstname = "Please enter a First Name.";
echo $wrongfirstname;
    } else{
        // Prepare a select statement where firstname is checked in the database
        $sql = "SELECT usersid FROM users WHERE firstname = ?";
        if($result = mysqli_prepare($conn1, $sql)){
           // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_firstname);
           
            // Set parameters
            $binded_firstname = trim($_POST["firstname"]);
      
            if(mysqli_stmt_execute($result)){
         
                mysqli_stmt_store_result($result);
               
               
               
                 $firstname = trim($_POST['firstname']);
               
            } else{
                echo "Please try again later, there has been a connection problem";
            }

            // Close the statement
            mysqli_stmt_close($result);
        }
    }
	if(empty(trim($_POST["LastName"]))){
        $wronglastname = "Please enter a Last Name.";
echo $wronglastname;
    } else{
        // Prepare a select statement where firstname is checked in the database
        $sql = "SELECT usersid FROM users WHERE lastname = ?";
        if($result = mysqli_prepare($conn1, $sql)){
           // joins the variables together to be used as parameters
            mysqli_stmt_bind_param($result, "s", $binded_lastname);
           
            // Set parameters
            $binded_lastname = trim($_POST["LastName"]);
      
            if(mysqli_stmt_execute($result)){
         
                mysqli_stmt_store_result($result);
               
               
               
                 $lastname = trim($_POST['LastName']);
               
            } else{
                echo "Please try again later, there has been a connection problem";
            }

            // Close the statement
            mysqli_stmt_close($result);
        }
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	



  //if the error messages variables are not set  then it will make the statement
    if(empty($wrongusername) && empty($wrongpassword) && empty($confirm_wrongpassword) && empty($wrongemail) && empty ($wrongfirstname) && empty ($wronglastname)){
       
        // Prepare an insert statement and store the form data into the database
        $sql = "INSERT INTO users (email, firstname, lastname, password) VALUES (?, ?, ?,?)";
         
        if($result = mysqli_prepare($conn1, $sql)){
                  //this will bind the variables 
            mysqli_stmt_bind_param($result, "ssss", $binded_Email,$binded_firstname,$binded_lastname,$binded_password);
           
      

            $binded_password = $password;
		
$binded_Email = $email;
$binded_firstname = $firstname;
$binded_lastname = $lastname;


            if(mysqli_stmt_execute($result)){
              // takes user into this page

                header("location:  dashboardlogin.php");

            } else{
                echo  "Something is wrong, please try again later.";
            }


            mysqli_stmt_close($result);
        }
    }
   
  
    mysqli_close($conn1);
}



