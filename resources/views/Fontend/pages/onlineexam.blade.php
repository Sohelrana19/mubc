@extends('Fontend.LayoutInner.master')

@section('contned')
<section id="noticeBoadfInner">
        <div class="container">
           <div class="row">
               <div class="col-lg-12">
                @foreach ($exremark as $user)
                        
                   
                <p class="remarks">{!!$user->remarksDescription!!}</p> 
                
                @endforeach

                <div class="row">
                    <div class="classList">
                        <div class="row">

                            @foreach ($exam as $User )
            
                                <div class="col-lg-12 mb-3">
                                    <div class="schoolNoticeDetails syllabus">
                                       <div class="noticedetailsLeft downloadSallybusText">
                                        <h3>{{$User->classNameEnglish}}</h3>
                                       </div>
                                       <div class="noticedetailRight2 text-center">
                                        <a href="{{ url('banglaversion', $User->id)}}" target="_blank" style="color: #005CAC;"> বাংলা মাধ্যম</a>
                                       </div>
                                      
                                    </div>
                                   </div>
                                   
                            @endforeach
                            </div>
                    </div>
                    
                    <div class="classList">
                        <div class="row">

                            @foreach ($examEng as $User )
            
                                <div class="col-lg-12 mb-3">
                                    <div class="schoolNoticeDetails syllabus examversion">
                                       <div class="noticedetailsLeft downloadSallybusText">
                                        <h3>{{$User->classNameEnglish}}</h3>
                                       </div>
                                      
                                       <div class="noticedetailRight2  text-center">
                                        <a href="{{ url('banglaversion',$User->id)}}" target="_blank" style="color: #FF4F01;">English Version</a>
                                       </div>
                                    </div>
                                   </div>
                                   
                            @endforeach
                            </div>
                    </div>
                </div>
               </div>
               
        </div>
    </section>


@endsection