@extends('layout.header')

@section('title', 'تفاصيل الاجازة')
@section('t2','/الاجازات')
@section('t3','/تفاصيل الاجازة')
@section('pagetitle','تفاصيل الاجازة')
@section('body')

@foreach ($vacation as $vacation)
<form autocomplete="off" action="{{ route('vrequest.update2',$vacation->id) }}" method="post">
    @csrf
    @method("PUT")
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">نوع الاجازة</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $vacation->type }}" placeholder="نوع الاجازة" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">مدة الاجازة</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $vacation->number_of_days }} يوم" placeholder="مدة الاجازة" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">حالة الاجازة: </label>
                                @if ($vacation->status == 'pending')
                                <div class="badge bg-warning" style="padding: 5px;font-size:1em;color:black">تحت المراجعة</div>
                                @elseif($vacation->status == 'accepted')
                                <div class="badge bg-success" style="padding: 5px;font-size:1em;color:black">مقبول</div>
                                @elseif($vacation->status == 'rejected')
                                <div class="badge bg-danger" style="padding: 5px;font-size:1em;color:black">مرفوض</div>
                                @elseif($vacation->status == 'cancelled')
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
                                <label for="from">تاريخ بداية الاجازة</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $vacation->date_from }}" name="from" id="from" placeholder="الاسم" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="to">تاريخ نهاية الاجازة</label>
                                <input name="to" value="{{ $vacation->date_to }}" class="form-control-plaintext" readonly id="to" type="text" placeholder="لا يوجد" required>
                            </div>
                            <!-- End of Form -->
                        </div>
                    </div>
                    <div class="row mb-4">
                        @if ($vacation->status == 'accepted')
                            <div class="col-lg-12 col-sm-12">
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="accepted_by">تم قبول الطلب بواسطة</label>
                                    <input type="text" class="form-control-plaintext" readonly value="{{ $vacation->users->name }}" name="accepted_by" id="accepted_by" required>
                                    
                                </div>
                                <!-- End of Form -->
                            </div>
                        @elseif($vacation->status == 'rejected')
                            <div class="col-lg-6 col-sm-6">
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="accepted_by">تم رفض الطلب بواسطة</label>
                                    <input type="text" class="form-control-plaintext" readonly value="{{ $vacation->users->name }}" name="accepted_by" id="accepted_by" required>
                                    
                                </div>
                                <!-- End of Form -->
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <!-- Form -->
                                <div class="mb-3">
                                    <label for="reason">سبب الرفض</label>
                                    <input name="reason" value="{{ $vacation->reason }}" class="form-control-plaintext" readonly id="reason" type="text" placeholder="لا يوجد" required>
                                </div>
                                <!-- End of Form -->
                            </div>
                        @endif
                    </div>
                    {{-- user buttons --}}
                    @if (!Auth::guest() && (Auth::user()->id == $vacation->user_id))
                    {{-- <div class="row">
                        @if (($vacation->status == 'pending') || (($vacation->status == 'accepted') && ($vacation->to > now())))
                            <div class="col-lg-6 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('vrequest.edit',$vacation->id) }}" type="submit">تعديل الاذن</a>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <form method="post" action="{{route('vrequest.destroy',$vacation->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button onclick="confirm('Delete entry?')" class="btn btn-danger">حذف الاذن</button>
                                </form>
                            </div>
                        @endif
                    </div> --}}
                    {{-- admin buttons --}}
                    @elseif(!Auth::guest() && (Auth::user()->auth != "regular" && Auth::user()->id != $vacation->user_id))
                    <div class="row">
                        @if ($vacation->status == 'pending')
                            <div class="col-lg-4 col-sm-6">
                                <label>تغيير الحالة</label>
                                <select name="status" onchange="choiceSelected('status', this.selectedIndex);" id= "status" class="form-control" id="status" required>
                                    <option value="" selected disabled>اختر حالة الاجازة</option>
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