@extends('layout.header')

@section('title', 'تفاصيل العميل')
@section('t2','/العملاء')
@section('t3','/تفاصيل العميل')
@section('pagetitle','تفاصيل العميل')
@section('body')

<form autocomplete="off" method="post">
    @csrf
    @foreach ($clients as $client)
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{ $client->name }}" name="name" id="name" placeholder="الاسم" required>

                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="phone_number">رقم الجوال</label>
                                <input name="phone_number" value="{{ $client->phone_number }}" class="form-control-plaintext" readonly id="phone_number" type="text" placeholder="لا يوجد" required>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="address">العنوان</label>
                                <div class="input-group">
                                    <input name="address" value="{{ $client->address }}" class="form-control-plaintext" readonly id="address" type="text" placeholder="لا يوجد" required>
                                </div>

                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <a class="btn btn-primary" href="{{ route('client_project',$client->id) }}" type="submit">عرض المشاريع</a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('clients.edit',$client->id) }}" type="submit">تعديل بيانات العميل</a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <form method="get" action="{{route('clients.destroy',$client->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <a data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger">حذف العميل</a>
                                </form>
                            </div>
                        </div>
                        <!--                                 delete                                             -->
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">حذف العميل</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        هل تريد حذف العميل
                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                            <button type="submit" class="btn btn-danger me-2">حذف </button>
                                    </div>
                                </div>
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