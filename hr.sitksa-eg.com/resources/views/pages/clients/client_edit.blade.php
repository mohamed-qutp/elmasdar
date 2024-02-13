@extends('layout.header')

@section('title', 'تعديل الموظف')
@section('t2','/الموظفين')
@section('t3','/تعديل الموظف')
@section('pagetitle','تعديل الموظف')
@section('body')

<!-- @foreach ($clients as $client) -->
<form action="{{ route('clients.update',$client->id) }}" autocomplete="off" method="post">
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
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control" value="{{ $client->name }}" name="name" id="name" placeholder="الاسم" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="phone_number">رقم الجوال</label>
                                <input name="phone_number" value="{{ $client->phone_number }}" class="form-control" id="phone_number" type="text" placeholder="رقم الجوال">
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="address">العنوان</label>
                                <div class="input-group">
                                    <input name="address" value="{{ $client->address }}" class="form-control" id="address" type="text" placeholder="العنوان">
                                </div>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <button class="btn btn-secondary" name="update" type="submit">تعديل</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- @endforeach -->
@endsection