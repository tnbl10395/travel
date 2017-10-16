@extends('admin.template.app')
@section('title')
<title>Category Admin page</title>
@endsection
@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Managements</a>
        </li>
        <li class="breadcrumb-item active">Category</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-body">
          <button style="color: red; border: 0; background:none;font-size:24px;" data-toggle='modal' title='Add' data-target='#AddCategory'><b><i class="fa fa-plus"></i></b></button>
          <label>Add Category</label><br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" align="center" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  
                  <th>Name</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>0001</td>
                  <td>Hotel</td>
                  <td> 
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='update' data-target='#UpdateCategory'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-toggle='modal' title='delete' data-target='#DeleteCategory'><b><i class="fa fa-trash"></i></b></button>
                  </td>
                </tr>
              </tbody>
            </table>
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
    <!--ADD Categoy-->
   <div class="modal fade" id="AddCategory" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formAddCategory" method="" class="form-horizontal" >
                <div class="modal-header">
                  <h4 class="modal-tittle">ADD CATEGORY</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="margin: 10px;">
                  <div class="row">
                    <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-3">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Name</b></h7>
                          </div>
                          <div class="col-sm-8">
                            <input name="" type="text" class="form-control">
                          </div>
                        </div>
                    </div>
                  </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-8">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Please check items:</b></h7>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>

                    <div class=" row">
                      <div class=" col-sm-8"> 
                        
                        <div class="form-group ">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">item 1</span>
                          </label>
                        </div>
                        <div class="form-group ">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">item 2</span>
                          </label>
                        </div>
                        <div class="form-group">
                          <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">Item 3</span>
                          </label>
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-1">
                            <button style="color: red; border: 0; background:none;font-size:20px;"  title='Add' onclick='fun()' ><b><i class="fa fa-plus"></i></b></button>
                          </div>
                          <div class="col-sm-8">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Add New items</b></h7>
                           
                          </div>
                        </div>
                    </div>
                  </br>
                  </div>
                </div>
              <div class="modal-footer">
                  <input type="submit" id="btnAddCategory" class="btn btn-success btnAdd" value='Add'>
                  <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
              </div>
          </form>
        </div>
      </div>
  </div>

<!--update Categoy-->
    <div class="modal fade" id="UpdateCategory" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formUpdateCategory" method="" class="form-horizontal" >
                <div class="modal-header">
                  <h4 class="modal-tittle">UPDATE CATEGORY</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="margin: 10px;">
                  <div class="row">
                    <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-3">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Name</b></h7>
                          </div>
                          <div class="col-sm-8">
                            <input name="" type="text" class="form-control">
                          </div>
                        </div>
                    </div>
                  </div>
                  <br>
                  <div class="row">
                    <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-8">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Do you want to add fields in table?</b></h7>
                          </div>
                        </div>
                      </div>
                  </div>
                  <br>
                  <div class=" row">
                    <div class=" col-sm-8"> 
                      <div class="form-group ">
                        <label class="custom-control custom-checkbox">
                          <input type="text" class="custom-control-input">
                          <span class="custom-control-indicator"></span>
                        </label>
                      </div>
                    </div>
                  </div> 
                  <div class="row">
                    <div class="col-sm-12"> 
                      <div class="row">
                        <div class="control-label col-sm-1">
                          <button style="color: red; border: 0; background:none;font-size:20px;"  title='Add' onclick='fun()' ><b><i class="fa fa-plus"></i></b></button>
                        </div>
                        <div class="col-sm-8">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Add New items</b></h7>
                       </div>
                      </div>
                    </div>
                    <br>
                  </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" id="btnAddCategory" class="btn btn-success btnAdd" value='UPDATE'>
                    <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
                </div>
          </form>
        </div>
      </div>
  </div>

<!--Delete Categoy-->
   <div class="modal fade" id="DeleteCategory" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formDeleteCategory" method="" class="form-horizontal" >
              <div class="modal-header">
                <!-- <i class="fa fa-trash"> --></i>
                  <h4 class="modal-tittle">DELETE CATEGORY</h4>
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
 @section('script')
    <script>
      function fun(){
        document.write("<input type='text' name='text'> <button type='button' onclick='fun()'>Add</button>");
      }
    </script>
@endsection