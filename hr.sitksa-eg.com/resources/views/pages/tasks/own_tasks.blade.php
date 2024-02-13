@extends('layout.header')

@section('title', 'عرض مهام الموظف')
@section('t2','/المهام')
@section('t3','/عرض مهام الموظف')
@section('pagetitle','عرض مهام الموظف')
@section('body')
<div class="py-4">
    <button class="btn btn-gray-800 d-inline-flex align-items-center me-2 dropdown-toggle" data-bs-target="#modal-task" data-bs-toggle="modal" aria-haspopup="true" type="button" aria-expanded="false">
        <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
        New Task
    </button>
</div>
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
                        @foreach ($tasks  as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->users->name }}</td>
                        @if ($task->done == '0')
                        <td><div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">قيد التنفيذ</div></td>
                        @else
                        <td><div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">تم التنفيذ</div></td>
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
<!-- Task Modal Content -->
<form action="{{ route('task.store') }}" method="post" autocomplete="off">
    @csrf
<div class="modal fade" id="modal-task" tabindex="-1" role="dialog" aria-labelledby="modal-task" aria-hidden="true" style="direction: rtl">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card p-3 p-lg-4">
                    <button type="button" class="btn-close ms-auto" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h4">انشاء مهمة</h1>
                    </div>
                    <form action="#" class="mt-4">
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="title">العنوان</label><big style="color: red">*</big>
                            <div class="input-group">
                                <input type="text" name="title" class="form-control" placeholder="عنوان المهمة" required>
                            </div>  
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="description">التفاصيل</label><big style="color: red">*</big>
                            <div class="input-group">
                                <textarea name="description" class="form-control" placeholder="تفاصيل المهمة" required></textarea>
                            </div>  
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="assigned_to">صاحب المهمة</label><big style="color: red">*</big>
                            <div class="input-group">
                                <select name="assigned_to" class="form-control" required>
                                    <option value="">اختر الموظف المخصصة له المهمة</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                            </div>  
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="projects">المشروع</label><big style="color: red">*</big>
                            <div class="input-group">
                                <select name="projects" class="form-control" required>
                                    <option value="">اختر المشروع</option>
                                    @foreach ($projects as $project)
                                        <option value="{{ $project->id }}">{{ $project->name }}</option>
                                    @endforeach
                                </select>
                            </div>  
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label>وقت انجاز المهمة</label><big style="color: red">*</big></br><hr>
                            <label for="from">من</label>
                            <div class="input-group">
                                <input type="datetime-local" class="form-control" name="from" required>
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="to">الى</label>
                            <div class="input-group">
                                <input type="datetime-local" name="to" class="form-control" required>
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <button type="submit" name="save" class="btn btn-success">حفظ</button>
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- End of Modal Content -->
@endsection