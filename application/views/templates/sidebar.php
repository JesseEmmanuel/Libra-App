<!-- START: Body-->

<!-- START: Pre Loader-->
<div class="se-pre-con">
	<div class="loader"></div>
</div>
<!-- END: Pre Loader-->

<body id="main-container" class="default semi-dark">

	<!-- START: Header-->
	<div id="header-fix" class="header fixed-top">
		<div class="site-width">
			<nav class="navbar navbar-expand-lg  p-0">
				<div class="navbar-header  h-100 h4 mb-0 align-self-center logo-bar text-left">
					<a href="<?= base_url()?>" class="horizontal-logo">
						<img src="<?= base_url()?>media/assets/images/libra-logo.png" class="img-circle pb-2">
						<span class="h5 font-weight-bold align-self-center mb-0 ml-auto text-white">LIBRA</span>
					</a>
				</div>
				<div class="navbar-right ml-auto h-100">
					<ul class="ml-auto p-0 m-0 list-unstyled d-flex top-icon h-100">
						<li class="d-inline-block align-self-center  d-block d-lg-none">
							<a href="#" class="nav-link mobilesearch" data-toggle="dropdown" aria-expanded="false"><i
									class="icon-magnifier h4"></i>
							</a>
						</li>

						<li class="dropdown align-self-center">
							<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i
									class="icon-reload h4"></i>
								<span class="badge badge-default"> <span class="ring">
									</span><span class="ring-point">
									</span> </span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right border  py-0">
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0">john</p>
												<span class="text-success">New user registered.</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author2.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0">Peter</p>
												<span class="text-success">Server #12 overloaded.</span>
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author3.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0">Bill</p>
												<span class="text-danger">Application error.</span>
											</div>
										</div>
									</a>
								</li>

								<li><a class="dropdown-item text-center py-2" href="#"> See All Tasks <i
											class="icon-arrow-right pl-2 small"></i></a></li>
							</ul>

						</li>
						<li class="dropdown align-self-center d-inline-block">
							<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false"><i
									class="icon-bell h4"></i>
								<span class="badge badge-default"> <span class="ring">
									</span><span class="ring-point">
									</span> </span>
							</a>
							<ul class="dropdown-menu dropdown-menu-right border   py-0">
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle w-50">
											<div class="media-body">
												<p class="mb-0 text-success">john send a message</p>
												12 min ago
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author2.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0 text-danger">Peter send a message</p>
												15 min ago
											</div>
										</div>
									</a>
								</li>
								<li>
									<a class="dropdown-item px-2 py-2 border border-top-0 border-left-0 border-right-0"
										href="#">
										<div class="media">
											<img src="dist/images/author3.jpg" alt=""
												class="d-flex mr-3 img-fluid rounded-circle">
											<div class="media-body">
												<p class="mb-0 text-warning">Bill send a message</p>
												5 min ago
											</div>
										</div>
									</a>
								</li>

								<li><a class="dropdown-item text-center py-2" href="#"> Read All Message <i
											class="icon-arrow-right pl-2 small"></i></a></li>
							</ul>
						</li>
						<li class="dropdown user-profile align-self-center d-inline-block">
							<a href="#" class="nav-link py-0" data-toggle="dropdown" aria-expanded="false">
								<div class="media">
									<img src="<?= base_url()?>media/assets/images/profile.png" alt=""
										class="d-flex img-fluid rounded-circle" width="29">
								</div>
							</a>
							<div class="dropdown-menu border dropdown-menu-right p-0">
								<a href="" class="dropdown-item px-2 align-self-center d-flex">
									<span class="icon-settings mr-2 h6 mb-0"></span> Profile Account</a>
								<div class="dropdown-divider"></div>
								<a href="<?php echo base_url(); ?>auth/logout"
									class="dropdown-item px-2 text-success align-self-center d-flex">
									<span class="icon-logout mr-2 h6  mb-0"></span> Sign Out</a>
							</div>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- END: Header-->

	<!-- START: Main Menu-->
	<div class="sidebar">
		<div class="site-width">
			<!-- START: Menu-->
			<ul id="side-menu" class="sidebar-menu">
				<li class="dropdown active"><a href="#"><i class="icon-home mr-1"></i> Home</a>
					<ul>
						<li class="active"><a href="<?php base_url(); ?>library"><i class="fas fa-search"></i> Browse
								for books</a></li>
						<li><a href="<?php base_url(); ?>series"><i class="fas fa-swatchbook"></i> Book Series</a></li>
						<li><a href="index-analytic.html"><i class="fas fa-star"></i> Suggested for you</a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#"><i class="fas fa-boxes mr-1"></i> Collections</a>
					<ul>
						<li class="active"><a href="index.html"><i class="fas fa-tasks"></i> Your Collections</a></li>
						<li><a href="<?php base_url(); ?>upload"><i class="fas fa-cloud-upload-alt"></i> Uploaded Books</a></li>
						<li><a href="index-analytic.html"><i class="fas fa-bookmark"></i> Bookmarks</a></li>
					</ul>
				</li>
			</ul>
			<!-- END: Menu-->
		</div>
	</div>
	<!-- END: Main Menu-->
