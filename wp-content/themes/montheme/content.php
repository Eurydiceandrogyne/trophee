<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><?php the_category(); ?></h2>
	<img src="" alt=""</img>
	<?php the_post_thumbnail(); ?>
	<?php the_title(); ?>
	<?php the_content(); ?>
	</header>
	<div class="entry-content">
		<?php the_excerpt(); ?>
		<a href="<?php the_permalink();?>">lire la suite</a>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</article>
