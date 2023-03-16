<?php
session_start();
	// create the database connection
	require_once 'phonedatabasesql.php';
	
	// Select query to fetch the phone names and prices onto the chart
	
	// Create the data
	$phone1 = $_SESSION['phone1'];
		$phone2 = $_SESSION['phone2'];
	
	$sql = "SELECT * FROM phone where phone_name LIKE '$phone1%'";
	$result = mysqli_query ($conn1, $sql);
	  $row = $result->fetch_all(MYSQLI_ASSOC);
	  
	  
	  $sql1 = "SELECT * FROM phone where phone_name LIKE '$phone2%'";
	$result1 = mysqli_query ($conn1, $sql1);
	  $row1 = $result1->fetch_all(MYSQLI_ASSOC);
	// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['email']))   header("location: ../dashboardlogin.php");
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


<script>



</script>

<div class = "wrapper">
	<!--sidebar here -->
	
	<nav id ="sidebar" class="sidebar">
		 <a href="javascript:void(0)" class="closemenubutton" onclick="closemenu()">&times;</a>
		<div class= "sidebar-header">
			<a href = 'dashboard.php'><h4 class = "h5">PhoneCompare</H4></a>
			</div>
<div id = "links">
 <a href="Dashboard.php">Back</a>
 	<a href="logout.php">Logout</a>
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
	<a href="logout.php">Logout</a>
</div>
</div>
</nav>




<div id ="dashboardcontent">
<div class = "container-fluid">



 
 <button class="openmenubutton" onclick="openmenu()" id = "openbutton">&#9776; </button><h4 class ="h4">Dashboard </h4>
 <button class="openmobilemenubutton" onclick="openmobilemenu()" id = "openmobilebutton">&#9776; </button>
<?php foreach ($row as $result): ?>
<div class = 'letters'>
	<h2>   <?php echo $result['phone_name']; ?> vs </h2>

				
				  <?php endforeach; ?>
				  <?php foreach ($row1 as $result1): ?>
				  	<h2>   <?php echo $result1['phone_name']; ?></h2>

				
				  <?php endforeach; ?>
	</div>		
<div class = "container">
<div class ="row">


<div class ="col-md-5 shadow-sm p-3 bg-light bb" style = "height:550px;" id = "chartscreen">


<div class = "form-group">

<?php foreach ($row as $result): ?>
<img src =  <?php echo $result['image']; ?> height = 250 width = 230 />

	   <?php echo $result['phone_name']; ?><br><br>
						<p>Release Date: <?php echo $result['phone_date']; ?>
						<p>Price: &#163;<?php echo $result['phone_price']; ?>
						<p class = 'wifi' >Does this device have WIFI: <?php echo $result['WIFI']; ?>
											<p class = 'device'>  This device has a <?php echo $result['screensize'];  ?> screen</p>
						<p class = 'device'>  This device has a <?php echo $result['megapixel'];  ?> megapixel camera</p>
									<p class = 'device'>  This device has a <?php echo $result['battery'];  ?> Battery</p>
				<?php endforeach; ?>
              

</div>


</table>
		</div>
		
		

<div class ="col-md-5 shadow-sm p-3 bg-light bb" style = "height:550px;" id = "chartscreen">

<div class = "form-group">

<?php foreach ($row1 as $result1): ?>
	   <img src =  <?php echo $result1['image']; ?> height = 250 width = 230 />

	   <?php echo $result1['phone_name']; ?><br><br>
				<p>Release Date: <?php echo $result1['phone_date']; ?>
				<p>Price: &#163;<?php echo $result1['phone_price']; ?>
				<p class = 'wifi' >Does this device have WIFI: <?php echo $result1['WIFI']; ?>
					<p class = 'device'>  This device has a <?php echo $result1['screensize'];  ?> screen</p>
					<p class = 'device'>  This device has a <?php echo $result1['megapixel'];  ?> megapixel camera</p>
					<p class = 'battery'>  This device has a <?php echo $result1['battery'];  ?> Battery</p>
				  <?php endforeach; ?>
              

</div>





</table>











		


		</div>
		
		
		
		
<div class ="col-md-5 shadow-sm p-3 bg-light aa" style = "height:450px;" id = "chartscreen">

<div class = "form-group">

<?php foreach ($row as $result): ?>
<table class="table">
	<thead>
    <tbody>

        <tr>
          <th>Name</th>
		      <td><?=$result['phone_name']?> </td>
        </tr>
        <tr>
          <th>Date</th>
 		      <td><?=$result['phone_date']?>  </td>
        </tr>
        <tr>
          <th>WIFI</th>
			<td><?=$result['WIFI']?></td>
        </tr>
      <tr>
          <th>Memory</th>
       <td><?=$result['GPS']?></td>
	   
        </tr>
		
		    <tr>
          <th>RAM</th>
             <td><?=$result['RAM']?></td>
        </tr>
		    <tr>
          <th>Selfie Camera</th>
         <td><?=$result['selfiecamera']?></td>
        </tr>
		    <tr>
          <th>OS</th>
       <td><?=$result['OS']?></td>
        </tr>
    </tbody>
