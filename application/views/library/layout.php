<!--- START Head--->
<?php $this->load->view('templates/head.php') ?>
<!--- END Head--->

<!--- START header & sidebar--->
<?php $this->load->view('templates/sidebar.php') ?>
<!--- END header & sidebar--->
<main>
	<div class="container-fluid site-width">
		<!--<div class="row row-eq-height">
			<div class="col-12 col-md-12 mt-3">
				<div class="card">
					<div class="card-body d-md-flex text-center">
						<h5 class="mb-0"><i class="fas fa-users"></i> Browse for Books</h5>
					</div>
				</div>
			</div>
		</div>-->
		<!-- START: Card Data-->
		<div class="row row-eq-height">
			<!--<div class="col-12 col-lg-2 mt-3 todo-menu-bar flip-menu pr-lg-0">
				<a href="#" class="d-inline-block d-lg-none mt-1 flip-menu-close"><i class="icon-close"></i></a>
				<div class="card border h-100 contact-menu-section" id="menu-box">
					<div class="card-header d-flex justify-content-between align-items-center">
					<div class="modal fade" id="editcontact">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">
										<i class="icon-pencil"></i> Edit Contact
									</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<i class="icon-close"></i>
									</button>
								</div>
								<form class="edit-contact-form">
									<div class="modal-body">

										<div class="row">
											<div class="col-md-6">
												<div class="contact-name">
													<label for="edit-contact-name" class="col-form-label">Name</label>
													<input type="text" id="edit-contact-name" class="form-control"
														required="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="contact-email">
													<label for="edit-contact-email" class="col-form-label">Email</label>
													<input type="text" id="edit-contact-email" class="form-control"
														required="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="contact-occupation">
													<label for="edit-contact-occupation"
														class="col-form-label">Occupation</label>
													<input type="text" id="edit-contact-occupation"
														class="form-control">
												</div>
											</div>

											<div class="col-md-6">
												<div class="contact-phone">
													<label for="edit-contact-phone" class="col-form-label">Phone</label>
													<input type="text" id="edit-contact-phone" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="contact-location">
													<label for="edit-contact-location"
														class="col-form-label">Location</label>
													<input type="text" id="edit-contact-location" class="form-control">
												</div>
											</div>
										</div>

									</div>
									<div class="modal-footer">
										<input type="hidden" id="edit-date">
										<button type="submit" class="btn btn-primary add-todo">Update</button>
									</div>
								</form>
							</div>
						</div>
					</div>

					<ul class="nav flex-column contact-menu">
						<li class="nav-item text-center">
							<a class="nav-link active" href="#" data-contacttype="contact">
								<div class="row justify-content-center">
									<i class="icon-list"></i>
								</div>
								<div class="row justify-content-center">
									All
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="family-contact">
								<div class="row justify-content-center">
									<i class="fas fa-feather"></i>
								</div>
								<div class="row justify-content-center">
									Literature & Arts
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="friend-contact">
								<div class="row justify-content-center">
									<i class="fas fa-cogs"></i>
								</div>
								<div class="row justify-content-center">
									Engineering
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="office-contact">
								<div class="row justify-content-center">
									<i class="fab fa-connectdevelop"></i>
								</div>
								<div class="row justify-content-center">
									Technology
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="fas fa-building"></i>
								</div>
								<div class="row justify-content-center">
									Economics
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="fas fa-cross"></i>
								</div>
								<div class="row justify-content-center">
									Theology
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="fas fa-heartbeat"></i>
								</div>
								<div class="row justify-content-center">
									Health
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="fas fa-theater-masks"></i>
								</div>
								<div class="row justify-content-center">
									Psychology
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="fas fa-rocket"></i>
								</div>
								<div class="row justify-content-center">
									General Science
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="icon-people"></i>
								</div>
								<div class="row justify-content-center">
									Social Science
								</div>
							</a>
						</li>
						<li class="nav-item text-center">
							<a class="nav-link" href="#" data-contacttype="business-contact">
								<div class="row justify-content-center">
									<i class="fas fa-braille"></i>
								</div>
								<div class="row justify-content-center">
									Others
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>-->
			<div class="col-12 col-lg-12 mt-2 pl-lg-3">
				<div class="card border h-100 contact-list-section">
					<div class="card-header border-bottom p-1 d-flex">
						<a href="#" class="d-inline-block d-lg-none flip-menu-toggle"><i class="icon-menu"></i></a>
						<input type="text" class="form-control border-0 p-2 w-100 h-100 contact-search"
							placeholder="Search ...">
						<a href="#" class="grid-style search-bar-menu border-0 active"><i class="icon-grid"></i></a>
						<a href="#" class="list-style search-bar-menu"><i class="icon-list"></i></a>
					</div>
					<div class="overflow-auto">
						<ul class="nav flex-row contact-menu mt-1" style="width:105vw;">
							<li class="nav-item text-center">
								<a class="nav-link active" href="#" data-contacttype="contact">
									<div class="row justify-content-center">
										<i class="icon-list fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										All Books
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="family-contact" id="literature-menu">
									<div class="row justify-content-center">
										<i class="fas fa-feather fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Literature & Arts
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="friend-contact" id="engineering-menu">
									<div class="row justify-content-center">
										<i class="icofont-gears fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Engineering
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="office-contact" id="technology-menu">
									<div class="row justify-content-center">
										<i class="icofont-connection fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Technology
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="economics-menu">
									<div class="row justify-content-center">
										<i class="icofont-chart-growth fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Economics
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="office-contact">
									<div class="row justify-content-center">
										<i class="icofont-quill-pen fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										History
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="theology-menu">
									<div class="row justify-content-center">
										<i class="fas fa-cross fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Theology
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="health-menu">
									<div class="row justify-content-center">
										<i class="icofont-heart-beat-alt fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Health
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="psychology-menu">
									<div class="row justify-content-center">
										<i class="icofont-brainstorming fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Psychology
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="gensci-menu">
									<div class="row justify-content-center">
										<i class="icofont-rocket fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										General Science
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="friend-contact">
									<div class="row justify-content-center">
										<i class="icofont-spoon-and-fork fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Recipes
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="socsci-menu">
									<div class="row justify-content-center">
										<i class="icofont-users-social fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Social Science
									</div>
								</a>
							</li>
							<li class="nav-item text-center">
								<a class="nav-link" href="#" data-contacttype="business-contact" id="others-menu">
									<div class="row justify-content-center">
										<i class="fas fa-braille fa-2x"></i>
									</div>
									<div class="row justify-content-center">
										Novel/Manga/Comics
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="card-body p-0 vh-100 overflow-auto">
						<div class="contacts grid">
							<div class="contact family-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-1.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Kayla Fail</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Chief
												Executive Officer</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">kf@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Washington</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact friend-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-2.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Margarita Metts</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Marketing
												Coordinator</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">mm@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Franklin</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact family-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-3.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Shirley Vu</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Medical
												Assistant</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">sv@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Arlington</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact friend-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-4.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Josef Mellott</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Web
												Developer
											</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">jm@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Centerville</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact office-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-5.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Twanna Lenhart</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Web
												Designer
											</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">tl@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Lebanon</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact family-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-6.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Eustolia Ashburn</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">President
												of
												Sales</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">ea@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Clinton</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact business-contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-7.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Rolanda Cusumano</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Project
												Manager</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">rc@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Springfield</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-8.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Morris Thibeau</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Account
												Executive</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">mt@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Georgetown</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-14.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Nisha Fraise</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Nursing
												Assistant</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">nf@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Fairview</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-10.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Brendon Schebler</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Librarian
											</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">bs@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Greenville</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-11.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">John Schebler</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Librarian
											</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">js@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">London</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
							<div class="contact">
								<div class="contact-content">
									<div class="contact-profile">
										<img src="<?php base_url() ?>media/assets/images/contact-13.jpg" alt="avatar"
											class="user-image img-fluid">
										<div class="contact-info">
											<p class="contact-name mb-0">Emily Halk</p>
											<p class="contact-position mb-0 small font-weight-bold text-muted">Librarian
											</p>
										</div>
									</div>
									<div class="contact-email">
										<p class="mb-0 small">Email: </p>
										<p class="user-email">eh@mail.com</p>
									</div>
									<div class="contact-location">
										<p class="mb-0 small">Location: </p>
										<p class="user-location">Missouri</p>
									</div>
									<div class="contact-phone">
										<p class="mb-0 small">Phone: </p>
										<p class="user-phone">+1 (020) 123-4567</p>
									</div>
									<div class="line-h-1 h5">
										<a class="text-success edit-contact" href="#" data-toggle="modal"
											data-target="#edittask"><i class="icon-pencil"></i></a>
										<a class="text-danger delete-contact" href="#"><i class="icon-trash"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<!--- START footer--->
<?php $this->load->view('templates/footer.php') ?>
<!--- END footer--->
