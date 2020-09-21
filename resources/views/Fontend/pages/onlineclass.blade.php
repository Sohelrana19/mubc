@extends('Fontend.LayoutInner.master')

@section('contned')

    <section id="noticeBoadfInner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="examshedule">



                    
                    <h3> <span class="className">{{$exam->classNameEnglish}}</span>  ({{($exam->classVersionID=="Bangla")?" বাংলা মাধ্যম":"English Version"}})</h3>
                    
                    @foreach ($exremark as $user)
                        
                   
                    <p class="remarks">{!!$user->remarksDescription!!}</p> 
                    
                    @endforeach


                    <div class="table-responsive ">
                        <table class="table table-striped table-bordered">
                        <thead style="text-transform: capitalize;">
                            <tr>
                            <th scope="col">{{($exam->classVersionID=="Bangla")?" ক্রমিক নং":"Sl No"}}</th>
                            <th scope="col">{{($exam->classVersionID=="Bangla")?" বিষয়":"Subject"}}</th>
                            <th scope="col">{{($exam->classVersionID=="Bangla")?" পরীক্ষার তারিখ":"Exam Date"}}</th>
                            <th scope="col">{{($exam->classVersionID=="Bangla")?" পরীক্ষার সময়":"Exam Time"}}</th>
                            <th scope="col" class="examlink">{{($exam->classVersionID=="Bangla")?" পরীক্ষার অংশগ্রহণের জন্য নিচে ক্লিক কর":"Click below to participate in the Exam"}}</th>
                            </tr>
                        </thead>

                        <tbody class="examclass">
                        @foreach ($ClassVerEnglisg as $kye => $User )
                            <tr>
                            <th scope="row">{{$kye+1}}</th>
                            <td class="examlink">{{$User->subject}}</td>
                            <td>{{date('d-m-Y', strtotime($User->examDate))}}</td>
                            <td class="examlink">{{$User->examTime}}</td>
                            <td class="exanLink">
                                <a href="{{$User->examLink}}"  target="_blank" >Click Here</a>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    <div class="backLink">
                    <a href="{{ url('examOnline')}}">বাংলা মাধ্যম</a> <a href="{{ url('examOnline')}}" style="background-color: #EBEBEB; color:#000;border: 1px solid #FF4F01; margin-left: 10px">English Version</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
