<?php 
/* Template Name: Building Sub-Page */
get_header(); 

$postParent = $post->post_parent;

$theTitle = get_the_title();

if($theTitle === "Contact") {
	
	$theTitle = 'contact-page';
	
	} else { }

?>
<div id="content">
	
		<div id="inner-content" class="clearfix">
	
		    <div id="main" class="twelvecol first clearfix  <?php echo $theTitle; ?>" role="main">

			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						<div class="building clearfix" itemprop="articleBody">
						
							<div id="feature" class="ninecol last">
								<div class="feature-wrap">
								<img class="dummy" src="<?php echo get_template_directory_uri(); ?>/library/images/dummy.gif" alt="Dummy Image" width="1216">
								<?php building_rotator($postParent); ?>
								</div><?php // feature-wrap ?>
							</div><?php // feature ?>
						
							<div class="building-content twelvecol site-width-wrap clearfix">
							
								<div class="sidebar fourcol first clearfix">
									<nav class="clearfix">
										<div class="intro">
											<h1 class="page-name" itemprop="headline"><?php echo get_the_title($post->post_parent); ?></h1>
											<?php 
														$query = new WP_Query( 'page_id='.$postParent.'' ); 
														while ( $query->have_posts() ) {
														$query->the_post();
														the_content(); 
														}
														wp_reset_query(); ?>
										</div><?php // intro ?>
									
										<div class="nav-btn-wrap">
									  	<a href="<?php echo get_permalink($post->post_parent);?>available-space/">
									  		<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-space.svg" />
									  		<h3>Available Space</h3>
									  	</a>
									  	<a href="<?php echo get_permalink($post->post_parent);?>amenities/">
												<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-amenities.svg" />
									    	<h3>Amenities</h3>
									    </a>
									  	<a href="<?php echo get_permalink($post->post_parent);?>contact/">
												<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-contact.svg" />
									  	<h3>Contact</h3></a>
									 	</div><?php // nav-btn-wrap ?>
									</nav>
								</div><?php // sidebar ?>
							
								<div class="building-main-content eightcol">
								<?php if (get_field('amenities')) { ////////////////////////////////////////// if it's the amenities page... ?>
									<p class="callout"><?php the_field('callout'); ?></p>
									<ul>
									<?php 
										if( get_field('amenities') )
										{	
											while( has_sub_field('amenities') )
											{ 
												$amenity = get_sub_field('amenity');
												echo '<li>' . $amenity . '</li>';
											}
										} ?>
									</ul>
									<?php } elseif( get_field('leasing_contacts') ) { ///////////////////////////// else if it's the contact page... ?> 
									<h3 class="section-title">Leasing</h3>
									<?php get_contacts('leasing', ''); } // end elseif ?>
													   
								</div><?php // building-main eightcol ?>
							</div><?php // building-content twelvecol ?>
						
						
						<?php if( get_field('amenities') ) { ////////////////////////////////////////// AMENITIES  ?> 
						
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
						    
						    
						    </div><?php // building-info wrap ?>
						
						<?php } // END AMENITIES
						
							elseif(get_field('leasing_contacts')) { ////////////////////////////////////////// CONTACT ?> 
							
								<div class="building-info clearfix site-width-wrap">
							 
							   <div class="fourcol first">
							   	<h3 class="building-info-title">Additional Contacts</h3>
							   </div>
							 
							   <div class="secondary-contact clearfix">
							   	<h3 class="section-title">Management</h3>
									<?php get_contacts('management', ''); ?>
							   	<h3 class="section-title">Engineering</h3>
									<?php get_contacts('engineering', ''); ?>
							   </div><?php // fourcol ?>
							    
							  </div><?php // building-info wrap ?>
							
							<?php } // END CONTACT ?>
									    
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
