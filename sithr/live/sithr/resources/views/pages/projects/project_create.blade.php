@extends('layout.header')

@section('title', 'اضافة مشروع')
@section('t2','/المشاريع')
@section('t3','/اضافة مشروع')
@section('pagetitle','اضافة مشروع')
@section('body')
<form action="{{ route('projects.store') }}" autocomplete="off" method="post">
    @csrf
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">     
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name" id="name" placeholder="الاسم" required>
                                <small class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="client">العميل</label>
                                <div class="input-group">
                                    <select name="client" value="{{ old('client') }}" class="form-control" required>
                                        <option value="" disbaled>اختر عميل المشروع</option>
                                        @foreach ($clients as $client)                                            
                                        <option value="{{ $client->id }}">{{ $client->name }}</option>
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