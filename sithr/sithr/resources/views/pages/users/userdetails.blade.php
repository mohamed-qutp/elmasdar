@extends('layout.header')

@section('title', 'تفاصيل الموظف')
@section('t2','/الموظفين')
@section('t3','/تفاصيل الموظف')
@section('pagetitle','تفاصيل الموظف')
@section('body')

<form autocomplete="off" method="post">
    @csrf
    @foreach ($users as $user)
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $user->name }}" name="name" id="name" placeholder="الاسم" required>

                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="email">البريد الالكتروني</label>
                                <input type="email" name="email" class="form-control-plaintext" readonly value="{{ $user->email }}" id="email" placeholder="البريد الالكتروني" aria-describedby="emailHelp" required>

                            </div>
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="usernameValidate">اسم المستخدم</label>
                                <input type="text" class="form-control-plaintext" readonly name="username" value="{{ $user->username }}" id="usernameValidate" placeholder="اسم المستخدم" required>

                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="national_id">رقم البطاقة</label>
                                <input type="text" class="form-control-plaintext" readonly name="national_id" value="{{ $user->national_id }}" id="national_id" placeholder="رقم البطاقة المكون من 14 رقم">
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                       @if($user->department !== null)
                        <div class="mb-3">
                                <label for="exampleInputIconPassword">القسم</label>
                                <div class="input-group">
                                    <select class="form-select" name="department_id" disabled aria-label="Default select example">
                                        <!-- <option selected>اختر</option> -->
                                        <option>{{$user->department->name}}</option>
                                       
                                    </select>
                                </div>

                            </div>
                            @endif
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">الصلاحيات</label>
                                <div class="input-group">
                                    <select class="form-select" name="auth" disabled aria-label="Default select example">
                                        <option selected>اختر</option>
                                        <option {{$user->auth == "admin"  ? 'selected' : ''}} value="admin">Admin</option>
                                        <option {{$user->auth == "hr"  ? 'selected' : ''}} value="hr">HR</option>
                                        <option {{$user->auth == "regular"  ? 'selected' : ''}} value="regular">Regular</option>
                                    </select>
                                </div>

                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label class="my-1 me-2" for="gender">النوع</label>
                                <select class="form-select" name="gender" disabled aria-label="Default select example">
                                    <option selected>اختر</option>
                                    <option {{$user->gender == "female"  ? 'selected' : ''}} value="female">انثى</option>
                                    <option {{$user->gender == "male"  ? 'selected' : ''}} value="male">ذكر</option>
                                </select>
                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">اذونات</label>
                                <div class="input-group">
                                    <input class="form-control-plaintext" value="{{ $user->permission }}" name="permission" disabled type="text">
                                </div>

                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="birthday">رقم الجوال</label>
                                <div class="input-group">
                                    <input name="phone_number" value="{{ $user->phone_number }}" class="form-control-plaintext" readonly id="phone_number" type="text" placeholder="رقم الجوال" required>
                                </div>

                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="birthday">تاريخ الميلاد</label>
                                <div class="input-group">
                                    <input name="birthdate" value="{{ $user->birth_date }}" class="form-control-plaintext" readonly type="date">
                                </div>

                            </div>
                            <!-- End of Form -->
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">اجازات</label>
                                <div class="input-group">
                                    <input class="form-control-plaintext" value="{{ $user->vacations }}" name="vacations" disabled type="text">
                                </div>

                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('users.edit',$user->id) }}" type="submit">تعديل بيانات الموظف</a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                @if (Auth::user()->auth == 'admin')
                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">

                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">حذف الموظف</button>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</form>
@endsection