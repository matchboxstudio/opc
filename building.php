<?php 
/* Template Name: Building */
get_header(); 
$postParent = "";
?>
			
			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						    <div class="building clearfix" itemprop="articleBody">
							    
							    <div id="feature" class="ninecol last">
										<div class="feature-wrap">
										<img class="dummy" src="<?php echo get_template_directory_uri(); ?>/library/images/dummy.gif" alt="Dummy Image" width="1216">
										<?php building_rotator($postParent); ?>
										</div><?php // feature-wrap ?>
							    </div><?php // feature ?>

							    <div class="twelvecol site-width-wrap building-content clearfix">
							    <div class="sidebar fourcol first clearfix">
								    <nav class="clearfix">
								    	<div class="intro">
								    		<h1 class="page-name" itemprop="headline"><?php the_title(); ?></h1>
								    		<?php the_content(); ?>
								    	</div>
										
											<div class="nav-btn-wrap">
									    	<a href="available-space/">
									    		<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-space.svg" />
									    		<h3>Available Space</h3>
									    	</a>
									    	<a href="amenities/">
													<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-amenities.svg" />
										    	<h3>Amenities</h3>
										    </a>
									    	<a href="contact/">
													<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-contact.svg" />
									    	<h3>Contact</h3></a>
									   	</div><?php // side-btn-wrap ?>
									    	
								    </nav>
							    </div>
							    </div><?php // twelvecol ?>


								<div class="building-info clearfix site-width-wrap">
							    <div class="fourcol last clearfix">
						   	 	<?php download_brochure($postParent); ?>
							   </div><?php // fourcol ?>
							   
							   <div class="fourcol first">
							   	<h3 class="building-info-title">Key Features</h3>
							   </div>
							   
							   <div class="fourcol">
							    	<ul class="features">
							    	<?php building_features($postParent); ?>
							    	</ul>
							    </div><?php // fourcol ?>
							    

							    
							    </div><?php // wrap ?>
				
				
				
											    
								</div><?php // building ?>
						
				    
					
					    </article><?php // article ?>
					
					    <?php endwhile; else : ?>
					
    					    <article id="post-not-found" class="hentry clearfix">
    					    	<header class="article-header">
    					    		<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    					    	</header>
    					    	<section class="entry-content">
    					    		<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    					    	</section>
    					    	<footer class="article-footer">
    					    	    <p><?php _e("This is the error message in the page.php template.", "bonestheme"); ?></p>
    					    	</footer>
    					    </article>
					
					    <?php endif; ?>
			
    				</div><?php // main ?>
    
				    
				</div><?php // inner-content ?>
    
			</div><?php // content ?>

<?php get_footer(); ?>
