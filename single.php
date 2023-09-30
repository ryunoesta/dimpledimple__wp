<?php get_header(); ?>

<main class="archive">
    <h1>
        <img src="<?=get_template_directory_uri(); ?>/images/news & diary.svg" alt="ニュース、お知らせ">
    </h1>
    <article>
        <?php while (have_posts()) : the_post(); ?>
            <time><?=get_the_date('Y年m月d日');?></time>
            <h2 class="news-title"><?php the_title(); ?></h2>
            <p class="news-content"><?php the_content(); ?></p>
        <?php endwhile; ?>
    </article>
</main>

<?php get_footer(); ?>
