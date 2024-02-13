@extends('layout.header')

@section('title', 'طلبات ملف الحضور')
@section('t2','/طلبات ملف الحضور')
@section('pagetitle','طلبات ملف الحضور')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">صاحب الطلب</th>
                        <th class="border-0">الحالة</th>
                        <th class="border-0">تفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($attendance) > 0)
                    {{ $attendance->links("pagination::bootstrap-4") }}
                        @foreach ($attendance as $attendance)
                    <tr>
                        <td>{{ $attendance->id }}</td>
                        <td>{{ $attendance->users->name }}</td>
                        <td>
                            @if ($attendance->file_path == null)
                                لم يتم رفع الملف بعد
                            @else
                                تم رفع الملف
                            @endif
                        </td>
                        <td><a href="{{ route('att-file.show',$attendance->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @else
                    <tr>
                        <td>لا يوجد طلبات</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection