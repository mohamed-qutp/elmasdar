@extends('layout.header')

@section('title', 'قائمة الأقسام')
@section('t2','/الأقسام')
@section('t3','/عرض الأقسام')
@section('pagetitle','قائمة الأقسام')
@section('body')
<div class="card border-0 shadow mb-4">
    <div class="card-body">       
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
                    @if (count($departments) > 0)
                    {{ $departments->links("pagination::bootstrap-4") }}
                    @foreach ($departments as $key => $department)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $department->name }}</td>
                        <td><a href="{{ route('departments.show',$department->id) }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i></a></td>
                        @if (Auth::user()->auth == 'admin')
                        <form action="{{ route('departments.destroy',$department->id) }}" method="POST">
                          
                            @method('delete')
                            @csrf
                            <td><button type="submit" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></button></td>
                        </form>

                        @endif                       
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
                            <h5 class="modal-title" id="exampleModalLabel">حذف القسم</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            هل تريد حذف القسم </div>
                        <div class="modal-footer">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection