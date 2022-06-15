<?php
/*
Template Name: Contact
*/
?>


<?php get_header();?>




<div class="container">
    <form action="/action_page.php">
        <h1>Contact Us JensenAI</h1>
        <p>Please fill this form with a message. We will get back within 24 hours.</p>
        <!--Input  tag specifies an input field where the user can enter data-->
        <input type="text" placeholder="Name" required autofocus>
        <input type="email" placeholder="Email" required>
        <textarea placeholder="Message" required></textarea>
        <input type="submit" value="Submit">
    </form>
</div>



<?php get_footer();?>