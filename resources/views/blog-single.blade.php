@extends('layouts.main')

@section('title')
Blog
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
						<li class="breadcrumb-item"><a href="/">Home</a></li>
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
									
									<!-- <li><i class="far fa-calendar"></i>$blog->created_at </li> -->
								</ul>
							</div>
						</div>
						<div class="blog-content">
							{!!$blog->description !!}
						</div>
					</div>
					<div class="card blog-comments clearfix">
						<div class="card-header">
							<h4 class="card-title">Comments (12)</h4>
						</div>
						<div class="card-body pb-0">
							<ul class="comments-list">
								@foreach($blog->comments as $comment)
								<li>
									<di class="comment">
										<div class="comment-author">
											<img class="avatar" alt="{{ $comment->author }}" src="{{asset('assets/img/patients/patient4.jpg')}}">
										</div>
										<div class="comment-block">
											<span class="comment-by">
												<span class="blog-author-name">{{ $comment->author }}</span>
											</span>
											<p>{{ $comment->content }}</p>
											<p class="blog-date">{{ $comment->created_at->format('F j, Y, g:i a') }}</p>
										</div>
									</di>
								</li>
								@endforeach
							</ul>
						</div>
					</div>

					<div class="card new-comment clearfix">
						<div class="card-header">
							<h4 class="card-title">Leave Comment</h4>
						</div>
						<div class="card-body">
							<form action="{{ route('comments.store', $blog->slug) }}" method="POST">
								@csrf
								<div class="mb-3">
									<label class="mb-2">Name <span class="text-danger">*</span></label>
									<input type="text" name="author" class="form-control" required>
								</div>
								<div class="mb-3">
									<label class="mb-2">Your Email Address <span class="text-danger">*</span></label>
									<input type="email" name="email" class="form-control" required>
								</div>
								<div class="mb-3">
									<label class="mb-2">Comments</label>
									<textarea rows="4" name="content" class="form-control" required></textarea>								</div>
								<div class="submit-section">
									<button class="btn btn-primary submit-btn" type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>

				</div>
			</div>

			<!-- Blog Sidebar -->
			<div class="col-lg-4 col-md-12 sidebar-right">

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
							@php
							$blogs = App\Models\Blog::get()->take(3);
							@endphp
                            @foreach ($blogs as $blog )
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ route('blogs.show', $blog->slug ) }}">
                                        <img class="img-fluid" src="{{   asset('storage/'.$blog->image) }}" alt="blog-image">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="{{ route('blogs.show', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h4>
                                    <p>{{ $blog->created_at->format('j M Y') }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
				<!-- /Latest Posts -->

				<!-- Tags -->
				<!-- <div class="card tags-widget">
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
				</div> -->
				<!-- /Tags -->

			</div>
			<!-- /Blog Sidebar -->

		</div>
	</div>

</div>
<!-- /Page Content -->
@endsection