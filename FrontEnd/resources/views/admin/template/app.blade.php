<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  @yield('title')


    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset("vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="{{ URL::asset("vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset("css/jquery.pagedown-bootstrap.css") }} rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="{{ URL::asset("vendor/datatables/dataTables.bootstrap4.css") }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ URL::asset("css/sb-admin.css") }}" rel="stylesheet">
    <!-- CSRF Token -->
    <!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->

    <!-- <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script> -->
    <!-- <link href="{{ URL::asset("loading/dist/loading.min.css") }}" rel="stylesheet" type="text/css"> -->
  <!-- Page level plugin CSS-->
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    @if (Session::has('admin'))
    <a class="navbar-brand" href="/admin">Welcome, {{Session::get('admin.username')}}</a>
    @endif
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Locations">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-compass"></i>
            <span class="nav-link-text">Locations Managements</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="/admin/location-index">Locations</a>
            </li>
            <li>
              <a href="/admin/category-index">Category</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="/admin/place-index">
            <i class="fa fa-external-link-square"></i>
            <span class="nav-link-text">Place Management</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Users">
          <a class="nav-link" href="/admin/user-index">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Users Management</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Comments">
          <a class="nav-link" href="/admin/comment-index">
            <i class="fa fa-fw fa-commenting-o"></i>
            <span class="nav-link-text">Comments Management</span>
          </a>
        </li>
        {{--<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Images">--}}
          {{--<a class="nav-link" href="/admin/image-index">--}}
            {{--<i class="fa fa-fw fa-picture-o"></i>--}}
            {{--<span class="nav-link-text">Images Management</span>--}}
          {{--</a>--}}
        {{--</li>--}}
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <!-- <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper" >     
    @yield('content')
    </div>
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
          <a class="btn btn-primary" href="{{url('logout-admin')}}">Logout</a>
        </div>
      </div>
    </div>
  </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ URL::asset("vendor/jquery/jquery.min.js") }}"></script>
    <script src="{{ URL::asset("vendor/popper/popper.min.js") }}"></script>
    <script src="{{ URL::asset("vendor/bootstrap/js/bootstrap.min.js") }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset("vendor/jquery-easing/jquery.easing.min.js") }}"></script>
{{--    <script src="{{ URL::asset("vendor/chart.js/Chart.min.js") }}"></script>--}}
    <script src="{{ URL::asset("vendor/datatables/jquery.dataTables.js") }}"></script>
    <script src="{{ URL::asset("vendor/datatables/dataTables.bootstrap4.js") }}"></script>
    <!-- <script src="{{ URL::asset("admin/js/sb-admin.min.js") }}"></script> -->

    <!-- <script src="{{ URL::asset("http://code.jquery.com/jquery-1.12.4.min.js") }}"></script>
    <script src="{{ URL::asset("loading/dist/jquery.loading.min.js") }}"></script> -->
    <!-- Custom scripts for all pages-->
    <script src="{{ URL::asset("js/sb-admin.min.js") }}"></script>
{{--    <script  src="{{URL::asset("js/jquery.pagedown-bootstrap.combined.min.js")}}"></script>--}}
    <script src="{{ URL::asset("js/sb-admin-datatables.min.js") }}"></script>
{{--    <script src="{{ URL::asset("js/sb-admin-charts.min.js") }}"></script>--}}
    @yield('script')
</body>

</html>
