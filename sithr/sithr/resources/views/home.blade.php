@extends('layout.header')

@section('body')
<div class="py-4">
    <div class="dropdown">
        <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            انشاء طلب
            <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        </button>
        <div class="dropdown-menu dashboard-dropdown dropdown-menu-start mt-2 py-1">
            <a class="dropdown-item d-flex align-items-center" href="#" data-bs-target="#modal-perm" data-bs-toggle="modal">
                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"></path></svg>
                طلب اذن
            </a>
            <a class="dropdown-item d-flex align-items-center" href="#" data-bs-target="#modal-vac" data-bs-toggle="modal">
                <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path></svg>                            
                طلب اجازة
            </a>
           
        </div>
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
                            <h3 class="fw-extrabold mb-1">{{ Auth::user()->permission}}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">رصيد الاذونات</h2>
                            <h3 class="fw-extrabold mb-2">{{ Auth::user()->permission}}</h3>
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
                            <h3 class="mb-1">{{ Auth::user()->vacations}}</h3>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7 px-xl-0">
                        <div class="d-none d-sm-block">
                            <h2 class="h6 text-gray-400 mb-0">رصيد الاجازات</h2>
                            <h3 class="fw-extrabold mb-2">{{ Auth::user()->vacations}}</h3>
                        </div>
                        @foreach ($contract as $contract)
                        <small class="d-flex align-items-center text-gray-500">
                            تنتهي في {{ $contract->to }}
                        </small>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
   
</div>
<div class="row">
    <div class="col-12 col-xl-12">
        <div class="row">
            {{-- permission --}}
            @if (!Auth::guest() && (Auth::user()->auth != "regular"))
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">اذونات اليوم الموافق {{ date('Y-m-d') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">#</th>
                                        <th class="border-0">اسم الموظف</th>
                                        <th class="border-0">الحالة</th>
                                        <th class="border-0">اعتمدت بواسطة</th>
                                        <th class="border-0">تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($permissions) > 0)
                                        @foreach ($permissions as $permissions)
                                    <tr>
                                        <td>{{ $permissions->id }}</td>
                                        <td>{{ $permissions->employee->name }}</td>
                                        @if ($permissions->status == 'pending')
                                        <td><div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">تحت المراجعة</div></td>
                                        @elseif($permissions->status == 'accepted')
                                        <td><div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">مقبول</div></td>
                                        @elseif($permissions->status == 'rejected')
                                        <td><div class="badge bg-danger" style="padding: 5px;font-size:1em;color:black">مرفوض</div></td>
                                        @elseif($permissions->status == 'cancelled')
                                        <td><div class="badge bg-light" style="padding: 5px;font-size:1em;color:black">ملغي</div></td>
                                        @endif
                                        @if ($permissions->status != 'pending')
                                            <td>{{ $permissions->users->name }}</td>
                                        @else
                                            <td>لم يتم الاعتماد بعد</td>
                                        @endif
                                        <td><a href="{{ route('prequest.show',$permissions->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                                    </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td>لا يوجد اذونات اليوم</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- vacations --}}
            @if (!Auth::guest() && (Auth::user()->auth != "regular"))
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">اجازات اليوم الموافق {{ date('Y-m-d') }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0 rounded">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="border-0 rounded-start">#</th>
                                        <th class="border-0">اسم الموظف</th>
                                        <th class="border-0">تاريخ  بداية الاجازة</th>
                                        <th class="border-0">تاريخ  نهاية الاجازة</th>
                                        <th class="border-0">الحالة</th>
                                        <th class="border-0">اعتمدت بواسطة</th>
                                        <th class="border-0">تفاصيل</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($vacations) > 0)
                                        @foreach ($vacations as $vacation)
                                    <tr>
                                        <td>{{ $vacation->id }}</td>
                                        <td>{{ $vacation->employee->name }}</td>
                                        <td>{{ $vacation->date_from }}</td>
                                        <td>{{ $vacation->date_to }}</td>
                                        @if ($vacation->status == 'pending')
                                        <td><div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">تحت المراجعة</div></td>
                                        @elseif($vacation->status == 'accepted')
                                        <td><div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">مقبول</div></td>
                                        @elseif($vacation->status == 'rejected')
                                        <td><div class="badge bg-danger" style="padding: 5px;font-size:1em;color:black">مرفوض</div></td>
                                        @elseif($vacation->status == 'cancelled')
                                        <td><div class="badge bg-light" style="padding: 5px;font-size:1em;color:black">ملغي</div></td>
                                        @endif 
                                        @if ($vacation->status != 'pending')
                                            <td>{{ $vacation->users->name }}</td>
                                        @else
                                            <td>لم يتم الاعتماد بعد</td>
                                        @endif
                                        <td><a href="{{ route('vrequest.show',$vacation->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                                    </tr>
                                        @endforeach
                                    @else
                                    <tr>
                                        <td>لا يوجد اجازات اليوم</td>
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            {{-- activity log --}}
            @if (!Auth::guest() && (Auth::user()->auth != "regular"))
            <div class="col-12 col-xxl-6 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Team members</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush list my--3">
                            @if (count($useractivity) > 0)
                            @foreach ($useractivity as $user)
                            <li class="list-group-item px-0">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <!-- Avatar -->
                                        <a href="{{ route('users.show',$user->id) }}" class="avatar">
                                        @if ($user->gender == "male")
                                            <img class="rounded" alt="Image placeholder" src="assets/img/team/male.png">
                                        @else
                                            <img class="rounded" alt="Image placeholder" src="assets/img/team/female.png">
                                        @endif
                                        </a>
                                    </div>
                                    <div class="col-auto ms--2">
                                        <h4 class="h6 mb-0">
                                            <a href="{{ route('users.show',$user->id) }}">{{ $user->name }}</a>
                                        </h4>
                                        <div class="d-flex align-items-center">
                                            <div class="bg-success dot rounded-circle me-1"></div>
                                            <small>Online</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                            @else
                                No active users
                            @endif
                            
                        </ul>
                    </div>
                </div>
            </div>
            @endif
            
         

        </div>
    </div>
