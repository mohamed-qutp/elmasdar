@extends('layout.header')

@section('title', 'اضافة قسم')
@section('t2','/الأقسام')
@section('t3','/اضافة قسم')
@section('pagetitle','اضافة قسم')
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
<form action="{{ route('departments.store') }}" autocomplete="off" method="post">
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
                            <button class="btn btn-secondary" name="save" type="submit">حفظ</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection