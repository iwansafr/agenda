<div>
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link @if(url()->current() != route('dashboard')) collapsed @endif" href="{{ route('dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Product</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/product/add') }}">
                            <i class="bi bi-circle"></i><span>Add Product</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/product/list') }}">
                            <i class="bi bi-circle"></i><span>Product List</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nav-heading">User</li>

            <li class="nav-item">
                <a class="nav-link @if(url()->current() != url('admin/profile')) collapsed @endif" href="{{ url('admin/profile') }}">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
