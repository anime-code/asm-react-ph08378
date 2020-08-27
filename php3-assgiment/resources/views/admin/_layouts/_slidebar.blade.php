<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('')}}" class="brand-link">
        <img src="admin_assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">SA-Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="admin_assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">            @if(Auth::user())
                        {{Auth::user()->name}}
                    @endif</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{route('page.index')}}" class="nav-link ">
                        <i class="fa fa-home"></i>
                        <p>
                            Home

                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('admin.index')}}" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard

                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link ">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('categories.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>

                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('categories.create')}}" class="nav-link">
                                <i class="fas fa-plus"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link ">
                        <i class="nav-icon fas fa-archive"></i>
                        <p>
                            Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('products.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>

                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('products.create')}}" class="nav-link">
                                <i class="fas fa-plus"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview ">
                    <a class="nav-link ">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <i class="fas fa-table"></i>

                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('users.create')}}" class="nav-link">
                                <i class="fas fa-plus"></i>
                                <p>Add New</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{route('logout')}}" class="nav-link ">
                        <i class="fa fa-sign-out"></i>
                        <p>
                            Logout
                        </p>
                    </a>

                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
