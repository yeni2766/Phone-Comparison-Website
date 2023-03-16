
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
</head>
<body>


<script>



</script>

<div class = "wrapper">
	<!--sidebar here -->
	
	<nav id ="sidebar" class="sidebar">
		 <a href="javascript:void(0)" class="closemenubutton" onclick="closemenu()">&times;</a>
		<div class= "sidebar-header">
			<h4>IDK FOR NOW</H4>
			</div>
<div id = "links">
 <a href="#">Phones</a>
  <a href="#">Compare Devices</a>
  <a href="#">Contact</a>
</div>
</div>
</nav>





<div id ="dashboardcontent">
<div class = "container-fluid">
<div class ="searchbox">
 <i class="fa fa-search"></i></button> <input type="text" placeholder="Type to Search.." name="search">

</div>


 <button class="openmenubutton" onclick="openmenu()" id = "openbutton">&#9776; </button><h4 class ="h4">Dashboard</h4>

<div class = "container">
<div class ="row">
<div class ="col-md-5 shadow-lg p-3 bg-light border-right aa" style = "height:300px;" >

 <div class="card bg-secondary text-white brandfinder">
    <div class="card-body">Brand Finder</div>
  </div>
   <div class="card bg-white text-black brand ">
    <div class="card-body">IPhone</div>
  </div>
   <div class="card bg-white text-dark brand ">
    <div class="card-body">Samsung</div>
  </div>
    <div class="card bg-white text-black brand ">
    <div class="card-body">Google</div>
  </div>

</div>

<div class ="col-md-7 shadow-sm p-3 bg-light bb" style = "height:300px;" id = "chartscreen">
<div>
<select class = "selectbrandchart" id ="selectbrand">
	<option value = "iPhone">iPhone</option>
	<option value = "Samsung">Samsung</option>
<option value = "Google">Google</option>


</select>

</div>

<div class ="col" id = "brandchart">
<!-- this is where i will add the chart !-->






</div>





</div>




</div>


</div>










</div>



















</div>





<script>
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
//we will use the this script so ajax updates the chart by the selection of the brand

let brandname = 'brandname=' + document.getElementById("selectbrand").value;
//this will start the request process
let request = new XMLHttpRequest();
//this will specify the type of request to the current server
request.open('POST', 'phone.php');
request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
request.send(brandname);
//the onreadystatechange is a function that will do something depending on the status of the readystate
request.onreadystatechange = function(){
	//if the readystate is 4 that means the request is finished and response is ready
	if(request.readyState == 4 && request.status == 200){
		//this will turn our div in the website into the chart whenever it gets selected
		document.getElementById("brandchart").innerHTML = '<canvas id = "Brandchart"></canvas>';
		//this will turn the response into a javascript so its easy to put it into a chart
		let p = JSON.parse(this.response);
		
		let chart_dashboard = {
			type: "bar",
			data:{
				labels: p.phone_name.split(','),
				datasets:[{
					label: p.brandname,
					backgroundColor: "#444",
					borderColor:"#444",
					data: p.phone_price.split(',')
					
					
				}]
			},
			
		options:{
			legend:{
				display:true
			}
		}
		}		
		let chart = new Chart(document.getElementById('Brandchart'), chart_dashboard); 
		}
	}
	
	document.getElementById ('selectbrand').onchange = function(){
		
//we will use the this script so ajax updates the chart by the selection of the brand

let brandname = 'brandname=' + document.getElementById("selectbrand").value;
//this will start the request process
let request = new XMLHttpRequest();
//this will specify the type of request to the current server
request.open('POST', 'phone.php');
request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
request.send(brandname);
//the onreadystatechange is a function that will do something depending on the status of the readystate
request.onreadystatechange = function(){
	//if the readystate is 4 that means the request is finished and response is ready
	if(request.readyState == 4 && request.status == 200){
		//this will turn our div in the website into the chart whenever it gets selected
		document.getElementById("brandchart").innerHTML = '<canvas id = "Brandchart"></canvas>';
		//this will turn the response into a javascript so its easy to put it into a chart
		let p = JSON.parse(this.response);
		
		let chart_dashboard = {
			type: "bar",
			data:{
				labels: p.phone_name.split(','),
				datasets:[{
					label: p.brandname,
					backgroundColor: "#444",
					borderColor:"#444",
					data: p.phone_price.split(',')
					
					
				}]
			},
			
		options:{
			legend:{
				display:true
			}
		}
		}		
		let chart = new Chart(document.getElementById('Brandchart'), chart_dashboard); 
		}
	}
	
	}

</script>



</body>
















</html>

<style>
.brand{
position:relative;
top:10px;
height:50px;
font-family:quicksand;
padding-bottom:30px;
}

#sidebar{
transition:width 1s;

}
.row {

	padding:50px 0px 0px 50px;
	
}
.aa{
position:relative;

	box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}
.bb {



}
@media (max-width: 767px) {
 
  .aa {
    border-bottom: 1px solid black !important;
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

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

</style>