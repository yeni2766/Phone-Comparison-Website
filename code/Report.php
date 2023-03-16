



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
	<a href = 'dashboard.php'>	<h4 class = "h5">PhoneCompare</H4></a>
			</div>
<div id = "links">
 <a href="Dashboard.php">Back</a>
	<a href="logout.php">Logout</a>
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
<ul class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
    <li><a href="Report.php">Report</a></li>
  
</ul>



 <button class="openmenubutton" onclick="openmenu()" id = "openbutton">&#9776; </button><h4 class ="h4">Dashboard</h4 >

 <button class="openmobilemenubutton" onclick="openmobilemenu()" id = "openmobilebutton">&#9776; </button>
<div class = "container">
<div class ="row">
<div class ="col-md-12 shadow-lg p-3 bg-light border-right pp" style = "height:8000px;" >
<h4 class = 'display-5' style = 'text-decoration:underline;'>Report</h4>
<div class = 'reportspace'>
<p>A Dashboard is a user interface that gives a summary of key information of an organization, an item, or a product, in graphic form. In the context of this website, this dashboard was made to provide the user with key information of a product that they might be fascinated with, or if the user is unsure about what is the best choice available between two products. This dashboard provides information about the two smartphones the user selects and the goal for the user is that it avails the user to come to a justified decision into which smartphone is better value for them.</p>
<img src = 'dashboard.png' />
<p>This is the first page of the Dashboard; the thought process of the design was to make a slick design which looked minimalistic but still did not have an inordinate amount of information on the screen. I wanted the user to not only see important information on the dashboard but also be impressed with the design. In my opinion, you do not require to have a plethora of information to create a good design, only indispensable information is needed. (Nielson, 1994) ‘Interfaces should not contain information which is irrelevant or rarely needed. Every extra unit of information in an interface competes with the relevant units of information and diminishes their relative visibility.’ This justifies my design decision because it signifies that designers need to keep the design fixated on the primary objective, which is the user, designating every piece of visual needs to benefit the user. Nonessential elements will divert users from the information that is needed. The landing page contains the Website logo, to create brand apperception and consistency, the main sections that the user will interact with is called the ‘Brand Finder’ and the chart. The brand finder is used to give the user guidance if they are intrigued with a particular company that manufactures smartphones, however, the user may not have a particular phone they are looking for, so they can just visually examine the variety of smartphones made by one company on another page.</p>
<img src = 'phones.png' />
<p> When the user arrives on the page, the user can then visually examine the variety of smartphones made only by the brand selected using the brand finder and the user can then click the device to get an in-depth analysis of the product. The main screen was designed by contemplating the potential different users of the website. For example, as expounded afore, User 1 may not have a smartphone in mind to get more information about, hence why User 1 could just look for smartphones that belong to iPhone or Samsung. On the other hand, User 2 may have the name of a smartphone in mind and the user would want to know about it from the beginning. To make the user’s journey as swift and smooth as possible, a search bar was implemented. The utilizer could input the name of the smartphone, and if it is available it will appear for the user to click on and if not, it will tell the user that no result is found.</p>
<img src = 'search.png' /><br>
<img src = 'search1.png' />
<p>The search bar functions by looking for data that is related to the input from the user. Hence why it shows more devices relating to the input ‘iPhone’ as shown in the image. (Nielsen, 1994) ‘Good error messages are important, but the best designs carefully prevent problems from occurring in the first place. Either eliminate error-prone conditions or check for them and present users with a confirmation option before they commit to the action.’  On the dashboard, I felt like mistakes made by users may be caused by their mental, for example, the use of their memory to remember products to search for. By removing memory burdens, prevents mistakes of users searching for erroneously spelt products, hence the development of a search bar. The suggestions that the search bar provides prevent potential slips afore the user can make them. However, it cannot prevent the user from making typos, typos can be prevented by suggesting products that are related to the input. However, if the smartphone is not available the dashboard will let the user know.



