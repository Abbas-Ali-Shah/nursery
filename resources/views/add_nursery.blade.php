@extends('Layout.app');

@section('content')

<div class="hold-transition sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <a href="index.html" class="logo"> <!-- Logo -->
                <span class="logo-mini">
                    <!--<b>A</b>H-admin-->
                    <img src="assets/dist/img/mini-logo.png" alt="">
                </span>
                <span class="logo-lg">
                    <!--<b>Admin</b>H-admin-->
                    <!-- <img src="assets/dist/img/logo.png" alt=""> -->
                    <h3>IMPERIAL Tiles</h3>
                </span>
            </a>
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top ">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-tasks"></span>
                </a>
                <div class="navbar-custom-menu">
                   
                </div>
            </nav>
        </header>
        <!-- =============================================== -->
        <!-- Left side column. contains the sidebar -->
        @include('includes.sidebar');
        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                 <form action="#" method="get" class="sidebar-form search-box pull-right hidden-md hidden-lg hidden-sm">
                        <div class="input-group">
                        <input type="text" name="name" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>   
                <div class="header-icon">
                    <i class="fa fa-tachometer"></i>
                </div>
                <div class="header-title">
                    <h1> Dashboard</h1>
                    <small> Dashboard features</small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                   
                </div>
            </section>
          
        <!-- Main content -->
        <section class="contact_section">
   
            <div class="container-fluid">
                <form id="dataForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="inputName" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="name" class="form-control" id="inputName"
                                value="{{ old('name') }}" placeholder="Name">
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                 
                 
                    <div class="form-group row">
                        <label for="inputName" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-6">
                            <input type="text" name="loction" class="form-control" id="inputName"
                                value="{{ old('name') }}" placeholder="Address">
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-md-2 col-form-label"> Phone Number </label>
                        <div class="col-md-6">
                            <input type="text" name="phone" class="form-control" id="inputName"
                                value="{{ old('name') }}" placeholder="Phone Number">
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputName" class="col-md-2 col-form-label"> Phone Number </label>
                        <div class="col-md-6">
                            <input type="text" name="whatappno" class="form-control" id="inputName"
                                value="{{ old('name') }}" placeholder="Whatapp Number">
                            @error('name')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDesc" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-6">
                            <input type="text" name="email" class="form-control" id="inputDesc"
                                value="{{ old('desc') }}" placeholder="Address">
                            @error('desc')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputDesc" class="col-md-2 col-form-label">Password</label>
                        <div class="col-md-6">
                            <input type="text" name="password" class="form-control" id="inputDesc"
                                value="{{ old('desc') }}" placeholder="Password">
                            @error('desc')
                                <span class="text text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                  
                    <div class="form-group mb-0 mt-2 row justify-content-end ">
                        <div class="col-md-9">
                            <button  class="hover-button hover-button:hover" onclick="insertData()" type="button" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
            <script>
        
                function insertData() {
                    var formData = new FormData($('#dataForm')[0]);
            
                    $.ajax({
                        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
                        url: "{{ route('nursery.Addnursery') }}",
                        type: "POST",
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function (response) {
                            // Handle the response, you can update the UI or perform other actions
                            console.log(response);
                            showAlert(response.data);
                            
            
                            // Optionally, you can show a success message to the user
                        },
                        error: function (error) {
                            console.log(error);
            
                            // Optionally, you can handle errors and show appropriate messages
                            alert('Error occurred while inserting data');
                        }
                    });
                }
            </script>

          </section>
        
        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2016-2017 <a href="https://itartificer.com/">IT Artificer</a>.</strong> All rights reserved.
        </footer>
    </div> <!-- ./wrapper -->
    <!-- ./wrapper -->
  </div>
@endsection

