<?php
    get_header();
        while(have_posts()): the_post(); ?>
            <div class="mm_blog_detail_section" style="background-image: url('<?php echo get_the_post_thumbnail_url() ?>');">
                <div class="mm_blog_detail_row">
                    <div class="mm_blog_detail_title">
                        <!-- <h2 class="blog-title"><?php //echo get_the_title() ?></h2> -->
                    </div>
                </div>
            </div>
			<div class="mm_blog_detail_content_section">
				<div class="mm_blog_detail_content_row">

                    <h1 class="singleblog">Blog</h1>
                    <h2 class="singletitle"><?php echo get_the_title() ?></h2>
                <img class="singleimg" src="<?php echo get_the_post_thumbnail_url() ?>">
                <?php echo get_field("audio")?>
				<h3 class="singlecontent"><?php echo the_content() ?> <h3>
                <div class="singlevideo"> <?php echo get_field("video")?> </div>    
				</div>
			</div>
        <?php   endwhile;
// echo do_shortcode('[et_pb_section global_module="761"][/et_pb_section]');
// echo do_shortcode('[et_pb_section global_module="2805"][/et_pb_section]');
get_footer();
?>

