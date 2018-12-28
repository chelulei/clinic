<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="/home">
            <img src="/backend/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Administrator</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.users.create') }}">Add User</a>
                        </li>
                        <li>
                            <a href="register.html">Add Doctor</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Add New Appointment</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Add New Timeslot</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>