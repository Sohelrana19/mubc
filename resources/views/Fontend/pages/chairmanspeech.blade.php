
@extends('Fontend.LayoutInner.master')

@section('contned')


<!--------------about banner--------------->
<section id="noticeBanner" class="chairmanbanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>সভাপতির বাণী</h3>
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
                            <img src="{{ asset('public/Fontend/image/allbanner/bani.png')}}" class="img-fulid w-100" alt="">
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
        <div class="col-lg-12">
            <div class="patronImage">
                <img src="{{ asset('public/Fontend/image/chairman.png')}}" alt="">
            </div>
            <div class="patronImageAdvice">
                <p>অগ্রণী  স্কুল এন্ড কলেজ ঢাকার প্রাণকেন্দ্রে অবস্থিত একটি ঐতিহ্যবাহী শিক্ষা প্রতিষ্ঠান।বাংলাদেশের নারী শিক্ষার অন্যতম পথিকৃত ড. কাজী আনোয়ারা মনসুর কর্তৃক ১৯৫৭ সালে প্রতিষ্ঠার পর থেকে  নারী  শিক্ষায় অগ্রদূতের ভূমিকা পালন করে আসছে।এমন একটি  ঐতিহ্যবাহী  শিক্ষা প্রতিষ্ঠানের গভর্নিং  বডির সভাপতির দায়িত্বভার গ্রহণ  করতে পেরে আমি আনন্দিত ও  গর্বিত।
                    মানুষের মূল্যবোধ ও নৈতিকতার বিকাশ একমাত্র শিক্ষার মাধ্যমে ঘটানো সম্ভব। শুধু শিখন শেখানো নয় বরং মানবিক মূল্যবোধগুলোর জন্য প্রাতিষ্ঠানিক শিক্ষার পাশাপাশি সহশিক্ষা কার্যক্রমও প্রয়োজন। আর এই লক্ষ্যে  অগ্রণী স্কুল এন্ড কলেজ  যুগোপযোগী শিখন-শেখানো কার্যক্রম চালু রয়েছে।প্রতিনিয়ত  বিভিন্ন  ধরনের  আধুনিক পদক্ষেপ গ্রহনের মাধ্যমে এ প্রতিষ্ঠানকে আন্তর্জাতিক মানসম্পন্ন করার প্রচেষ্টা অব্যাহত আছে।
                    শিক্ষার্থী, অভিভাবক, শিক্ষক  ও  গভর্নিং বডির  সবাই একযোগে  কাজ করে  অগ্রণী স্কুল এন্ড কলেজকে  একটি সর্বাধুনিক  শিক্ষা  প্রতিষ্ঠানে  উন্নীত করবে এই শুভকামনা করছি।</p>
                <div class="patronDetails">
                    <h4>মোহাম্মদ সোলায়মান সেলিম</h4>
                    <h5>চেয়ারম্যান</h5>
                    <h6>অগ্রণী স্কুল এন্ড কলেজ</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection
