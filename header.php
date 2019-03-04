<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Artnetmedia</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">     
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>

   	<div class="row">

   		<div class="logo">
	         <a href="index.html">Lhander</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation">
					<li class="current"><a  href="http://localhost/artneticmedia/index.php" title="">Home</a></li>
					<!-- <li><a class="smoothscroll"  href="#process" title="">Process</a></li> -->
					<!-- <li><a class="smoothscroll"  href="#features" title="">Features</a></li> -->
					<li><a href="#"  onclick="myFunction1()" id="pricing1" class="dropbtn" title="">Pricing</a></li>
				<ul id="myDropdown" class="dropdown-content">
					<li><a  href="http://localhost/artneticmedia/standardplan.php" title="">Standard Plan</a></li>
					<li><a  href="http://localhost/artneticmedia/professional.php" title="">Professional Plan</a></li>
					<li><a  href="http://localhost/artneticmedia/enterpriseplan.php" title="">Enterprise Plan</a></li>
				</ul>
					


					<li><a   href="http://localhost/artneticmedia/contact.php" title="">Contact</a></li>					
					<!-- <li class="highlight with-sep"><a href="#" title="">Sign Up</a></li>			 -->		
				</ul>
			</nav>

			<a class="menu-toggle" href="#"><span>Menu</span></a>
   		
   	</div>   	
   	
   </header> <!-- /header -->

<style type="text/css">
	
	
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}


.show {display: block;}
</style>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>$('#window').width();

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  var width = $( window ).width();
  console.log("width",width);
  if(width <1000)
  {
    console.log("small");
    $("#pricing").click(function(){
    $("#myDropdown").toggle();
    $(".main-navigation").toggle();


  });
  }
  else
  {
    console.log("high");
  }
  
});
</script>