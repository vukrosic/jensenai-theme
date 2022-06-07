<?php if ( have_posts()): while(have_posts()): the_post();?>

<div class="card">
<div class="card-body">
<h3><?php the_title();?></h3>

    <?php the_content();?>
    </div>

    </div>
<?php endwhile; else: endif;?>