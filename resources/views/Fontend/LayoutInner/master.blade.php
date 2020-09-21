<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Monipur Uchcha Vidyalaya and College</title>



<!---Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<!---Fonts-->
<!-- CSS only -->

<link rel='stylesheet' id='megamenu-css'  href="{{ asset('public/Fontend/css/bootstrap.min.css')}}"  media='all' />
<link rel='stylesheet' id='megamenu-css'  href="{{ asset('public/Fontend/css/slick.css')}}"  media='all' />
<link rel='stylesheet' id='megamenu-css'  href="{{ asset('public/Fontend/css/venobox.css')}}"  media='all' />
<link rel='stylesheet' id='megamenu-css'  href="{{ asset('public/Fontend/css/animationCustome.css')}}"  media='all' />
<link rel='stylesheet' id='megamenu-css'  href="{{ asset('public/Fontend/css/style.css')}}"  media='all' />
<link rel='stylesheet' id='acadevo-main-style-css'  href="{{ asset('public/Fontend/css/media.css ')}}" media='all' />

</head>

<body style="overflow-x: hidden">

	<!---Header TopBar-->
	<section id="topHeader">
		<div class="container">
			<div class="row">
				<div class="topInfo">
					<ul>
						<li><img src="{{ asset('public/Fontend/image/schoolLogo/email-84.svg')}}" alt=""> </li>
						<li><img src="{{ asset('public/Fontend/image/schoolLogo/phone-2.svg')}}" alt=""></li>
					</ul>
				</div>
				<div class="socialIconTop">
					<ul>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/fb.svg')}}" alt=""></li>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/twit.svg')}}" alt=""></li>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/utube.svg')}}" alt=""></li>
						<li class="parentsZone"><a href="{{ route('login')}}" target="blank">ADMIN ZONE</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!---Header TopBar-->

