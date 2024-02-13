@extends('layout.header')

@section('title', 'تفاصيل القسم')
@section('t2','/الأقسام')
@section('t3','/تفاصيل القسم')
@section('pagetitle','تفاصيل القسم')
@section('body')

<form autocomplete="off" method="post">
    @csrf   
    <div class="row rtl-form-section">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control-plaintext" readonly value="{{$department->name}}" name="name" id="name" placeholder="الاسم" required>

                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="phone_number">رئيس القسم</label>
                                @if($department_leader !== null) 
                                <input name="phone_number" value="{{$department_leader->name}}" class="form-control-plaintext" readonly id="phone_number" type="text" placeholder="لا يوجد" required>
                                @endif
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="phone_number">موظفين القسم</label>
                                <ul>
                                    @foreach($department->users as $user)
                                    <li>{{$user->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- End of Form -->
                        </div>
                       
                        <div class="row">                            
                            <div class="col-lg-4 col-sm-6">
                                <a class="btn btn-secondary" href="{{ route('departments.edit',$department->id) }}" type="submit">تعديل بيانات القسم</a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <form method="get" action="{{route('departments.destroy',$department->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <a data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger">حذف القسم</a>
                                </form>
                            </div>
                        </div>
                        <!--                                 delete                                             -->
                        <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">حذف القسم</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        هل تريد حذف القسم
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
  
</form>
@endsection