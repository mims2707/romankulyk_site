<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 ?>
							
			
		
<div id="wrap">
    
		<!-- SINGLE POST BLOCK -->
		<section class="inner-page bg-color3 p100">
			<div class="container">
				<div class="row">
					<div class="col-md-12 single-post">
					
						<div class="post-media">
							<img src="<?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); // возвращает массив параметров миниатюры
							echo $thumbnail_attributes[0];?>" alt="image_post" class="img-responsive">
						</div>
								
						<div class="post-content">
									<?php
									if ( is_single() ) :
									the_title( '<h2 class="title">', '</h2>' );
									endif;?>
								<div class="post-info">
								<div class="date"><i class="icon icon-clock"></i><?php the_time('d-m-Y') ?></div>
								<div class="author"><i class="icon icon-user"></i><?php the_author(); ?></div>
							</div>
							<div class="post-desc">
								<? the_content();?>
							</div>
						</div>
	
							
					</div>
					<!-- SIDEBAR -->
					
					<a id="popup-slide-close" href="/posts/" class="popup-close popup-button ng-scope"></a>

					
					
					
					
				</div>
								
					
				
		
	

