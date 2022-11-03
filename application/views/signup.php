<body id="main-container" class="default" style="background:white;">
	<!-- START: Main Content-->
	<main style="margin: 1vh 2vw 0vh 2vw !important;">
		<div class="container-fluid site-width">

			<!-- START: Card Data-->
			<div class="row" style="justify-content:center;">
				<div class="col-12 col-md-9">
					<div class="row" style="justify-content:center;">
						<div class="col-12 col-md-8 mt-3">
							<div class="card" id="signup-form-box" style="border:none;">
								<div class="card-header">
									<div class="row" style="justify-content:center;">
										<img src="<?= base_url()?>media/assets/images/Libra-footer.png"
											class="img-fluid " alt="Libra-Logo">
									</div>
								</div>
								<div class="card-body">
									<div class="wizard mb-4">
										<div class="connecting-line"></div>
										<ul class="nav nav-tabs d-flex mb-3">
											<li class="nav-item mr-auto">
												<a class="nav-link position-relative round-tab text-left p-0 active border-0"
													data-toggle="tab" href="#id1">
													<i class="icon-user position-relative text-white h5 mb-3"></i>
													<small class="d-none d-md-block ">Account</small>
												</a>
											</li>
											<li class="nav-item mx-auto">
												<a class="nav-link position-relative round-tab text-sm-center text-left p-0 border-0"
													data-toggle="tab" href="#id2">
													<i
														class="fas fa-briefcase position-relative text-white h5 mb-3"></i>
													<small class="d-none d-md-block">Profession</small>
												</a>
											</li>
											<li class="nav-item ml-auto">
												<a class="nav-link position-relative round-tab text-sm-right text-left p-0 border-0"
													data-toggle="tab" href="#id3">
													<i
														class="fas fa-check-circle position-relative text-white h5 mb-3"></i>
													<small class="d-none d-md-block">Confirmation</small>
												</a>
											</li>
										</ul>
										<form action="<?php echo base_url(); ?>signup/validate" method="POST" id="signup-form"
											enctype="multipart/form-data" >
											<div class="tab-content">
												<div class="tab-pane fade active show" id="id1">
													<div class="form">
														<div class="form-group">
															<label class=" ">Username</label>
															<input type="text" name="uname"
																class="form-control bg-transparent" placeholder="">
															<span id="uname_error" class="text-success"><?php echo form_error('uname'); ?></span>
														</div>
														<div class="form-group">
															<label class=" ">Password</label>
															<input type="password" name="password"
																class="form-control bg-transparent" placeholder="">
															<span id="password_error" class="text-success"><?php echo form_error('password'); ?></span>
														</div>
														<div class="form-group">
															<label class=" ">Confirm Password</label>
															<input type="password" name="re_password"
																class="form-control bg-transparent" placeholder="">
															<span id="re_password_error" class="text-success"><?php echo form_error('re_password'); ?></span>
														</div>
														<button type="button"
															class="btn float-right btn-success nexttab">Next</button>
													</div>
												</div>
												<div class="tab-pane fade" id="id2">
													<div class="form">
														<div class="form-row">
															<div class="col-6 mb-3">
																<label>First Name</label>
																<input type="text" name="fname" class="form-control"
																	placeholder="First Name">
																<span id="fname_error" class="text-success"><?php echo form_error('fname'); ?></span>
															</div>
															<div class="col-6 mb-3">
																<label>Last Name</label>
																<input type="text" name="lname" class="form-control"
																	placeholder="Last Name">
																<span id="lname_error" class="text-success"><?php echo form_error('lname'); ?></span>
															</div>
															<div class="col-12 mb-3">
																<select name="profession" id="Group" required>
																	<option value=" ">Nature of
																		your work
																	</option>
																	<option>Literature and Arts</option>
																	<option>Engineering</option>
																	<option>IT Enthusiast</option>
																	<option>Psychologist</option>
																	<option>Economist</option>
																	<option>Sociologist</option>
																	<option>Pastor/Priest/Missionary/Theologian</option>
																	<option>Health/Fitness Related Works</option>
																	<option>General Science</option>
																</select>
																<span id="profession_error" class="text-success"><?php echo form_error('profession'); ?></span>
															</div>
															<div class="col-6 mb-3">
																<label for="Address">Business Email</label>
																<input type="email" name="email" class="form-control"
																	placeholder="Email for work">
																<span id="email_error" class="text-success"><?php echo form_error('email'); ?></span>
															</div>
															<div class="col-6 mb-3">
																<label for="contact">Contact Info</label>
																<div class="row">
																	<div class="col">
																		<input type="number" name="contactInfo"
																			class="form-control"
																			placeholder="Mobile Number">
																		<span id="contactInfo_error" class="text-success"><?php echo form_error('contactInfo'); ?></span>
																	</div>
																</div>
															</div>
															<div class="col">
																<button type="button"
																	class="btn btn-success prevtab">Back</button>
																<button type="button"
																	class="btn btn-success nexttab float-right">Next</button>
															</div>
														</div>
													</div>
												</div>
												<div class="tab-pane fade" id="id3">
													<div class="form text-center">
														<img src="<?= base_url()?>media/assets/images/clarify.png"
															class="img-fluid" height="213px" width="281px">
														<p>Please Double <strong>Check</strong> your information before
															clicking
															<strong>"Confirm"<strong> button</p>
														<button type="submit" value="submit"
															class="btn btn-success nexttab" id="signup">Confirm</button>
													</div>
												</div>
											</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- END: Card DATA-->
		</div>
	</main>
	<!-- END: Content-->
