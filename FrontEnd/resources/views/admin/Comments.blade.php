@extends('admin.template.app')
@section('title')
<title>Cmt Admin page</title>
@endsection
@section('content')

    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Managements</a>
        </li>
        <li class="breadcrumb-item active">Cmt</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>CmtID</th>
                  <th>UserID</th>
                  <th>HotelID</th>
                  <th>RestaurantID</th>
                  <th>TouristAttractions</th>
                  <th>content</th>
                  <th>Like</th>
                  <th>Dislike</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>CmtID</th>
                  <th>UserID</th>
                  <th>HotelID</th>
                  <th>RestaurantID</th>
                  <th>TouristAttractions</th>
                  <th>content</th>
                  <th>Like</th>
                  <th>Dislike</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>00001</td>
                  <td>001</td>
                  <td>001</td>
                  <td>001</td>
                  <td>001</td>
                  <td>Chỗ này đẹp nè</td>
                  <td>5</td>
                  <td>2</td>
                  <td>
                  	<button style="color: red; border: 0; background:none;" data-toggle='modal' title='See Location' data-target='#seeResultOfStudent'><b><i class="fa fa-list"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update Location' data-target='#update'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='confirmation' title='Delete Location' ><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
                <tr>
                  <td>00002</td>
                  <td>002</td>
                  <td>001</td>
                  <td>001</td>
                  <td>002</td>
                  <td>Chỗ này mát nì</td>
                  <td>10</td>
                  <td>1</td>
                  <td>
                  	<button style="color: red; border: 0; background:none;" data-toggle='modal' title='See Location' data-target='#seeLocation'><b><i class="fa fa-list"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update Location' data-target='#update'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='confirmation' title='Delete Location' ><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
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
   @endsection