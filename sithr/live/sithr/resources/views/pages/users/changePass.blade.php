@extends('layout.header')

@section('title', 'تعديل الموظف')
@section('t2','/الموظفين')
@section('t3','/تعديل الموظف')
@section('pagetitle','تغيير كلمة السر')
@section('body')

@foreach ($users as $users)
<form action="{{ route('change-password',$users->id) }}" autocomplete="off" method="post">
    <input type="hidden" name="_method" value="PUT" />
    @csrf
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">     
                    <small class="form-text text-muted bg-warning"><i class="fa fa-warning mb-3"></i> يجب أن تكون كلمات المرور مكونة من 8 حروف/ارقام او اكثر.</small>
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="password">كلمة السر الجديدة</label>
                                <input type="password" class="form-control" name="password" id="password"  required>
                                <small class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="confirmpassword">تأكيد كلمة السر الجديدة</label>
                                <input type="password" class="form-control" name="confirmpassword" id="confirmpassword"  required>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="my-4">
                            <button class="btn btn-secondary" name="save" type="submit">تعديل</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection