@extends('layouts.main')

@section('title')
Blogs
@endsection

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Blog Grid</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Blog</li>
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

                @foreach ($blogs as $blog )
                <div class="row blog-grid-row">
                    <div class="col-md-6 col-sm-12">
                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="blog-details.html"><img class="img-fluid" src="{{ asset('storage/'.$blog->image) }}" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
        
                                <h3 class="blog-title"><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
                                <p class="mb-0">{{ $blog->short_description }}</p>
                            </div>
                        </div>
                        <!-- /Blog Post -->
                    </div>
                </div>
                @endforeach

                <!-- Blog Pagination -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="blog-pagination">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- /Blog Pagination -->

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