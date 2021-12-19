<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
</li>
<li class="dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
    <ul class="dropdown-menu">
        <li class="side-menus {{ Request::is('roles*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('roles.index') }}"><i class="fas fa-building"></i><span>Roles</span></a>
        </li>

        <li class="side-menus {{ Request::is('users*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('users.index') }}"><i class="fas fa-building"></i><span>Users</span></a>
        </li>
    </ul>
</li>





<li class="side-menus {{ Request::is('products*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('products.index') }}"><i class="fas fa-building"></i><span>Products</span></a>
</li>


<li class="side-menus {{ Request::is('blogs*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogs.index') }}"><i class="fas fa-building"></i><span>Blogs</span></a>
</li>

<li class="side-menus {{ Request::is('aboutUsPages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('aboutUsPages.index') }}"><i class="fas fa-building"></i><span>About Us Pages</span></a>
</li>

<li class="side-menus {{ Request::is('bannerHomepages*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('bannerHomepages.index') }}"><i class="fas fa-building"></i><span>Banner Homepages</span></a>
</li>

<li class="side-menus {{ Request::is('blogCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('blogCategories.index') }}"><i class="fas fa-building"></i><span>Blog Categories</span></a>
</li>

<li class="side-menus {{ Request::is('productCategories*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productCategories.index') }}"><i class="fas fa-building"></i><span>Product Categories</span></a>
</li>

