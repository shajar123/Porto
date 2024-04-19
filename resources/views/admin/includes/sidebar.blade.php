<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title text-uppercase">Main</li>


                <li>
                    <a href="index.html" class="waves-effect">
                        <span class="badge rounded-pill bg-info float-end">2</span>
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-message"></i>
                        <span> BLOGS </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.blogs') }}">ADD BLOGS</a></li>
                        <li><a href="{{ route('blogs.edit.page') }}">EDIT BLOGS</a></li>
                        <li><a href="email-compose.html">Email Compose</a></li>
                    </ul>
                </li>


                <li>
                    <a href="{{ route('admin.contacts') }}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Contact</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('get.category') }}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Category</span>
                    </a>
                </li>





















            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
