<!DOCTYPE html>
<html lang="en">
<head>

<style type="text/css">
	.sign_regist_button {
    background-color: #5B00FF;
    color: white;
    padding: 2px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
	box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
}
	.sign_regist_button {
    background-color: #5004dd;
}
</style>

<title>Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.6.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Shanti_400.font.js"></script>
<script type="text/javascript" src="js/Didact_Gothic_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.button1 {behavior: url(js/PIE.htc)}
	</style>
<![endif]-->
<!--[if lt IE 7]>
	<div style=' clear: both; text-align:center; position: relative;'>
		<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0" alt="" /></a>
	</div>
<![endif]-->
</head>
<body id="page6">
<div class="body1">
<div class="body2">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<ul id="icons">
						<li><a href="/"><img src="images/icon1.gif" alt=""></a></li>
						<li><a href="#"><img src="images/icon2.gif" alt=""></a></li>
						<li><a href="Contacts"><img src="images/icon3.gif" alt=""></a></li>
					</ul>
					<span class="call">Need Help? Please email or call: <span> +998-93-319-18-09 </span> <a class="sign_regist_button" href="{{ url('login') }}">  Sign In</a> <a class="sign_regist_button" href="{{ url('register') }}"> Register</a> </span>  
				</div>
				<div class="wrapper">
					<h1><a href="{{ url('/') }}" id="logo">Web Hosting</a></h1>
					<nav>
						<ul id="menu">
							<li class="first"><a href="{{ url('/') }}">Home</a></li>
							<li><a href="Hosting">Hosting</a></li>
							<li><a href="About">About</a></li>
							<li><a href="Support">Support</a></li>
							<li id="menu_active"><a href="Contacts">Contacts</a></li>
						</ul>
					</nav>
				</div>
				<span id="slogan1">Simple<span>Clever</span><span>Effective</span></span>
			</header><div class="ic">IP Project Khojiakbar Davronbek Oybek Shokhjahon Khurshid</div>
<!-- / header -->
		</div>
</div>
</div>
<!-- content -->
<div class="body3">
		<div class="main">
			<section id="content2">
				<div class="line2 wrapper">
					<article class="col2 pad_right1">
						<h3>Contact Form</h3>
						<form id="ContactForm">
						<div>
							<div class="wrapper">
								<span>Your Name:</span>
								<input type="text" class="input" >
							</div>
							<div class="wrapper">
								<span>Your E-mail:</span>
								<input type="text" class="input" >								
							</div>
							<div class="textarea_box">
								<span>Your Message:</span>
								<textarea name="textarea" cols="1" rows="1"></textarea>								
							</div>
							<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Send</a>
							<a href="{{ url('/Contacts') }}" class="button1" onClick="document.getElementById('ContactForm').reset()">Clear</a>
						</div>
					</form>
					</article>
					<article class="col1">
						<h3>Our Address</h3>
						<div class="wrapper">
							<p class="address">Country:<br>
									City:<br>
									Telephone:<br>
									Email:</p>
							<p>Uzbekistan<br>
									Tashkent<br>
									+998 94 217 08 00<br>
									<a href="mailto:">webhosting@mail.ru</a></p>
						</div>		
					</article>
				</div>
			</section>
<!-- / content  -->
		</div>
</div>
<div class="main">
<!-- / footer -->
<!-- / footer -->
</div>
<script type="text/javascript"> Cufon.now(); </script><div class="container">
</div>
</body>
</html>