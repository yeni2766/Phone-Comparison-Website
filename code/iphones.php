<?php
	// create the database connection
	$conn = new mysqli("localhost", "root", "", "phonedatabase");
	$sql = 'SELECT * FROM phone WHERE phone_name LIKE \'iphone%\' ';
$result = $conn->query($sql);


// Fetch the products from the database
$products = $result -> fetch_all(MYSQLI_ASSOC);
	
?>







<!DOCTYPE HTML>
<html lang = "en">
<head>
<title>
Dashboard
</title>

<link rel ="stylesheet" href ="dashboard.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/7f07b22bb3.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-trendline"></script>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
 
</head>

<body>


<script>



</script>

<div class = "wrapper">
	<!--sidebar here -->
	
	<nav id ="sidebar" class="sidebar">
		 <a href="javascript:void(0)" class="closemenubutton" onclick="closemenu()">&times;</a>
		<div class= "sidebar-header">
		<a href = 'dashboard.php' class = "aaa">	<h4 class = "h5">PhoneCompare</H4></a>
			</div>
<div id = "links">
<a href="Dashboard.php">&#8592; Back</a>
  <a href="comparingphones.php">Compare Devices</a>

</div>
</div>
</nav>

<nav id ="sidebar1" class="sidebar1">
		 <a href="javascript:void(0)" class="closemenubutton" onclick="closemobilemenu()">&times;</a>
		<div class= "sidebar-header">
		<h4 class = "h5" style = 'position:relative; left:100px;'>PhoneCompare</H4>
			</div>
<div id = "mobilelinks" style = 'position:relative; left:175px; '>

  <a href="comparingphones.php" style = 'color:black;'>Compare Devices</a>

</div>
</div>
</nav>



<div id ="dashboardcontent">
<div class = "container-fluid">
<div class ="searchbox">

 <i class="fa fa-search"></i></button> <input type="text" placeholder="Search for a phone" name="search" id="search" >

<div class = "col-md-6  bg-white border-right cc" id = "phonedata"></div>
</div>

<div class = 'content'>

 <button class="openmenubutton" onclick="openmenu()" id = "openbutton">&#9776; </button><h4 class ="h4">Dashboard</h4>
<button class="openmobilemenubutton" onclick="openmobilemenu()" id = "openmobilebutton">&#9776; </button>
  
        <?php foreach ($products as $product): ?>
<div class = "di">
<div class ="box" style = "height:300px;" >



      <a href = 'index.php?page=individualphone&phone_name=<?=$product['phone_name']?> 'class="product">
	
		
            <img src="<?=$product['image']?>" width="150" height="150" alt="<?=$product['phone_name']?>" style = "position:relative; top:70px;">
		
			
            <span class="name"><?=$product['phone_name']?></span>
        
            
            </span>
        </a>
	
		</div>
</div>
 
 </div>




   <?php endforeach; ?>
 



<footer class="page-footer font-small stylish-color-dark pt-4">


 
 <hr>
      <div class="col-md-4 float-md-left">
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Account</h5>
        <p>
          <a href="registrationform.php">Sign Up</a>
        </p>
        <p>
          <a href="dashboardlogin.php">Login</a>
        </p>
        <p>
          <a href="#!">Admin</a>
        </p>


      </div>
	  
	  <div class="col-md-4 mx-auto">

      
        <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Contacts</h5>
    <p>
                   <i class="fas fa-home mr-3"></i> 32 Radland Road
        </p>
        <p>
          <i class="fas fa-phone mr-3"></i> 07895855736
        </p>
        <p>
             <i class="fas fa-envelope mr-3"></i>yeni8200@gmail.com
        </p>
      


      </div>
 
 <hr>
	  
 


  <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register to join PhoneCompare!</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul>


  <hr>

 
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-dribbble"> </i>
      </a>
    </li>
  </ul>



</footer>







</div>



</div>




</div>




 













<script>










