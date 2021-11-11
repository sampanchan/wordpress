<?php
get_header();
?>
<h4 class="cpt-header">Sample Case Study</h4>
<?php
while (have_posts()) : the_post();
?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>


    <div class="case-study-meta">
        <p>
            <label for="">Year:</label>
            <span><?php the_field('year');?></span>
        </p>
    </div>
<?php
endwhile;
?>

<?php
get_footer();
?>