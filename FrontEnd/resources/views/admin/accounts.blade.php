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
                  <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update' data-target='#updateLocation'><b><i class="fa fa-pencil-square-o"></i></b></button>
                      <button style="color: red; border: 0; background:none;" data-toggle='confirmation' title='Delete' ><b><i class="fa fa-trash"></i></b></button>
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
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='Update' data-target='#updateLocation'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='confirmation' title='Delete Location' ><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Select "Logout" below if you are ready to end your current session.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="./Admin/Login">Logout</a>
            </div>
        </div>
      </div>
    </div>

    <!--UPDATE ACCOUNTS-->
   <div class="modal fade" id="updateLocation" role="dialog">
      <div class="modal-dialog modal-lg" style="width:600px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formupdateLocation" method="" class="form-horizontal" >
               <div class="modal-header">
                <h4 class="modal-tittle">CẬP NHẬT TÀI KHOẢN</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body" style="margin: 10px;">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>FullName</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <input name="fullname" type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>Email</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <input name="fullname" type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>Rating</b></h7>
                          </div>
                          <div class="col-sm-8">
                          <label for="updateLocation"><b>xxxx</b></label>
                          </div>
                        </div>

                      </div>

                    <div class="col-sm-6">
                      <div class="row">
                        <div class="control-label col-sm-4">
                        <h7 style="margin-left:20px; font-size:16px; margin-top:5px;"><b>Phone</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <input name="fullname" type="text" class="form-control">
                          <br>
                        </div>
                      </div> 
                      <div class="row">
                        <div class="control-label col-sm-4">
                        <h7 style="margin-left:20px; font-size:16px; margin-top:5px;"><b>Address</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <input name="fullname" type="text" class="form-control">
                          <br>
                        </div>
                      </div> 
                    </div>
                </div>
                <br>
                 <div class="form-group">
                    <label for="updateLocation"><b>Upload Avartar</b></label>
                 </div>
                 
                 <div class="row" style="margin-left:5px;">
                  <input type="file" name="file" id="updateLocationFile">
                </div>
             </div>
           
             <div class="modal-footer">
                <input type="submit" id="btnupdateLocation" class="btn btn-success btnUpdate" value='Update'>
                <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
             </div>
          </form>
        </div>
      </div>
  </div>


 @endsection
 <!-- @section('script')
    <script>
        $( ".btnUpdate" ).click(function() {
        $.showLoading({name: 'circle-fade',allowHide: false});  
        });
    </script>
@endsection -->