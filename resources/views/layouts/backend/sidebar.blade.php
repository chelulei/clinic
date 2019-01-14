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
                    <a class="js-arrow" href="/home">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('backend.employees.index') }}">
                        <i class="fa fa-suitcase"></i>Employees
                    </a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-group"></i>Employees</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.employees.index') }}">
                                <i class="fa fa-group"></i>All Employees</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.employees.create') }}">
                                <i class="fa fa-briefcase"></i>Add Eloyee</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-group"></i>User Management</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.users.index') }}">
                                <i class="fa fa-group"></i>Users</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.roles.index') }}">
                                <i class="fa fa-briefcase"></i>Roles</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.permissions.index') }}">
                                <i class="fa fa-briefcase"></i>Permissions </a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-user-md" aria-hidden="true"></i>Patient Management</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.patients.index')}}"><i class="fa fa-user-plus"></i>All Patients</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.prescriptions.index')}}"><i class="fa fa-user-plus"></i>Patient Assessment</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Administrator</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ url('event')}}"><i class="fa  fa-calendar"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.appointments.index')}}"><i class="fa  fa-calendar"></i>Appointments</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.patients.index')}}"><i class="fa fa-user-plus"></i>Patients</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.prescriptions.index')}}"><i class="fa fa-user-plus"></i>Prescriptions</a>
                        </li>
                    </ul>

                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-th-list"></i>Reports</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.users.index') }}">
                                <i class="fa fa-group"></i>Doctors</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.patients.index') }}">
                                <i class="fa fa-group"></i>Patients</a>
                        </li>
                        <li>
                            <a href="register.html"> <i class="fa fa-calendar-plus-o"></i>Appointments</a>
                        </li>
                    </ul>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="/home">
                        <i class="fas fa-tachometer-alt"></i>Calendar
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>