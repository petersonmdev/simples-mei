<?php
/**
 * The template part for displaying page content in page.php
 *
 * @package Fancy Lab
 */
?>

<article class="col">
	<h1 class="title-page-<?php echo strtolower(get_the_title());?>"><?php the_title(); ?></h1>
	<div><?php the_content(); ?></div>
	<?php 
		if( comments_open() || get_comments_number() ):
			comments_template();
		endif;
	?>
</article>