

	<br>
	<br>
	<?php
	while ( have_posts() ) : the_post(); ?>

	<?php
		endwhile;
	?>
	<br>
	<?php
	$type =  get_post_type();
	if($type == "page"){
	    $name = get_the_title();

	    switch ($name){
		    case "A la carte":
			    get_template_part('partials/carte');
			    break;

            case "Drinks":
	            get_template_part('partials/drinks');
                break;

		    case "Gallery":
			    get_template_part('partials/gallery');
			    break;

		    case "Guest book":
			    echo "A la carte";
			    break;

		    case "Home":
			    $query = new WP_Query(array( 'post_type' => 'buffet', 'post_status' => 'publish', 'posts_per_page' => -1 ));

			    while ($query->have_posts()) {
				    $query->the_post();
				    $post_title = get_the_title();
				    echo $post_title;
				    //TODO: Show the buffet info
				    echo "<br>";
			    }
			    break;

		    case "About us":

		        //TODO: Add google maps here
			    break;
        }
    }else if($type == "dish"){
	    ?>
        <div class="dish">
            <div class="dish-image">
                <?php the_post_thumbnail('single_large'); ?>
            </div>
            <h1><?php the_title(); ?></h1>
            <?php
                the_content();
                ic_price_field();

            }
            ?>
        </div>
