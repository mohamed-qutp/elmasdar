@extends('layout.header')

@section('title', 'تعديل المشروع')
@section('t2','/المشاريع')
@section('t3','/تعديل المشروع')
@section('pagetitle','تعديل المشروع')
@section('body')

@foreach ($contracts as $contracts)
<form action="{{ route('contract.update',$contracts->id) }}" autocomplete="off" method="post">
    @csrf
    @method("PUT")
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <h5 class="card-title">عقد الموظف: {{ $contracts->user->name }}</h5></br>
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">تاريخ بداية العقد</label>
                                <input type="date" class="form-control" value="{{ $contracts->from }}" name="from" id="from" placeholder="dd/mm/yyyy" required>
                                <small class="form-text text-muted">*مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="to">تاريخ انتهاء العقد</label>
                                <input type="date" name="to" class="form-control" value="{{ $contracts->to }}" id="to" placeholder="dd/mm/yyyy" required>
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <button class="btn btn-secondary" name="update" type="submit">تعديل</button>
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