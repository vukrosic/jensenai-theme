<?php
/*
Template Name: Homepage
*/
?>

<?php /*get_header();*/?>



<!-- 
    Create a page using HTML and CSS that has varying gradient over time with a lot of different colors. 
    Then add a white transparent square with rounded corners, that is 95% of height and width of the page and is centered.
-->


<!DOCTYPE html>
<html>
<head>
	<title>Gradient</title>
	<style type="text/css">
		body {
			background: linear-gradient(to right, red, orange, yellow, green, blue, indigo, violet);
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
			width: 95%;
			height: 95%;
			background-color: rgba(255, 255, 255, 0.5);
			border-radius: 50px;
			margin: auto;
			position: absolute;
			top: 0;
			left: 0;
			bottom: 0;
			right: 0;
                        z-index: -1;
		}

		.title {
			color: #000;
			font-size: 25px;
			font-family: sans-serif;
			text-align: left;
			margin-top: 10%;
			font-weight: bold;
			margin-left: 10%;
		}
	</style>
</head>
<body>
	<div class="box"></div>
	<h1 class="title">YouTube Idea Generator</h1>
    <h1 >OOOOOOOOOOOOOOOOOOOOOOOOOOOOOOOO</h1>
</body>
</html>
