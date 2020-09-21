@extends('Fontend.LayoutInner.master')

@section('contned')

<!--------------about banner--------------->
<section id="noticeBanner" class="applyNow">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>আবেদন করুন</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->
<section>
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="noticeBoard">
                            <img src="{{ asset('public/Fontend/image/allbanner/apply.png')}}" class="img-fulid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-menu">
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
<!------faunded-------->

<section id="noticeBoadfInner" class="patronSecetion">
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="patronImageAdvice">
                <img src="{{ asset('public/Fontend/image/download.jpeg')}}" class="img-fulid w-100" alt="">

                <a href="http://www.xiclassadmission.gov.bd/" target="blank" style="font-size: 22px; font-weight: bold;">www.xiclassadmission.gov.bd</a>

                <img src="{{ asset('public/Fontend/image/vorti1.jpg')}}" class="img-fulid w-100 mt-3 mb-3" alt="">
                <img src="{{ asset('public/Fontend/image/vorti2.jpg')}}" class="img-fulid w-100" alt="">
            </div>
        </div>
    </div>
</div>
</section>



@endsection
