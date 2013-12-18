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
							    
							    <div id="tablepress-1_wrapper" class="dataTables_wrapper" role="grid">
							    
							    	
							    	<table id="tablepress-1" class="tablepress tablepress-id-1 dataTable" aria-describedby="tablepress-1_info">

											<thead>
												<tr class="row-1" role="row">
													<th role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Suite Number: activate to sort column ascending" style="width: 150px;"><div>Suite Number</div><span>#</span>
													</th>
													<th role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Property: activate to sort column ascending" style="width: 346px;"><div>Property</div><span>Prop.</span>
													</th>
													<th role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Size: activate to sort column ascending" style="width: 100px;"><div>SQFT</div><span>SQFT</span>
													</th>
													<th role="columnheader" tabindex="0" aria-controls="tablepress-1" rowspan="1" colspan="1" aria-label="Details: activate to sort column ascending" style="width: 100px;"><div>Details</div><span>Info</span>
													</th>
												</tr>
											</thead>

											<tbody class="row-hover" role="alert" aria-live="polite" aria-relevant="all">
											
											<?php // LIST AVAILABLE SUITES
												$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC' );
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post(); 
												?>
											<tr>
												<td><?php the_title(); ?></td>
												<td><?php echo cpt_category('property');?></td>
												<td><?php the_field('square_footage'); ?></td>
												<td><a id="details-link" class="details-link lbp_secondary cboxElement" href="<?php the_permalink(); ?>">Details</a></td>
											</tr>
											<?php endwhile; wp_reset_query(); // END OF LIST ?>
					
					
													
											</tbody>
											</table>
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
    
			</div><?php // end #content ?>

<?php get_footer(); ?>
