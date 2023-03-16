<?php
session_start();

require_once 'phonedatabasesql.php';

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION['email']))   header("location: ../dashboardlogin.php");

	// create the database connection


	// Assign variables that i will use for the chart
	$label = $data = "";
	
	// Select query to fetch the phone names and prices onto the chart
	$sql = "select phone_name, phone_price from phone where brandname = 'iPhone' order by phoneID ASC";
	$result = $conn1->query($sql);




	
	// Create the data
	while($row = $result->fetch_assoc()){
		$label .= "'" . $row['phone_name'] . "',";
		$data .= $row['phone_price'] . ",";
	}
	
	// this will be then assigned to javascript//
	
	$phonename = trim($label, ",");
	$price = trim($data, ",");
?>


<?php
require_once 'dashboardsql.php';
	$email = $_SESSION['email'];
	
	$sql1 = "select * from users where email = '$email'";
		$row3 = $conn1->query($sql1);





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
		<h4 class = "h5">PhoneCompare</H4>
			</div>
<div id = "links">

	<a href="logout.php">Logout</a>
  <a href="comparingphones.php">Compare Devices</a>
    <a href="report.php">Report</a>

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

 <?php foreach ($row3 as $result): ?>
	<h1 class = 'display-5' style = 'position:relative; left:45px; top:50px;'>Hi, <?php echo $result['firstname'] ?>!</h1>

  <?php endforeach; ?>


 <button class="openmenubutton" onclick="openmenu()" id = "openbutton">&#9776; </button><h4 class ="h4">Dashboard</h4 >

 <button class="openmobilemenubutton" onclick="openmobilemenu()" id = "openmobilebutton">&#9776; </button>
<div class = "container">
<div class ="row">
<div class ="col-md-5 shadow-lg p-3 bg-light border-right pp" style = "height:300px;" >

 <div class="card  text-white brandfinder">
    <div class="card-body">Brand Finder</div>
  </div>
   <div class="card bg-white text-black brand ">
  <a href = 'iphones.php'>  <div class="card-body">IPhone</div></a>
  </div>
   <div class="card bg-white text-dark brand ">
   <a href = 'samsung.php'>   <div class="card-body">Samsung</div></a>
  </div>
    <div class="card bg-white text-black brand ">
  <a href = 'google.php'>     <div class="card-body">Google</div></a>
  </div>

</div>

<div class ="col-md-7 shadow-sm p-3 bg-light bb" style = "height:300px;" id = "chartscreen">

<select name="option" id="selectbrand">
			 <option value="" selected disabled hidden>Choose a phone brand here</option>
			<option value="1">iPhone</option>
			<option value="2">Samsung</option>
			<option value="3">Google</option>
		</select>
<input type = 'number' id = 'budget'	placeholder = 'What is your price range?' > 
<button class = 'button1'onclick = "filter()" >Filter</button>
		<div class = "chartbox" id = "chartbox" >
        
            <canvas id="PhoneChart" title="When selecting the chart, please click on the data points for more information on the smartphone."></canvas>


		</div>
		

		</div>
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





