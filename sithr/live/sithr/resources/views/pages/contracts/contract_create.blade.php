@extends('layout.header')

@section('title', 'اضافة عقد')
@section('t2','/العقود')
@section('t3','/اضافة عقد')
@section('pagetitle','اضافة عقد')
@section('body')
<form action="{{ route('contract.store') }}" autocomplete="off" method="post">
    @csrf
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">     
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">تاريخ بداية العقد</label>
                                <input type="date" class="form-control" value="{{ old('from') }}" name="from" id="from" placeholder="dd/mm/yyyy" required>
                                <small class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="to">تاريخ انتهاء العقد</label>
                                <input type="date" name="to" class="form-control" value="{{ old('to') }}" id="to" placeholder="dd/mm/yyyy" required>
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="users">الموظف</label>
                                <div class="input-group">
                                    <select name="users" value="{{ old('users') }}" class="form-control" required>
                                        <option value="" disbaled>اختر الموظف</option>
                                        @foreach ($users as $users)                                            
                                        <option value="{{ $users->id }}">{{ $users->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
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