@extends('layouts.main')

@section('title')
About Us
@endsection

@section('content')
<!-- Breadcrumb -->
<div class="breadcrumb-bar-two">
    <div class="container">
        <div class="row align-items-center inner-banner">
            <div class="col-md-12 col-12 text-center">
                <h2 class="breadcrumb-title">About Us</h2>
                <nav aria-label="breadcrumb" class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- About Us -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="about-img-info">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-inner-img">
                                <div class="about-img">
                                    <img src="{{asset('assets/img/new/about1.png')}}" class="img-fluid" alt="Procare Clinic">
                                </div>
                                <div class="about-img">
                                    <img src="{{asset('assets/img/new/about3.png')}}" class="img-fluid" alt="Procare Clinic">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-inner-img">
                                <div class="about-box">
                                    <h4>Trusted Care for Over 15 Years</h4>
                                </div>
                                <div class="about-img">
                                    <img src="{{asset('assets/img/new/about2.png')}}" class="img-fluid" alt="Procare Clinic">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="section-inner-header about-inner-header">
                    <h6>About Procare Clinic</h6>
                    <h2>Committed to Your Health & Well-Being</h2>
                </div>
                <div class="about-content">
                    <div class="about-content-details">
                        <p>At Procare Clinic, we provide patient-focused healthcare services that prioritize your well-being. With over 15 years of expertise, our experienced medical professionals are dedicated to delivering comprehensive care tailored to your needs.</p>
                        <p>Our mission is to create a supportive and caring environment where you can trust us with your health. From advanced diagnostics to personalized treatment plans, we ensure that every patient receives the highest standard of care.</p>
                    </div>
                    <div class="about-contact">
                        <div class="about-contact-icon">
                            <span><img src="assets/img/icons/phone-icon.svg" alt="Contact Procare"></span>
                        </div>
                        <div class="about-contact-text">
                            <p>Need Immediate Assistance?</p>
                            <h4>+91 9876543210</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /About Us -->


<!-- Why Choose Us -->
<section class="why-choose-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-inner-header text-center">
                    <h2>Why Choose Procare Clinic</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card why-choose-card w-100">
                    <div class="card-body">
                        <div class="why-choose-icon">
                            <span><img src="assets/img/icons/choose-01.svg" alt="Experienced Doctors"></span>
                        </div>
                        <div class="why-choose-content">
                            <h4>Experienced Specialists</h4>
                            <p>Our team consists of highly qualified and experienced doctors committed to providing exceptional care for every patient.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card why-choose-card w-100">
                    <div class="card-body">
                        <div class="why-choose-icon">
                            <span><img src="assets/img/icons/choose-02.svg" alt="Advanced Facilities"></span>
                        </div>
                        <div class="why-choose-content">
                            <h4>Advanced Facilities</h4>
                            <p>We are equipped with state-of-the-art medical technology to ensure accurate diagnoses and effective treatments.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card why-choose-card w-100">
                    <div class="card-body">
                        <div class="why-choose-icon">
                            <span><img src="assets/img/icons/choose-03.svg" alt="Patient-Centered Care"></span>
                        </div>
                        <div class="why-choose-content">
                            <h4>Patient-Centered Care</h4>
                            <p>At Procare Clinic, we prioritize your comfort and well-being, ensuring a personalized healthcare experience.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 d-flex">
                <div class="card why-choose-card w-100">
                    <div class="card-body">
                        <div class="why-choose-icon">
                            <span><img src="assets/img/icons/choose-04.svg" alt="24/7 Support"></span>
                        </div>
                        <div class="why-choose-content">
                            <h4>24/7 Emergency Support</h4>
                            <p>We offer round-the-clock support and emergency services to address your healthcare needs promptly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Why Choose Us -->

