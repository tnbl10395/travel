@extends('admin.template.app')
@section('title')
<title>Place Admin page</title>
@endsection
@section('content')

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Managements</a>
        </li>
        <li class="breadcrumb-item active">Place</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        
        <div class="card-body">
          <div class="row" style="margin: auto;">
            <div class="col-sm-3">
              <label>Please select category:</label>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
              <select class="form-control" id="sel1">
              <option>Hotel</option>
              <option>i</option>
              <option>i</option>
              <option>i</option>
              </select>
              </div>
              <br>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>PlaceID</th>
                  <th>Category</th>
                  <th>Locations</th>
                  <th>PlaceName</th>
                  <th>Detail</th>
                  <th>Address</th>
                  <th>Rating</th>  
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>PlaceID</th>
                  <th>Category</th>
                   <th>Locations</th>
                  <th>PlaceName</th>
                  <th>Detail</th>
                  <th>Address</th>
                  <th>Rating</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>00001</td>
                  <td>Hotels</td>
                  <td><a href="#">LienChieu</a></td>
                  <td>novotel</td>
                  <td>Chỗ này đẹp nè</td>
                  <td>58 nguyen Luong Bằng</td>
                  <td>5</td>
                  <td>
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update Location' data-target='#update'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='delete' data-target='#deletePlace'><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
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
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>

</div>


        <!-- DELETE Place -->
<div class="modal fade" id="deletePlace" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formDeleteCategory" method="" class="form-horizontal" >
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