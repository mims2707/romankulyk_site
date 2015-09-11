<?
require($_SERVER["DOCUMENT_ROOT"]."/template/header.php");
?>

<div id="wrap4">
    <!-- INTRO CENTER IMAGE BLOCK -->
	<header id="intro-center-image" class="intro-block bg-color1 dark-bg zero-bottom text-center p100">
		
		<div class="container">
			<div class="slogan">
				<h1>Roman Kulyk<br><b>QA Engineer</b></h1>
				<ul class="summary">
					<li><i class="icon icon-clock"></i>Опыт работы на соответствующей позиции 1,5+ года</li>
					<li><i class="icon icon-graduation"></i>Участвовал во многих &alpha; и &beta; тестированиях <i class="icon icon-screen-desktop" title="десктоп" style="margin:0 1px;"></i> и <i class="icon icon-screen-smartphone" title="мобильных" style="margin:0 1px;"></i> приложений и игр, веб-проектов</li>
					<li><i class="icon icon-gears"></i>Знание методологий разработки, методов и видов тестирования</li>					
					<li><i class="icon icon-doc"></i>Опыт тестирования без функциональной спецификации</li>
					<li><i class="icon icon-energy"></i>Помогаю разработчикам и аналитикам устранять ошибки и улучшать конечный продукт</li>
					<li><i class="icon icon-users"></i>Легко ставлю себя на место другого человека, поэтому без затруднений могу увидеть программный продукт глазами пользователя</li>
					<li><i class="icon icon-diamond"></i>Стараюсь выбирать по жизни качество во всем, делать себя и свое окружение лучше</li>
				</ul>
			</div>
			<a class="btn btn-lg btn-default" href="<?'http://'.$_SERVER['HTTP_HOST']?>/resume/"><i class="icon icon-mouse"></i>Подробнее</a>
		
		</div>
		
	</header>
	<canvas id="demo-canvas"></canvas>
	<div id="index-img" class="fixed-bg"></div>
</div>    
<div id="wraprecent">
    <!-- RECENT POSTS 3 COL BLOCK -->
    <section class="bg-color1 dark-bg" id="blog-3col" style="padding-bottom:15px;">
        <div class="container">
            <h2 class="title text-center"><a href="/posts/">Блог</a></h2>
            <div class="row">
				<?php
					if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
						// Include the featured content template.
						get_template_part( 'featured-content' );
				}
				?>

				<?php
					if ( have_posts() ) :
						// Start the Loop.
						while ( have_posts() ) : the_post();

							/*
							 * Include the post format-specific template for the content. If you want to
							 * use this in a child theme, then include a file called called content-___.php
							 * (where ___ is the post format) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );

						endwhile;
						// Previous/next post navigation.
						//twentyfourteen_paging_nav();

					else :
						// If no content, include the "No posts found" template.
						get_template_part( 'content', 'none' );

					endif;
				?>
 
            </div>
        </div>
    </section>
</div><!-- /#wrap -->	
<script async src="<?'http://'.$_SERVER['HTTP_HOST']?>/scripts/rAF.js"></script>
<script async src="<?'http://'.$_SERVER['HTTP_HOST']?>/scripts/demo-2.js"></script>	
<? 
require($_SERVER["DOCUMENT_ROOT"]."/template/footer.php");
?>