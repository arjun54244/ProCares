<!DOCTYPE html>
<html lang="zxx">
	
<!-- Mirrored from doccure.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 06:38:56 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" >
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
		<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
				
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">

		<style type="text/css">@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/300/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/300/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/300/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/400/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/400/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/400/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/500/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/500/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/500/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/600/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/600/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/600/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin/700/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/devanagari/700/normal.woff2);unicode-range:U+0900-097F,U+1CD0-1CF9,U+200C-200D,U+20A8,U+20B9,U+25CC,U+A830-A839,U+A8E0-A8FF;font-display:swap;}@font-face {font-family:Poppins;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/s/poppins/5.0.11/latin-ext/700/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}</style>
		<style type="text/css">@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:200;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:300;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:400;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:500;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:600;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:700;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:800;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic-ext/wght/normal.woff2);unicode-range:U+0460-052F,U+1C80-1C88,U+20B4,U+2DE0-2DFF,U+A640-A69F,U+FE2E-FE2F;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/vietnamese/wght/normal.woff2);unicode-range:U+0102-0103,U+0110-0111,U+0128-0129,U+0168-0169,U+01A0-01A1,U+01AF-01B0,U+0300-0301,U+0303-0304,U+0308-0309,U+0323,U+0329,U+1EA0-1EF9,U+20AB;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin/wght/normal.woff2);unicode-range:U+0000-00FF,U+0131,U+0152-0153,U+02BB-02BC,U+02C6,U+02DA,U+02DC,U+0304,U+0308,U+0329,U+2000-206F,U+2074,U+20AC,U+2122,U+2191,U+2193,U+2212,U+2215,U+FEFF,U+FFFD;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/cyrillic/wght/normal.woff2);unicode-range:U+0301,U+0400-045F,U+0490-0491,U+04B0-04B1,U+2116;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek-ext/wght/normal.woff2);unicode-range:U+1F00-1FFF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/latin-ext/wght/normal.woff2);unicode-range:U+0100-02AF,U+0304,U+0308,U+0329,U+1E00-1E9F,U+1EF2-1EFF,U+2020,U+20A0-20AB,U+20AD-20CF,U+2113,U+2C60-2C7F,U+A720-A7FF;font-display:swap;}@font-face {font-family:Inter;font-style:normal;font-weight:900;src:url(https://doccure.dreamstechnologies.com/cf-fonts/v/inter/5.0.16/greek/wght/normal.woff2);unicode-range:U+0370-03FF;font-display:swap;}</style>

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
							<a href="index.html" class="navbar-brand logo">
								<img src="{{asset('assets/img/logo-01.svg')}}" class="img-fluid" alt="Logo">
							</a>
						</div>
						<div class="main-menu-wrapper">
							<div class="menu-header">
								<a href="index.html" class="menu-logo">
									<img src="{{asset('assets/img/logo-01.svg')}}" class="img-fluid" alt="Logo">
								</a>
								<a id="menu_close" class="menu-close" href="javascript:void(0);">
									<i class="fas fa-times"></i>
								</a>
							</div>
							<ul class="main-nav">
								<li class="has-submenu megamenu active">
									<a href="javascript:void(0);">Home <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu mega-submenu">
										<li>
											<div class="megamenu-wrapper">
												<div class="row">
													<div class="col-lg-2">
														<div class="single-demo active">
															<div class="demo-img">
																<a href="index.html" class="inner-demo-img"><img src="assets/img/home/home-01.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index.html" class="inner-demo-img">General Home 1</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-2.html" class="inner-demo-img"><img src="assets/img/home/home-02.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-2.html" class="inner-demo-img">General Home 2</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-3.html" class="inner-demo-img"><img src="assets/img/home/home-03.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-3.html" class="inner-demo-img">General Home 3</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-5.html" class="inner-demo-img"><img src="assets/img/home/home-04.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-5.html" class="inner-demo-img">Cardiology</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-6.html" class="inner-demo-img"><img src="assets/img/home/home-05.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-6.html" class="inner-demo-img">Eyecare</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo ">
															<div class="demo-img">
																<a href="index-7.html" class="inner-demo-img"><img src="assets/img/home/home-06.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-7.html" class="inner-demo-img">Veterinary</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-8.html" class="inner-demo-img"><img src="assets/img/home/home-07.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-8.html" class="inner-demo-img">Pediatric</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-9.html" class="inner-demo-img"><img src="assets/img/home/home-08.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-9.html" class="inner-demo-img">Fertility</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-10.html" class="inner-demo-img"><img src="assets/img/home/home-09.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-10.html" class="inner-demo-img">ENT</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-11.html" class="inner-demo-img"><img src="assets/img/home/home-10.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-11.html" class="inner-demo-img">Cosmetics</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-12.html" class="inner-demo-img"><img src="assets/img/home/home-11.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-12.html" class="inner-demo-img">Lab Test</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="pharmacy-index.html" class="inner-demo-img"><img src="assets/img/home/home-12.jpg" class="img-fluid" alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-12.html" class="inner-demo-img">Pharmacy</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-13.html" class="inner-demo-img"><img src="assets/img/home/home-13.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-13.html" class="inner-demo-img">Home Care</a>
															</div>
														</div>
													</div>
													<div class="col-lg-2">
														<div class="single-demo">
															<div class="demo-img">
																<a href="index-14.html" class="inner-demo-img"><img src="assets/img/home/home-14.jpg" class="img-fluid " alt="img"></a>
															</div>
															<div class="demo-info">
																<a href="index-14.html" class="inner-demo-img">Dentists</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="javascript:void(0);">Doctors <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="doctor-dashboard.html">Doctor Dashboard</a></li>
										<li><a href="appointments.html">Appointments</a></li>
										<li><a href="available-timings.html">Available Timing</a></li>
										<li><a href="my-patients.html">Patients List</a></li>
										<li><a href="patient-profile.html">Patients Profile</a></li>
										<li><a href="chat-doctor.html">Chat</a></li>
										<li><a href="invoices.html">Invoices</a></li>
										<li><a href="doctor-profile-settings.html">Profile Settings</a></li>
										<li><a href="reviews.html">Reviews</a></li>
										<li><a href="doctor-register.html">Doctor Register</a></li>
										<li class="has-submenu">
											<a href="doctor-blog.html">Blog</a>
											<ul class="submenu">
												<li><a href="doctor-blog.html">Blog</a></li>
												<li><a href="blog-details.html">Blog view</a></li>
												<li><a href="doctor-add-blog.html">Add Blog</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="javascript:void(0);">Patients <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="patient-dashboard.html">Patient Dashboard</a></li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Doctors</a>
											<ul class="submenu inner-submenu">
												<li><a href="map-grid.html">Map Grid</a></li>
												<li><a href="map-list.html">Map List</a></li>
											</ul>
										</li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Search Doctor</a>
											<ul class="submenu inner-submenu">
												<li><a href="search.html">Search Doctor 1</a></li>
												<li><a href="search-2.html">Search Doctor 2</a></li>
											</ul>
										</li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Doctor Profile</a>
											<ul class="submenu inner-submenu">
												<li><a href="doctor-profile.html">Doctor Profile 1</a></li>
												<li><a href="doctor-profile-2.html">Doctor Profile 2</a></li>
											</ul>
										</li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Booking</a>
											<ul class="submenu inner-submenu">
												<li><a href="booking.html">Booking 1</a></li>
												<li><a href="booking-2.html">Booking 2</a></li>
											</ul>
										</li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="booking-success.html">Booking Success</a></li>
										<li><a href="favourites.html">Favourites</a></li>
										<li><a href="chat.html">Chat</a></li>
										<li><a href="profile-settings.html">Profile Settings</a></li>
										<li><a href="change-password.html">Change Password</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="javascript:void(0);">Pharmacy <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="pharmacy-index.html">Pharmacy</a></li>
										<li><a href="pharmacy-details.html">Pharmacy Details</a></li>
										<li><a href="pharmacy-search.html">Pharmacy Search</a></li>
										<li><a href="product-all.html">Product</a></li>
										<li><a href="product-description.html">Product Description</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="product-checkout.html">Product Checkout</a></li>
										<li><a href="payment-success.html">Payment Success</a></li>
										<li><a href="pharmacy-register.html">Pharmacy Register</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="javascript:void(0);">Pages <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="about-us.html">About Us</a></li>
										<li><a href="contact-us.html">Contact Us</a></li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Call</a>
											<ul class="submenu inner-submenu">
												<li><a href="voice-call.html">Voice Call</a></li>
												<li><a href="video-call.html">Video Call</a></li>
											</ul>
										</li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Invoices</a>
											<ul class="submenu inner-submenu">
												<li><a href="invoices.html">Invoices</a></li>
												<li><a href="invoice-view.html">Invoice View</a></li>
											</ul>
										</li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Authentication</a>
											<ul class="submenu inner-submenu">
												<li><a href="login-email.html">Login Email</a></li>
												<li><a href="login-phone.html">Login Phone</a></li>
												<li><a href="doctor-signup.html">Doctor Signup</a></li>
												<li><a href="patient-signup.html">Patient Signup</a></li>
												<li><a href="forgot-password.html">Forgot Password 1</a></li>
												<li><a href="forgot-password2.html">Forgot Password 2</a></li>
												<li><a href="login-email-otp.html">Email OTP</a></li>
												<li><a href="login-phone-otp.html">Phone OTP</a></li>
											</ul>
										</li>
										<li class="has-submenu">
											<a href="javascript:void(0);">Error Pages</a>
											<ul class="submenu inner-submenu">
												<li><a href="error-404.html">404 Error</a></li>
												<li><a href="error-500.html">500 Error</a></li>
											</ul>
										</li>
										<li><a href="blank-page.html">Starter Page</a></li>
										<li><a href="pricing.html">Pricing Plan</a></li>
										<li><a href="faq.html">FAQ</a></li>
										<li><a href="maintenance.html">Maintenance</a></li>
										<li><a href="coming-soon.html">Coming Soon</a></li>
										<li><a href="terms-condition.html">Terms & Condition</a></li>
										<li><a href="privacy-policy.html">Privacy Policy</a></li>
										<li><a href="components.html">Components</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="#">Blog <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-grid.html">Blog Grid</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li class="has-submenu">
									<a href="#">Admin <i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="admin/index.html" target="_blank">Admin</a></li>
										<li><a href="pharmacy/index.html" target="_blank">Pharmacy Admin</a></li>
									</ul>
								</li>
								<li class="searchbar">
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
								<li class="login-link"><a href="login.html">Login / Signup</a></li>
							</ul>
						</div>
						<ul class="nav header-navbar-rht">
							<li class="register-btn">
								<a href="register.html" class="btn reg-btn"><i class="feather-user"></i>Register</a>
							</li>
							<li class="register-btn">
								<a href="login.html" class="btn btn-primary log-btn"><i class="feather-lock"></i>Login</a>
							</li>
						</ul>
					</nav>
				</div>
			</header>
			<!-- /Header -->		
