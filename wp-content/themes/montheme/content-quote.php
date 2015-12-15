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

		<h2><?php the_category(); ?></h2>
		<h1 id="article_important"><?php the_title(); ?>
	<img src="" alt=""</img>
	<?php the_post_thumbnail('accueil'); ?>
	<ul class="social_media">
		<li><img src=""></li>
		<li><img src=""></li>
		<li><img src=""></li>
	</ul>

</article>
