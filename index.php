<?php
/**
 * @package WordPress
 * @subpackage 2013z
 */
get_header();
?>


<!--特定のカテゴリだけ呼び出して表示する-->
<?php query_posts($query_string . '&category_name=diary'); ?>
<!--ここまで-->

<section>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<article>
<div <?php post_class(kiji) ?> id="<?php the_ID(); ?>"><!--記事が始まるよ-->

<h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

<?php the_date('','<time><div class="date">','</div></time>'); ?>


<div class="storycontent">
<?php the_content(__('(more...)')); ?>
</div>

<div class="meta">
<?php the_category(',' ,' | ') ?><?php the_tags(__('Tags: '), ', ', ' | '); ?> <?php the_time() ?> | <?php edit_post_link(__('Edit This')); ?>
</div>
	
</div><!--ひとつの記事が終わったよ-->
</article>



<?php endwhile; else: ?>
<p><?php _e('そこはかとなく地獄に落ちればいいよ'); ?></p>
<?php endif; ?>


<nav>
<div class="singlenav">
<?php posts_nav_link(' &#8212; ', __('&laquo; 新しい記事'), __('古い記事 &raquo;')); ?>
</div>
</nav>



</section>










<?php get_footer(); ?>
