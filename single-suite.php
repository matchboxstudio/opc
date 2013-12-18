<?php
/*
Suite Template
*/
get_header(); 
$property = cpt_category('property');
$sterling_plaza = 15;
$preston_commons = 7;

?>

			<div id="content" >
			
				<div id="inner-content" class="wrap clearfix">
			
				    <div id="main" class="first clearfix" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					    
					    <article id="post-<?php the_ID(); ?>" class="clearfix twelvecol first clearfix <?php 
					    	if(	$property == 'Sterling Plaza' ) {
					    		echo 'sterling-plaza';
					    	} else {
					    			echo 'preston-commons';
					    		} ?>" role="article">
								<section class="twelvecol first clearfix">
									<a id="back" class="back">< Back</a>
								  <div class="fourcol first article-header">
										<h1 class="single-title custom-post-type-title"><?php echo cpt_category('property');?></h1>
										<h2 class="floor-number suite-section-header">Floor <?php echo return_floor_number();?></h2>
								    <h3 class="suite-number">Suite <?php the_title(); ?></h3>
								    <h3 class="sqft suite-section-header"><?php the_field('square_footage'); ?> SQ FT</h3>
										<h4 class="download-link"><a href="<?php the_field('floor_plan_pdf'); ?>" target="_blank">Download Floor Plan</a></h4> 						
										<h4 class="download-link"><a href="<?php
											if( $property == 'Preston Commons Bank' OR $property == 'Preston Commons East' OR $property == 'Preston Commons West') {
												if( get_field('download_brochure', $preston_commons) )	{
													while( has_sub_field('download_brochure', $preston_commons) ) {
														$brochure_file = get_sub_field('brochure-file', $preston_commons);
														echo $brochure_file;
													}// while
												}// if
											}// end if 
											
											elseif( $property == 'Sterling Plaza') {
												
												if( get_field('download_brochure', $sterling_plaza) )	{
													while( has_sub_field('download_brochure', $sterling_plaza) ) {
														$brochure_file = get_sub_field('brochure-file', $sterling_plaza);
														echo $brochure_file;
													}// while
												}// if
											}// end else if ?>" target="_blank">Download Property Flyer</a></h4> 					
								  </div><?php // article-header ?>
								
								  <div class="floor-plan eightcol last">
										<img src="<?php the_field('floor_plan'); ?>" alt="<?php the_title(); ?>"/>	
								  	<?php 
											if( get_field('images') )
											{
												while( has_sub_field('images') )
												{ 
													echo '<img src="' . $image . '"  />';
												}
											} ?>
								  </div> <?php // div ?>
								</section><?php // twelvecol ?>
								
							<?php // if it has 1 or more thumbs, show the thumb-carousel 
									if( get_field('images') ) {	?>
												
								<div class="thumb-carousel twelvecol first clearfix">
									<div class="cycle-slideshow twelvecol first clearfix">
										<ul id="nav">
									  	<li><a href="#"><img src="<?php the_field('floor_plan'); ?>" alt="<?php the_title(); ?>" width="170" height="130"/></a></li><?php 
											if( get_field('images') )
											{
												while( has_sub_field('images') )
												{ 
													$image = get_sub_field('image');
													echo '<li><a href="#"><img src="' . $image . '" width="170" height="130" /></a></li>';
												}
											} ?></ul>
									</div>
								</div><?php // thumb-carousel ?>
								
								<?php	} // end of 'if it has 1 or more thumb show this' ?>

								<section class="leasing-information sixcol first">
									<div class="first">
										<h4 class="suite-section-header sixcol first">Leasing</h2>
									</div><?php // sixcol first ?>
								
									<div class="leasing-contact sixcol"><?php
									
										if( $property == 'Preston Commons Bank' OR $property == 'Preston Commons East' OR $property == 'Preston Commons West') {
												if( get_field('leasing_contacts', 13) )	{
													while( has_sub_field('leasing_contacts', 13) ) {
													
														if(get_sub_field('contact', 13)) {
															while(has_sub_field('contact', 13)) {
																$name = get_sub_field('name', 13);
																$email = get_sub_field('email', 13);
																if(get_sub_field('address', 13)) {
																	while(has_sub_field('address', 13)) {
																		$phone = get_sub_field('phone', 13);
																	echo '<div class="contact-entry">';
																	echo '<h4 class="contact-name">' . $name . '</h4>';
																	echo '<p class="contact-info">' . $phone . '<br>';
																	}
																}
																echo '<span class="contact-email"><a href="mailto:' . $email . '">' . $email . '</a></span></div>';
															}// while
														}// if
													}// while 
												}// if
											}// end if 
										
										elseif( $property == 'Sterling Plaza') {
												if( get_field('leasing_contacts', 22) )	{
													while( has_sub_field('leasing_contacts', 22) ) {
													
														if(get_sub_field('contact', 22)) {
															while(has_sub_field('contact', 22)) {
																$name = get_sub_field('name', 22);
																$email = get_sub_field('email', 22);
																if(get_sub_field('address', 22)) {
																	while(has_sub_field('address', 22)) {
																		$phone = get_sub_field('phone', 22);
																	echo '<div class="contact-entry">';
																	echo '<h4 class="contact-name">' . $name . '</h4>';
																	echo '<p class="contact-info">' . $phone . '<br>';
																	}
																}
																echo '<span class="contact-email"><a href="mailto:' . $email . '">' . $email . '</a></span></div>';
															}// while
														}// if
													}// while 
												}// if
										}// end else if 
								?></div>
								</section><?php // section threecol ?>
																	
								<section class="suite-email sixcol last">
									<h4 class="twocol first suite-section-header">Email</h2>

									<form id="form1" name="form1" class="tencol last wufoo topLabel page" autocomplete="off" enctype="multipart/form-data" method="post" novalidate action="https://matchboxcbre.wufoo.com/forms/z7x4m1/#public"><p id="instructions">To be contacted about this vacancy, fill out the form below:</p><input id="Field10" name="Field10" type="hidden" class="field text medium" value="<?php the_title(); echo ', ' . cpt_category('property'); ?>" maxlength="255" tabindex="1" onkeyup="" /><label class="desc" id="title2" for="Field2">Name</label><input id="Field2" name="Field2" type="text" class="field text fn" value="" placeholder="First"  tabindex="1" /><label for="Field2">First</label><input id="Field3" name="Field3" type="text" class="field text ln" value="" placeholder="Last"  tabindex="2" /><label for="Field3">Last</label><label class="desc" id="title1" for="Field1">Email</label><input id="Field1" name="Field1" type="email" spellcheck="false" class="field text medium" value="" placeholder="Email" maxlength="255" tabindex="3" /><label class="desc" id="title12" for="Field12">Phone</label><div><input id="Field12" name="Field12" type="text" class="field text medium" value="" placeholder="Phone" maxlength="255" tabindex="5" onkeyup="" /></div><label class="desc" id="title4" for="Field4">Message</label><textarea id="Field4" placeholder="Message" name="Field4" class="field textarea medium" spellcheck="true" rows="10" cols="50" tabindex="7" onkeyup="" ></textarea><input id="saveForm" name="saveForm" class="btTxt submit" type="submit" value="Submit" />
									
									<div class="hide">
									<label for="comment">Do Not Fill This Out</label>
									<textarea name="comment" id="comment" rows="1" cols="1"></textarea>
									<input type="hidden" id="idstamp" name="idstamp" value="MriwINzIqOp8qB8zI8BtT71l8EQxsugIfaT8/R+2UUA=" />
									</div>
									
									</form> 

								</section><?php // section sixcol last ?>
						    
								<a class="back back-bottom">< Back</a>
						
					    </article><?php // article ?>
					
					    <?php endwhile; ?>			
					
					    <?php else : ?>
					
    					<article id="post-not-found" class="hentry clearfix">
    						<header class="article-header">
    							<h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
    						</header>
    						<section class="entry-content">
    							<p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
    						</section>
    						<footer class="article-footer">
    						    <p><?php _e("This is the error message in the single-custom_type.php template.", "bonestheme"); ?></p>
    						</footer>
    					</article>
					
					    <?php endif; ?>
			
				    </div><?php // main ?>
    
				    
				</div><?php // inner-content ?>
    
			</div><?php // content ?>

			<script>
				// If this page is in an iframe, give it the class
				// so we can style things depending on that
				jQuery(function() {
				  var isInIFrame = (window.location != window.parent.location) ? true : false;
				  if(isInIFrame) {
				    jQuery('body').addClass('windowed-frame');
				  }
				});
			</script>
<?php get_footer(); ?>
