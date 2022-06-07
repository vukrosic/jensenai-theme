
<?php
/*
Template Name: Testing page
*/
?>










<!DOCTYPE html>
<html>
<head>
	<title>Gradient</title>
	<style type="text/css">
		body {
			background: linear-gradient(to right, red, orange, green, blue, indigo, violet);
			background-size: 800% 800%;
			animation: gradient 15s ease infinite;
		}

		@keyframes gradient {
			0% {
				background-position: 0% 50%;
			}
			50% {
				background-position: 100% 50%;
			}
			100% {
				background-position: 0% 50%;
			}
		}

		.box {
			/*width: 95%;
			height: 95%;*/
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 50px;
			margin-left: 1rem;
			margin-right: 1rem;
			margin-top: 1rem;
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
			z-index: -1;
		}

		.title {
			color: #0a2553;
			font-size: 5rem;
			font-family: sans-serif;
			text-align: left;
			margin-top: 14rem;
            margin-left: 10%;
			font-weight: bold;
		}

		.title span {
			display: block;
		}

		.subtitle {
			color: #425460;
			font-size: 1.4rem;
			font-family: sans-serif;
			font-weight: 200;
			text-align: left;
			margin-top: 1.4rem;
            margin-left: 10%;
			width: 35rem;
		}

		.white-canvas {
			width: 100%;
			height: 100%;;
			background-color: white;
			transform: skewY(-10deg);
			position: absolute;
			top: 18rem;
			left: 0;
            z-index:-1;
		}

		.image {
			width: 20%;
			height: 20%;
			position: absolute;
			top: 10rem;
			left: 80rem;
		}

		.navbar {
			width: 100%;
			height: 5rem;
			position: absolute;
			top: 0;
			left: 0;
			z-index: 1;
			justify-content: space-between;
    		align-items: center;
		}

		.navbar ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			display: flex;
			justify-content: center;
		}

		.navbar ul li {
			float: left;
			margin: 1rem;
			margin-top: 1.5rem;
		}

		.navbar ul li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
			font-size: 1.1rem;
			font-family: sans-serif;
			font-weight: 600;
		}



		.navbar ul li a:hover {
			color: rgba(255,255,255,.5);
			transition: color .2s ease;
		}



		button{
			color: white;
			background-color: #0a2553;
			border-radius: 10px;
			border-color: #0a2553;
		}

		@import url("https://use.fontawesome.com/releases/v5.2.0/css/all.css");
		button:after{
			content: "\f061";
			font-family: FontAwesome;
			font-size: 20px;
			color: white;
		}


	</style>
</head>
<body>
	<div class="box"></div>
	<h1 class="title">YouTube <span>Idea Generator</span></h1>

		<h2 class="subtitle">Do you sit down every day for 4 hours thinking of YouTube ideas with your 8 years of experience?
			Of course you are not and even if you did, this AI would still come up with better ideas. Generate viral YouTube ideas at a click of a button!</h2>
	<div class="white-canvas"></div>
	<img class="image" src="../images/RealTimeFrontPage.jpg">
	<div class="navbar">
		<ul>
			<li><a href="#">Home</a></li>
				<li><a href="#">Generators</a></li>
				<li><a href="#">Pricing</a></li>
				<li><a href="#">About</a></li>
		</ul>
	</div>

	<button>Start Now</button>
</body>
</html>



