<?php

get_header();

?>


<!-- root page or what you know as the "home page" as rest does the rest of internet -->
<?php
while (have_posts()): the_post();
?>
    <h1><?php the_title(); ?> </h1>

    <?php the_content(); ?> 
    <div class="image">
        <?php the_post_thumbnail(); ?>  
    </div>

<?php
endwhile;
?>


<?php

get_footer();

?>