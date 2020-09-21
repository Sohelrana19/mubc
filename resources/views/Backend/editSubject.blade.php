@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                 <h4 class="card-title">Exam Schedule Class </span> </h4>
                 </div>
              </div>
              <div class="iq-card-body">
                <div class="iq-card-body">
                    <form  method="POST" action="{{ url('editClassUpdate', $editData->SubId)}}" id="myForm" enctype="multipart/form-data">
                     @csrf
                     
                       <div class="form-row">
 
                          <div class="col-md-12 mb-3">
                             <label for="validationTooltipUsername">Subject</label>
                             <input type="text" class="form-control" name="subject" value="{{$editData->subject}}">
                          </div>
                       </div>
                       <div class="form-row">
 
                          <div class="col-md-12 mb-3">
                             <label for="validationTooltipUsername">Exam Date</label>
                             <input type="date" class="form-control" name="examDate" value="{{$editData->examDate}}">
                          </div>
 
                       </div>
                       <div class="form-row">
 
                          <div class="col-md-12 mb-3">
                             <label for="validationTooltipUsername">Exam Time</label>
                             <input type="text" class="form-control" name="examTime" value="{{$editData->examTime}}">
                          </div>
 
                       </div>
                       <div class="form-row">
 
                          <div class="col-md-12 mb-3">
                             <label for="validationTooltipUsername">Exam Link</label>
                             <input type="text" class="form-control" name="examLink" value="{{$editData->examLink}}">
                          </div>
 
                       </div>
                       <div class="form-row">
                        <div class="col-md-6 mb-3">
                           <label for="validationTooltip04">status</label>
                           <select class="form-control" name="Is_Active" id="validationTooltip04" required>
                              <option selected="" disabled="" value="">Select Class</option>
                              <option value="0" {{($editData->Is_Active=="0")?"selected":""}}>Active</option>
                              <option value="1" {{($editData->Is_Active=="1")?"selected":""}}>InActive</option>
                           </select>
                        </div>
                     </div>
                       <button class="btn btn-primary pull-right" type="submit">Submit</button>
                    </form>
 
                 </div>
           </div>
        </div>
  </div>

  <!-- Modal -->

 </div>

</div>


@endsection
