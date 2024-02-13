@extends('layout.header')

@section('title', 'الاجازات')
@section('t2','/الاجازات')
@section('pagetitle','الاجازات')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">الموظف</th>
                        <th class="border-0">تاريخ انشاء الطلب</th>
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