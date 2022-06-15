<!DOCTYPE html>
<html lang="en">
<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GPYPJL1GT6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GPYPJL1GT6');
</script>
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JensenAI - Generate YouTube Video Ideas</title>

    <?php wp_head();?>


</head>
<body>
    


<img class="menu-phone-icon">





<?php
if ( !is_user_logged_in() ) {
?>



<div class="navbar">
		<ul>
			  <li><a href="/">Home</a></li>
				<li><a href="/pricing">Pricing</a></li>
        <li><a href="/contact">Contact</a></li>
				<li><a href="/about">About</a></li>
        <li style="margin: 13px;"><button class="startnowheader button">Free Trial</button></li>
        <li><a href="/login">Login</a></li>
		</ul>
</div>




<?php 
} else {
?>


<div class="navbar">
		<ul>
			  <li><a href="/">Home</a></li>
        <li><a href="/generator">Generator</a></li>
        <li><a href="/contact">Contact</a></li>
				<li><a href="/about">About</a></li>
        <li><a href="/login">Logout</a></li>
        <div class="ideas_left"></div>
        
		</ul>

    
</div>


<?php 
}
?>




  <!-- <div class="box"></div> -->
  <!-- <div class="white-canvas"></div> -->















<!--


<div class = "menu-container">
  
    <div class = "field-container">
      <div class = "menu-field challenges">Challenges</div>
      <div class = "menu-challenges-container">
        <div class = "menu-field youtube-niche" id="MrBeast" onClick="setGenerator(this.id)">MrBeast</div>
        <div class = "menu-field youtube-niche" id="Michael_Reeves" onClick="setGenerator(this.id)">Michael Reeves</div>
      </div>
    </div>

    <div class = "field-container">
      <div class = "menu-field education">Education</div>
      <div class = "menu-education-container">
        <div class = "menu-field youtube-niche" id="Kurzgesagt" onClick="setGenerator(this.id)">Kurzgesagt</div>
        <div class = "menu-field youtube-niche" id="Real_Engineering" onClick="setGenerator(this.id)">Real Engineering</div>
        <div class = "menu-field youtube-niche" id="Wendover_Productions" onClick="setGenerator(this.id)">Wendover Productions</div>
        <div class = "menu-field youtube-niche" id="Vox" onClick="setGenerator(this.id)">Vox</div>
      </div>
    </div>

    <div class = "field-container">
      <div class = "menu-field psychology">Psychology</div>
      <div class = "menu-psychology-container">
        <div class = "menu-field youtube-niche" id="Practical_Psychology" onClick="setGenerator(this.id)">Practical Psychology</div>
      </div>
    </div>

    <div class = "field-container">
      <div class = "menu-field minecraft">Minecraft</div>
      <div class = "menu-minecraft-container">
        <div class = "menu-field youtube-niche" id="Minecraft_Mods" onClick="setGenerator(this.id)">Minecraft Mods</div>
      </div>
    </div>

    <div class = "field-container">
      <div class = "menu-field gaming">Gaming</div>
      <div class = "menu-gaming-container">
        <div class = "menu-field youtube-niche" id="Lets_Game_It_Out" onClick="setGenerator(this.id)">Let's Game It Out</div>
      </div>
    </div>

    <div class = "field-container">
      <div class = "menu-field online-business">Online Business</div>
      <div class = "menu-online-business-container">
        <div class = "menu-field youtube-niche" id="Biaheza" onClick="setGenerator(this.id)">Biaheza</div>
      </div>
    </div>


    <div class = "field-container">
      <div class = "menu-field reactions">Reactions</div>
      <div class = "menu-reactions-container">
        <div class = "menu-field youtube-niche" id="SSSniperWolf" onClick="setGenerator(this.id)">SSSniperWolf</div>
        <div class = "menu-field youtube-niche" id="Beast_Reacts" onClick="setGenerator(this.id)">Beast Reacts</div>
      </div>
    </div>

    <div class = "field-container">
      <div class = "menu-field review">Review</div>
      <div class = "menu-review-container">
        <div class = "menu-field youtube-niche" id="Gadget_Review" onClick="setGenerator(this.id)">Gadget Review</div>
      </div>
    </div>


    
</div>

<div class="logcontainer">

    <div class="about" onClick="window.location = '/about/';">About</div>
</div>
<?php
//if ( is_user_logged_in() ) {
?>
-->





<!-- THIS SHOULD STAY COMMENTED
<div class="logcontainer" >
  <div class="generator" onClick="window.location = '/';">Generator</div>
  <div class="account" onClick="window.location = '/membership-account/';">Account</div>
  <div class="about logedAbout" onClick="window.location = '/about/';">About</div>
</div>
-->

<?php
//} else {
?>

<!--
<div class="logcontainer">

  <div class="register" onClick="window.location = '/membership-account/membership-checkout/?level=1';">Start Free Trial</div>
  <div class="login-and-about-container">
    <div class="login" onClick="window.location = '/login/';">Login</div>
    <div class="about" onClick="window.location = '/about/';">About</div>
  </div>
</div>
-->
<?php
//}
?>









