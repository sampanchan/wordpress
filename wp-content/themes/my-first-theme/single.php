<?php
get_header();
?>

<article class="blog-container">

    <?php
    while (have_posts()) : the_post();
    ?>
    <div class="blog-div">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
        

    <?php
    endwhile;
    ?>
    <div class="reg-sidebar">
        <?php 
        get_sidebar('Primary Sidebar')
        ?>
    </div>
    
</article>


<?php
get_footer();
?>
