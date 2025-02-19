<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from doccure.dreamstechnologies.com/html/template// by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 06:38:56 GMT -->

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
	<meta name="keywords" content="practo clone, doccure, doctor appointment, Practo clone html template, doctor booking template">
	<meta name="author" content="Practo Clone HTML Template - Doctor Booking Template">
	<meta property="og:url" content="https://doccure.dreamstechnologies.com/html/">
	<meta property="og:type" content="website">
	<meta property="og:title" content="Doctors Appointment HTML Website Templates | Doccure">
	<meta property="og:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
	<meta property="og:image" content="assets/img/preview-banner.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="twitter:domain" content="https://doccure.dreamstechnologies.com/html/">
	<meta property="twitter:url" content="https://doccure.dreamstechnologies.com/html/">
	<meta name="twitter:title" content="Doctors Appointment HTML Website Templates | Doccure">
	<meta name="twitter:description" content="The responsive professional Doccure template offers many features, like scheduling appointments with  top doctors, clinics, and hospitals via voice, video call & chat.">
	<meta name="twitter:image" content="assets/img/preview-banner.jpg">
	<title>@yield('title', 'ProCares')</title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('assets/img/favicon1.png')}}" type="image/x-icon">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

	<style type="text/css">
		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/300/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/300/normal.woff2);
			unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/300/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/400/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/400/normal.woff2);
			unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/400/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/500/normal.woff2);
			unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/500/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/500/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/600/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/600/normal.woff2);
			unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/600/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/700/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/700/normal.woff2);
			unicode-range: U+0900-097F, U+1CD0-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FF;
			font-display: swap;
		}

		@font-face {
			font-family: Poppins;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/700/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}
	</style>
	<style type="text/css">
		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 200;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 300;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 400;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 500;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 600;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 700;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 800;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);
			unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+0300-0301, U+0303-0304, U+0308-0309, U+0323, U+0329, U+1EA0-1EF9, U+20AB;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);
			unicode-range: U+0301, U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);
			unicode-range: U+1F00-1FFF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);
			unicode-range: U+0100-02AF, U+0304, U+0308, U+0329, U+1E00-1E9F, U+1EF2-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
			font-display: swap;
		}

		@font-face {
			font-family: Inter;
			font-style: normal;
			font-weight: 900;
			src: url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);
			unicode-range: U+0370-03FF;
			font-display: swap;
		}
	</style>

	<!-- Feathericon CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/feather.css')}}">

	<!-- Datepicker CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

	<!-- Animation CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">

	<!-- Main CSS -->
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

</head>

<body>

	<!-- Main Wrapper -->
	<div class="main-wrapper home-one">

		<!-- Header -->
		<header class="header header-custom header-fixed header-one home-head-one">
			<div class="container">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="/" class="navbar-brand logo">
							<img src="{{asset('assets/img/imglogo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="/" class="menu-logo">
								<img src="{{asset('assets/img/imglogo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li class="has-submenu megamenu {{Route::current()->getName() === 'home' ? 'active' :''}}">
								<a href="{{route('home')}}">Home</a>
							</li>
							<li class="has-submenu {{Route::current()->getName() === 'about' ? 'active' :''}}">
								<a href="{{route('about')}}">About Us</a>
							</li>
							<li class="has-submenu {{ Route::current()->getName() === 'depatments' || Route::current()->getName() === 'services.index' ? 'active' : ''}}">
								<a href="{{route('depatments')}}">Services<i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									@foreach($services = \App\Models\Service::all()->where('status', 1)->unique('department') as $service)
									<li class="has-submenu">
										<a href="javascript:void(0);">{{ucfirst($service->department)}}</a>
										<ul class="submenu inner-submenu">
											@foreach($services = \App\Models\Service::all()->where('status', 1)->where('department', $service->department) as $s)
											<li><a href="{{route('services.show', $s->slug)}}">{{$s->title}}</a></li>
											@endforeach
										</ul>
									</li>
									@endforeach
								</ul>
							</li>
							<li class="has-submenu {{Route::current()->getName() === 'blogs.index' ? 'active' :''}}">
								<a href="{{route('blogs.index')}}">Blogs</a>
							</li>
							<li class="has-submenu {{ Route::current()->getName() === 'gallery' || Route::current()->getName() === 'video' ? 'active' : '' }}">
								<a href="javascript:void(0);">Gallery <i class="fas fa-chevron-down"></i></a>
								<ul class="submenu">
									<li><a href="{{ route('gallery') }}">Gallery</a></li>
									<li><a href="{{ route('video') }}">Video</a></li>
								</ul>
							</li>
							<li class="has-submenu {{Route::current()->getName() === 'contact' ? 'active' :''}}">
								<a href="{{route('contact')}}">Contact Us</a>
							</li>
							<!-- <li class="searchbar">
								<a href="javascript:void(0);"><i class="feather-search"></i></a>
								<div class="togglesearch">
									<form action="https://doccure.dreamstechnologies.com/html/template/search.html">
										<div class="input-group">
											<input type="text" class="form-control">
											<button type="submit" class="btn">Search</button>
										</div>
									</form>
								</div>
							</li> -->
							<li class="login-link"><a href="{{route('contact')}}">Login / Signup</a></li>
						</ul>
					</div>
					<ul class="nav header-navbar-rht">
						<!-- <li class=""> -->
						<li class="register-btn searchbar">
							<a href="javascript:void(0);"><i class="feather-search"></i></a>
							<div class="togglesearch">
								<form action="https://doccure.dreamstechnologies.com/html/template/search.html">
									<div class="input-group">
										<input type="text" class="form-control">
										<button type="submit" class="btn">Search</button>
									</div>
								</form>
							</div>
						</li>
						<!-- </li> -->
						<li class="register-btn">
							<a href="{{route('contact')}}" class="btn reg-btn"><i class="feather-user"></i>Make An Appoinment</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<!-- /Header -->