<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('manager.dashboard') }}" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Components</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="nav-icon far fa-user"></i>
                        <span class="hide-menu">Manager</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('manager') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage Manager </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('manager.create')}}" class="sidebar-link">
                                <span class="hide-menu"> Create Manager </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="nav-icon far fa-user"></i>
                        <span class="hide-menu">Teacher</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('teacher') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage teacher </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('teacher.create')}}" class="sidebar-link">
                                <span class="hide-menu"> Create teacher </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="nav-icon far fa-user"></i>
                        <span class="hide-menu">Parent</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('parent') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage parent </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('parent.create')}}" class="sidebar-link">
                                <span class="hide-menu"> Create parent </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="nav-icon far fa-user"></i>
                        <span class="hide-menu">Student</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('student') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage student </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('student.create')}}" class="sidebar-link">
                                <span class="hide-menu"> Create student </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="nav-icon far fa-user"></i>
                        <span class="hide-menu">Classes</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('classes') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage classes </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('classes.create')}}" class="sidebar-link">
                                <span class="hide-menu"> Create classes </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i class="nav-icon far fa-user"></i>
                        <span class="hide-menu">Categories</span>
                    </a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item">
                            <a href="{{ route('category') }}" class="sidebar-link">
                                <span class="hide-menu"> Manage category </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="{{route('category.create')}}" class="sidebar-link">
                                <span class="hide-menu"> Create category </span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
