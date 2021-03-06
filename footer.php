	<?php wp_footer(); ?>
	<footer>

		<!-- Facebook Tracker -->
		<script>
			window.fbAsyncInit = function() {
				FB.init({
				appId            : '153590798408172',
				autoLogAppEvents : true,
				xfbml            : true,
				version          : 'v9.0'
				});
			};
		</script>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js"></script>
		<!-- End Facebook SDK -->

		<div class="primary">
			<div class="wrap clear">
				<img src="<?php echo bloginfo('template_url'); ?>/img/footer-logo.webp" alt="Apex Seller" width="36" height="38">
				<?php footer_nav(); ?>
			</div>
		</div>	

		<div class="secondary clear">
			<div class="wrap clear">
				<div class="copyright">
					<p>&copy; <?php echo date('Y'); ?> IntoProfits.com</p>
					<div class="copyright-links">
						<a style="margin-right: 20px;" href="<?php echo site_url(); ?>/privacy-policy">Privacy &amp; Legal</a>
						<a href="<?php echo site_url(); ?>/contact">Contact</a>
					</div>
				</div>
	
				<div class="social">
					<a href="https://app.intoprofits.com/login" rel="noopener" aria-label="Login" target="_blank">Login</a>
					<div class="social-icons">
						<a class="icon-youtube" rel="noopener" aria-label="Youtube" target="_blank" href="https://www.youtube.com/channel/UCOhQ7IdiVx4IKDOKRKl7RtA"></a>
						<a class="icon-facebook" rel="noopener" aria-label="Facebook" target="_blank" href="https://business.facebook.com/danielaudunssonlive"></a>
						<a class="icon-twitter" rel="noopener" aria-label="Twitter" target="_blank" href="https://twitter.com/DanielAudunsson"></a>
						<a class="icon-linkedin" rel="noopener" aria-label="Linkedin" target="_blank" href="https://www.linkedin.com/in/daniel-audunsson-81b3b27b/"></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	</body>
</html>
