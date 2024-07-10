<aside class="main-sidebar">
 <?php print_r(  session()->get('role')); ?>
    <!-- sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="image pull-left">
                <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <h4>Welcome</h4>
                <p>
                    @if(session()->has("nurid"))
           {{session()->get('name')}}
           {{session()->get('role')}}
           @else
           {{session()->get('name')}}
{{session()->get('role')}}
           @endif
                </p>
            </div>
        </div>
        
        <!-- sidebar menu -->
        <ul class="sidebar-menu">
            <li class="active">
                <a href="/"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
                </a>
            </li>
@if(session()->get('role') == 'ADMIN')
           <li class="treeview">
            <a href="#">
                <i class="fa fa-user-md"></i><span> Nursery</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('add_nursery')}}">Add Nursery</a></li>
                <li><a href="{{url('admin_nursery')}}">Admin_Nursery </a></li>
                
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-md"></i><span> Nursery</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('list_nursery')}}">List Nursery</a></li>
               
                
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-md"></i><span> Category</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('category')}}">Add Category</a></li>
                <li><a href="{{url('list_category')}}">List Category </a></li>
                
            </ul>
           
        </li>
       
     @endif
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-md"></i><span>Plants</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('plant')}}">Add Plants</a></li>
                <li><a href="{{url('list_plant')}}">List Plants </a></li>
                
            </ul>
        </li>
        
        <li><a href="{{url('logout')}}">LogOut </a></li>
 
         
       
     
        
            
           
                
</ul>
</div> <!-- /.sidebar -->
</aside>