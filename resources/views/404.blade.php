@extends('layouts.main')

@section('title')
404
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Error 404</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Error 404</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Error 404 -->
<section class="error-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-12 text-center">
                <div class="error-info">
                    <div class="error-404-img">
                        <img src="assets/img/error-404.png" class="img-fluid" alt="error-404-image">
                        <div class="error-content error-404-content">
                            <h2>Oops! That Page Can’t Be Found.</h2>
                            <p>The page you are looking for was never existed.</p>
                            <a href="index.html" class="btn btn-primary prime-btn">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Error 404 -->
@endsection