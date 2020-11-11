<?php include_once("components/head.php") ?>
	<body class="homepage header-collapse">

		<div id="site-content">
			
			<?php include_once("components/header.php") ?>
			
			<div class="hero hero-slider">
				<ul class="slides">
					<li data-bg-image="<?= assets("dummy/slider-1.jpg") ?>">
						<div class="container">
							<h3 class="slider-subtitle">Your header goes here</h3>
							<h2 class="slider-title">Professional</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa molestiae necessitatibus possimus ducimus facere, error, nostrum. Quos sapiente ducimus maxime odio alias dolor consequuntur, maiores commodi exercitationem veniam. Id, ex?</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
					<li data-bg-image="<?= assets("dummy/slider-2.jpg") ?>">
						<div class="container">
							<h3 class="slider-subtitle">Your header goes here</h3>
							<h2 class="slider-title">Professional</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In maiores illo eligendi obcaecati reiciendis, vel perspiciatis aliquid esse architecto deleniti asperiores, laboriosam nemo rerum! Ipsam numquam delectus minus iure sit!</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
					<li data-bg-image="<?= assets("dummy/slider-3.jpg") ?>">
						<div class="container">
							<h3 class="slider-subtitle">Your header goes here</h3>
							<h2 class="slider-title">Professional</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam iure, alias error suscipit porro quidem minus, autem repellendus rerum labore corrupti! Quia quas, architecto, quis non pariatur quisquam nisi magnam.</p>
							<a href="#" class="button large">Read more</a>
						</div>
					</li>
				</ul>
			</div>

			<main class="main-content">
				<div class="fullwidth-block latest-news-section">
					<div class="container">
						<h2 class="section-title">Latest News</h2>
						<div class="row">
							<div class="col-md-4">
								<div class="news">
									<div class="entry-date">
										<div class="date">29</div>
										<div class="monthyear">07.2014</div>
									</div>
									<div class="entry-detail">
										<div class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo velit, tempora aut nesciunt. <a href="#" class="more-icon"><img src="images/arrow.png"></a></div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<div class="entry-date">
										<div class="date">29</div>
										<div class="monthyear">07.2014</div>
									</div>
									<div class="entry-detail">
										<div class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum quo esse vero ipsa architecto <a href="#" class="more-icon"><img src="images/arrow.png"></a></div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="news">
									<div class="entry-date">
										<div class="date">29</div>
										<div class="monthyear">07.2014</div>
									</div>
									<div class="entry-detail">
										<div class="entry-summary">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, corporis,  <a href="#" class="more-icon"><img src="images/arrow.png"></a></div>
									</div>
								</div>
							</div>
						</div> <!-- .row -->

						<div class="text-center">
							<a href="#" class="button no-gradient">More news</a>
						</div>
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.latest-news-section -->

				<div class="fullwidth-block features-section">
					<div class="container">
						<h2 class="section-title">our Services</h2>
						<div class="row">
							<div class="col-md-3">
								<div class="feature">
									<img src="<?= assets("images/icon-1.png") ?>" class="feature-image">
									<h3 class="feature-title">Voluptatem</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolor perferendis blanditiis voluptate maiores </p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature">
									<img src="<?= assets("images/icon-2.png") ?>" class="feature-image">
									<h3 class="feature-title">COnsequatur</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, minus, totam. Officia ea accusamus quis tenetur quas </p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature">
									<img src="<?= assets("images/icon-3.png") ?>" class="feature-image">
									<h3 class="feature-title">Temporibus</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, omnis cum, quo dolorem molestias asperiores doloremque dolorum</p>
								</div>
							</div>
							<div class="col-md-3">
								<div class="feature">
									<img src="<?= assets("images/icon-4.png") ?>" class="feature-image">
									<h3 class="feature-title">Perferendis</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, facere numquam porro amet reiciendis maiores odio velit</p>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.features-section -->

				<div class="fullwidth-block team-section">
					<div class="container">
						<h2 class="section-title">Our team</h2>
						<div class="row">
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="<?= assets("dummy/person-1.jpg") ?>"></figure>
									<h3 class="team-name">Sarah james</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio nihil distinctio natus doloremque id tempore repellendus atque</p>
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="<?= assets("dummy/person-2.jpg") ?>"></figure>
									<h3 class="team-name">Marta Smith</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta iste natus voluptatum eius? Vitae accusantium, deserunt maiores incidunt</p>
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="<?= assets("dummy/person-3.jpg") ?>"></figure>
									<h3 class="team-name">Nicole Johnson</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur aut, laboriosam iure, quisquam reiciendis voluptas.</p>
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="team">
									<figure class="team-image"><img src="<?= assets("dummy/person-4.jpg") ?>"></figure>
									<h3 class="team-name">Alicia Brown</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla itaque veritatis amet unde aliquid, non tenetur doloremque</p>
									<div class="social-links">
										<a href="#"><i class="fa fa-facebook"></i></a>
										<a href="#"><i class="fa fa-twitter"></i></a>
										<a href="#"><i class="fa fa-google-plus"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .row -->
					</div> <!-- .container -->
				</div> <!-- .fullwidth-block.team-section -->

				<div class="fullwidth-block information-section">
					<div class="container">
						<h2 class="section-title">Information</h2>
						<div class="row">
							<div class="col-md-4">
								<figure><img src="<?= assets("dummy/figure-1.jpg") ?>" ></figure>
							</div>
							<div class="col-md-4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque omnis minima accusamus nihil eligendi quas cumque rerum odit quo architecto repudiandae adipisci repellendus velit nostrum sed quisquam doloribus, consequatur sint. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque omnis minima accusamus nihil eligendi quas cumque rerum odit quo architecto repudiandae adipisci repellendus velit nostrum sed quisquam doloribus, consequatur sint.</p>
							</div>
							<div class="col-md-4">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium odit, blanditiis aliquam officia soluta modi amet ex nihil nulla minima. Nam earum est magnam tempore corrupti quos consequatur, numquam voluptas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque omnis minima accusamus nihil eligendi quas cumque rerum odit quo architecto repudiandae adipisci repellendus velit nostrum sed quisquam doloribus, consequatur sint.</p>
							</div>
						</div>
					</div>
				</div> <!-- .fullwidth-block.information-section -->
			</main>

			<?php include_once("components/footer.php") ?>
		</div>
		
<?php include_once("components/bottom.php") ?>