<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png') }}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
    <li class>
            <a href="{{url('admin')}}" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg') }}" alt>
                </div>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/11.svg') }}" alt>
                </div>
                <span>Quản lý người dùng</span>
            </a>
            <ul>
                <li><a class="active" href="{{ url('admin/users') }}">Danh sách</a></li>
                <li><a href="index_2.html">Thêm mới</a></li>
            </ul>
        </li>
        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/13.svg') }}" alt>
                </div>
                <span>Quản lý Danh mục</span>
            </a>
            <ul>
                <li><a class="active" href="index-2.html">Sales</a></li>
                <li><a href="index_2.html">Default</a></li>
                <li><a href="index_3.html">Dark Menu</a></li>
            </ul>
        </li>

        <li class="mm-active">
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                <img src="{{ asset('assets/admin/img/menu-icon/15.svg') }}" alt>
                </div>
                <span>Quản lý Sản phảm</span>
            </a>
            <ul>
                <li><a class="active" href="index-2.html">Sales</a></li>
                <li><a href="index_2.html">Default</a></li>
                <li><a href="index_3.html">Dark Menu</a></li>
            </ul>
        </li>


    </ul>
</nav>
