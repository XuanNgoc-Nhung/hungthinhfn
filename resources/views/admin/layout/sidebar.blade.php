<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Hệ thống</span></li>
                <li class=" {{ Request::routeIs('admin.home')? 'active' : '' }}">
                    <a href="{{route('admin.home')}}"><i class="feather-grid"></i> <span>Tổng quan</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.quanLyTaiKhoan')? 'active' : '' }}">
                    <a href="{{route('admin.quanLyTaiKhoan')}}"><i class="feather-grid"></i> <span>Quản lý tài khoản</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.khoanVay')? 'active' : '' }}">
                    <a href="{{route('admin.khoanVay')}}"><i class="feather-grid"></i> <span>Khoản vay</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.quanLyYeuCauRutTien')? 'active' : '' }}">
                    <a href="{{route('admin.quanLyYeuCauRutTien')}}"><i class="feather-grid"></i> <span>Yêu cầu rút tiền</span></a>
                </li>
                <li>
                    <a href="/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                            class="feather-log-out me-1"></i> <span>Đăng xuất</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