This design decision was taken because of the first heuristic created by Jakob Nielson which is called visibility of system status. (Nielson, 1994) ‘The design should always keep users informed about what is going on, through appropriate feedback within a reasonable amount of time.’ This designates that as the user knows the system status, the user will now know why that took place. In the context of the dashboard, this denotes the user knows that the device the user is looking for is not available and the user could then search for something else. Communicating with the user increases user satisfaction within their usage of the dashboard and it is also important that it presents feedback immediately to the user. In the context of the dashboard, this means the user knows that the device the user is looking for is not available and the user could then search for something else. Communicating with the user increases user satisfaction within their usage of the dashboard and it is also important that it presents feedback immediately to the user.
</p>
<img src = 'chart.png' />
<p>The final section needed to be discussed on the landing page is the phone charts. With the charts, I intended to create a story for the user. The designation of the chart is ‘The rise of smartphone prices in the last decade’. When contemplating the story intended for the user, I thought of two different types of users, the user that wants the latest products and the other user that wants to see what is available in their price range, so they cannot possibly afford certain products. The part of the goal of this visualization is to show that as the years go by, smartphones become more extravagant and from the list of products available in the chart, and another goal is the user can see which ones high-range smartphones and low-range smartphones from the prices shown. The graph that is utilized is called a line graph. A line graph is used to show change over time as data points are connected by two axes. I opted to utilize a line graph as a component of the chart because it is important for exhibiting trends over different periods. To make the user understand the story and follow a concrete journey, the charts show the title, the x and y-axis and the legend to describe what the data points mean. The end goal is for the user to click on the data points to get a depth analysis on the page by taking them to another page about the smartphone the user has clicked. A tooltip is a concise message that the user visually sees when interacting with an element on a website. Users can activate tooltips by hovering their mouse or keyboard onto the element. Tooltips are important for user experience if the user may not understand the feature or the intended interaction between the website and the user that was set out by the designer. On this dashboard, when the user hovers over the charts, the dashboard lets the user that clicking on the data points sanctions the user to get more information on the smartphone.</p>
<img src = 'd.png' />
<p>This is the page that the presented to the user when one of the data points of the user’s chart is clicked. The dashboard presents the technical specifications of the smartphone graphically and within the dashboard, at the top contains information for the average user when the dashboard is being utilized, such as the camera of the phone or the battery of the phone, hence why it is the first thing that is visually perceived first. However, for the technical users, they can get more information as they down the dashboard they get information about the RAM (Random Access Memory) of the smartphone, the memory of the phone and so on. When designing the graphical interface, I wanted to match the system and the real world. (Nielsen, 1994)’ The design should speak the users' language. Use words, phrases, and concepts familiar to the user, rather than internal jargon. Follow real-world conventions, making information appear in a natural and logical order.’  This means that the design must cater to the users that would utilize the dashboard. For example, if the dashboard just had numerical values about the smartphones at the top of the dashboard, how would the users know what it represents? When the user now sees a camera or battery icon, because of the match with the real world, the user knows precisely what is being presented.</p>
<img src = 'buy.png' />
<p>The goal of this chart is to summarize the overall quality of the phone into 5 categories, which are design, productivity, camera, display, and battery. Each category is scored from 0 to 100 and all the data points are joined together to create a shape to show the smartphone’s quality. I felt the best chart to present that story would be the radar chart. A radar chart is a method of graphing data in a 2D diagram when are multiple variables. The gridlines connect the axes, so it makes reading the chart easier and when the labels are connected, it composes a polygon shape. The advantage of utilizing a radar chart is that it is easier to compare many variables or in this case, labels. Users will be able to make comparisons very easily, mainly because radar charts represent data in shapes, so when users compare devices it lays the chart shapes over each other, with a change of colour, the user can compare the devices scores between each other. Lastly, each page has a ‘Best Deal’ which takes the user to a page where they could purchase the smartphone at the best possible price available.</p>
<img src = 'iphone.png' />
<img src = 'samsung1.png' />
<p>A filter system was created so the user can get this chart format, however for other brands. So, the dashboard contains a drop-down list of different brands that the chart is available for, and the chart is updated. The second filter system was introduced for the user to compare devices in the long run during their journey on the website which will be explained further.


A placeholder was inserted so the user knows the context and especially what is needed to be entered inside the input. It says, ‘What is your price range?’. This means how much is the user willing to spend on a device belonging to the brand the user chooses when selecting the drop-list menu. When the user clicks on the filter button, it displays devices whose prices are lower than the value the user inputted. From here, the chart is updated and the goal that was intended for the user is that the user should see the smartphones that are available to them and think about the price/quality relationship between the smartphones.  The Price/Quality relationship refers to the price precisely matching the quality of the smartphone. In the context of the dashboard, the user could just want to get the latest product, but the smartphone may not end up being worth the price or the user may want to get a smartphone that is not as new, however, it is worth the price and the user will save money. From here, the user may want to compare the devices together to come to a decision and this can be done by going into the ‘Compare Phones’ page and entering the devices the user may relish to compare them. This makes the charts comparative because it both depends on each other.

</p>
<img src = 'comparephones.png' />
<p> This is the part of the dashboard where the user goes first before the user can compare the smartphones that are the best value to their budget available, the user must input the two devices that the user has chosen to compare. On this page, there is also a search system when the user types, it offers suggestions however it is limited to only two devices within the search, this is because having many suggestions will go over the page and it will not be responsive, and it ruins the user experience.</p>
<img src = 'phonecomparison.png' />
<img src = 'radar chart.png' />
<p>This is the part of the dashboard where the user goes first before the user can compare the smartphones that are the best value to their budget available, the user must input the two devices that the user has chosen to compare. On this page, there is also a search system when the user types, it offers suggestions however it is limited to only two devices within the search, this is because having many suggestions will go over the page and it will not be responsive, and it ruins the user experience.


