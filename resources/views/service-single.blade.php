@extends('layouts.main')

@section('title')
service
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
	<div class="container">
		<div class="row align-items-center inner-banner">
			<div class="col-md-12 col-12 text-center">
				<h2 class="breadcrumb-title">{{ $service->title }}</h2>
				<nav aria-label="breadcrumb" class="page-breadcrumb">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/">Home</a></li>
						<li class="breadcrumb-item" aria-current="page">Service</li>
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
							<a href="javascript:void(0);"><img alt="blog-image" src="{{ asset('storage/'.$service->image) }}" class="img-fluid"></a>
						</div>
						<h3 class="blog-title">{{ $service->title }}</h3>
						<div class="blog-content">
							{!!$service->description !!}
						</div>
					</div>
				</div>
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
                        <h4 class="card-title">{{ucfirst($service->department)}}</h4>
                    </div>
                    <div class="card-body">
                        <ul class="latest-posts">
							@php
                            $department = $service->department;
                            $serviceTags = $service->tags ;
							$servicess = App\Models\service::where('department', $department)->get();
							@endphp
                            @foreach ($servicess as $service )
                            <li>
                                <div class="post-thumb">
                                    <a href="{{ route('services.show', $service->slug) }}">
                                        <img class="img-fluid" src="{{ asset('storage/'.$service->icon) }}" alt="blog-image">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <h4>
                                        <a href="{{ route('services.show', $service->slug) }}">{{ $service->title }}</a>
                                    </h4>
                                    <!-- $service->short_description in 100 words -->
                                    <p>{{ substr($service->short_description, 0, 50) }}</p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
				<!-- /Latest Posts -->

				<!-- Tags -->
				<div class="card tags-widget">
					<div class="card-header">
						<h4 class="card-title">Tags</h4>
					</div>
					<div class="card-body">
						<ul class="tags">
                            @php
                            
                            @endphp
                            @foreach ($serviceTags as $tag)
							<li><a href="javascript:void(0);" class="tag">{{$tag}}</a></li>
                            @endforeach
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