<?php get_header(); ?>

<h1> Mi primer tema </h1>

<?php if ( have posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>

		<?php the_title() ?>
		<?php the_content() ?>

	<?php } ?>
<?php }; ?>

<?php get_footer(); ?>
