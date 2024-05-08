<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title text-uppercase">Main</li>


                <li>
                    <a href="{{ route('admin.dashboard') }}" class="waves-effect">
                        <span class="badge rounded-pill bg-info float-end">2</span>
                        <i class="dripicons-meter"></i>
                        <span> Dashboard </span>
                    </a>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-message"></i>
                        <span> Blogs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('admin.blogs') }}">Add Blogs</a></li>
                        <li><a href="{{ route('blogs.edit.page') }}">Edit Blogs</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-message"></i>
                        <span> Variants </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('get.colors') }}">Color</a></li>
                        <li><a href="{{ route('get.size') }}">Size</a></li>

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
                <li>
                    <a href="{{ route('admin.footer') }}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>Add Footer</span>
                    </a>
                </li>


                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="dripicons-message"></i>
                        <span> Products </span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('get.products') }}">List</a></li>
                        <li><a href="{{ route('create.products') }}">Add Products</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('orders') }}" class="waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span>ORDERS</span>
                    </a>
                </li>
                



            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
