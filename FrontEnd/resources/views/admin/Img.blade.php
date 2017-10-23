@extends('admin.template.app')
@section('title')
<title>Home Admin page</title>
@endsection
@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Managements</a>
        </li>
        <li class="breadcrumb-item active">Imgs</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
        <button style="color: red; border: 0; background:none;font-size:24px;" data-toggle='modal' title='Add' data-target='#addImage'><b><i class="fa fa-plus"></i></b></button>
        <label>Add Category</label><br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ImgID</th>
                  <th>PlaceID</th>
                  <th>commentID</th>
                  <th>ImgName</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ImgID</th>
                  <th>PlaceID</th>
                  <th>commentID</th>
                  <th>ImgName</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              @if($data!=null)
                @foreach ($data as $objectImg)
                <tr>
                  <td>{{$objectImg->imageID}}</td>
                  <td>{{$objectImg->placeID}}</td> 
                  <td>{{$objectImg->commentID}}</td>
                  <td>{{$objectImg->imageName}}</td>
                  <td>
                    @if($objectImg->commentID!=null)
                       <button style="color: red; border: 0; background:none;" data-id="{{$objectImg->imageID}}" data-toggle='modal' title='update' data-target='#updateImg'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    @endif
                    <button style="color: red; border: 0; background:none;" data-id="{{$objectImg->imageID}}" data-toggle='modal' title='delete' data-target='#deleteImg'><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
                @endforeach
               @endif
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- ADD IMG -->
    <div class="modal fade" id="addImage" role="dialog">
        <div class="modal-dialog modal-lg" style="width:500px;">
            <!-- Modal content-->
            <div class="modal-content">
                <form id="formDeleteCategory" method="post" action="/admin/image-add" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="modal-header">
                        <h4 class="modal-tittle">ADD IMAGE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body" style="margin: 10px;">
                        <div class="form-group">
                            <input type="file" class="form-control" name="picture">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="picture">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="picture">
                        </div>
                        <div class="form-group">
                            <input type="file" class="form-control" name="picture">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="submit" id="btnDeleteCategory" class="btn btn-success btnUpdate" value="Add">
                        <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!-- DELETE IMG -->
    <div class="modal fade" id="deleteImg" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formDeleteCategory" method="post" action="/admin/image/@if($data!=null){{$objectImg->imageID}}@endif" class="form-horizontal" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="modal-header">
                <!-- <i class="fa fa-trash"> --></i>
                  <h4 class="modal-tittle">DELETE IMAGE</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>
              <div class="modal-body" style="margin: 10px;">
                   <p>Are you sure you want to Delete ?</p>
              </div>
           
              <div class="modal-footer">
                <input type="submit" id="btnDeleteCategory" class="btn btn-success btnUpdate" value='Delete'>
                <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
              </div>
            </form>
          </div>
      </div>
    </div>
 @endsection
