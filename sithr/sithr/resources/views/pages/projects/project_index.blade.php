@extends('layout.header')

@section('title', 'قائمة المشاريع')
@section('t2','/المشاريع')
@section('t3','/عرض المشاريع')
@section('pagetitle','قائمة المشاريع')
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
                    @if (count($projects) > 0)
                    {{ $projects->links("pagination::bootstrap-4") }}
                    @foreach ($projects as $key => $project)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $project->name }}</td>
                        <td><a href="{{ route('projects.show',$project->id) }}" class="btn btn-warning"><i class="fa fa-arrow-left"></i></a></td>
                        <form method="post" action="{{route('projects.destroy',$project->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <td><a data-bs-toggle="modal" data-bs-target="#delete" class="btn btn-danger"><i class="fa-solid fa-xmark"></i></a></td>
                        </form>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <!-------------------------------------------------delete -------------------------------------------->
            <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">حذف المشروع</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                            هل تريد حذف المشروع </div>
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
@endsection