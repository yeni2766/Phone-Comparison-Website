

<?php

include 'phonedatabasesql.php';

if (isset($_GET['phone_name'])) {
	$phonedetails = $_GET['phone_name'];
    $sql = "SELECT * FROM phone WHERE phone_name = '".$phonedetails."'";
	$result = mysqli_query($conn, $sql);
	$productitem = $result-> fetch_all(MYSQLI_ASSOC);
	

	}


?>
<!DOCTYPE HTML>
<html lang = "en">
<head>
<title>
Dashboard
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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

</head>

<body>
<div class = "wrapper">
	<!--sidebar here -->
	
	<nav id ="sidebar" class="sidebar">
			<a href = 'dashboard.php' class = "aaa">	<h4 class = "h5">PhoneCompare</H4></a>
		 <a href="javascript:void(0)" class="closemenubutton" onclick="closemenu()">&times;</a>
		<div class= "sidebar-header">

			</div>
<div id = "links">
 <a href="Dashboard.php">&#8592; Back</a>
  <a href="comparingphones.php">Compare Devices</a>

</div>
</div>
</nav>	<nav id ="sidebar1" class="sidebar1">
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
<ul class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
  
  
</ul>

 <button class="openmenubutton" onclick="openmenu()" id = "openbutton">&#9776; </button><h4 class ="h4">Dashboard</h4>
 <button class="openmobilemenubutton" onclick="openmobilemenu()" id = "openmobilebutton">&#9776; </button>

	<?php foreach ($productitem as $product): ?>

   

<div class = "container">
<div class ="row">

<div class ="col-md-3 p-3 bg-light  aa" style = "height:300px;" >
 <img src = <?=$product['image']?>  height = 100 width = 80   class = "img" />
<p>Name: <?=$product['phone_name']?></p>
<p>Release Date: <?=$product['phone_date']?></p>
<p>Price:&#163;<?=$product['phone_price']?></p>
</div>


<div class ="col-md-3  p-3 bg-light  aa" style = "height:300px;" >
 <h1 class="megapixelnumber"><?=$product['megapixel']?> </h1>
 
 <h1 class="megapixel">MP</h1>
<i class="fa fa-camera" style = "position:relative; left:0px; top:10px; font-size:35px; color:#010d01;"></i>

</div>


<div class ="col-md-3  p-3 bg-light  aa" style = "height:300px;" >
 <h1 class="batterynumber"><?=$product['battery']?> </h1>
<i class="fa fa-battery-full"style = "position:relative; font-size:35px; color:#010d01;" ></i>



</div>


<div class ="col-md-3  p-3 bg-light aa" style = "height:300px;" >
 <h1 class="screensize"><?=$product['screensize']?> </h1>
<i class="fa fa-mobile"style = "position:relative; left:0px; top:0px; font-size:70px; color:#010d01;" ></i>
</div>
</div>








</div>
<div class = "phonedetails">
<div class = "row1">
<table class="table">
	<thead>
    <tbody>

        <tr>
          <th>Name</th>
		      <td><?=$product['phone_name']?>  </td>
        </tr>
        <tr>
          <th>Date</th>
 		      <td><?=$product['phone_date']?>  </td>
        </tr>
        <tr>
          <th>WIFI</th>
			<td><?=$product['WIFI']?></td>
        </tr>
      <tr>
          <th>Memory</th>
       <td><?=$product['GPS']?></td>
	   
        </tr>
		
		    <tr>
          <th>RAM</th>
             <td><?=$product['RAM']?></td>
        </tr>
		    <tr>
          <th>Selfie Camera</th>
         <td><?=$product['selfiecamera']?></td>
        </tr>
		    <tr>
          <th>OS</th>
       <td><?=$product['OS']?></td>
        </tr>
    </tbody>
</table>
<div class = "chart">
<div class ="col-md-4 shadow-sm p-3 bg-light border " style = "height:350px;" >
 <button class = "button-74" id = "displaychart">Display Chart</button>
 
 
 
 	<div class = "chartbox" id = "chart-container">
        
            <canvas id="PhoneChart" ></canvas>


		</div>
 
 
</div>


</div>
</div>
</div>
<div class = "col-md-9 shadow-sm p-3 bg-light buy" >
<h1 class = 'display-5'>Best Deal<h1>
<p style= 'fontsize:15px;'>Purchase <?=$product['phone_name']?> Here  </p>
<a href = '<?=$product['link']?>'><button class = 'button2'>Click Me</button></a>
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





<script>
//this is be the code to link ajax to the search bar and this will pass it up through to the php page for the database
$(document).ready(function(){
	      document.getElementById("phonedata").style.display = "none";
	$('#search').keyup(function(){
		var phonedetails = $(this).val();
		if(phonedetails==""){
	$('#phonedata').css({'display':'none'});
    $('#phonedata').html("");   //to empty the result list
    return;                  //return is to abort the operation
}
		$.post("getphonedetails.php", {phonedetails:phonedetails}, function(data){
			$('#phonedata').html(data);
			$('#phonedata').css({'display':'block'});
			
		});
	});
	
});


      document.getElementById("sidebar1").style.visibility = "hidden";


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