<!-- Doctors Section -->
<section class="doctors-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 aos" data-aos="fade-up">
                <div class="section-header-one section-header-slider text-center">
                    <h2 class="section-title">Best Doctors</h2>
                </div>
            </div>
        </div>
		<div class="owl-carousel doctor-slider-one owl-theme aos" data-aos="fade-up">

			@php
			$doctors = \App\Models\Doctor::all();
			@endphp
			@foreach($doctors as $doctor)
			<!-- Doctor Item -->
			<div class="item">
				<div class="doctor-profile-widget doc-item">
					<div class="doc-pro-img">
						<a href="{{ route('doctor.index', $doctor->id)}}">
							<div class="doctor-profile-img">
								<img src="{{asset('storage/'.$doctor->image)}}" class="img-fluid" alt="{{$doctor->name}}">
							</div>
						</a>
						<div class="doctor-amount">
							<span><i class="fas fa-star"></i> 4.5</span>
						</div>
					</div>
					<div class="doc-content">
						<div class="doc-pro-info">
							<div class="doc-pro-name">
								<a href="{{ route('doctor.index', $doctor->id)}}">{{$doctor->name}}</a>
								<p>{{ $doctor->position}}</p>
							</div>
						</div>
						<div class="doc-pro-location">
							<p><i class="feather-map-pin"></i> Delhi, India</p>
							<span class="badge badge-success doc-badge"><i class="fa-solid fa-circle"></i>Available</span>
						</div>
					</div>
				</div>
			</div>
			<!-- /Doctor Item -->
			@endforeach
		</div>
    </div>
</section>
<!-- /Doctors Section -->

<section class="testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider slick">
                    @php
                    $testimonials = App\Models\Testimonial::get();
                    @endphp
                    @foreach($testimonials as $testimonial)
                    <div class="testimonial-grid">
                        <div class="testimonial-info">
                            <div class="testimonial-img">
                                <img src="{{"./storage/$testimonial->image"}}" class="img-fluid" alt="{{ $testimonial->name }}">
                            </div>
                            <div class="testimonial-content">
                                <div class="section-header-one section-header section-inner-header testimonial-header">
                                    <h5>{{ $testimonial->position }}</h5>
                                    <h2 class="section-title">⭐⭐⭐⭐</h2>
                                </div>
                                <div class="testimonial-details">
                                    <p>{{ $testimonial->description }}</p>
                                    <h6><span class="d-block">{{$testimonial->name}}</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Testimonial Section -->

<!-- FAQ Section -->
<section class="faq-section faq-section-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-inner-header text-center">
                    <h6>Get Your Answer</h6>
                    <h2>Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="faq-img">
                    <img src="assets/img/faq-img.png" class="img-fluid" alt="img">
                    <div class="faq-patients-count">
                        <div class="faq-smile-img">
                            <img src="assets/img/icons/smiling-icon.svg" alt="icon">
                        </div>
                        <div class="faq-patients-content">
                            <h4><span class="count-digit">95</span>k+</h4>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="faq-info">
                    <!-- FAQ Section -->
                    <div class="accordion" id="accordionExample">
                        <!-- FAQ Item 1 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <a href="javascript:void(0)" class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What does a gastroenterologist do?
                                </a>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A gastroenterologist is a medical specialist who diagnoses and treats conditions related to the digestive system, including the esophagus, stomach, intestines, liver, pancreas, and gallbladder.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <a href="javascript:void(0)" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    When should I see a gastroenterologist?
                                </a>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You should consider seeing a gastroenterologist if you experience symptoms such as persistent abdominal pain, bloating, heartburn, constipation, diarrhea, rectal bleeding, difficulty swallowing, or unexplained weight loss.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <a href="javascript:void(0)" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    How do I book an appointment?
                                </a>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>You can book an appointment by calling our clinic, visiting our website, or using the online appointment booking form.</p>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <a href="javascript:void(0)" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What tests do gastroenterologists perform?
                                </a>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Endoscopy (to examine the upper digestive tract)</li>
                                        <li>Colonoscopy (to examine the colon)</li>
                                        <li>Ultrasound or imaging tests for liver and pancreas</li>
                                        <li>Stool tests</li>
                                        <li>Breath tests for H. pylori</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <a href="javascript:void(0)" class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Is a colonoscopy painful?
                                </a>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>A colonoscopy is typically not painful. Patients are sedated during the procedure, and most only experience mild discomfort or cramping afterward.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /FAQ Section -->

@endsection