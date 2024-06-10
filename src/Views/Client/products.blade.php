<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Ansonika">
	<title>Allaia | Bootstrap eCommerce Template - ThemeForest</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114"
		href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144"
		href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="{{asset('assets/client/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/client/css/style.css')}}" rel="stylesheet">

	<!-- SPECIFIC CSS -->
	<link href="{{asset('assets/client/css/listing.css')}}" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="{{asset('assets/client/css/custom.css')}}" rel="stylesheet">

</head>

<body>

	<div id="page">

		<header class="version_1">
			<div class="layer"></div><!-- Mobile menu overlay mask -->
			<div class="main_header">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 d-lg-flex align-items-center">
							<div id="logo">
								<a href="{{ url() }}"><img src="{{asset('assets/img/logo.svg')}}" alt="" width="100"
										height="35"></a>
							</div>
						</div>
						<nav class="col-xl-6 col-lg-7">
							<a class="open_close" href="javascript:void(0);">
								<div class="hamburger hamburger--spin">
									<div class="hamburger-box">
										<div class="hamburger-inner"></div>
									</div>
								</div>
							</a>
							<!-- Mobile menu button -->
							<div class="main-menu">
								<div id="header_menu">
									<a href="{{ url() }}"><img src="img/logo_black.svg" alt="" width="100"
											height="35"></a>
									<a href="#" class="open_close" id="close_in"><i class="ti-close"></i></a>
								</div>
								<ul>
									<li class="">
										<a href="{{url()}}" class="">Home</a>
									</li>
									<li class="">
										<a href="{{url('products')}}" class="">Products</a>
										<!-- /menu-wrapper -->
									</li>
									@if (isset($_SESSION['user']))
										<li class="">
											<a href="{{ url('/logout') }}" class="">Logout</a>
										</li>
									@else
										<li class="">
											<a href="{{ url('/login') }}" class="">Login</a>
										</li>
									@endif
								</ul>
							</div>
							<!--/main-menu -->
						</nav>
						<div class="col-xl-3 col-lg-2 d-lg-flex align-items-center justify-content-end text-end">
							<a class="phone_top" href="tel://9438843343"><strong><span>Need Help?</span>+94
									423-23-221</strong></a>
						</div>
					</div>
					<!-- /row -->
				</div>
			</div>
			<!-- /main_header -->

			<div class="main_nav Sticky">
				<div class="container">
					<div class="row small-gutters">
						<div class="col-xl-3 col-lg-3 col-md-3">
							<nav class="categories">
								
							</nav>
						</div>
						<div class="col-xl-6 col-lg-7 col-md-6 d-none d-md-block">
							<div class="custom-search-input">
								<input type="text" placeholder="Search over 10.000 products">
								<button type="submit"><i class="header-icon_search_custom"></i></button>
							</div>
						</div>
						<div class="col-xl-3 col-lg-2 col-md-3">
							<ul class="top_tools">
								<li>
									<div class="dropdown dropdown-cart">
										<a href="" class="cart_bt"></a>
									</div>
									<!-- /dropdown-cart-->
								</li>
								<li>
									<div class="dropdown dropdown-access">
										<a href="{{url('login')}}" class="access_link"><span>Account</span></a>
									</div>
									<!-- /dropdown-access-->
								</li>


							</ul>
						</div>
					</div>
					<!-- /row -->
				</div>
				<div class="search_mob_wp">
					<input type="text" class="form-control" placeholder="Search over 10.000 products">
					<input type="submit" class="btn_1 full-width" value="Search">
				</div>
				<!-- /search_mobile -->
			</div>
			<!-- /main_nav -->
		</header>
		<!-- /header -->

		<main>

			<div class="container margin_30">
				<div class="top_banner version_2">
					<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0)">
						<div class="container">
							<div class="d-flex justify-content-center">
								<h1>Tất cả sản phẩm</h1>
							</div>
						</div>
					</div>
					<img src="{{asset('assets/img/bg_cat_shoes.jpg')}}" class="img-fluid" alt="">
				</div>
				<!-- /top_banner -->
				<div id="stick_here"></div>
				<div class="toolbox elemento_stick version_2">
					<div class="container">
						<div class="collapse" id="filters">
							<div class="row small-gutters filters_listing_1">
								<div class="col-lg-3 col-md-6 col-sm-6">
									<!-- /dropdown -->
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /toolbox -->
				<div class="container margin_30">
					<div class="row">
						<!-- /col -->
						<div class="col-lg-9">
							@foreach ($products as $values)
								<div class="row row_item">
									<div class="col-sm-4">
										<figure>
											<a href="{{url('products/' . $values['id']) }}">
												<img class="img-fluid lazy" src="{{asset($values['img_thumbnail'])}}"
													alt="">
											</a>
										</figure>
									</div>
									<div class="col-sm-8">
										<a href="{{url('products/' . $values['id']) }}">
											<h3>{{$values['name']}}</h3>
										</a>
										<p>{{ $values['overview'] }}</p>
										<div class="price_box">
											@if (isset($values['price_regular']))
												@if (isset($values['price_sale']) && $values['price_sale'] < $values['price_regular'])
													<span
														class="new_price">{{ number_format($values['price_sale'], 0, '', '.') }}đ</span>
													<span
														class="old_price">{{ number_format($values['price_regular'], 0, '', '.') }}đ</span>
												@else
													<span
														class="new_price">{{ number_format($values['price_regular'], 0, '', '.') }}đ</span>
												@endif
											@endif
										</div>
										<ul>
											<li><a href="{{url('products/' . $values['id']) }}" class="btn_1">Details</a>
											</li>
										</ul>
									</div>
								</div>
							@endforeach
							<!-- /row_item -->
							<div class="pagination__wrapper">
								<ul class="pagination">

									@for ($i = 1; $i <= $totalPage; $i++)
										<li class="page-item{{ $currentPage == $i ? ' active' : '' }}">
											<a class="page-link" href="{{ url('products?page=' . $i) }}">{{ $i }}</a>
										</li>
									@endfor

								</ul>
							</div>
						</div>
						<!-- /col -->
					</div>
					<!-- /row -->
				</div>
				<!-- /row -->

			</div>
			<!-- /container -->
		</main>
		<!-- /main -->

		<footer class="revealed">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_1">Quick Links</h3>
						<div class="collapse dont-collapse-sm links" id="collapse_1">
							<ul>
								<li><a href="about.html">About us</a></li>
								<li><a href="help.html">Faq</a></li>
								<li><a href="help.html">Help</a></li>
								<li><a href="account.html">My account</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="contacts.html">Contacts</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_2">Categories</h3>
						<div class="collapse dont-collapse-sm links" id="collapse_2">
							<ul>
								<li><a href="listing-grid-1-full.html">Clothes</a></li>
								<li><a href="listing-grid-2-full.html">Electronics</a></li>
								<li><a href="listing-grid-1-full.html">Furniture</a></li>
								<li><a href="listing-grid-3.html">Glasses</a></li>
								<li><a href="listing-grid-1-full.html">Shoes</a></li>
								<li><a href="listing-grid-1-full.html">Watches</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_3">Contacts</h3>
						<div class="collapse dont-collapse-sm contacts" id="collapse_3">
							<ul>
								<li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
								<li><i class="ti-headphone-alt"></i>+94 423-23-221</li>
								<li><i class="ti-email"></i><a href="#0">info@allaia.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<h3 data-bs-target="#collapse_4">Keep in touch</h3>
						<div class="collapse dont-collapse-sm" id="collapse_4">
							<div id="newsletter">
								<div class="form-group">
									<input type="email" name="email_newsletter" id="email_newsletter"
										class="form-control" placeholder="Your email">
									<button type="submit" id="submit-newsletter"><i
											class="ti-angle-double-right"></i></button>
								</div>
							</div>
							<div class="follow_us">
								<h5>Follow Us</h5>
								<ul>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="img/twitter_icon.svg" alt="" class="lazy"></a></li>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="img/facebook_icon.svg" alt="" class="lazy"></a></li>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="img/instagram_icon.svg" alt="" class="lazy"></a></li>
									<li><a href="#0"><img
												src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
												data-src="img/youtube_icon.svg" alt="" class="lazy"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- /row-->
				<hr>
				<div class="row add_bottom_25">
					<div class="col-lg-6 m-auto justify-between">
						<ul class="additional_links">
							<li><a href="#0">Terms and conditions</a></li>
							<li><a href="#0">Privacy</a></li>
							<li><span>© 2022 Allaia</span></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!--/footer-->
	</div>
	<!-- page -->

	<div id="toTop"></div><!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="{{asset('assets/client/js/common_scripts.min.js')}}"></script>
	<script src="{{asset('assets/client/js/main.js')}}"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="{{asset('assets/client/js/sticky_sidebar.min.js')}}"></script>
	<script src="{{asset('assets/client/js/specific_listing.js')}}"></script>

</body>

</html>