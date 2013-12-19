<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="slider-wrap"></div><!-- end of slider-wrap -->
	
	<div id="container">
		<div id="content">
		
			<div id="left-content">
				
				<div class="wbws d1" id="front-news-screen">
					<h3>News & Events</h3>
					<ul class="ulbig">
						<li>
							<h4><a href="#" >News tile one</a></h4>
							<p>
								<img src="./wp-content/themes/yolo/images/yolo/img2.jpg" />
								Lorem ipsum dolar id goaris manturo seris paris Lorem ipsum dolar id goaris manturo seris paris <br />
								<a href="#" class="more">More >></a>
							</p>
						</li>
						<li>
							<h4><a href="#" >News tile two</a></h4>
							<p>
								<img src="./wp-content/themes/yolo/images/yolo/img3.jpg" />
								Lorem ipsum dolar id goaris manturo seris paris Lorem ipsum dolar id goaris manturo seris paris<br />
								<a href="#" class="more">More >></a>
							</p>
						</li>
						<li>
							<h4><a href="#" >News tile two</a></h4>
							<p>
								<img src="./wp-content/themes/yolo/images/yolo/img1.jpg" />
								Lorem ipsum dolar id goaris manturo seris paris Lorem ipsum dolar id goaris manturo seris paris <br />
								<a href="#" class="more">More >></a>
							</p>
						</li>
					</ul>
				</div><!-- front-news-screen -->
				
				<div class="wbws d1" id="front-editorial-screen">
					<h3>Editorial</h3>
					<ul class="ulbig">
						<li>
							<h4><a href="#" >News tile one</a></h4>
							<p>
								<img src="./wp-content/themes/yolo/images/yolo/img1.jpg" />
								Lorem ipsum dolar id goaris manturo seris paris Lorem ipsum dolar id goaris manturo seris paris <br />
								<a href="#" class="more">More >></a>
							</p>
						</li>
						<li>
							<h4><a href="#" >News tile two</a></h4>
							<p>
								<img src="./wp-content/themes/yolo/images/yolo/img2.jpg" />
								Lorem ipsum dolar id goaris manturo seris paris Lorem ipsum dolar id goaris manturo seris paris<br />
								<a href="#" class="more">More >></a>
							</p>
						</li>
						<li>
							<h4><a href="#" >News tile two</a></h4>
							<p>
								<img src="./wp-content/themes/yolo/images/yolo/img3.jpg" />
								Lorem ipsum dolar id goaris manturo seris paris Lorem ipsum dolar id goaris manturo seris paris<br />
								<a href="#" class="more">More >></a>
							</p>
						</li>
					</ul>
				</div><!-- front-editorial-screen -->
				
				<div class="wbws d2" id="front-summary-screen">
					<div class=" sd23" id="front-story-screen">
						<img src="./wp-content/themes/yolo/images/yolo/ev1.jpg" width="480" height="285" />
					</div><!-- front-story-screen -->
															
					<div class=" sd13" id="front-interview-screen">
						<img src="./wp-content/themes/yolo/images/yolo/ev2.jpg" width="220" height="285"  />
					</div><!-- front-interview-screen -->
					
				</div><!-- front-summary-screen -->
				
			</div><!-- left-content -->
		</div><!-- content -->
		
		
		
		<!-- SIDEBAR -->
		<div id="sidebar">
			<?php get_sidebar() ?>
		</div>
		<!-- SIDEBAR -->
		
	</div><!--  CONTENT DIV 12 -->

	


<?php get_footer(); ?>

