<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        {{--<a href="/home">--}}
            {{--<img src="/backend/images/icon/logo.png" alt="Cool Admin" />--}}
        {{--</a>--}}
    </div>


    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar2">
            <ul class="list-unstyled navbar__list">
                <li class="has-sub">
                    @role('doctor|dentists|superadmin')
                    <a class="js-arrow" href="#">
                        <i class="fa fa-group"></i>User Management
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    @endrole
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
                                <i class="fa fa-lock" aria-hidden="true"></i>Permissions </a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    @role('doctor|dentists|superadmin')
                    <a class="js-arrow" href="#">
                        <i class="fa fa-pencil-square-o"></i>Appointments
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    @endrole
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.appointments.index')}}">
                                <i class="fa fa-users" aria-hidden="true"></i>ALL Appointments</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.appointments.create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>Add Appointment</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.events.index')}}"><i class="fa fa-calendar" aria-hidden="true"></i>Events</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-user-md" aria-hidden="true"></i>Patient Management
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.patients.index')}}">
                                <i class="fa fa-user-circle" aria-hidden="true"></i>All Patients</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.patients.create')}}">
                               <i class="fa fa-user-plus" aria-hidden="true"></i></i>Add Patient</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.prescriptions.index')}}"><i class="fa fa-file-text" aria-hidden="true"></i>ALL Patient Prescription</a>
                        </li>
                         <li>
                            <a href="{{ route('backend.prescriptions.create')}}"><i class="fa fa-plus" aria-hidden="true"></i>Add Prescriptions</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    @role('dentists|doctor|superadmin')
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>Dental Management
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>

                    </a>
                    @endrole
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.dental.index')}}">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                All Services</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.patients.create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add Patient</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.dental.create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add Service</a>
                        </li>

                    </ul>

                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user"></i>
                        Inventory
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>

                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('backend.inventories.index')}}">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                All Medicines</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.inventories.create')}}">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                Add Medicine</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.medicines.create')}}">
                                <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                                Give Medicine</a>
                        </li>
                        <li>
                            <a href="{{ route('backend.medicines.index')}}">
                                <i class="fa fa-history" aria-hidden="true"></i>
                                Medical History</a>
                        </li>
                    </ul>

                </li>
                {{--<li class="has-sub">--}}
                    {{--<a class="js-arrow" href="#">--}}
                        {{--<i class="fas fa-th-list"></i>Reports</a>--}}
                    {{--<ul class="list-unstyled navbar__sub-list js-sub-list">--}}
                        {{--<li>--}}
                            {{--<a href="{{ route('backend.users.index') }}">--}}
                                {{--<i class="fa fa-group"></i>Doctors</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="{{ route('backend.patients.index') }}">--}}
                                {{--<i class="fa fa-group"></i>Patients</a>--}}
                        {{--</li>--}}
                        {{--<li>--}}
                            {{--<a href="register.html"> <i class="fa fa-calendar-plus-o"></i>Appointments</a>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</li>--}}

            </ul>
        </nav>
    </div>
</aside>