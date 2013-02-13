<?php 
/*
* This template controlls the portfolio single entries: These entries are generated by this file in conjunction with includes/loop-portfolio-single.php
*/

global $ace_config;

	/*
	 * check which page template should be applied: 
	 * cecks for dynamic pages as well as for portfolio, fullwidth, blog, contact and any other possibility :)
	 * Be aware that if a match was found another template wil be included and the code bellow will not be executed
 	 * located at the bottom of includes/helper-templates.php
	 */
	 ace_get_template();


	/*
	 * get_header is a basic wordpress function, used to retrieve the header.php file in your theme directory.
	 */	
	 get_header();
 	 
	?>
		
		<!-- ####### MAIN CONTAINER ####### -->
		<div class='container_wrap fullwidth single-portfolio-entry' id='main'>
		
			<div class='container'>
				
				
				
				<?php
				/* Run the loop to output the posts.
				* If you want to overload this in a child theme then include a file
				* called loop-page.php and that will be used instead.
				*/
				get_template_part( 'includes/loop', 'portfolio-single' );
				
				
				//show related posts based on categories if there are any
				get_template_part( 'includes/related-portfolio-posts');
				?>
				
				
				
				<div class='template-page content'>
				<!--end content-->
				</div>
				
				
				
				
			</div><!--end container-->

	</div>
	<!-- ####### END MAIN CONTAINER ####### -->


<?php get_footer(); ?>