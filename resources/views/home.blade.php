@extends('layouts.main')

@section('content')
<!-- Home Banner -->
<section class="banner-section">
	<style>
		.responsive-banner {
			width: 100%;
			/* Ensures full width */
			height: auto;
			/* Adjusts height automatically to maintain aspect ratio */
			object-fit: cover;
			/* Ensures the image scales without distortion */
		}

		/* Optional: Adjust banner height for larger screens */
		@media (min-width: 768px) {
			.responsive-banner {
				height: 500px;
				/* Height for medium screens and up */
			}
		}

		@media (min-width: 1200px) {
			.responsive-banner {
				height: 502px;
			}
		}
	</style>
	<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ asset('assets/img/banner/imgbanner1.png') }}" class="d-block w-100 responsive-banner" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/banner/imgbanner2.png') }}" class="d-block w-100 responsive-banner" alt="...">
			</div>
			<div class="carousel-item">
				<img src="{{ asset('assets/img/banner/imgbanner1.png') }}" class="d-block w-100 responsive-banner" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

</section>
<!-- /Home Banner -->


<!-- About Section -->
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
					<h2>Dedicated to Exceptional Healthcare</h2>
				</div>
				<div class="about-content">
					<div class="about-content-details">
						<p>At Procare Clinic, we are dedicated to providing exceptional healthcare services tailored to meet the needs of every individual. Located in Saket, our clinic combines compassionate care with advanced medical technology to ensure the best possible outcomes for our patients.</p>
						<p>Our team of highly qualified and experienced doctors, specialists, and healthcare professionals is committed to delivering personalized care across a wide range of specialties. Whether you need preventive care, diagnostic services, or treatment for chronic or acute conditions, Procare Clinic is your trusted partner in health.</p>
						<p>We believe in a patient-centric approach, emphasizing open communication, respect, and collaboration to empower you to make informed health decisions. At Procare Clinic, your well-being is our top priority.</p>
					</div>
					<div class="about-contact">
						<div class="about-contact-icon">
							<span><img src="assets/img/icons/phone-icon.svg" alt="Contact Procare"></span>
						</div>
						<div class="about-contact-text">
							<p>Need Immediate Assistance?</p>
							<h4>+91 9315845539</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /About Us -->

<!-- / end About Section -->

<!-- Specialities Section -->
<section class="specialities-section-one">
	<div class="container">
		<div class="service-sec-one">
			<div class="row row-cols-7 row-cols-xxl-7 row-cols-xl-4 row-cols-lg-4 rows-cols-md-6 justify-content-center">
				<div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
					<a href="javascript:void(0);" class="serv-wrap blue-bg flex-fill">
						<span>
							<img src="assets/img/icons/service-01.svg" alt="heart-image">
						</span>
						<h4>Book Appointment</h4>
					</a>
				</div>
				<div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
					<a href="javascript:void(0);" class="serv-wrap success-bg flex-fill">
						<span>
							<img src="assets/img/icons/service-05.svg" alt="heart-image">
						</span>
						<h4>Health Care Services</h4>
					</a>
				</div>
				<div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
					<a href="javascript:void(0);" class="serv-wrap pink-bg flex-fill">
						<span>
							<img src="assets/img/icons/service-06.svg" alt="heart-image">
						</span>
						<h4>Talk to Doctor’s</h4>
					</a>
				</div>
				<div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
					<a href="javascript:void(0);" class="serv-wrap green-bg flex-fill">
						<span>
							<img src="assets/img/icons/service-02.svg" alt="heart-image">
						</span>
						<h4>Lab Testing Services</h4>
					</a>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-7 aos" data-aos="fade-up">
				<div class="section-header-one section-header-slider">
					<h2 class="section-title">Gastroenterologist</h2>
				</div>
			</div>
			<div class="col-md-6 col-5  aos" data-aos="fade-up">
				<div class="owl-nav slide-nav-1 text-end nav-control">
				<a href="depatments/gastroenterology" class="btn btn-outline-primary">Read More</a>
				</div>
				
			</div>
		</div>
		<div class="owl-carousel specialities-slider-one owl-theme aos" data-aos="fade-up">
			@php

			@endphp
			@foreach($services = \App\Models\Service::where('department', 'gastroenterology')->get() as $service)
			<div class="item">
				<div class="specialities-item" onclick="window.location.href='{{ route("services.show", $service->slug) }}'">
					<div class="specialities-img">
						<span><img src="{{ asset('storage/'.$service->icon) }}" alt="heart-image"></span>
					</div>
					<p>{{ $service->title }}</p>
				</div>
			</div>
			@endforeach

		</div>
		<div class="">
			<div class="row">
				<div class="col-md-6 col-7 aos" data-aos="fade-up">
					<div class="section-header-one section-header-slider">
						<h2 class="section-title">Endocrinologist</h2>
					</div>
				</div>
				<div class="col-md-6 col-5  aos" data-aos="fade-up">
					<div class="owl-nav slide-nav-1 text-end nav-control"></div>
				</div>
			</div>
			<div class="row row-cols-7 row-cols-xxl-7 row-cols-xl-4 row-cols-lg-4 rows-cols-md-6 justify-content-center">
				@php
				$services = \App\Models\Service::get()->where('department', 'endocrinology')->take(6);
				@endphp
				@foreach($services as $service)
				<div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
					<a href="{{ route("services.show", $service->slug) }}" class="serv-wrap blue-bg flex-fill">
						<span>
							<img src="{{ asset('storage/'.$service->icon) }}" alt="heart-image">
						</span>
						<h4>{{$service->title}}</h4>
					</a>
				</div>
				@endforeach
				<div class="col-12 d-flex col-xxl col-lg-3 col-sm-6">
					<a href="depatments/endocrinology" class="serv-wrap blue-bg flex-fill">
						<span>
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcKZGCiKvaZ3VPNh0s1Hz0upcWllWMFHBenw&s" alt="heart-image">
						</span>
						<h4>Read more</h4>
					</a>
				</div>
			</div>
		</div>
