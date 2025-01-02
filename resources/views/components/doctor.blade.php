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
							<!-- <span><i class="fas fa-star"></i> 4.5</span> -->
						</div>
					</div>
					<div class="doc-content">
						<div class="doc-pro-info">
							<div class="doc-pro-name">
								<a href="{{ route('doctor.index', $doctor->id)}}">{{$doctor->name}}</a>
								<p>{{ $doctor->position}}</p>
								<p>{{ $doctor->specialization}}</p>
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