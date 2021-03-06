<!DOCTYPE html>
<html>
<!--- header -->
<?php include 'inc/header.tpl'; ?>
<!--- header -->


<!----  body ----->
<body oncontextmenu="return false" onkeydown="return false">
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<?php require 'inc/header-section.tpl'; ?>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">

			<?php for ($i=0; $i < count($data['GamesOnSlider']); $i++) 
			{ 
			?>
			<div class="hs-item set-bg" data-setbg="<?php echo RESOURSES; ?>img/<?php echo $data['GamesOnSlider'][$i]['cover']; ?>">
				<div class="hs-text">
					<div class="container">
						<h2><?php echo $data['GamesOnSlider'][$i]['title']; ?></h2>
						<p><?php echo $data['GamesOnSlider'][$i]['description']; ?></p>
						<a href="../../game/<?php echo $data['GamesOnSlider'][$i]['id']; ?>/<?php echo $data['GamesOnSlider'][$i]['url'].".html"?>" class="site-btn"><?php echo READ_MORE; ?></a>
					</div>
				</div>
			</div>
			<?php } ?>
			
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title"><?php echo LASTEST_NEWS; ?></div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
				<div class="nt-item"><span class="racing">racing</span>Isum dolor sit amet, consectetur adipiscing elit. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Feature section -->
	<section class="feature-section spad">
		<div class="container">

			<div class="">
				<h2 style="color: white;" ><?php echo RECENT_GAMES; ?></h2>
			</div>

			<div class="row">
				

				<?php for ($i=0; $i < 20; $i++) { ?>



				<div class="col-lg-3 col-md-3 p-0">
					<div class="feature-item set-bg" data-setbg="<?php echo RESOURSES; ?>img/features/1.jpg">
						<span class="cata free">FREE</span>
						<div class="fi-content text-white">
							<h6><a href="#">Suspendisse ut justo tem por, rutrum</a></h6>
							
							<a href="#" class="fi-comment"><i class="fa fa-comments"> 3 </i> </a>
							<a href="#" class="fi-comment"><i class="fa fa-fire"> 881 </i> </a>
							<a href="#" class="fi-comment"><i class="fa fa-eye"> 2500 </i> </a>

						</div>
					</div>
				</div>

				<?php }?>

			</div>
		</div>
	</section>
	<!-- Feature section end -->


	<!-- Recent game section  -->
	<section class="recent-game-section spad set-bg" >
		<div class="container">
			<div class="section-title">
				<div class="cata new"><?php echo 'Nuevo'; ?></div>
				<h2 style="color: white;" ><?php echo RECENT_GAMES; ?></h2>
			</div>
			<div class="row">

				<div class="col-lg-3 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/recent-game/1.jpg">
							<div class="cata new">new</div>
						</div>
						<div class="rgi-content">
							<h5>Suspendisse ut justo tem por, rutrum</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="<?php echo RESOURSES; ?>img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="<?php echo RESOURSES; ?>img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/recent-game/2.jpg">
							<div class="cata racing">racing</div>
						</div>
						<div class="rgi-content">
							<h5>Susce pulvinar metus nulla, vel  facilisis sem </h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="<?php echo RESOURSES; ?>img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="<?php echo RESOURSES; ?>img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="recent-game-item">
						<div class="rgi-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/recent-game/3.jpg">
							<div class="cata adventure">Adventure</div>
						</div>
						<div class="rgi-content">
							<h5>Suspendisse ut justo tem por, rutrum</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit amet, consectetur elit. </p>
							<a href="#" class="comment">3 Comments</a>
							<div class="rgi-extra">
								<div class="rgi-star"><img src="<?php echo RESOURSES; ?>img/icons/star.png" alt=""></div>
								<div class="rgi-heart"><img src="<?php echo RESOURSES; ?>img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="recent-game-item">

						<div class="rgi-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/recent-game/2.jpg">
							<div class="cata free">FREE</div>
						</div>

						<div class="game-title">
							<h6 >Susce pulvinar metus nulla, vel  facilisis sem </h6>
						</div>
						
						<div class="rgi-content">
							
							<div class="rgi-extra">
								<div class="rgi-star"><img src="<?php echo RESOURSES; ?>img/icons/star.png" alt=""></div>

								<div class="rgi-heart"><img src="<?php echo RESOURSES; ?>img/icons/heart.png" alt=""></div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Recent game section end -->


	<!-- Tournaments section -->
	<section class="tournaments-section spad">
		<div class="container">
			<div class="tournament-title">Tournaments</div>
			<div class="row">
				<div class="col-md-6">
					<div class="tournament-item mb-4 mb-lg-0">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/tournament/1.jpg"></div>
							<div class="ti-text">
								<h4>World Of WarCraft</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="tournament-item">
						<div class="ti-notic">Premium Tournament</div>
						<div class="ti-content">
							<div class="ti-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/tournament/2.jpg"></div>
							<div class="ti-text">
								<h4>DOOM</h4>
								<ul>
									<li><span>Tournament Beggins:</span> June 20, 2018</li>
									<li><span>Tounament Ends:</span> July 01, 2018</li>
									<li><span>Participants:</span> 10 teams</li>
									<li><span>Tournament Author:</span> Admin</li>
								</ul>
								<p><span>Prizes:</span> 1st place $2000, 2nd place: $1000, 3rd place: $500</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Tournaments section bg -->


	<!-- Review section -->
	<section class="review-section spad set-bg" data-setbg="<?php echo RESOURSES; ?>img/review-bg.png">
		<div class="container">
			<div class="section-title">
				<div class="cata new">new</div>
				<h2>Recent Reviews</h2>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="<?php echo RESOURSES; ?>img/review/1.jpg">
							<div class="score yellow">9.3</div>
						</div>
						<div class="review-text">
							<h5>Assasin’’s Creed</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="<?php echo RESOURSES; ?>img/review/2.jpg">
							<div class="score purple">9.5</div>
						</div>
						<div class="review-text">
							<h5>Doom</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="<?php echo RESOURSES; ?>img/review/3.jpg">
							<div class="score green">9.1</div>
						</div>
						<div class="review-text">
							<h5>Overwatch</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="review-item">
						<div class="review-cover set-bg" data-setbg="<?php echo RESOURSES; ?>img/review/4.jpg">
							<div class="score pink">9.7</div>
						</div>
						<div class="review-text">
							<h5>GTA</h5>
							<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Review section end -->


	<!-- Footer top section -->
	<section class="footer-top-section">
		<div class="container">

			<div class="footer-top-bg">
				<!-- <img src="<?php //echo RESOURSES; ?>img/footer-top-bg.png" alt=""> -->
			</div>

			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="<?php echo RESOURSES; ?>img/footer-logo.png" alt="">
						<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum dolor sit ame.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Posts</h4>
						<div class="latest-blog">
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/latest-blog/1.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/latest-blog/2.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
							<div class="lb-item">
								<div class="lb-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/latest-blog/3.jpg"></div>
								<div class="lb-content">
									<div class="lb-date">June 21, 2018</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisc ing ipsum </p>
									<a href="#" class="lb-author">By Admin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget">
						<h4 class="fw-title">Top Comments</h4>
						<div class="top-comment">
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/authors/1.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/authors/2.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/authors/3.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
							<div class="tc-item">
								<div class="tc-thumb set-bg" data-setbg="<?php echo RESOURSES; ?>img/authors/4.jpg"></div>
								<div class="tc-content">
									<p><a href="#">James Smith</a> <span>on</span>  Lorem ipsum dolor sit amet, co</p>
									<div class="tc-date">June 21, 2018</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

</body>
<!----  body ----->













<!--- footer -->
<?php include 'inc/footer.tpl'; ?>
<!--- footer -->
</html>



