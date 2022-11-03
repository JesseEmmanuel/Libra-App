<!--- START Head--->
<?php $this->load->view('templates/head.php')?>
<!--- END Head--->

<!--- START header & sidebar--->
<?php $this->load->view('templates/sidebar.php')?>
<!--- END header & sidebar--->
<main>
	<div class="container-fluid site-width">
		<div class="row">
			<div class="col-12 mt-4">
				<div class="card">
					<div class="card-header">
						<h6 class="card-title">Book Details</h6>
					</div>
					<div class="card-content">
						<div class="card-body">
							<div class="row">
								<div class="col-12">
									<form method="POST">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label>Title</label>
												<input type="text" class="form-control rounded" name="book-title"
													id="inputEmail4" placeholder="Book Title">
											</div>
											<div class="form-group col-md-6">
												<label>Description</label>
												<input type="text" class="form-control" id="inputPassword4" name="desc"
													placeholder="Book Description">
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-sm-4 mx-3">
												<input id="customFile" type="file" name="cover"
													class="custom-file-input">
												<label for="customFile" class="custom-file-label">Book
													Cover</label>
											</div>
											<div class="form-group col-sm-6">
												<input id="customFile" type="file" name="book-file"
													class="custom-file-input">
												<label for="customFile" class="custom-file-label">Upload PDF
													File</label>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6 mt-0">
												<div class="col-12 col-sm-12 mt-0">
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
											<div class="form-group col-md-6">
												<div class="input-group">
													<div class="input-group-prepend">
														<span class="input-group-text">Free/Premium</span>
													</div>
													<select>
														<option>Free</option>
														<option>Premium</option>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label for="inputAddress2">Overview</label>
											<textarea name="overview" class="summernote"></textarea>
										</div>
                                        <a href="http://localhost:8080/Libra-App/upload"><button type="button" class="btn btn-secondary">Back</button></a>
                                        <a href="#"><button type="submit" class="btn btn-success">Save changes</button></a>
									</form>
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
