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


      
      
            .card {
                margin: 100px; /* Add some margin to the card for spacing */
            }

    /* Custom CSS for the Bootstrap Card */

/* Margin and padding for the card */
.card {
    margin-bottom: 20px;
}

/* Style for the images inside the card */
.card img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* Style for the card title */
.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

/* Style for the list items in the card */
.list-group-item {
    border: none;
    padding: 0.25rem 0;
}

/* Style for the card links */
.card-link {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    margin-right: 10px;
}

/* Hover effect for card links */
.card-link:hover {
    text-decoration: underline;
}
/* Custom CSS for the Bootstrap Card with Border */

/* Margin and padding for the card */
.card {
    margin-bottom: 20px;
    border: 1px solid #ddd; /* Add a 1px solid border */
    border-radius: 8px; /* Optional: Add rounded corners */
    overflow: hidden; /* Optional: Hide overflowing content */
}

/* Style for the images inside the card */
.card img {
    max-width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* Style for the card title */
.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
}

/* Style for the list items in the card */
.list-group-item {
    border: none;
    padding: 0.25rem 0;
}

/* Style for the card links */
.card-link {
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
    margin-right: 10px;
}

/* Hover effect for card links */
.card-link:hover {
    text-decoration: underline;
}
/* Style for the images inside the card */
.card img {
    max-width: 100%; /* You can change this value */
    height: auto;
    margin-bottom: 10px;
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
                    @if (session('success'))
                    <div class="alert alert-success">
        
                         
                            <script>
                                  showAlert("{{ session('success') }}");
                            </script>
                    </div>
                @endif
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

            <div class="row">     
                @foreach ($plant as $plant)
                           
                <div class="col-md-4 rounded">
                    
                    <div class="card" style="width: 18rem; border: 4px solid rgb(5, 156, 156);">
                        @if($plant->image)
                        @php
                        $files = explode(',' ,$plant->image);
                        @endphp
                        @foreach($files as $file)
                        <img src="{{asset('uploads/category/' . $file)}}"style="width: 200px;  height: 200;" class="img-fluid ovrerflow" alt="No Image">
                        @endforeach
                        @else
                        N/A
                        @endif
                        <div class="card-body">
                            
                            <p class="card-text"></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $plant->name }}</li>
                            <li class="list-group-item">{{ $plant->quantity_in_stock}}</li>
                            <li class="list-group-item">{{ $plant->category_name}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">{{ $plant->family }}</a>
                            <a href="#" class="card-link">{{$plant->nursery_name}}</a>
                        </div>
                    </div>




                </div>
                           
                            
                @endforeach
                </div> 

        </div> <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
            <strong>Copyright &copy; 2016-2017 <a href="https://itartificer.com/">IT Artificer</a>.</strong> All rights reserved.
        </footer>
    </div> <!-- ./wrapper -->
    <!-- ./wrapper -->
  </div>
@endsection





