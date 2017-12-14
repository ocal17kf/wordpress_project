<?php

	$query = new WP_Query(array( 'post_type' => 'gallery', 'post_status' => 'publish' ));
	$side = false;

	while ($query->have_posts()) {
		$query->the_post();
		
			?>
				
			

			<div class="gallery-left">
				<div class="gallery-left-thumb"><?php the_post_thumbnail('gallery_post'); ?></div>
				
					<h3 class="gallery-left-title"><?php the_title(); ?></h3>
					<p><?php the_content(); ?></p>
				
			</div>

			<?php
		
		$side = !$side;
	}
?>

