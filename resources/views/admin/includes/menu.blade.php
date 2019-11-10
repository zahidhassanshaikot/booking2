<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>


            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Post Info <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('add-post') }}">Add Post</a>
                    </li>
                    <li>
                        <a href="{{ route('manage-post') }}">Manage Post</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Booking Request <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('view-customize-booking-request-by-admin') }}">Customize request</a>
                    </li>

                    <li>
                        <a href="{{ route('view-booking-request-by-admin') }}">New request</a>
                    </li>
                    <li>
                        <a href="{{ route('view-accepted-booking-request-by-admin') }}">Accepted request</a>
                    </li>
                    <li>
                        <a href="{{ route('view-Checkout-booking-request-by-admin') }}">Checkout request</a>
                    </li>
                    <li>
                        <a href="{{ route('view-rejected-booking-request-by-admin') }}">Rejected request</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            @role('Super Admin')
            <li>
                <a href="#"><i class="fa fa-plus"></i> Add Manager <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('add-new-user-by-admin') }}">Add Manager</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
            @endrole
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>