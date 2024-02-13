@extends('layout.header')

@section('title', 'قائمة الموظفين')
@section('t2','/الموظفين')
@section('t3','/عرض الموظفين')
@section('pagetitle','قائمة الموظفين')
@section('body')
<div class="card border-0 shadow mb-4">

    <div class="card-body">

        <div class="table-responsive">
            <div class="d-flex justify-content-between">
                @if (Auth::user()->auth == 'admin')
                <a class="btn btn-secondary mb-3" href="{{ route('users.create')}}">اضافة</a>
                <h6 class=" my-3">اضافة موظف جديد</h6>
                @endif
            </div>
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">الاسم</th>
                        <th class="border-0">اسم المستخدم</th>
                        <th class="border-0">تفاصيل</th>
                        @if (Auth::user()->auth == 'admin')
                        <th class="border-0">مسح</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @if (count($users) > 0)
                    {{ $users->links("pagination::bootstrap-4") }}
                    @foreach ($users as $key => $user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td><a href="{{ route('users.show',$user->id) }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i></a></td>
                        @if (Auth::user()->auth == 'admin')
                        <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                          
                            @method('delete')
                            @csrf
                            <td><button type="submit" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button></td>
                        </form>

                        @endif
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>

        </div>
    </div>
</div>
@endsection