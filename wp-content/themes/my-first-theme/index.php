<?php

get_header();

?>



<?php
while (have_posts()): the_post();
?>
    <h1><?php the_title(); ?> </h1>

    <?php the_content(); ?> 
    <?php 
        get_sidebar('Primary Sidebar')
    ?>
    <?php 
        get_sidebar('Widget')
    ?>

<?php
endwhile;
?>

<?php

get_footer();

?>