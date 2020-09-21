@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-8 m-auto">
        <div class="iq-card">
            <div class="iq-card-body">
               <form  method="POST" action="{{ url('remarkUpdate', $editData->id)}}" id="myForm" enctype="multipart/form-data">
                @csrf
                  <div class="form-row">
                     <div class="col-md-12 mb-3">
                        <label for="validationTooltip03">Remark Description</label>
                     <textarea id="summernote" name="remarksDescription" cols="50" rows="10">{{$editData->remarksDescription}}</textarea>
                     </div>
                  </div>
                  <button class="btn btn-primary pull-right" type="submit">Submit</button>
               </form>

            </div>
         </div>
  </div>

  <!-- Modal -->
 
 </div>

</div>





@endsection
