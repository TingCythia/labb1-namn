<?php
/** 
* Template Name: Blog Template
* Description:blog home 
* @package labb1-namn
* @subpackage labb1-namn
*/
get_header(); ?>

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<h1>Blogg</h1>
							<article>
              <img src="<?php echo get_template_directory_uri (); ?>/img/washington.jpg" width="" height="" alt="" />
								<h2 class="title">
									<a href="inlagg.html">Det tredje inlägget</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex. Phasellus tristique nunc in leo faucibus, a consequat nulla sagittis. In sed mi mi. Praesent condimentum sollicitudin nibh. Vivamus vulputate purus quis volutpat fringilla. Ut tortor libero, semper eget dolor vel, hendrerit tempus dui. Suspendisse dictum efficitur blandit. In porta scelerisque nulla ac placerat.</p>
							</article>
              
							<article>
              <img src="<?php echo get_template_directory_uri (); ?>/img/paris.jpg" width="" height="" alt="" />
								<h2 class="title">
									<a href="inlagg.html">Mitt andra inlägg</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html">John Doe</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 3</a>
									</li>
								</ul>
								<p>Integer quis eros at urna pulvinar mollis eget quis ex. Nam fringilla tellus at ligula consequat, sed sagittis ipsum ultricies. Nunc pretium bibendum enim id iaculis. Nam sed leo non sem aliquam imperdiet dictum vitae magna. Phasellus ac accumsan dolor, quis congue mauris. Maecenas vehicula, arcu sed congue euismod, mi urna rhoncus nunc, et feugiat arcu tellus vitae odio. Sed luctus vel lorem vel dictum. Suspendisse potenti. Proin vel efficitur ex. Suspendisse scelerisque rutrum mattis. In sed laoreet augue, non maximus ante. Nam a rhoncus ligula. Aliquam at aliquet lorem. Suspendisse non risus tincidunt, gravida augue non, fringilla libero.</p>
							</article>

							<article>
              <img src="<?php echo get_template_directory_uri (); ?>/img/london.jpg" width="" height="" alt="" />
								<h2 class="title">
									<a href="inlagg.html">Hej världen!</a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> 1 januari, 2016
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>, <a href="kategori.html">Kategori 3</a>
									</li>
								</ul>
								<p>Sed pretium metus in urna vehicula imperdiet. Fusce at odio vitae felis maximus tincidunt. Nunc porttitor ex a elementum dictum. Maecenas eget arcu nulla. Cras auctor dui aliquet, condimentum orci vel, venenatis nisl. Ut semper magna urna, ac congue dui cursus vitae. Nam sed pharetra leo, vel tincidunt est. Phasellus volutpat tortor nec nulla feugiat congue. Donec quis ligula varius, euismod nisl eu, aliquet metus. Aliquam tempus iaculis odio, sed volutpat mi aliquam aliquet.</p>
							</article>
							<nav class="navigation pagination">
								<h2 class="screen-reader-text">Inläggsnavigering</h2>
								<a class="prev page-numbers" href="">Föregående</a>
								<span class="page-numbers current">1</span>
								<a class="page-numbers" href="">2</a>
								<a class="next page-numbers" href="">Nästa</a>
							</nav>
						</div>


						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">
							<?php do_action( 'before_sidebar' ); ?>
							
								<ul>
									<li>
										<form id="searchform" class="searchform">
											<div>
											<?php get_search_form(); ?>
											</div>
										</form>
									</li>
								</ul>
								
								<ul role="navigation">
								
									<li class="pagenav">
									<h2><?php _e( 'Sidor', 'shape' ); ?></h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="<?php echo get_permalink( get_page_by_path( 'single' ) ); ?>">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ); ?>">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="<?php echo get_permalink( get_page_by_path( 'undersida4' ) ); ?>">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="<?php echo get_permalink( get_page_by_path( 'undersida4' ) ); ?>">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="<?php echo get_permalink( get_page_by_path( 'undersida4' ) ); ?>">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="<?php echo get_page_by_path( 'front-page' ); ?>">Startsida</a>
											</li>
										</ul>
									</li>

									<li>
									
									
										<ul>
											<li>
											<?php dynamic_sidebar('widget1');?>
											</li>
										</ul>
									</li>
									<li class="categories">
										<h2>
									    </h2>
										<ul>
											<li class="cat-item">

										</ul>
									</li>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>



<?php get_footer(); ?>