<script>
//this is be the code to link ajax to the search bar and this will pass it up through to the php page for the database
$(document).ready(function(){
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







function laptop(x) {
  if (x.matches) { //
document.getElementById("chartbox").style.position = "absolute";
document.getElementById("chartbox").style.height = "35vh";
document.getElementById("chartbox").style.width = "55vh";

  } else {

  }
}

var x = window.matchMedia("(max-width: 1400px)")
laptop(x)
x.addListener(laptop) 





function phoneunder400px(iphone) {
  if (iphone.matches) { // If media query matches
document.getElementById("chartbox").style.position = "absolute";
document.getElementById("chartbox").style.height = "25vh";
document.getElementById("chartbox").style.width = "30vh";


  } else {

  }
}

var iphone = window.matchMedia("(max-width: 400px)")
phoneunder400px(iphone)
iphone.addListener(phoneunder400px) 





function iphone6sandothers(iphone1) {
  if (iphone1.matches) { // If media query matches
document.getElementById("chartbox").style.position = "relative";
document.getElementById("chartbox").style.height = "30vh";
document.getElementById("chartbox").style.width = "35vh";
;

  } else {

  }
}

var iphone1 = window.matchMedia("(max-width: 414px)")
iphone6sandothers(iphone1)
iphone1.addListener(iphone6sandothers) 


//ipad


function ipad(ipaddevice) {
  if (ipaddevice.matches) { // If media query matches
document.getElementById("chartbox").style.position = "absolute";
document.getElementById("chartbox").style.height = "25vh";
document.getElementById("chartbox").style.width = "1000wh";


  } else {

  }
}

var ipaddevice = window.matchMedia("(max-width: 600px)")
ipad(ipaddevice)
ipaddevice.addListener(ipaddevice)











//the div
document.getElementById("chartbox").style.position = "absolute";
document.getElementById("chartbox").style.height = "35vh";
document.getElementById("chartbox").style.width = "55vh";

var canvas = document.getElementById("PhoneChart");

//thecanvas










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

}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closemenu() {
      document.getElementById("openbutton").style.visibility = "visible";
  document.getElementById("sidebar").style.width = "0";
    document.getElementById("sidebar").style.visibility = "hidden";
	
  document.getElementById("dashboardcontent").style.marginLeft = "0";
 
}

    var labels = [<?= $phonename ?>]; // Get label from the variable of php
    var valueofphone = [<?= $price ?>]; // Get valueofphone from php variable
    // the chart 
    myChart = {
        labels: labels,
	
        datasets: [{
            label: "Price",
			
            fill: false,
            backgroundColor: ['purple'],
            borderColor: 'black',
            data: valueofphone,
			
        }]

		 
		
    
	};

    
	
	
	var ctx = document.getElementById('PhoneChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',   
        data: myChart, 
		options: {
        maintainAspectRatio: false,
		responsive:false,
	 plugins: {
            title: {
                display: true,
                text: 'The rise of smartphones prices in the last decade'
            }
        },
	    	
		
    }

		
    });
	
	//links 
	


// now we need ajax so it makes it easier to refresh the page when selecting another chart
//this all depends on the selection and this is set to onchange, which changes depending on the selection
    $('#selectbrand').on('change', function (e) {
        var type = this.value;
        $.ajax({
            url: 'http://localhost/Dashboardhomework/process.php',
            dataType: 'json',
            data: {'brandname':type},
            success: function(e){
                // Delete previous chart
                myChart.destroy();
                //Draw new chart with ajax data
                myChart = new Chart(ctx, {
                    type: 'line',    
                    data: e,
					options: {
        maintainAspectRatio: false,
		responsive:true,
			 plugins: {
            title: {
                display: true,
                text: 'The rise of smartphones prices in the last decade'
            }
        },
		  onClick: link,
	scales: {
    y: {
      title: {
        display: true,
        text: 'Prices of smartphones'
      }
    },
	    x: {
      title: {
        display: true,
        text: 'Smartphones and it\'s release date'
      }
    }
  } 
    },
	
                });
				

            }
       









	   });
    });

//this is to send the user to get more information on the product

function link(click){
   //this is the nearest link of the chart
        var chartpoint = myChart.getElementsAtEventForMode(click, 'nearest', {intersect:true}, true); // this choosesthe closest array that has been clicked
        if (chartpoint.length){
			//if the user clicks the link 
			const firstpoint = chartpoint[0];
			//firstpoint is the array of the chart point that was clicked
			const labels = myChart.data.labels[firstpoint.index];
	//from there we get the labels
				window.location.href=("index.php?page=individualphone&phone_name="+labels);
				//from here it takes the user to the website
		}
    }
	
	ctx.onclick = link;







function filter(){
	const pricerange = document.getElementById('budget').value;
	var data = myChart.data.datasets[0].data.filter(value =>value <= pricerange);//this gets the array of the prices of the phone and this filter will then filter based on a condition
	//this here is the filter command
	console.log(data);
	const filtersmartphonenames = [];
	const filterbackgroundcolours = [];
	
	//these are the arrays for the labels and colours to need to be created
	
	//now a loop needs to be created through the array to get the value

	let i = 0;
	for(i; i < data.length; i++){
		//indexOF needs to be used to match the exact number with the point that it represents
const result = 	myChart.data.datasets[0].data.indexOf(data[i]);
const labels = myChart.data.labels[result];
const colours = 	"purple";
filtersmartphonenames.push(labels);
filterbackgroundcolours.push(colours);

	
	}
	
	
	myChart.data.datasets[0].data = data;
	myChart.data.labels = filtersmartphonenames;

	myChart.data.datasets[0].backgroundColor = filterbackgroundcolours;
	
	myChart.update();

}
















</script>



</body>
















</html>

<style>
#budget:focus{
	
	
	width:74%;
}

.button1{
	
	backgroundColor:grey;
	width:50px;
	font-family:quicksand;
	font-weight:bold;
	
}




#budget{
	width:74%;
}

  #chart-container{
border:1px solid black;
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
	bottom:90px;
	
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