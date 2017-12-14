<?php

if(isset($_GET["filter"]) && !empty($_GET["filter"])){
	$taxonomy = $_GET["filter"];
	$auxTaxonomy = $taxonomy;
}else{
	$taxonomy = get_terms(array( 'taxonomy' => ("homelist"),'hide_empty' => 0, 'fields' => 'slugs' ));
}

$args = array( 'post_type' => 'homelist', 'tax_query' => array( array( 'taxonomy' => 'homelist','field' => 'slug','terms' => $taxonomy ) ) );
$results = new WP_Query( $args );

$categories = get_terms(array( 'taxonomy' => ("homelist"),'hide_empty' => 0));

?>
<div class="carte">
	<div id="filter">
		<ul>
			<?php
			$i = 0;
			foreach ($categories as $cat){
				?>

				<?php if($i == 0){
					?>
					<li>
						<a href='?filter='>All</a>
					</li>
					<?php
				}
				?>
				<li>
					<?php
					$name = $cat->name;
					$filt = $cat->slug;
					if($auxTaxonomy != null){
						if($auxTaxonomy == $name){
							echo '<a href=?filter=' .$filt .'> '.$name.'</a>';
						}
					}else{
						echo '<a href=?filter=' .$filt .'> '.$name.'</a>';
					}
					?>
				</li>

				<?php
				$i++;
			}
			?>
		</ul>
	</div>
</div>
	<div class="dishes">
		<?php
		if ( sizeof($results) == 0 ){
			echo "No dishes found";
		}
		while ( $results->have_posts() ) {

			$results->the_post();

			?>
			<div class="gallery">
				<a href=<?php the_permalink() ?>>
					<?php the_post_thumbnail('grid_thumbnail'); ?>
				</a>
				<div class="desc"><?php the_title() ?></div>
			</div>

			<?php
		}

		?>
	</div>


