<script src="{{ URL::asset("js/sb-admin-datatables.min.js") }}"></script>
@if($listPlace!=null)
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            @foreach($listPlace as $key)
                @foreach($key as $column => $value)
                    <th>{{$column}}</th>
                @endforeach
                @break
            @endforeach
            {{--<th>Picture</th>--}}
            <th>Actions</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            @foreach($listPlace as $key)
                @foreach($key as $column => $value)
                    <th>{{$column}}</th>
                @endforeach
            @endforeach
            <th>Picture</th>
            <th>Actions</th>
        </tr>
    </tfoot>
    <tbody>
        @foreach($listPlace as $key)
        <tr>
            @foreach($key as $row)
            <td>{{$row}}</td>
            @endforeach
            {{--<td><a href="javascript:void(0);" data-id="{{$key->placeID}}" data-toggle='modal' title='Update Location' data-target='#seePicture'>Click to see!</a></td>--}}
            <td>
                <button style="color: red; border: 0; background:none;" data-id="{{$key->placeID}}" data-toggle='modal' title='Update Location' data-target='#update'><b><i class="fa fa-pencil-square-o"></i></b></button>
                <button style="color: red; border: 0; background:none;" data-id="{{$key->placeID}}" data-toggle='modal' title='delete' data-target='#deletePlace'><b><i class="fa fa-trash"></i></b></button>
            </td>
        </tr>
         @endforeach
    </tbody>
</table>
@else
    <h3>The table don't have data</h3>
@endif
<!-- DELETE Place -->
<div class="modal fade" id="deletePlace" role="dialog">
    <div class="modal-dialog modal-lg" style="width:500px;">
        <!-- Modal content-->
        <div class="modal-content">
            <form id="formDeleteCategory" method="post" action="/admin/place-delete/@if($listPlace!=null){{$key->placeID}}@endif" class="form-horizontal" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="modal-header">
                    <!-- <i class="fa fa-trash"> --></i>
                    <h4 class="modal-tittle">DELETE PLACE</h4>
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