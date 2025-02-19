@extends('layouts.main')

@section('title')
Contact Us
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">Contact Us</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Contact Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Contact Us -->
<section class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="section-inner-header contact-inner-header">
                    <h6>Get in touch</h6>
                    <h2>Have Any Question?</h2>
                </div>
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="feather-map-pin"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Address</h4>
                            <p>E 66, Main, Press Enclave Marg, near Max Hospital, Saket, South Delhi, Delhi 110017</p>
                        </div>
                    </div>
                </div>
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="feather-phone"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Phone Number</h4>
                            <p>+91 9315845539</p>
                        </div>
                    </div>
                </div>
                <div class="card contact-card">
                    <div class="card-body">
                        <div class="contact-icon">
                            <i class="feather-mail"></i>
                        </div>
                        <div class="contact-details">
                            <h4>Email Address</h4>
                            <p><a href="mailto:info@procareclinic.com">info@procareclinic.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 d-flex">
                <div class="card contact-form-card w-100">
                    <div class="card-body">
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Email Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Phone Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="mb-2">Services</label>
                                        <input type="text" class="form-control" placeholder="Enter Services">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="mb-2">Select Doctor</label>
                                        <select class="form-control">
                                            <option value="" disabled selected>Select Doctor</option>
                                            <option value="peeyush-kumar">Dr. Peeyush Kumar</option>
                                            <option value="bhawana-attri">Dr. Bhawana Attri</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="mb-2">Message</label>
                                        <textarea class="form-control" placeholder="Enter your comments"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group-btn mb-0">
                                        <button type="submit" class="btn btn-primary prime-btn">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Us -->

<!-- Contact Map -->
<div class="contact-map d-flex">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d224345.30926531804!2d77.207756!3d28.527831!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce10c6e4c5df5%3A0x2a5e7f6f96377aed!2sDr.%20Peeyush%20Kumar%20-%20Best%20Gastroenterologist%20in%20South%20Delhi%20%7C%20Best%20Liver%20Doctor%20in%20South%20Delhi%20%7C%20Best%20Gastro%20Doctor%20in%20Saket!5e0!3m2!1sen!2sin!4v1734689104760!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- /Contact Map -->

@endsection