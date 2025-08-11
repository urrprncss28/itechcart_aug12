<!DOCTYPE html>
<html lang="en">
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>iTech Cart</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- font awesome -->

	<!--  -->
	<!-- owl stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
	<style>
		body {
			position: relative;
			min-height: 100vh;
			font-family: 'Segoe UI', Arial, sans-serif;
		}
		body::before {
			content: '';
			position: fixed;
			top: 0;
			left: 0;
			width: 100vw;
			height: 100vh;
			z-index: 0;
			html, body {
				height: 100%;
				min-height: 100vh;
				margin: 0;
				padding: 0;
			}
			body {
				position: relative;
				font-family: 'Segoe UI', Arial, sans-serif;
				background: none;
			}
			body::before {
				content: '';
				position: fixed;
				top: 0;
				left: 0;
				width: 100vw;
				height: 100vh;
				z-index: 0;
				background: url('images/iphone16.png') no-repeat center center fixed;
				background-size: cover;
				opacity: 0.10;
				pointer-events: none;
			}
			.banner_bg_main, .system-container, .cart-main-flex, .cart-left, .cart-right {
				position: relative;
				z-index: 1;
				background: transparent !important;
			}
			pointer-events: none;
		}
		.banner_bg_main, .system-container, .cart-main-flex, .cart-left, .cart-right {
			position: relative;
			z-index: 1;
		}
		body {
			background: #dedede;
			font-family: 'Segoe UI', Arial, sans-serif;
		}
		.system-container {
			max-width: 1100px;
			margin: 48px auto;
			background: #fff;
			border-radius: 22px;
			box-shadow: 0 8px 32px rgba(0,0,0,0.13);
			display: flex;
			overflow: visible;
			
		}
		.cart-main-flex {
			display: flex;
			width: 100%;
			background: #fff;
			border-radius: 22px 22px 22px 22px;
			box-shadow: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
		.cart-left {
			flex: 2;
			padding: 32px 24px 24px 24px;
			background: #fff;
			min-width: 340px;
			border-radius: 22px 0 0 22px;
			overflow-y: auto;
			max-height: 80vh;
			position: relative;
			display: flex;
			flex-direction: column;
		}

	/* All Products section CSS removed */
		.cart-title {
			font-size: 2.3rem;
			font-weight: 800;
			color: #222;
			margin-bottom: 0;
		}
		#cart-item-count {
			color: #888;
			font-weight: 600;
			font-size: 1.15rem;
			margin-left: auto;
		}
		#cart-items {
			margin-top: 24px;
			display: block;
			max-width: 100%;
		}
		.cart-items-container {
			background: none;
			box-shadow: none;
			padding: 0;
			margin-bottom: 0;
			border-radius: 0;
			display: grid;
			grid-template-columns: repeat(3, 1fr);
			grid-template-rows: repeat(2, 1fr);
			gap: 18px 24px;
		}
		@media (max-width: 900px) {
			.cart-items-container {
				grid-template-columns: 1fr;
				grid-template-rows: none;
			}
		}
	/* Removed grid media query for cart-items-container */
		.see-more-btn {
			margin: 18px auto 0 auto;
			display: flex;
			justify-content: center;
			align-items: center;
			background: #222;
			color: #fff;
			border: none;
			border-radius: 8px;
			padding: 10px 32px;
			font-size: 1.08rem;
			font-weight: 600;
			cursor: pointer;
			transition: background 0.15s;
		}
		.see-more-btn:hover {
			background: #000;
		}
	/* #see-less-btn uses .see-more-btn styles */
	/* Removed duplicate/broken grid media query */
		.cart-item-row {
			display: flex;
			align-items: flex-start;
			border-bottom: none;
			min-height: 15px;
			justify-content: flex-start;
			background: #fff;
			border-radius: 6px;
			box-shadow: 0 1px 3px rgba(0,0,0,0.03);
			border: 1px solid #f0f0f0;
			width: 100%;
		}
		.cart-item-info {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			flex: 1 1 auto;
			min-width: 0;
		}
		.cart-item-details-vertical {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
			gap: 2px;
		}
		
		.cart-item-img {
			width: 28px;
			height: 28px;
			object-fit: contain;
			border-radius: 4px;
			background: #fff;
			margin-right: 6px;
			border: 1px solid #e0e0e0;
		}
		.cart-item-qty-row {
			display: flex;
			align-items: center;
			gap: 2px;
			margin-left: 4px;
			margin-right: 4px;
		}
		.cart-item-qty-btn {
			width: 22px;
			height: 22px;
			background: #f5f5f5;
			color: #333;
			border: 1px solid #bbb;
			border-radius: 4px;
			font-size: 1rem;
			font-weight: 700;
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			transition: background 0.15s, color 0.15s, border 0.15s;
			padding: 0;
		}
		.cart-item-qty-btn:hover {
			background: #e0e0e0;
			color: #111;
			border-color: #888;
		}
		.color-select {
			min-width: 70px;
			font-size: 0.9rem;
			padding: 2px 8px;
			border-radius: 4px;
			border: 1px solid #bbb;
			background: #fafafa;
			color: #222;
		}
		.cart-item-type {
			font-weight: 600;
			color: #888;
			font-size: 0.85rem;
			margin: 0 0 1px 0;
			cursor: default;
		}
		.cart-item-qty-btn:hover {
			background: #f2f2f2;
		}
		.cart-item-qty-input {
			width: 22px;
			text-align: center;
			border: 1px solid #bbb;
			border-radius: 3px;
			background: #f9f9f9;
			font-size: 0.85rem;
			font-weight: 600;
			color: #222;
			margin: 0 2px;
		}
		.cart-item-price {
			font-weight: 700;
			font-size: 0.85rem;
			color: #111;
			margin-left: 6px;
			min-width: 48px;
			text-align: right;
			flex-shrink: 0;
		}
		.cart-item-remove {
			color: #888;
			font-size: 1rem;
			margin-left: 6px;
			cursor: pointer;
			background: none;
			border: none;
			transition: color 0.15s;
			align-self: center;
		}
		.cart-item-remove:hover {
			color: #d00;
		}
		.cart-right {
			flex: 1.1;
			background: #ededed;
			padding: 56px 36px 36px 36px;
			min-width: 320px;
			border-radius: 0 22px 22px 0;
			display: flex;
			flex-direction: column;
			justify-content: flex-start;
			box-shadow: none;
		}
		.summary-row {
			font-size: 1.13rem;
			margin-bottom: 18px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}
		.summary-row label {
			font-size: 1.01rem;
			color: #444;
			margin-bottom: 4px;
			font-weight: 600;
		}
		.summary-row select, .summary-row input[type="text"] {
			padding: 10px 12px;
			border-radius: 4px;
			border: 1.5px solid #bbb;
			font-size: 1.08rem;
			background: #fff;
			margin-top: 6px;
			margin-bottom: 6px;
			width: 100%;
			box-sizing: border-box;
		}
		#apply-coupon {
			background: #222;
			color: #fff;
			border: none;
			border-radius: 0 4px 4px 0;
			padding: 10px 18px;
			font-size: 1.13rem;
			cursor: pointer;
			font-weight: 700;
			margin-left: -4px;
			transition: background 0.15s;
		}
		#apply-coupon:hover {
			background: #111;
		}
		.summary-discount {
			margin-top: 8px;
			color: #1a7f37;
			font-weight: 700;
			font-size: 1.08rem;
		}
		.summary-total {
			font-size: 1.35rem;
			font-weight: 800;
			color: #111;
			margin-top: 24px;
			margin-bottom: 24px;
		}
		#checkout-btn {
			margin-top: 16px;
			width: 100%;
			background: #111;
			color: #fff;
			border: none;
			border-radius: 8px;
			padding: 16px 0;
			font-size: 1.18rem;
			font-weight: 700;
			letter-spacing: 1px;
			cursor: pointer;
			transition: background 0.15s;
		}
		#checkout-btn:hover {
			background: #000;
		}
		hr {
			border: 0;
			border-top: 1.5px solid #d2d2d2;
			margin: 24px 0;
		}
		@media (max-width: 900px) {
			.system-container, .cart-main-flex {
				flex-direction: column;
				border-radius: 22px;
			}
			.cart-left, .cart-right {
				min-width: 0;
				padding: 24px 4vw;
				border-radius: 22px;
			}
			.cart-right {
				border-radius: 0 0 22px 22px;
			}
		}
		@media (max-width: 600px) {
			.cart-title {
				font-size: 1.3rem;
			}
			.summary-total {
				font-size: 1.1rem;
			}
		}
	</style>
