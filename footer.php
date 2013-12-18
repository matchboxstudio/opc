			<?php if (is_singular('suite')) { ?> 
			<?php } else { ?>  
			<footer class="footer clearfix" role="contentinfo">
				<div class="footer-trim"></div>
				<div id="inner-footer" class="wrap clearfix">
					
					<div class="twelvecol first clearfix">
						<div class="tenant clearfix">
							<h3>Tenant Login</h3>
							<p>
								<a href="http://sterlingplaza.axisportal.com/login.axis">Sterling Plaza</a><br>
								<a href="http://prestoncommons.axisportal.com/login.axis">Preston Commons</a>
							</p>
						</div>
						
						<div class="third social clearfix">
							<h3>Follow Us</h3>
							<a href="https://www.facebook.com/KBSPrestonCenter" target="_blank" class="icon fb">facebook</a>
							<a href="https://twitter.com/KBSPrestonCntr" target="_blank" class="icon tw">twitter</a>
						</div><?php // social ?>
						
						<div class="third contact">
							<h3><a href="<?php echo home_url()?>/contact/">Contact</a></h3>
							<?php // <p>8222 Douglas Ave.<br> Dallas, Texas 75225<br> ?>
							<p><a href="mailto:burson.holman@cbre.com">Email</a></br>
							214.979.6156</p>
						</div><?php // contact ?>
				
					<div class="third source-org copyright">
						<h3>&copy; <?php echo date('Y'); ?> </h3>
						<p><?php bloginfo('name'); ?></p>
					</div><?php // source-org copyright ?>
				
					</div><?php // twelvecol first clearfix ?>
					
		                		
				
				</div><?php // inner-footer ?>
				
			</footer><?php // footer ?>
		</div><?php // oc-wrap ?>
		</div><?php // container ?>
		<?php } // end else ?>
		<?php wp_footer(); ?>
	</body>

</html>