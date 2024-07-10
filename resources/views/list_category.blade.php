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
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 10px;
}

.alert-success {
    background-color: #2980b9;
    background-color: #e74c3c; /* Red background color */
    background-color: #3498db; /* Blue background color */
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
                <div class="col-lg-12">
                    <div class="e-panel card">
                    
                        <div class="col-lg-4">
                                                <form action="{{ url('list_category') }}" method="get">
                                                    <div class="input-group">
                                                        <div class="form-outline">
                                                          <input id="search-focus" name="search" type="search" id="form1" class="form-control" />
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                        <a href="{{url('list_category')}}"><button type="button" class="btn btn-warning"><i class="fa fa-refresh"></i></button></a>
                                                      </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                <div class="header-icon">
                    <i class="fa fa-tachometer"></i>
                </div>
                <div class="header-title">
                    <h1> Dashboard</h1>
                    <small> Dashboard features</small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                        <button  class="hover-button hover-button:hover" onclick="showAlert()" type="button" class="btn btn-primary">fasdf</button>

                    </ol>
                </div>
            </section>
            <div class="card-body">
                @if (session('success'))
                    <div class="alert alert-success">

                         
                            <script>
                                  showAlert("{{ session('success') }}");
                            </script>
                    </div>
                @endif
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
                                <th>descreption</th>
                                <th>Image</th>
                               
                                <!-- <th></th> -->
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
            
                        <tbody>
                            @foreach ($category as $category)


            
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if($category->image)
                                        @php
                                        $files = explode(',' ,$category->image);
                                        @endphp
                                        @foreach($files as $file)
                                        <img src="{{asset('uploads/category/' . $file)}}" style="width: 50px;"
                                            class="img-fluid ovrerflow" alt="No Image">
                                        @endforeach
                                        @else
                                        N/A
                                        @endif
                                    </td>
                                
             <td class="text-center align-middle">
                                                    <div class="btn-group align-top">
                                                        <a
                                                            href="{{ url('edit') }}/{{$category->id}}"><button
                                                                class="btn btn-sm btn-primary badge"
                                                                data-target="#user-form-modal" data-toggle="modal"
                                                                type="button">Edit</button></a>
                                                        <!-- <a
                                         href="{{ url('list_category') }}/{{ $category->id }}"><button onclick="return confirm('are you sure to delete this record?')"
                                                                class="btn btn-sm btn-primary badge"
                                                                type="button"><i
                                                                    class="fa fa-trash"></i></button></a> -->
                                                                      <a href=""  class="delete-category" data-category-id="{{ $category->id }}">
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
    $(document).ready(function() {
        $('.delete-category').click(function() {
            var categoryId = $(this).data('category-id');

            $.ajax({
                url: "{{ url('delete-category') }}/" + categoryId,
                type: "DELETE",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.success) {
                        alert('Category deleted successfully');
                        // Optionally, you can update the UI or perform other actions
                    } else {
                        alert(response.message);
                    }
                },
                error: function(error) {
                    console.log(error);
                    alert('Error occurred while deleting category');
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





