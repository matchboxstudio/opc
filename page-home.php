<?php get_header(); ?>
			
			<div id="content" class="clearfix">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					    
								<div id="feature" class="twelvecol first clearfix">
									<div class="feature-wrap">
										<img class="dummy" src="<?php echo get_template_directory_uri(); ?>/library/images/dummy.gif" alt="Dummy Image" width="1216">
										<?php get_slides('rotator_tabs', 'image'); ?>
										
									</div><?php //feature-wrap ?>
									
									<div id="slideshow-nav">
									<?php if( get_field('rotator_tabs') ) {	?>										
									<?php $i = 1; while(has_sub_field('rotator_tabs')) { 
										$title = get_sub_field('title');
										$description = get_sub_field('description');
										$tab_link = get_sub_field('tab_link');
										$tab_icon = get_sub_field('tab_icon');
										?>

										<div class="slide-<?php echo $i; ?>-wrap">
											<div class="slide-<?php echo $i; ?> clearfix">
												<a class="icon-link" href="<?php echo $tab_link; ?>"><img src="<?php echo $tab_icon; ?>" /></a>
												<h3><?php echo $title; ?></h3>
												<div class="slide-info">
													<?php echo $description ?>
												</div><?php // slide-info ?>
											</div><?php // slide-x ?>
										</div><?php // slide-x-wrap ?>
										<?php $i++; } } // end if ?>

									</div><?php // slideshow-nav ?>
								</div><?php // feature ?>					
								
								<section class="touts clear clearfix">
								
									<?php 
											if( get_field('tout_left') )
											{	
												while( has_sub_field('tout_left') )
												{ 
													$link = get_sub_field('link');
													$logo = get_sub_field('logo');
													$background_image = get_sub_field('background_image'); 
											?>
								
									<div class="tout tout-left half first left sterling-plaza">
										<div class="inner-tout">
											<a href="<?php echo $link; ?>" class="tout-image">
											<img class="tout-logo-svg" src="<?php echo $logo; ?>" />
											<img class="tout-logo-bg" src="<?php echo $background_image; ?>" /></a>
										</div><?php // inner-tout ?>
									</div><?php // tout ?>
								
									<?php	} } ?>
								
									<?php 
										if( get_field('tout_right') )
										{	
											while( has_sub_field('tout_right') )
											{ 
												$link = get_sub_field('link');
												$logo = get_sub_field('logo');
												$background_image = get_sub_field('background_image'); 
										?>
								
									<div class="tout tout-right half last preston-commons">
										<div class="inner-tout">
											<a href="<?php echo $link; ?>" class="tout-image">
											<img class="tout-logo-svg" src="<?php echo $logo; ?>" />
											<img class="tout-logo-bg" src="<?php echo $background_image; ?>" /></a>
										</div><?php // inner-tout ?>
									</div><?php // tout ?>
								
									<?php	} } ?>
								
								</section><?php // touts ?>
					    
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
			
    				</div> <!-- end #main -->
    
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>