For the design, I wanted the design to be like the previous part of the dashboard that displays the analysis of the smartphone. To do this, the design had to cater to the average users and technical users, hence why the users will see the less technical specifications at the top of the dashboard and more at the bottom. This is so the average users may not get confused at first glance looking at the information. The design also had to make it easier for the user to make a comparison between the two smartphones. Consequently, the user sees the comparison adjacent between the two smartphones that have been selected. I additionally wanted the design to follow the average user’s average user’s eye movement. (Creative Bloq Staff, 2014) “the F-pattern comes from the reader first scanning a vertical line down the left side of the text looking for keywords or points of interest in the paragraph's initial sentences” The F-Pattern is a layout that is designed to guide a user’s eye based on human behaviour which is reading from left to right. So, the reader will first scan a vertical line down the left side of the page and from there will look to the right side of the page which fits the design of the content within the dashboard.
The bottom of the dashboard contains buttons that will redirect the user to a link to purchase the device that the user feels are better for them after comparing them side by side. Lastly, the dashboard contains a radar chart, and the goal of the visualization is to summarize the overall quality between the smartphones into two shapes, so which makes it easier for the user to make distinctive comparisons between them. The legend of the chart shows what the colours of the shape represents so the user knows what smartphone within the chart is. This chart and the initial chart that filters the chart by the user’s price range are comparative mainly because the filter chart enables the user to know what smartphones are initially available in their price range, however, the radar chart is needed so the user can know which of the smartphones is the best value for the price available to the user and it helps them achieve the user’s goal and that is to come into a renowned decision into deciding the best product for the user.

</p>
<p>For the user journey, I have also made it possible for the user to be able to use the dashboard on mobile devices, I created different sidebars on the dashboard so it could cater to mobile users and be responsive. 

The user on the mobile version has slightly different layout to fit the screens respectively and JavaScript was also used completely to style the charts sizes, from the width, height and even the position, to be able to fit many screen sizes that users may potentially use. Responsiveness was an important factor when designing because it will make your site mobile-friendly and increases the number of users that will use your website. It also increases flexibility because you do not need to create two different versions of a website, changes can be made easily. It also improves user experience which keeps users and brings new users. 
</p>
<img src = 'mobile.png' class = 'img' />
<img src = 'chartresponsive.png'class = 'img' />
<h5 style = 'text-decoration:underline;'>References</h5>
<p>Nielsen Norman Group. 2022. Preventing User Errors: Avoiding Unconscious Slips. [ONLINE] Available at: https://www.nngroup.com/articles/slips/. [Accessed 04 January 2022].</p>
<p>Neuromarketing. 2022. F-Pattern: A Secret Weapon To Boost Website Conversions - Neuromarketing. [ONLINE] Available at: https://www.neurosciencemarketing.com/blog/articles/f-pattern.htm. [Accessed 04 January 2022].</P>
<p>Creative Bloq. 2022. How the human eye reads a website | Creative Bloq. [ONLINE] Available at: https://www.creativebloq.com/ux/how-human-eye-reads-website-111413463. [Accessed 04 January 2022].</p>
<p>Nielsen Norman Group. 2022. Tooltip Guidelines. [ONLINE] Available at: https://www.nngroup.com/articles/tooltip-guidelines/. [Accessed 04 January 2022].</p>
<p>Nielsen Norman Group. 2022. 10 Usability Heuristics for User Interface Design. [ONLINE] Available at: https://www.nngroup.com/articles/ten-usability-heuristics/. [Accessed 04 January 2022].</p>










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
document.getElementById("chartbox").style.width = "20vh";


  } else {

  }
}

var ipaddevice = window.matchMedia("(max-width: 768px)")
ipad(ipaddevice)
ipaddevice.addListener(ipaddevice)











//the div
document.getElementById("chartbox").style.position = "absolute";
document.getElementById("chartbox").style.height = "40vh";
document.getElementById("chartbox").style.width = "70vh";

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



function link(click){
   
        var chartpoint = myChart.getElementsAtEventForMode(click, 'nearest', {intersect:true}, true); // this choosesthe closest array that has been clicked
        if (chartpoint.length){
			const firstpoint = chartpoint[0];
			
			const labels = myChart.data.labels[firstpoint.index];
	
			window.open("index.php?page=individualphone&phone_name="+labels);
		}
    }
	
	ctx.onclick = link;







function filter(){
	const budget = document.getElementById('budget').value;
	var data = myChart.data.datasets[0].data.filter(value =>value <= budget);//this gets the array of the prices of the phone and this filter will then filter based on a condition
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

img{
	width:80%;
	padding-left:50px;
	margin-bottom:20px;
}
.img{
	width:30%;
	padding-left:50px;
	margin-bottom:20px;
}
.reportspace{
	
	
	width:100%;
	word-wrap:break-word;

text-indent:30px;
}

p{
	
color:#000;	
font-weight:bold;

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

<ul class="breadcrumb">
  <li><a href="dashboard.php">Home</a></li>
    <li><a href="iphones.php">iPhones</a></li>
  
</ul>
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
 
 




   <?php endforeach; ?>
 


</div>




</div>


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
	bottom:210px;
}

.di{
	position:relative;
	bottom:200px;
	
	
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
.row3 {
  display: inline-block;
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
</style>