<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
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

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="feather" class="feather-icon"></i><span
                            class="hide-menu">Icons
                        </span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="icon-fontawesome.html" class="sidebar-link"><span
                                    class="hide-menu"> Fontawesome Icons </span></a></li>

                        <li class="sidebar-item"><a href="icon-simple-lineicon.html" class="sidebar-link"><span
                                    class="hide-menu"> Simple Line Icons </span></a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                        aria-expanded="false"><i data-feather="crosshair" class="feather-icon"></i><span
                            class="hide-menu">Multi
                            level
                            dd</span></a>
                    <ul aria-expanded="false" class="collapse first-level base-level-line">
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> item 1.1</span></a>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> item 1.2</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="has-arrow sidebar-link" href="javascript:void(0)"
                                aria-expanded="false"><span class="hide-menu">Menu 1.3</span></a>
                            <ul aria-expanded="false" class="collapse second-level base-level-line">
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.1</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.2</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.3</span></a></li>
                                <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                            class="hide-menu"> item
                                            1.3.4</span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"><a href="javascript:void(0)" class="sidebar-link"><span
                                    class="hide-menu"> item
                                    1.4</span></a></li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link"
                        href="{{ asset('../docs/docs.html') }}" aria-expanded="false"><i data-feather="edit-3"
                            class="feather-icon"></i><span class="hide-menu">Documentation</span></a></li>
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="authentication-login1.html"
                        aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                            class="hide-menu">Logout</span></a></li>
            </ul>
        </nav>
    </div>
</aside>