<header id="headerSticky">
		<!---logobar-->
		<section id="logoPart">
			<div class="container">
				<div class="row">
					<div class="schoolLogo">
					<a href="{{ url('/')}}"><img src="{{ asset('public/Fontend/image/schoolLogo/muv2color.svg')}}" alt=""></a>
					</div>
					<div class="mujibBar text-right">
						<a href="{{ url('/examOnline')}}">
							<img src="{{ asset('public/Fontend/image/schoolLogo/HomeExam.png')}}" alt="">
						</a>
					</div>
				</div>
			</div>
		</section>
		<!---logobar-->



		<!----------------navBar------------->
		<nav id="menuBar" class="navbar navbar-expand-lg deskMenu">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav">
						<li>
							<a href="{{ url('/')}}" style="color: #000;">HOME</a>
						</li>
						<li>
							About MUBC
							{{-- <ul class="dropdowndesk">
								<li><a  href="#">Brief History</a></li>
								<li><a  href="#">Message from State Minister</a></li>
								<li><a  href="#">Message from  Chairman</a></li>
								<li><a  href="#">Message from Principal</a></li>
								<li><a  href="#">Mission and Vision</a></li>
								<li><a  href="#">Why Study at MUBC</a></li>
								<li><a  href="#">Master Plan</a></li>
								<li><a  href="#">Infrastructure</a></li>

							</ul> --}}
						</li>
						<li>
							Academic
							{{-- <ul class="dropdowndesk">
                                <li><a href="">Academic Calendar</a></li>
							    <li><a href="{{ url('notice')}}">Notice</a></li>
								<li><a href="">Class Routine</a></li>
								<li><a href="">Book List and Syllabus</a></li>
                                <li><a href="">Exam Routine</a></li>
                                <li><a href="{{ url('examOnline')}}">Exam Shedule</a></li>
								<li><a href="infrastructure.html">Tutorial and Assignment</a></li>

							</ul> --}}
						</li>
						<li>
							ADMISSION
							{{-- <ul class="dropdowndesk">
								<li><a href="">Admission</a></li>
								<li><a href="">Admission Circular</a></li>
								<li><a href="">Admission Form </a></li>
								<li><a href="">Prospectus</a></li>
								<li><a href="">Dress Code</a></li>
								<li><a href="">Admission Question Papers (Previous)</a></li>
							</ul> --}}
						</li>
						<li>
							Administration
							{{-- <ul class="dropdowndesk">
								<li><a href="">Message from State Minister</a></li>
								<li><a href="">Message from State Chairman</a></li>
								<li><a href="">Message from State Principal</a></li>
								<li><a href="">Rules and Regulation</a></li>
								<li><a href="">Governing Body </a></li>
								<li><a href="">Assistant Headmaster</a></li>
								<li><a href="">Deparments</a></li>
							</ul> --}}
						</li>
						<li>
							FACILITIES
							{{-- <ul class="dropdowndesk">
								<li><a href=""> Facilities </a></li>
								<li><a href=""> Counselling </a></li>
								<li><a href="newsEvent.html">Multimedia Class Room</a></li>
								<li class="chlidDropedown">Labratories
                                    <ul class="academicResult">
										<li><a href="">Chemistry Lab </a></li>
										<li><a href="">Biology Lab</a></li>
										<li><a href="">ICT Lab</a></li>
									</ul>
                                </li>
                                <li><a href=""> Co-curricular Activity </a></li>
                                <li><a href=""> Medical </a></li>
                                <li><a href=""> Librrary </a></li>
                                <li><a href=""> Gymnasia </a></li>
                                <li><a href=""> Play Ground </a></li>
                                <li><a href=""> Free Mineral Water </a></li>
                                <li><a href=""> Cantine </a></li>
                                <li><a href=""> Fredom Fighter Corner </a></li>
                                <li><a href=""> All time CCTV Camera </a></li>

							</ul> --}}
						</li>
						<li>
							College Campus
							{{-- <ul class="dropdowndesk">
								<li><a href="">College History</a></li>
								<li><a href="">Message from Founder</a></li>
								<li><a href="">Message from  Chairman</a></li>
								<li><a href="">Message from Principal</a></li>
								<li><a href="">Message from Vice Principal</a></li>

                                <li><a href="">Facilities</a></li>
                                <li><a href="">Book List and Syllabus</a></li>
                                <li><a href="">Academic Calendar</a></li>
                                <li class="chlidDropedown">Lesson Plan
									<ul class="academicResult">
										<li><a href="">XI</a></li>
										<li><a href="">XII</a></li>
									</ul>
                                </li>
								<li><a href="">Dress Code</a></li>
                                <li><a href="">Prospectus</a></li>
                                <li class="chlidDropedown">Class Routine
									<ul class="academicResult">
										<li><a href="">XI</a></li>
										<li><a href="">XII</a></li>
									</ul>
                                </li>
                                <li class="chlidDropedown">Exam Routine
									<ul class="academicResult">
										<li><a href="">First Monthly Exam</a></li>
										<li><a href="">2nd Monthly Exam</a></li>
										<li><a href="">Half Yearly Exam</a></li>
										<li><a href="">3rd Monthly Exam</a></li>
										<li><a href="">4th Monthly Exam</a></li>
										<li><a href="">Yearly Final Exam</a></li>
									</ul>
                                </li>
								<li><a href="">Admission Result</a></li>
								<li><a href="">Exam Result</a></li>
								<li><a href="">Associate and Lecturer Info</a></li>
								<li><a href="">Infrastructure</a></li>
								<li><a href="">Contact Info</a></li>

							</ul> --}}
						</li>
						<li>
							GALLERY
							{{-- <ul class="dropdowndesk">
								<li><a href=""> Photo Gallery </a></li>
								<li><a href=""> Video Gallary </a></li>
							</ul> --}}
						</li>
						<li>CONTACT</li>
					</ul>
				</div>
			</div>
		</nav>
		<!----------------navBar------------->
		<!----------------navBar------------->
				<nav id="mobilbar" class="navbar navbar-expand-lg mobilMenu">
					<div class="container">

						<a class="navbar-brand logoMobil" href="{{ url('/')}}"><img src="{{ asset('public/Fontend/image/schoolLogo/muv2color.svg')}}" alt=""></a>
						<a class="navbar-brand logoMobil" href="{{ url('/examOnline')}}"><img src="{{ asset('public/Fontend/image/schoolLogo/HomeExam.png')}}" alt=""></a>
						<button class="navbar-toggler mobilToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon mobilMenuIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
						</button>

						<div class="collapse navbar-collapse mobilMenuCollapse" id="navbarSupportedContent">
							<ul class="navbar-nav mobilNavbar mr-auto">
							  <li class="nav-item active">
								<a class="nav-link" href="{{ url('/')}}">HOME</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									About MUBC<i class="fas fa-chevron-down"></i>
								</a>
								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
								  <a class="dropdown-item" href="chairmanspeech.html">Brief History</a>
								  <a class="dropdown-item" href="principleSpeech.html">Message from State Minister</a>
								  <a class="dropdown-item"  href="#">Message from  Chairman</a>
								  <a class="dropdown-item"  href="#">Message from Principal</a>
								  <a class="dropdown-item"  href="#">Mission and Vision</a>
								  <a class="dropdown-item"  href="#">Why Study at MUBC</a>
								  <a class="dropdown-item"  href="#">Master Plan</a>
								  <a class="dropdown-item"  href="#">Infrastructure</a>

								</div> --}}
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Academic<i class="fas fa-chevron-down"></i>
								</a>
								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="">Academic Calendar</a>
									<a class="dropdown-item" href="{{ url('notice')}}">Notice</a>
									<a class="dropdown-item" href="">Class Routine</a>
									<a class="dropdown-item" href="">Book List and Syllabus</a>
									<a class="dropdown-item" href="">Exam Routine</a>
									<a class="dropdown-item" href="{{ url('examOnline')}}">Exam Shedule</a>
									<a class="dropdown-item" href="">Tutorial and Assignment</a>
								</div> --}}
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ADMISSION<i class="fas fa-chevron-down"></i>
								</a>
								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-menu"  href="">Admission</a>
									<a class="dropdown-menu"  href="">Admission Circular</a>
									<a class="dropdown-menu"  href="">Admission Form </a>
									<a class="dropdown-menu"  href="">Prospectus</a>
									<a class="dropdown-menu"  href="">Dress Code</a>
									<a class="dropdown-menu"  href="">Admission Question Papers (Previous)</a>
								</div> --}}
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Administration<i class="fas fa-chevron-down"></i>
								</a>
								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="">Message from State Minister</a>
									<a class="dropdown-item" href="">Message from State Chairman</a>
									<a class="dropdown-item" href="">Message from State Principal</a>
									<a class="dropdown-item" href="">Rules and Regulation</a>
									<a class="dropdown-item" href="">Governing Body </a>
									<a class="dropdown-item" href="">Assistant Headmaster</a>
									<a class="dropdown-item" href="">Deparments</a>
								</div> --}}
							  </li>

							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									FACILITIES<i class="fas fa-chevron-down"></i>
								</a>
								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href=""> Facilities </a>
									<a class="dropdown-item" href=""> Counselling </a>
									<a class="dropdown-item" href="newsEvent.html">Multimedia Class Room</a>
									<a class="dropdown-item" href="">Chemistry Lab </a>
									<a class="dropdown-item" href="">Biology Lab</a>
									<a class="dropdown-item" href="">ICT Lab</a>
									<a class="dropdown-item" href=""> Co-curricular Activity </a>
									<a class="dropdown-item" href=""> Medical </a>
									<a class="dropdown-item" href=""> Librrary </a>
									<a class="dropdown-item" href=""> Gymnasia </a>
									<a class="dropdown-item" href=""> Play Ground </a>
									<a class="dropdown-item" href=""> Free Mineral Water </a>
									<a class="dropdown-item" href=""> Cantine </a>
									<a class="dropdown-item" href=""> Fredom Fighter Corner </a>
									<a class="dropdown-item" href=""> All time CCTV Camera </a>
								</div> --}}
							  </li>
							  

							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									College Campus<i class="fas fa-chevron-down"></i>
								</a>
								{{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="">College History</a>
									<a class="dropdown-item" href="">Message from Founder</a>
									<a class="dropdown-item" href="">Message from  Chairman</a>
									<a class="dropdown-item" href="">Message from Principal</a>
									<a class="dropdown-item" href="">Message from Vice Principal</a>
									<a class="dropdown-item" href="">Facilities</a>
									<a class="dropdown-item" href="">Book List and Syllabus</a>
									<a class="dropdown-item" href="">Academic Calendar</a>
									<a class="dropdown-item" href="">Lesson Plan</a>
									<a class="dropdown-item" href="">Dress Code</a>
									<a class="dropdown-item" href="">Prospectus</a>
									<a class="dropdown-item" href="">Class Routine</a>
									<a class="dropdown-item" href="">First Monthly Exam</a>
									<a class="dropdown-item" href="">2nd Monthly Exam</a>
									<a class="dropdown-item" href="">Half Yearly Exam</a>
									<a class="dropdown-item" href="">3rd Monthly Exam</a>
									<a class="dropdown-item" href="">4th Monthly Exam</a>
									<a class="dropdown-item" href="">Yearly Final Exam</a>
									<a class="dropdown-item" href="">Admission Result</a>
									<a class="dropdown-item" href="">Exam Result</a>
									<a class="dropdown-item" href="">Associate and Lecturer Info</a>
									<a class="dropdown-item" href="">Infrastructure</a>
									<a class="dropdown-item" href="">Contact Info</a>
								</div> --}}
							  </li>


							  <li class="nav-item">
								<a class="nav-link" href="#">CONTACT</a>
							  </li>
							</ul>
							<div class="navContact">
								<h4>Contact Info</h4>
								<span class="navMenuNumber"></span> <span></span>
								<ul>
									<li><i class="fab fa-facebook-f"></i></li>
									<li><i class="fab fa-twitter"></i></li>
									<li><i class="fab fa-instagram"></i></li>
									<li><i class="fab fa-linkedin-in"></i></li>
								</ul>
							</div>
						  </div>
					</div>
				</nav>
		<!----------------navBar------------->
</header>

    <!------banner part html------->
    @yield('contned')

	<!-------------footer------------------->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upfooter">
                        <ul>

                            <li><img src="{{ asset('public/Fontend/image/mail.png')}}" alt=""> <span>Get Appointment</span> </li>
                            <li><img src="{{ asset('public/Fontend/image/placeholder.png')}}" alt=""> <span>Contact Us Today</span> </li>
                            <li><img src="{{ asset('public/Fontend/image/paper-plane.png')}}" alt=""> <span>Take a School Tour</span> </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row mt-4 m-footer">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <h5>About us</h5>
                        <p>The school secured the 2nd position in in terms of securing highest number of first divisions in the primary terminal examinations across the country.</p>
                        <a href="#" class="btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="quick-view">
                        <h5>IMPORTANT LINK</h5>
                        <ul>
                            <li><a href="http://www.dhaka.gov.bd/" style="color: #fff;" target="blank">Dhaka Districts office</a></li>
                            <li><a href="https://www.dhakaeducationboard.gov.bd/" style="color: #fff;" target="blank">Dhaka Education Board</a></li>
                            <!-- <li><a href="">Dhaka Districts office</a> </li>
                            <li><a href="">Dhaka Education Board</a></li> -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="quick-view">
                        <h5>Services</h5>
                        <ul>
                            <li>Admission</li>
                            <li>Result</li>
                            <li>Online Admission</li>
                            <li>Fees Payment</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="quick-view">
                        <h5>Contact Info</h5>
                        <ul>
                            <li>+88 01769856256</li>

                            <p style="color: #fff;margin-top: 4px;margin-bottom: 7px; font-weight: bold;">Working ours</p>
                            <li>Week Days: 7 AM - 5 PM</li>
                            <li>Friday : Close</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="facebook">
                        <h4>Facebook</h4>
                        <ul>
                            <li><img src="{{ asset('public/Fontend/image/mubcfacebook.jpg')}}" alt=""></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footerContact">
                        <h3>Contact Info</h3>
                        <ul>
                            <li></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <div class="icon">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>© Copyright 2020 , All Rights Reserved <br> Powered by ODHYYON, A product of <a href="https://addiesoft.com/" style="color: #fff;">ADDIE Soft Ltd</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------footer------------------>

