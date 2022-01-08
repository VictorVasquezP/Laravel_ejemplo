<nav>
    <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
    </div>
    <label class="dropdown">
        <div class="profile-details dd-button">
            <img src="../../images/member-03.jpg" alt="">
            <span class="admin_name">{{ session()->get('usuario', '')->name}}</span>
            <i class='bx bx-chevron-down'></i>
        </div>
        <input type="checkbox" class="dd-input" id="test">

        <ul class="dd-menu">
            <li>Action</li>
            <li>Another action</li>
            <li>Something else here</li>
            <li class="divider"></li>
            <li>
                <a href="http://rane.io">Link to Rane.io</a>
            </li>
        </ul>
    </label>

</nav>