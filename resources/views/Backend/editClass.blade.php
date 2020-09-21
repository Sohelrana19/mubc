@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-9 m-auto">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">EditClass List</h4>
                 </div>
              </div>
              <div class="iq-card-body">
              <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{  url('onlineUpdate', $editData->id)}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Class Name</label>
                            <input type="text" class="form-control" name="classNameEnglish" value="{{$editData->classNameEnglish}}" >
                         </div>
                      </div>
                      <div class="form-row">

                         {{-- <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Class Name Bangla</label>
                            <input type="text" class="form-control" name="classNameBangla" value="{{$editData->classNameBangla}}" >
                         </div> --}}
                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">Version</label>
                            <select class="form-control" name="classVersionID"  >
                               <option value="Bangla" {{($editData->classVersionID=="Bangla")?"selected":""}}>Bangla</option>
                               <option value="English" {{($editData->classVersionID=="English")?"selected":""}}>English</option>
                            </select>
                         </div>
                      </div>
                      <button class="btn btn-primary pull-right" type="submit">Submit</button>
                   </form>

                </div>
             </div>
           </div>
        </div>
  </div>






@endsection
