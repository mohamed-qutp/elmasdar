@extends('layout.header')

@section('body')
<div class="py-4">
    <div class="dropdown">
        <button class="btn btn-gray-800 d-inline-flex align-items-center me-2" type="button" data-bs-target="#modal-task" data-bs-toggle="modal">
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            New Task
        </button>
    </div>
</div>
<div class="row">
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path></svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="h5">رصيد الاذونات</h2>
                            <h3 class="fw-extrabold mb-1">2</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">رصيد الاذونات</h2>
                            <h3 class="fw-extrabold mb-2">2</h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                        شهر {{ date("m") }}  
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-xl-4 mb-4">
        <div class="card border-0 shadow">
            <div class="card-body">
                <div class="row d-block d-xl-flex align-items-center">
                    <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                        <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                            <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>
                        </div>
                        <div class="d-sm-none">
                            <h2 class="fw-extrabold h5">رصيد الاجازات</h2>
                            <h3 class="mb-1">15 يوم</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">رصيد الاجازات</h2>
                            <h3 class="fw-extrabold mb-2">15 يوم</h3>
                        </div>
                        <small class="d-flex align-items-center text-gray-500">
                            تنتهي في 2022-03
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="row">
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Team members</h2>
                        <a href="#" class="btn btn-sm btn-primary">See all</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list my--3">
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="#" class="avatar">
                                        <img class="rounded" alt="Image placeholder" src="assets/img/team/profile-picture-1.jpg">
                                    </a>
                                </div>
                                <div class="col-auto ms--2">
                                    <h4 class="h6 mb-0">
                                        <a href="#">Chris Wood</a>
                                    </h4>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-success dot rounded-circle me-1"></div>
                                        <small>Online</small>
                                    </div>
                                </div>
                                <div class="col text-end">
                                    <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                        <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                        Invite
                                    </a>
                                </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar">
                                            <img class="rounded" alt="Image placeholder" src="assets/img/team/profile-picture-2.jpg">
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                        <h4 class="h6 mb-0">
                                            <a href="#">Jose Leos</a>
                                        </h4>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-warning dot rounded-circle me-1"></div>
                                            <small>In a meeting</small>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                            <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                            Message
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar">
                                            <img class="rounded" alt="Image placeholder" src="assets/img/team/profile-picture-3.jpg">
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                        <h4 class="h6 mb-0">
                                            <a href="#">Bonnie Green</a>
                                        </h4>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-danger dot rounded-circle me-1"></div>
                                            <small>Offline</small>
                                        </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                            <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                            Message
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="#" class="avatar">
                                            <img class="rounded" alt="Image placeholder" src="assets/img/team/profile-picture-4.jpg">
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                    <h4 class="h6 mb-0">
                                            <a href="#">Neil Sims</a>
                                    </h4>
                                    <div class="d-flex align-items-center">
                                        <div class="bg-danger dot rounded-circle me-1"></div>
                                        <small>Offline</small>
                                    </div>
                                    </div>
                                    <div class="col text-end">
                                        <a href="#" class="btn btn-sm btn-secondary d-inline-flex align-items-center">
                                            <svg class="icon icon-xxs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd"></path></svg>
                                            Message
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Progress track</h2>
                            <a href="#" class="btn btn-sm btn-primary">See tasks</a>
                        </div>
                    <div class="card-body">
                        <!-- Project 1 -->
                        <div class="row mb-4">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Rocket - SaaS Template</div>
                                        <div class="small fw-bold text-gray-500"><span>75 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 2 -->
                        <div class="row align-items-center mb-4">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Themesberg - Design System</div>
                                        <div class="small fw-bold text-gray-500"><span>60 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 3 -->
                        <div class="row align-items-center mb-4">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Homepage Design in Figma</div>
                                        <div class="small fw-bold text-gray-500"><span>45 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Project 4 -->
                        <div class="row align-items-center mb-3">
                            <div class="col-auto">
                                <svg class="icon icon-sm text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path><path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path></svg>
                            </div>
                            <div class="col">
                                <div class="progress-wrapper">
                                    <div class="progress-info">
                                        <div class="h6 mb-0">Backend for Themesberg v2</div>
                                        <div class="small fw-bold text-gray-500"><span>34 %</span></div>
                                    </div>
                                    <div class="progress mb-0">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100" style="width: 34%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Content -->
<div class="modal fade" id="modal-task" tabindex="-1" role="dialog" aria-labelledby="modal-task" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">Create Account </h1>
                    </div>
                    <form action="#" class="mt-4">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
                                </span>
                                <input type="email" class="form-control" placeholder="example@company.com" id="email" autofocus required>
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input type="password" placeholder="Password" class="form-control" id="password" required>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="confirm_password">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" required>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <div class="mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="remember">
                                    <label class="form-check-label fw-normal mb-0" for="remember">
                                        I agree to the <a href="#" class="fw-bold">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-gray-800">Sign up</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End of Modal Content -->
@endsection