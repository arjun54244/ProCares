@extends('layouts.main')

@section('title')
About Us
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
				<div class="container">
					<div class="row align-items-center inner-banner">
						<div class="col-md-12 col-12 text-center">
							<h2 class="breadcrumb-title">Blog Details</h2>
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item" aria-current="page">Blog Details</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container">
				
					<div class="row">
						<div class="col-lg-8 col-md-12">
							<div class="blog-view">
								<div class="blog blog-single-post">
									<div class="blog-image">
										<a href="javascript:void(0);"><img alt="blog-image" src="{{ asset('storage/'.$blog->image) }}" class="img-fluid"></a>
									</div>
									<h3 class="blog-title">{{ $blog->title }}</h3>
									<div class="blog-info clearfix">
										<div class="post-left">
											<ul>
												<li>
													<div class="post-author">
														<a href="doctor-profile.html"><img src="{{ asset('storage/'.$blog->image) }}" alt="Post Author"> <span>Dr. Darren Elder</span></a>
													</div>
												</li>
												<li><i class="far fa-calendar"></i>{{ $blog->created_at }}</li>
												<li><i class="far fa-comments"></i>12 Comments</li>
												<li><i class="fa fa-tags"></i>Health Tips</li>
											</ul>
										</div>
									</div>
									<div class="blog-content">
										{!!$blog->description !!}
									</div>
								</div>
								
								<div class="card blog-share clearfix">
									<div class="card-header">
										<h4 class="card-title">Share the post</h4>
									</div>
									<div class="card-body">
										<ul class="social-share">
											<li><a href="#" title="Facebook"><i class="fab fa-facebook"></i></a></li>
											<li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
											<li><a href="#" title="Google Plus"><i class="fab fa-google-plus"></i></a></li>
											<li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card author-widget clearfix">
								<div class="card-header">
									<h4 class="card-title">About Author</h4>
									</div>
								<div class="card-body">
									<div class="about-author">
										<div class="about-author-img">
											<div class="author-img-wrap">
												<a href="doctor-profile.html"><img class="img-fluid rounded-circle" alt="Darren Elder" src="assets/img/doctors/doctor-thumb-02.jpg"></a>
											</div>
										</div>
										<div class="author-details">
											<a href="doctor-profile.html" class="blog-author-name">Dr. Darren Elder</a>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
										</div>
									</div>
								</div>
								</div>
								<div class="card blog-comments clearfix">
									<div class="card-header">
										<h4 class="card-title">Comments (12)</h4>
									</div>
									<div class="card-body pb-0">
									<ul class="comments-list">
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="Michelle Fairfax" src="assets/img/patients/patient4.jpg">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Michelle Fairfax</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<p class="blog-date">Dec 6, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
												</div>
											</div>
											<ul class="comments-list reply">
												<li>
													<div class="comment">
														<div class="comment-author">
															<img class="avatar" alt="Gina Moore" src="assets/img/patients/patient5.jpg">
														</div>
														<div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Gina Moore</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<p class="blog-date">Dec 6, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
														</div>
													</div>
												</li>
												<li>
													<div class="comment">
														<div class="comment-author">
															<img class="avatar" alt="Carl Kelly" src="assets/img/patients/patient3.jpg">
														</div>
														<div class="comment-block">
															<span class="comment-by">
																<span class="blog-author-name">Carl Kelly</span>
															</span>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
															<p class="blog-date">December 7, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
														</div>
													</div>
												</li>
											</ul>
										</li>
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="Elsie Gilley" src="assets/img/patients/patient6.jpg">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Elsie Gilley</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<p class="blog-date">December 11, 2023</p>
												</div>
											</div>
										</li>
										<li>
											<div class="comment">
												<div class="comment-author">
													<img class="avatar" alt="Joan Gardner" src="assets/img/patients/patient7.jpg">
												</div>
												<div class="comment-block">
													<span class="comment-by">
														<span class="blog-author-name">Joan Gardner</span>
													</span>
													<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													<p class="blog-date">December 13, 2023</p>
													<a class="comment-btn" href="#">
														<i class="fas fa-reply"></i> Reply
													</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
								</div>
								
								<div class="card new-comment clearfix">
									<div class="card-header">
										<h4 class="card-title">Leave Comment</h4>
									</div>
									<div class="card-body">
										<form action="{{ route('comments.store', $blog) }}" method="POST">
                                            @csrf
											<div class="mb-3">
												<label class="mb-2" name="author">Name <span class="text-danger">*</span></label>
												<input type="text" class="form-control">
											</div>
											<div class="mb-3">
												<label class="mb-2">Your Email Address <span class="text-danger">*</span></label>
												<input type="email" name="email" class="form-control">
											</div>
											<div class="mb-3">
												<label class="mb-2">Comments</label>
												<textarea rows="4" name="content" class="form-control"></textarea>
											</div>
											<div class="submit-section">
												<button class="btn btn-primary submit-btn" type="submit">Submit</button>
											</div>
										</form>
									</div>
								</div>
								
							</div>
						</div>
					
						<!-- Blog Sidebar -->
						<div class="col-lg-4 col-md-12 sidebar-right theiaStickySidebar">

							<!-- Search -->
							<div class="card search-widget">
								<div class="card-body">
									<form class="search-form">
										<div class="input-group">
											<input type="text" placeholder="Search..." class="form-control">
											<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
										</div>
									</form>
								</div>
							</div>
							<!-- /Search -->

							<!-- Latest Posts -->
							<div class="card post-widget">
								<div class="card-header">
									<h4 class="card-title">Latest Posts</h4>
								</div>
								<div class="card-body">
									<ul class="latest-posts">
										<li>
											<div class="post-thumb">
												<a href="blog-details.html">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-01.jpg" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details.html">Doccure – Making your clinic painless visit?</a>
												</h4>
												<p>4 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details.html">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-02.jpg" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details.html">What are the benefits of Online Doctor Booking?</a>
												</h4>
												<p>3 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details.html">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-03.jpg" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details.html">Benefits of consulting with an Online Doctor</a>
												</h4>
												<p>3 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details.html">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-04.jpg" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details.html">5 Great reasons to use an Online Doctor</a>
												</h4>
												<p>2 Dec 2023</p>
											</div>
										</li>
										<li>
											<div class="post-thumb">
												<a href="blog-details.html">
													<img class="img-fluid" src="assets/img/blog/blog-thumb-05.jpg" alt="blog-image">
												</a>
											</div>
											<div class="post-info">
												<h4>
													<a href="blog-details.html">Online Doctor Appointment Scheduling</a>
												</h4>
												<p>1 Dec 2023</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- /Latest Posts -->

							<!-- Categories -->
							<div class="card category-widget">
								<div class="card-header">
									<h4 class="card-title">Blog Categories</h4>
								</div>
								<div class="card-body">
									<ul class="categories">
										<li><a href="#">Cardiology <span>(62)</span></a></li>
										<li><a href="#">Health Care <span>(27)</span></a></li>
										<li><a href="#">Nutritions <span>(41)</span></a></li>
										<li><a href="#">Health Tips <span>(16)</span></a></li>
										<li><a href="#">Medical Research <span>(55)</span></a></li>
										<li><a href="#">Health Treatment <span>(07)</span></a></li>
									</ul>
								</div>
							</div>
							<!-- /Categories -->

							<!-- Tags -->
							<div class="card tags-widget">
								<div class="card-header">
									<h4 class="card-title">Tags</h4>
								</div>
								<div class="card-body">
									<ul class="tags">
										<li><a href="#" class="tag">Children</a></li>
										<li><a href="#" class="tag">Disease</a></li>
										<li><a href="#" class="tag">Appointment</a></li>
										<li><a href="#" class="tag">Booking</a></li>
										<li><a href="#" class="tag">Kids</a></li>
										<li><a href="#" class="tag">Health</a></li>
										<li><a href="#" class="tag">Family</a></li>
										<li><a href="#" class="tag">Tips</a></li>
										<li><a href="#" class="tag">Shedule</a></li>
										<li><a href="#" class="tag">Treatment</a></li>
										<li><a href="#" class="tag">Dr</a></li>
										<li><a href="#" class="tag">Clinic</a></li>
										<li><a href="#" class="tag">Online</a></li>
										<li><a href="#" class="tag">Health Care</a></li>
										<li><a href="#" class="tag">Consulting</a></li>
										<li><a href="#" class="tag">Doctors</a></li>
										<li><a href="#" class="tag">Neurology</a></li>
										<li><a href="#" class="tag">Dentists</a></li>
										<li><a href="#" class="tag">Specialist</a></li>
										<li><a href="#" class="tag">Doccure</a></li>
									</ul>
								</div>
							</div>
							<!-- /Tags -->
							
						</div>
						<!-- /Blog Sidebar -->
						
                </div>
				</div>

			</div>		
			<!-- /Page Content -->
            @endsection