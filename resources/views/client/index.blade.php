@extends('client.layouts.master')

@section('content')
<!-- Cart Sidebar Start -->
<!-- Cart Offcanvas Start -->
<div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title">My Cart</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="remove">
			<i class="lastudioicon-e-remove"></i>
		</button>
	</div>
	<div class="offcanvas-body">
		<ul class="offcanvas-cart-list">
			<li>
				<!-- Offcanvas Cart Item Start -->
				<div class="offcanvas-cart-item">
					<div class="offcanvas-cart-item__thumbnail">
						<a href="#">
							<img src="assets/images/products/product-02.jpg" width="70" height="84" alt="product" />
						</a>
					</div>
					<div class="offcanvas-cart-item__content">
						<h4 class="offcanvas-cart-item__title">
							<a href="#">Princess set</a>
						</h4>
						<span class="offcanvas-cart-item__quantity">
							1 × $69.99
						</span>
					</div>
					<a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
						<i class="lastudioicon-e-remove"></i>
					</a>
				</div>
				<!-- Offcanvas Cart Item End -->
			</li>
			<li>
				<!-- Offcanvas Cart Item Start -->
				<div class="offcanvas-cart-item">
					<div class="offcanvas-cart-item__thumbnail">
						<a href="#">
							<img src="assets/images/products/product-04.jpg" width="70" height="84" alt="product" />
						</a>
					</div>
					<div class="offcanvas-cart-item__content">
						<h4 class="offcanvas-cart-item__title">
							<a href="#">Senecio stapeliiformis </a>
						</h4>
						<span class="offcanvas-cart-item__quantity">
							1 × $89.99
						</span>
					</div>
					<a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
						<i class="lastudioicon-e-remove"></i>
					</a>
				</div>
				<!-- Offcanvas Cart Item End -->
			</li>
			<li>
				<!-- Offcanvas Cart Item Start -->
				<div class="offcanvas-cart-item">
					<div class="offcanvas-cart-item__thumbnail">
						<a href="#">
							<img src="assets/images/products/product-05.jpg" width="70" height="84" alt="product" />
						</a>
					</div>
					<div class="offcanvas-cart-item__content">
						<h4 class="offcanvas-cart-item__title">
							<a href="#">Hoya burtoniae </a>
						</h4>
						<span class="offcanvas-cart-item__quantity">
							1 × $35.99
						</span>
					</div>
					<a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
						<i class="lastudioicon-e-remove"></i>
					</a>
				</div>
				<!-- Offcanvas Cart Item End -->
			</li>
		</ul>
	</div>
	<div class="offcanvas-footer">
		<!-- Free Shipping Goal Start-->
		<div class="free-shipping-goal">
			<div class="free-shipping-goal__label text-center">
				Buy $3.03 more to enjoy
				<strong>FREE Shipping</strong>
			</div>
			<div class="free-shipping-goal__loading-bar">
				<div class="load-percent" style="width: 98.49%"></div>
			</div>
		</div>
		<!-- Free Shipping Goal End-->

		<!-- Cart Meta Start-->
		<ul class="cart-meta">
			<li>
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
						<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
							<path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>
						</g>
					</svg>
					<span>Note</span>
				</a>
			</li>
			<li>
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">
						<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
							<path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>
							<path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>
						</g>
					</svg>
					<span>Shipping</span>
				</a>
			</li>
			<li>
				<a href="#">
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
						<g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
							<path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z">
							</path>
						</g>
					</svg>
					<span>Coupon</span>
				</a>
			</li>
		</ul>
		<!-- Cart Meta End-->

		<!-- Cart Totals Table Start-->
		<div class="cart-totals-table">
			<table class="table">
				<tbody>
					<tr class="cart-subtotal">
						<th>Subtotal</th>
						<td>
							<span>$195.97</span>
						</td>
					</tr>

					<tr class="cart-shipping-totals">
						<th>Shipping</th>
						<td>
							<ul class="shipping-methods">
								<li class="single-form">
									<input type="radio" name="shipping" id="flat-rate" />
									<label for="flat-rate" class="single-form__label radio-label">
										<span></span>
										Flat rate:
										<strong class="price">$20.00</strong>
									</label>
								</li>
								<li class="single-form">
									<input type="radio" name="shipping" id="local-pickup" />
									<label for="local-pickup" class="single-form__label radio-label">
										<span></span>
										Local pickup
									</label>
								</li>
							</ul>
						</td>
					</tr>

					<tr class="order-total">
						<th>Total</th>
						<td data-title="Total">
							<strong><span>$215.97</span></strong>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- Cart Totals Table End-->

		<!-- Cart Buttons End-->
		<div class="cart-buttons">
			<a href="#" class="cart-buttons__btn-1 btn">Checkout</a>
			<a href="#" class="cart-buttons__btn-2 btn">View Cart</a>
		</div>
		<!-- Cart Buttons End-->
	</div>
</div>
<!-- Cart Offcanvas End -->

<!-- Cart Sidebar End -->

<!-- Search Start -->
<div class="search-modal modal fade" id="SearchModal">
	<!-- Search Close Start -->
	<button class="search-modal__close" data-bs-dismiss="modal" aria-label="remove">
		<i class="lastudioicon-e-remove"></i>
	</button>
	<!-- Search Close End  -->

	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Search Form Start  -->
			<div class="search-modal__form">
				<form action="#">
					<input type="text" placeholder="Search product…" />
					<button class="" aria-label="search">
						<i class="lastudioicon-zoom-1"></i>
					</button>
				</form>
			</div>
			<!-- Search Form End  -->
		</div>
	</div>
</div>

<!-- Search End -->

<!-- Offcanvas Menu Start -->
<div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
	<button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas" aria-label="remove">
		<i class="lastudioicon-e-remove"></i>
	</button>
	<div class="offcanvas-body">
		<!-- Off Canvas Sidebar Menu Start -->
		<div class="offcanvas-sidebar__menu">
			<ul class="offcanvas-menu-list">
				<li><a href="about.html">About Us</a></li>
				<li><a href="#">Careers</a></li>
				<li><a href="blog.html">News & Events</a></li>
				<li><a href="faqs.html">FAQs</a></li>
				<li><a href="contact-us.html">Contact Us</a></li>
			</ul>
		</div>
		<!-- Off Canvas Sidebar Menu End -->

		<!-- Off Canvas Sidebar Banner Start -->
		<div class="offcanvas-sidebar__banner" style="
                background-image: url(assets/images/shop-sidebar-banner.jpg);
            ">
			<h3 class="banner-title">NEW NOW</h3>
			<h4 class="banner-sub-title">WARM WOOL PREMIUM COAT</h4>
			<a href="#" class="banner-btn">Discover</a>
		</div>
		<!-- Off Canvas Sidebar Banner End -->

		<!-- Off Canvas Sidebar Info Start -->
		<div class="offcanvas-sidebar__info">
			<ul class="offcanvas-info-list">
				<li><a href="tel:+61225315600">(+612) 2531 5600</a></li>
				<li><a href="mailto:info@exmple.com">info@exmple.com</a></li>
				<li>
					<span>
						PO Box 1622 Colins Street West Victoria 8077 Australia
					</span>
				</li>
			</ul>
		</div>
		<!-- Off Canvas Sidebar Info End -->

		<!-- Off Canvas Sidebar Social Start -->
		<div class="offcanvas-sidebar__social">
			<ul class="offcanvas-social">
				<li>
					<a href="#" aria-label="facebook">
						<i class="lastudioicon-b-facebook"></i>
					</a>
				</li>
				<li>
					<a href="#" aria-label="twitter">
						<i class="lastudioicon-b-twitter"></i>
					</a>
				</li>
				<li>
					<a href="#" aria-label="instagram">
						<i class="lastudioicon-b-instagram"></i>
					</a>
				</li>
			</ul>
		</div>
		<!-- Off Canvas Sidebar Social End -->

		<!-- Off Canvas Sidebar Social End -->
		<div class="offcanvas-sidebar__copyright">
			<p>
				&copy;
				<span class="current-year">2023</span>
				<span> Lumin </span> Made with by
				<a href="https://hasthemes.com/">HasThemes</a>
			</p>
		</div>
		<!-- Off Canvas Sidebar Social End -->
	</div>
