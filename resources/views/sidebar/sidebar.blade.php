    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{ route('home') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>
                    <li class="menu-title">Organization Setup</li><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="#"
                            aria-expanded="false"> <i class="menu-icon fa fa-cogs" style="color: green"></i>Structure</a>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            aria-expanded="false"> <i class="menu-icon fa fa-table" style="color: rebeccapurple"></i>Schedule</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('departments.index') }}"
                            aria-expanded="false"> <i class="menu-icon fa fa-university" style="color: royalblue"></i>Departments</a>
                    </li>

                    <li class="menu-title">Employees</li><!-- /.menu-title -->

                    <li class="menu-item">
                        <a href="{{ route('users.index') }}"
                            aria-expanded="false"> <i class="menu-icon fa fa-users" style="color: brown"></i>All</a>
                    </li>
                    <li class="menu-item">
                        <a href="widgets.html"> <i class="menu-icon fa fa-user-plus" style="color: green"></i>OnBoading </a>
                    </li>
                    <li class="menu-item">
                        <a href="widgets.html"> <i class="menu-icon fa fa-user-times" style="color: red"></i>OffBoarding </a>
                    </li>
                    <li class="menu-item">
                        <a href="widgets.html"> <i class="menu-icon fa fa-tag" style="color: blue"></i>Onleave </a>
                    </li>
                    <li class="menu-title">Payroll</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        {{-- <li class="menu-item">
                            <a href=""
                                aria-expanded="false"> <i style="color: rgb(240, 111, 79)" class="menu-icon fa fa-tasks"></i>Bank Accounts</a>
                        </li> --}}
                        <li class="menu-item">
                            <a href="{{ route('paystubs.index') }}"
                                aria-expanded="false"> <i class="menu-icon fa fa-credit-card-alt" style="color: violet"></i>Pay info</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('taxes.index') }}"
                                aria-expanded="false"> <i style="color: rgb(240, 111, 79)" class="menu-icon fa fa-money"></i>Taxes</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('users.index') }}"
                                aria-expanded="false"> <i class="menu-icon fa fa-plus-square" style="color: green"></i>Bonuses</a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('users.index') }}"
                                aria-expanded="false"> <i class="menu-icon fa fa-minus-square" style="color: red"></i>Deductions</a>
                        </li>
                    </li>
                    <li class="menu-title">Projects</li><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="#"
                            aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>All Projects</a>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Ongoing</a>
                    </li>
                    <li class="menu-item">
                        <a href="#"
                            aria-expanded="false"> <i class="menu-icon fa fa-check"></i>Completed</a>
                    </li>
                    <li class="menu-title">Reports</li><!-- /.menu-title -->
                    <li class="menu-item">
                        <a href="{{ route('users.index') }}"
                            aria-expanded="false"> <i class="menu-icon fa fa-table" style="color: rgb(44, 161, 46)"></i>Income vs Expense</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('users.index') }}"
                            aria-expanded="false"> <i class="menu-icon fa fa-users" style="color: rgb(49, 176, 30)"></i>Monthly Attendance</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('users.index') }}"
                            aria-expanded="false"> <i class="menu-icon fa fa-tag" style="color: rgb(20, 81, 14)"></i>Leave</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('users.index') }}"
                            aria-expanded="false"> <i class="menu-icon fa fa-money" style="color: rgb(64, 106, 21)"></i>payroll</a>
                    </li>
                    <li class="menu-title">Training</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-title">Attendance</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                            <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                            <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
