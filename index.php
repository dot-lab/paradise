<?php get_header(); ?>
		<div id="main">
			<article>
				<h1>Works</h1>
				<h2>Coloring</h2>
				<?php 
					$args = array(
						'category_name' => 'coloring'
					);
					$posts = get_posts($args);
				?>
				<ul>
					<?php foreach($posts as $post) : setup_postdata($post);?>
						<li>
							<?php echo the_title();?>
						</li>
					<?php endforeach; wp_reset_postdata(); ?>
				</ul>
			</article>
		</div>
		<?php get_sidebar(); ?>
		<?php get_footer(); ?>