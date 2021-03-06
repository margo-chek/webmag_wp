<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webmag
 */

get_header('category');
?>

	<!-- section -->
	<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">

						<?php if ( have_posts() ) :
							/* Start the Loop */
							$count = 0;
							while ( have_posts() ) :
								the_post();

								/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/

								// if ($count === 3 || $count === 5) echo '<div class="clearfix visible-md visible-lg"></div>';
								switch ($count) {
									case 0:
										?>
										<!-- post -->
											<div class="col-md-12">
												<div class="post post-thumb">
													<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
													<div class="post-body">
														<div class="post-meta">
															<a class="post-category cat-1" href="category.html">
																<?php echo get_the_category()[0]->cat_name ?>
															</a>
															<span class="post-date"><?php the_date('F j, Y') ?></span>
														</div>
													<h3 class="post-title"><a href="blog-post.html"><?php the_title() ?></a></h3>
													</div>
												</div>
											</div>
										<!-- /post -->
										<?php
										$count++;
										break;

									case 1:
											
										global $post;
										$myposts = get_posts( array(
											'numberposts' => 2,
										) );

										foreach( $myposts as $post ){
												setup_postdata( $post ); 
												?>
												<!-- post -->
													<div class="col-md-6">
														<div class="post">
															<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
															<div class="post-body">
																<div class="post-meta">
																	<a class="post-category cat-1" href="category.html">
																		<?php echo get_the_category()[0]->cat_name ?>
																	</a>
																	<span class="post-date"><?php the_date('F j, Y') ?></span>
																</div>
																<h3 class="post-title"><a href="blog-post.html"><?php the_title() ?></a></h3>
															</div>
														</div>
													</div>
												<!-- /post -->														
											<?php 
											$count++;
										} 
										wp_reset_postdata();
										break;
									
									default:
										# code...
										break;
								}

								// get_template_part( 'template-parts/content', get_post_type() );

							endwhile;

							// the_posts_navigation();

							else :

							get_template_part( 'template-parts/content', 'none' );

							endif;
						?>
							
							<div class="clearfix visible-md visible-lg"></div>
							
							<!-- ad -->
							<div class="col-md-12">
								<div class="section-row">
									<a href="#">
										<img class="img-responsive center-block" src="<?php echo get_template_directory_uri(); ?>/img/ad-2.jpg" alt="">
									</a>
								</div>
							</div>
							<!-- ad -->

							<?php
								while ( have_posts() ) :
									the_post(); ?>

									<!-- 4 post -->
										<div class="col-md-12">
											<div class="post post-row">
												<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
												<div class="post-body">
													<div class="post-meta">
														<a class="post-category cat-1" href="category.html">
															<?php echo get_the_category()[0]->cat_name ?>
														</a>
														<span class="post-date"><?php the_date('F j, Y') ?></span>
													</div>
													<h3 class="post-title"><a href="blog-post.html"><?php the_title() ?></a></h3>
													<p class="post-content"><?php the_content() ?></p>
												</div>
											</div>
										</div>
									<!-- /post -->

									<?php
									$count++;	

								endwhile; // End of the loop.
							?>
							
							
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- post widget -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Most Read</h2>
							</div>

							<?php
								while ( have_posts() ) :
									the_post(); ?>

									<!-- 4 post -->
										<div class="post post-widget">
											<a class="post-img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
											<div class="post-body">
												<h3 class="post-title"><a href="blog-post.html"><?php the_title() ?></a></h3>
											</div>
										</div>
									<!-- /post -->

								<?php

								endwhile; // End of the loop.
							?>

						</div>
						<!-- /post widget -->
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">Jan 2018</a></li>
									<li><a href="#">Feb 2018</a></li>
									<li><a href="#">Mar 2018</a></li>
								</ul>
							</div>
						</div>
						<!-- /archive -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

<?php
// get_sidebar();
get_footer();
