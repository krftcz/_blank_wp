<?php

function custom_query() {
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => -1
	);
	$query = new WP_Query($args);
	if ($query->have_posts()) {
		while ($query->have_posts()) :
			$query->the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<?php the_title(); ?>
				</a>
			<?php
		endwhile;
	}
	wp_reset_postdata();
}
