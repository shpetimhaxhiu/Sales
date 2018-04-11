<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>
			SalesApp | Lista Policave
		</title>
		<meta name="description" content="Blank inner page examples">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
          WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700","Asap+Condensed:500"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
		</script>
		<!--end::Web font -->
        <!--begin::Base Styles -->
		<link href="/Sales/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
		<link href="/Sales/assets/demo/demo10/base/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Base Styles -->
		<link rel="shortcut icon" href="/Sales/assets/demo10/demo/media/img/logo/favicon.ico" />
	</head>
	<!-- end::Head -->
    <!-- end::Body -->
	<body class="m-page--fluid m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<!-- begin::Header -->
			<header class="m-grid__item		m-header "  data-minimize="minimize" data-minimize-mobile="minimize" data-minimize-offset="10" data-minimize-mobile-offset="10" >
				<div class="m-header__top">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Brand -->
							<div class="m-stack__item m-brand m-stack__item--left">
								<div class="m-stack m-stack--ver m-stack--general m-stack--inline">
									<div class="m-stack__item m-stack__item--middle m-brand__logo">
										<a href="index.html" class="m-brand__logo-wrapper">
											<h2>SalesApp</h2>
											<!-- <img alt="" src="assets/demo/demo10/media/img/logo/logo.png" class="m-brand__logo-desktop"/> -->
											<!-- <img alt="" src="assets/demo/demo10/media/img/logo/logo_mini.png" class="m-brand__logo-mobile"/> -->
										</a>
									</div>
									<div class="m-stack__item m-stack__item--middle m-brand__tools">

							<!-- BEGIN: Responsive Aside Left Menu Toggler -->
										<a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- END -->
						<!-- begin::Responsive Header Menu Toggler-->
										<a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
											<span></span>
										</a>
										<!-- end::Responsive Header Menu Toggler-->
			<!-- begin::Topbar Toggler-->
										<a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
											<i class="flaticon-more"></i>
										</a>
										<!--end::Topbar Toggler-->
									</div>
								</div>
							</div>
							<!-- end::Brand -->
				<!-- begin::Topbar -->
							<div class="m-stack__item m-stack__item--right m-header-head" id="m_header_nav">
								<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
									<div class="m-stack__item m-topbar__nav-wrapper">
										<ul class="m-topbar__nav m-nav m-nav--inline">
											<li id="m_quick_sidebar_toggle" class="m-nav__item m-nav__item--info m-nav__item--qs">
												<a href="#" class="m-nav__link m-dropdown__toggle">
													<span class="m-nav__link-icon m-nav__link-icon-alt">
														<span class="m-nav__link-icon-wrapper">
															<i class="flaticon-grid-menu"></i>
														</span>
													</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- end::Topbar -->
						</div>
					</div>
				</div>
				<div class="m-header__bottom">
					<div class="m-container m-container--fluid m-container--full-height m-page__container">
						<div class="m-stack m-stack--ver m-stack--desktop">
							<!-- begin::Horizontal Menu -->
							<div class="m-stack__item m-stack__item--fluid m-header-menu-wrapper">
								<button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
									<i class="la la-close"></i>
								</button>
								<div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-dark m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
									<ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
										<li class="m-menu__item  m-menu__item--active  m-menu__item--active-tab  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="index.html" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Dashboard
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-support"></i>
															<span class="m-menu__link-text">
																Dashboard
															</span>
														</a>
													</li>
													<li class="m-menu__item "  aria-haspopup="true">
														<a  href="index.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-file"></i>
															<span class="m-menu__link-text">
																Reports
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Accounting
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-graphic-2"></i>
															<span class="m-menu__link-text">
																Revenue
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Bills
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
										<li class="m-menu__item  m-menu__item--submenu m-menu__item--tabs"  data-menu-submenu-toggle="tab" aria-haspopup="true">
											<a  href="#" class="m-menu__link m-menu__toggle">
												<span class="m-menu__link-text">
													Reports
												</span>
												<i class="m-menu__hor-arrow la la-angle-down"></i>
												<i class="m-menu__ver-arrow la la-angle-right"></i>
											</a>
											<div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--tabs">
												<span class="m-menu__arrow m-menu__arrow--adjust"></span>
												<ul class="m-menu__subnav">
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-graphic-2"></i>
															<span class="m-menu__link-text">
																Orders
															</span>
														</a>
													</li>
													<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
														<a  href="builder.html" class="m-menu__link ">
															<i class="m-menu__link-icon flaticon-analytics"></i>
															<span class="m-menu__link-text">
																Customers
															</span>
														</a>
													</li>
												</ul>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- end::Horizontal Menu -->
						</div>
					</div>
				</div>
			</header>
			<!-- end::Header -->
