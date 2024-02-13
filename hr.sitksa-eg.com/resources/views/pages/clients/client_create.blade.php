@extends('layout.header')

@section('title', 'اضافة عميل')
@section('t2','/العملاء')
@section('t3','/اضافة عميل')
@section('pagetitle','اضافة عميل')
@section('body')
{{--  --}}
@if ($errors->any())
<div class="bg bg-danger" style="padding: 10px;color:white;border-radius:5px">
    <ul>
        @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{ route('clients.store') }}" autocomplete="off" method="post">
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
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="phone_number">رقم الجوال</label>
                                <div class="input-group">
                                    <input name="phone_number" value="{{ old('phone_number') }}" class="form-control" id="phone_number" type="text" placeholder="رقم الجوال">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="address">العنوان</label>
                                <div class="input-group">
                                    <input name="address" value="{{ old('address') }}" class="form-control" placeholder="العنوان" type="text">
                                </div>
                                <small id="emailHelp" class="form-text text-muted">غير مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <button class="btn btn-secondary" name="save" type="submit">حفظ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection