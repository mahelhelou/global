<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body>
	<!-- back to top button-->
	<a class="backTop" href="#">
		<i class="fas fa-chevron-up"></i>
	</a>

	<main>
		<nav id="nav" class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="<?php echo site_url(); ?>">
					<div class="navbar-brand__image">
						<img src="<?php echo get_template_directory_uri() . '/assets/img/logo1.png' ?>" alt="">
					</div>
					<div class="navbar-brand__logo-text">
						<span class="ar_logo">العالمية للتطوير والتدريب</span><br>
						<span class="eng_logo">Global for Development & Training</span>
					</div>
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07"
					aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarsExample07">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#nav">الرئيسية <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#about">من نحن</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#videos"> فيديو</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#images">صور</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contact">تواصل معنا</a>
						</li>
						<!-- <li class="nav-item">
							<a class="btn btn-danger" href="">00972594392924</a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
	</main>

	<div class="main-section">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<!-- <div class="carousel-caption">
				<img src="assets/img/al3lamia.png" alt="">
				<div class="separator mt-4 "></div>
				<p>شركـة فلسطينيـــــة، تقدم خدمات تدريبية واستشارية في المجال الصحي وإدارة الأزمات والكوارث، كما وتصميم
					وإعداد خطط الطوارئ للمجتمع والمؤسسات.</p>
				<a class="btn btn-danger" href="">خدماتنا</a>
			</div> -->
			<div class="carousel-inner">
			
			<?php
			$index=0;
				$args = array(
					'post_type' => 'slider',
					'posts_per_page' => 5
				);

				$slider = new WP_Query($args);

				while ($slider->have_posts()) {
					$slider->the_post(); ?>

				<div class="<?php if($index==0) echo 'carousel-item active' ; else echo'carousel-item'; ?>" >
					<img src="<?php echo get_field('slider_image')['url']; ?>" class="d-block w-100" alt="">
				</div>
				
				<?php 
				$index++;
				}
					wp_reset_postdata();
				?>
			
			</div>
			<a class="carousel-control-prev arro " href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next arro arroNext" href="#carouselExampleControls"  role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="scrooldown">
			<a href="#partners"><img src="<?php echo get_template_directory_uri() . '/assets/img/scrolIcon.png' ?>" alt=""></a>
		</div>
	</div>

	<!-- About us -->
	<div id="about" class="about-us section py-5">
		<div class="container text-center">
			<h2 class="mt-3">من نحن</h2>
			<p class="mt-3 mb-5 ">شركة فلسطينية، تقدم خدمات تدريبية واستشارية في المجال الصحي وإدارة الأزمات والكــوارث،
				كما وتصميم وإعداد خطة الطوارئ للمجتمع والمؤسسات</p>
		</div>
	</div>

	<div class="services section py-5">
		<div class="container text-center">
			<h2>خدماتنا</h2>
			<div class="row">
				<?php
					$args = array(
						'post_type' => 'services',
						'posts_per_page' => 4
					);

					$services = new WP_Query($args);

					while ($services->have_posts()) {
						$services->the_post(); ?>
					
					<div class="col-lg-3">
						<div class="featureImg">
							<img class="img-fluid mt-3" src="<?php echo get_field('service_image')['url']; ?>" alt="">
						</div>
						<div class="featureIcon">
							<a href="">
								<img class="img-fluid" src="<?php echo get_field('service_icon')['url']; ?>" alt="">
							</a>
						</div>
						<div class="featureInfo">
							<h3><?php the_title(); ?></h3>
						</div>
					</div>
					
					<?php }

					wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
	<!------featuers ends-->

	<!---------3rd section-->
	<div class="section thirdsection">
		<div id="videos" class="overlay">
			<div class="container">
				<!-----owl carousal---->
				<div class="owl-carousel owl-theme mt-3 mb-5 text-center">
				<?php
					$args = array(
						'post_type' => 'video',
						'posts_per_page' => -1
					);

					$video = new WP_Query($args);

					while ($video->have_posts()) {
						$video->the_post(); ?>
					
					<div class="item">
						<div class="single_portfolio " style="display: inline-block;" data-bound="">
							<a href="<?php the_field('video_url'); ?>" class="portfolio-img">
								<a class="icon-item" href="<?php the_field('video_url'); ?>"><i class="fas fa-caret-right "></i></a>
								<img src="<?php echo get_field('video_thumbnail')['url']; ?>" alt="">
								<div class="grid_item_overlay">
									<h3 class="text-right half-pic"><?php the_title(); ?></h3>
								</div>
							</a>
						</div>
					</div>

				<?php }
					wp_reset_postdata();
				?>
					<div class="item">
						<div class="single_portfolio " style="display: inline-block;" data-bound="">
							<a href="assets/img/slide3.png" class="portfolio-img">
								<a class="icon-item" href=""><i class="fas fa-caret-right "></i></a>
								<img src="assets/img/slide3.png" alt="">
								<div class="grid_item_overlay">
									<h3 class="text-right half-pic">دورة اعداد خطط اخلاء امن</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single_portfolio " style="display: inline-block;" data-bound="">
							<a href="assets/img/slide3.png" class="portfolio-img">
								<a class="icon-item" href=""><i class="fas fa-caret-right "></i></a>
								<img src="assets/img/slide3.png" alt="">
								<div class="grid_item_overlay">
									<h3 class="text-right half-pic">دورة اعداد خطط اخلاء امن</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single_portfolio " style="display: inline-block;" data-bound="">
							<a href="assets/img/slide4.png" class="portfolio-img">
								<a class="icon-item" href=""><i class="fas fa-caret-right "></i></a>
								<img src="assets/img/slide4.png" alt="">
								<div class="grid_item_overlay">
									<h3 class="text-right half-pic">دورة اعداد خطط اخلاء امن</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single_portfolio " style="display: inline-block;" data-bound="">
							<a href="assets/img/slide1.png" class="portfolio-img">
								<a class="icon-item" href=""><i class="fas fa-caret-right "></i></a>
								<img src="assets/img/slide1.png" alt="">
								<div class="grid_item_overlay">
									<h3 class="text-right half-pic">دورة اعداد خطط اخلاء امن</h3>
								</div>
							</a>
						</div>
					</div>
					<div class="item">
						<div class="single_portfolio " style="display: inline-block;" data-bound="">
							<a href="assets/img/slide2.png" class="portfolio-img">
								<a class="icon-item" href=""><i class="fas fa-caret-right "></i></a>
								<img src="assets/img/slide1.png" alt="">
								<div class="grid_item_overlay">
									<h3 class="text-right half-pic">دورة اعداد خطط اخلاء امن</h3>
								</div>
							</a>
						</div>
					</div>
				</div>
				<!-------------->
			</div>
		</div>
	</div>
	<!---------3rd section end-->
	<!----4th section start-->
	<div id="images" class="section bg-white py-5 fourthsection">
		<div>
			<h2>من إنجازاتنا في صور</h2>
			<div class="separator mt-4 "></div>
			<div class="square">
				<div class="row my-5">
					<?php
						$args = array(
							'post_type' => 'course-picture',
							'posts_per_page' => 4
						);

						$coursePicture = new WP_Query($args);

						while ($coursePicture->have_posts()) {
							$coursePicture->the_post(); ?>
						
						<div class="col-lg-3 row1">
							<div class="single_portfolio " style="display: inline-block;" data-bound="">
								<a href="<?php echo site_url(); ?>" class="portfolio-img">
									<img src="<?php echo get_field('course_image')['url']; ?>" alt="">
									<div class="grid_item_overlay">
										<h3 class="text-right"><?php the_field('course_description'); ?></h3>
									</div>
								</a>
							</div>
						</div>
						
						<?php }

						wp_reset_postdata();
					?>
							<div class="col-lg-3 row1">
									<div class="single_portfolio" style="display: inline-block;" data-bound="">
										<a href="assets/img/pic1.png" class="portfolio-img">
											<img src="assets/img/pic1.png" alt="">
											<div class="grid_item_overlay">
												<h3 class="text-right">تسليم شهادات دورة من دورات العالمية التي تقدمها</h3>
											</div>
										</a>
									</div>
								</div>
								<div class="col-lg-3 row1">
										<div class="single_portfolio " style="display: inline-block;" data-bound="">
											<a href="assets/img/pic1.png" class="portfolio-img">
												<img src="assets/img/pic1.png" alt="">
												<div class="grid_item_overlay">
													<h3 class="text-right">تسليم شهادات دورة من دورات العالمية التي تقدمها</h3>
												</div>
											</a>
										</div>
									</div>
									<div class="col-lg-3 row1">
											<div class="single_portfolio " style="display: inline-block;" data-bound="">
												<a href="assets/img/pic1.png" class="portfolio-img">
													<img src="assets/img/pic1.png" alt="">
													<div class="grid_item_overlay">
														<h3 class="text-right">تسليم شهادات دورة من دورات العالمية التي تقدمها</h3>
													</div>
												</a>
											</div>
										</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!----4th section ends-->
	<!---------5th section----------->
	<div id="partners" class="section py-5 fifthsection text-center">
		<div class="overlay">
			<h2 class="pt-5">شركاء النجاح</h2>
			<p class="mt-3">إن ما تحصل عليه من ثمن دون جهد ليس له قيمة</p>
			<div class="separator mt-4 "></div>
			<div class="container text-center">
				<div class="row">
				<?php
					$args = array(
						'post_type' => 'partner',
						'posts_per_page' => 15
					);

					$partner = new WP_Query($args);

					while ($partner->have_posts()) {
						$partner->the_post(); ?>
					
					<div class="col-lg-2">
						<img class="img-fluid" src="<?php echo get_field('partner_logo')['url']; ?>" alt="">
					</div>
				
				
				<?php }
					wp_reset_postdata();
				?>
				</div>
			</div>
		</div>
	</div>
	<!---------5th section end----------->
	<!---------6th section----------->
	<div class="section sixthsection text-center ">
		<div class="overlay">
			<div class="container text-center">
				<h2 class="pt-5">فريق العمل</h2>
				<p class="mt-3">النجاح لا يكتمل الا بفريق عمل مثالي</p>
				<div class="separator mt-4 "></div>
				<div class="row pt-5 pb-5">
					<?php
						$args = array(
							'post_type' => 'team',
							'posts_per_page' => 5
						);

						$team = new WP_Query($args);

						while ($team->have_posts()) {
							$team->the_post(); ?>


						<div class=" col-lg">
							<img class="img-fluid" src="<?php echo get_field('team_member_avatar')['url']; ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<p><?php the_field('job_title'); ?></p>
						</div>
					
					<?php
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</div>
	<!---------6th section end----------->
	<!---------7th section----------->
	<div class="section sevensection text-center ">
		<div class="overlay">
			<h2 class="pt-5">قالوا عنا</h2>
			<div class="separator mt-4 "></div>
			<div class="container text-center">
				<div class="row mt-5 mb-5">
					<div class="col-lg-6 ImgSec">
						<img class="mr-lg-5 rounded-circle" src="<?php echo get_template_directory_uri() . '/assets/img/paltel.png' ?>" alt="">
					</div>
					<div class="col-lg-6 align-self-center">
						<div class="card">
							<div class="card-body">
								<img class="img-card" src="<?php echo get_template_directory_uri() . '/assets/img/s5.png' ?>" alt="">
								<p class="card-text mb-5">الشركة العالمية للتطوير و التدريب ،، شركة متميزة بتخصصها فى مجال
									التثقيف و التوعية الطبية و ادارة الازمات و الطوارئء و الاخلاء الآمن .. كما تتميز بوجود مجموعة
									من المدربين الاكفاء بالاضافة الى وجود إدارة حكيمة و حديثة بقيادة المجتهد و المتألق تامرعصام
									حمدان .. خالص تمنياتى لكم بمزيد من التفوق و النجاح</p>
								<h2 class="pl-5">مازن سرور</h2>
								<h2>شركة الاتصالات الفلسطينية</h2>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!---------7th section end----------->

	<!-----foooter start----------->
	<div id="contact" class="section footer">
		<div class="container">
			<div class="clearfix">
				<div class="float-right">
					<span>حقوق النشر محفوظة لشركة العالمية © DESIGN BY ARTLINE COMPANY </span>
				</div>
				<div class="float-left">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="btn btn-link text-white" href="">00972594392924</a>
							&nbsp; &nbsp;
							<a class="pl-lg-3" href=""><i class="fab fa-tumblr"></i></a>
							<a class="pl-lg-3" href=""><i class="fab fa-vimeo-v"></i></a>
							<a class="pl-lg-3" href=""><i class="fab fa-skype"></i></a>
							<a class="pl-lg-3" href=""><i class="fab fa-linkedin-in"></i></a>
							<a class="pl-lg-3" href=""><i class="fab fa-google-plus-g"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script src="assets/js/jquery3.3.1.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/main.js"></script>
	<?php wp_footer(); ?>
</body>

</html>

</body>

</html>