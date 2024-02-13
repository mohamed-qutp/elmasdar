@extends('layout.header')

@section('title', 'الاذونات')
@section('t2','/الاذونات')
@section('pagetitle','الاذونات')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">تاريخ الاذن</th>
                        <th class="border-0">الحالة</th>
                        <th class="border-0">تفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($permissions) > 0)
                    {{ $permissions->links("pagination::bootstrap-4") }}
                        @foreach ($permissions as $permissions)
                    <tr>
                        <td>{{ $permissions->id }}</td>
                        <td>{{ $permissions->from }}</td>
                        @if ($permissions->status == 'pending')
                        <td><div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">تحت المراجعة</div></td>
                        @elseif($permissions->status == 'accepted')
                        <td><div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">مقبول</div></td>
                        @elseif($permissions->status == 'rejected')
                        <td><div class="badge bg-danger" style="padding: 5px;font-size:1em;color:black">مرفوض</div></td>
                        @elseif($permissions->status == 'cancelled')
                        <td><div class="badge bg-light" style="padding: 5px;font-size:1em;color:black">ملغي</div></td>
                        @endif
                        <td><a href="{{ route('prequest.show',$permissions->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection