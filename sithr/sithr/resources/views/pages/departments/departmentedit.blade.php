@extends('layout.header')

@section('title', 'تعديل القسم')
@section('t2','/الأقسام')
@section('t3','/تعديل القسم')
@section('pagetitle','تعديل القسم')
@section('body')


<form action="{{ route('departments.update',$department->id) }}" autocomplete="off" method="post">
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
                                <input type="text" class="form-control" value="{{ $department->name }}" name="name" id="name" placeholder="الاسم" required>
                                
                            </div> 
                            <div class="mb-3">
                                <label for="exampleInputIconPassword">رئيس القسم</label>
                                <div class="input-group">
                                    <select class="form-select" name="leader_id" aria-label="Default select example">
                                        <option value="">اختر</option>
                                        @foreach($department->users as $user)
                                        @if($department->leader_id == $user->id)
                                        <option value="{{$user->id}}" selected>{{$user->name}}</option>
                                        @else
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endif                                       
                                        @endforeach                                        
                                    </select>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">*مطلوب</small>
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
@endsection