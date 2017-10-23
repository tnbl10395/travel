@extends('admin.template.app')
@section('title')
<title>Comment - Admin page</title>
@endsection
@section('content')

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Managements</a>
        </li>
        <li class="breadcrumb-item active">Comment</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CommentID</th>
                  <th>UserID</th>
                  <th>PlaceID</th>
                  <th>content</th>
                  <th>Like</th>
                  <th>Dislike</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>CommentID</th>
                  <th>UserID</th>
                  <th>PlaceID</th>
                  <th>content</th>
                  <th>Like</th>
                  <th>Dislike</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
              @if($listComment!=null)
                @foreach($listComment as $objectComment)
                <tr>
                  <td>{{$objectComment->commentID}}</td>
                  <td>{{$objectComment->userID}}</td>
                  <td>{{$objectComment->placeID}}</td>
                  <td>{{$objectComment->content}}</td>
                  <td>{{$objectComment->amountOfLike}}</td>
                  <td>{{$objectComment->amountOfDisLike}}</td>
                  <td>
                    @if($objectComment->status==0)
                      <button style="color: red; border: 0; background:none;" data-id="{{$objectComment->commentID}}" data-toggle='modal' title='Accept Comment' data-target='#acceptComment'><b><i class="fa fa-check"></i></b></button>
                    @endif
                    <button style="color: red; border: 0; background:none;" data-id="{{$objectComment->commentID}}" data-toggle='modal' title='delete' data-target='#deleteCmt'><b><i class="fa fa-trash"></i></b></button>
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

<!-- DELETE CMT -->
<div class="modal fade" id="deleteCmt" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formDeleteCategory" method="post" action="/admin/comment-delete/@if($listComment!=null){{$objectComment->commentID}}@endif" class="form-horizontal" >
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="modal-header">
                <!-- <i class="fa fa-trash"> --></i>
                  <h4 class="modal-tittle">DELETE LOCATION</h4>
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
    {{--Accept comment--}}
    <div class="modal fade" id="acceptComment" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
        <!-- Modal content-->
        <div class="modal-content">
          <form id="formDeleteCategory" method="post" action="/admin/comment-accept/@if($listComment!=null){{$objectComment->commentID}}@endif" class="form-horizontal" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="modal-header">
              <!-- <i class="fa fa-trash"> --></i>
              <h4 class="modal-tittle">ACCEPT COMMENT</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body" style="margin: 10px;">
              <p>Would you like to accept the comment ?</p>
            </div>

            <div class="modal-footer">
              <input type="submit" id="btnDeleteCategory" class="btn btn-success btnUpdate" value='OK'>
              <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
            </div>
          </form>
        </div>
      </div>
    </div>
 @endsection