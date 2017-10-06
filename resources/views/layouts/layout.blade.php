<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tracer Study</title>
    <link rel="stylesheet" href="{{asset('matrix/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/css/bootstrap-responsive.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('matrix/css/fullcalendar.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/css/bootstrap-datetimepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/css/matrix-style.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/css/select2.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/css/matrix-media.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/font-awesome/css/font-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('matrix/css/jquery.gritter.css')}}" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <style>
    span#helpBlock2 {
        color: red;
    }
    </style>
</head>
 <body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <!--<li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="{{route('logout')}}"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>

    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>-->
    <li class=""><a title="" href="{{route('logout')}}"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<!--<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>-->
<!--close-top-serch-->
<!--sidebar-menu-->
@include('layouts.sidebar')
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <!--<div id="breadcrumb"> <a href="{{route('admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>-->
  </div>
<!--End-breadcrumbs-->

<!--content--> 
  <div class="container-fluid">
         <div class="row-fluid">
                        @if (session('info'))
                            <div class="alert alert-info">
                              <button class="close" data-dismiss="alert">×</button>
                              <strong>{{ session('info') }}</strong></div>
                        @endif
              @yield('content')  
          </div><!--/.row-->
    </div>
<!--content--> 

  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; Matrix Theme </div>
</div>
       
        <script src="{{asset('matrix/js/excanvas.min.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.min.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.ui.custom.js')}}"></script> 
        <script src="{{asset('matrix/js/bootstrap.min.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.dashboard.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.gritter.min.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.interface.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.chat.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.validate.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.form_validation.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.wizard.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.uniform.js')}}"></script> 
        <script src="{{asset('matrix/js/select2.min.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.popover.js')}}"></script> 
        <script src="{{asset('matrix/js/jquery.dataTables.min.js')}}"></script> 
        <script src="{{asset('matrix/js/matrix.tables.js')}}"></script> 
        <script src=" {{asset('matrix/js/select2.min.js')}}"></script> 
        <script src="{{asset('matrix/js/bootstrap-datetimepicker.min.js')}}"></script> 
        <script src="{{asset('matrix/js/bootstrap-datepicker.js')}}"></script> 
    </body>
</html>



