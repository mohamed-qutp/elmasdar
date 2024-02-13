@extends('layout.header')

@section('title', 'تفاصيل الاذن')
@section('t2','/الاذونات')
@section('t3','/تفاصيل الاذن')
@section('pagetitle','تفاصيل الاذن')
@section('body')

@foreach ($permission as $permission)
<form autocomplete="off" action="{{ route('prequest.update2',$permission->id) }}" method="post">
    @csrf
    @method("PUT")
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">نوع الاذن</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $permission->type }}" name="type" id="type" placeholder="الاسم" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">حالة الاذن: </label>
                                @if ($permission->status == 'pending')
                                <div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">تحت المراجعة</div>
                                @elseif($permission->status == 'accepted')
                                <div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">مقبول</div>
                                @elseif($permission->status == 'rejected')
                                <div class="badge bg-danger" style="padding: 5px;font-size:1em;color:black">مرفوض</div>
                                @elseif($permission->status == 'cancelled')
                                <div class="badge bg-light" style="padding: 5px;font-size:1em;color:black">ملغي</div>
                                @endif
                            </div>
                            <!-- End of Form -->
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">تاريخ الحضور</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $permission->from }}" name="from" id="from" placeholder="الاسم" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="to">تاريخ الانصراف</label>
                                <input name="to" value="{{ $permission->to }}" class="form-control-plaintext" readonly id="to" type="text" placeholder="لا يوجد" required>
                            </div>
                            <!-- End of Form -->
                        </div>
                    </div>
                    @if ($permission->type == "اذن مقابل عمل اضافي")
                        @foreach ($perm_task as $perm_task)
                        <div class="row mb-4">
                            <div class="col-lg-12 col-sm-12">
                                <label for="task">المهمة</label></br>
                                <a style="color: rgb(26, 134, 170)" href="{{ route('user_tasks_show',$perm_task->tasks->id) }}">{{ $perm_task->tasks->title }}</a>
                            </div>
                        </div>
                        @endforeach
                    @endif

                    <div class="row mb-4">
                        @if ($permission->status == 'accepted')
                            <div class="col-lg-12 col-sm-12">
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="accepted_by">تم قبول الطلب بواسطة</label>
                                    <input type="text" class="form-control-plaintext" readonly value="{{ $permission->users->name }}" name="accepted_by" id="accepted_by" required>
                                </div>
                                <!-- End of Form -->
                            </div>
                        @elseif($permission->status == 'rejected')
                            <div class="col-lg-6 col-sm-6">
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="accepted_by">تم رفض الطلب بواسطة</label>
                                    <input type="text" class="form-control-plaintext" readonly value="{{ $permission->users->name }}" name="accepted_by" id="accepted_by" required>
                                    
                                </div>
                                <!-- End of Form -->
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="reason">سبب الرفض</label>
                                    <input name="reason" value="{{ $permission->reason }}" class="form-control-plaintext" readonly id="reason" type="text" placeholder="لا يوجد" required>
                                </div>
                                <!-- End of Form -->
                            </div>
                        @endif
                    </div>
                    {{-- user buttons --}}
                    @if (!Auth::guest() && (Auth::user()->id == $permission->user_id))
                    {{-- <div class="row">
                        @if ($permission->status == 'pending')
                            <div class="col-lg-6 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('prequest.edit',$permission->id) }}" type="submit">تعديل الاذن</a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <form method="get" action="{{route('prequest.destroy',$permission->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button onclick="confirm('Delete entry?')" class="btn btn-danger">حذف الاذن</button>
                                </form>
                            </div>    
                        @elseif(($permission->status == 'accepted') && ($permission->to > now()))
                            <div class="col-lg-6 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('prequest.edit',$permission->id) }}" type="submit">تعديل الاذن</a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <form method="get" action="{{route('prequest.destroy',$permission->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button onclick="confirm('Delete entry?')" class="btn btn-danger">حذف الاذن</button>
                                </form>
                            </div>
                        @endif
                    </div> --}}
                    {{-- admin buttons --}}
                    @elseif(!Auth::guest() && (Auth::user()->auth != "regular" && Auth::user()->id != $permission->user_id))
                    <div class="row">
                        @if ($permission->status == 'pending')
                            <div class="col-lg-4 col-sm-6">
                                <label>تغيير الحالة</label>
                                <select name="status" onchange="choiceSelected('status', this.selectedIndex);" id= "status" class="form-control" id="status" required>
                                    <option value="" selected disabled>اختر حالة الاذن</option>
                                    <option value="accepted">قبول الطلب</option>
                                    <option value="rejected">رفض الطلب</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-sm-6 rejected" id="rejected" style="display: none">
                                <label>سبب الرفض</label>
                                <textarea name="reason" cols="30" rows="3" placeholder="سبب الرفض" class="form-control"></textarea>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <button class="btn btn-success" style="margin-top: 2em;" type="submit">تأكيد</button>
                            </div>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
@endsection