function openmobilemenu() {
  document.getElementById("sidebar1").style.height = "200px";
      document.getElementById("sidebar1").style.visibility = "visible";
	   document.getElementById("openmobilebutton").style.visibility = "hidden";
  document.getElementById("dashboardcontent").style.margintop = "250px";

}



function closemobilemenu() {
      document.getElementById("openmobilebutton").style.visibility = "visible";
  document.getElementById("sidebar1").style.height = "0";
    document.getElementById("sidebar1").style.visibility = "hidden";
	
  document.getElementById("dashboardcontent").style.marginbottom = "0";
 
}

















function openmenu() {
  document.getElementById("sidebar").style.width = "250px";
      document.getElementById("sidebar").style.visibility = "visible";
	   document.getElementById("openbutton").style.visibility = "hidden";
  document.getElementById("dashboardcontent").style.marginLeft = "250px";

}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closemenu() {
      document.getElementById("openbutton").style.visibility = "visible";
  document.getElementById("sidebar").style.width = "0";
    document.getElementById("sidebar").style.visibility = "hidden";
	
  document.getElementById("dashboardcontent").style.marginLeft = "0";
 
}

 

    
	
	
	






</script>



</body>
















</html>

<style>


*{
	
	margin:0;
	box-sizing:border-box;
	padding:0;
}

  html, body {
width:100%;
height:100%;
    overflow-x: hidden;
	margin:0;
	padding:0;
}

#budget:focus{
	
	
	width:74%;
}
#budget{
	
	
	width:74%;
}


#dashboardcontent {

  transition:1s ease-in;
}


.darkmode{
	backgroundcolor:black;
	color:white;
	transition:1s;
}

  #chart-container{
border:1px solid black;
}


.content{
	position:relative;
	top:100px;
}







.cc{
	    background-color: white;
font-family:quicksand;
font-weight:bold;

   right: 220px;
    list-style-type: none;
    margin: 0;
    min-width: 250px;
    position: absolute;
    top: 55px;
    z-index: 100;
    padding-left: 0
	transition:all 1s ease;
padding-left:10px;
}
#pic{
	vertical-align:middle;
	
	
}
 #user {
	 margin:3px;
	 
 }
	
	//responsive

.footer{

}

	

.brand{
position:relative;
top:10px;
height:50px;
font-family:quicksand;
padding-bottom:30px;
font-weight:bold;
}

#sidebar{
transition:width 1s;

}
#sidebar1{
transition:height 1s;

}
.row {

	padding:50px 0px 0px 50px;
	
}
.chart-container{
	position:relative;
	left:50px;
	
	
}
.aa{
position:relative;

	box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;

	
}
#phonedata {

margin-left:400px;

}


@media (min-width: 1000px) {
 
.container{
		position:relative;
	bottom:210px;
	
}
.openmobilemenubutton{
	display:none;
}


#sidebar1{
display:none;

}

.h4{
	position:relative;
	bottom:200px;
}


}



#sidebar1{
visibility:hidden;

}






















@media only screen and (max-width: 800px){
	
	body{
width:100%;
height:100%;
margin:0;
padding:0;
overflow-x:hidden;
}

.container{
position:relative;
right:30px;
}
	
	#chartbox{
		position:absolute;
		width:20vh;
		
		
		
	}
	.searchbox #phonedata{
		position:absolute;
		right:10px;
	}	
		
	
	 input[type=text]{

	width:70%;
	
	
	
}
.container{
		position:relative;
	bottom:70px;
	
}
 #openbutton{

display:none;
}
 
 
  .pp {
    border-bottom: 1px solid black !important;
	position:relative;
	
  }
  
  
#sidebar{
display:none;

}
#dashboardcontent{
margin-left : 0px;

}

#openbutton{

visibility:hidden;
}
#openmobilebutton{

visibility:visible;
}

}

#sidebar .closemenubutton{

	position: absolute;
  top: 0;
  right: 5px;
  font-size: 36px;
  margin-left: 50px;
	text-decoration:none;
	
}
#sidebar1 .closemenubutton{

	position: absolute;
  top: 0;
  right: 5px;
  font-size: 36px;
