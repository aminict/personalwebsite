<!DOCTYPE html>
<html>
@include('admin.login.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  @if(isset(Auth::user()->email))
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index.html" class="nav-link">Home</a>
      </li>
    </ul>

 

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
	   	
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown pull-left">
        <a class="btn btn-primary" href="{{ url('/main/logout') }}" role="button">Logout</a>
      </li>
		<li class="nav-item dropdown">
			<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
			{{ Auth::user()->name }} <span class="caret"></span>
			</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"
						onclick="event.preventDefault();
						document.getElementById('logout-form').submit();">
						</a>

						<form id="logout-form" action="#" method="POST" style="display: none;">
						</form>
				</div>
		</li>


      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fa fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{url ('../../dist/img/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ URL::to('/') }}/image1/{{ Auth::user()->image }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      @include('admin.login.sidebarleft')
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-3">
            <h1>Experience Setup</h1>
          </div>
		  <div class="col-sm-3">
              <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add Experience</a></span>
            <!-- Add New -->

    <div class="modal fade bd-example-modal-lg" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add Experience</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form  action="{{route('experience.store')}}" method="POST">
					@csrf

          @if (Session ::has('success'))
             <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{Session::get('success') }}</strong>
             </div>
             @endif

            @if (Session ::has('danger'))
             <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>{{Session::get('danger') }}</strong>
             </div>
             @endif


             @if (count($errors) > 0)
              <div class="alert alert-danger">
               <ul>
               @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
               @endforeach
               </ul>
              </div>
             @endif

					<div class="row">
						<div class="col-lg-12">
							<label class="control-label" style="position:relative; top:7px;">Title:</label>
						</div>
						<div class="col-lg-12">
							<input class="form-control" type="text" name="title" placeholder="Default input">
						
						</div>
					</div>
				
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-12">
							<label class="control-label" style="position:relative; top:7px;">Experience Description:</label>
						</div>
					</div>
					<div style="height:5px;"></div>
					<div class="row">
						<div class="col-lg-12">
							<textarea class="form-control" rows="2" name="ExperienceDec" id="ExperienceDec" placeholder="Experience Description"></textarea>
						</div>
					</div>
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				
                </div>
                </form>
				
            </div>
        </div>
    </div>
	
	

			</div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Experience Setup</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <!-- /.card -->

          <div class="card">
		  
            <!--<div class="card-header">
              <h3 class="card-title">Data Table With Full Features</h3>
            </div>-->
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table-bordered  table-responsive">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Experience Description</th>
                  <th> Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                	@foreach($data as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->title}}</td>
                  <td>{!! $row->ExperienceDec !!}</td>
                  <td><a class="btn btn-primary" href="{{route('experience.edit',$row->id)}}" role="button">Edit</a></td>
                  <td>
                  	<form action="{{route('experience.destroy',$row->id)}}" method="POST"  onsubmit="return confirm('Are you sure ?')">
                     @csrf
                     @method('delete')
                  	<button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                </tr>
                @endforeach
           
                </tbody>
                
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
	  <!--<//?php include('add_modalTaskEntry.php'); ?>-->
	  <a href="add_modalTaskEntry.html">Animations</a>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; 2020-2021 Kaisar Ahmed Khan</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
  @else
    <script>window.location = "/main";</script>
   @endif

 <script>
                CKEDITOR.replace( 'ExperienceDec' );
 </script>

 
			
			
<!-- ./wrapper -->
<script src="{{ asset('../../plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery -->
<script src="{{ asset('../../plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('../../plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('../../plugins/datatables/dataTables.bootstrap4.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('../../plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('../../plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('../../dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('../../dist/js/demo.js') }}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
</body>
</html>

