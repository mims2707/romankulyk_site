
	<div class="col-sm-6">
	               <div class="post">
					   <div class="post-media">
                            <a href="<?php the_permalink() ?>"><img alt="" class="img-responsive" src="<?php $thumbnail_attributes = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); // возвращает массив параметров миниатюры
echo $thumbnail_attributes[0];?>" style="margin:0 auto;"></a>
                        </div>
                        <div class="post-content">
							
							<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
							<?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?>   
							<?php
								endif;

									if ( is_single() ) :
									the_title( '<h4 class="title">', '</h4>' );
									else :
									the_title( '<h4 class="title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
									endif;?>
									
							<div class="post-desc"><?php the_excerpt(); ?>
							</div>
                            <div class="post-info">
                                <div class="date">
                                    <i class="icon icon-clock"></i><?php the_time('d-m-Y') ?>								
								</div>	
                                <div class="author">
                                    <i class="icon icon-user"></i><?php the_author(); ?>
								</div>				
						   </div>
                        </div>
                    </div>
    
		
</div>

	