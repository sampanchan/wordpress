<div class="has-sidebar">
    <div class ="main-content">
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
                the_posts_navigation();// shows more blog posts 'older' and 'newer' //or the_post_pagination(); does the same thing.
        ?>
        
    </div>
    <div class="reg-sidebar">
        <?php
                get_sidebar('Primary Sidebar');
        ?>
    </div>
    
</div>