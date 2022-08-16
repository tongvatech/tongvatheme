<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( has_post_thumbnail() ) : ?>
		<div class="container">
			<div class="image entry-featured-image">
				<?php the_post_thumbnail(); ?>
			</div>
		</div>
	<?php endif; ?>

	<header class="entry-header">
    <div class="container text-center">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header>

	<div class="block-container-inner has-text-centered">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>

	<?php if( comments_open() || get_comments_number()) { ?>
		<div class="container">
			<?php comments_template(); ?>
		</div>
	<?php } ?>

</article>
