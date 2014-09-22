<?php

 get_header(); ?>

	<?php if (have_posts()) { ?> 

		<?php while (have_posts()) { the_post(); ?>

			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

				<div class="entry">
					<?php the_content(); ?>
				</div>
			</div>

		<?php } ?>

	<?php } else { ?>

		<h1>Nothing found</h1>

	<?php } ?>

<?php get_footer(); ?>
