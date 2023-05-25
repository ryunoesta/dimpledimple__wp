<?php get_header(); ?>

<img src="<?=get_template_directory_uri(); ?>/images/archive.jpeg" alt="">

<?php
    $args = array(
        'post_type' => 'news',// 表示したい投稿タイプ
        'posts_per_page' => 10,// 表示する記事数
    );
    $news_query = new WP_Query($args);
    if ( $news_query->have_posts() ):
        while ( $news_query->have_posts() ):
            $news_query->the_post();
?>
<!-- 今回はタイトルの表示 -->

<article>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>
</article>
<?php
        endwhile;
    endif;
    wp_reset_postdata();
?>

<?php get_footer(); ?>

