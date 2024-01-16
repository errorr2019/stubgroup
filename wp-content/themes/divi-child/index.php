<?php
get_header();
?>
<div id="main-content">
    <div class="container">
        <?php
        $query = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'order' => 'desc',
            'orderby' => 'date',
            'post_status' => 'publish',
        ));
        if ($query->have_posts()) :
            ?>
            <div class="mm_blog_section" id="post_count">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="mm_blog_section_row">
                        <div class="mm_blog_section_row_img"><img src="<?php echo get_the_post_thumbnail_url() ?>"></div>
                        <div class="blog-content">
                            <div class="mm_blog_date"><?php the_date('j F Y') ?></div>
                            <div class="mm_blog_title">
                                <a href="<?php echo get_permalink() ?> ">
                                    <h2><?php echo get_the_title() ?></h2>
                                </a>
                                <p><?php echo get_the_excerpt() ?></p>
                                <a class="btn" href="<?php echo get_permalink() ?> "> read more</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="newdiv">
    <h2>Subscribe to Our Newsletter
</h2>
<p>Sign up for actionable tips that will help you dominate Google Ads, hot takes about the latest digital advertising news, and much more.</p>
 <label for="email">Email:</label>
 <input type="email" name="email" id="email">
<a href="#" class="indexebtn">Submit:</a>

</div>
<?php
get_footer();
?>


<!-- posttype page  -->