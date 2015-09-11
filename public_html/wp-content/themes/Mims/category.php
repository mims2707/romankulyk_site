<?
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
?>
<div id="wraprecent">
    <!-- RECENT POSTS 3 COL BLOCK -->
    <section class="bg-color1 dark-bg p100" id="blog-2col" style="padding-bottom:15px;">
        <div class="container">
            <h2 class="title text-center">Блог</h2>
            <div class="row">

			<?php
			if ( have_posts() ) :
					// Start the Loop.
					while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content-category', get_post_format() );

					endwhile;
					
			

				endif;
			?>
			</div>
		</div><!-- #content -->
	</section>
</div>	<!-- #primary -->

<? 
require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php");
?>
