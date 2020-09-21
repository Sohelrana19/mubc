<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul class="iq-menu">
        @if(Auth::user()->userType=='Admin')
          <li class="active">
             <a href="javascript:void(0);" class="iq-waves-effect"><i class="las la-home"></i><span>Manage User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
             <li class=""><a href="{{ route('users.view')}}">View User</a></li>

             </ul>
          </li>
          @endif

          <li>
             <a href="javascript:void(0);" class="iq-waves-effect"><span>Notice</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
                <li><a href="{{ route('slider.view')}}">View Notice</a></li>
                {{-- <li><a href="e-commerce-product-detail.html">Product Details</a></li> --}}

             </ul>
          </li>
          <li>
             <a href="javascript:void(0);" class="iq-waves-effect"><span>Class Setup</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
                <li><a href="{{ route('onlineExam.view')}}">Class</a></li>
             </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><span>Online Exam(Bangla)</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               @foreach ($menus as  $menu)
               <li><a href="{{ route('onlineclass.view', $menu->id)}}">{{$menu->classNameEnglish}}</a></li>
               @endforeach

            </ul>
         </li>

         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><span>Online Exam(English)</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">

               @foreach ($menuEnglisg as  $Emenu)
               <li><a href="{{ url('onlineclassEng', $Emenu->id)}}">{{$Emenu->classNameEnglish}}</a></li>
               @endforeach
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"><span>Remark</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">
               <li><a href="{{ url('remark')}}">Add Remark</a></li>
            </ul>
         </li>

       </ul>
    </nav>
    <div class="p-3"></div>
 </div>
