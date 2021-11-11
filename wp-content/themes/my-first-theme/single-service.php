<?php
get_header();
?>
<div class="service-container">
    <h4 class="cpt-header">My Services Example</h4>
        <?php
        while (have_posts()) : the_post();
        ?>
            <div class="service-div">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>

                <div class="case-study-meta">
                    <p>
                        <label for="" class="price-label">Price:</label>
                        <span class="price"><?php the_field('starting_price');?></span>
                    </p>
                    <p>
                        
                        <?php 
                            $image = get_field('icon');
                            if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                    </p>
                </div>
            </div>
            
        <?php
        endwhile;
        ?>
</div>


<?php
get_footer();
?>