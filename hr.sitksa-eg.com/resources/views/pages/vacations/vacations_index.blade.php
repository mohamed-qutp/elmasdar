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
                        <th class="border-0">تاريخ  بداية الاجازة</th>
                        <th class="border-0">تاريخ  نهاية الاجازة</th>
                        <th class="border-0">الحالة</th>
                        <th class="border-0">تفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($vacations) > 0)
                    {{ $vacations->links("pagination::bootstrap-4") }}
                        @foreach ($vacations as $vacation)
                    <tr>
                        <td>{{ $vacation->id }}</td>
                        <td>{{ $vacation->date_from }}</td>
                        <td>{{ $vacation->date_to }}</td>
                        @if ($vacation->status == 'pending')
                        <td><div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">تحت المراجعة</div></td>
                        @elseif($vacation->status == 'accepted')
                        <td><div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">مقبول</div></td>
                        @elseif($vacation->status == 'rejected')
                        <td><div class="badge bg-danger" style="padding: 5px;font-size:1em;color:black">مرفوض</div></td>
                        @elseif($vacation->status == 'cancelled')
                        <td><div class="badge bg-light" style="padding: 5px;font-size:1em;color:black">ملغي</div></td>
                        @endif
                        <td><a href="{{ route('vrequest.show',$vacation->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection