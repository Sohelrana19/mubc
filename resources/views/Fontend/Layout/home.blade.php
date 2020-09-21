

@extends('Fontend.LayoutInner.master')

@section('contned')

    <!------banner part html------->
    <section id="banner">

        <div class="row mx-0 slider">
            <div class="col-lg-12 p-0">
                <div class="banner-slide">
					<img src="{{ asset('public/Fontend/image/banner/slide1.jpg')}}" class="-mg-fulid w-100 sliderMobil" alt="">
					<div class="bannerText">
						<div class="admission">
							<p>Admission 2020</p>
						</div>
						<h3>Get A Place.</h3>
						<h3>Get Ahead.</h3>

						<h5>Apply Before your Exams to Secure a Place</h5>
						<a href="">Apply Now</a>
					</div>
                </div>
			</div>
			<div class="col-lg-12 p-0">
                <div class="banner-slide">
					<img src="{{ asset('public/Fontend/image/banner/Slide2.jpg')}}" class="-mg-fulid w-100 sliderMobil" alt="">
					<div class="bannerText bannerText2">
						<div class="admission">
							<p>Admission 2020</p>
						</div>
						<h3>Get A Place.</h3>
						<h3>Get Ahead.</h3>

						<h5>Apply Before your Exams to Secure a Place</h5>
						<a href="">Apply Now</a>
					</div>
                </div>
			</div>
			<div class="col-lg-12 p-0">
                <div class="banner-slide">
					<img src="{{ asset('public/Fontend/image/banner/Slide3.jpg')}}" class="-mg-fulid w-100 sliderMobil" alt="">
					<div class="bannerText bannerText3">
						<div class="admission">
							<p>Admission 2020</p>
						</div>
						<h3>Get A Place.</h3>
						<h3>Get Ahead.</h3>

						<h5>Apply Before your Exams to Secure a Place</h5>
						<a href="">Apply Now</a>
					</div>
                </div>
            </div>

        </div>
    </section>
    <!------banner part html------->


<section id="latestNews">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="latestNews">
				<p>Latest Update</p>
			</div>
			<div class="scrollNews">
				<marquee class="col-xs-10 scroll-title" behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">
				@foreach ($notice as $user)
					
				<a href="{{ url('notice')}}"><span> **{{$user->titel}}** </span> </a>
				@endforeach

            </marquee>

			</div>
		</div>
		</div>
	</div>
</section>

<section id="gbSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="gbMain">
					<div class="gbImage">
					<img src="{{ asset('public/Fontend/image/GB/Kamal.png')}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>কামাল আহমেদ মজুমদার (এমপি)</p>
						<h5>মাননীয় শিল্প প্রতিমন্ত্রী, গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>মনিপুর উচ্চ বিদ্যালয় ও কলেজ শুধু মহানগরীর নয়, বাংলাদেশের কলেজিয়েট স্কুলগুলোর মধ্যে প্রথম সারির একটি প্রতিষ্ঠান। ১৯৬৯ সালে জুনিয়র হাই স্কুল হিসেবে এবং ১৯৭৩ সালে হাই স্কুল হিসেবে কার্যক্রম শুরু হয় নবম শ্রেণি পাঠদানের সরকারি স্বীকৃতি লাভের মাধ্যমে।<span>...</span></p>

					</div>
					<a href="">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="gbMain">
					<div class="gbImage">
					<img src="{{ asset('public/Fontend/image/GB/chairman.png')}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>রাশেদা আক্তার রত্না</p>
						<h5>চেয়ারম্যান, মনিপুর উচ্চ বিদ্যালয় এন্ড কলেজ</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>সৃষ্টি যাত্রাশুরু থেকে মানুষ নানা উপায়ে শিক্ষা লাভ করে আসছে । পরিবার, সমাজ ও প্রকৃতি থেকে মানুষ প্রথমে শিক্ষালাভ করে। আর প্রাতিষ্ঠানিক শিক্ষা সূচনা যখন থেকে, তখন থেকে পাঠ্যপুস্তক, পাঠ্যসূচি ,শ্রেণিকক্ষ ভিত্তিক পাঠদান , আনুষ্ঠানিক পরীক্ষা ও ফলাফল পদ্ধতির প্রবর্তন ঘটে। <span>...</span></p>

					</div>
					<a href="">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="gbMain">
					<div class="gbImage">
					<img src="{{ asset('public/Fontend/image/GB/principal.png')}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>মোঃ ফরহাদ হোসেন</p>
						<h5>প্রিন্সিপ্যাল, মনিপুর উচ্চ বিদ্যালয় এন্ড কলেজ</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>খুদে সৃজনশীল শিক্ষার্থীদের আঁকা-লেখায় সমৃদ্ধ হয়ে মনিপুর উ”চ বিদ্যালয় ও কলেজ ম্যাগাজিন প্রকাশিত হতে যা”েছ জেনে আমি খুবাই আনন্দিত। লেখাপড়ার পাশাপাশি প্রতিষ্ঠানটিতে সহপাঠ্যক্রমিক নানা আয়োজন রয়েছে। যেমনঃ বিজ্ঞানমেলা, বইমেলা <span>...</span></p>

					</div>
					<a href="">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="homeOnlineExam">
					<p>ONLINE</p>
					<h5>HOME TEST 2020</h5>
					<a href="{{ url('/examOnline')}}">Click here</a>
				</div>
			</div>
		</div>
	</div>
</section>



<section id="mainNotice">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<ul class="nav nav-pills newsEvent mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All News</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Academics</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Examination</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							<div class="col-lg-6">
								<div class="card eventCar">
								<img src="{{ asset('public/Fontend/image/Event/IMG_5155.png')}}" class="card-img-top" alt="...">
								<div class="card-body eventCardBody">
									<p class="card-text">Faculty of Social Sciences and Humanities celebrates students success</p>

									<h6>15 July, 2020</h6>

								</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="row">
									<div class="col-lg-12">
										<div class="eventRightImage">
										<img src="{{ asset('public/Fontend/image/Event/IMG_0066.png')}}" class="imgfulid w-100" alt="">
									</div>
										<div class="eventRightText">
										<p class="card-text">Faculty of Social Sciences and Humanities celebrates students success</p>
											<h6>15 July, 2020</h6>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="eventRightImage">
										<img src="{{ asset('public/Fontend/image/Event/IMG_0066.png')}}" class="imgfulid w-100" alt="">
									</div>
										<div class="eventRightText">
										<p class="card-text">Faculty of Social Sciences and Humanities celebrates students success</p>
											<h6>15 July, 2020</h6>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="eventRightImage">
										<img src="{{ asset('public/Fontend/image/Event/IMG_0066.png')}}" class="imgfulid w-100" alt="">
									</div>
										<div class="eventRightText">
										<p class="card-text">Faculty of Social Sciences and Humanities celebrates students success</p>
											<h6>15 July, 2020</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="noticeIteam">

					<h3>Notice Board</h3>
					<marquee behavior="" direction="up" scrollamount="2">
						<ul>
							@foreach ($notice as $user)
							<li>
							<a href="{{ url('examOnline')}}">
									<div class="noticeDate">
										<p>{{date('d-m-Y', strtotime($user->created_at))}}</p>
										<h6></h6>
									</div>
									<div class="noticeDetails">
										<p>{{$user->titel}}</p>
									</div>
								</a>
							</li>
							@endforeach
						</ul>
					</marquee>
				</div>
			</div>
		</div>
	</div>
</section>


    <!--------------bekash part-------------------->

    <section id="bekash">
        <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
							<div class="row">
								<div class="col-lg-6">
									<div class="bekashpap bekashpaptop">
										<img src="{{ asset('public/Fontend/image/bekash/parentportal.png')}}" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="bekashpay portal">
										<p>You can pay any fee through <span style="color:#F05A28;"> Parent's Portal</span></p>
		
										<img src="{{ asset('public/Fontend/image/bekash/portal.svg')}}"  alt="">
										<br>
										<a href="">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-6">
									<div class="bekashpap bekashpaptop bekaspartonly">
										<img src="{{ asset('public/Fontend/image/bekash/bkashapp.png')}}" alt="">
									</div>
								</div>
								<div class="col-lg-6">
									<div class="bekashpay portal bekashpayment">
										<p>You can pay any fee through<span style="color:#F05A28;"> Bkash</span></p>
										<img src="{{ asset('public/Fontend/image/bekash/bekas2.png')}}" alt=""> <br>
										<a href="">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
									</div>
									</div>
								</div>
						</div>
                    </div>
        </div>
    </section>
	<!--------------bekash part-------------------->


<!-------Know Part--------->
<section id="knowSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="knowHeader">
					<p>YOU CAN KNOW</p>
					<h3>By Our Digital Documents</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<img src="{{ asset('public/Fontend/image/know/001-video.svg')}}" alt="">
					</div>
					<h3>YouTube</h3>
					<h4>Educational Channel</h4>
					<a href="">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<img src="{{ asset('public/Fontend/image/know/002-time-management.svg')}}" alt="">
					</div>
					<h3>Routine</h3>
					<h4>Class Routine Details</h4>
					<a href="">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<img src="{{ asset('public/Fontend/image/know/003-brochure.svg')}}" alt="">
					</div>
					<h3>Prospectus</h3>
					<h4>Institution Details</h4>
					<a href="">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-------Know Part--------->


<section id="branch">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="branchhead text-center ">
						<h2>BRANCE</h2>
						<h3>Our Institution Branches</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="branch">
                        <img src="{{ asset('public/Fontend/image/Branch/main.png')}}" alt="">
                        <div class="branchtext">
                            <div class="campusname">
                                <p>Monipur Uchcha Vidyalaya and College(Girls)</p>
                            </div>
                            <div class="college text-center">
                                <h4>MAIN</h4>
                                <h5>CAMPUS</h5>
                            </div>
                            <div class="addressdetailsmubc">
                                <div class="addresscampus">
                                    <p>East Monipur Road,</p>
                                    <h6> Dhaka 1216</h6>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <h6>9000279</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="branch">
                        <img src="{{ asset('public/Fontend/image/Branch/boys.png')}}" alt="">
                        <div class="branchtext">
                            <div class="campusname">
                                <p>Monipur Uchcha Vidyalaya and College (Boys)</p>
                            </div>
                            <div class="college text-center">
                                <h4>MAIN</h4>
                                <h5>CAMPUS <br> 60 FEET</h5>
                            </div>
                            <div class="addressdetailsmubc">
                                <div class="addresscampus">
                                    <p>Rd No. 11,</p>
                                    <h6>Dhaka 1216</h6>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <h6>01711-909351</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="branch">
                        <img src="{{ asset('public/Fontend/image/Branch/1.png')}}" alt="">
                        <div class="branchtext">
                            <div class="campusname">
                                <p>Monipur Uchcha Vidyalaya and College</p>
                            </div>
                            <div class="college collegebranch text-center">
                                <h4>Branch</h4>
                                <h5>01</h5>
                            </div>
                            <div class="addressdetailsmubc">
                                <div class="addresscampus">
                                    <p>Rupnogor Abasik Elaka,</p>
                                    <h6>Pollobi, Dhaka</h6>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <h6>02-9011416</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="branch">
                        <img src="{{ asset('public/Fontend/image/Branch/2.png')}}" alt="">
                        <div class="branchtext">
                            <div class="campusname">
                                <p>Monipur Uchcha Vidyalaya and College</p>
                            </div>
                            <div class="college collegebranch text-center">
                                <h4>Branch</h4>
                                <h5>02</h5>
                            </div>
                            <div class="addressdetailsmubc">
                                <div class="addresscampus">
                                    <p>146 Ibrahimpur Road,</p>
                                    <h6>Dhaka</h6>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <h6>02-8750017</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="branch">
                        <img src="{{ asset('public/Fontend/image/Branch/3.png')}}" alt="">
                        <div class="branchtext">
                            <div class="campusname">
                                <p>Monipur Uchcha Vidyalaya and College</p>
                            </div>
                            <div class="college collegebranch text-center">
                                <h4>Branch</h4>
                                <h5>03</h5>
                            </div>
                            <div class="addressdetailsmubc">
                                <div class="addresscampus">
                                    <p>Begum Rokeya Avenue, </p>
                                    <h6> Dhaka 1206</h6>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <h6>901145</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4">
                    <div class="branch">
                        <img src="{{ asset('public/Fontend/image/Branch/Collegecampus.png')}}" alt="">
                        <div class="branchtext">
                            <div class="campusname">
                                <p>Monipur Uchcha Vidyalaya and College</p>
                            </div>
                            <div class="college text-center">
                                <h4>COLLEGE</h4>
                                <h5>CAMPUS</h5>
                            </div>
                            <div class="addressdetailsmubc">
                                <div class="addresscampus">
                                    <p>East Monipur Road,</p>
                                    <h6>Dhaka 1216</h6>
                                </div>
                                <div class="phone">
                                    <p>Phone:</p>
                                    <h6>02-9000297</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<section id="videoGallarySection">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="videoGallaryImage">
					<img src="{{ asset('public/Fontend/image/videoGallary/video.png')}}" alt="">
				</div>
			</div>
			<div class="col-lg-5">
				<div class="videoText">
					<h3>VIDEO GALLERY</h3>
					<h2>Watch our latest video</h2>
					<a href="">Apply Now</a>
				</div>
			</div>
		</div>
	</div>
</section>

    <!------app part-------------->

    <section id="apps">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="apps-download">
                        <h3>GET OUR APP NOW!</h3>
                        <p>Integrated with Mobile Apps, Hardware &amp; API connectivity, Student or Parents Portal, which taking care of Academic and Administrative activities on an institution.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.addiesoft.oems_apps&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" class="img-fulid w-100"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="apps-mobil">
                        <img src="{{ asset('public/Fontend/image/apps.png')}}" class="img-fulid" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
	<!-------app party------------>
	 <!---------admission part----------------->
    <section id="admissinpart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="ourScool">
						<p>Here you can review some statistics about our School</p>

						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/005-teacher-1.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>253+</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/007-student.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>253555</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/008-rating.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>97%</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/009-family.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>100%</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
	<!-------------footer------------------->
@endsection
