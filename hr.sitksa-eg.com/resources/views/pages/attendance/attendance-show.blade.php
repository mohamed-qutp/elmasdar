@extends('layout.header')

@section('title', 'طلبات ملف الحضور')
@section('t2','/طلبات ملف الحضور')
@section('pagetitle','طلبات ملف الحضور')
@section('body')
@foreach ($attendance as $attendance)
<div class="row rtl-form-section">
    <div class="col-12 mb-4">
        <div class="card border-0 shadow components-section">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <label>صاحب الطلب</label>
                        <input type="text" class="form-control-plaintext" value="{{ $attendance->users->name }}">
                    </div>
                    <div class="col-md-6">
                        <label>ملف شهر</label>
                        <input type="text" class="form-control-plaintext" value="{{ $attendance->month }}">
                    </div>
                </div>
                <div class="row">
                    @if ($attendance->file_path != null)
                    <form action="{{ route('fileDownload',$attendance->id) }}" method="get">
                        @csrf
                        <div class="col-md-4">
                            <label> الملف</label></br>
                            <button type="submit" class="btn btn-info"><i class="fa fa-download"></i></button>
                        </div>
                    </form>
                    @else
                        @if ($attendance->user_id != Auth::user()->id)
                        <form autocomplete="off" action="{{ route('att-file.update',$attendance->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="col-md-4">
                                <label>الملف</label>
                                <input type="file" name="file" class="form-control">
                            </div>
                            <div class="col-md-4">
                                </br>
                                <input type="submit" name="submit" class="btn btn-success" value="حفظ">
                            </div>
                        </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection