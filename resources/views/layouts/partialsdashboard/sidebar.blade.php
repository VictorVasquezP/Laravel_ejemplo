<div class="sidebar">
    <div class="logo-details">
        <i class='bx bxl-c-plus-plus'></i>
        <span class="logo_name">CodingLab</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="{{route('posts.index')}}" class="{{request()->routeIs('posts.*') ? 'active':''}}">
                <i class='bx bx-grid-alt'></i>
                <span class="links_name">Posts</span>
            </a>
        </li>
        <li>
            <a href="{{route('categories.index')}}" class="{{request()->routeIs('categories.*') ? 'active':''}}">
                <i class='bx bx-box'></i>
                <span class="links_name">Categories</span>
            </a>
        </li>
        <li>
            <a href="#" class="{{request()->routeIs('users.*') ? 'active':''}}">
                <i class='bx bx-list-ul'></i>
                <span class="links_name">Users</span>
            </a>
        </li>
        
        <li class="log_out">
            <a href="{{route('logout')}}">
                <i class='bx bx-log-out'></i>
                <span class="links_name">Log out</span>
            </a>
        </li>
    </ul>
</div>