<?php get_header(); ?>
			
			<div id="content">

				<div id="feature" class="twelvecol first clearfix">
					<div class="feature-wrap">
						<img class="dummy" src="<?php echo get_template_directory_uri(); ?>/library/images/dummy.gif" alt="Dummy Image" width="1216">
						<?php get_slides('rotator_slides', 'image'); ?>
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
