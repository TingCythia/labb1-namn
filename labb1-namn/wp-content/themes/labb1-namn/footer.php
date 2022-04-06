

<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h4>About Us</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
						<p>Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis.</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Contact information</h4>
						<p>
							Tings WordPress Company<br />
							MedieInstitutet<br />
							Andersgatan 18
						</p>
						<p>
							Tel: 0123456789<br />
							E-post: <a href="">info@tingswordpresscompany.se</a>
						</p>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
						<h4>Social media</h4>
						<ul class="social">
							<li>
								<i class="fa fa-facebook"></i> <a href="">Facebook</a>
							</li>
							<li>
								<i class="fa fa-twitter"></i> <a href="">Twitter</a>
							</li>
							<li>
								<i class="fa fa-instagram"></i> <a href="">Instagram</a>
							</li>
							<li>
								<i class="fa fa-linkedin"></i> <a href="">LinkedIn</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp TW, 2022</p>
					</div>
				</div>
			</div>
		</footer>

	</div>



</body>
</html>
<?php
    $menuarray = ['theme_location' => 'socialmeny',];
    wp_nav_menu($menuarray);
    ?>
<?php wp_footer();?>
</body>
</html>