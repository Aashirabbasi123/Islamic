@extends('main-website.components.master')

@section('content')

@include('main-website.components.hader_nav')
<x-app-layout></x-app-layout>
<div class="page-wrapper">
		
		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><span class="icon flaticon-close-1"></span></div>
			
			<nav class="menu-box">
				<div class="nav-logo"><a href="index.html"><img src="assets/images/logo.svg" alt="" title=""></a></div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
			</nav>
		</div>
		<!-- End Mobile Menu -->
	
	</header>
	<!-- End Main Header -->
	
	<!-- Page Title -->
    <section class="page-title" style="background-image:url(assets/images/background/page-title.jpg)">
        <div class="auto-container">
			<h2>Our Courses</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="index.html">Home</a></li>
				<li>Our Courses</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->

	<!-- Courses Two -->
	<section class="courses-two" style="background-image:url(assets/images/background/courses-two_bg.png)">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="0ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="course-detail.html"><img src="assets/images/resource/course-5.jpg" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="assets/images/icons/course-block_two.png" alt="" />
							</div>
							<a href="course-detail.html" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="course-detail.html">Quran Intermediate Course brother</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="assets/images/resource/author-5.png" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="150ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="course-detail.html"><img src="assets/images/resource/course-6.jpg" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="assets/images/icons/course-block_two.png" alt="" />
							</div>
							<a href="course-detail.html" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="course-detail.html">Online Quran Memorization Course</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="assets/images/resource/author-4.png" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="300ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="course-detail.html"><img src="assets/images/resource/course-7.jpg" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="assets/images/icons/course-block_two.png" alt="" />
							</div>
							<a href="course-detail.html" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="course-detail.html">Tafseer of Surah Al-Fatiha Short Course </a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="assets/images/resource/author-2.png" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="course-detail.html"><img src="assets/images/resource/course-8.jpg" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="assets/images/icons/course-block_two.png" alt="" />
							</div>
							<a href="course-detail.html" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="course-detail.html">Online Tajweed Rules Course</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="assets/images/resource/author-3.png" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="course-detail.html"><img src="assets/images/resource/course-9.jpg" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="assets/images/icons/course-block_two.png" alt="" />
							</div>
							<a href="course-detail.html" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="course-detail.html">Online Quran ijazah Course</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="assets/images/resource/author-5.png" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Course Block Two -->
				<div class="course-block_two col-lg-4 col-md-6 col-sm-12">
					<div class="course-block_two-inner wow fadeInLeft"  data-wow-delay="450ms" data-wow-duration="1000ms">
						<div class="course-block_two-image">
							<a href="course-detail.html"><img src="assets/images/resource/course-10.jpg" alt="" /></a>
						</div>
						<div class="course-block_two-content">
							<div class="course-block_two-icon">
								<img src="assets/images/icons/course-block_two.png" alt="" />
							</div>
							<a href="course-detail.html" class="course-block_two-study">Study Now</a>
							<h4 class="course-block_two-heading"><a href="course-detail.html">Islamic Philosophy and Quranic Studies</a></h4>
							<ul class="course-block_two-list d-flex justify-content-between flex-wrap align-items-center">
								<li><span>20</span>lessons</li>
								<li><span>10</span>weeks</li>
								<li><span>50</span>enroll</li>
							</ul>
							<div class="course-block_two-lower d-flex justify-content-between flex-wrap">
								<div class="course-block_two-author">
									<div class="course-block_two-author_image"><img src="assets/images/resource/author-4.png" alt="" /></div>
									<strong>Habib Al Noor</strong>
									Arabic Teacher
								</div>
								<div class="course-block_two-price">$22.00 <span>course free</span></div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<!-- End Courses Two -->

	<!-- Footer Style -->
	<footer class="main-footer style-two">
		<div class="footer_bg-image" style="background-image: url(assets/images/background/footer-bg.jpg)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<!-- Widgets Section -->
				<div class="widgets-section">
					<div class="row clearfix">
						
						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.svg" alt="" title=""></a></div>
										<!-- Footer List -->
										<div class="footer_list">
											<li>58 Howard Street #2 cairo. <br> CA 941</li>
											<li>(+88)311-2121101</li>
										</div>
										<!-- Social Box -->
										<div class="footer_socials">
											<a href="https://facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
											<a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>
											<a href="https://youtube.com/"><i class="fa-brands fa-youtube"></i></a>
											<a href="https://instagram.com/"><i class="fa-brands fa-instagram"></i></a>
										</div>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h4 class="footer-title">Links</h4>
										<ul class="footer-list">
											<li><a href="#">About us</a></li>
											<li><a href="#">Scholars</a></li>
											<li><a href="#">Courses</a></li>
											<li><a href="#">Latest News</a></li>
											<li><a href="#">Contact</a></li>
										</ul>
									</div>
								</div>

							</div>
						</div>

						<!-- Big Column -->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h4 class="footer-title">Other Link</h4>
										<ul class="footer-list">
											<li><a href="#">Online Courses</a></li>
											<li><a href="#">Audio Listening</a></li>
											<li><a href="#">Sehri & Iftar</a></li>
											<li><a href="#">Our Events</a></li>
											<li><a href="#">Quran Hifz Classes</a></li>
										</ul>
									</div>
								</div>

								<!-- Footer Column -->
								<div class="footer-column col-lg-6 col-md-6 col-sm-12">
									<div class="footer-widget newsletter-widget">
										<h4 class="footer-title">newsletter</h4>
										<div class="footer-text">Waiting for your message is not your important time</div>
										<div class="newsletter-box">
											<form method="post" action="contact.html">
												<div class="form-group">
													<input type="email" name="search-field" value="" placeholder="email address" required>
													<button type="submit" class="theme-btn fa-regular fa-paper-plane fa-fw"></button>
												</div>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer_bottom-bg" style="background-image: url(assets/images/background/footer-bg_2.jpg)"></div>
			<div class="auto-container">
				<div class="d-flex justify-content-between align-items-center flex-wrap">
					<div class="copyright">All rights reserved 2023 &copy; template_mr</div>
					<ul class="footer-nav">
						<li><a href="#">Terms of use</a></li>
						<li><a href="#">Privacy Policy</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- End Footer Style -->

	<!-- Search Popup -->
	<div class="search-popup">
		<div class="color-layer"></div>
		<button class="close-search"><span class="flaticon-close-1"></span></button>
		<form method="post" action="blog.html">
			<div class="form-group">
				<input type="search" name="search-field" value="" placeholder="Search Here" required="">
				<button class="fa fa-solid fa-magnifying-glass fa-fw" type="submit"></button>
			</div>
		</form>
	</div>
	<!-- End Search Popup -->
	
</div>
<!-- End PageWrapper -->

<div class="progress-wrap">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
	</svg>
</div>
@endsection