</div>
@foreach ($auth as $auth)
<!-- Vacation Modal Content -->
<form action="{{ route('vrequest.store') }}" method="post">
    @csrf 
    <div class="modal fade" id="modal-vac" tabindex="-1" role="dialog" aria-labelledby="modal-vac" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card p-3 p-lg-4">
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h4">طلب اجازة</h1>
                        </div>
                        <form action="#" class="mt-4">
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="type">نوع الاجازة</label><big style="color: red">*</big>
                                    <div class="input-group">
                                        <select name="type" class="form-control" required>
                                            <option value="" disabled selected>اختر نوع الاجازة</option>
                                            <option {{ ($auth->vacations) == 0 ? 'disabled' : '' }}  value="عادية">عادية</option>
                                            <option {{ ($auth->vacations) == 0 ? 'disabled' : '' }} value="عارضة">عارضة</option>
                                            
                                        </select>
                                    </div>  
                                </div>
                                <!-- End of Form -->
                                <!-- Form -->
                                <div class="form-group mb-4">
                                    <label for="range">مدة الاجازة</label><big style="color: red">*</big>
                                    <div class="input-group">
                                        <select name="range" class="form-control" id="range" required>
                                            <option value="" disabled selected>اختر مدة الاجازة</option>
                                            <option value="half">نص يوم</option>
                                            <option value="oneormore">يوم او اكثر</option>
                                        </select>
                                    </div>  
                                </div>
                                <!-- End of Form -->
                                {{-- oneormore --}}
                                <div class="row vacdateselect" id="vacdateselect" style="display: none">
                                    <!-- Form -->
                                    <div class="form-group mb-4 col-md-6">
                                        <label for="from">تاريخ بداية الاجازة</label><big style="color: red">*</big>
                                        <div class="input-group">
                                            <input type="date" name="from" class="form-control">
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-4 col-md-6">
                                        <label for="to">تاريخ نهاية الاجازة</label><big style="color: red">*</big>
                                        <div class="input-group">
                                            <input type="date" name="to" class="form-control">
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                </div>

                                {{-- half --}}
                                <div class="row vacdateselect2" id="vacdateselect2" style="display: none">
                                    <!-- Form -->
                                    <div class="form-group mb-4 col-md-6">
                                        <label for="period">اختر الفترة</label><big style="color: red">*</big>
                                        <div class="input-group">
                                            <select name="period" class="form-control" id="period">
                                                <option value="" disabled selected>اختر الفترة</option>
                                                <option value="morning">صباحية</option>
                                                <option value="evening">مسائية</option>
                                            </select>
                                        </div>    
                                    </div>
                                    <!-- End of Form -->
                                    <!-- Form -->
                                    <div class="form-group mb-4 col-md-6">
                                        <label for="vacdate">تاريخ الاجازة</label><big style="color: red">*</big>
                                        <div class="input-group">
                                            <input type="date" name="vacdate" class="form-control">
                                        </div>  
                                    </div>
                                    <!-- End of Form -->
                                </div>
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="backup">الموظف المختص يتغطية العمل اثناء فترة الاجازة</label><big style="color: red">*</big>
                                <div class="input-group">
                                    <select name="backup" class="form-control" required>
                                        <option value="" disabled selected>اختر الموظف</option>
                                        @foreach ($users as $user)
                                        @if(Auth::user()->department_id == $user->department_id)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                        @endforeach 
                                    </select>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="reason">سبب الاجازة</label>
                                <div class="input-group">
                                    <textarea name="reason" class="form-control" placeholder="سبب الاجازة (غير مطلوب)"></textarea>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <div class="d-grid">
                                <button type="submit" name= "save" class="btn btn-gray-800">ارسال الطلب</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End of Modal Content -->

<!-- Permission Modal Content -->
<form action="{{ route('prequest.store') }}" method="post">
    @csrf
    <div class="modal fade" id="modal-perm" tabindex="-1" role="dialog" aria-labelledby="modal-perm" aria-hidden="true" style="direction: rtl">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card p-3 p-lg-4">
                        <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h4">طلب اذن</h1>
                        </div>
                        <form action="#" class="mt-4">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="from">وقت الحضور</label>
                                <div class="input-group">
                                    <input type="datetime-local" name="from" class="form-control" required>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="to">وقت الانصراف</label>
                                <div class="input-group">
                                    <input type="datetime-local" name="to" class="form-control" required>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="type">نوع الاذن</label>
                                <div class="input-group">
                                    <select name="type" id="type" class="form-control" onchange="choiceSelected('type', this.selectedIndex);" required>
                                        <option value="" disabled selected>اختر نوع الاذن</option>
                                        <option value="راحة بالخصم">راحة بالخصم</option>
                                        <option {{ ($auth->permission) == 0 ? 'disabled' : '' }} value="ظرف شخصي">اذن مسائي</option>
                                        <option {{ ($auth->permission) == 0 ? 'disabled' : '' }} value="اذن صباحي">اذن صباحي</option>
                                        <option value="اذن مقابل عمل اضافي">اذن مقابل عمل اضافي</option>
                                    </select>
                                </div>  
                            </div>
                            <!-- End of Form -->
                            <div class="d-grid">
                                <button type="submit" name= "save" class="btn btn-gray-800">ارسال الطلب</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- End of Modal Content -->

<!-- Attendance Modal Content -->

<!-- End of Modal Content -->
@endforeach
<script>console.log(<?=$vacations?>)</script>
@endsection