left:0;
	text-decoration:none;
	padding-left:10px;
	color:black;
	
}
.h4{
	margin-left:45px;
	font-weight:bold;
	margin-top:90px;
	color:purple;
	
	
}
.openmenubutton {
visibility:hidden;
  font-size: 20px;
  cursor: pointer;
background-color:transparent;
  color: black;
  padding: 20px 15px;
  border: none;
}

.openmobilemenubutton {
visibility:hidden;
  font-size: 20px;
  cursor: pointer;
background-color:transparent;
  color: black;
  padding: 20px 15px;
  border: none;
  position:relative;
  bottom:55px;
}

#dashboardcontent {
  transition: margin-left 1s; 
  padding: 20px;
}
  input:focus, textarea:focus, select:focus{
        outline: none;
    }
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
body{
	
	overflow-x:hidden
}

#phonedata{

	
}
		
	
}
#search{
	border:none;
	width:100%;
		background:transparent;
	border-bottom:1px solid black;
  font-family: quicksand;
  font-size:1rem;

	
	
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  position:relative;
  top:130px;
  text-decoration: none;
  font-size: 20px;
  font-family:quicksand;
  font-weight:bold;
  color: black;
  display: block;
  transition: 0.4s;
}

.h5{
	position:relative;
right:15px;
	font-family:quicksand;
	font-weight:bold;
	font-size:25px;
	
	color:#080808;
	
	
}

 input[type=text]{
	border:none;
	transition:all 1s ease;
	width:100%;
		background:transparent;
	border-bottom:1px solid black;
  font-family: quicksand;
  font-size:1rem;

	
	
}
.brand a{
	text-decoration:none;
	color:black;
	cursor:black;
}
input:focus{
	width:100%;
	
	
}
html,body
{
background-color:#F4F0F0;
font-family:quicksand;
}
a{
	
	text-decoration:none;
}


.brandfinder{
	
background-color:	purple;
	
}

.phonename{
	
	margin-left:20px;
}

#sidebar1 {
height:0px;
width:100%;
position:relative;
background-color:#DCDCDC;
top:0;
border-right:1px solid #d3d3d3;
box-shadow: 0px 0px 5px 0px rgb(211,211,211);

}

ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  width:600px;
	background-color:#F4F0F0;
	position:relative; 
	
}


ul.breadcrumb li {
  display: inline;
  font-size: 18px;

}


ul.breadcrumb li+li:before {
  
  color: black;
  content: "/\00a0";
}


ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}

ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}




































































.box{
background:white;
width:70%;
height:300px;
margin:20px;	
box-sizing:border-box;
display:inline-block;
		box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}
.di{
display:flex;
flex-direction:row;
justify-content:space-around
flex-flow:wrap;

width:100%;
height:100%;



}



@media screen and (max-width:1200px){
.box	{
		width:40%;
		
	}

}

@media screen and (max-width:600px){
.box	{
		width:100%;
		
	}

}


.box a{
	
	
	text-decoration:none;
	color:black;
}


.box span{
	
	
	font-size:20px;
	position:relative;
	top:70px;

}

.sidebar-header .h5{
	position:relative;
left:-50px;
	font-family:quicksand;
	font-weight:bold;
	font-size:25px;
	top:-140px;
	color:#080808;
	
	
}
ul.breadcrumb {
  padding: 10px 16px;
  list-style: none;
  width:600px;
	background-color:#F4F0F0;
	position:relative; 
	
}


ul.breadcrumb li {
  display: inline;
  font-size: 18px;

}


ul.breadcrumb li+li:before {
  
  color: black;
  content: "/\00a0";
}


ul.breadcrumb li a {
  color: #0275d8;
  text-decoration: none;
}

ul.breadcrumb li a:hover {
  color: #01447e;
  text-decoration: underline;
}


</style>