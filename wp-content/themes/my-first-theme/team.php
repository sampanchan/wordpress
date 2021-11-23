

<?php
// Template Name: team-member-landing-page 
get_header();

?>


<div class="template-container">
    <?php
        $teamArgs = array(
            'post_type' => 'team_member',
            'orderby'=>'menu_order rand',
            'order'=>'ASC',
            //image/icon
            // 'post_type'         => 'attachment',
            // 'post_status'       => 'inherit',
            // 'post_mime_type'    => 'image/png',
            // 'post_mime_type' => 'image/gif',
        );
        $teamQ = new WP_Query( $teamArgs);
        if ($teamQ->have_posts()){
            ?> 
            <h3>Our Team Members</h3>
            <ul class="team-list">
            <?php
        
                while ($teamQ ->have_posts()){
                $teamQ->the_post();

                ?>
                <li>
                    <a href="<?php echo get_the_permalink(); ?>"> <?php the_title(); ?></a> 
                    <h5><?php echo get_field('job_title')?> </h5>
                    <?php
                $image = get_field('headshot');
                // print_r(get_field('icon')) ;
                // echo get_field('icon')['url'];
                ?>  
                <!-- <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->

                <?php 
                    echo wp_get_attachment_image($image['id'], 'medium');
                ?>    



                </li>
                    
                <?php
                }
            ?>
            </ul>
            <?php
        }
        wp_reset_postdata();

    ?>
</div>





<?php

get_footer();

?>