<!-- To Top -->
<a id="totop" href="#top"><i class="tm-acadevo-icon-angle-up"></i></a>



<!-- JS, Popper.js, and jQuery -->
<script src="https://kit.fontawesome.com/dedaf8eeba.js" crossorigin="anonymous"></script>
<script  src="{{ asset('public/Fontend/js/jquery-1.12.4.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/bootstrap.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/slick.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/wow.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/custom.js')}}"></script>

<script>
	$( document ).ready(function() {

	// Loop through each nav item
	$('nav.navbar').children('ul.nav').children('li').each(function(indexCount){

		// loop through each dropdown, count children and apply a animation delay based on their index value
		$(this).children('ul.dropdown').children('li').each(function(index){

			// Turn the index value into a reasonable animation delay
				var delay = 0.1 + index*0.03;

				// Apply the animation delay
				$(this).css("animation-delay", delay + "s")
			});
		});
	});
</script>

{{-- <script> 
	document.addEventListener('contextmenu', event=> event.preventDefault()); 
	document.onkeydown = function(e) { 
	if(event.keyCode == 123) { 
	return false; 
	} 
	if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){ 
	return false; 
	} 
	if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){ 
	return false; 
	} 
	if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){ 
	return false; 
	} 
	} 
	</script>  --}}

</body>

</html>

