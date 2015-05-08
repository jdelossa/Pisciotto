<?php if ( have_posts() ) : while ( have_posts() ) : the_post();    

    $args = array(
        'order' => 'ASC',
        'post_type' => 'post',
        'category' => '2,3', //Category ID for 'Doctors in Glendale'
        'numberposts' => 100
    );

    $posts = get_posts( $args );
    $count = 0;
    
    if ($post):

        foreach ( $posts as $post ):

            $count++;

            if ($count % 1 == 1):
                echo '<div class="row">';
            endif; ?>

            <div class="col-md-12">
                <div class="doctor-card">
                    <a href="<?= get_page_link($page->ID); ?>"><?= get_the_post_thumbnail( $post->ID, 'full', array ('class' => 'img-thumbnail')); ?></a>
                    <a href="<?= get_page_link($page->ID); ?>" class="btn btn-primary"><?= $post->post_title; ?></a>
                </div>
            </div>

            <?php 

            if ($count % 1 == 1 ):
                echo '</div>'; 
            endif;

        endforeach;
        
    endif;

endwhile; 
endif; 
?>