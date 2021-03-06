<?php get_header(); ?>
			
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
							    <div class="map sixcol first">
							    	<?php 
											// Get the Rotator/slides for the Parent page
											if( get_field('left_map') )
											{
												while( has_sub_field('left_map') )
												{ 
													$map = get_sub_field('map');
													$link = get_sub_field('link');
													
													echo '<a href="' .$link. '"><img src="'.$map.'" alt="map"/></a>';
												
												}
											} ?>
							   	</div><?php // fourcol first ?>
							    <div class="map sixcol last">

							    	<?php 
											// Get the Rotator/slides for the Parent page
											if( get_field('right_map') )
											{
												while( has_sub_field('right_map') )
												{ 
													$map = get_sub_field('map');
													$link = get_sub_field('link');
													
													echo '<a href="' .$link. '"><img src="'.$map.'" alt="map"/></a>';
												
												}
											} ?>

							    </div>
								</section><?php // article section ?>
						
				
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
