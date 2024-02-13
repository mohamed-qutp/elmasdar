@extends('layout.header')

@section('title', 'تعديل الموظف')
@section('t2','/الموظفين')
@section('t3','/تعديل الموظف')
@section('pagetitle','تعديل الموظف')
@section('body')

@foreach ($users as $user)
<form action="{{ route('users.update',$user->id) }}" autocomplete="off" method="post">
    <input type="hidden" name="_method" value="PUT" />
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
                                <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="name" placeholder="الاسم" required>
                                <small class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control" value="{{ $user->email }}" id="email" placeholder="البريد الالكتروني" aria-describedby="emailHelp" required>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            @if (Auth::user()->id == $user->id)
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="exampleInputIconPassword">الصلاحيات</label>
                                <input type="text" class="form-control-plaintext" readonly name="auth" value="{{ $user->auth }}" id="auth">
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            @elseif(Auth::user()->auth == 'admin')
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">الصلاحيات</label>
                                <div class="input-group">
                                    <select class="form-select" name="auth" aria-label="Default select example">
                                        <option {{$user->auth == "admin"  ? 'selected' : ''}} value="admin">Admin</option>
                                        <option {{$user->auth == "hr"  ? 'selected' : ''}} value="hr">HR</option>
                                        <option {{$user->auth == "regular"  ? 'selected' : ''}} value="regular">Regular</option>
                                    </select>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            @endif
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="national_id">رقم البطاقة</label>
                                <input type="text" class="form-control" name="national_id" value="{{ $user->national_id }}" id="national_id" placeholder="رقم البطاقة المكون من 14 رقم">
                                <small id="emailHelp" class="form-text text-muted"> غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="usernameValidate">اسم المستخدم</label>
                                <input type="text" class="form-control" name="username" value="{{ $user->username }}" id="usernameValidate" placeholder="اسم المستخدم" required>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="my-1 me-2" for="gender">النوع</label>
                                <select class="form-select" name="gender" aria-label="Default select example">
                                    <option selected>اختر</option>
                                    <option {{$user->gender == "female"  ? 'selected' : ''}} value="female">انثى</option>
                                    <option {{$user->gender == "male"  ? 'selected' : ''}} value="male">ذكر</option>
                                </select>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">اذونات</label>
                                <div class="input-group">
                                     <input class="form-control" {{Auth::user()->auth != 'admin'  ? 'readonly' : ''}} value="{{ $user->permission }}" name="permission" type="text"> 
                                    <!--<input class="form-control"  value="{{ $user->permission }}" name="permission" type="text">-->
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
                                    <input name="phone_number" value="{{ $user->phone_number }}" class="form-control" id="phone_number" type="text" placeholder="رقم الجوال" required>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="birthday">تاريخ الميلاد</label>
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <svg class="icon icon-xs text-gray-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                    <input name="birthdate" value="{{ $user->birth_date }}" class="form-control" type="date">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">اجازات</label>
                                <div class="input-group">
                                     <input class="form-control" {{Auth::user()->auth != 'admin' ? 'readonly' : ''}} value="{{ $user->vacations }}" name="vacations" type="text"> 
                                    <!--<input class="form-control"  value="{{ $user->vacations }}" name="vacations" type="text">-->
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <button class="btn btn-secondary" name="save" type="submit">تعديل</button>
                            @if (Auth::user()->id == $user->id ||  Auth::user()->auth == 'admin')
                            <!-- Form -->
                                <a href="{{ route('change-pass',$user->id) }}" class="btn btn-rounded btn-primary">تغيير كلمة السر</a>
                            <!-- End of Form -->
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection