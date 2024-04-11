<?php get_header(); ?>
<?php $header_image = get_field('header_title');?>
<?php $main_image = get_field('main_image'); ?>
<?php $small_image = get_field('small_image');?>
<?php $section_2_image = get_field('image_section_2');?>

<div class="container">
    <section class="main_section">
        <div class="main_text">
            <div class="title_container">
            <nav class="img_nav"><img src="<?php echo $header_image; ?>"></img></nav>  
                <h1>
                    <span class="title">
                        <?php the_field('page_title'); ?>
                    </span>
                    <span class="subtitle text_border">
                        <?php the_field('page_subtitle'); ?>
                    </span>
                </h1>
            </div>
            <div class="description">
                <?php the_field('description'); ?>
            </div>
            <div class="higlighted_container">
                <span></span>
                <span></span>
                <div class="higlighted_text"> <?php the_field('highlight_text'); ?></div>
            </div>
            </div>
            <div class="main_content">
                <div class="main_img_container"><img src="<?php echo $main_image; ?>"></img>
            </div>
            <img src="<?php echo $small_image; ?>" class="small_img"></img>
        </div>
    </section>
    <section class="second_section">
    <div class="secondary_text">
    <div class="section_2_indicator"><?php the_field('section_2_indicator'); ?></div>
            <div class="title_container_section_2">
                <h1>
                    <span class="second_title">
                        <?php the_field('title_section_2'); ?>
                    </span>
                    <span class="second_subtitle text_border">
                        <?php the_field('subtitle_section_2'); ?>
                    </span>
                </h1>
            </div>
            <div class="extra_text">
                <?php the_field('extra_text_section_2'); ?>
            </div>
            </div>
            <div class="secondary_content">
                <div class="secondary_content_description">
                    <h3 class="secondary_description_title"><?php the_field('text_title_section_2'); ?></h3>
                    <span class="secondary_description"><?php the_field('text_section_2'); ?></span>
                </div>
                <div class="secondary_bg"></div>
                <div class="secondary_img_container"><img src="<?php echo $section_2_image; ?>"></img>
            </div>
        </div>
    </section>
    <section class="third_section"></section>
    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>

            <?php the_content(); ?>


        <?php endwhile; else: endif; ?>
</div>
<?php get_footer(); ?>