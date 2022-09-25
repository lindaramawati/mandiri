<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Hos - Olshop Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/jpg" sizes="16x16" href="./images/mandiri.jpg">
    <link href="./vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="./vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/mandiri.jpg" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
								<div class="input-group search-area d-lg-inline-flex d-none">
									<input type="text" class="form-control" placeholder="Search here...">
									<div class="input-group-append">
										<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
									</div>
								</div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="javascript:void(0)" role="button" data-toggle="dropdown">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.75 15.8385V13.0463C22.7471 10.8855 21.9385 8.80353 20.4821 7.20735C19.0258 5.61116 17.0264 4.61555 14.875 4.41516V2.625C14.875 2.39294 14.7828 2.17038 14.6187 2.00628C14.4546 1.84219 14.2321 1.75 14 1.75C13.7679 1.75 13.5454 1.84219 13.3813 2.00628C13.2172 2.17038 13.125 2.39294 13.125 2.625V4.41534C10.9736 4.61572 8.97429 5.61131 7.51794 7.20746C6.06159 8.80361 5.25291 10.8855 5.25 13.0463V15.8383C4.26257 16.0412 3.37529 16.5784 2.73774 17.3593C2.10019 18.1401 1.75134 19.1169 1.75 20.125C1.75076 20.821 2.02757 21.4882 2.51969 21.9803C3.01181 22.4724 3.67904 22.7492 4.375 22.75H9.71346C9.91521 23.738 10.452 24.6259 11.2331 25.2636C12.0142 25.9013 12.9916 26.2497 14 26.2497C15.0084 26.2497 15.9858 25.9013 16.7669 25.2636C17.548 24.6259 18.0848 23.738 18.2865 22.75H23.625C24.321 22.7492 24.9882 22.4724 25.4803 21.9803C25.9724 21.4882 26.2492 20.821 26.25 20.125C26.2486 19.117 25.8998 18.1402 25.2622 17.3594C24.6247 16.5786 23.7374 16.0414 22.75 15.8385ZM7 13.0463C7.00232 11.2113 7.73226 9.45223 9.02974 8.15474C10.3272 6.85726 12.0863 6.12732 13.9212 6.125H14.0788C15.9137 6.12732 17.6728 6.85726 18.9703 8.15474C20.2677 9.45223 20.9977 11.2113 21 13.0463V15.75H7V13.0463ZM14 24.5C13.4589 24.4983 12.9316 24.3292 12.4905 24.0159C12.0493 23.7026 11.716 23.2604 11.5363 22.75H16.4637C16.284 23.2604 15.9507 23.7026 15.5095 24.0159C15.0684 24.3292 14.5411 24.4983 14 24.5ZM23.625 21H4.375C4.14298 20.9999 3.9205 20.9076 3.75644 20.7436C3.59237 20.5795 3.50014 20.357 3.5 20.125C3.50076 19.429 3.77757 18.7618 4.26969 18.2697C4.76181 17.7776 5.42904 17.5008 6.125 17.5H21.875C22.571 17.5008 23.2382 17.7776 23.7303 18.2697C24.2224 18.7618 24.4992 19.429 24.5 20.125C24.4999 20.357 24.4076 20.5795 24.2436 20.7436C24.0795 20.9076 23.857 20.9999 23.625 21Z" fill="#007A64"/>
									</svg>
									<span class="badge light text-white bg-primary">3</span>
                                </a>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
									<!-- <div class="header-info">
										<span class="text-black">Hello,<strong>Franklin</strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div> -->
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profil </span>
                                    </a>
                                    <a href="Login.php" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="Welcome.php">Dashboard</a></li>
							<li><a href="mitra.php">Mitra</a></li>
							<li><a href="patient-details.html">Mitra Detail</a></li>
							<li><a href="reviews.html">Review</a></li>
						</ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="./app-profile.html">Profile</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="./ecom-product-grid.html">Product Grid</a></li>
									<li><a href="./ecom-product-list.html">Product List</a></li>
									<li><a href="./ecom-product-detail.html">Product Details</a></li>
									<li><a href="./ecom-product-order.html">Order</a></li>
									<li><a href="./ecom-checkout.html">Checkout</a></li>
									<li><a href="./ecom-invoice.html">Invoice</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href=login.php>Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
				
				<div class="copyright">
					<p><strong>Welly Online Shop Admin Dashboard</strong> © 2022 All Rights Reserved</p>
					<p>Made with ♥ by Tim UNS CV Mandiri Asta Kencana</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="form-head d-flex align-items-center mb-sm-4 mb-3">
					<div class="mr-auto">
						<h2 class="text-black font-w600">Dashboard</h2>
						<p class="mb-0">Online Shop Admin Dashboard</p>
					</div>
					<a href="javascript:void(0)" class="btn btn-outline-primary"><i class="las la-cog scale5 mr-3"></i>Customize Layout</a>
				</div>
				<div class="row">
					<div class="col-xl-3 col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">76</h2>
										<span>Total Mitra</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M32.04 4.08H31.24V2.04C31.24 0.8 30.4 0 29.2 0C28 0 27.16 0.8 27.16 2.04V4.08H13.88V2.04C13.88 0.8 13.08 0 11.84 0C10.6 0 9.80002 0.8 9.80002 2.04V4.08H7.96002C4.08002 4.08 0.800018 7.36 0.800018 11.24V32.88C0.800018 36.76 4.08002 40.04 7.96002 40.04H32.04C35.92 40.04 39.2 36.76 39.2 32.88V11.24C39.2 7.36 35.92 4.08 32.04 4.08ZM7.96002 8.16H32.04C33.68 8.16 35.12 9.6 35.12 11.24V14.08H4.88002V11.24C4.88002 9.6 6.32002 8.16 7.96002 8.16ZM32.04 35.92H7.96002C6.32002 35.92 4.88002 34.48 4.88002 32.84V18.16H35.08V32.84C35.12 34.48 33.68 35.92 32.04 35.92Z" fill="#007A64"/>
										<path d="M16.12 20.6H14.48C13.44 20.6 12.84 21.4 12.84 22.24V24.08C12.84 25.12 13.64 25.72 14.48 25.72H16.12C17.16 25.72 17.76 24.92 17.76 24.08V22.44C17.96 21.44 17.16 20.6 16.12 20.6Z" fill="#007A64"/>
										<path d="M25.52 20.6H23.88C22.84 20.6 22.24 21.4 22.24 22.24V24.08C22.24 25.12 23.04 25.72 23.88 25.72H25.52C26.56 25.72 27.16 24.92 27.16 24.08V22.44C27.16 21.44 26.32 20.6 25.52 20.6Z" fill="#007A64"/>
										<path d="M16.12 28.56H14.48C13.44 28.56 12.84 29.36 12.84 30.2V31.84C12.84 32.88 13.64 33.48 14.48 33.48H16.12C17.16 33.48 17.76 32.68 17.76 31.84V30.2C17.96 29.4 17.16 28.56 16.12 28.56Z" fill="#007A64"/>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="40" height="40" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">124</h2>
										<span>Total Produk</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M28.0053 2.00495C25.0652 1.92104 22.2028 2.90688 20.0059 4.76001C17.8089 2.90688 14.9465 1.92104 12.0064 2.00495C10.2879 1.99938 8.58941 2.3549 7.03328 3.04589C5.47716 3.73689 4.10208 4.74618 3.00704 6.00112C1.10117 8.19152 -0.89469 12.1574 0.427219 18.6225C2.53907 28.9417 18.358 37.4115 19.0259 37.7601C19.3237 37.9174 19.659 38 19.9999 38C20.3408 38 20.676 37.9174 20.9738 37.7601C21.6478 37.4058 37.4667 28.936 39.5725 18.6225C40.8944 12.1574 38.9006 8.201 36.9947 6.00112C35.9009 4.74722 34.5275 3.73852 32.9732 3.04756C31.4188 2.35659 29.7222 2.00052 28.0053 2.00495ZM35.6608 17.9006C34.1709 25.1899 23.3456 31.9715 20.0099 33.908C16.6741 31.9715 5.84885 25.1918 4.35895 17.9006C3.33302 12.8869 4.73692 9.97454 6.09683 8.41322C6.81663 7.59033 7.71988 6.92874 8.74167 6.47597C9.76346 6.0232 10.8784 5.79049 12.0064 5.79458C13.2101 5.70905 14.4167 5.9205 15.5084 6.40832C16.6002 6.89614 17.5399 7.64369 18.236 8.57806C18.4065 8.87653 18.6585 9.12614 18.9656 9.3008C19.2727 9.47546 19.6237 9.56876 19.9819 9.57095H20.0059C20.3619 9.56861 20.7109 9.47734 21.0178 9.30634C21.3247 9.13534 21.5786 8.89067 21.7537 8.59701C22.4489 7.65541 23.391 6.90174 24.4873 6.4103C25.5836 5.91887 26.7961 5.70665 28.0053 5.79458C29.1347 5.78937 30.2512 6.02153 31.2744 6.47434C32.2977 6.92716 33.2022 7.58934 33.9229 8.41322C35.2788 9.97454 36.6827 12.8869 35.6568 17.9006H35.6608Z" fill="#007A64"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">500</h2>
										<span>Total Pemesanan</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M38.3334 16.6667C38.3384 15.7489 38.0907 14.8474 37.6174 14.061C37.1441 13.2746 36.4635 12.6337 35.6501 12.2084C34.8368 11.7832 33.9221 11.59 33.0062 11.6501C32.0904 11.7101 31.2087 12.0211 30.4579 12.5489C29.707 13.0768 29.116 13.8011 28.7494 14.6426C28.3829 15.484 28.2551 16.4101 28.3799 17.3194C28.5047 18.2287 28.8774 19.0861 29.4572 19.7976C30.0369 20.5092 30.8014 21.0474 31.6667 21.3534V26.6667C31.6667 28.8768 30.7887 30.9964 29.2259 32.5592C27.6631 34.122 25.5435 35 23.3334 35C21.1232 35 19.0036 34.122 17.4408 32.5592C15.878 30.9964 15 28.8768 15 26.6667V24.8667C17.7735 24.4643 20.3097 23.0778 22.1456 20.9604C23.9815 18.8429 24.9947 16.1359 25 13.3334V3.33335C25 2.89133 24.8244 2.4674 24.5119 2.15484C24.1993 1.84228 23.7754 1.66669 23.3334 1.66669H18.3334C17.8913 1.66669 17.4674 1.84228 17.1548 2.15484C16.8423 2.4674 16.6667 2.89133 16.6667 3.33335C16.6667 3.77538 16.8423 4.1993 17.1548 4.51186C17.4674 4.82443 17.8913 5.00002 18.3334 5.00002H21.6667V13.3334C21.6667 15.5435 20.7887 17.6631 19.2259 19.2259C17.6631 20.7887 15.5435 21.6667 13.3334 21.6667C11.1232 21.6667 9.0036 20.7887 7.4408 19.2259C5.87799 17.6631 5.00002 15.5435 5.00002 13.3334V5.00002H8.33335C8.77538 5.00002 9.1993 4.82443 9.51186 4.51186C9.82442 4.1993 10 3.77538 10 3.33335C10 2.89133 9.82442 2.4674 9.51186 2.15484C9.1993 1.84228 8.77538 1.66669 8.33335 1.66669H3.33335C2.89133 1.66669 2.4674 1.84228 2.15484 2.15484C1.84228 2.4674 1.66669 2.89133 1.66669 3.33335V13.3334C1.67205 16.1359 2.68517 18.8429 4.52109 20.9604C6.357 23.0778 8.89322 24.4643 11.6667 24.8667V26.6667C11.6667 29.7609 12.8959 32.7283 15.0838 34.9163C17.2717 37.1042 20.2392 38.3334 23.3334 38.3334C26.4275 38.3334 29.395 37.1042 31.5829 34.9163C33.7709 32.7283 35 29.7609 35 26.6667V21.3534C35.9723 21.0132 36.8152 20.3797 37.4122 19.5403C38.0093 18.7008 38.3311 17.6968 38.3334 16.6667Z" fill="#007A64"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3  col-sm-6">
						<div class="card">
							<div class="card-body">
								<div class="media align-items-center">
									<div class="media-body mr-3">
										<h2 class="fs-34 text-black font-w600">200</h2>
										<span>Total Pengiriman</span>
									</div>
									<svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.7 39.9993C15.8603 40.0123 18.0017 39.5921 20 38.763C21.9962 39.5991 24.139 40.0196 26.3 39.9993C32.861 39.9993 38 36.463 38 31.9467V24.4159C38 19.8996 32.861 16.3633 26.3 16.3633C25.9958 16.3633 25.697 16.3779 25.4 16.3943V7.87804C25.4 3.45448 20.261 0 13.7 0C7.139 0 2 3.45448 2 7.87804V32.1213C2 36.5448 7.139 39.9993 13.7 39.9993ZM34.4 31.9467C34.4 34.0358 31.0736 36.363 26.3 36.363C21.5264 36.363 18.2 34.0358 18.2 31.9467V30.2649C20.6376 31.7624 23.4476 32.5262 26.3 32.4667C29.1524 32.5262 31.9624 31.7624 34.4 30.2649V31.9467ZM26.3 19.9996C31.0736 19.9996 34.4 22.3269 34.4 24.4159C34.4 26.505 31.0736 28.8304 26.3 28.8304C21.5264 28.8304 18.2 26.5032 18.2 24.4159C18.2 22.3287 21.5264 19.9996 26.3 19.9996ZM13.7 3.6363C18.4736 3.6363 21.8 5.87262 21.8 7.87804C21.8 9.88346 18.4736 12.1216 13.7 12.1216C8.9264 12.1216 5.6 9.88528 5.6 7.87804C5.6 5.87081 8.9264 3.6363 13.7 3.6363ZM5.6 13.6034C8.04776 15.0717 10.8538 15.8181 13.7 15.7579C16.5462 15.8181 19.3522 15.0717 21.8 13.6034V16.9633C19.8383 17.4628 18.0392 18.4698 16.58 19.8851C15.6336 20.092 14.6683 20.198 13.7 20.2015C8.9264 20.2015 5.6 17.9651 5.6 15.9597V13.6034ZM5.6 21.6851C8.04828 23.1519 10.854 23.8976 13.7 23.8378C14.0204 23.8378 14.33 23.7978 14.645 23.7814C14.6182 23.9919 14.6032 24.2037 14.6 24.4159V28.2068C14.2976 28.225 14.006 28.2831 13.7 28.2831C8.9264 28.2831 5.6 26.0468 5.6 24.0396V21.6851ZM5.6 29.7649C8.04776 31.2332 10.8538 31.9796 13.7 31.9194C14.0024 31.9194 14.2994 31.8958 14.6 31.8813V31.9467C14.6258 33.4944 15.2146 34.9784 16.2542 36.1157C15.412 36.2763 14.5571 36.3591 13.7 36.363C8.9264 36.363 5.6 34.1267 5.6 32.1213V29.7649Z" fill="#007A64"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/moment.js"></script>
	<script src="vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	<script>
		$(function () {
			$('#datetimepicker1').datetimepicker({
				inline: true,
			});
		});
	</script>
</body>
</html>