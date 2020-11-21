<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Toko Online || @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{URL::asset('/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{URL::asset('/fonts/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{URL::asset('/fonts/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
	   folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{URL::asset('/dist/css/skins/_all-skins.min.css')}}">
  @stack('customCss')
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
	<!-- Logo -->
	<a href="index2.html" class="logo">
	  <!-- mini logo for sidebar mini 50x50 pixels -->
	  <span class="logo-mini"><b>TKO</b></span>
	  <!-- logo for regular state and mobile devices -->
	  <span class="logo-lg">Toko<b> Online</b></span>
	</a>
	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top">
	  <!-- Sidebar toggle button-->
	  <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </a>

	  <div class="navbar-custom-menu">
		<ul class="nav navbar-nav">
		  <!-- User Account: style can be found in dropdown.less -->
		  <li class="dropdown user user-menu">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
			  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
			  <span class="hidden-xs">{{ Auth::user()->name }}</span>
			</a>
			<ul class="dropdown-menu">
			  <!-- User image -->
			  <li class="user-header">
				<img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

				<p>
				  {{ Auth::user()->name }}
				  <small>Member since {{ Auth::user()->created_at->format('Y') }} </small>
				</p>
			  </li>
			  <!-- Menu Body -->

			  <!-- Menu Footer-->
			  <li class="user-footer">
				{{-- <div class="pull-left">
				  <a href="#" class="btn btn-default btn-flat">Profile</a>
				</div> --}}
				<div class="pull-right">

                <a class="btn btn-default" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Sign Out') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </div>
			  </li>
			</ul>
		  </li>
		</ul>
	  </div>
	</nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
	  <!-- Sidebar user panel -->
	  <div class="user-panel">
		<div class="pull-left image">
		  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
		</div>
		<div class="pull-left info">
		  <p>{{ Auth::user()->name }}</p>
		  <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
		</div>
	  </div>
	  <!-- sidebar menu: : style can be found in sidebar.less -->
	  <ul class="sidebar-menu">
		<li class="header">MAIN NAVIGATION</li>
		<li class="treeview">
		  <a href="{{ route('home') }} ">
			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
			<span class="pull-right-container">
			  <i class=" pull-right"></i>
			</span>
		  </a>
		</li>

		<li class="treeview">
		  <a href="#">
			<i class="fa fa-gear"></i> <span>Master</span>
			<span class="pull-right-container">
			  <i class="fa fa-angle-left pull-right"></i>
			</span>
		  </a>
		  <ul class="treeview-menu">
			<li><a href=" {{ route('data.users') }} "><i class="fa fa-circle-o"></i> Users </a></li>

			{{-- <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li> --}}
		  </ul>
		</li>

	  </ul>
	</section>
	<!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
	  <h1>
		@yield('pageTitle')
	  </h1>
	</section>

	<!-- Main content -->
	<section class="content">

	  @yield('content')

	</section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
	<div class="pull-right hidden-xs">
	  <b><a href="#">Toko Online</a></b>
	</div>
	<strong> <a href="#">MuflihunDev</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
	<!-- Create the tabs -->
	<ul class="nav nav-tabs nav-justified control-sidebar-tabs">
	  <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

	  <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
	  <!-- Home tab content -->
	  <div class="tab-pane" id="control-sidebar-home-tab">
		<h3 class="control-sidebar-heading">Recent Activity</h3>
		<ul class="control-sidebar-menu">
		  <li>
			<a href="javascript:void(0)">
			  <i class="menu-icon fa fa-birthday-cake bg-red"></i>

			  <div class="menu-info">
				<h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

				<p>Will be 23 on April 24th</p>
			  </div>
			</a>
		  </li>
		  <li>
			<a href="javascript:void(0)">
			  <i class="menu-icon fa fa-user bg-yellow"></i>

			  <div class="menu-info">
				<h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

				<p>New phone +1(800)555-1234</p>
			  </div>
			</a>
		  </li>
		  <li>
			<a href="javascript:void(0)">
			  <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

			  <div class="menu-info">
				<h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

				<p>nora@example.com</p>
			  </div>
			</a>
		  </li>
		  <li>
			<a href="javascript:void(0)">
			  <i class="menu-icon fa fa-file-code-o bg-green"></i>

			  <div class="menu-info">
				<h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

				<p>Execution time 5 seconds</p>
			  </div>
			</a>
		  </li>
		</ul>
		<!-- /.control-sidebar-menu -->

		<h3 class="control-sidebar-heading">Tasks Progress</h3>
		<ul class="control-sidebar-menu">
		  <li>
			<a href="javascript:void(0)">
			  <h4 class="control-sidebar-subheading">
				Custom Template Design
				<span class="label label-danger pull-right">70%</span>
			  </h4>

			  <div class="progress progress-xxs">
				<div class="progress-bar progress-bar-danger" style="width: 70%"></div>
			  </div>
			</a>
		  </li>
		  <li>
			<a href="javascript:void(0)">
			  <h4 class="control-sidebar-subheading">
				Update Resume
				<span class="label label-success pull-right">95%</span>
			  </h4>

			  <div class="progress progress-xxs">
				<div class="progress-bar progress-bar-success" style="width: 95%"></div>
			  </div>
			</a>
		  </li>
		  <li>
			<a href="javascript:void(0)">
			  <h4 class="control-sidebar-subheading">
				Laravel Integration
				<span class="label label-warning pull-right">50%</span>
			  </h4>

			  <div class="progress progress-xxs">
				<div class="progress-bar progress-bar-warning" style="width: 50%"></div>
			  </div>
			</a>
		  </li>
		  <li>
			<a href="javascript:void(0)">
			  <h4 class="control-sidebar-subheading">
				Back End Framework
				<span class="label label-primary pull-right">68%</span>
			  </h4>

			  <div class="progress progress-xxs">
				<div class="progress-bar progress-bar-primary" style="width: 68%"></div>
			  </div>
			</a>
		  </li>
		</ul>
		<!-- /.control-sidebar-menu -->

	  </div>
	  <!-- /.tab-pane -->
	  <!-- Stats tab content -->
	  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
	  <!-- /.tab-pane -->
	  <!-- Settings tab content -->
	  <div class="tab-pane" id="control-sidebar-settings-tab">
		<form method="post">
		  <h3 class="control-sidebar-heading">General Settings</h3>

		  <div class="form-group">
			<label class="control-sidebar-subheading">
			  Report panel usage
			  <input type="checkbox" class="pull-right" checked>
			</label>

			<p>
			  Some information about this general settings option
			</p>
		  </div>
		  <!-- /.form-group -->

		  <div class="form-group">
			<label class="control-sidebar-subheading">
			  Allow mail redirect
			  <input type="checkbox" class="pull-right" checked>
			</label>

			<p>
			  Other sets of options are available
			</p>
		  </div>
		  <!-- /.form-group -->

		  <div class="form-group">
			<label class="control-sidebar-subheading">
			  Expose author name in posts
			  <input type="checkbox" class="pull-right" checked>
			</label>

			<p>
			  Allow the user to show his name in blog posts
			</p>
		  </div>
		  <!-- /.form-group -->

		  <h3 class="control-sidebar-heading">Chat Settings</h3>

		  <div class="form-group">
			<label class="control-sidebar-subheading">
			  Show me as online
			  <input type="checkbox" class="pull-right" checked>
			</label>
		  </div>
		  <!-- /.form-group -->

		  <div class="form-group">
			<label class="control-sidebar-subheading">
			  Turn off notifications
			  <input type="checkbox" class="pull-right">
			</label>
		  </div>
		  <!-- /.form-group -->

		  <div class="form-group">
			<label class="control-sidebar-subheading">
			  Delete chat history
			  <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
			</label>
		  </div>
		  <!-- /.form-group -->
		</form>
	  </div>
	  <!-- /.tab-pane -->
	</div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
	   immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{URL::asset('/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{URL::asset('/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{URL::asset('/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{URL::asset('/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('/dist/js/demo.js')}}"></script>
@stack('customScript')
</body>
</html>
