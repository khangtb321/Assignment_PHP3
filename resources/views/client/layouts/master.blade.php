<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/babify/babify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 06:10:17 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<title>Babify - Kids Store & Baby Shop Template</title>

	<meta name="robots" content="noindex, follow" />
	<meta name="description" content="Babify - Kids Store & Baby Shop Template" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	@include('client.layouts.patials.css')
</head>


<body>
	<!-- Header Start -->
	<header class="header bg-white header-height">
		<!-- Header Top Start -->
		@include('client.layouts.patials.header-top')
		<!-- Header Top End -->
		
		<!-- Header Middle Start -->
		@include('client.layouts.patials.header-middle')
		<!-- Header Middle End -->

		<!-- Header Main Start -->
		@include('client.layouts.patials.header-end')
		<!-- Header Main End -->
	</header>

	<!-- Header End -->

	@yield('content')

	<!-- Footer Start -->
	<footer class="footer-section">
		
		@include('client.layouts.patials.footer')
	</footer>

	<!-- Footer End -->

	<!-- Quick View Start -->
	<!-- Modal Start -->
	<div class="modal quickview-modal fade" id="quickView">
		<div class="modal-dialog modal-dialog-centered">
			<!-- Modal Content Start -->
			<div class="modal-content">
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="remove">
					<i class="lastudioicon-e-remove"></i>
				</button>
				<div class="modal-body">
					<div class="row g-0">
						<div class="col-md-6">
							<!-- Product Single image Start -->
							<div class="product-single-image">
								<div class="quick-view-product-slide navigation-arrows-style-1">
									<div class="swiper">
										<div class="swiper-wrapper">
											<div class="product-single-slide-item swiper-slide">
												<img src="assets/images/products/product-single-01.jpg"
													alt="Product Single" width="742" height="778" loading="lazy" />
											</div>
											<div class="product-single-slide-item swiper-slide">
												<img src="assets/images/products/product-single-02.jpg"
													alt="Product Single" width="742" height="778" loading="lazy" />
											</div>
											<div class="product-single-slide-item swiper-slide">
												<img src="assets/images/products/product-single-03.jpg"
													alt="Product Single" width="742" height="778" loading="lazy" />
											</div>
											<div class="product-single-slide-item swiper-slide">
												<img src="assets/images/products/product-single-04.jpg"
													alt="Product Single" width="742" height="778" loading="lazy" />
											</div>
										</div>
										<div class="swiper-button-next" aria-label="arrow-right">
											<i class="lastudioicon-arrow-right"></i>
										</div>
										<div class="swiper-button-prev" aria-label="arrow-left">
											<i class="lastudioicon-arrow-left"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- Product Single image End -->
						</div>
						<div class="col-md-6">
							<!-- Product Single Content Start -->
							<div class="product-single-content quick-view-product-content">
								<h2 class="product-single-content__title">
									Product Simple
								</h2>
								<div class="product-single-content__price-stock">
									<div class="product-single-content__price">
										<ins>$36.99</ins>
									</div>
									<div class="product-single-content__stock">
										<span class="stock-icon" aria-label="check-circle">
											<i class="dlicon ui-1_check-circle-08"></i>
										</span>
										<span class="stock-text">97 in stock</span>
									</div>
								</div>
								<div class="product-single-content__short-description">
									<p>
										Proin volutpat vitae libero at tincidunt.
										Maecenas sapien lectus, vehicula vel euismod
										sed, vulputate a lorem. Integer at tristique
										libero. Nullam porta eleifend metus a
										interdum.
									</p>
								</div>
								<div class="product-single-content__add-to-cart-wrapper">
									<div class="product-single-content__quantity-add-to-cart">
										<div class="product-single-content__quantity product-quantity">
											<button type="button" class="decrease" aria-label="delete">
												<i class="lastudioicon-i-delete-2"></i>
											</button>
											<input class="quantity-input" type="text" value="01" />
											<button type="button" class="increase" aria-label="add">
												<i class="lastudioicon-i-add-2"></i>
											</button>
										</div>
										<button class="product-single-content__add-to-cart btn">
											Add to cart
										</button>
									</div>

									<a href="#" class="product-add-compare">Add to Compare</a>
									<a href="#" class="product-add-wishlist">Add to Wishlist</a>
								</div>
								<div class="product-single-content__meta">
									<div class="product-single-content__meta--item">
										<div class="label">SKU:</div>
										<div class="content">REF. HT-5732</div>
									</div>
									<div class="product-single-content__meta--item">
										<div class="label">Categories:</div>
										<div class="content">
											<a href="#">Fashion</a>
											<a href="#">Women</a>
										</div>
									</div>
									<div class="product-single-content__meta--item">
										<div class="label">Tag:</div>
										<div class="content">
											<a href="#">Teen</a>
										</div>
									</div>
								</div>
							</div>
							<!-- Product Single Content End -->
						</div>
					</div>
				</div>
			</div>
			<!-- Modal Content End -->
		</div>
	</div>
	<!-- Modal End -->

	<!-- Quick View End -->

	<!-- Popup Modal Start -->
	<!-- Popup Modal Start -->
	<div class="popup-modal">
		<div class="popup-modal-overlay"></div>
		<div class="popup-modal-content">
			<div class="popup-modal-row flex-row-reverse">
				<div class="popup-modal-col-2">
					<!-- Popup Discount Background Start -->
					<div class="popup-discount-background" style="background-image: url(assets/images/popup-bg.jpg)">
					</div>
					<!-- Popup Discount Background End -->
				</div>
				<div class="popup-modal-col-1">
					<!-- Popup Discount Content Start -->
					<div class="popup-discount-content">
						<h3 class="popup-discount-content__title">
							Get 7% discount
						</h3>
						<p class="popup-discount-content__sub-title">
							Register and get a discount on your first purchase!
						</p>

						<form action="#">
							<div class="popup-discount-content__form">
								<input type="text" placeholder="Email address..." />
								<button type="button">Subscribe</button>
							</div>
						</form>
						<p class="popup-discount-content__text">
							*Limited time offer. Free USPS shipping only. Only
							available for US
						</p>

						<div class="popup-discount-content__wrapper">
							<div class="popup-discount-content__dont-show">
								<a href="#">Don’t show this popup again</a>
							</div>
							<ul class="popup-discount-content__social">
								<li>
									<a href="#" aria-label="twitter">
										<i class="lastudioicon-b-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" aria-label="facebook">
										<i class="lastudioicon-b-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" aria-label="instagram">
										<i class="lastudioicon-b-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#" aria-label="youtube">
										<i class="lastudioicon-b-youtube-play"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<!-- Popup Discount Content End -->
				</div>
			</div>

			<div class="popup-close">
				<button class="popup-close__btn" aria-label="close">
					<svg viewBox="0 0 1000 1000" class="eicon-close">
						<path
							d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z">
						</path>
					</svg>
				</button>
			</div>
		</div>
	</div>
	<!-- Popup Modal End -->

	<!-- Popup Modal End -->

	<!-- JS Vendor, Plugins & Activation Script Files -->

	@include('client.layouts.patials.js')

</body>


<!-- Mirrored from htmldemo.net/babify/babify/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 17 Jul 2024 06:10:40 GMT -->

</html>