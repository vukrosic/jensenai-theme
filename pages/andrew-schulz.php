<?php
/*
Template Name: Andrew Schulz
*/
?>


<?php get_header();?>




<div class = 'unicontainer'>

    <div class = 'explanation-container'>
        <div class = 'explanation-comedy'>The AI will write a 3 sentance story on a topic.</div>
        <div class = 'explanation-comedy'>You can run it more than once.</div>
        <!-- <div class = 'explanation-comedy'>Due to AI safety, offensive / unsafe outputs will not display. <a href="https://openai.com/charter/" target="_blank">Why?</a></div>
        -->
           <div class = 'explanation-comedy'>The topic can be custom or one of the suggestions.</div>
        <div class = 'explanation-comedy' style="color:bisque">For best performance, imagine you're telling a 10-year-old "Write a funny story on the topic '___________________________'"</div>
    </div>
    <div style="margin: auto; width:fit-content">
        <div class="dropdown">
            <div class="characters-remaining">Char remaining:</div>
            <textarea maxlength="50" rows="1" class="dropbtn" id="input-topic-field" placeholder="Enter Topic..."></textarea>
            <div id="myDropdown" class="dropdown-content">

                <div class="suggestions-label">Suggestions</div>

            </div>
        </div>
    </div>

    <!--
    <div class = 'titlelist'>
        <div class = 'titleText'>Click Generate</div>
    </div>
    -->

    <div class='generate-container'>
        <div class='generate generate-idea'>GENERATE</div>
    </div>


    <div class = 'titlelist'>
        <div class = 'titleText'></div>
    </div>

    <div class="unsafe-output-message">The AI tried to generate offensive / unsafe output. Please try again. If the issue persists, please change the topic. <a href="https://openai.com/charter/" target="_blank">Why?</a></div>

</div>

<div style="height: 100px;"></div>







<?php get_footer();?>