</div>

<!-- Offcanvas Menu End -->

<!-- Mobile Menu Start -->
<div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
	<!-- offcanvas-header Start -->
	<div class="offcanvas-header">
		<button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
			<i class="lastudioicon-e-remove"></i>
		</button>
	</div>
	<!-- offcanvas-header End -->

	<!-- offcanvas-body Start -->
	<div class="offcanvas-body">
		<nav class="navbar-mobile-menu">
			<ul class="mobile-menu-items">
				<li>
					<a class="active" href="index.html"> Home </a>
				</li>
				<li>
					<a href="#">
						Pages
						<span class="menu-expand" aria-label="down-arrow">
							<i class="lastudioicon-down-arrow"></i>
						</span>
					</a>
					<ul class="sub-menu">
						<li><a href="about.html">About us</a></li>
						<li><a href="coming-soon.html">Coming Soon</a></li>
						<li><a href="our-team.html">Our Team</a></li>
						<li><a href="contact-us.html">Contact Us</a></li>
						<li><a href="faqs.html">FAQ's</a></li>
						<li><a href="term-of-use.html">term of use</a></li>
						<li><a href="404.html">404 Page</a></li>
						<li>
							<a href="login-register.html">Login & Register</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">
						Shop
						<span class="menu-expand" aria-label="down-arrow">
							<i class="lastudioicon-down-arrow"></i>
						</span>
					</a>
					<div class="mega-menu">
						<div class="mega-menu-col">
							<h5 class="mega-menu-title">Shop Layout</h5>
							<ul class="">
								<li>
									<a href="shop-fullwidth.html">
										Shop Fullwidth
									</a>
								</li>
								<li>
									<a href="shop-sidebar.html">Shop Sidebar</a>
								</li>
								<li>
									<a href="shop-masonry.html">Shop Masonry</a>
								</li>
								<li>
									<a href="shop-3-columns.html">
										Shop 03 Columns
									</a>
								</li>
								<li>
									<a href="shop-4-columns.html">
										Shop 04 Columns
									</a>
								</li>
							</ul>
						</div>
						<div class="mega-menu-col">
							<ul class="">
								<li><a href="#">Featured Banner</a></li>
								<li class="mega-menu-title">Hover Style</li>
								<li><a href="#">Hover Style 01</a></li>
							</ul>
						</div>
						<div class="mega-menu-col">
							<h5 class="mega-menu-title">Shop Pages</h5>
							<ul class="">
								<li>
									<a href="my-account.html">My Account</a>
								</li>
								<li><a href="cart.html">Cart</a></li>
								<li>
									<a href="order-tracking.html">
										Order Tracking
									</a>
								</li>
								<li><a href="wishlist.html">Wishlist</a></li>
								<li><a href="compare.html">Compare</a></li>
								<li>
									<a href="empty-cart.html">Cart Empty</a>
								</li>
								<li><a href="checkout.html">Checkout</a></li>
								<li><a href="thank-you.html">Thank You</a></li>
							</ul>
						</div>
						<div class="mega-menu-col">
							<h5 class="mega-menu-title">Product Pages</h5>
							<ul class="">
								<li>
									<a href="product-single.html">
										Product Simple
									</a>
								</li>
								<li>
									<a href="product-single-variable.html">
										Product Variable
									</a>
								</li>
								<li>
									<a href="product-single-carousel.html">
										Product Carousel
									</a>
								</li>
								<li>
									<a href="product-single-affiliate.html">
										Product Affiliate
									</a>
								</li>
								<li>
									<a href="product-single-countdown.html">
										Product CountDown
									</a>
								</li>
							</ul>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						Collections
						<span class="menu-expand" aria-label="down-arrow">
							<i class="lastudioicon-down-arrow"></i>
						</span>
					</a>
					<div class="mega-menu">
						<div class="mega-menu__banner">
							<a href="#">
								<div class="mega-menu__banner--image">
									<img src="assets/images/megamenu.jpg" alt="Fashion Banner" width="269" height="271" />
								</div>
								<div class="mega-menu__banner--caption">
									<h4 class="caption-title">New Arrival</h4>
									<p class="caption-desc">
										Non curabitur gravida
									</p>
								</div>
							</a>
						</div>
						<div class="mega-menu__content">
							<h4 class="mega-menu__content--title">
								Summer Collection 2023
							</h4>
							<div class="d-flex flex-wrap">
								<ul class="mega-menu__content--list">
									<li>
										<a href="#">Dresses and jumpsuits</a>
									</li>
									<li><a href="#">Shirts</a></li>
									<li><a href="#">T-shirts and tops</a></li>
									<li>
										<a href="#">Jackets and Suit Jackets</a>
									</li>
									<li>
										<a href="#">Cardigans and sweaters</a>
									</li>
									<li><a href="#">Sweatshirts</a></li>
									<li><a href="#">Coats</a></li>
								</ul>
								<ul class="mega-menu__content--list">
									<li><a href="#">Trousers</a></li>
									<li><a href="#">Jeans</a></li>
									<li><a href="#">Skirts</a></li>
									<li><a href="#">Shorts</a></li>
									<li>
										<a href="#">Bikinis and swimsuits</a>
									</li>
									<li><a href="#">Sportswear</a></li>
									<li>
										<a href="#">Underwear and lingerie</a>
									</li>
									<li><a href="#">Pyjamas</a></li>
								</ul>
							</div>
							<div class="mt-auto">
								<ul class="mega-menu__info">
									<li><a href="#">info@exmple.com</a></li>
									<li><a href="#">(626)997-4298</a></li>
								</ul>
								<div class="mega-menu__social">
									<div class="mega-menu__social--lable">
										Connect with us
									</div>
									<ul class="mega-menu__social--social">
										<li>
											<a href="#" aria-label="facebook">
												<i class="lastudioicon-b-facebook"></i>
											</a>
										</li>
										<li>
											<a href="#" aria-label="twitter">
												<i class="lastudioicon-b-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#" aria-label="instagram">
												<i class="lastudioicon-b-instagram"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
				<li>
					<a href="#">
						Blog
						<span class="menu-expand" aria-label="down-arrow">
							<i class="lastudioicon-down-arrow"></i>
						</span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="blog-right-sidebar.html">
								Blog Right Sidebar
							</a>
						</li>
						<li>
							<a href="blog-left-sidebar.html">
								Blog Left Sidebar
							</a>
						</li>
						<li><a href="blog.html">Blog No Sidebar</a></li>
						<li><a href="blog-single.html">Single Post</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
	<!-- offcanvas-body end -->
