<?php get_header( ); ?>

    <section class="content-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                        if(have_posts()) :
                            while (have_posts()) : the_post();
                    ?>
                    <div class="blog_post">
                        <div class="post-thambnil">
                            <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
                        </div>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt('Read More',TRUE,''); ?>
    
                        </div>
                    </div>
                    <?php
                    endwhile;
                    else:
                    _e('No post found');
                    endif;
                    ?>
                </div>
                <div class="col-md-3">
                    <h3>This is Sidebar Area</h3>
                </div>
            </div>
        </div>
    </section>

<?php get_footer( ); ?>