</table>



				  <?php endforeach; ?>
              

</div>


		</div>
		
		
<div class ="col-md-5 shadow-sm p-3 bg-light aa" style = "height:450px;" id = "chartscreen">

<div class = "form-group">

<?php foreach ($row1 as $result1): ?>
<table class="table">
	<thead>
    <tbody>

        <tr>
          <th>Name</th>
		      <td><?=$result1['phone_name']?> </td>
        </tr>
        <tr>
          <th>Date</th>
 		      <td><?=$result1['phone_date']?>  </td>
        </tr>
        <tr>
          <th>WIFI</th>
			<td><?=$result1['WIFI']?></td>
        </tr>
      <tr>
          <th>Memory</th>
       <td><?=$result1['GPS']?></td>
	   
        </tr>
		
		    <tr>
          <th>RAM</th>
             <td><?=$result1['RAM']?></td>
        </tr>
		    <tr>
          <th>Selfie Camera</th>
         <td><?=$result1['selfiecamera']?></td>
        </tr>
		    <tr>
          <th>OS</th>
       <td><?=$result1['OS']?></td>
        </tr>
    </tbody>
</table>








              

</div>

		</div>
		
		<div class = "col-md-6 shadow-sm p-3 bg-light buy" >
<p>Purchase <?=$result['phone_name']?> Here  
<a href = '<?=$result['link']?>'><button class = 'button2'>Click Me</button></a>
<p>Purchase <?=$result1['phone_name']?> Here  
<a href = '<?=$result1['link']?>'><button class = 'button2'>Click Me</button></a>
</div>
					  
		
			<div class = "col-md-4 shadow-sm p-3 bg-light buy" >
		
 
 
 
 	<div class = "chartbox" id = "chart-container">
        
            <canvas id="PhoneChart" ></canvas>


		</div>
 
</div>
					  
		
		
		
		
						  <?php endforeach; ?>
		
		

		
		</div>
</div>







</div>



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



















</div>





<script>
//this passes the information through to ajax
$(document).ready(function(){
	$('#search_text').keyup(function(){
		var phone = $(this).val();
	if (phone != '')
	{
		$.ajax({
			url: "dropdown1.php",
			method: "post",
			data:{search:phone},
			dataType:"text",
			success:function(data)
			{
				$('#phonetable').html(data);
				
			}
		
		
	});
	}
		
	});
});

$(document).ready(function(){
	$('#search_text1').keyup(function(){
		var phone = $(this).val();
	if (phone != '')
	{
		$.ajax({
			url: "dropdown1.php",
			method: "post",
			data:{search:phone},
			dataType:"text",
			success:function(data)
			{
				$('#phonetable1').html(data);
				
			}
		
		
	});
	}
		
	});
});





	
	
	
	
	
	var canvas = document.getElementById("PhoneChart").getContext('2d');
		let barchart = new Chart(canvas, {
		type:'radar',
		data:{
			labels:['Design', 'Performance', 'Camera', 'Display', 'Battery'],
			datasets:[
			{
				label:' Points Score out of 100 (Phone on the left)',
				backgroundColor: 'rgba(128, 99, 132, 0.2)',
    borderColor: 'rgb(128, 99, 132)',
    pointBackgroundColor: 'rgb(128, 99, 132)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(255, 99, 132)',
				data: [<?=$result['design']?>, <?=$result['performance']?>, <?=$result['camera']?>, <?=$result['display']?>, <?=$result['batteries']?>]
				
			},		 {
    label: 'Points Score out of 100 (Phone on the right)',
    data: [<?=$result1['design']?>, <?=$result1['performance']?>, <?=$result1['camera']?>, <?=$result1['display']?>, <?=$result1['batteries']?>],
  
 fill: true,
    backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'
    
  }],
		
			
		},

		options: {
        maintainAspectRatio: false,
		responsive:true,
	
        },
		 plugins: {
            title: {
                display: true,
                text: 'The overall summary of the smartphone'
            }
        }
	});
	

	
	
	
	
	
	function myFunction(x) {
  if (x.matches) { // If media query matches
document.getElementById("chart-container").style.position = "absolute";
document.getElementById("chart-container").style.height = "35vh";
document.getElementById("chart-container").style.width = "30vh";
document.getElementById("chart-container").style.left = "90px";
  document.getElementById("table").style.fontSize = "5px";

  } else {

  }
}

var x = window.matchMedia("(max-width: 400px)")
myFunction(x)
x.addListener(myFunction) 

