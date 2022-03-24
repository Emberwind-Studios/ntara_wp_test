<?php

/**
 * 
 * Store page template 
 */
?>


<div class="container" style="height:100%">
    <div class="row d-flex justify-content-center" style="height:100%">
        <div class="col-md-4 store-section-col py-3">
            <div style="display:flex; justify-content:flex-start; flex-direction:column">
                <label for="search" style="font-size:15px;">Search</label>
                <input type="search" style="width:200px; border: 1px solid silver; padding:5px;" placeholder="search" />
                <div class="store-sub-menu">
                    <p class="pt-3">Menu</p>
                    <li><a href="#">Clothing</a></li>
                    <li><a href="#">Shoes</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Baby</a></li>
                </div>
            </div>
        </div>
        <div class="col-8 py-3">
            <?php
            $query = new WP_Query(array('author_name' => 'kpierc11'));

            // The Loop
            if ($query->have_posts()) {
                echo '<div class=container>';
                echo '<div class="row d-flex justify-content-center">';
                while ($query->have_posts()) { ?>
                    <div class="col-lg-3 me-3 mb-5 store-item">
                        <?php $query->the_post(); ?>
                        <div class="d-flex justify-content-center py-3"> <?php the_post_thumbnail(['class' => 'store-item-img']); ?></div>
                        <div class="d-flex justify-content-center"> <?php echo the_excerpt(); ?></div>
                    </div>
            <?php }
                echo '</div>';
                echo '</div>';
            } else {
                echo "no posts";
            } ?>

            <div class="nav-previous alignleft"><?php next_posts_link('Older posts'); ?></div>

            <div class="nav-next alignright"><?php previous_posts_link('Newer posts'); ?>

            </div>
        </div>
    </div>
</div>