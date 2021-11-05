        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="h-100" data-simplebar>

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul id="side-menu">

                        <li class="menu-title">Users, Roles & Permissions</li>

                        <li>
                            <a href="#sidebarCrm" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Roles </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
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
                            <a href="#sidebarCrm" data-bs-toggle="collapse">
                                <i data-feather="users"></i>
                                <span> Users </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <div class="collapse" id="sidebarCrm">
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
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->