function smallerdevices(width300) {
  if (width350.matches) { // If media query matches
document.getElementById("chart-container").style.position = "absolute";
document.getElementById("chart-container").style.height = "30vh";
document.getElementById("chart-container").style.width = "20vh";
document.getElementById("chart-container").style.left = "80px";
  document.getElementById("table").style.fontSize = "5px";
  } else {

  }
}

var width350 = window.matchMedia("(max-width: 375px)")
smallerdevices()
width350.addListener(smallerdevices) 

	





function iphone6sandothers(iphone1) {
  if (iphone1.matches) { // If media query matches
document.getElementById("chart-container").style.position = "relative";
document.getElementById("chart-container").style.height = "30vh";
document.getElementById("chart-container").style.width = "45vh";
document.getElementById("chart-container").style.right = "30px";
document.getElementById("table").style.position = "relative";
document.getElementById("table").style.height = "30vh";
document.getElementById("table").style.width = "10px";

  } else {

  }
}

var iphone1 = window.matchMedia("(max-width: 414px)")
iphone6sandothers(iphone1)
iphone1.addListener(iphone6sandothers) 









function openmobilemenu() {
  document.getElementById("sidebar1").style.height = "200px";
      document.getElementById("sidebar1").style.visibility = "visible";
	   document.getElementById("openmobilebutton").style.visibility = "hidden";
  document.getElementById("dashboardcontent").style.margintop = "250px";
  document.getElementByClassName("nav").style.width = "0px";
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
  document.getElementByClassName("nav").style.width = "0px";
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
	
	

@media only screen and (max-width:400px){
	
	.chartbox{
		width:250px;
		height:25%;
		
		
	}
	
	
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
@media (max-width: 767px) {
 
  .pp {
    border-bottom: 1px solid black !important;
	position:relative;
	
  }
#sidebar{
visibility:hidden;

}
#dashboardcontent{
margin-left : 0px;

}

#openbutton{

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
.h4{
	margin-left:45px;
	font-weight:bold;
	
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
right:15px;

	left:-55px;
	font-family:quicksand;
	font-weight:bold;
	font-size:25px;
	bottom:130px;
	color:#080808;
	
	
}

 input[type=text]{
	border:none;
	transition:all 1s ease;
	width:30%;
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
.bb{
	height:700px;
	
	
}
.btn1{
	margin-top:10px;
	
	
}
.letters{
	
	position:relative; 
	left:50px;
	font-weight:bold;
}
p{
	
	color:black;
	font-weight:bold;
}

.wifi{
	
	
	font-style:italic;
}

.device{
	font-style:italic;
	
	
	
	
}



.table{
	border: 1px solid black;
	width:100%;
	color:black;
}
table, th, td {
border: 1px solid black;
border-collapse: collapse;
}

 td {
padding: 5px;
text-align: left;
background-color:white;
color:black;
border: 1px solid black;
}
th{
	background-color:purple;
	width:20%;
	color:white;
	border: 1px solid white;
	height:10%;
}
.buy{
	position:relative;
	top:50px;
	
	
}
.aa
{

	positive:relative;
	top:30px;
	
}

.tabledeal{
	font-size:20px;
	width:50%;
height:10%;
}

.tabledeal th{

	background-color:purple;
	width:20%;
	color:white;
	border: 1px solid white;
	height:5px;
}
	
	
	


.buy #displaychart{
	
	background-color: #fbeee0;
  border: 2px solid white;
  border-radius: 30px;
  box-shadow: purple 4px 4px 0 0;
  color: black;
  cursor: pointer;
  display: inline-block;
  font-weight: 600;
  font-size: 18px;
  padding: 0 18px;
  line-height: 50px;
  text-align: center;
  text-decoration: none;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
	
	
}
.buy #displaychart:hover {
  background-color: #fff;
}

.buy #displaychart:active {
  box-shadow: #422800 2px 2px 0 0;
  transform: translate(2px, 2px);
}






@media and screen(max-width: 450px) {
 
.battery{
	position:relative;
	bottom:20px;
}


}




@media (min-width: 1000px) {
 
.container{
		position:relative;
	bottom:50px;
	
}
.openmobilemenubutton{
	display:none;
}


#sidebar1{
display:none;

}

.h4{
	position:relative;
	bottom:50px;
}


}



#sidebar1{
visibility:hidden;

}






















@media (max-width: 767px) {
	.searchbox #phonedata{
		position:absolute;
		right:10px;
	}	
		
	.tabledeal{
	font-size:20px;
	width:10%;
height:10%;
}

	 input[type=text]{

	width:70%;
	
	
	
}
.container{
		position:relative;
	bottom:40px;
	
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
right:15px;
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

#sidebar{
transition:width 1s;

}
#sidebar1{
transition:height 1s;

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





















</style>