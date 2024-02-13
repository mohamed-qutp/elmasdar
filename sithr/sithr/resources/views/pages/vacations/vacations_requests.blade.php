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
                        <th class="border-0">الاسم</th>
                        <th class="border-0">اسم المستخدم</th>
                        <th class="border-0">تفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($vacations) > 0)
                    {{ $vacations->links("pagination::bootstrap-4") }}
                        @foreach ($vacations as $vacation)
                    <tr>
                        <td>{{ $vacation->id }}</td>
                        <td>{{ $vacation->from }}</td>
                        <td>{{ $vacation->to }}</td>
                        <td><a href="{{ route('users.show',$vacation->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection