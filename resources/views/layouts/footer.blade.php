<!-- whatsapp -->
 <style>
	.sticky-buttons {
    position: fixed;
    bottom: 75px;
    right: 20px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    z-index: 1000;
}

.sticky-buttons a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: #25D366; /* WhatsApp green for WhatsApp button */
    color: #fff;
    font-size: 24px;
    text-decoration: none;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.sticky-buttons a.call-btn {
    background-color: #007BFF; /* Blue color for Call button */
}

.sticky-buttons a:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.3);
}

 </style>
<div class="sticky-buttons">
    <a href="https://wa.me/+919315845539" target="_blank" class="whatsapp-btn" title="WhatsApp Us">
        <i class="fab fa-whatsapp"></i>
    </a>
    <a href="tel:+919315845539" class="call-btn" title="Call Us">
        <i class="fas fa-phone-alt"></i>
    </a>
</div>


<!-- Footer -->
<footer class="footer footer-one">
	<div class="footer-top aos" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="footer-widget footer-about">
						<div class="footer-logo">
							<a href="/"><img src="{{asset('assets/img/imglogo.png')}}" alt="Procare Clinic Logo"></a>
						</div>
						<div class="footer-about-content">
							<p>Procare Clinic is dedicated to providing exceptional healthcare services in a compassionate and patient-centered environment. Your well-being is our top priority.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="row">
						<div class="col-lg-3 col-md-4">
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Quick Links</h2>
								<ul>
									<li><a href="/">Home</a></li>
									<li><a href="{{route('depatments')}}">Services</a></li>
									<li><a href="{{route('about')}}">About Us</a></li>
									<li><a href="{{route('blogs.index')}}">Blogs</a></li>
									<li><a href="{{route('contact')}}">Contact</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-4">
							<div class="footer-widget footer-menu">
								<h2 class="footer-title">Specialties</h2>
								<ul>
									<li><a href="depatments/gastroenterology">Gastroenterology</a></li>
									<li><a href="depatments/endocrinology">Endocrinology</a></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 col-md-4">
							<div class="footer-widget footer-contact">
								<h2 class="footer-title">Contact Us</h2>
								<div class="footer-contact-info">
									<div class="footer-address">
										<p><i class="feather-map-pin"></i> E 66, Main, Press Enclave Marg, near Max Hospital, Saket, South Delhi, Delhi 110017</p>
									</div>
									<div class="footer-address">
										<p><i class="feather-phone-call"></i> +91 93158 45539</p>
									</div>
									<div class="footer-address">
										<p><i class="feather-phone-call"></i> +91 99991 80747</p>
									</div>
									<div class="footer-address mb-0">
										<p><i class="feather-mail"></i> <a href="mailto:info@procareclinic.com">info@procareclinic.com</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-7">
					<div class="footer-widget">
						<h2 class="footer-title">Follow Us</h2>
						<div class="social-icon">
							<ul>
								<li>
									<a href="https://www.facebook.com/drpeeyushkumargastro/" target="_blank"><i class="fab fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/drpeeyushkumargastro/" target="_blank"><i class="fab fa-instagram"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/company/dr-piyush-kumar-gastro/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<!-- Copyright -->
			<div class="copyright">
				<div class="row">
					<div class="col-md-6 col-lg-6">
						<div class="copyright-text">
							<p class="mb-0">Copyright © 2024 Procare Clinic. Designed & Developed by Digidotes</p>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<!-- Copyright Menu -->
						<!-- <div class="copyright-menu">
							<ul class="policy-menu">
								<li><a href="privacy-policy.html">Privacy Policy</a></li>
								<li><a href="terms-condition.html">Terms and Conditions</a></li>
							</ul>
						</div> -->
						<!-- /Copyright Menu -->
					</div>
				</div>
			</div>
			<!-- /Copyright -->
		</div>
	</div>
</footer>

<!-- /Footer -->

<!-- Cursor -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- /Cursor -->

</div>
<!-- /Main Wrapper -->

<!-- ScrollToTop -->
<div class="progress-wrap active-progress">
	<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
	</svg>
</div>
<!-- /ScrollToTop -->
<!-- Conditionally Load Shared Scripts for 'home', 'about', and 'contact' -->
<!-- jQuery -->
<script data-cfasync="false" src="{{asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Bootstrap Bundle JS -->
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Feather Icon JS -->
<script src="{{asset('assets/js/feather.min.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Datepicker JS -->
<script src="{{asset('assets/js/moment.min.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>
<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Owl Carousel JS -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Slick JS -->
<script src="{{asset('assets/js/slick.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Animation JS -->
<script src="{{asset('assets/js/aos.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Counter JS -->
<script src="{{asset('assets/js/counter.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- BacktoTop JS -->
<script src="{{asset('assets/js/backToTop.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<!-- Custom JS -->
<script src="{{asset('assets/js/script.js')}}" type="36ceda772e0cd37651382bcb-text/javascript"></script>

<script src="{{asset('assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js')}}" data-cf-settings="36ceda772e0cd37651382bcb-|49" defer></script>
</body>

</html>