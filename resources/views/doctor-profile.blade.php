@extends('layouts.main')

@section('title')
Doctors
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Doctor Profile</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Doctor Profile</li>
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

        <!-- Doctor Widget -->
        <div class="card doc-profile-card">
            <div class="card-body">
                <div class="doctor-widget doctor-profile-two">
                    <div class="doc-info-left">
                        <div class="doctor-img">
                            <img src="{{asset('storage/'.$doctor->image)}}" class="img-fluid" alt="User Image">
                        </div>
                        <div class="doc-info-cont">
                            <span class="badge doc-avail-badge"><i class="fa-solid fa-circle"></i>Available </span>
                            <h4 class="doc-name">{{$doctor->name}}<img src="{{asset('assets/img/icons/badge-check.svg')}}" alt="Img"><span class="badge doctor-role-badge"><i class="fa-solid fa-circle"></i>Dentist</span></h4>
                            <p>{{ $doctor->specialization}}</p>
                            <p class="address-detail"><span class="loc-icon"><i class="feather-map-pin"></i></span>E 66, Saket, Delhi<span class="view-text">( View Location )</span></p>
                        </div>
                    </div>
                    <div class="doc-info-right">
                        <ul class="doctors-activities">
                            <li>
                                <div class="hospital-info">
                                    <span class="list-icon"><img src="{{asset('assets/img/icons/watch-icon.svg')}}" alt="Img"></span>
                                    <p>Appointment, Online consultation Available</p>
                                </div>
                                <ul class="sub-links">
                                    <li><a href="javascript:void(0)"><i class="feather-heart"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="feather-share-2"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="feather-link"></i></a></li>
                                </ul>
                            </li>
                            <li>
                                <div class="hospital-info">
                                    <span class="list-icon"><img src="{{asset('assets/img/icons/thumb-icon.svg')}}" alt="Img"></span>
                                    <p><b>94% </b> Recommended</p>
                                </div>
                            </li>
                            <li>
                                <div class="hospital-info">
                                    <span class="list-icon"><img src="{{asset('assets/img/icons/building-icon.svg')}}" alt="Img"></span>
                                    <p> Procare Super Speciality Clinic</p>
                                </div>
                                <h5 class="accept-text"><span><i class="feather-check"></i></span>Book Your Appointment</h5>
                            </li>
                            <li>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span>5.0</span>
                                    <a href="javascript:void(0)" class="d-inline-block average-rating">150 Reviews</a>
                                </div>
                                <ul class="contact-doctors">
                                    <li><a href="https://wa.me/+91{{$doctor->phone}}" target="_blank"><span><img src="{{asset('assets/img/icons/device-message2.svg')}}" alt="Img"></span>Chat</a></li>
                                    <li><a href="callto:+91{{$doctor->phone}}"><span class="bg-violet"><i class="feather-phone-forwarded"></i></span>Audio Call</a></li>
                                    <!-- <li><a href="video-call.html"><span class="bg-indigo"><i class="fa-solid fa-video"></i></span>Video Call</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="doc-profile-card-bottom">
                    <ul class="gap-5">
                        <li>
                            <span class="bg-blue"><img src="{{asset('assets/img/icons/calendar3.svg')}}" alt="Img"></span>
                            Nearly 200+ Appointment Booked
                        </li>
                        <li>
                            <span class="bg-dark-blue"><img src="{{asset('assets/img/icons/bullseye.svg')}}" alt="Img"></span>
                            In Practice for {{$doctor->experience}} Years
                        </li>
                        <li>
                            <span class="bg-green"><img src="{{asset('assets/img/icons/bookmark-star.svg')}}" alt="Img"></span>
                            15+ Awards
                        </li>
                    </ul>
                    <div class="bottom-book-btn">
                        <div class="clinic-booking">
                            <a class="apt-btn" href="{{ route('contact')}}">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Doctor Widget -->

        <div class="doctors-detailed-info">
            <div class="doc-information-main">
                <div class="doc-information-details bio-detail" id="doc_bio">
                    <div class="detail-title">
                        <h4>Doctor Bio</h4>
                    </div>
                    <p>“{!! $doctor->description !!}”
                    </p>
                </div>
                <div class="doc-information-details" id="clinic">
                    <div class="detail-title">
                        <h4>Clinics & Locations</h4>
                    </div>
                    @foreach ($doctor->location as $location)
                    @php
                        $times = $location['times'];
                        @endphp
                    <x-profile-map name="{{ $location['name'] }}" address=" {{ $location['address'] }}" map="{{ $location['map'] }}" mapimg="{{$location['mapimg']}}"  :times="$times" />
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Page Content -->
@endsection