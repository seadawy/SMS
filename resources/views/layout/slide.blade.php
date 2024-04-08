<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('staff.dashboard') }}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-book"></i>
                        <span class="hide-menu">Courses</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('Staffcourse.create') }}" class="sidebar-link">
                                <span class="hide-menu"> Create Course </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('Staffcourse') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage Courses </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="fas fa-th-list"></i>
                        <span class="hide-menu">Lessons</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('StaffLesson.create') }}" class="sidebar-link">
                                <span class="hide-menu"> Create Lesson </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{ route('StaffLesson') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage Lessons </span>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">User Options</span></li>

                <li class="sidebar-item">
                    <a class="btn sidebar-link sidebar-link" href="{{ route('chatCenter') }}">
                        <i data-feather="message-square" class="feather-icon"></i><span class="hide-menu">Chat</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="btn sidebar-link sidebar-link" href="#">
                        <i data-feather="settings" class="feather-icon"></i><span class="hide-menu">Setting</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn sidebar-link sidebar-link" type="submit">
                            <i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</aside>
