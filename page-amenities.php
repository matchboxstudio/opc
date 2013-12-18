<?php 

// AMENITIES TEMPLATE

get_header(); 

$sterling_plaza = 20;
$preston_commons = 11;

?>
			
			<div id="content">
			
				<div id="feature" class="twelvecol first clearfix">
					<div class="feature-wrap smaller">
						<?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
					</div><?php // feature-wrap ?>
				</div><?php // feature ?>									
											
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="twelvecol first clearfix" role="main">
							<div class="site-width-wrap">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						    <header class="article-header">
							    <h1 class="page-title" itemprop="headline"><?php  the_title(); ?></h1> 
						    </header><?php // article-header ?>
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <?php the_content(); ?>
								</section><?php // article section ?>
								
								<section class="touts clear clearfix">
								
										<?php 
											if( get_field('tout_left', 2) )
											{	
												while( has_sub_field('tout_left', 2) )
												{ 
													$link = get_sub_field('link', 2);
													$logo = get_sub_field('logo', 2);
													$background_image = get_sub_field('background_image', 2); 
											?>
									<div class="tout-wrap clearfix half first left sterling-plaza">
										<div class="tout tout-left">
											<div class="inner-tout clearfix">
												<a href="<?php echo $link; ?>" class="tout-image">
													<img class="tout-logo-svg" src="<?php echo $logo; ?>" />
													<img class="tout-logo-bg" src="<?php echo $background_image; ?>" />
													</a>
										</div><?php // inner-tout ?>
										</div><?php // tout ?>
									
										<?php	} } ?>
	
										<ul class="amenities">
											<?php get_amenities($sterling_plaza); ?>
										</ul>
									</div><?php // tout-wrap ?>
									
										<?php 
											if( get_field('tout_right', 2) )
											{	
												while( has_sub_field('tout_right', 2) )
												{ 
													$link = get_sub_field('link', 2);
													$logo = get_sub_field('logo', 2);
													$background_image = get_sub_field('background_image', 2); 
											?>
									
									<div class="tout-wrap clearfix half last preston-commons">
										<div class="tout tout-right">
											<div class="inner-tout clearfix">
												<a href="<?php echo $link; ?>" class="tout-image">
													<img class="tout-logo-svg" src="<?php echo $logo; ?>" />
													<img class="tout-logo-bg" src="<?php echo $background_image; ?>" />
												</a>
											</div><?php // inner-tout ?>
										</div><?php // tout ?>
										
										<?php	} } ?>
										
										<ul class="amenities">
											<?php get_amenities($preston_commons); ?>
										</ul>
									</div><?php // tout-wrap ?>
									
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
							</div><?php // site-width-wrap ?>
    				</div><?php // #main ?>    
				    
				</div><?php // #inner-content ?>
    
			</div><?php // #content ?>

<?php get_footer(); ?>
