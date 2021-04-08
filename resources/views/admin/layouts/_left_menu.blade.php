<ul id="menu" class="page-sidebar-menu">

    <li {!! (Request::is('admin') ? 'class="active"' : '' ) !!}>
        <a href="{{ route('admin.dashboard') }}">
            <i class="livicon" data-name="dashboard" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Dashboard 1</span>
        </a>
    </li>
      <li {!! (Request::is('admin/index1') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/index1') }}">
            <i class="livicon" data-name="users" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            Appointments
        </a>
    </li>
    <li {!! (Request::is('admin/log_viewers') || Request::is('admin/log_viewers/logs') ? 'class="active"' : '' ) !!}>

        <a href="{{  URL::to('admin/log_viewers') }}">
            <i class="livicon" data-name="help" data-size="18" data-c="#1DA1F2" data-hc="#1DA1F2" data-loop="true"></i>
            Log Viewer
        </a>
    </li>
    <li {!! (Request::is('admin/activity_log') ? 'class="active"' : '' ) !!}>
        <a href="{{  URL::to('admin/activity_log') }}">
            <i class="livicon" data-name="eye-open" data-size="18" data-c="#F89A14" data-hc="#F89A14" data-loop="true"></i>
            Activity Log
        </a>
    </li>
    <li {!! (Request::is('admin/tasks') ? 'class="active"' : '' ) !!}>
        <a href="{{ URL::to('admin/tasks') }}">
            <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="list-ul" data-size="18" data-loop="true"></i>
            Tasks
            <span class="badge badge-danger" id="taskcount">{{ Request::get('tasks_count') }}</span>
        </a>
    </li>
    <li {!! (Request::is('admin/users') || Request::is('admin/bulk_import_users') || Request::is('admin/users/create') || Request::is('admin/user_profile') || Request::is('admin/users/*') || Request::is('admin/deleted_users') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#6CC66C" data-hc="#6CC66C" data-loop="true"></i>
            <span class="title">Users Management</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Users
                </a>
            </li>
            <li {!! (Request::is('admin/users/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/users/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New User
                </a>
            </li>
            <li {!! ((Request::is('admin/users/*')) && !(Request::is('admin/users/create')) || Request::is('admin/user_profile') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::route('admin.users.show',Sentinel::getUser()->id) }}">
                    <i class="fa fa-angle-double-right"></i>
                    View Profile
                </a>
            </li>
            <li {!! (Request::is('admin/deleted_users') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/deleted_users') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Deleted Users
                </a>
            </li>
        </ul>
    </li>
    <li {!! (Request::is('admin/roles') || Request::is('admin/roles/create') || Request::is('admin/roles/*') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="users" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
            <span class="title">Roles</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/roles') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Roles List
                </a>
            </li>
            <li {!! (Request::is('admin/roles/create') ? 'class="active" id="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/roles/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Role
                </a>
            </li>
        </ul>
    </li>
    <li {!! ((Request::is('admin/blogcategory') || Request::is('admin/blogcategory/create') || Request::is('admin/blog') || Request::is('admin/blog/create')) || Request::is('admin/blog/*') || Request::is('admin/blogcategory/*') ? 'class="active"' : '' ) !!}>
        <a href="#">
            <i class="livicon" data-name="comment" data-c="#F89A14" data-hc="#F89A14" data-size="18" data-loop="true"></i>
            <span class="title">Blog Management</span>
            <span class="fa arrow"></span>
        </a>
        <ul class="sub-menu">
            <li {!! (Request::is('admin/blogcategory') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blogcategory') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blog Category List
                </a>
            </li>
            <li {!! (Request::is('admin/blog') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blog') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Blog List
                </a>
            </li>
            <li {!! (Request::is('admin/blog/create') ? 'class="active"' : '' ) !!}>
                <a href="{{ URL::to('admin/blog/create') }}">
                    <i class="fa fa-angle-double-right"></i>
                    Add New Blog Post
                </a>
            </li>
        </ul>
    </li>
    <!-- Menus generated by CRUD generator -->
    @include('admin/layouts/menu')
</ul>
