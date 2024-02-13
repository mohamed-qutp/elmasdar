@extends('layout.header')

@section('title', 'قائمة العملاء')
@section('t2','/العملاء')
@section('t3','/عرض العملاء')
@section('pagetitle','قائمة العملاء')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">
        <!-- Search form -->
        <!-- <form action="{{ route('prequest.search') }}" autocomplete="off" method="POST">
            @csrf
            <div class="row print-container" style="direction: rtl">
                <div class="col-md-5">
                    <select name="search" class="form-control" onchange="choiceSelected('search', this.selectedIndex);" id= "search">
                        <option value="" selected disabled>اختر نوع البحث</option>
                        <option value="name">بأسم الموظف</option>
                        <option value="date">بالشهر</option>
                        <option value="type">بنوع الاذن</option>
                    </select>
                </div>
                <div class="col-md-3 name" id="name" style="display: none">
                    <select name="emp_name" class="form-control">
                        <option value="" selected disabled>اختر الموظف</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 date" id="date" style="display: none">
                    <input type="month" name="month" class="form-control">
                </div>
                <div class="col-md-3 type" id="type" style="display: none">
                    <select name="perm_type" class="form-control">
                        <option value="" selected disabled>اختر نوع الاذن</option>
                        <option value="ظرف شخصي">ظرف شخصي</option>
                        <option value="اذن صباحي">اذن صباحي</option>
                        <option value="اذن مقابل عمل اضافي">اذن مقابل عمل اضافي</option>
                    </select>
                </div>
                <div class="col-md-2 acceptance" id="acceptance" style="display: none">
                    <select name="status" class="form-control">
                        <option value="all">عرض الجميع</option>
                        <option value="accepted">مقبولة</option>
                        <option value="rejected">مرفوضة</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-default"><i class="fa fa-search"></i></button>
                    <button class="btn btn-default" onclick="window.print()"><i class="fa fa-print"></i></button>
                </div>
            </div></br>
        </form> -->
        <!-- / Search form -->
        <div class="table-responsive">
            <table class="table table-centered table-nowrap mb-0 rounded">
                <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">الاسم</th>
                        <th class="border-0">تفاصيل</th>
                        <th class="border-0">مسح</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($clients) > 0)
                    {{ $clients->links("pagination::bootstrap-4") }}
                    @foreach ($clients as $key => $client)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $client->name }}</td>
                        <td><a href="{{ route('clients.show',$client->id) }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i></a></td>
                        <td><a data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <!--                                 delete                                             -->
            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">حذف العميل</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            هل تريد حذف العميل </div>
                        <div class="modal-footer">
                            <form method="post" action="{{route('clients.destroy',$client->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                <button type="submit" class="btn btn-danger me-2">حذف </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection