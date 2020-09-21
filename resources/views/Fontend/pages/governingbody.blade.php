@extends('Fontend.LayoutInner.master')

@section('contned')

<!--------------about banner--------------->
<section id="noticeBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>পরিচালনা পর্ষদ</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->
<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9">
                <div class="row">
                    {{-- <div class="col-lg-12">
                        <div class="noticeBoard">
                            <img src="{{ asset('public/Fontend/image/allbanner/notice.png')}}" class="img-fulid w-100" alt="">
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-menu gbMenu">
                    <ul>
                        @foreach ( $submenu as $myMenu )


                        <a href="{{$myMenu->StaticViewUrl}}">
                            <li>{{$myMenu->MenunameBangla}}</li>
                        </a>

                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/chairman.png')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>জনাব মোহাম্মদ সোলায়মান সেলিম</h4>
                        <p>চেয়ারম্যান</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/emdad.jpeg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>জনাব মোঃ শরীফুল এমদাদ</h4>
                        <p>শিক্ষানুরাগী সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/parvin.jpeg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>শামীম আরা পারভীন</h4>
                        <p>সাধারণ শিক্ষক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/Tapos.jpg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>তাপস কুমার রায়</h4>
                        <p>সাধারণ শিক্ষক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/airin.jpg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>আইরিন আজিজ</h4>
                        <p>সাধারণ শিক্ষক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/Dilruba.jpg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>দিলরুবা ইয়াসমিন</h4>
                        <p>সংরক্ষিত মহিলা শিক্ষক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/kajim.jpeg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>এস.এম. কাজিম</h4>
                        <p>অভিভাবক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/fatema.jpeg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>ফাতেমা আক্তার</h4>
                        <p>অভিভাবক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/liton.jpeg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>আনোয়ার হুসাইন লিটন</h4>
                        <p>অভিভাবক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/motaher.jpeg')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>মোঃ মোতাহারুল ইসলাম বাদল</h4>
                        <p>অভিভাবক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/parvej.jpeg')}} " class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>মোঃ পারভেজ খন্দকার</h4>
                        <p>অভিভাবক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/mahamuda.jpeg ')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>মাহমুদা সিদ্দিকা</h4>
                        <p>অভিভাবক সদস্য</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="teacherImageMain">
                <div class="teacherImage">
                    <img src="{{ asset('public/Fontend/image/governingBody/principal.png')}}" class="img-fulid w-100 " alt="">
                    <div class="teacherName">
                        <h4>জনাব মোঃ রেজাউজ্জামান ভূঁইয়া</h4>
                        <p>সদস্য সচিব</p>
                    </div>
                    <div class="teacherSocialAccount text-center">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!------faunded-------->
@endsection
