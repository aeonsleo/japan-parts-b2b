        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Users, Roles & Permissions</li>

                        <li>
                            <a href="#roles" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Roles </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="roles">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('roles.index') }}">List Roles</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('roles.create') }}">New Role</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#users" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Users </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="users">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('users.index') }}">List Users</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('users.create') }}">New User</a>
                                    </li>
                                </ul>
                            </div>                                                        
                        </li>
                        <li>
                            <a href="#suppliers" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Suppliers </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="suppliers">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('suppliers.index') }}">List Suppliers</a>
                                    </li>
                                    {{-- <li>
                                        <a href="{{ route('suppliers.create') }}">New User</a>
                                    </li> --}}
                                </ul>
                            </div>                                                        
                        </li>
                        <li class="menu-title">Categories</li>
                        <li>
                            <a href="#categories" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Categories </span>
                                <span class="menu-arrow"></span>
                            </a>                            
                            <div class="collapse" id="categories">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('categories.index') }}">List Categories</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('categories.create') }}">New Category</a>
                                    </li>
                                </ul>
                            </div> 
                        </li>
                        <li>
                            <a href="#category-fields" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Category Fields </span>
                                <span class="menu-arrow"></span>
                            </a>                            
                            <div class="collapse" id="category-fields">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('category-fields.index') }}">List Category Fields</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category-fields.create') }}">New  Category Field</a>
                                    </li>
                                </ul>
                            </div> 
                        </li>
                        <li>
                            <a href="#category-fo" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Cat Field Options</span>
                                <span class="menu-arrow"></span>
                            </a>                            
                            <div class="collapse" id="category-fo">
                                <ul class="nav-second-level">
                                    <li>
                                        <a href="{{ route('category-field-options.index') }}">List Category FO</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('category-field-options.create') }}">New Category FO</a>
                                    </li>
                                </ul>
                            </div> 
                        </li>
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->