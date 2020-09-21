@extends('Fontend.LayoutInner.master')

@section('contned')

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>News & Events</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pageBody">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="pageMenu">
					<p>Choose related option</p>
                    <ul id="accordion" class="accordion">
                        <li>
						  <div class="link"><a href="#">Notice</a><i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link"><a href="#">Class Routine</a><i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link">Academic Rules<i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link">Our Teacher<i class="fa fa-chevron-down"></i></div>

						</li>
						<li>
						  <div class="link">Syllabus<i class="fa fa-chevron-down"></i></div>

						</li>
						{{-- <li>
							<div class="link">Achievement <i class="fa fa-chevron-down"></i></div>

						  </li> --}}

					  </ul>

                </div>
            </div>
            <div class="col-lg-9">
              <div class="row">

                @foreach ($notice as $user )

                <div class="col-lg-12">
                    <div class="schoolNoticeDetails noticeboardInner">
                        <div class="noticedetailsLeft ">
                         <h3>{{$user->titel}}</h3>

                        </div>
                        <div class="noticedetailRight text-center">
                         <a target="blank" href="{{URL::to($user->image)}}"><img src="{{ asset('public/Fontend/image/notice/pdfNotice.svg')}}" alt=""><br> Download Notice</a>
                        </div>
                     </div>

                   </div>
                @endforeach

              </div>
            </div>
        </div>
    </div>
</section>


@endsection
