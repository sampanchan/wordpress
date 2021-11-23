<?php
// Template Name: our-services-landing-page 
get_header();

?>
<h3>Our Services</h3>

<?php
    
   
    $serviceArgs = array(
        'post_type' => 'service',
        'orderby'=>'title',
        'order'=>'ASC',
        //image/icon
        // 'post_type'         => 'attachment',
        // 'post_status'       => 'inherit',
        // 'post_mime_type'    => 'image/png',
        // 'post_mime_type' => 'image/gif',
    );
    $servicesQ = new WP_Query( $serviceArgs);
    if ($servicesQ->have_posts()){
        ?> 
        
        <ul class="service-list">
        <?php
    
            while ($servicesQ ->have_posts()){
            $servicesQ->the_post();

            ?>
            <li>
                <a href="<?php echo get_the_permalink(); ?>"> <?php the_title(); ?></a>
             <?php
                $image = get_field('icon');
                // print_r(get_field('icon')) ;
                // echo get_field('icon')['url'];
             ?>  
             <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />    
            </li>

            <?php
            }
        ?>
        </ul>
        <?php
    }
    wp_reset_postdata();

?>





<?php

get_footer();

?>