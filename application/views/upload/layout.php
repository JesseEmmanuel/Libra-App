<!--- START Head--->
<?php $this->load->view('templates/head.php')?>
<!--- END Head--->

<!--- START header & sidebar--->
<?php $this->load->view('templates/sidebar.php')?>
<!--- END header & sidebar--->
<main>
	<div class="container-fluid site-width">
		<div class="row row-eq-height">
			<div class="col-12 col-md-12 mt-3">
				<div class="card">
					<div class="card-body d-md-flex text-center">
						<h5 class="mb-0">Uploads</h5>
						<a href="<?php base_url() ?>upload/addform" class="btn btn-outline-success font-w-600 my-auto text-nowrap ml-auto add-event">
							<i class="icofont-book-alt fa-1x"></i> Add a book</a>
						<!-- Modal content-->
						<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog"
							aria-labelledby="myLargeModalLabel10" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="myLargeModalLabel10">Book Details</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body text-left">
										<div class="row">
											<div class="col-12">
												<form method="POST">
													<div class="form-row">
														<div class="form-group col-md-6">
															<label>Title</label>
															<input type="text" class="form-control rounded"
																name="book-title" id="inputEmail4"
																placeholder="Book Title">
														</div>
														<div class="form-group col-md-6">
															<label>Description</label>
															<input type="text" class="form-control" id="inputPassword4"
																name="desc" placeholder="Book Description">
														</div>
													</div>
													<div class="form-group col-md-6">
															<div class="col-12 col-sm-12 mt-0">
																<div class="card-body">
																	<div class="input-group">
																		<div class="input-group-prepend">
																			<span class="input-group-text">Book
																				Category</span>
																		</div>
																		<select>
																			<option label="Choose on thing">Select
																				Category</option>
																			<option>Literature and Arts</option>
																			<option>Engineering</option>
																			<option>Technology</option>
																			<option>Economics</option>
																			<option>History</option>
																			<option>Theology</option>
																			<option>Health</option>
																			<option>Psychology</option>
																			<option>General Science</option>
																			<option>Recipes</option>
																			<option>Social Science</option>
																			<option>Novel/Manga/Comics</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Prepend</span>
														</div>
														<select>
															<option label="Choose on thing">Choose on thing</option>
															<option>1</option>
															<option>2</option>
															<option>3</option>
														</select>
													</div>
													<!--<div class="form-group">
														<label for="inputAddress2">Overview</label>
														<textarea name="overview" class="summernote"></textarea>
													</div>-->
													<!--<div class="form-row">
														<div class="form-group col-md-6">
															<input id="customFile" type="file" name="cover"
																class="custom-file-input">
															<label for="customFile" class="custom-file-label">Book
																Cover</label>
														</div>
														<div class="form-group col-md-6">
															<input id="customFile" type="file" name="book-file"
																class="custom-file-input">
															<label for="customFile" class="custom-file-label">Upload PDF
																File</label>
														</div>
													</div>-->
													<button type="submit" class="btn btn-success">Save changes</button>
													<button type="button" class="btn btn-secondary"
														data-dismiss="modal">Close</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12  mt-3">
				<div class="card">
					<div class="card-body">
						<div class="row">
							<div class="col-12">
								<ul class="filter p-0">
									<li class="d-inline-block"><a class="filter-button active" href="#"
											data-group="all">All</a></li>
									<li class="d-inline-block"><a href="#" class="filter-button"
											data-group="Free">Free</a></li>
									<li class="d-inline-block"><a href="#" class="filter-button"
											data-group="Premium">Premium</a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div id="grid" class="row">
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage">
									<img src="<?php base_url() ?>media/assets/images/book2.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage">
									<img src="<?php base_url() ?>media/assets/images/book3.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage">
									<img src="<?php base_url() ?>media/assets/images/book4.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book5.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Premium">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book6.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>

							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book7.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Premium">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book8.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Premium">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book8.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book8.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Free">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book8.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
									</div>
								</div>
							</div>
							<div class="item col-12 col-md-6 col-lg-4 mb-4 cation-hover text-center Premium">
								<div class="modImage align-items-stretch">
									<img src="<?php base_url() ?>media/assets/images/book8.jpg" alt=""
										class="d-block w-100" height="300px" width="100%">
									<div class="d-flex">
										<a data-fancybox-group="gallery" href="dist/images/portfolio1.jpg"
											class="fancybox btn rounded-0 btn-success w-50"><i
												class="icofont-eye-alt"></i> View/Edit</a>
										<a href="#" class="btn btn-dark rounded-0 w-50"><i class="icofont-trash"></i>
											Delete</a><i></i>
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
<?php $this->load->view('templates/footer.php')?>
<!--- END footer--->
