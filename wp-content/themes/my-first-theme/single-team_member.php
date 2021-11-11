<?php
get_header();
?>
<h4 class="cpt-header">My Team Example</h4>
<article class="container">
        <?php
    while (have_posts()) : the_post();
    ?>
        <div class="team-member-content">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
       

        <div class="case-study-meta">
        <p>
                
                <?php 
                    $image = get_field('headshot');
                    if( !empty( $image ) ): ?>
                    <img class= "field-image field-headshot" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </p>
            <div class="team-member-field-container field-container">
                <p>
                    <label for="">Job Title:</label>
                    <span><?php the_field('job_title');?></span>
                </p>
                <p>
                    <label for="">Email:</label>
                    <span><?php the_field('email');?></span>
                </p>
                <p>
                    <label for="">Phone:</label>
                    <span><?php the_field('phone');?></span>
                </p>
                <p>
                    <label for="">LinkedIn:</label>
                    <span><?php the_field('linkedin');?></span>
                </p>
                <p>
                    <label for="">Twitter:</label>
                    <span><?php the_field('twitter');?></span>
                </p>
            </div>
            
            
        </div>
        
    <?php
    endwhile;
    ?>

</article>

<?php
get_footer();
?>