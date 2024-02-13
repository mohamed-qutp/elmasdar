@extends('layout.header')

@section('title', 'تفاصيل المهمة')
@section('t2','/المهام')
@section('t3','/تفاصيل المهمة')
@section('pagetitle','تفاصيل المهمة')
@section('body')

<form autocomplete="off" method="post">
    @csrf
    @foreach ($task as $task)
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">     
                    <div class="row">
                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="title">العنوان</label>
                            <div class="input-group">
                                <input type="text" name="title" class="form-control-plaintext" value="{{ $task->title }}" required>
                            </div>  
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="description">التفاصيل</label>
                            <div class="input-group">
                                <textarea name="description" class="form-control-plaintext" required>{{ $task->description }}</textarea>
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group col-md-2">
                            <div class="input-group">
                                @if ($task->done == '0')
                                <div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">قيد التنفيذ</div>
                                @else
                                <div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">تم التنفيذ</div>
                                @endif
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <form action="{{ route('task.status',$task->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="form-group col-md-2">
                                <div class="input-group">
                                    @if ($task->done == '0')
                                    <button class="btn btn-success">انهاء المهمة</button>
                                    @endif
                                </div>  
                            </div>
                        </form>
                        <!-- End of Form -->
                    </div>
                    <div class="row">
                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="assigned_to">صاحب المهمة</label>
                            <input type="text" class="form-control-plaintext" value="{{ $task->userTask->name }}">
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="projects">مكلفة من</label>
                            <input type="text" class="form-control-plaintext" value="{{ $task->users->name }}">
                        </div>
                        <!-- End of Form -->

                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="projects">المشروع</label></br>
                            <a href="{{ route('projects.show',$task->project_id) }}">{{ $task->projects->name }}</a>
                        </div>
                        <!-- End of Form -->
                    </div><hr>
                    <div class="row">
                        <label><b>وقت انجاز المهمة</b></label></br>
                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="from">من</label>
                            <div class="input-group">
                                <input type="text" class="form-control-plaintext" value="{{ $task->from }}" name="from" required>
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <label for="to">الى</label>
                            <div class="input-group">
                                <input type="text" name="to" class="form-control-plaintext" value="{{ $task->to }}" required>
                            </div>  
                        </div>
                        <!-- End of Form -->
                        <!-- Form -->
                        <div class="form-group col-md-4">
                            <div class="input-group">
                                <a class="btn btn-pill btn-outline-primary comment_button">اضافة تعليق</a>
                            </div>  
                        </div>
                        <!-- End of Form -->
                    </div>
                    <form action="{{ route('comments.store',$task->id) }}" method="post">
                        @csrf
                        <div class="row" id="comment_div" style="display: none">
                            <div class="col-md-6">
                                <textarea class="form-control" name="comment" rows="5" placeholder="اضف تعليق"></textarea>
                            </div>
                            <div class="col-md-6">
                                <button class="btn btn-pill btn-outline-secondary">ارسال</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 mb-4">
            <div class="card border-0 shadow">
                <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                    <h2 class="fs-5 fw-bold mb-0">التعليقات</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush list my--3">
                        @if (count($comments) > 0)
                        @foreach ($comments as $comments)
                        <li class="list-group-item px-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <!-- Avatar -->
                                    <a href="{{ route('users.show',$comments->user_id) }}" class="avatar">
                                    @if ($comments->users->gender == "male")
                                        <img class="rounded" alt="Image placeholder" src="{{ asset('assets/img/team/male.png')}}">
                                    @else
                                        <img class="rounded" alt="Image placeholder" src="{{ asset('assets/img/team/female.png')}}">
                                    @endif
                                    </a>
                                </div>
                                <div class="col-auto ms--2">
                                    <h4 class="h6 mb-0">
                                        <a href="{{ route('users.show',$comments->user_id) }}" style="color: #3C5FC5">{{ $comments->users->name }}</a>
                                    </h4>
                                    <div class="d-flex align-items-center">
                                        <small>{{ $comments->comment }}</small>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <form action="{{ route('comments.delete',$comments->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                        <div class="row">
                            <div class="col-md-6">
                                <p>{{ $comments->created_at }}</p>
                            </div>
                            @if (Auth::user()->id == $comments->user_id)
                                <div class="col-md-6">
                                    <button class="btn btn-sm btn-outline-danger" style="float: left"><i class="fa fa-trash"></i></button>
                                </div>
                            @endif
                        </div>
                        </form>
                        @endforeach
                        @else
                            لا يوجد تعليقات
                        @endif
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</form>
@endsection