<!-- blog page -->
<?php
get_header();
?>

<?php
while (have_posts()) : the_post();
?>
    <?php the_post_thumbnail(); ?>
    <h1><?php the_title(); ?></h1>
   
    <?php the_content(); ?>
   

<?php
endwhile;
?>
<?php
        the_posts_navigation();
?>

<?php
get_footer();
?>