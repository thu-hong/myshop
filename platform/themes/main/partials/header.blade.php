<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport"/>

        {!! Theme::header() !!}
    </head>
	<body class="size-1140" @if (class_exists('Language', false) && Language::getCurrentLocaleRTL()) dir="rtl" @endif>
		<!-- HIDDEN PRODUCTS MENU START -->
		<nav id="main-nav">
			<ul>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Facial Wash</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Exflotiate Scrub</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Natural Skin Care</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Facial Toner</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Moisturizing Cream</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Anti Wrinkle Cream</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Sun Protection</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Hand Cream</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Hair Removing Cream</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Foot Cream</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Under Arm Protection</span></a></li>
				<li><a href="products.html" class="hvr-sweep-to-bottom"><span>Slimming Cream</span></a></li>
			</ul>
			<a href="#0" class="hidden-menu-close">Close<span></span></a>
		</nav>

		<div id="page-main-content">
			<!-- HEADER START -->
			<header> 
				<!-- top bar start -->
				<div id="topbar-primary" class="background-primary">
					<div class="line">
						<!-- social icons -->
						<div class="s-12 m-12 l-6">
							<ul>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
							<li class="hide-s"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						<!-- contact details -->
						<div class="l-6 hide-s hide-m">
							<div class="right">
								<ul class="topbar-menu">
									<li><a href="#">info@website.com</a></li>
									<li><a href="#">+971 123 456 789</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- top bar end -->
				
				<!-- navigation and logo -->
				<nav class="background-dark">
					<div class="line">
						<!-- logo -->
						<div class="s-12 l-3">
							<div class="fullwidth">
								<a href="index.html" class="logo"><img src="{{ Theme::asset()->url('img/logo.png') }}" alt=""></a>
							</div>
						</div>
						
						<!-- navigation -->
						<div class="top-nav s-12 m-12 l-9">
							<a class="nav-text"></a>
							<ul class="right chevron">
								<li><a class="hvr-sweep-to-bottom">Home</a>
									<ul>
										<li><a href="index.html" class="hvr-sweep-to-bottom">Home Page 1</a></li>
										<li><a href="index-2.html" class="hvr-sweep-to-bottom">Home Page 2</a></li>
									</ul>
								</li>
								<li><a class="hidden-menu-trigger hvr-sweep-to-bottom" href="#main-nav">Products</a></li>
								<li><a class="hvr-sweep-to-bottom">Design One</a>
									<ul>
										<li><a href="about-us.html" class="hvr-sweep-to-bottom">About Us</a></li>
										<li><a href="contact-us.html" class="hvr-sweep-to-bottom">Contact Us</a></li>
										<li><a href="products.html" class="hvr-sweep-to-bottom">Products Grid</a></li>
										<li><a href="product.html" class="hvr-sweep-to-bottom">Product Page</a></li>
										<li><a href="cart.html" class="hvr-sweep-to-bottom">Cart</a></li>
										<li><a href="blog.html" class="hvr-sweep-to-bottom">Blog</a></li>
										<li><a href="blog-post.html" class="hvr-sweep-to-bottom">Blog Post</a></li>
										<li><a href="page-not-found.html" class="hvr-sweep-to-bottom">Page Not Found</a></li>
									</ul>
								</li>
								<li><a class="hvr-sweep-to-bottom">Design Two</a>
									<ul>
										<li><a href="about-us-2.html" class="hvr-sweep-to-bottom">About Us</a></li>
										<li><a href="contact-us-2.html" class="hvr-sweep-to-bottom">Contact Us</a></li>
										<li><a href="products-2.html" class="hvr-sweep-to-bottom">Products Grid</a></li>
										<li><a href="product-2.html" class="hvr-sweep-to-bottom">Product Page</a></li>
										<li><a href="cart-2.html" class="hvr-sweep-to-bottom">Cart</a></li>
										<li><a href="blog-2.html" class="hvr-sweep-to-bottom">Blog</a></li>
										<li><a href="blog-post-2.html" class="hvr-sweep-to-bottom">Blog Post</a></li>
										<li><a href="page-not-found-2.html" class="hvr-sweep-to-bottom">Page Not Found</a></li>
									</ul>
								</li>
								<li><a class="hvr-sweep-to-bottom" href="../light/index.html">Light Version</a></li>
							</ul>
						</div>
						
					</div>
				</nav>
			</header>
			<!-- HEADER END -->