@extends('layout.header')

@section('title', 'اضافة موظف')
@section('t2','/الموظفين')
@section('t3','/اضافة موظف') 
@section('pagetitle','اضافة موظف')
@section('body')
<form action="{{route('users.store')}}" autocomplete="off" method="post">
    @csrf
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">     
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="الاسم" required>
                                <small class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" placeholder="البريد الالكتروني" aria-describedby="emailHelp" required>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="usernameValidate">اسم المستخدم</label>
                                <input type="text" class="form-control" name="username" value="{{ old('username') }}" id="username" placeholder="اسم المستخدم" required>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">له اذونات</label>
                                <div class="input-group">
                                    <input class="form-check-input" name="have_permissions" type="checkbox" id="have_permissions" {{ old('have_permissions') ? 'checked' : '' }}>
                                    <input type="text" name="permission" id="permission"  value="{{ old('permission') }}" placeholder="عدد الاذونات" class="hidden form-control">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">كلمة المرور</label>
                                <div class="input-group">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="كلمة المرور" aria-label="Password" required>
                                    <span class="input-group-text" id="basic-addon3">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">تأكيد كلمة المرور</label>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="confirmpass" placeholder="تأكيد كلمة المرور" name="confirmpass" aria-label="Password" required>
                                    <span class="input-group-text" id="basic-addon3">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path></svg>
                                    </span>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">الأقسام</label>
                                <div class="input-group">
                                    <select class="form-select" name="department_id" id="department_id" aria-label="Default select example">
                                        <option value="">اختر</option>
                                        @foreach($departments as $department)
                                        <option value="{{$department->id}}">{{$department->name}}</option>
                                        @endforeach
                                        
                                    </select> 
                                </div>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">الصلاحيات</label>
                                <div class="input-group">
                                    <select class="form-select" name="auth" aria-label="Default select example">
                                        <option selected>اختر</option>
                                        <option value="admin">Admin</option>
                                        <option value="hr">HR</option>
                                        <option value="regular">Regular</option>
                                    </select>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">له اجازات</label>
                                <div class="input-group">
                                    <input class="form-check-input" name="have_vacations" type="checkbox" id="have_vacations" {{ old('have_vacations') ? 'checked' : '' }}>
                                    <input type="text" name="vacations" id="vacations" placeholder="الاجازات" value="{{ old('vacations') }}" class="hidden form-control">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="birthday">رقم الجوال</label>
                                <div class="input-group">
                                    <input name="phone_number" value="{{ old('phone_number') }}" class="form-control" id="phone_number" type="text" placeholder="رقم الجوال" required>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="birthday">تاريخ الميلاد</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                    </span>
                                    <input data-datepicker="" name="birthdate" value="{{ old('birth_date') }}" class="form-control" id="birthdate" type="text">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label class="my-1 me-2" for="gender">النوع</label>
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option value="">اختر</option>
                                    <option value="female">انثى</option>
                                    <option value="male">ذكر</option>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="national_id">رقم البطاقة</label>
                                <input type="text" class="form-control" name="national_id" value="{{ old('national_id') }}" id="national_id" placeholder="رقم البطاقة المكون من 14 رقم">
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <button class="btn btn-secondary" type="submit">حفظ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection