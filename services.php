<?php 
/*
template name:Services
*/
get_header();
?>
<section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Menu
        </h2>
      </div>

        <?php 

    	$terms = get_terms('types');
	 if ( !empty( $terms ) && !is_wp_error( $terms ) ){
	     echo "<ul class='filters_menu'>";
	     echo '<li class="active" data-filter="*">All</li>';
	     foreach ( $terms as $term ) {
	       echo "<li data-filter=.".$term->name.">" . $term->name . "</li>";

	     }
	     echo "</ul>";
	 }
        ?>
      <!-- </ul> -->

      <div class="filters-content">
        <div class="row grid">

        	<?php 

            $args = array(
                'post_type'      => 'services',
                'posts_per_page' => -1,
            );
            $the_query = new WP_Query($args); 

				    if($the_query->have_posts()) :

				         while($the_query->have_posts()) :
			                $the_query->the_post();
                        $terms = get_the_terms( get_the_ID(), 'types' );
                        $terms = join(', ', wp_list_pluck( $terms , 'name') );

				               ?>
				               <div class="col-sm-6 col-lg-4 all <?php echo $terms; ?>">
						            <div class="box">
						              <div>
						                <div class="img-box">
						                	<a href="<?php the_permalink();	 ?>"><?php

						                   the_post_thumbnail('full'); ?></a>
						                  
						                </div>
						                <div class="detail-box">
						                  <h5>
						                    <a href="<?php the_permalink();	 ?>"><?php the_title(); ?></a> 	
						                  </h5>
						                  <p>
						                   <?php the_content(); ?>
						                  </p>
						                  <div class="options">
						                    <h6>
						                      $20
						                    </h6>
						                  </div>
						                </div>
						              </div>
						            </div>
						          </div>
				               <?php

				          endwhile;

				    else :
				          echo "No posts";
				    endif;
        	?>

          
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>
  <?php 
get_footer();
?>