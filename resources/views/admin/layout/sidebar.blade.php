<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"><span>Hệ thống</span></li>

                <li class=" {{ Request::routeIs('admin.home')? 'active' : '' }}">
                    <a href="{{route('admin.home')}}"><i class="feather-grid"></i> <span>Tổng quan</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.home')? 'active1' : '' }}">
                    <a href="{{route('admin.home')}}"><i class="feather-sliders"></i> <span>Tài khoản</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.home')? 'active2' : '' }}">
                    <a href="{{route('admin.home')}}"><i class="feather-sliders"></i> <span>Lịch sử GD</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.home')? 'active3' : '' }}">
                    <a href="{{route('admin.home')}}"><i class="feather-sliders"></i> <span>Thống kê</span></a>
                </li>
                <li class=" {{ Request::routeIs('admin.home')? 'active4' : '' }}">
                    <a href="{{route('admin.home')}}"><i class="feather-sliders"></i> <span>Hỗ trợ</span></a>
                </li>
                <li class="submenu">
                    <a href="#"><i class="feather-file-text"></i> <span> Cấu hình</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('admin.cauHinh.1Phut')}}">1 Phút</a></li>
                        <li><a href="income-report.html">1.5 Phút</a></li>
                        <li><a href="invoice-report.html">3 Phút</a></li>
                    </ul>
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
