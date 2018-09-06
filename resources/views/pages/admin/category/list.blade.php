@extends('admin.master')
@section('content')
{{-- <a href="{{route('admin.genre.create')}}" class="btn btn-primary justify-content-end">Tạo mới</a> --}}
<div class="card">
    <div class="card-header unique-color-dark">
        {{-- <div class="row d-flex justify-content-center"> --}}
            <h5 class="h5-reponsive white-text text-uppercase">Quản lý danh mục sản phẩm</h5>
            {{-- </div> --}}
    </div>
    <div class="card-body mx-4 mt-4">
        <div class="btn-group d-flex justify-content-end" role="group" aria-label="Các nút trang thể loại">
            <a href="{{route('admin.category.create')}}" class="btn btn-indigo" role="button">Tạo mới</a>
        </div>
        @if(count($list_obj) > 0)
        <table id="dtMaterialDesignExample" class="table table-striped table-responsive-md table-sm table-editable"
            cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="th-sm">Tên
                        <i class="fa float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Kiểu
                        <i class="fa float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Thời gian tạo
                        <i class="fa float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Số dịch vụ
                        <i class="fa float-right" aria-hidden="true"></i>
                    </th>
                    <th class="th-sm">Action
                        <i class="fa float-right" aria-hidden="true"></i>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_obj as $obj)
                <tr>
                    <td>{{$obj->name}}</td>
                    <td>{{$obj->type}}</td>
                    <td>{{$obj->created_at}}</td>
                <td>{{count($obj->products)}}</td>
                    <td>
                    <a href="{{route('admin.category.products',$obj->id)}}" class="text-primary"><i class="fas fa-list-ol"></i></a>
                        <a href="{{route('admin.category.edit',$obj->id)}}" class="text-info"><i class="fas fa-edit"></i></a>
                        <a id="{{$obj->id}}" href="#{{route('admin.category.destroy',$obj->id)}}" class="btn-delete text-danger"><i
                                class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="float-right">
            {{$list_obj->links()}}
        </div>
        @else
        <h1>Chưa có danh mục nào, vui lòng <a href="{{route('admin.category.create')}}">tạo mới</a>.</h1>
        @endif
    </div>
</div>


@endsection
@section('scripts')
<script>
    $(".btn-delete").click(function () {
        var Id = $(this).attr('id').replace('btn-delete ', '');
        var confirms = confirm('Ơ xóa thật à ?');
        if (confirms) {
            $.ajax({
                url: 'http://127.0.0.1:8000/admin/category/ ' + Id,
                method: 'DELETE',
                data: {
                    '_token': "{{csrf_token()}}",
                },
                success: function (response) {
                    alert('Deleted !');
                    window.location.reload();
                },
                error: function () {
                    alert('some thing wrong!?');
                }
            });
        }
    });
</script>
@endsection