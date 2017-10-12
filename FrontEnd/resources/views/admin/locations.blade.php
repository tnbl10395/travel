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
        <li class="breadcrumb-item active">Locations</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Table Example</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            
                <button type="button" class="btn btn-success">Thêm</button>
                 
              <thead>
                

                <tr>
                  <th>LocationID</th>
                  <th>LocationName</th>
                  <th>Picture</th>
                  <th>Description</th>
                  
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>LocationID</th>
                  <th>LocationName</th>
                  <th>Picture</th>
                  <th>Description</th>
                  
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>0401</td>
                  <td><a href="#">Liên Chiểu</a></td>
                  <td>lienchieu.jpg</td>
                  <td>Khu vực gần Hải Vân</td>
                 
                  <td>
                
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update Location' data-target='#update'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='confirmation' title='Delete Location' ><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
                <tr>
                  <td>0401</td>
                  <td>Hải Châu</td>
                  <td>haichau.jpg</td>
                  <td>Khu vực trung tâm thành phố</td>
                 
                  <td>
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
@endsection