@extends('layout.header')

@section('title', 'تفاصيل المشروع')
@section('t2','/المشاريع')
@section('t3','/تفاصيل المشروع')
@section('pagetitle','تفاصيل المشروع')
@section('body')

<form autocomplete="off" method="post">
    @csrf
    @foreach ($contracts as $contracts)
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">     
                    <div class="row mb-4">
                        <div class="col-lg-3 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="from">تاريخ بداية العقد</label>
                                <input type="date" class="form-control-plaintext" readonly value="{{ $contracts->from }}" name="from" id="from" placeholder="dd/mm/yyyy" required>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="to">تاريخ انتهاء العقد</label>
                                <input type="date" name="to" class="form-control-plaintext" readonly value="{{ $contracts->to }}" id="to" placeholder="dd/mm/yyyy" required>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="users">الموظف</label>
                                <input name="client" value="{{ $contracts->user->name }}" class="form-control-plaintext" readonly id="client" type="text" placeholder="لا يوجد" required>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-2 col-sm-6">
                        @if ($contracts->to >= date('Y-m-d'))
                            <div class="badge bg-success">ساري</div>
                        @else
                            <div class="badge bg-danger">غير ساري</div>
                        @endif
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('contract.edit',$contracts->id) }}" type="submit">تعديل بيانات العقد</a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <form method="get" action="{{route('contract.destroy',$contracts->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button onclick="confirm('Delete entry?')" class="btn btn-danger">حذف العقد</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</form>
@endsection