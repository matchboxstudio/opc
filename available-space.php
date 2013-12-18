<?php 
/* Template Name: Available Space */
get_header();
?>


			<div id="content">
			
				<div id="inner-content" class="clearfix">
			
				    <div id="main" class="twelvecol first clearfix available-spaces" role="main">

					    <?php if (have_posts()) : while (have_posts()) : the_post();
						$parent_title = get_the_title($post->post_parent); ?>


					    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
						    <div class="building clearfix <?php echo $parent_title; ?>" itemprop="articleBody">

							    <div id="feature" class="ninecol last">
										<div class="feature-wrap">

										<?php if ($parent_title == 'Preston Commons') {?>
										<?php $parent_title_url = 'preston-commons'; ?>

										<div class="available-space-image" >
											<img id="pc-stacking" class="stacking" src="<?php echo get_template_directory_uri(); ?>/library/images/preston-commons-available-space.jpg" usemap="#pc-floors" />
										</div>
											<map name="pc-floors">
												<area floor="bank-9" shape="poly" coords="0,79,46,79,46,100,0,102" href="#">
												<area floor="bank-7" shape="poly" coords="0,125,17,125,47,122,48,142,17,147,0,147" href="#">
												<area floor="bank-5" shape="poly" coords="0,168,16,169,47,163,47,182,17,190,0,190" href="#">
												<area floor="bank-4" shape="poly" coords="0,189,16,190,46,182,46,201,16,211,0,212" href="#">
												<area floor="bank-3" shape="poly" coords="0,211,16,211,46,201,46,224,16,235,0,235" href="#">
												<area floor="east-6" shape="poly" coords="60,139,105,138,105,142,187,142,188,145,246,145,333,144,387,144,392,139,392,170,388,174,333,175,296,175,274,175,247,175,188,175,188,170,106,170,105,166,60,167" href="#">
												<area floor="east-5" shape="poly" coords="60,166,105,166,106,170,187,170,188,175,246,175,332,175,387,174,392,169,392,201,388,203,332,204,291,205,247,204,188,206,188,199,106,199,105,193,60,194" href="#">
												<area floor="east-4" shape="poly" coords="60,194,105,193,105,199,187,199,188,206,247,204,332,204,387,203,392,200,393,231,388,234,333,234,293,235,279,235,247,235,188,236,187,227,106,227,105,220,60,220" href="#">
												<area floor="east-2" shape="poly" coords="11,247,106,247,107,256,188,255,189,265,279,265,296,265,332,263,387,263,393,260,393,277,389,281,389,292,194,293,193,288,189,288,189,284,107,283,106,273,12,274" href="#">
												<area floor="west-7" shape="poly" coords="392,108,460,108,554,107,658,108,658,126,534,128,533,131,392,132" href="#">
												<area floor="west-1" shape="poly" coords="396,263,525,262,558,297,601,298,604,299,725,298,725,320,603,319,600,314,553,316,521,284,396,285" href="#">
											</map>

										<?php } else if ($parent_title == 'Sterling Plaza') {?>
										<?php $parent_title_url = 'sterling-plaza'; ?>

										<div class="available-space-image" >
											<img id="sp-stacking" class="stacking" src="<?php echo get_template_directory_uri(); ?>/library/images/sterling-plaza-available-space.jpg" usemap="#sp-floors" style="width:100%;" />
										</div>
										<map name="sp-floors">
											<area floor="sp-16" alt="Floor 16" shape="poly" coords="63,119,274,49,395,272,394,282,272,66,200,89,199,95,188,98,188,93,130,111,130,116,119,120,119,116,62,134" href="#">
											<area floor="sp-15" alt="Floor 15" shape="poly" coords="63,140,119,121,119,126,131,122,131,118,187,99,187,105,200,100,200,96,274,73,394,282,394,293,276,96,199,116,199,121,188,124,188,119,130,137,131,142,120,145,119,141,62,158" href="#">
											<area floor="sp-14" alt="Floor 14" shape="poly" coords="63,163,119,146,119,151,131,148,132,143,187,126,187,131,199,127,199,122,275,100,286,118,391,294,392,309,291,146,276,121,201,143,199,147,188,151,188,146,131,162,131,167,120,170,120,166,63,182" href="#">
											<?php // <area floor="sp-13" alt="Floor 13" shape="poly" coords="63,188,120,171,120,177,131,173,131,169,187,152,187,157,200,154,200,149,276,128,393,316,394,328,277,149,200,169,200,174,189,177,188,172,130,188,131,193,120,196,120,192,63,207" href="#"> ?>
											<area floor="sp-12" alt="Floor 12" shape="poly" coords="63,212,120,197,120,202,131,199,131,195,188,179,188,184,201,181,200,176,276,155,394,334,394,344,277,177,200,196,201,201,190,204,189,199,131,214,131,219,121,221,120,215,64,230" href="#">
											<area floor="sp-11" alt="Floor 11" shape="poly" coords="63,237,120,222,120,227,132,224,132,220,188,205,188,210,201,207,201,202,278,184,394,350,394,360,279,206,200,223,200,228,190,231,189,226,131,240,131,245,121,247,121,242,63,256" href="#">
											<?php // <area floor="sp-10" alt="Floor 10"shape="poly" coords="63,261,120,248,120,253,131,251,131,246,188,232,188,237,201,234,201,229,278,213,394,363,394,376,279,234,201,250,201,255,190,258,190,253,131,265,131,270,122,272,121,268,64,281" href="#"> ?>
											<area floor="sp-9" alt="Floor 9" shape="poly" coords="63,286,119,274,120,280,132,277,132,272,188,259,189,265,202,262,202,256,280,242,394,380,394,392,279,262,201,277,201,283,190,285,190,280,131,291,132,297,122,299,122,293,63,305" href="#">
											<area floor="sp-8" alt="Floor 8" shape="poly" coords="63,311,122,300,122,306,132,304,132,299,188,287,189,291,202,289,202,284,279,270,395,397,394,408,279,290,202,304,202,310,190,312,189,306,130,317,131,323,122,324,122,319,63,330" href="#">
											<area floor="sp-7" alt="Floor 7" shape="poly" coords="63,336,120,325,120,331,132,329,133,324,189,313,189,318,202,316,202,311,280,298,394,412,394,424,281,319,201,331,201,337,191,339,191,334,131,343,132,349,123,351,122,345,64,355" href="#">
											<area floor="sp-6" alt="Floor 6" shape="poly" coords="63,361,120,352,121,357,133,355,132,350,190,341,190,346,203,344,203,339,282,327,394,428,395,441,281,347,202,359,202,365,192,366,191,361,131,370,132,376,122,378,122,371,64,380" href="#">
											<area floor="sp-5" alt="Floor 5" shape="poly" coords="63,386,119,379,120,384,133,382,133,377,189,368,190,373,203,371,203,366,281,354,394,444,394,457,281,375,202,387,202,392,191,393,191,389,132,396,132,401,122,402,122,397,64,404" href="#">
											<?php // <area floor="sp-4" alt="Floor 4" shape="poly" coords="65,411,120,405,121,409,133,408,133,402,190,395,191,400,203,399,203,394,282,384,394,460,394,473,282,405,203,414,204,419,191,421,192,416,132,423,132,428,123,429,122,423,64,430" href="#"> ?>
											<?php // <area floor="sp-3" alt="Floor 3" shape="poly" coords="64,436,121,430,121,435,133,434,133,429,191,422,191,427,204,426,204,421,283,412,393,476,393,490,283,433,204,442,204,447,192,448,192,443,133,449,133,455,122,456,122,451,64,456" href="#"> ?>
											<?php // <area floor="sp-2" alt="Floor 2" shape="poly" coords="283,440,391,492,392,507,282,463,168,473,65,479,65,460,122,457,121,461,132,461,133,457,192,452,193,456,204,455,204,450" href="#"> ?>

										</map>

										<?php } ?>
										<?php if ($parent_title == 'Preston Commons') {?>
										<div class="slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/pc-3.jpg); position:absolute; top:0; left:0;"></div>

										<?php } else if ($parent_title == 'Sterling Plaza') {?>
										<div class="slide" style="background-image: url(<?php echo get_template_directory_uri(); ?>/library/images/sp-3.jpg); position:absolute; top:0; left:0;"></div>

										<?php }
											if( get_field('building_rotator') )
											{
												while( has_sub_field('building_rotator') )
												{ 
													$building_image = get_sub_field('image');
													echo '<div class="slide" style="background: url(' . $building_image . ');"></div>';
												}
											} ?>
										</div><?php // feature-wrap ?>
							    </div><?php // feature ?>

							    <div class="twelvecol site-width-wrap clearfix building-sidebar">
								    <div class="sidebar fourcol first clearfix">
									    <nav class="clearfix">
									    	<div class="intro">
									    		<h1 class="page-name" itemprop="headline"><?php echo $parent_title; ?></h1>
									    		<?php the_content(); ?>
									    	</div>

												<div class="nav-btn-wrap">
										    	<a href="<?php echo home_url();?>/<?php echo $parent_title_url; ?>/available-space/" class="sidebar-active">
										    		<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-space.svg" />
										    		<h3>Available Space</h3>
										    	</a>
										    	<a href="<?php echo home_url();?>/<?php echo $parent_title_url; ?>/amenities/">
														<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-amenities.svg" />
											    	<h3>Amenities</h3>
											    </a>
										    	<a href="<?php echo home_url();?>/<?php echo $parent_title_url; ?>/contact/">
														<img src="<?php echo get_template_directory_uri(); ?>/library/images/icon-contact.svg" />
										    	<h3>Contact</h3></a>
										   	</div><?php // side-btn-wrap ?>

									    </nav>
								    </div> <?php // sidebar ?>
								    <div class="floor-sidebar building fourcol first clearfix">

								    	<?php //used to create the illusion that the more details link isn't fading?>
								    	<div class="more-details-link details-link-static clearfix" style="z-index: 1">
											<a class="lbp_secondary cboxElement" href="<?php the_permalink(); ?>">
							    				<div>
							    					<h6><em>Click to View</em></h6>
									    			<h3>Floor Plan Details</h3>
									    		</div>
											</a>
										</div>

							<?php //===================================START LOOP HERE==========================?>
							<?php $loopCounter =1; ?>

							<?php while($loopCounter <= 3) {?>

											<?php // LIST AVAILABLE SUITES
												$previousFloor= 1;
												$firstFloor = TRUE;


												if ($parent_title == 'Sterling Plaza' AND $loopCounter == 1) {
													$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'property' => 'sterling-plaza-2');

												} else if ($parent_title == 'Preston Commons' AND $loopCounter==1) {
													$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'property' => 'preston-commons-bank');

												}else if ($parent_title == 'Preston Commons' AND $loopCounter==2) {
													$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'property' => 'preston-commons-east');

												}else if ($parent_title == 'Preston Commons' AND $loopCounter==3) {
													$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'title', 'order' => 'ASC', 'property' => 'preston-commons-west');
												}

												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post();
												?>

												<?php $floor = return_floor_number();
												if(cpt_category('property')  == "Preston Commons West") {
													$building="pc-west";
												}else if(cpt_category('property')  == "Preston Commons East"){
													$building="pc-east";
												}else if(cpt_category('property')  == "Preston Commons Bank"){
													$building="pc-bank";
												}else if(cpt_category('property')  == "Sterling Plaza"){
													$building="sp";
												}
												?>

												<?php if($firstFloor){ ?>
							<?php //===================================IF FIRST FLOOR==========================?>

													<div class="floor-<?php echo $floor; ?> floorplans <?php echo $building; ?>">
														<?php $firstFloor = FALSE; ?>

													<div class="rotator-nav rotator-<?php echo $floor; ?>">
														<button class="rotator-prev rotator-prev-<?php echo $floor; ?>">Prev</button>
														<button class="rotator-next rotator-next-<?php echo $floor; ?>">Next</button>
													</div>

									    				<div class="floorplan-<?php echo $floor; ?> individual-floorplan <?php echo $building; ?>">

										    				<div class="slide floorplan-slide">

											    				<div class="floorplan-image suite-<?php the_title(); ?>">
											    					<img src="<?php the_field('floor_plan'); ?>" alt="<?php the_title(); ?>"/>
											    				</div>

												    			<div class="floorplan-details">
												    				<h5>Floor <?php echo $floor; ?></h5>
													    			<h6>Suite <?php the_title(); ?></h6>
													    		</div>


											    			<div class="more-details-link clearfix">
												    			<a class="lbp_secondary cboxElement" href="<?php the_permalink(); ?>">
												    				<div>
												    					<h6><em>Click to View</em></h6>
														    			<h3>Floor Plan Details</h3>
														    		</div>
														    	</a>
												    		</div></div> <?php // slide ?>
										    			</div><?php // floorplan-# ?>

													<?php $previousFloor = $floor;
														$previousBuilding = $building;
													?>


												<?php } else if($floor==$previousFloor AND $previousBuilding == $building){ ?>

								<?php //===================================IF A FLOOR WITH MULTIPLE SUITES==========================?>


													<div class="floorplan-<?php echo $floor; ?> individual-floorplan <?php echo $building; ?>">

										    				<div class="slide floorplan-slide">

											    				<div class="floorplan-image suite-<?php the_title(); ?>">
											    					<img src="<?php the_field('floor_plan'); ?>" alt="<?php the_title(); ?>"/>
											    				</div>

												    			<div class="floorplan-details">
												    				<h5>Floor <?php echo $floor; ?></h5>
													    			<h6>Suite <?php the_title(); ?></h6>
													    		</div>


											    			<div class="more-details-link clearfix">
												    			<a class="lbp_secondary cboxElement" href="<?php the_permalink(); ?>">
												    				<div>
												    					<h6><em>Click to View</em></h6>
														    			<h3>Floor Plan Details</h3>
														    		</div>
														    	</a>
												    		</div></div> <?php // slide ?>
										    			</div><?php // floorplan-# ?>

													<?php $previousFloor = $floor;
													$previousBuilding = $building; ?>


												<?php } else { ?>

									<?php //===================================START NEW FLOOR========================== ?>

												</div><?php // close previous floor before starting new one ?>
												<div class="floor-<?php echo $floor; ?> floorplans <?php echo $building; ?>">

													<div class="rotator-nav rotator-<?php echo $floor; ?>">
														<button class="rotator-prev rotator-prev-<?php echo $floor; ?>">Prev</button>
														<button class="rotator-next rotator-next-<?php echo $floor; ?>">Next</button>
													</div>

													<div class="floorplan-<?php echo $floor; ?> individual-floorplan <?php echo $building; ?>">

										    				<div class="slide floorplan-slide">

											    				<div class="floorplan-image suite-<?php the_title(); ?>">
											    					<img src="<?php the_field('floor_plan'); ?>" alt="<?php the_title(); ?>"/>
											    				</div>

												    			<div class="floorplan-details">
												    				<h5>Floor <?php echo $floor; ?></h5>
													    			<h6>Suite <?php the_title(); ?></h6>
													    		</div>



											    			<div class="more-details-link clearfix">
												    			<a class="lbp_secondary cboxElement" href="<?php the_permalink(); ?>">
												    				<div>
												    					<h6><em>Click to View</em></h6>
														    			<h3>Floor Plan Details</h3>
														    		</div>
														    	</a>
												    		</div></div> <?php // slide ?>

										    			</div><?php // floorplan-# ?>

													<?php $previousFloor = $floor;
													$previousBuilding = $building; ?>

												<?php } ?>


									<?php endwhile; // END OF LIST
										$loopCounter++;
										if ($parent_title == 'Sterling Plaza' ){
											$loopCounter = 4;
										}?>

										<?php wp_reset_query(); ?>
									</div><?php // Last Floor-# ?>
										<?php }?>

								</div><?php // floor-sidebar ?>

							    </div><?php // twelvecol ?>



							    <?php endwhile; endif;?>
							    <?php wp_reset_query(); ?>



							    <?php if ($parent_title == 'Sterling Plaza') {
									$query = new WP_Query( 'page_id=15' ); //Pull key features from the Sterling Plaza Landing Page
								}else if ($parent_title == 'Preston Commons') {
									$query = new WP_Query( 'page_id=7' ); //Pull key features from the Preston Commons Landing Page
								}
							    	if ( $query->have_posts() ) {
							    		while ( $query->have_posts() ) {
							    			$query->the_post();
							    ?>

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



							    <?php } }?>
							    
							    </div><?php // building-info wrap ?>

							    <?php //=================================== FOR MOBILE - SPACES TABLE ========================== ?>

							    <div id="tablepress-1_wrapper" class="dataTables_wrapper spaces-table" role="grid">


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

											if ($parent_title == 'Sterling Plaza') {
													$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC', 'property' => 'sterling-plaza-2' );
												} else if ($parent_title == 'Preston Commons') {
													$args = array( 'post_type' => 'suite', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC', 'property' => 'preston-commons-west, preston-commons-east, preston-commons-bank');
												}
												$loop = new WP_Query( $args );
												while ( $loop->have_posts() ) : $loop->the_post();
												?>
											<tr>
												<td><?php the_title(); ?></td>
												<td><?php echo cpt_category('property');?></td>
												<td><?php the_field('square_footage'); ?></td>
												<td><a id="details-link" class="details-link lbp_secondary cboxElement" href="<?php the_permalink(); ?>">Details</a></td>
<!-- 												<td><a class="lbp_secondary cboxElement" href="<?php the_permalink(); ?>">Details</a></td> -->
											</tr>
											<?php endwhile; wp_reset_query(); // END OF LIST ?>



											</tbody>
											</table>
										</div><?php // tablepress ?>

								</div><?php // building ?>
						
				    
					
					    </article><?php // article ?>
			
    				</div><?php // main ?>
    
				    
				</div><?php // inner-content ?>
    
			</div><?php // content ?>

<?php get_footer(); ?>
