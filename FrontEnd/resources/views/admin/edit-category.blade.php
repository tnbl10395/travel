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
            <li class="breadcrumb-item">
                <a href="#">Category</a>
            </li>
            <li class="breadcrumb-item active">Edit Category</li>
        </ol>
        @if($column[0]!=null)
        <form id="formUpdateCategory" method="post" action="/admin/category-edit/{{$column[0]->categoryID}}" class="form-horizontal" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="catName" value="{{$column[0]->categoryName}}">
            <div class="modal-header">
                <h4 class="modal-tittle">UPDATE CATEGORY</h4>
            </div>
            <div class="modal-body" style="margin: 10px;">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="control-label col-sm-2">
                                <h7 style="font-size:16px; margin-top:5px;"><b>Name</b></h7>
                            </div>
                            <div class="col-sm-10">
                                {{--@foreach($cat as $name)--}}
                                <input name="categoryName" type="text" class="form-control" value="{{$column[0]->categoryName}}">
                                {{--@endforeach--}}
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="control-label col-sm-8">
                                <h7 style="font-size:16px; margin-top:5px;"><b>Do you want to edit fields in table?</b></h7>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class=" row">
                    <div class=" col-sm-12" id="divColumn">
                        {{--@foreach($column as $col)--}}
                        @for($i=1;$i<count($column);$i++)
                        <div class="form-group" id="form-column">
                            <input type="text" name="field[]" class="col-sm-5" placeholder="Input field..." value="{{$column[$i]->Field}}" required>
                            <select name="dataType[]" id='selectDataType' class="custom-select-sm col-sm-3">
                                <option value="varchar"@if($column[$i]->Type=='varchar'){{'selected="selected"'}}@endif>Varchar</option>
                                <option value="text"@if($column[$i]->Type=='text'){{'selected="selected"'}}@endif>Text</option>
                                {{--<option value="integer">Integer</option>--}}
                                {{--<option value="float">Float</option>--}}
                            </select>
                            @if($column[$i]->Type=='varchar')
                            <input type="hidden" id="columnType" value="{{$column[$i]->Length}}">
                            <input type="text" name="length[]" id="selectDataType" class="col-sm-3" placeholder="Length..." value="{{$column[$i]->Length}}">
                            @endif

                            <a href='javascript:void(0);' data-id="{{$column[0]->categoryName.'%'.$column[$i]->Field}}" data-toggle='modal' title='Delete' data-target='#deleteColumn'><i class='fa fa-times'></i></a>
                        </div>
                        @endfor
                        {{--@endforeach--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                            <div class="control-label col-sm-5">
                                <a style="color: red; border: 0; background:none;font-size:20px;"  title='Add' id="addColumn" href="javascript:void(0);"><b><i class="fa fa-plus"></i></b></a>
                                <h7 style="font-size:16px; margin-top:5px;"><b>Edit Items</b></h7>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" id="btnUpdateCategory" class="btn btn-success btnAdd" value='UPDATE'>
                <button class="btn btn-default btn-close-popup" data-dismiss="modal">Cancel</button>
            </div>
        </form>
        @endif
    </div>
    <div class="modal fade" id="deleteColumn" role="dialog">
        <div class="modal-dialog modal-lg" style="width:500px;">
            <!-- Modal content-->
            <div class="modal-content">
                <form id="formDeleteCategory" method="get" action="/admin/column-delete/@if($column!=null){{$column[0]->categoryName.'%'.$column[$i-1]->Field}}@endif" class="form-horizontal" >
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <!-- <i class="fa fa-trash"> </i>-->
                        <h4 class="modal-tittle">DELETE COLUMN</h4>
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
            {{--var val = $('#form-column #columnType').val();--}}
            {{--if(val !== null){--}}
                {{--$(this).show('<input type="text" name="length[]" id="selectDataType" class="col-sm-3" placeholder="Length..." value="{{$column[$i]->Length}}">');--}}
            {{--}else{--}}
                {{--$(this).hide('<input type="text" name="length[]" id="selectDataType" class="col-sm-3" placeholder="Length..." value="{{$column[$i]->Length}}">');--}}
            {{--}--}}

            $('#form-column #selectDataType').on('change',function () {
                var dataType = $(this).val();
                if(dataType === 'varchar'){
                    $(this).next().show();
                }else{
                    $(this).next().hide();
                }
            });
            $('#addColumn').on('click',function () {
                var html  = "<div class='form-group' id='form-column'>";
                html += "<input type='text' name='field[]' class='col-sm-5' placeholder='Input field...'>";
                html += "  ";
                html += "<select name='dataType[]' id='selectDataType' class='custom-select-sm col-sm-3'>";
                html += "<option value='varchar'>Varchar</option>";
                html += "<option value='text'>Text</option>";
//                    html += "<option value='integer'>Integer</option>";
//                    html += "<option value='float'>Float</option>";
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
                        $(this).next().show(function () {
                            $(this).attr(required);
                        });
                    }else{
                        $(this).next().hide();
                    }
                });
            });
        });
    </script>
@endsection