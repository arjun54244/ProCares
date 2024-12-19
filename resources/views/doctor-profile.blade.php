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
                                    <p>Royal Prince Alfred Hospital</p>
                                </div>
                                <h5 class="accept-text"><span><i class="feather-check"></i></span>Accepting New Patients</h5>
                            </li>
                            <li>
                                <div class="rating">
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <span>5.0</span>
                                    <a href="#" class="d-inline-block average-rating">150 Reviews</a>
                                </div>
                                <ul class="contact-doctors">
                                    <li><a href="https://wa.me/919315845539" target="_blank"><span><img src="{{asset('assets/img/icons/device-message2.svg')}}" alt="Img"></span>Chat</a></li>
                                    <li><a href="callto:919315845539"><span class="bg-violet"><i class="feather-phone-forwarded"></i></span>Audio Call</a></li>
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
                            In Practice for 21 Years
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
                    <p>“{{ $doctor->description}}”
                    </p>
                </div>
                <div class="doc-information-details" id="clinic">
                    <div class="detail-title">
                        <h4>Clinics & Locations</h4>
                    </div>
                    <div class="clinic-loc">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="clinic-info">
                                    <div class="clinic-img"><img src="{{asset('assets/img/clinic/clinic-11.jpg')}}" alt="Img"></div>
                                    <div class="detail-clinic">
                                        <h5>Dr. Peeyush Kumar</h5>
                                        <span> Apponitment</span>
                                        <p>Metro Station, Okhla Rd, Jamia Millia Islamia, Sukhdev Vihar, Okhla, New Delhi, Delhi 110025</p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center avail-time-slot">
                                    <div class="availability-date">
                                        <div class="book-date">
                                            <h6>Monday</h6>
                                            <span>07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="availability-date">
                                        <div class="book-date">
                                            <h6>Tuesday</h6>
                                            <span>07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-5">
                                <div class="contact-map d-flex">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112133.18721139725!2d77.1360671!3d28.5648947!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce31e71f03313%3A0xd4c18081ac88a23a!2sDr.%20Peeyush%20Kumar%20-%20Best%20Gastro%20Doctor%20in%20Delhi%20%7C%20Best%20Liver%20Doctor%20in%20Delhi%20%7C%20Gastroenterologist%20in%20Delhi!5e0!3m2!1sen!2sin!4v1734087315922!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clinic-loc mb-0">
                        <div class="row align-items-center">
                            <div class="col-lg-7">
                                <div class="clinic-info">
                                    <div class="clinic-img"><img src="{{asset('assets/img/clinic/clinic-12.jpg')}}" alt="Img"></div>
                                    <div class="detail-clinic">
                                        <h5>Dr. Peeyush Kumar </h5>
                                        <span>Apponitment</span>
                                        <p>E 66, Main, Press Enclave Marg, near max hospital, Saket, South Delhi, Delhi 110017</p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex align-items-center avail-time-slot">
                                    <div class="availability-date">
                                        <div class="book-date">
                                            <h6>Friday</h6>
                                            <span>07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                    <div class="availability-date">
                                        <div class="book-date">
                                            <h6>Saturday</h6>
                                            <span>07:00 AM - 09:00 PM</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-lg-5">
                                <div class="contact-map d-flex">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56060.36801346781!2d77.15357655978946!3d28.576578422739008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce10c6e4c5df5%3A0x2a5e7f6f96377aed!2sDr.%20Peeyush%20Kumar!5e0!3m2!1sen!2sin!4v1734087500473!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- /Page Content -->
@endsection