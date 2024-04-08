@extends('layout.master')
@section('title', 'Chat Center')

@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Chat Center</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('staff.dashboard') }}" class="text-muted">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Chat</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row g-0">
                        <div class="col-lg-3 col-xl-2 border-end">
                            <div class="card-body border-bottom">
                                <form>
                                    <input class="form-control" type="text" placeholder="Search Contact">
                                </form>
                            </div>
                            <div class="scrollable position-relative" style="height: calc(100vh - 111px);">
                                <ul class="mailbox list-style-none">
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="user-img"><img src="../assets/images/users/6.jpg" alt="user"
                                                        class="img-fluid rounded-circle" width="40px"> <span
                                                        class="profile-status offline float-end"></span>
                                                </div>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Akshay Kumar</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center border-bottom px-3 py-2">
                                                <div class="user-img"><img src="../assets/images/users/7.jpg" alt="user"
                                                        class="img-fluid rounded-circle" width="40px">
                                                    <span class="profile-status offline float-end"></span>
                                                </div>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Pavan kumar</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)"
                                                class="message-item d-flex align-items-center px-3 py-2">
                                                <div class="user-img"><img src="../assets/images/users/8.jpg" alt="user"
                                                        class="img-fluid rounded-circle" width="40px">
                                                    <span class="profile-status offline float-end"></span>
                                                </div>
                                                <div class="w-75 d-inline-block v-middle ps-2">
                                                    <h6 class="message-title mb-0 mt-1">Varun Dhavan</h6>
                                                    <span class="font-12 text-nowrap d-block text-muted text-truncate">Just
                                                        see the my admin!</span>
                                                    <span class="font-12 text-nowrap d-block text-muted">9:02
                                                        AM</span>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9  col-xl-10">
                            <div class="chat-box scrollable position-relative" style="height: calc(100vh - 111px);">
                                <!--chat Row -->
                                <ul class="chat-list list-style-none px-3 pt-3">
                                    <!--chat Row -->
                                    <li class="chat-item list-style-none mt-3">
                                        <div class="chat-img d-inline-block"><img src="../assets/images/users/1.jpg"
                                                alt="user" class="rounded-circle" width="45">
                                        </div>
                                        <div class="chat-content d-inline-block ps-3">
                                            <h6 class="font-weight-medium">James Anderson</h6>
                                            <div class="msg p-2 d-inline-block mb-1">Lorem
                                                Ipsum is simply
                                                dummy text of the
                                                printing &amp; type setting industry.</div>
                                        </div>
                                        <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">10:56 am
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item list-style-none mt-3">
                                        <div class="chat-img d-inline-block"><img src="../assets/images/users/2.jpg"
                                                alt="user" class="rounded-circle" width="45">
                                        </div>
                                        <div class="chat-content d-inline-block ps-3">
                                            <h6 class="font-weight-medium">Bianca Doe</h6>
                                            <div class="msg p-2 d-inline-block mb-1">It’s
                                                Great opportunity to
                                                work.</div>
                                        </div>
                                        <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">10:57 am
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item odd list-style-none mt-3">
                                        <div class="chat-content text-end d-inline-block ps-3">
                                            <div class="box msg p-2 d-inline-block mb-1">I
                                                would love to
                                                join the team.</div>
                                            <br>
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item odd list-style-none mt-3">
                                        <div class="chat-content text-end d-inline-block ps-3">
                                            <div class="box msg p-2 d-inline-block mb-1 box">
                                                Whats budget
                                                of the new project.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time text-end d-block font-10 mt-1 mr-0 mb-3">
                                            10:59 am</div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item list-style-none mt-3">
                                        <div class="chat-img d-inline-block"><img src="../assets/images/users/3.jpg"
                                                alt="user" class="rounded-circle" width="45">
                                        </div>
                                        <div class="chat-content d-inline-block ps-3">
                                            <h6 class="font-weight-medium">Angelina Rhodes</h6>
                                            <div class="msg p-2 d-inline-block mb-1">Well we
                                                have good budget
                                                for the project
                                            </div>
                                        </div>
                                        <div class="chat-time d-block font-10 mt-1 mr-0 mb-3">11:00 am
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item odd list-style-none mt-3">
                                        <div class="chat-content text-end d-inline-block ps-3">
                                            <div class="box msg p-2 d-inline-block mb-1">I
                                                would love to
                                                join the team.</div>
                                            <br>
                                        </div>
                                    </li>
                                    <!--chat Row -->
                                    <li class="chat-item odd list-style-none mt-3">
                                        <div class="chat-content text-end d-inline-block ps-3">
                                            <div class="box msg p-2 d-inline-block mb-1 box">
                                                Whats budget
                                                of the new project.</div>
                                            <br>
                                        </div>
                                        <div class="chat-time text-end d-block font-10 mt-1 mr-0 mb-3">
                                            10:59 am</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body border-top">
                                <div class="row">
                                    <div class="col-9">
                                        <div class="input-field mt-0 mb-0">
                                            <input id="textarea1" placeholder="Type and enter"
                                                class="form-control border-0" type="text">
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <a class="btn-circle bg-cyan float-end text-white d-flex align-items-center justify-content-center"
                                            href="javascript:void(0)"><i class="fas fa-paper-plane"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
