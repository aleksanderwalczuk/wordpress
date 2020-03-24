<?php //standard page on the website
get_header();
?>
<div class="container pt-5 pb-5">
    <div class="row">
        <h1><?php the_title() ?></h1>
    </div>
    <div class="row">
        <div class="col">
			<?php
			//            if there are posts while we have posts then show the post
			if ( have_posts() ) : while ( have_posts() ) :the_post();
				?>

				<?php the_content(); ?>

			<?php endwhile; endif; ?>

        </div>
    </div>
</div>
<?php get_footer(); ?>