<?php
/*
Template Name: Educational Video Tools
*/
?>


<?php get_header();?>




<div class = 'unicontainer'>

    <div class = 'explanation-container'>
        <div class = 'explanation-documentary'>Generate or enter your own topic and the AI will tell you what to write about.</div>
        <div class = 'explanation-documentary'>You can run it more than once.</div>
        <!-- <div class = 'explanation-documentary'>Due to AI safety, offensive / unsafe outputs will not display. <a href="https://openai.com/charter/" target="_blank">Why?</a></div>
        <div class = 'explanation-documentary'>The topic can be custom or one of our suggestions.</div>
        -->
        <div class = 'explanation-documentary' style="color:bisque">For best performance, imagine you're saying to it "Tell me what I should talk about in my video '___________________________'"</div>
    </div>


    <div class='generate-container'>
        <div class='generate generate-idea'>GENERATE IDEA</div>
    </div>




    <div style="margin: auto; width:fit-content">
        <div class="dropdown">
            <div class="characters-remaining">Char remaining:</div>
            <textarea rows="1" class="dropbtn" id="input-topic-field" placeholder="Enter Topic..."></textarea>
            <div id="myDropdown" class="dropdown-content">
            </div>
        </div>
    </div>

    <!--
    <div class = 'titlelist'>
        <div class = 'titleText'>Click Generate</div>
    </div>
    -->



    

    <div class='generate-container'>
        <div class='generate generate-content'>GENERATE CONTENT</div>
    </div>


    <div class = 'titlelist'>
        <div class = 'titleText'></div>
    </div>

    

    <div class="unsafe-output-message">The AI tried to generate offensive / unsafe output. Please try again. If the issue persists, please change the topic. <a href="https://openai.com/charter/" target="_blank">Why?</a></div>

</div>

<div style="height: 100px;"></div>







<?php get_footer();?>