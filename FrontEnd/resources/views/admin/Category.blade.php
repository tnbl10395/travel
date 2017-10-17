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

    <!--ADD Categoy-->
   <div class="modal fade" id="AddCategory" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formAddCategory" action="{{url('admin/category-add')}}" method="POST" class="form-horizontal" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
                            <input name="categoryName" type="text" class="form-control">
                          </div>
                        </div>
                    </div>
                  </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-8">
                            <h7 style="font-size:16px; margin-top:5px;"><b>Do you want to create fields in table?</b></h7>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class=" row">
                      <div class=" col-sm-12" id="divColumn">
                        <div class="form-group" id="form-column">
                            <input type="text" name="field[]" class="col-sm-5" placeholder="Input field...">
                            <select name="dataType[]" id='selectDataType' class="custom-select-sm col-sm-3">
                                <option value="varchar">Varchar</option>
                                <option value="text">Text</option>
                                <option value="integer">Integer</option>
                                <option value="float">Float</option>
                            </select>
                            <input type="text" name="length[]" class="col-sm-3" placeholder="Length...">
                        </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-sm-12"> 
                        <div class="row">
                          <div class="control-label col-sm-1">
                            <a style="color: red; border: 0; background:none;font-size:20px;"  title='Add' id="addColumn" href="javascript:void(0);"><b><i class="fa fa-plus"></i></b></a>
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
                    <div class="row">
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
                          <button style="color: red; border: 0; background:none;font-size:20px;"  title='Add'><b><i class="fa fa-plus"></i></b></button>
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
        $(document).ready(function(){
           $('#addColumn').on('click',function () {
                var html  = "<div class='form-group' id='form-column'>";
                    html += "<input type='text' name='field[]' class='col-sm-5' placeholder='Input field...'>";
                    html += "  ";
                    html += "<select name='dataType[]' id='selectDataType' class='custom-select-sm col-sm-3'>";
                    html += "<option value='varchar'>Varchar</option>";
                    html += "<option value='text'>Text</option>";
                    html += "<option value='integer'>Integer</option>";
                    html += "<option value='float'>Float</option>";
                    html += "</select>";
                    html += "  ";
                    html += "<input type='text' name='length[]' id='length' class='col-sm-3' placeholder='Length...'>";
                    html += " ";
                    html += "<a href='javascript:void(0);' id='deleteRow'><i class='fa fa-times'></i></a>";
                    html += "</div>";
                 $('#divColumn').append(html);
                 $('#form-column #deleteRow').on('click',function () {
                    $(this).parent().remove();
                 });
                 $('#form-column #selectDataType').on('change',function () {
                     var dataType = $(this).val();
                     if(dataType === 'varchar'){
                         $(this).next().show();
                     }else{
                         $(this).next().hide();
                     }
                 });
           });

        });
    </script>
 @endsection
