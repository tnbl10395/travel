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
            <button style="color: red; border: 0; background:none;font-size:24px;" onclick="document.location.href='/admin/place-add'"><b><i class="fa fa-plus"></i></b></button>
            <label>Add Place</label><br><br>
          <div class="row" style="margin: auto;">
            <div class="col-sm-3">
              <label>Please select category:</label>
            </div>
            <div class="col-sm-3">
            <div class="form-group">
              <select class="form-control" name="selectCategory" id="selectCategory">
              @if($listCategory!=null)
                  <option value="null"></option>
                  @foreach($listCategory as $objectCategory)
                    <option value="{{$objectCategory->categoryID}}%{{$objectCategory->categoryName}}">{{$objectCategory->categoryName}}</option>
                  @endforeach
                @endif
              </select>
              </div>
              <br>
            </div>
          </div>
          <div class="table-responsive" id="setTable">
            {{--table--}}
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

@endsection
@section('script')
    <script>
        $(document).ready(function () {
            $('#selectCategory').change(function () {
                var val = $('#selectCategory').val();
                if(val==='null'){
                    $('#setTable').empty();
                }else{
                    $.ajax({
                        url: '/admin/place-index/'+val,
                        type: 'GET',
                        success:function (html) {
                            $('#setTable').html(html);
                        }
                    });
                }
            });
        });
    </script>
@endsection