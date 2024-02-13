@extends('layout.header')

@section('title', 'تعديل المشروع')
@section('t2','/المشاريع')
@section('t3','/تعديل المشروع')
@section('pagetitle','تعديل المشروع')
@section('body')

@foreach ($projects as $project)
<form action="{{ route('projects.update',$project->id) }}" autocomplete="off" method="post">
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
                                <label for="name">الاسم</label>
                                <input type="text" class="form-control" value="{{ $project->name }}" name="name" id="name" placeholder="الاسم" required>
                                
                            </div>
                            <!-- End of Form -->
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <!-- Form -->
                            <div class="mb-3">
                                <label for="client">العميل</label>
                                <div class="input-group">
                                    <select name="client" class="form-control" required>
                                        @foreach ($clients as $client)                                            
                                        <option value="{{ $client->id }}" @if ($client->id == $project->client_id)
                                            selected
                                        @endif>{{ $client->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">* مطلوب</small>
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
@endforeach
@endsection