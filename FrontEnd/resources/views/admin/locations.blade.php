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
        <div class="card-body">
          <button style="color: red; border: 0; background:none;font-size:24px;" data-toggle='modal' title='Add' data-target='#AddLocation'><b><i class="fa fa-plus"></i></b></button>
          <label>Add Location</label><br><br>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">   
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
              @if($listLocation!=null)
                  @foreach($listLocation as $objectLocation)
                <tr>
                  <td>0{{$objectLocation->locationID}}</td>
                  <td><a href="" data-target='#updateLocation' data-toggle='modal' >{{$objectLocation->districtName}}</a></td>
                  <td>{{$objectLocation->picture}}</td>
                  <td>{{$objectLocation->description}}</td>
                  <td>
                    <button style="color: red; border: 0; background:none;" data-id="{{$objectLocation->locationID}}" data-toggle='modal' title='Update Location' data-target='#updateLocation'><b><i class="fa fa-pencil-square-o"></i></b></button>
                    <button style="color: red; border: 0; background:none;" data-id="{{$objectLocation->locationID}}" data-toggle='modal' title='delete' data-target='#DeleteLocation'><b><i class="fa fa-trash"></i></b></button>
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

    <!-- ADD Location -->
    <div class="modal fade" id="AddLocation" role="dialog">
      <div class="modal-dialog modal-lg" style="width:800px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formAddLocation" method="post" action="/admin/location-add" class="form-horizontal" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                  <h4 class="modal-tittle">ADD LOCATION</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="margin: 10px;">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>Thành Phố</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <div class="form-group">
                           
                            <select class="form-control" id="sel1" name="cityID">
                              @if($listCity!=null)
                                  @foreach($listCity as $objectCity)
                                    <option value="{{$objectCity->cityID}}">{{$objectCity->cityName}}</option>
                                  @endforeach
                              @endif
                            </select>
                          </div>
                        </div>
                      </div>
                      <br>
                      {{--<div class="row">--}}
                        {{--<div class="control-label col-sm-4">--}}
                          {{--<h7 style="font-size:16px; margin-top:5px;"><b>Name</b></h7>--}}
                        {{--</div>--}}
                        {{--<div class="col-sm-8">--}}
                          {{--<input name="locationName" type="text" class="form-control">--}}
                        {{--</div>--}}
                      {{--</div>--}}
                      <br>
                        <div class="row">
                            <div class="control-label col-sm-4">
                                <h7 style="font-size:16px; margin-top:5px;"><b>Description</b></h7>
                            </div>
                            <div class="col-sm-8">
                            <textarea name="description" id="pagedownMe"  class="form-control" rows="5">
                            </textarea>
                            </div>
                        </div>
                      </div>

                    <div class="col-sm-6">
                      <div class="row">
                        <div class="control-label col-sm-4">
                        <h7 style="margin-left:20px; font-size:16px; margin-top:5px;"><b>Quận/Huyện</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <div class="form-group">
                           
                            <select class="form-control" id="sel1" name="districtID">
                                @if($listDistrict!=null)
                                    @foreach($listDistrict as $objectDistrict)
                                    <option value="{{$objectDistrict->districtID}}">{{$objectDistrict->districtName}}</option>
                                    @endforeach
                                @endif
                            </select>
                          </div>
                          <br>
                        </div>
                      </div> 
                    </div>
                </div>
                <br>
                 <div class="form-group">
                    <label for="addLocation"><b>Upload Picture</b></label>
                 </div>
                 
                 <div class="row" style="margin-left:5px;">
                  <input type="file" name="picture" id="addLocationFile">
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


  <!-- UPDATE LOCATIONS -->
<div class="modal fade" id="updateLocation" role="dialog">
      <div class="modal-dialog modal-lg" style="width:750px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formupdateLocation" method="get" action="" class="form-horizontal" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                <h4 class="modal-tittle">UPDATE LOCATION</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
               </div>
               <div class="modal-body" style="margin: 10px;">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>Thành Phố</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <div class="form-group">
                            <select class="form-control" id="sel1">
                              <option>Hải Châu</option>
                              <option>i</option>
                              <option>i</option>
                              <option>i</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>Name</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <input name="fullname" type="text" class="form-control">
                        </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="control-label col-sm-4">
                          <h7 style="font-size:16px; margin-top:5px;"><b>Description</b></h7>
                          </div>
                          <div class="col-sm-8">
                            <textarea id="pagedownMe"  class="form-control" rows="5">
                            </textarea>
                          </div>
                        </div>

                      </div>

                    <div class="col-sm-6">
                      <div class="row">
                        <div class="control-label col-sm-4">
                        <h7 style="margin-left:20px; font-size:16px; margin-top:5px;"><b>Quận/Huyện</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <div class="form-group">
                           
                            <select class="form-control" id="sel1">
                              <option>Hải Châu</option>
                              <option>i</option>
                              <option>i</option>
                              <option>i</option>
                            </select>
                          </div>
                          <br>
                        </div>
                      </div> 
                      <!-- <div class="row">
                        <div class="control-label col-sm-4">
                        <h7 style="margin-left:20px; font-size:16px; margin-top:5px;"><b>Address</b></h7>
                        </div>
                        <div class="col-sm-8">
                          <input name="fullname" type="text" class="form-control">
                          <br>
                        </div>
                      </div>  -->
                    </div>
                </div>
                <br>
                 <div class="form-group">
                    <label for="updateLocation"><b>Upload Picture</b></label>
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
<!-- DELETE LOCATION -->
<div class="modal fade" id="DeleteLocation" role="dialog">
      <div class="modal-dialog modal-lg" style="width:500px;">
         <!-- Modal content-->
         <div class="modal-content">
            <form id="formDeleteCategory" method="get" action="/admin/location-delete/@if($listLocation!=null)0{{$objectLocation->locationID}}@endif" class="form-horizontal" >
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

@endsection
@section('script')
    <script>
//       (function () {
//   $("textarea#pagedownMe").pagedownBootstrap();
// })();
//  (function( $) ){

//  $("textarea#pagedownMe").fn.pagedownBootstrap = function( options ) {
//
//    // Default settings
//    var settings = $.extend( {
//      'sanitize'        : true,
//      'help'            : null,
//      'hooks'           : Array()
//    }, options);
//
//    return this.each(function() {
//
//      //Setup converter
//      var converter = null;
//      if(settings.sanitize)
//      {
//        converter = Markdown.getSanitizingConverter();
//      } else {
//        converter = new Markdown.Converter()
//      }
//
//      //Register hooks
//      for(var i in settings.hooks)
//      {
//        var hook = settings.hooks[i];
//        if(typeof hook !== 'object' || typeof hook.event === 'undefined'
//            || typeof hook.callback !== 'function')
//        {
//          //A bad hook object was given
//          continue;
//        }
//
//        converter.hooks.chain(hook.event, hook.callback);
//
//      }
//
//      //Try to find a valid id for this element
//      var id = "wmd-input";
//      var idAppend = 0;
//      while($("#"+id+"-"+idAppend.toString()).length > 0)
//      {
//        idAppend++;
//      }
//
//      //Assign the choosen id to the element
//      $(this).attr('id', id+"-"+idAppend.toString());
//
//      //Wrap the element with the needed html
//      $(this).wrap('<div class="wmd-panel" />');
//      $(this).before('<div id="wmd-button-bar-'+idAppend+'" class="wmd-button-bar" />');
//      $(this).after('<div id="wmd-preview-'+idAppend+'" class="wmd-preview" />');
//      $(this).addClass('wmd-input');
//
//      //Setup help function
//      help = null;
//      if($.isFunction(settings.help))
//      {
//        help = { handler: settings.help };
//      }
//
//      //Setup editor
//      var editor = new Markdown.Editor(converter, "-"+idAppend.toString(), help);
//      editor.run();
//
//    });
//
//  };
//})( jQuery );

    </script>
@endsection