//the div
document.getElementById("chart-container").style.position = "relative";
document.getElementById("chart-container").style.height = "40vh";
document.getElementById("chart-container").style.width = "40vh";
document.getElementById("chart-container").style.left = "70px";
var canvas = document.getElementById("PhoneChart");

//thecanvas


function myFunction(x) {
  if (x.matches) { // If media query matches
document.getElementById("chart-container").style.position = "absolute";
document.getElementById("chart-container").style.height = "35vh";
document.getElementById("chart-container").style.width = "36vh";
document.getElementById("chart-container").style.left = "90px";

  } else {

  }
}

var x = window.matchMedia("(max-width: 414px)")
myFunction(x)
x.addListener(myFunction) 

function smallerdevices(width300) {
  if (width350.matches) { // If media query matches
document.getElementById("chart-container").style.position = "absolute";
document.getElementById("chart-container").style.height = "35vh";
document.getElementById("chart-container").style.width = "30vh";
document.getElementById("chart-container").style.left = "80px";

  } else {

  }
}

var width350 = window.matchMedia("(max-width: 375px)")
smallerdevices()
width350.addListener(smallerdevices) 























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

  





function setWidth(width) {
  var canvas = document.getElementById("PhoneChart");  
  canvas.width = "1900px";
}









document.getElementById("displaychart").addEventListener("click",function(){
	document.getElementById("displaychart").style.visibility="hidden";
	
	
	
	
	
	var canvas = document.getElementById("PhoneChart").getContext('2d');
		let barchart = new Chart(canvas, {
		type:'radar',
		data:{
			labels:['Design', 'Productivity', 'Camera', 'Display', 'Battery'],
			datasets:[
			{
				label:'Points Score out of 100',
				backgroundColor:'purple',
				borderColor: 'black',
				borderWidth:1,
				data: [<?=$product['design']?>, <?=$product['performance']?>, <?=$product['camera']?>, <?=$product['display']?>, <?=$product['batteries']?>]
				
			}
		]
			
		},
		
		options: {
        maintainAspectRatio: false,
		responsive:true,
	
        }
	});
	

	
	
	
	
	
	
	


});


		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	























</script>



</body>
















</html>

<style>

.button2 {
	color: white;
	background-color: purple;
	transition: .2s ease-in-out;
	border-left: 3px transparent solid;
	border-right: 3px transparent solid;
	font-family:quicksand;
	text-transform:uppercase;
	font-weight:bold;
	
}

.button2:hover {
	color: black;
	background-color: white;
	border-left: purple 3px solid;
	border-right: purple 3px solid;
}



	




#sidebar{
transition:width 1s;

}
#sidebar1{
transition:height 1s;

}

.aa{
position:relative;

	box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;

	
}
#phonedata {
position:absolute;
margin-left:150px;
margin-top:50px;

}


@media (min-width: 1000px) {
 .aa{
	 
	 position:relative;
	 bottom:150px;
 }
.buy{
	position:relative;
	left:400px;
	bottom:500px;
	height:250px;
	width:500px;
	
}

.openmobilemenubutton{
	display:none;
}


#sidebar1{
display:none;

}

.h4{
	position:relative;
	bottom:210px;
}

.phonedetails{
	position:relative;
	bottom:150px;
	
	
}
}



#sidebar1{
visibility:hidden;

}





@media (max-width: 767px) {
	.searchbox #phonedata{
		position:absolute;
		right:10px;
		top:50px;
		z-index:50px;
	}	
		
	
	 input[type=text]{

	width:70%;
	
	
	
}
.fa fa-camera{
	position:relative;
	right:50px;
}

.container{
		position:relative;
	bottom:95px;
	
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
@media screen and (max-height: 760px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}

}


@media screen and (max-width: 412px) {
 
.tabledeal{
	font-size:0.5rem;
	width:70%;
height:10%;
}
.border{
	
	border-bottom:1px solid black;
	
}

}








body{
	
	overflow-x:hidden;
}

#phonedata{

	
}
		
	
}
#search{
	border:none;
	width:20%;
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
left:5px;
bottom:110px;
	font-family:quicksand;
	font-weight:bold;
	font-size:25px;
	
	color:#080808;
	
	
}

 input[type=text]{
	border:none;
	transition:all 1s ease;
	width:50%;
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

a{
	
	text-decoration:none;
}
.aaa{
	
	color:white;
	
}


.tabledeal{
	font-size:10px;
	width:70%;
height:10%;
}


#PhoneChart{
	position:relative;
	right:25px;
	bottom:20px;
	
}


html,body
{
background-color:#F4F0F0;
font-family:quicksand;
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


