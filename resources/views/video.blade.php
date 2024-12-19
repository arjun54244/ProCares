@extends('layouts.main')

@section('title')
youtube
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
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
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
            <div class="col-lg-12 col-md-12">

                @php
                // Define the API endpoint and parameters
                $apiKey = 'AIzaSyAYula2E612hrpHOqT2Jgxj1Wu-I1ZXuJY';
                $channelId = 'UCkIwW2Ckkw3AQ1hZbclmASQ';
                $apiUrl = "https://youtube.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet,id&order=date&maxResults=12";

                // Initialize cURL
                $ch = curl_init();

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, $apiUrl);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                // Execute the API call
                $response = curl_exec($ch);

                // Check for errors
                if (curl_errno($ch)) {
                echo 'Error:' . curl_error($ch);
                exit;
                }

                // Close cURL
                curl_close($ch);

                // Decode the JSON response
                $data = json_decode($response, true);

                @endphp

                <div class="row blog-grid-row">
                    @foreach ($data['items'] as $item )
                    <div class="col-md-4 col-sm-12 d-flex">
                        <!-- Blog Post -->
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="https://www.youtube.com/watch?v={{ $item['id']['videoId'] }}" target="_blank"><img class="img-fluid" src="{{   $item['snippet']['thumbnails']['high']['url'] }}" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">

                                <h3 class="blog-title"><a href="https://www.youtube.com/watch?v={{ $item['id']['videoId'] }}" target="_blank">{{ $item['snippet']['title'] }}</a></h3>
                                <p class="mb-0">{{ $item['snippet']['description'] }}</p>
                                <p class="mb-0">Published At: <?= date('Y-m-d', strtotime($item['snippet']['publishedAt'])); ?></p>

                            </div>
                        </div>
                        <!-- /Blog Post -->
                    </div>
                    @endforeach
                </div>

            </div>

        </div>
    </div>
</div>
<!-- /Page Content -->
@endsection