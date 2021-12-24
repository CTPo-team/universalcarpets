<li class="side-menus {{ Request::is('aboutUsPages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('aboutUsPages.index') }}"><i class="fas fa-book"></i><span>About Us</span></a>
</li>

<li class="side-menus {{ Request::is('bannerHomepages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bannerHomepages.index') }}"><i class="fas fa-images"></i><span>Banner Homepage</span></a>
</li>

<li class="dropdown {{ Request::is('products*') ||  Request::is('productCategories*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i> <span>Products</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('productCategories*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('productCategories.index') }}"><i class="fas fa-bars"></i><span>Product Category</span></a>
        </li>
        <li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-bars"></i><span>Product</span></a>
        </li>
    </ul>
</li>

<li class="dropdown {{ Request::is('blogs*') ||  Request::is('blogCategories*') ? 'active' : '' }}">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-blog"></i> <span>Blogs</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('blogCategories*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('blogCategories.index') }}"><i class="fas fa-bars"></i><span>Blog Category</span></a>
        </li>
        <li class="side-menus {{ Request::is('blogs*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('blogs.index') }}"><i class="fas fa-bars"></i><span>Blog</span></a>
        </li>
    </ul>
</li>
@role('superadmin')
    <li class="dropdown {{ Request::is('roles*') ||  Request::is('users*') ? 'active' : '' }}">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-user"></i> <span>Auth</span></a>
        <ul class="dropdown-menu">
            <li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-bars"></i><span>Roles</span></a>
            </li>

            <li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-bars"></i><span>Users</span></a>
            </li>
        </ul>
    </li>
@endrole

<li class="side-menus {{ Request::is('settingWebs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('settingWebs.index') }}"><i class="fas fa-cog"></i><span>Setting Web</span></a>
</li>