</section>
<!-- /Specialities Section -->
<section class="specialities-section-two">
	<div class="container">

	</div>
</section>


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

<!-- Work Section -->
<section class="work-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-12 work-img-info aos" data-aos="fade-up">
				<div class="work-img">
					<img src="assets/img/work-img.png" class="img-fluid" alt="doctor-image">
				</div>
			</div>
			<div class="col-lg-8 col-md-12 work-details">
				<div class="section-header-one aos" data-aos="fade-up">
					<h5>How it Works</h5>
					<h2 class="section-title">4 easy steps to get your solution</h2>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
						<div class="work-info">
							<div class="work-icon">
								<span><img src="assets/img/icons/work-01.svg" alt="search-doctor-icon"></span>
							</div>
							<div class="work-content">
								<h5>Search Doctor</h5>
								<p>Search for a doctor based on specialization, location, or availability. </p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
						<div class="work-info">
							<div class="work-icon">
								<span><img src="assets/img/icons/work-02.svg" alt="doctor-profile-icon"></span>
							</div>
							<div class="work-content">
								<h5>Check Doctor Profile</h5>
								<p>Explore detailed doctor profiles on our platform to make informed healthcare decisions.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
						<div class="work-info">
							<div class="work-icon">
								<span><img src="assets/img/icons/work-03.svg" alt="calendar-icon"></span>
							</div>
							<div class="work-content">
								<h5>Schedule Appointment</h5>
								<p>After choose your preferred doctor, select a convenient time slot, & confirm your appointment.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 aos" data-aos="fade-up">
						<div class="work-info">
							<div class="work-icon">
								<span><img src="assets/img/icons/work-04.svg" alt="solution-icon"></span>
							</div>
							<div class="work-content">
								<h5>Get Your Solution</h5>
								<p>Discuss your health concerns with the doctor and receive personalized advice & solution.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Work Section -->



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


<!-- Testimonial Section -->
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

<!-- Articles Section -->
<section class="articles-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12 aos" data-aos="fade-up">
				<div class="section-header-one text-center">
					<h2 class="section-title">Latest Articles</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@php
			$blogs = App\Models\Blog::where('status', 1)->get()->take(2);
			@endphp
			@foreach($blogs as $blog)
			<div class="col-lg-6 col-md-6 d-flex aos" data-aos="fade-up">
				<div class="articles-grid w-100">
					<div class="articles-info">
						<div class="articles-left">
							<a href="{{ route('blogs.show', $blog->slug)}}">
								<div class="articles-img">
									<img src="{{   asset('storage/'.$blog->image) }}" class="img-fluid" alt="{{$blog->title}}">
								</div>
							</a>
						</div>
						<div class="articles-right">
							<div class="articles-content">
								<ul class="articles-list nav">
									<li>
										<i class="feather-user"></i> John Doe
									</li>
									<li>
										<i class="feather-calendar"></i> 13 Aug, 2023
									</li>
								</ul>
								<h4>
									<a href="{{ route('blogs.show', $blog->slug)}}">{{ $blog->title }}</a>
								</h4>
								<p>{{ $blog->short_description }}</p>
								<a href="{{ route('blogs.show', $blog->slug)}}" class="btn">Read More</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>
<!-- /Articles Section -->

<!-- Partners Section -->
<!-- <section class="partners-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-header-one text-center aos" data-aos="fade-up">
					<h2 class="section-title">Our Partners</h2>
				</div>
			</div>
		</div>
		<div class="partners-info aos" data-aos="fade-up">
			<ul class="owl-carousel partners-slider d-flex">
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-1.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-2.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-3.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-4.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-5.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-6.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-1.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-2.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-3.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-4.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-5.svg" alt="partners">
					</a>
				</li>
				<li>
					<a href="javascript:void(0);">
						<img class="img-fluid" src="assets/img/partners/partners-6.svg" alt="partners">
					</a>
				</li>
			</ul>
		</div>
	</div>
</section> -->
<!-- /Partners Section -->

@endsection