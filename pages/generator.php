<?php
/*
Template Name: Generator
*/
?>


<?php get_header();?>



<div class="c-loader"></div>


<div class = 'unicontainer'>

    <div class = 'explanation-container'>
        <div class = 'explanation'></div>
    </div>



    <div class = 'titlelist'>
        <div class = 'titleText'>Click Generate</div>
    </div>



    <script> let UyKz0NJX7miGO = '<?php echo wp_create_nonce( 'UyKz0NJX7miGO' );?>'; </script>


    <div class='generate-container'>
        <div class='generate generate-idea'>GENERATE</div>
    </div>


</div>

<div style="height: 100px;"></div>



<?php
//if ( !is_user_logged_in() ) {
?>

<!--
<div>
    <div class="logcontainer logcontainerOnPageModifier">
        <div>To access generator, please </div>
        <div class="register registerOnPageModifier" onClick="window.location = '/membership-account/membership-checkout/?level=1';">Start Free Trial</div>
        <div class="login loginOnPageModifier" onClick="window.location = '/login/';">Login</div>
    </div>
</div>

-->

<?php 
//}
?>



<?php 
//if(!pmpro_hasMembershipLevel('1'))
//{
?>



<?php 
//}
?>






<?php get_footer();?>