</head>
<body>
		<div class="banner_bg_main">
			<!-- header top section start -->
			<div class="container">
				<div class="header_section_top">
					<div class="row">
						<div class="col-sm-12">
							<div class="custom_menu">
								<ul>
									<li><a href="best_sellers.php">Best Sellers</a></li>
									<li><a href="new_releases.php">New Releases</a></li>
									<li><a href="all_models.php">All Models</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header top section start -->
			<!-- logo section start -->
			<!-- logo section end -->
			<!-- header section start -->
			<div class="header_section">
				<div class="container">
					<div class="containt_main">
						<div id="mySidenav" class="sidenav">
							<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
							<a href="home.php">Home</a>
							<a href="new_releases.php">New Releases</a>
							<a href="best_sellers.php">Best Sellers</a>
							<a href="all_models.php">All Models</a>
						</div>
						<span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png" style="margin-left: 18px; margin-top: 8px;"></span>
						<div class="dropdown">
							<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								<a class="dropdown-item" href="new_releases.php">New Releases</a>
								<a class="dropdown-item" href="best_sellers.php">Best Sellers</a>
								<a class="dropdown-item" href="all_models.php">All Models</a>
							</div>
						</div>
						<div class="main">
							<!-- Another variation with a button -->
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search this blog">
								<div class="input-group-append">
									<button class="btn btn-secondary" type="button" style="background-color: #000000; border-color:#000000 ">
									<i class="fa fa-search"></i>
									</button>
								</div>
							</div>
						</div>
						<div class="header_box">
							<div class="lang_box ">
								<a href="#" title="Language" class="nav-link" data-toggle="dropdown" aria-expanded="true">
								<img src="images/flag-uk.png" alt="flag" class="mr-2 " title="United Kingdom"> English <i class="fa fa-angle-down ml-2" aria-hidden="true"></i>
								</a>
								<div class="dropdown-menu ">
									<a href="#" class="dropdown-item">
									<img src="images/flag-france.png" class="mr-2" alt="flag">
									French
									</a>
								</div>
							</div>
							<div class="login_menu">
								<ul>
									<li><a href="cart.php" >
										<i class="fa fa-shopping-cart" aria-hidden="true" style="color: #050005;"></i>
										<span class="padding_10" style="color: black;">Cart</span></a>
									</li>
									<li><a href="User.php">
										<i class="fa fa-user" aria-hidden="true" style="color: black;"></i>
										<span class="padding_10" style="color: black; ">User</span></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header section end -->
			<div class="system-container">
				<div class="cart-main-flex">
		<!-- Left: Cart Items -->
		<div class="cart-left">
			<div style="display:flex; align-items:center; gap:12px; margin-bottom:0px;">
				<a href="home.php" style="color:#222; text-decoration:none; font-weight:600; font-size:1.08rem; display:flex; align-items:center; gap:4px;"><span style="font-size:1.2rem;">←</span> Back to shop</a>
			</div>
			<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:0px;">
				<div class="cart-title">Item List</div>
				<div id="cart-item-count" style="font-weight:600; color:#888; font-size:1.1rem;"></div>
			</div>
			<div id="cart-items" class="cart-items-section"></div>
		</div>
		<!-- Right: Summary -->
		<div class="cart-right">
			<div>
				<div style="font-size:1.5rem; font-weight:700; color:#222; margin-bottom:18px;">Summary</div>
				<hr style="border:0; border-top:1.5px solid #ddd; margin-bottom:18px;">
				<div class="summary-row" style="display:flex; justify-content:space-between; margin-bottom:5px; font-size:1.08rem;">
					<span>ITEMS <span id="summary-items-count"></span></span> <span id="summary-items"></span>
				</div>
				<div id="summary-item-details" style="margin-bottom:18px;"></div>
				   <!-- Shipping and Give Code removed as requested -->
				<hr style="border:0; border-top:1.5px solid #ddd; margin-bottom:18px;">
				<div class="summary-row summary-total" style="display:flex; justify-content:space-between; font-size:1.25rem; font-weight:800; color:#222;">
					<span>TOTAL PRICE</span> <span id="summary-total"></span>
				</div>
			</div>
			<button id="checkout-btn">Add to cart <i class="" aria-hidden="true"></i></button>
		</div>
	</div>
	</div>
	<!-- Color Selection Modal -->
	<div id="color-modal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.45); z-index:9999; align-items:center; justify-content:center;">
		<div style="background:#fff; width:90%; max-width:420px; border-radius:12px; box-shadow:0 12px 40px rgba(0,0,0,0.25); overflow:hidden;">
			<div style="padding:16px 18px; border-bottom:1px solid #eee; display:flex; align-items:center; justify-content:space-between;">
				<div style="font-weight:800; font-size:1.1rem; color:#222;">Choose Color</div>
				<button id="color-modal-close" aria-label="Close" style="border:none; background:none; font-size:1.25rem; line-height:1; cursor:pointer; color:#444;">×</button>
			</div>
			<div style="padding:18px;">
				<div id="color-modal-item" style="display:flex; align-items:center; gap:10px; margin-bottom:14px;"></div>
				<label for="color-modal-select" style="display:block; font-size:0.95rem; color:#555; margin-bottom:6px;">Available colors</label>
				<select id="color-modal-select" style="width:100%; padding:10px 12px; border:1px solid #bbb; border-radius:6px; background:#fafafa; font-size:1rem; color:#222;"></select>
			</div>
			<div style="padding:14px 18px; display:flex; gap:10px; justify-content:flex-end; border-top:1px solid #eee;">
				<button id="color-modal-cancel" style="background:#f2f2f2; color:#222; border:1px solid #ddd; border-radius:8px; padding:10px 16px; font-weight:600; cursor:pointer;">Cancel</button>
				<button id="color-modal-confirm" style="background:#111; color:#fff; border:none; border-radius:8px; padding:10px 16px; font-weight:700; cursor:pointer;">Add</button>
			</div>
		</div>
	</div>
	<script>
	// All iPhone items in cart
	let cartData = [
		{ name: 'Iphone 16 (512 GB)', price: 63990, qty: 0, img: 'images/iphone16.png', colors: ['Black', 'White', 'Blue', 'Pink', 'Natural Titanium', 'Yellow'], selectedColor: 'Black', type: 'New Release' },
		{ name: 'Iphone 16 Pro (128 GB)', price: 76990, qty: 0, img: 'images/iphone16pro (2).png', colors: ['Black Titanium', 'White Titanium', 'Blue Titanium', 'Natural Titanium'], selectedColor: 'Black Titanium', type: 'New Release' },
		{ name: 'Iphone 16e (128 GB)', price: 37490, qty: 0, img: 'images/iphone16e.png', colors: ['Blue', 'White', 'Green', 'Yellow', 'Red'], selectedColor: 'Blue', type: 'New Release' },
		{ name: 'Iphone 15 (128GB)', price: 47990, qty: 0, img: 'images/iphone15.webp', colors: ['Black', 'Blue', 'Green', 'Yellow', 'Pink'], selectedColor: 'Black', type: 'New Release' },
		{ name: 'Iphone 15 Pro Max (1TB)', price: 108990, qty: 0, img: 'images/iphone15pm.png', colors: ['Black', 'White', 'Blue', 'Natural'], selectedColor: 'Black', type: 'New Release' },
		{ name: 'Iphone 15 Pro (256 GB)', price: 59990, qty: 0, img: 'images/iphone15pro.png', colors: ['Black', 'White', 'Blue', 'Natural'], selectedColor: 'Black', type: 'New Release' },
		{ name: 'Iphone 15 Plus (256 GB)', price: 66990, qty: 0, img: 'images/iphone15plus.png', colors: ['Blue', 'Pink', 'Yellow', 'Green', 'Black'], selectedColor: 'Blue', type: 'New Release' },
		{ name: 'Iphone 14 (256 GB)', price: 52990, qty: 0, img: 'images/iphone 14.png', colors: ['Midnight', 'Starlight', 'Purple', 'Blue', 'Red', 'Yellow'], selectedColor: 'Midnight', type: 'Old Model' },
		{ name: 'Iphone 13 (128 GB)', price: 37990, qty: 0, img: 'images/iphone13.png', colors: ['Pink', 'Blue', 'Midnight', 'Starlight', 'Green', 'Red'], selectedColor: 'Pink', type: 'Best Seller' },
		{ name: 'Iphone 13 Pro Max (256 GB)', price: 58990, qty: 0, img: 'images/iphone13promax.webp', colors: ['Graphite', 'Gold', 'Silver', 'Sierra Blue'], selectedColor: 'Graphite', type: 'Old Model' },
		{ name: 'Iphone 12 (128 GB)', price: 34990, qty: 0, img: 'images/iphone12.png', colors: ['Black', 'White', 'Purple', 'Green', 'Blue', 'Red'], selectedColor: 'Black', type: 'Best Seller' },
		{ name: 'Iphone 12 Mini (128GB)', price: 25000, qty: 0, img: 'images/iphone12mini.webp', colors: ['Black', 'White', 'Blue', 'Green', 'Purple', 'Red'], selectedColor: 'Black', type: 'Old Model' },
		{ name: 'Iphone 12 Pro Max (128 GB)', price: 70990, qty: 0, img: 'images/iphone12pm.webp', colors: ['Gold', 'Silver', 'Graphite', 'Pacific Blue'], selectedColor: 'Gold', type: 'Old Model' },
		{ name: 'Iphone 11 (128 GB)', price: 24990, qty: 0, img: 'images/iphone11.png', colors: ['Black', 'White', 'Purple', 'Yellow', 'Green', 'Red'], selectedColor: 'Black', type: 'Best Seller' },
		{ name: 'Iphone Xr (128 GB)', price: 15500, qty: 0, img: 'images/iphonexr.jpg', colors: ['Black', 'Red', 'White', 'Coral', 'Blue', 'Yellow'], selectedColor: 'Black', type: 'Old Model' },
		{ name: 'Iphone X (64 GB)', price: 11500, qty: 0, img: 'images/iphonex.png', colors: ['Black', 'Silver', 'Space Gray'], selectedColor: 'Black', type: 'Old Model' },
		{ name: 'Iphone Xs Max (64 GB)', price: 12990, qty: 0, img: 'images/iphonexsmax.png', colors: ['Gold', 'Black', 'Silver'], selectedColor: 'Gold', type: 'Old Model' },
		{ name: 'Iphone 8 Plus (64 GB)', price: 7500, qty: 0, img: 'images/iphone8plus.webp', colors: ['Black', 'Gold', 'Silver', 'Product Red'], selectedColor: 'Black', type: 'Old Model' },
		{ name: 'Iphone 7 Plus (64 GB)', price: 6500, qty: 0, img: 'images/iphone7plus.webp', colors: ['Black', 'Jet Black', 'Gold', 'Rose Gold', 'Silver', 'Red'], selectedColor: 'Black', type: 'Old Model' },
		{ name: 'Iphone 8 (64 GB)', price: 5000, qty: 0, img: 'images/iphone8.webp', colors: ['Space Gray', 'Silver', 'Gold', 'Product Red'], selectedColor: 'Space Gray', type: 'Old Model' },
	];
	// Reset all quantities, then apply URL selection if present
	window.addEventListener('DOMContentLoaded', function() {
		for (let i = 0; i < cartData.length; i++) cartData[i].qty = 0;
		try {
			const params = new URLSearchParams(window.location.search);
			const prod = params.get('product');
			const color = params.get('color');
			const normalizeName = (s) => s ? s
				.replace(/[\u00A0\u202F\u2007]/g, ' ')
				.replace(/\(\s*(\d+)\s*GB\s*\)/i, ' ($1 GB)')
				.replace(/\s+/g, ' ')
				.trim() : '';
			if (prod) {
				// Find product by normalized exact match first, fallback to case-insensitive
				const normProd = normalizeName(prod);
				let idx = cartData.findIndex(p => normalizeName(p.name) === normProd);
				if (idx === -1) {
					const target = normProd.toLowerCase();
					idx = cartData.findIndex(p => normalizeName(p.name).toLowerCase() === target);
				}
				if (idx !== -1) {
					if (color && Array.isArray(cartData[idx].colors) && cartData[idx].colors.includes(color)) {
						cartData[idx].selectedColor = color;
					}
					cartData[idx].qty = 1;
					// Collapse lists by default
					window.cartShowAll = false;
					window.summaryShowAll = false;
				}
			}
		} catch (e) { /* no-op */ }
		renderCart();
	});
	let appliedDiscount = { type: null, value: 0, code: '' };
	window.summaryShowAll = window.summaryShowAll === true;
	function renderCart() {
		const visibleItems = cartData.filter(i => i.qty > 0);
		let itemsHtml = '<div class="cart-items-container" style="display:grid; grid-template-columns: repeat(2, minmax(0,1fr)); gap:16px;">';
	let showAll = window.cartShowAll === true;
	let itemsToShow = showAll ? cartData : cartData.slice(0, 6);
	let seeLessInserted = false;
	let deferSeeLessNextCell = false; // when 7 Plus is in left column
	// Always show See Less if showAll is true and there are more than 6 items
		for (let idx = 0; idx < itemsToShow.length; idx++) {
			const item = itemsToShow[idx];
			if (typeof item.qty !== 'number') continue;
			let colorOptions = item.colors.map(color => `<option value="${color}"${item.selectedColor === color ? ' selected' : ''}>${color}</option>`).join('');
			const qty = item.qty;
			itemsHtml += `
				<div class="cart-item-row" data-idx="${idx}" style="cursor:pointer;">
					<img class="cart-item-img" src='${item.img}' alt='${item.name}'>
					<div class="cart-item-details-vertical">
						<div class="cart-item-info">
							<div class="cart-item-name">${item.name.replace(/\(([^)]+)\)/, '').trim()}</div>
							<div class="cart-item-gb" style="font-size:0.92rem; color:#555; font-weight:500;">${(item.name.match(/\(([^)]+)\)/) ? item.name.match(/\(([^)]+)\)/)[1] : '')}</div>
						</div>
						<div style="margin: 0 12px 0 0; display:flex; align-items:center;">
							<label style="font-size:0.8rem; color:#666; margin-right:6px;">Color:</label>
							<select class="color-select" data-idx="${idx}" style="font-size:0.9rem; padding:2px 8px; border-radius:4px; border:1px solid #bbb;">
								${colorOptions}
							</select>
						</div>
						<div class="cart-item-price" style="font-size:1.08rem; font-weight:700; color:#111; min-width:90px; text-align:right;">₱${item.price.toLocaleString()}</div>
						<div class="cart-item-qty-row" style="margin-left:12px;">
							<button class="cart-item-qty-btn" data-idx="${idx}" data-action="minus">-</button>
							<input class="cart-item-qty-input" type='text' value='${qty}' readonly>
							<button class="cart-item-qty-btn" data-idx="${idx}" data-action="plus">+</button>
						</div>
					</div>
				</div>`;
			// If a deferred insertion was requested (7 Plus in left column), insert See Less now under left column
			if (showAll && cartData.length > 6 && deferSeeLessNextCell && !seeLessInserted) {
				itemsHtml += `<div class="cart-item-row" style="cursor:auto; display:flex; justify-content:flex-start; align-items:center; padding:10px 0; gap:0; grid-column: 1;">
					<button id="see-less-btn" style="margin:0; padding:10px 18px; border:1px solid #000; background:#000; color:#fff; border-radius:8px; cursor:pointer; font-weight:600; display:inline-block; height:auto; line-height:normal; white-space:nowrap;">See Less</button>
				</div>`;
				seeLessInserted = true;
				deferSeeLessNextCell = false;
			}

			// When expanded, insert See Less aligned under 'Iphone 7 Plus'
			if (showAll && cartData.length > 6 && !seeLessInserted) {
				const nameOnly = item.name.replace(/\(([^)]+)\)/, '').trim().toLowerCase();
				if (nameOnly.indexOf('iphone 7 plus') !== -1) {
					// Determine column (2-column grid): idx % 2 === 0 => left column; 1 => right column
					if ((idx % 2) === 0) {
						// Defer insertion to the next cell so it lands on the next row, left column
						deferSeeLessNextCell = true;
					} else {
						// Insert immediately in right column under the 7 Plus cell
						itemsHtml += `<div class="cart-item-row" style="cursor:auto; display:flex; justify-content:flex-start; align-items:center; padding:10px 0; gap:0; grid-column: 2;">
							<button id="see-less-btn" style="margin:0; padding:10px 18px; border:1px solid #000; background:#000; color:#fff; border-radius:8px; cursor:pointer; font-weight:600; display:inline-block; height:auto; line-height:normal; white-space:nowrap;">See Less</button>
						</div>`;
						seeLessInserted = true;
					}
				}
			}
		}
		if (!showAll && cartData.length > 6) {
			itemsHtml += `<div class="cart-item-row" style="cursor:auto; display:flex; justify-content:flex-start; align-items:center; padding:10px 0; gap:0; grid-column: 1;">
				<button id="see-more-btn" style="margin:0; padding:10px 18px; border:1px solid #000; background:#000; color:#fff; border-radius:8px; cursor:pointer; font-weight:600; display:inline-block; height:auto; line-height:normal; white-space:nowrap;">See More</button>
			</div>`;
		}
		if (showAll && cartData.length > 6 && !seeLessInserted) {
			// Fallback: if 'Iphone 7 Plus' not found, keep at bottom but in-column width, left-aligned in left column
			itemsHtml += `<div class="cart-item-row" style="cursor:auto; display:flex; justify-content:flex-start; align-items:center; padding:10px 0; gap:0; grid-column: 1;">
				<button id="see-less-btn" style="margin:0; padding:10px 18px; border:1px solid #000; background:#000; color:#fff; border-radius:8px; cursor:pointer; font-weight:600; display:inline-block; height:auto; line-height:normal; white-space:nowrap;">See Less</button>
			</div>`;
		}
		itemsHtml += '</div>';
		document.getElementById('cart-items').innerHTML = itemsHtml;
		document.getElementById('cart-item-count').textContent = `${visibleItems.length} items`;
		// Add Remove All button to summary if not present
		let summary = document.querySelector('.cart-right > div');
		if (summary && !document.getElementById('remove-all-btn')) {
			let removeBtn = document.createElement('button');
			removeBtn.id = 'remove-all-btn';
			removeBtn.className = 'see-more-btn';
			removeBtn.style.marginTop = '18px';
			removeBtn.innerHTML = '<i class=""></i>Remove Item';
			removeBtn.onclick = function() {
				for (let i = 0; i < cartData.length; i++) cartData[i].qty = 0;
				renderCart();
			};
			summary.appendChild(removeBtn);
		}
		// Bind black "Add to cart" button (#checkout-btn) to post selected items to cart.php
		const checkoutBtn = document.getElementById('checkout-btn');
		if (checkoutBtn && !checkoutBtn.dataset.boundToCart) {
			checkoutBtn.dataset.boundToCart = '1';
			checkoutBtn.onclick = function() {
				const items = cartData.filter(i => i.qty > 0).map(i => ({
					name: i.name,
					gb: (i.name.match(/\(([^)]+)\)/) ? i.name.match(/\(([^)]+)\)/)[1] : ''),
					color: i.selectedColor,
					price: i.price,
					qty: i.qty,
					img: i.img
				}));
				if (!items.length) { alert('Please add an item first.'); return; }
				const form = document.getElementById('toCartForm');
				const input = document.getElementById('cart_payload');
				if (form && input) { input.value = JSON.stringify(items); form.submit(); }
			};
		}
		// Summary
		let total = cartData.reduce((sum, item) => sum + (item.qty > 0 ? item.price * item.qty : 0), 0);
		let discountAmount = 0;
		if (appliedDiscount.type === 'percent') {
			discountAmount = total * appliedDiscount.value;
		} else if (appliedDiscount.type === 'fixed') {
			discountAmount = appliedDiscount.value;
		}
		// Attach see more/less event
		setTimeout(() => {
			const seeMoreBtn = document.getElementById('see-more-btn');
			if (seeMoreBtn) {
				seeMoreBtn.onclick = function() {
					window.cartShowAll = true;
					renderCart();
				};
			}
			const seeLessBtn = document.getElementById('see-less-btn');
			if (seeLessBtn) {
				seeLessBtn.onclick = function() {
					window.cartShowAll = false;
					renderCart();
				};
			}
		}, 0);
		if (discountAmount > total) discountAmount = total;
	let discountedTotal = total - discountAmount;
		document.getElementById('summary-items-count').textContent = visibleItems.length;
		document.getElementById('summary-items').textContent = `₱${total.toLocaleString()}`;
		document.getElementById('summary-total').textContent = `₱${(discountedTotal).toLocaleString()}`;
		// Show item info in summary (horizontal rows), with See More / See Less
		let detailsDiv = document.getElementById('summary-item-details');
		const itemsForSummary = window.summaryShowAll ? visibleItems : visibleItems.slice(0, 3);
		if (visibleItems.length > 0) {
			const rows = itemsForSummary.map(item => {
				const nameOnly = item.name.replace(/\(([^)]+)\)/, '').trim();
				const gb = (item.name.match(/\(([^)]+)\)/) ? item.name.match(/\(([^)]+)\)/)[1] : '');
				return `
				<div class="summary-item-row" style="display:flex; align-items:center; justify-content:space-between; gap:12px; padding:6px 0;">
					<div style="display:flex; align-items:center; gap:10px; min-width:0;">
						<img src="${item.img}" alt="" style="width:28px; height:28px; object-fit:contain; border-radius:4px; border:1px solid #eee;">
						<span style='font-weight:600; color:#111;'>${nameOnly}</span>
						<span style='color:#555;'>${gb}</span>
						<span style="color:#888;">Color: ${item.selectedColor}</span>
					</div>
					<div style="display:flex; align-items:center; gap:10px; flex-shrink:0;">
						<span style='color:#222; font-weight:700;'>₱${item.price.toLocaleString()}</span>
						<span style='color:#222;'>x${item.qty}</span>
					</div>
				</div>`;
			}).join('');
			let toggle = '';
			if (!window.summaryShowAll && visibleItems.length > 3) {
				toggle = `<div style="width:100%; display:flex; justify-content:center;">
					<button id="summary-see-more" style="margin-top:8px; border:none; background:transparent; padding:0; box-shadow:none; color:#007bff; text-decoration:underline; cursor:pointer; font-weight:600;">See More</button>
				</div>`;
			} else if (window.summaryShowAll && visibleItems.length > 3) {
				toggle = `<div style="width:100%; display:flex; justify-content:center;">
					<button id="summary-see-less" style="margin-top:8px; border:none; background:transparent; padding:0; box-shadow:none; color:#007bff; text-decoration:underline; cursor:pointer; font-weight:600;">See Less</button>
				</div>`;
			}
			detailsDiv.innerHTML = rows + toggle;
			// Attach summary toggle handlers
			setTimeout(() => {
				const more = document.getElementById('summary-see-more');
				if (more) {
					more.onclick = function() { window.summaryShowAll = true; renderCart(); };
				}
				const less = document.getElementById('summary-see-less');
				if (less) {
					less.onclick = function() { window.summaryShowAll = false; renderCart(); };
				}
			}, 0);
			// Apply scroll behavior when expanded
			if (visibleItems.length > 3) {
				if (window.summaryShowAll) {
					detailsDiv.style.maxHeight = '240px';
					detailsDiv.style.overflowY = 'auto';
					detailsDiv.style.paddingRight = '4px';
				} else {
					detailsDiv.style.maxHeight = 'none';
					detailsDiv.style.overflowY = 'visible';
					detailsDiv.style.paddingRight = '';
				}
			} else {
				detailsDiv.style.maxHeight = 'none';
				detailsDiv.style.overflowY = 'visible';
				detailsDiv.style.paddingRight = '';
			}
		} else {
			detailsDiv.innerHTML = '';
		}
	// Shipping and discountDiv removed as shipping/coupon are not shown
	}

	// Color selection modal logic
	let pendingColorIdx = null;
	function openColorModal(idx) {
		pendingColorIdx = idx;
		const item = cartData[idx];
		const container = document.getElementById('color-modal');
		const info = document.getElementById('color-modal-item');
		const select = document.getElementById('color-modal-select');
		if (!item || !container || !info || !select) return;
		info.innerHTML = `<img src="${item.img}" alt="" style="width:36px; height:36px; object-fit:contain; border-radius:6px; border:1px solid #eee;">`+
						 `<div style="display:flex; flex-direction:column;">`+
						 `<span style="font-weight:700; color:#111;">${item.name.replace(/\(([^)]+)\)/, '').trim()}</span>`+
						 `<span style="color:#666; font-size:0.9rem;">${(item.name.match(/\(([^)]+)\)/) ? item.name.match(/\(([^)]+)\)/)[1] : '' )}</span>`+
						 `</div>`;
		select.innerHTML = item.colors.map(c => `<option value="${c}" ${c === item.selectedColor ? ' selected' : ''}>${c}</option>`).join('');
		container.style.display = 'flex';
		// Focus select for quick choice
		setTimeout(() => select.focus(), 0);
	}
	function closeColorModal() {
		const container = document.getElementById('color-modal');
		if (container) container.style.display = 'none';
		pendingColorIdx = null;
	}

	// Wire modal buttons and backdrop click
	document.addEventListener('DOMContentLoaded', () => {
		const modal = document.getElementById('color-modal');
		const btnClose = document.getElementById('color-modal-close');
		const btnCancel = document.getElementById('color-modal-cancel');
		const btnConfirm = document.getElementById('color-modal-confirm');
		const select = document.getElementById('color-modal-select');
		if (modal) {
			modal.addEventListener('click', (e) => {
				if (e.target === modal) closeColorModal();
			});
		}
		if (btnClose) btnClose.onclick = closeColorModal;
		if (btnCancel) btnCancel.onclick = closeColorModal;
		if (btnConfirm) btnConfirm.onclick = () => {
			if (pendingColorIdx == null) return closeColorModal();
			const idx = pendingColorIdx;
			const chosen = select ? select.value : null;
			if (chosen) {
				cartData[idx].selectedColor = chosen;
				cartData[idx].qty = 1;
				window.cartShowAll = false;
				renderCart();
			}
			closeColorModal();
		};
		document.addEventListener('keydown', (e) => {
			if (e.key === 'Escape') closeColorModal();
		});
	});

	document.addEventListener('click', function(e) {
		// Add 1 to item if cart-item-row is clicked (but not on plus/minus or color select)
		const row = e.target.closest('.cart-item-row');
		if (row && !e.target.classList.contains('cart-item-qty-btn') && !e.target.classList.contains('color-select')) {
			const idx = +row.dataset.idx;
			// Require color selection via modal before adding
			openColorModal(idx);
			return;
		}
		if (e.target.classList.contains('cart-item-qty-btn')) {
			const idx = +e.target.dataset.idx;
			const action = e.target.dataset.action;
			if (action === 'plus') {
				cartData[idx].qty++;
			} else if (action === 'minus') {
				if (cartData[idx].qty > 1) {
					cartData[idx].qty--;
				} else {
					cartData[idx].qty = 0; // Remove from summary if qty goes to 0
				}
			}
			window.cartShowAll = false;
			renderCart();
		}
		// Remove button in summary only; do nothing here
	});
	document.addEventListener('change', function(e) {
		if (e.target.classList.contains('color-select')) {
			const idx = +e.target.dataset.idx;
			const selectedColor = e.target.value;
			// If the selected color is already present as a separate cart entry, just increase its qty
			let existingIdx = cartData.findIndex((item, i) => i !== idx && item.name === cartData[idx].name && item.selectedColor === selectedColor && item.qty > 0);
			if (existingIdx !== -1) {
				// If the current item has qty, add it to the existing color and set this one to 0
				cartData[existingIdx].qty += cartData[idx].qty;
				cartData[idx].qty = 0;
			} else {
				// Otherwise, duplicate the item with the new color if not already in cart
				if (cartData[idx].qty > 0) {
					cartData.push({ ...cartData[idx], selectedColor, qty: cartData[idx].qty });
					cartData[idx].qty = 0;
				} else {
					cartData[idx].selectedColor = selectedColor;
				}
			}
			renderCart();
		}
	});
	document.getElementById('apply-coupon').addEventListener('click', function() {
		const code = document.getElementById('coupon-input').value.trim().toUpperCase();
		if (code === 'SAVE10') {
			appliedDiscount = { type: 'percent', value: 0.10, code: 'SAVE10' };
			alert('10% discount applied!');
		} else if (code === 'IPHONE500') {
			appliedDiscount = { type: 'fixed', value: 500, code: 'IPHONE500' };
			alert('₱500 discount applied!');
		} else {
			appliedDiscount = { type: null, value: 0, code: '' };
			alert('Invalid or unsupported code.');
		}
		renderCart();
	});
	renderCart();
	</script>
	<script>
	// Header cart routing -> cart.php (capture-phase to win against other handlers)
	document.addEventListener('click', function(e) {
		// Limit to header/nav/sidenav regions only
		var inHeader = e.target.closest('header, .header, nav, .navbar, #navbar, #mySidenav');
		if (!inHeader) return;

		var el = e.target.closest('a, button, i, span, div');
		if (!el) return;

		var cls = (el.className || '').toString().toLowerCase();
		var idv = (el.id || '').toString().toLowerCase();
		var aria = ((el.getAttribute && el.getAttribute('aria-label')) || '').toLowerCase();
		var title = ((el.getAttribute && el.getAttribute('title')) || '').toLowerCase();
		var href = ((el.getAttribute && el.getAttribute('href')) || '').toLowerCase();

		// Already points to cart.php -> let browser handle it
		if (href && href.indexOf('cart.php') !== -1) return;

		// Check if element or its icon ancestry looks like a cart trigger
		var iconAncestor = el.closest && el.closest('.fa-shopping-cart, .bi-cart, .ti-shopping-cart, .mdi-cart, .icon-cart');
		var looksLikeCart = (
			idv.indexOf('cart') !== -1 ||
			cls.indexOf('cart') !== -1 ||
			aria.indexOf('cart') !== -1 ||
			title.indexOf('cart') !== -1 ||
			!!iconAncestor
		);

		if (looksLikeCart) {
			e.preventDefault();
			window.location.href = 'cart.php';
		}
	}, true);
	</script>
	<script>
	function openNav() { var el = document.getElementById('mySidenav'); if (el) el.style.width = '250px'; }
	function closeNav() { var el = document.getElementById('mySidenav'); if (el) el.style.width = '0'; }
	</script>
	</html>
<!-- Hidden form to send selected items to cart.php -->
<form id="toCartForm" action="cart.php" method="POST" style="display:none;">
  <input type="hidden" name="cart_payload" id="cart_payload" value="">
</form>
<script>
// keep openNav/closeNav if not already defined elsewhere
if (typeof openNav !== 'function') {
  function openNav() { var el = document.getElementById('mySidenav'); if (el) el.style.width = '250px'; }
}
if (typeof closeNav !== 'function') {
  function closeNav() { var el = document.getElementById('mySidenav'); if (el) el.style.width = '0'; }
}
</script>