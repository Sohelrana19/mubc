@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-sm-12">
        <div class="iq-card">
              <div class="iq-card-header d-flex justify-content-between">
                 <div class="iq-header-title">
                    <h4 class="card-title">Class List</h4>
                 </div>
              </div>
              <div class="iq-card-body">
               <div id="table" class="table-editable">
                 <span class="table-add float-right mb-3 mr-2">
                    <button class="btn btn-sm iq-bg-success" data-toggle="modal" data-target="#staticBackdrop"><i
                       class="ri-add-fill"><span class="pl-1">Add New</span></i>
                    </button>
                 </span>
                 <table id="example" class="table table-bordered table-responsive-md table-striped text-center">
                   <thead>
                     <tr>
                       <th>Sl</th>
                       <th>Class Name</th>
                       {{-- <th>Class Name English</th> --}}
                       <th>Version</th>
                       <th>Action</th>

                     </tr>
                   </thead>
                   <tbody>

                   @foreach ( $onlineClass as $kye => $class )
                    <tr>
                      <td>{{$kye+1}}</td>
                      {{-- <td>{{$class->classNameBangla}}</td> --}}
                      <td>{{$class->classNameEnglish}}</td>
                      <td>{{$class->classVersionID}}</td>
                      <td>
                        <div class="flex align-items-center list-user-action">
                            <a data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="{{route('onlineExam.edit',$class->id)}}"><i class="ri-pencil-line"></i></a>
                            <a id="delete" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="{{route('onlineExam.delet',$class->id)}}"><i class="ri-delete-bin-line"></i></a>
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
          <h5 class="modal-title" id="staticBackdropLabel">Add Class</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="iq-card">
                <div class="iq-card-body">
                   <form  method="POST" action="{{route('onlineExam.store')}}" id="myForm" enctype="multipart/form-data">
                    @csrf
                      <div class="form-row">

                         <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Class Name</label>
                            <input type="text" class="form-control" name="classNameEnglish" id="validationTooltipUsername" >
                         </div>
                      </div>
                      <div class="form-row">

                         {{-- <div class="col-md-12 mb-3">
                            <label for="validationTooltipUsername">Class Name Bangla</label>
                            <input type="text" class="form-control" name="classNameBangla" id="validationTooltipUsername" >
                         </div> --}}
                         <div class="col-md-6 mb-3">
                            <label for="validationTooltip04">Version</label>
                            <select class="form-control" name="classVersionID" id="validationTooltip04" >
                               <option selected="" disabled="" value="">Select Class</option>
                               <option value="Bangla">Bangla</option>
                               <option value="English">English</option>
                            </select>
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
