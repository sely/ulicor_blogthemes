<?php
get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

		<div id="postbg">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h3><?php the_category(', ') ?></h3>
		<h2><?php the_title(); ?></h2>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			
			</div>
					
				<?php edit_post_link('Edit this entry.'); ?>
			</div>
			
		</div>
		<?php endwhile; endif; ?>
	
	
	<?php comments_template(); ?>
	
	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
