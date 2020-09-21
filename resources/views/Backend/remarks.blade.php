@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">List Remark</h4>
                 </div>
              </div>
              <div class="iq-card-body">
               <div id="table" class="table-editable">
                 
                 <table id="example" class="table table-bordered table-responsive-md table-striped text-center">
                   <thead>
                     <tr>
                       <th>Sl</th>
                       {{-- <th>Remark Title</th> --}}
                       <th>Remark Description</th>
                       <th>Action</th>

                     </tr>
                   </thead>
                   <tbody>

                   @foreach ($remark as $kye => $user)
                       
                   
                    <tr>
                    <td>{{$kye+1}}</td>
                     
                    {{-- <td>{{$user->remarksTitle}}</td> --}}
                      <td>{!!$user->remarksDescription!!}</td>
                      <td>
                        <div class="flex align-items-center list-user-action">
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{ url('remarkEdit',$user->id)}}"><i class="ri-pencil-line"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                   </tbody>
                 </table>
               </div>
           </div>
        </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Add Remark</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{ url('remarkStore')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Remark Title</label>
                            <input type="text" class="form-control" name="remarksTitle" id="validationTooltipUsername" >
                         </div>
                         <div class="col-md-12 mb-3">
                            <label for="validationTooltip03">Remark Description</label>
                            <textarea id="summernote" name="remarksDescription" cols="50" rows="10"></textarea>
                         </div>
                      </div>
                      <button class="btn btn-primary pull-right" type="submit">Submit</button>
                   </form>

                </div>
             </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 </div>

</div>





@endsection
