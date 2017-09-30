@extends('admin.template.app')
@section('title')
<title>Users Admin page</title>
@endsection
@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Managements</a>
        </li>
        <li class="breadcrumb-item active">Users</li>
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
                  <th>UserID</th>
                  <th>FullName</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Avatar</th>
                  <th width="20%">Address</th>
                  <th>rating</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>UserID</th>
                  <th>FullName</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Avatar</th>
                  <th>Address</th>
                  <th>rating</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>0001</td>
                  <td>Hiếu Lê Thị</td>
                  <td>hieut@gmail.com</td>
                  <td>0973006112</td>
                  <td>hieule.jpg</td>
                  <td>60 - Ngô Sỹ Liên - Đà Nẵng</td>
                  <td>1</td>
                  <td>
                  	<button style="color: red; border: 0; background:none;" data-toggle='modal' title='See Location' data-target='#seeResultOfStudent'><b><i class="fa fa-list"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update Location' data-target='#update'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='confirmation' title='Delete Location' ><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
                <tr>
                  <td>0002</td>
                  <td>Lê Hoài Diễm</td>
                  <td>diem@gmail.com</td>
                  <td>01206054976</td>
                  <td>hoadiem.jpg</td>
                  <td>82 - Nguyễn Du - TP Hồ Chí Minh</td>
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