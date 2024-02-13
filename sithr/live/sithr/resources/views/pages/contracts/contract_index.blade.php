@extends('layout.header')

@section('title', 'قائمة العقود')
@section('t2','/العقود')
@section('t3','/عرض العقود')
@section('pagetitle','قائمة العقود')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">الاسم</th>
                        <th class="border-0">تفاصيل العقد</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($contracts) > 0)
                    {{ $contracts->links("pagination::bootstrap-4") }}
                        @foreach ($contracts as $contract)
                    <tr>
                        <td>{{ $contract->id }}</td>
                        <td>{{ $contract->user->name }}</td>
                        <td><a href="{{ route('contract.show',$contract->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection