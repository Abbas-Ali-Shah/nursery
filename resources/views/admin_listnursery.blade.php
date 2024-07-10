@extends('Layout.app');

@section('content')
<head>
    <style>
        .ovrerflow:hover {
            width: 100%;
            /* Make the image fill the container */
            height: 100%;
            /* Make the image fill the container */
            transition: transform 0.3s ease;
            /* Add a smooth transition effect */
            transform: scale(5.5);
            /* Apply the scale transformation on hover */
        }
                 /* Apply styles to the table header */
thead {
    background-color: #3498db; /* Blue background color */
    color: #ffffff; /* White text color */
}

/* Apply styles to the table header cells */
th {
    padding: 10px;
}

/* Style the "Actions" cell with a different background color */
th.text-center {
    background-color: #e74c3c; /* Red background color */
}

/* Optional: Hover effect on the header cells */
th:hover {
    background-color: #2980b9; /* Darker blue on hover */
}
    </style>
</head>
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
                        <input type="text" name="q" class="form-control" placeholder="Search...">
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
                @if (session('success'))
                <div class="alert alert-success">
    
                     
                        <script>
                              showAlert("{{ session('success') }}");
                        </script>
                </div>
            @endif
            </section>
            <div class="e-table">
                <div class="table-responsive table-lg">
                    <table class="table table-bordered  mb-0 text-nowrap">
                        <thead>
                            <tr>
                                <!-- <th  class="text-center">
            
                                                                                                                                                                                                                                                                                </th> -->
                                <!-- <th class="text-center">Photo</th> -->
                                <th>#</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Admin Name</th>
                                <th>Phone</th>
                                <th>whatappno</th>
                                <th>Email</th>
                                <th>Status</th>
                                <!-- <th></th> -->
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
            
                        <tbody>
                            @foreach ($Nursery as $Nursery)
                                <tr>
                                    <td>{{ $Nursery->id }}</td>
                               
                                    <td>{{ $Nursery->name }}</td>
                                    <td>{{ $Nursery->loction }}</td>
                                    <td>{{ $Nursery->admin_name }}</td>
                                    <td>{{ $Nursery->phone }}</td>
                                    <td>{{ $Nursery->whatappno }}</td>
                                    
                                    <td>{{ $Nursery->email }}</td>
                                   
                                   
                                    <td class="text-nowrap align-middle">
                                        @if ($Nursery->status == 1)
                                            <a
                                                href="{{ url('statusplant') }}/{{ $Nursery->id }}"><span
                                                class="btn btn-sm b-0 btn-primary">Active</span></a
                                        @else
                                            <a
                                                href="{{ url('statusplant') }}/{{ $Nursery->id }}"><span
                                                class="btn btn-sm b-0 btn-warning">Pending</span></a>
                                        @endif
                                    </td>

                                  
            
                                    <td class="text-center align-middle">
                                        <div class="btn-group align-top">
                                            <a
                                                href=""><button
                                                    class="btn btn-sm btn-primary badge"
                                                    data-target="#user-form-modal" data-toggle="modal"
                                                    type="button">Edit</button></a>
                                                    <a href="#" data-nursery-id="{{ $Nursery->id }}" class="delete-nursery">
                                                        <button class="btn btn-sm btn-primary badge" type="button"><i class="fa fa-trash"></i></button>
                                                    </a>
                                        </div>
                                       
                                    </td>
            
            
                                </tr>
                            @endforeach
            
                        </tbody>
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    <!-- <ul class="pagination mt-3 mb-0">
                        <li class="disabled page-item">
                            <a class="page-link" href="#">‹</a>
                        </li>
                        <li class="active page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">4</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">5</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">›</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#">»</a>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div> <!-- /.content-wrapper -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
        $('.delete-nursery').click(function (event) {
            event.preventDefault(); // Prevent the default anchor tag behavior

            var nurseryId = $(this).data('nursery-id');

            if (confirm('Are you sure to delete this record?')) {
                $.ajax({
                    url: "{{ url('delete-nursery') }}/" + nurseryId,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if (response.success) {
                            alert('Nursery deleted successfully');
                            // Optionally, you can update the UI or perform other actions
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (error) {
                        console.log(error);
                        alert('Error occurred while deleting nursery');
                    }
                });
            }
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    
    $(document).ready(function () {
        $('.toggle-status').click(function (event) {
            event.preventDefault(); // Prevent the default anchor tag behavior

            var nurseryId = $(this).data('nursery-id');

            $.ajax({
                url: "{{ url('toggle-status') }}/" + nurseryId,
                type: "POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    if (response.success) {
                        alert('Status toggled successfully. New status: ' + response.status);
                        // Optionally, you can update the UI or perform other actions
                    } else {
                        alert(response.message);
                    }
                },
                error: function (error) {
                    console.log(error);
                    alert('Error occurred while toggling status');
                }
            });
        });
    });
</script>
        <footer class="main-footer">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2016-2017 <a href="https://itartificer.com/">IT Artificer</a>.</strong> All rights reserved.
        </footer>
    </div> <!-- ./wrapper -->
    <!-- ./wrapper -->
  </div>
@endsection





