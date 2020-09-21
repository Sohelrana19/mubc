@extends('Fontend.LayoutInner.master')

@section('contned')


    <!--------------about banner--------------->
    <section id="noticeBanner" class="history">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-banner-text ">
                        <h3>প্রতিষ্ঠানের ইতিহাস</h3>
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
                                <img src="{{ asset('public/Fontend/image/allbanner/history.png')}}" class="img-fulid w-100" alt="">
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
                    <p>এই প্রতিষ্ঠানের প্রতিষ্ঠাতা ডঃ কাজী আনোয়ারা মনসুর ১৯৫৭ সালে ২১ জানুয়ারি পবিত্র মিলাদ মাহফিলের মাধ্যমে তাবুর নিচে ১৪ জন ছাত্র-ছাত্রী নিয়ে আজিমপুর কিন্ডার গার্টেন স্কুলের শুভ সূচনা করেন। কালের স্রোতের আবর্তে স্কুলের অবস্থারও পরিবর্তন হয়। এই কিন্ডার গার্টেন উন্নীত হলো প্রাইমারি ও জুনিয়র স্কুলে। যুগের প্রয়োজনে স্কুলের কাঠামো বদলে যায়। স্কুল কর্তৃপক্ষ বাংলা মাধ্যমে পাঠদানের উপকারিতা বুঝে স্কুলের নাম পরিবর্তন করেন এবং মাধ্যমিক শিক্ষা বোর্ডের সিলেবাস অনুযায়ী পড়ানোর ব্যবস্থা গ্রহণ করেন। ১৯৬৬ সালে স্কুলের নামকরণ করা হলো অগ্রণী বালিকা বিদ্যালয়। পরিচালনা পরিষদ এবং শিক্ষক/শিক্ষিকা মন্ডলীর আন্তরিক প্রচেষ্টায় এ প্রতিষ্ঠানটির কলেবর ও গুণগতমান উত্তরোত্তর বৃদ্ধি পেতে থাকে এরই ধারাবাহিকতায় ১৯৯৪ সালে ১ জুলাই চালু হয় কলেজ শাখা। প্রাসঙ্গিকভাবে প্রতিষ্ঠানটির নামকরণ করা হয় অগ্রণী স্কুল ও কলেজ।</p>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
