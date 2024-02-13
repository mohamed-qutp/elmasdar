@extends('layout.header')

@section('title', 'عرض مهام الموظف')
@section('t2','/الموظفين')
@section('t3','/عرض مهام الموظف')
@section('pagetitle','عرض مهام الموظف')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">اسم المهمة</th>
                        <th class="border-0">مكلفة من</th>
                        <th class="border-0">الحالة</th>
                        <th class="border-0">التفاصيل</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($tasks) > 0)
                        @foreach ($tasks  as $key => $task)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->users->name }}</td>
                        @if ($task->done == 0)
                            <td>قيد التنفيذ</td>
                        @else
                            <td>تم التنفيذ</td>
                        @endif
                        <td><a href="{{ route('user_tasks_show',$task->id) }}"><i class="fa fa-arrow-left"></i></a></td>
                    </tr>
                        @endforeach
                    @else
                    <tr>
                        <td>لا يوجد مهام</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection