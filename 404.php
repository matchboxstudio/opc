<?php get_header(); ?>
			
			<div id="content">

				<div id="feature" class="twelvecol first clearfix">
					<div class="feature-wrap smaller">
						<img src="<?php echo site_url(); ?>/wp-content/uploads/2013/07/feature-amenities.jpg" alt="" />
					</div><?php // feature-wrap ?>
				</div><?php // feature ?>									
											
				<div id="inner-content" class="wrap clearfix">
			
					<div id="main" class="twelvecol first clearfix" role="main">
						<div class="site-width-wrap">
					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						    <header class="article-header">
							    <h1 class="page-title" itemprop="headline">404 - Page Not Found</h1> 
						    </header><?php // article-header ?>
					
						    <section class="entry-content clearfix" itemprop="articleBody">
							    <p>The page you were looking for was not found.</p>
								</section><?php // article section ?>
						
				
					    </article><?php // article ?>
			
						</div><?php // end .site-width-wrap ?>
					</div><?php // end #main ?>
				</div><?php // end #inner-content ?>
			</div><?php // end #content ?>

<?php get_footer(); ?>
