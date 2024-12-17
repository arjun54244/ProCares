@extends('layouts.main')

@section('title')
services
@endsection

@section('content')

<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Services</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Services</li>
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
                <div class="row blog-grid-row">
                    @foreach ($services as $service )
                    <div class="col-md-6 col-sm-12">
                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{ route('services.show', $service->slug ) }}"><img class="img-fluid" src="{{   asset('storage/'.$service->image) }}" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">

                                <h3 class="blog-title"><a href="{{ route('services.show', $service->slug ) }}">{{ $service->title }}</a></h3>
                                <p class="mb-0">{{ $service->short_description }}</p>
                            </div>
                        </div>
                        <!-- /Blog Post -->
                    </div>
                    @endforeach
                </div>
                <!-- {{ $services->links('pagination::bootstrap-5') }} -->
{{ $services->links('pagination::bootstrap-5') }}

                <!-- Blog Pagination -->
                <!-- <div class="row">
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
                </div> -->
                <!-- /Blog Pagination -->
                <!-- resources/views/vendor/pagination/custom.blade.php -->




            </div>

            <!-- Blog Sidebar -->
            <div class="col-lg-4 col-md-12 sidebar-right">

                <!-- Search -->
                <div class="card search-widget">
                    <div class="card-body">
                        <form class="search-form" action="{{ url('/services') }}" method="GET">
                            <div class="input-group">
                                <input
                                    type="text"
                                    name="search"
                                    placeholder="Search..."
                                    value="{{ request()->input('search') }}"
                                    class="form-control">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Search -->

                <!-- Latest Posts -->
                <div class="card post-widget">
                    <div class="card-header">
                        <h4 class="card-title">Services</h4>
                    </div>
                    <div class="card-body">
                        <ul class="latest-posts">
                            @foreach ($services as $service )
                            <li>
                                <div class="post-thumb">
                                    <a href="blog-details.html">
                                        <img class="img-fluid" src="{{   asset('storage/'.$service->image) }}" alt="blog-image">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a>
                                    </h4>
                                    <p>{{ $service->created_at->format('j M Y') }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- /Latest Posts -->

                <!-- Categories -->
                <!-- <div class="card category-widget">
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
                </div> -->
                <!-- /Categories -->


            </div>
            <!-- /Blog Sidebar -->

        </div>
    </div>
</div>
<!-- /Page Content -->
@endsection