<?php
//blog archive - available via WPadmin - posts - categories
get_header();
?>
	<div class="container pt-5 pb-5">
		<div class="row">
			<h1><?php single_cat_title() ?></h1>
		</div>
		<div class="row">
			<div class="col">
				<?php
				//            if there are posts while we have posts then show the post
				if ( have_posts() ) : while ( have_posts() ) :the_post();
					?>
                    <h4><?php the_title(); ?></h4>
					<?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="btn btn-success">Read more</a>

				<?php endwhile; endif; ?>

			</div>
		</div>
	</div>
<?php get_footer(); ?>