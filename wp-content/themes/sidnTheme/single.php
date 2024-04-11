<?php $small_image = get_field('post_image');?>
<main class="wrap">
    <section>
        <?php if (have_posts()):
            while (have_posts()):
                the_post(); ?>
                <article class="article-full">
                    <header>
                    <img src="<?php echo $small_image; ?>" class="small_img"></img><h2><?php the_field('post_title'); ?></h2>
                    </header>
                    <h2><?php the_field('post_description'); ?></h2>
                </article>
            <?php endwhile; else: ?>
            <article>
                <p>Sorry, no post was found!</p>
            </article>
        <?php endif; ?>
    </section>
</main>
