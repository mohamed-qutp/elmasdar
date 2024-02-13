@extends('layout.header')

@section('title', 'الاجازات')
@section('t2','/الاجازات')
@section('pagetitle','الاجازات')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <!-- Search form -->
        <form action="{{ route('vrequest.search') }}" autocomplete="off" method="POST">
            @csrf
            <div class="row print-container" style="direction: rtl">
                <div class="col-md-5">
                    <select name="search" class="form-control" onchange="choiceSelected('search', this.selectedIndex);" id= "search">
                        <option value="" selected disabled>اختر نوع البحث</option>
                        <option value="name">بأسم الموظف</option>
                        <option value="date">بالشهر</option>
                        <option value="type">بنوع الاجازة</option>
                    </select>
                </div>
                <div class="col-md-3 name" id="name" style="display: none">
                    <select name="emp_name" class="form-control">
                        <option value="" selected disabled>اختر الموظف</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 date" id="date" style="display: none">
                    <input type="month" name="month" class="form-control">
                </div>
                <div class="col-md-3 type" id="type" style="display: none">
                    <select name="perm_type" class="form-control">
                        <option value="" selected disabled>اختر نوع الاجازة</option>
                        <option value="عارضة">عارضة</option>
                        <option value="عادية">عادية</option>
                    </select>
                </div>
                <div class="col-md-2 acceptance" id="acceptance" style="display: none">
                    <select name="status" class="form-control">
                        <option value="all">عرض الجميع</option>
                        <option value="accepted">مقبولة</option>
                        <option value="rejected">مرفوضة</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    <button class="btn btn-dark" onclick="window.print()"><i class="fa fa-print"></i></button>
                </div>
            </div></br>
        </form>
        <!-- / Search form -->
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">الموظف</th>
                        <th class="border-0">تاريخ انشاء الطلب</th>
                        <th class="border-0">الحالة الطلب</th>
                        <th class="border-0">تفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($vacations) > 0)
                    {{ $vacations->links("pagination::bootstrap-4") }}
                        @foreach ($vacations as $vacations)
                    <tr>
                        <td>{{ $vacations->id }}</td>
                        <td>{{ $vacations->employee->name }}</td>
                        <td>{{ $vacations->created_at }}</td>
                        @if ($vacations->status == 'accepted')
                            <td><span class="badge bg-success">مقبول</span></td>
                        @elseif ($vacations->status == 'rejected')
                            <td><span class="badge bg-danger">مرفوض</span></td>
                        @else
                            <td><span class="badge bg-warning">تحت المراجعة</span></td>
                        @endif
                        <td><a href="{{ route('vrequest.show',$vacations->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection