<?php get_header(); ?>

<main class="archive">
    <h1>
        <img src="<?=get_template_directory_uri(); ?>/images/news & diary.svg" alt="お知らせ">
    </h1>
    <article class="change-card">
        <ul>
            <?php query_posts("posts_per_page=10"); ?>
            <?php if( have_posts() ):
                while( have_posts() ) : the_post(); ?>
                    <li class="change-news default-list">
                        <a href="<?php the_permalink(); ?>">
                            <div class="change-news-txt">
                                <time><?=get_the_date('Y年m月d日');?></time>
                                <p class="news-title"><?php the_title() ?></p>
                            </div>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; wp_reset_postdata();?>
        </ul>
    </article>
</main>

<?php get_footer(); ?>