</div>

<!-- Mobile Menu End -->

<!-- Mobile Meta Start -->
<div class="mobile-meta d-md-none">
	<ul class="mobile-meta-items">
		<li>
			<button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="search">
				<i class="lastudioicon-zoom-1"></i>
			</button>
		</li>
		<li>
			<a href="wishlist.html" aria-label="wishlist">
				<i class="lastudioicon-heart-1"></i>
				<span class="badge">03</span>
			</a>
		</li>
		<li>
			<a href="compare.html" aria-label="compare">
				<i class="lastudioicon-ic_compare_arrows_24px"> </i>
				<span class="badge">03</span>
			</a>
		</li>
		<li>
			<button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="cart">
				<i class="lastudioicon-shopping-cart-1"></i>
				<span class="badge">03</span>
			</button>
		</li>
	</ul>
</div>

<!-- Mobile Meta End -->

<main>
	<!-- Slider Start -->
	<div class="slider-section slider-active navigation-arrows-style-2">
		<div class="container-fluid custom-container">
			<div class="swiper">
				<div class="swiper-wrapper">
					<!-- Slider Item Start -->
					<div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center home-1-slider-animation" style="
                                    background-image: url(assets/images/slider/slider-1.jpg);
                                ">
						<!-- Slider Content Start -->
						<div class="home-1-slider-content-style-1 text-center">
							<h3 class="home-1-slider-content-style-1__sub-title">
								Hello Baby
							</h3>
							<h2 class="home-1-slider-content-style-1__title">
								New arrival
							</h2>

							<ul class="home-1-slider-content-style-1__btns justify-content-center">
								<li class="button-01">
									<a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
										Shop now
									</a>
								</li>
							</ul>
						</div>
						<!-- Slider Content End -->
					</div>
					<!-- Slider Item End -->
					<!-- Slider Item Start -->
					<div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center home-1-slider-animation" style="
                                    background-image: url(assets/images/slider/slider-2.jpg);
                                ">
						<!-- Slider Content Start -->
						<div class="home-1-slider-content-style-1">
							<h3 class="home-1-slider-content-style-1__sub-title">
								Little girl
							</h3>
							<h2 class="home-1-slider-content-style-1__title">
								Summer Dresses
							</h2>

							<ul class="home-1-slider-content-style-1__btns">
								<li class="button-01">
									<a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
										Shop now
									</a>
								</li>
							</ul>
						</div>
						<!-- Slider Content End -->
					</div>
					<!-- Slider Item End -->
					<!-- Slider Item Start -->
					<div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center home-1-slider-animation" style="
                                    background-image: url(assets/images/slider/slider-3.jpg);
                                ">
						<!-- Slider Content Start -->
						<div class="home-1-slider-content-style-1">
							<h3 class="home-1-slider-content-style-1__sub-title">
								Smart Toys
							</h3>
							<h2 class="home-1-slider-content-style-1__title text-white">
								Happy Play
							</h2>

							<ul class="home-1-slider-content-style-1__btns">
								<li class="button-01">
									<a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
										Shop now
									</a>
								</li>
							</ul>
						</div>
						<!-- Slider Content End -->
					</div>
					<!-- Slider Item End -->
				</div>

				<div class="home-1-slider-arrow">
					<div class="swiper-button-prev">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
							<path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
						</svg>
					</div>
					<div class="swiper-button-next">
						<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
							<path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider End -->

	<!-- Banner Start -->
	<div class="banner-section">
		<div class="container-fluid custom-container">
			<div class="row custom-g-2 banner-grid">
				<div class="col-lg-4 col-sm-6 grid-item">
					<!-- Banner Start -->
					<div class="banner-item banner-1 js-scroll ShortFadeInUp">
						<a href="#">
							<div class="banner-item__image">
								<img src="assets/images/banner/banner-1.jpg" alt="Banner" />
							</div>
							<div class="banner-item__content">
								<h3 class="banner-item__title">
									Hi! Girl
								</h3>
								<p class="banner-item__description">
									New clothing
								</p>
								<span class="banner-item__btn">
									Shop now
								</span>
							</div>
						</a>
					</div>
					<!-- Banner End -->
				</div>
				<div class="col-lg-4 col-sm-6 grid-item">
					<!-- Banner Start -->
					<div class="banner-item banner-2 js-scroll ShortFadeInUp">
						<a href="#">
							<div class="banner-item__image">
								<img src="assets/images/banner/banner-2.jpg" alt="Banner" width="453" height="266" loading="lazy" />
							</div>
							<div class="banner-item__content text-center">
								<h3 class="banner-item__title">
									New-born
								</h3>
								<p class="banner-item__description">
									Sale 30%
								</p>
								<span class="banner-item__btn">
									Shop now
								</span>
							</div>
						</a>
					</div>
					<!-- Banner End -->
				</div>
				<div class="col-lg-4 col-sm-6 grid-item">
					<!-- Banner Start -->
					<div class="banner-item banner-2 js-scroll ShortFadeInUp">
						<a href="#">
							<div class="banner-item__image">
								<img src="assets/images/banner/banner-3.jpg" alt="Banner" width="453" height="266" loading="lazy" />
							</div>
							<div class="banner-item__content text-center">
								<h3 class="banner-item__title">
									Take a photo
								</h3>
								<p class="banner-item__description">
									Sweet moment
								</p>
								<span class="banner-item__btn">
									Shop now
								</span>
							</div>
						</a>
					</div>
					<!-- Banner End -->
				</div>
				<div class="col-lg-4 col-sm-6 grid-item">
					<!-- Banner Start -->
					<div class="banner-item banner-3 js-scroll ShortFadeInUp">
						<a href="#">
							<div class="banner-item__image">
								<img src="assets/images/banner/banner-4.jpg" alt="Banner" width="453" height="266" loading="lazy" />
							</div>
							<div class="banner-item__content text-center">
								<h3 class="banner-item__title">
									Fresh food
								</h3>
								<p class="banner-item__description">
									For baby
								</p>
								<span class="banner-item__btn">
									Shop now
								</span>
							</div>
						</a>
					</div>
					<!-- Banner End -->
				</div>
				<div class="col-lg-4 col-sm-6 grid-item">
					<!-- Banner Start -->
					<div class="banner-item banner-4 js-scroll ShortFadeInUp">
						<a href="#">
							<div class="banner-item__image">
								<img src="assets/images/banner/banner-5.jpg" alt="Banner" width="453" height="266" loading="lazy" />
							</div>
							<div class="banner-item__content text-center">
								<h3 class="banner-item__title">
									Kute Toys
								</h3>
								<p class="banner-item__description">
									Sale 25%
								</p>
								<span class="banner-item__btn">
									Shop now
								</span>
							</div>
						</a>
					</div>
					<!-- Banner End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Banner End -->

	<!-- Product Clothing Start -->
	<div class="product-section section-padding-1">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="66.922" height="50.381" viewBox="0 0 66.922 50.381">
						<g fill="currentColor">
							<path data-name="Path 6478" d="M13.166 14.918a1.259 1.259 0 0 0-1.258 1.258v23.225c0 6.362 4.259 10.98 10.127 10.98a1.258 1.258 0 1 0 0-2.517c-4.409 0-7.61-3.559-7.61-8.463v-.269a3.357 3.357 0 0 0 .891.133h1.075c4.147 0 8.989 2.018 8.989 7.709a3.411 3.411 0 0 0 3.408 3.407h9.349a3.411 3.411 0 0 0 3.408-3.407c0-5.188 2.94-7.709 8.989-7.709h1.075a3.357 3.357 0 0 0 .891-.133v.269c0 4.9-3.2 8.463-7.61 8.463a1.258 1.258 0 1 0 0 2.517c5.5 0 9.587-4.059 10.077-9.808q.049-.575.049-1.172V16.176a1.258 1.258 0 1 0-2.516 0v19.682a.891.891 0 0 1-.891.89h-1.076c-7.42 0-11.506 3.632-11.506 10.226a.891.891 0 0 1-.891.89h-9.349a.891.891 0 0 1-.891-.89c0-7.064-5.779-10.226-11.506-10.226h-1.074a.891.891 0 0 1-.891-.89V16.176a1.259 1.259 0 0 0-1.258-1.258">
							</path>
							<path data-name="Path 6479" d="m57.372 4.459-.065-.063c-2.669-2.552-4.6-4.4-8.1-4.4H30.393a1.258 1.258 0 0 0 0 2.517h11.019A8.054 8.054 0 0 1 25.4 1.258 1.259 1.259 0 0 0 24.142 0c-.04 0-.077.008-.116.012S23.95 0 23.91 0h-6.2c-3.5 0-5.429 1.844-8.1 4.4l-.066.063-9.173 9.115a1.259 1.259 0 0 0 .085 1.863l7.2 5.955a1.258 1.258 0 0 0 1.6-1.939L3.13 14.378l8.225-8.167c2.575-2.462 3.868-3.7 6.358-3.7h5.019a10.8 10.8 0 0 0 19.489 5.073 1.247 1.247 0 0 0 .232-.793 10.49 10.49 0 0 0 1.5-4.28h5.254c2.491 0 3.783 1.236 6.39 3.728l8.195 8.138-6.13 5.071a1.258 1.258 0 1 0 1.6 1.939l7.2-5.955a1.259 1.259 0 0 0 .085-1.863Z">
							</path>
							<path data-name="Path 6480" d="M31.746 34.627a1.257 1.257 0 0 0 1.607.013l3.153-2.573c.01-.009 1.18-.96 2.4-2.067 2.28-2.07 4.167-4.027 4.167-7.012a6.185 6.185 0 0 0-6.178-6.178 5.854 5.854 0 0 0-4.287 2.508 5.877 5.877 0 0 0-4.382-2.606 6.185 6.185 0 0 0-6.18 6.178c0 3.024 1.724 5.015 6.581 9.108ZM24.561 22.89a3.665 3.665 0 0 1 3.661-3.661c1.152 0 2.484 1.515 3.234 2.923a1.474 1.474 0 0 0 .242.32 1.258 1.258 0 0 0 1.989-.279c.793-1.427 2.092-2.867 3.2-2.867a3.666 3.666 0 0 1 3.661 3.661c0 1.962-1.385 3.372-3.343 5.148-1.142 1.038-2.271 1.959-2.289 1.974l-2.352 1.919-2.318-1.955c-4.827-4.067-5.686-5.418-5.686-7.183">
							</path>
						</g>
					</svg>
				</span>

				<h2 class="section-title__title">Clothing</h2>
			</div>
			<!-- Section Title End -->

			<!-- Product Wrapper Start -->
			<div class="product-wrapper product-active navigation-arrows-style-1">

				<div class="swiper">
					<div class="swiper-wrapper">

						<div class="swiper-slide">
							<!-- Single product Start -->
							@foreach ( $products as $item )
							<div class="single-product js-scroll ShortFadeInUp">
								
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="{{route('client.show', $item->id)}}">
											<img src="assets/images/products/product-06.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Clothing</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											{{$item -> name }}
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>{{$item-> price}}</del>
										<ins>{{$item->price_sale}}</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							
							</div>
							@endforeach
							<!-- Single product End -->
						</div>

					</div>
				</div>



				<div class="swiper-button-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
				<div class="swiper-button-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
			</div>
			<!-- Product Wrapper End -->

			<!-- More Button Start -->
			<!-- <div class="text-center js-scroll ShortFadeInUp">
					<a class="view-more-btn" href="#">View more Clothing</a>
				</div> -->
			<!-- More Button End -->
		</div>
	</div>
	<!-- Product Clothing End -->
	@include('client.components.related-product')
	

	<!-- Product New-born Start -->
	<div class="product-section section-padding-1">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="30.833" height="61.948" viewBox="0 0 30.833 61.948">
						<path d="M7.932 61.948h14.97a7.94 7.94 0 0 0 7.931-7.931V31.662a7.9 7.9 0 0 0-2.271-5.546 4.784 4.784 0 0 0 2.271-4.332v-.521a4.965 4.965 0 0 0-1.846-4.064c-.376-4.357-4.034-8.066-9.281-9.421V4.29a4.29 4.29 0 1 0-8.579 0v3.488c-5.245 1.355-8.9 5.063-9.28 9.42A4.967 4.967 0 0 0 0 21.262v.521a4.785 4.785 0 0 0 2.272 4.333A7.9 7.9 0 0 0 0 31.662v22.355a7.94 7.94 0 0 0 7.932 7.931m20.152-7.931a5.188 5.188 0 0 1-5.182 5.183H7.932a5.189 5.189 0 0 1-5.183-5.183v-2.272h7.987a1.375 1.375 0 0 0 0-2.749H2.749v-4.782h7.987a1.375 1.375 0 0 0 0-2.749H2.749v-4.782h17.349a1.375 1.375 0 0 0 0-2.749H2.749v-2.272a5.189 5.189 0 0 1 5.183-5.182h14.97a5.188 5.188 0 0 1 5.182 5.182ZM12.753 10.229h.012a1.475 1.475 0 0 0 .159-.046c.035-.012.071-.019.1-.033a1.349 1.349 0 0 0 .121-.064c.039-.021.08-.039.116-.063s.057-.046.086-.069a1.341 1.341 0 0 0 .119-.1 1.228 1.228 0 0 0 .079-.095 1.311 1.311 0 0 0 .088-.107 1.276 1.276 0 0 0 .071-.128 1.141 1.141 0 0 0 .056-.1c.018-.04.027-.083.041-.125s.031-.086.04-.131.008-.076.013-.113a1.341 1.341 0 0 0 .016-.16s0-.008 0-.012v-4.59a1.541 1.541 0 1 1 3.081 0v4.603a1.224 1.224 0 0 0 .016.159c0 .038.005.077.013.114s.026.086.04.129.024.087.042.128.037.067.055.1a1.211 1.211 0 0 0 .072.131c.025.038.058.07.086.1s.051.067.081.1a1.508 1.508 0 0 0 .117.1c.03.023.056.05.087.07s.077.042.115.063a1.364 1.364 0 0 0 .122.064c.033.014.069.021.1.032a1.369 1.369 0 0 0 .16.047h.011c4.208.784 7.307 3.294 8.034 6.336h-1.52a1.374 1.374 0 0 0 0 2.748h2.5c.395 0 .991.776.991 1.947v.521c0 1.17-.6 1.947-.991 1.947H3.74c-.395 0-.991-.777-.991-1.947v-.521c0-1.171.6-1.947.991-1.947h14.592a1.374 1.374 0 1 0 0-2.748H4.72c.727-3.042 3.826-5.552 8.033-6.336" fill="currentColor"></path>
					</svg>
				</span>

				<h2 class="section-title__title">New-born</h2>
			</div>
			<!-- Section Title End -->

			<!-- Product Wrapper Start -->
			<div class="product-wrapper product-active navigation-arrows-style-1">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-08.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">New-born</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-01.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">New-born</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-13.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">New-born</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-17.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">New-born</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-07.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">New-born</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
					</div>
				</div>

				<div class="swiper-button-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
				<div class="swiper-button-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
			</div>
			<!-- Product Wrapper End -->

			<!-- More Button Start -->
			<div class="text-center js-scroll ShortFadeInUp">
				<a class="view-more-btn" href="#">View more New-born</a>
			</div>
			<!-- More Button End -->
		</div>
	</div>
	<!-- Product New-born End -->

	<!-- Product Accessories Start -->
	<div class="product-section section-padding-1">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="54.82" height="61.948" viewBox="0 0 54.82 61.948">
						<path d="M1.452 9.855h5.16a3.055 3.055 0 0 1 3.051 3.051v14.983c0 5.516 6.375 10.071 15.424 11.663l-3.148 5.1a8.965 8.965 0 1 0 5.528 9.778h9.547a8.976 8.976 0 1 0 5.528-9.778l-3.148-5.1c9.05-1.592 15.425-6.147 15.425-11.663V21.151A21.174 21.174 0 0 0 33.669.001a1.452 1.452 0 0 0-1.452 1.452v18.3H18.633a1.452 1.452 0 0 0 0 2.9h33.283v5.234c0 5.078-9.01 9.368-19.675 9.368s-19.674-4.29-19.674-9.368V12.906A5.962 5.962 0 0 0 6.612 6.95h-5.16a1.452 1.452 0 1 0 0 2.9m50.407 9.843H37.176l7.81-7.81a1.452 1.452 0 0 0-2.053-2.054l-7.81 7.81V2.962a18.276 18.276 0 0 1 16.736 16.736M18.63 59.044a6.063 6.063 0 1 1 6.063-6.063 6.07 6.07 0 0 1-6.063 6.063m33.286-6.063a6.063 6.063 0 1 1-6.062-6.063 6.07 6.07 0 0 1 6.063 6.063M36.242 39.973l3.812 6.18a8.956 8.956 0 0 0-3.039 5.375h-9.547a8.959 8.959 0 0 0-3.04-5.376l3.812-6.179a42.759 42.759 0 0 0 8 0" fill="currentColor"></path>
					</svg>
				</span>

				<h2 class="section-title__title">Accessories</h2>
			</div>
			<!-- Section Title End -->

			<!-- Product Wrapper Start -->
			<div class="product-wrapper product-active navigation-arrows-style-1">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-18.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Accessories</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-19.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Accessories</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-23.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Accessories</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-10.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Accessories</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-22.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Accessories</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
					</div>
				</div>

				<div class="swiper-button-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
				<div class="swiper-button-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
			</div>
			<!-- Product Wrapper End -->

			<!-- More Button Start -->
			<div class="text-center js-scroll ShortFadeInUp">
				<a class="view-more-btn" href="#">
					View more Accessories
				</a>
			</div>
			<!-- More Button End -->
		</div>
	</div>
	<!-- Product Accessories End -->

	<!-- Product Learning Start -->
	<div class="product-section section-padding-1">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="63.764" height="62.151" viewBox="0 0 63.764 62.151">
						<g fill="currentColor">
							<path d="M22.649 32.14H7.362A7.37 7.37 0 0 0 0 39.502V54.79a7.37 7.37 0 0 0 7.362 7.362h15.287a7.37 7.37 0 0 0 7.362-7.362V39.502a7.37 7.37 0 0 0-7.362-7.362m4.417 22.65a4.422 4.422 0 0 1-4.417 4.417H7.362a4.422 4.422 0 0 1-4.417-4.417V39.502a4.422 4.422 0 0 1 4.417-4.417h15.287a4.422 4.422 0 0 1 4.417 4.417ZM56.402 32.14H41.115a7.37 7.37 0 0 0-7.362 7.362V54.79a7.37 7.37 0 0 0 7.362 7.362h15.287a7.37 7.37 0 0 0 7.362-7.362V39.502a7.37 7.37 0 0 0-7.362-7.362m4.417 22.65a4.422 4.422 0 0 1-4.417 4.417H41.115a4.422 4.422 0 0 1-4.418-4.417V39.502a4.422 4.422 0 0 1 4.418-4.417h15.287a4.422 4.422 0 0 1 4.417 4.417ZM38.146 0H22.859a7.371 7.371 0 0 0-7.362 7.363V22.65a7.37 7.37 0 0 0 7.362 7.362h15.287a7.371 7.371 0 0 0 7.362-7.362V7.363A7.371 7.371 0 0 0 38.146 0m4.417 22.65a4.422 4.422 0 0 1-4.417 4.417H22.859a4.422 4.422 0 0 1-4.417-4.417V7.363a4.422 4.422 0 0 1 4.417-4.418h15.287a4.422 4.422 0 0 1 4.417 4.418Z">
							</path>
							<path d="M30.63 6.29c-3.93 0-6.614 9.179-7.864 14.652a1.473 1.473 0 0 0 2.871.656c.286-1.252.615-2.492.967-3.679h4.525a1.473 1.473 0 0 0 0-2.945H27.56c1.12-3.134 2.3-5.441 3.068-5.729 1.232.486 3.47 6.3 4.733 12.327a1.472 1.472 0 1 0 2.882-.6C37.096 15.491 34.58 6.294 30.63 6.294M19.676 46.511a4.844 4.844 0 0 0-3.987-7.6H9.697a1.473 1.473 0 0 0-1.473 1.473v13.508a1.473 1.473 0 0 0 1.473 1.473h7.243a4.848 4.848 0 0 0 2.736-8.85M16.94 52.42h-5.771V41.854h4.519a1.904 1.904 0 1 1 0 3.809h-1.312a1.472 1.472 0 1 0 0 2.945h2.56a1.904 1.904 0 0 1 0 3.809M55.855 49.135a1.473 1.473 0 0 0-2 .58 5.338 5.338 0 1 1-.077-5.293 1.473 1.473 0 1 0 2.536-1.5 8.278 8.278 0 1 0 .122 8.211 1.472 1.472 0 0 0-.58-2">
							</path>
						</g>
					</svg>
				</span>

				<h2 class="section-title__title">Learning</h2>
			</div>
			<!-- Section Title End -->

			<!-- Product Wrapper Start -->
			<div class="product-wrapper product-active navigation-arrows-style-1">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-21.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Learning</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-09.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Learning</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--badge onsale">
										Sale
									</div>
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-20.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Learning</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-12.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Learning</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
						<div class="swiper-slide">
							<!-- Single product Start -->
							<div class="single-product js-scroll ShortFadeInUp">
								<div class="single-product__thumbnail">
									<div class="single-product__thumbnail--holder">
										<a href="product-single.html">
											<img src="assets/images/products/product-05.jpg" alt="Product" width="344" height="370" />
										</a>
									</div>
									<div class="single-product__thumbnail--meta-2">
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i class="lastudioicon-shopping-cart-3"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i class="lastudioicon-heart-2"></i></a>
										<a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i class="lastudioicon-ic_compare_arrows_24px"></i></a>
										<button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
											<i class="lastudioicon-search-zoom-in"></i>
										</button>
									</div>
								</div>
								<div class="single-product__info">
									<div class="single-product__info--tags">
										<a href="#">Learning</a>
									</div>
									<h3 class="single-product__info--title">
										<a href="product-single.html">
											Terracotta Tealight Holder
										</a>
									</h3>
									<div class="single-product__info--price">
										<del>$39.99</del>
										<ins>$29.99</ins>
									</div>
									<div class="single-product__info--rating">
										<span class="star-rating">
											<span style="width: 88%"></span>
										</span>
									</div>
									<div class="single-product__info--color-swatch">
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Blue" data-bs-custom-class="p-meta-tooltip" class="color-item blue" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Bronze" data-bs-custom-class="p-meta-tooltip" class="color-item bronze" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Green" data-bs-custom-class="p-meta-tooltip" class="color-item green" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Red" data-bs-custom-class="p-meta-tooltip" class="color-item red" aria-label="Name"></button>
										<button type="submit" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Yellow" data-bs-custom-class="p-meta-tooltip" class="color-item yellow" aria-label="Name"></button>
									</div>
								</div>
							</div>
							<!-- Single product End -->
						</div>
					</div>
				</div>

				<div class="swiper-button-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
				<div class="swiper-button-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
			</div>
			<!-- Product Wrapper End -->

			<!-- More Button Start -->
			<div class="text-center js-scroll ShortFadeInUp">
				<a class="view-more-btn" href="#">
					View more Learning
				</a>
			</div>
			<!-- More Button End -->
		</div>
	</div>
	<!-- Product Learning End -->

	<!-- Newsletter Start -->
	<div class="newsletter-section section-padding-1">
		<div class="container-fluid custom-container">
			<!-- Newsletter Wrapper Start -->
			<div class="newsletter-home-wrapper">
				<div class="newsletter-col-1">
					<!-- Newsletter Content Start -->
					<div class="newsletter-content-style-1 text-center js-scroll ShortFadeInUp">
						<h2 class="newsletter-content-style-1__title">
							Sign up for Newsletter
						</h2>
						<h3 class="newsletter-content-style-1__sub-title">
							& Save 10% for all items
						</h3>
					</div>
					<!-- Newsletter Content End -->
				</div>

				<div class="newsletter-col-2">
					<!-- Newsletter Form Start -->
					<div class="newsletter-form-style-2 js-scroll ShortFadeInUp">
						<form action="#">
							<input type="email" class="newsletter-form-style-2__input" placeholder="Email address..." />
							<button class="newsletter-form-style-2__btn">
								Subscribe
							</button>
						</form>
					</div>
					<!-- Newsletter Form End -->
				</div>

				<div class="newsletter-layer-1 js-scroll ShortFadeInUp">
					<img src="assets/images/layer-1.png" alt="Layer" width="216" height="160" loading="lazy" />
				</div>
				<div class="newsletter-layer-2 js-scroll ShortFadeInUp">
					<img src="assets/images/layer-2.png" alt="Layer" width="187" height="203" loading="lazy" />
				</div>
			</div>
			<!-- Newsletter Wrapper End -->
		</div>
	</div>
	<!-- Newsletter End -->

	<!-- Category Start -->
	<div class="category-section section-padding">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="61.897" height="66.176" viewBox="0 0 61.897 66.176">
						<g fill="currentColor">
							<path d="M38.326 20.404c-.605-.159-1.226-.3-1.847-.417a1.428 1.428 0 0 0-.533 2.805 25.42 25.42 0 0 1 1.653.373c8.679 2.285 13.861 8.712 13.861 17.189v4.092a2.85 2.85 0 0 0-1.133 1.2l-1.237 2.506-2.766.4a2.855 2.855 0 0 0-1.585 4.879l2 1.951-.473 2.755a2.856 2.856 0 0 0 4.143 3.01l2.474-1.3 2.474 1.3a2.856 2.856 0 0 0 4.143-3.01l-.473-2.755 2-1.951a2.856 2.856 0 0 0-1.582-4.871l-2.766-.4-1.237-2.506a2.846 2.846 0 0 0-1.133-1.2v-4.092c0-9.709-6.126-17.354-15.99-19.951m20.715 30.981-3.076 3 .726 4.234-3.8-2-3.8 2 .726-4.234-3.076-3 4.252-.618 1.9-3.852 1.9 3.852Z">
							</path>
							<path d="m2.864 60.088-.472 2.754a2.856 2.856 0 0 0 4.144 3.011l2.474-1.3 2.474 1.3a2.856 2.856 0 0 0 4.144-3.011l-.472-2.754 2-1.951a2.856 2.856 0 0 0-1.583-4.871l-2.765-.4-1.237-2.506a2.849 2.849 0 0 0-1.133-1.2v-8.794c0-10.187 7.777-17.42 19.084-17.982v14.784a2.851 2.851 0 0 0-1.133 1.2l-1.237 2.506-2.766.4a2.856 2.856 0 0 0-1.583 4.871l2 1.951-.472 2.755a2.855 2.855 0 0 0 4.143 3.01l2.474-1.3 2.474 1.3a2.856 2.856 0 0 0 4.144-3.01l-.472-2.755 2-1.951a2.856 2.856 0 0 0-1.582-4.871l-2.766-.4-1.237-2.506a2.847 2.847 0 0 0-1.133-1.2v-24.28a1.428 1.428 0 0 0-1.428-1.428 4.3 4.3 0 1 1 3.55-1.87 1.428 1.428 0 0 0 2.354 1.617 7.16 7.16 0 1 0-7.333 2.965v5.336c-12.991.574-21.94 8.982-21.94 20.844v8.794a2.847 2.847 0 0 0-1.133 1.2l-1.237 2.506-2.766.4A2.856 2.856 0 0 0 .86 58.123Zm34.238-15.977-3.076 3 .726 4.234-3.8-2-3.8 2 .726-4.234-3.076-3 4.251-.618 1.9-3.853 1.9 3.853ZM7.107 55.475l1.9-3.853 1.9 3.853 4.252.618-3.076 3 .726 4.234-3.8-2-3.8 2 .727-4.234-3.077-3Z">
							</path>
						</g>
					</svg>
				</span>

				<h2 class="section-title__title">Recommendation</h2>
			</div>
			<!-- Section Title End -->

			<div class="category-wrapper category-active navigation-arrows-style-1">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<!-- Category Item Start -->
							<div class="category-item js-scroll ShortFadeInUp">
								<a href="#">
									<div class="category-item__image">
										<img src="assets/images/category/category-1.jpg" alt="Category" width="344" height="300" loading="lazy" />
									</div>
									<div class="category-item__content">
										<span class="category-item__btn">
											Organic Foods
										</span>
									</div>
								</a>
							</div>
							<!-- Category Item End -->
						</div>
						<div class="swiper-slide">
							<!-- Category Item Start -->
							<div class="category-item js-scroll ShortFadeInUp">
								<a href="#">
									<div class="category-item__image">
										<img src="assets/images/category/category-2.jpg" alt="Category" width="344" height="300" loading="lazy" />
									</div>
									<div class="category-item__content">
										<span class="category-item__btn">
											Play and learn
										</span>
									</div>
								</a>
							</div>
							<!-- Category Item End -->
						</div>
						<div class="swiper-slide">
							<!-- Category Item Start -->
							<div class="category-item js-scroll ShortFadeInUp">
								<a href="#">
									<div class="category-item__image">
										<img src="assets/images/category/category-3.jpg" alt="Category" width="344" height="300" loading="lazy" />
									</div>
									<div class="category-item__content">
										<span class="category-item__btn">
											Soft Clothing
										</span>
									</div>
								</a>
							</div>
							<!-- Category Item End -->
						</div>
						<div class="swiper-slide">
							<!-- Category Item Start -->
							<div class="category-item js-scroll ShortFadeInUp">
								<a href="#">
									<div class="category-item__image">
										<img src="assets/images/category/category-4.jpg" alt="Category" width="344" height="300" loading="lazy" />
									</div>
									<div class="category-item__content">
										<span class="category-item__btn">
											Decor & Toy
										</span>
									</div>
								</a>
							</div>
							<!-- Category Item End -->
						</div>
					</div>
				</div>
				<div class="swiper-button-prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
				<div class="swiper-button-next">
					<svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
						<path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
					</svg>
				</div>
			</div>
		</div>
	</div>
	<!-- Category End -->

	<!-- Client End -->
	<div class="client-section section-padding bg-color">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="64.735" height="66.178" viewBox="0 0 64.735 66.178">
						<g fill="currentColor">
							<path d="M44.761 16.782a1.577 1.577 0 0 0-1.576 1.576v2.79a1.577 1.577 0 0 0 3.153 0v-2.79a1.577 1.577 0 0 0-1.576-1.576">
							</path>
							<path d="M63.882 19.483a1.573 1.573 0 0 0-1.469-.01c-2.658 1.373-5.19-.006-6.237-.732.015-.294.026-.588.026-.884a17.857 17.857 0 1 0-31.06 12.011 24.616 24.616 0 0 0-5.534 4.136c-1.839 1.713-2.878 2.607-4.565 2.607-.669 0-3.017-.712-6.593-2.276-1.533-.671-3.794-1.419-5.7-.168C.873 35.394-.001 38.103-.001 42.69c0 17.336 13.463 23.488 24.992 23.488h13.358a19.549 19.549 0 0 0 19.528-19.523c0-6.8-2.6-12.463-7.208-15.875a17.955 17.955 0 0 0 2.014-2.283 19.319 19.319 0 0 0 3.718.4 8.638 8.638 0 0 0 6.043-2.008 7.8 7.8 0 0 0 2.265-6.185 1.575 1.575 0 0 0-.822-1.216m-9.162 27.167A16.393 16.393 0 0 1 38.35 63.029H24.992c-10.557 0-21.839-5.342-21.839-20.335 0-4.529.925-5.624 1.324-5.884.467-.306 1.383-.165 2.715.418 2.649 1.159 6.163 2.541 7.856 2.541 3.007 0 4.807-1.677 6.713-3.453a20.164 20.164 0 0 1 5.912-4.162 17.868 17.868 0 0 0 10.676 3.565 1.576 1.576 0 0 0 0-3.152 14.719 14.719 0 0 1-9.434-3.429 14.7 14.7 0 1 1 18.179.547l-.012.011a1.632 1.632 0 0 0-.157.143c-.025.025-.053.048-.077.074s-.062.083-.092.125-.065.087-.092.134c0 .007-.009.012-.013.02-.02.035-.03.073-.046.108a1.563 1.563 0 0 0-.066.155 3.6 3.6 0 0 0-.067.3c-.007.051-.007.1-.008.153v.153c0 .053.012.093.02.14a1.549 1.549 0 0 0 .031.161c.012.046.03.089.046.134s.036.1.06.151a1.582 1.582 0 0 0 .087.145c.021.033.036.068.06.1a.189.189 0 0 0 .015.015 1.571 1.571 0 0 0 .239.253c.023.019.049.032.073.05a1.489 1.489 0 0 0 .181.125c4.806 2.644 7.453 7.731 7.453 14.324m5.591-22.093c-1.158 1.058-3.18 1.41-5.89 1.035a17.981 17.981 0 0 0 1.261-3.49 9.236 9.236 0 0 0 5.578 1.026 3.676 3.676 0 0 1-.949 1.429">
							</path>
							<path d="M28.053 55.412h-7.422c-7.665 0-9.511-8.036-9.591-8.4a1.576 1.576 0 0 0-3.083.655c.8 3.77 4.472 10.9 12.674 10.9h7.421a1.577 1.577 0 0 0 0-3.153">
							</path>
							<path d="M22.637 51.663a1.577 1.577 0 0 0 0-3.153 4.667 4.667 0 0 1-4.661-3.426 1.576 1.576 0 0 0-3.058.762 7.85 7.85 0 0 0 7.719 5.817">
							</path>
						</g>
					</svg>
				</span>
				<h2 class="section-title__title">Client reviews</h2>
			</div>
			<!-- Section Title End -->

			<!-- Client Wrapper Start -->
			<div class="client-wrapper client-active swiper-dot-style-2">
				<div class="swiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<!-- Client Item Start -->
							<div class="client-item text-center js-scroll ShortFadeInUp">
								<div class="client-item__user">
									<img src="assets/images/user/user-1.jpg" alt="User" width="60" height="60" loading="lazy" />
								</div>
								<div class="client-item__comment">
									<p>
										Out of all themes I purchased
										this had the best document
										included about installing and
										editing the theme. Beginners
										friendly.
									</p>
								</div>
								<div class="client-item__name">
									Anthony Gilbert
								</div>
								<div class="client-item__position">
									Toronto
								</div>
							</div>
							<!-- Client Item End -->
						</div>
						<div class="swiper-slide">
							<!-- Client Item Start -->
							<div class="client-item text-center js-scroll ShortFadeInUp">
								<div class="client-item__user">
									<img src="assets/images/user/user-2.jpg" alt="User" width="60" height="60" loading="lazy" />
								</div>
								<div class="client-item__comment">
									<p>
										Out of all themes I purchased
										this had the best document
										included about installing and
										editing the theme. Beginners
										friendly.
									</p>
								</div>
								<div class="client-item__name">
									Anthony Gilbert
								</div>
								<div class="client-item__position">
									Toronto
								</div>
							</div>
							<!-- Client Item End -->
						</div>
						<div class="swiper-slide">
							<!-- Client Item Start -->
							<div class="client-item text-center js-scroll ShortFadeInUp">
								<div class="client-item__user">
									<img src="assets/images/user/user-3.jpg" alt="User" width="60" height="60" loading="lazy" />
								</div>
								<div class="client-item__comment">
									<p>
										Out of all themes I purchased
										this had the best document
										included about installing and
										editing the theme. Beginners
										friendly.
									</p>
								</div>
								<div class="client-item__name">
									Anthony Gilbert
								</div>
								<div class="client-item__position">
									Toronto
								</div>
							</div>
							<!-- Client Item End -->
						</div>
					</div>
				</div>

				<div class="swiper-pagination"></div>
			</div>
			<!-- Client Wrapper End -->
		</div>
	</div>
	<!-- Client End -->

	<!-- Instagram Start -->
	<div class="instagram-section section-padding-1">
		<div class="container-fluid custom-container">
			<!-- Section Title Start -->
			<div class="section-title text-center js-scroll ShortFadeInUp">
				<span class="section-title__icon">
					<svg xmlns="http://www.w3.org/2000/svg" width="59.666" height="66.176" viewBox="0 0 59.666 66.176">
						<g fill="currentColor">
							<path d="M21.62 16.555a1.516 1.516 0 0 0-1.516 1.516v2.591a1.516 1.516 0 0 0 3.032 0v-2.591a1.516 1.516 0 0 0-1.516-1.516M38.448 16.555a1.516 1.516 0 0 0-1.516 1.516v2.591a1.516 1.516 0 0 0 3.032 0v-2.591a1.516 1.516 0 0 0-1.516-1.516M33.587 26.16c-.022 0-2.236-.081-2.236-1.067v-1.1a1.512 1.512 0 0 0-.22-3.009H28.54a1.512 1.512 0 0 0-.22 3.009v1.1c0 .985-2.214 1.067-2.229 1.067a1.517 1.517 0 0 0 0 3.033 6.836 6.836 0 0 1 7.49 0 1.517 1.517 0 0 0 .006-3.033">
							</path>
							<path d="M55.084 10.601A10.059 10.059 0 0 0 39.07 2.473a18.489 18.489 0 0 0-18.473 0 10.06 10.06 0 0 0-16.015 8.128 10.141 10.141 0 0 0 6.78 9.511 18.314 18.314 0 0 0 2.493 7.777c-4.538 1.535-10.38 5.825-9.726 14.563a10.818 10.818 0 0 0-2.984 3.994 15.074 15.074 0 0 0 4.721 17.617 10.437 10.437 0 0 0 6.141 2.113 9.222 9.222 0 0 0 2.4-.316c5.78-1.548 8.965-8.47 7.1-15.428a14.5 14.5 0 0 0-5.3-8 18.786 18.786 0 0 1 2.1-4.9 1.515 1.515 0 1 0-2.646-1.478 24.172 24.172 0 0 0-2.194 4.9 9.454 9.454 0 0 0-5.817-.333c-.178.048-.347.116-.52.173.2-7.327 6.349-9.673 8.6-10.285a18.552 18.552 0 0 0 14.116 6.585 18.336 18.336 0 0 0 9.673-2.769 35 35 0 0 1 3.943 8.125 14.506 14.506 0 0 0-5.288 7.983 14.728 14.728 0 0 0 .2 8.568c-.013.008-.028.013-.041.022s-2.387 1.564-8.491 1.564a30.389 30.389 0 0 1-3.543-.2q-.484-.057-.918-.127a1.516 1.516 0 0 0-.474 2.995c.328.052.673.1 1.036.143a33.4 33.4 0 0 0 3.9.217c5.924 0 8.875-1.322 9.872-1.891a9.61 9.61 0 0 0 5.558 4.132 9.1 9.1 0 0 0 2.359.311c5.024 0 9.892-4.105 11.5-10.121a14.49 14.49 0 0 0-.607-9.6 10.811 10.811 0 0 0-2.983-3.994c.654-8.738-5.187-13.027-9.725-14.563a18.322 18.322 0 0 0 2.493-7.777 10.141 10.141 0 0 0 6.779-9.511m-46.66 32.95a6.133 6.133 0 0 1 1.6-.21A7.45 7.45 0 0 1 14.4 44.87a11.46 11.46 0 0 1 4.183 6.347c1.432 5.344-.792 10.6-4.957 11.715a6.994 6.994 0 0 1-5.968-1.32 12.05 12.05 0 0 1-3.734-13.935 7 7 0 0 1 4.508-4.127M52.06 10.6a7.094 7.094 0 0 1-3.753 6.22 18.381 18.381 0 0 0-1.234-5.143 18.46 18.46 0 0 0-5.31-7.319 7.032 7.032 0 0 1 10.3 6.244m-44.438 0a7.032 7.032 0 0 1 10.3-6.244 18.454 18.454 0 0 0-5.31 7.319 18.38 18.38 0 0 0-1.234 5.143 7.093 7.093 0 0 1-3.753-6.22m6.713 8.322-.009-.375a15.415 15.415 0 0 1 1.1-5.745 15.523 15.523 0 0 1 28.832 0 15.406 15.406 0 0 1 1.1 5.745l-.009.376a15.51 15.51 0 0 1-31.012 0m41.873 36.343c-1.433 5.344-5.988 8.784-10.152 7.667a7 7 0 0 1-4.508-4.127 12.048 12.048 0 0 1 3.734-13.935 7.448 7.448 0 0 1 4.371-1.529 6.154 6.154 0 0 1 1.6.21 7 7 0 0 1 4.508 4.127 11.464 11.464 0 0 1 .45 7.588m-3.652-14.47c-.174-.058-.344-.126-.522-.174a9.451 9.451 0 0 0-5.854.347 41.475 41.475 0 0 0-4.22-8.446 18.892 18.892 0 0 0 2-2.017c2.251.6 8.411 2.92 8.6 10.289">
							</path>
						</g>
					</svg>
				</span>
				<h2 class="section-title__title">
					Follow us on Instagram
				</h2>
			</div>
			<!-- Section Title End -->
		</div>
		<!-- Instagram Wrapper Start -->
		<div class="instagram-wrapper instagram-active">
			<div class="swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<!-- Instagram Item Start -->
						<div class="instagram-item js-scroll ShortFadeInUp">
							<a href="#">
								<div class="instagram-item__image">
									<img src="assets/images/instagram/instagram-1.jpg" alt="Instagram" />
								</div>
								<div class="instagram-item__icon">
									<i class="lastudioicon-b-instagram"></i>
								</div>
							</a>
						</div>
						<!-- Instagram Item End -->
					</div>
					<div class="swiper-slide">
						<!-- Instagram Item Start -->
						<div class="instagram-item js-scroll ShortFadeInUp">
							<a href="#">
								<div class="instagram-item__image">
									<img src="assets/images/instagram/instagram-2.jpg" alt="Instagram" />
								</div>
								<div class="instagram-item__icon">
									<i class="lastudioicon-b-instagram"></i>
								</div>
							</a>
						</div>
						<!-- Instagram Item End -->
					</div>
					<div class="swiper-slide">
						<!-- Instagram Item Start -->
						<div class="instagram-item js-scroll ShortFadeInUp">
							<a href="#">
								<div class="instagram-item__image">
									<img src="assets/images/instagram/instagram-3.jpg" alt="Instagram" />
								</div>
								<div class="instagram-item__icon">
									<i class="lastudioicon-b-instagram"></i>
								</div>
							</a>
						</div>
						<!-- Instagram Item End -->
					</div>
					<div class="swiper-slide">
						<!-- Instagram Item Start -->
						<div class="instagram-item js-scroll ShortFadeInUp">
							<a href="#">
								<div class="instagram-item__image">
									<img src="assets/images/instagram/instagram-4.jpg" alt="Instagram" />
								</div>
								<div class="instagram-item__icon">
									<i class="lastudioicon-b-instagram"></i>
								</div>
							</a>
						</div>
						<!-- Instagram Item End -->
					</div>
					<div class="swiper-slide">
						<!-- Instagram Item Start -->
						<div class="instagram-item js-scroll ShortFadeInUp">
							<a href="#">
								<div class="instagram-item__image">
									<img src="assets/images/instagram/instagram-5.jpg" alt="Instagram" />
								</div>
								<div class="instagram-item__icon">
									<i class="lastudioicon-b-instagram"></i>
								</div>
							</a>
						</div>
						<!-- Instagram Item End -->
					</div>
				</div>
			</div>
		</div>
		<!-- Instagram Wrapper End -->
	</div>
	<!-- Instagram End -->
</main>
@endsection