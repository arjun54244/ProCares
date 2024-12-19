@extends('layouts.main')

@section('title')
Gallery
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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
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
            <div class="col-lg-12 col-md-12">

                <div class="row blog-grid-row">
                    @foreach($galleries as $gallery)
                    <h3 class="blog-title"><a href="javascript:void(0);">{{ $gallery->title }}</a></h3>
                    @if(!empty($gallery->attachments) && is_array($gallery->attachments))
                    @foreach($gallery->attachments as $key => $attachment)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="javascript:void(0);"><img class="img-fluid" src="{{ asset('storage/' . $attachment) }}" alt="Post Image"></a>
                            </div>
                        </div>
                        <!-- /Blog Post -->
                    </div>
                    @endforeach
                    @else
                    <p>No attachments available for this gallery.</p>
                    @endif
                    @endforeach
                </div>

                @if ($galleries->hasPages())
                <ul class="pagination justify-content-center">
                    {{-- Previous Page Link --}}
                    @if ($galleries->onFirstPage())
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous"><i class="fas fa-angle-double-left"></i></a>
                    </li>
                    @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $galleries->previousPageUrl() }}" rel="prev" aria-label="Previous"><i class="fas fa-angle-double-left"></i></a>
                    </li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                    @foreach ($element as $page => $url)
                    @if ($page == $galleries->currentPage())
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">{{ $page }} <span class="visually-hidden">(current)</span></span>
                    </li>
                    @else
                    <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                    @endforeach
                    @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($galleries->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $galleries->nextPageUrl() }}" rel="next" aria-label="Next"><i class="fas fa-angle-double-right"></i></a>
                    </li>
                    @else
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Next"><i class="fas fa-angle-double-right"></i></a>
                    </li>
                    @endif
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- /Page Content -->

@endsection