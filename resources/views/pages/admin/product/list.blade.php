@extends('admin.master')

@section('content')
    {{-- <a href="{{route('admin.genre.create')}}" class="btn btn-primary justify-content-end">Tạo mới</a> --}}
    
    <div class="card">
        <div class="card-header unique-color-dark">

            {{-- <div class="row d-flex justify-content-center"> --}}
            <h3 class="h3-reponsive white-text text-uppercase">Danh sách dịch vụ</h3>
            {{-- </div> --}}
        </div>
        <div class="card-body mx-4 mt-4">
            <div class="btn-group d-flex justify-content-end" role="group" aria-label="Các nút trang thể loại">
                <a href="{{route('admin.product.create')}}" class="btn btn-indigo" role="button"><i class="fas fa-plus-square mr-1"></i>Tạo mới</a>
            </div>

            @if(count($products) > 0)
                <table id="dtMaterialDesignExample" class="table table-striped table-responsive-md table-sm table-editable" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th class="th-sm">Tên tiêu đề
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm">Mô tả
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm">Thời gian tạo
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                        <th class="th-sm">Action
                            <i class="fa fa-sort float-right" aria-hidden="true"></i>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{$product->name}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>


                                <a href="{{route('admin.product.edit',$product->id)}}" class="text-danger"><i class="fas fa-edit"></i></a>
                                <a id="{{$product->id}}" href="#{{route('admin.product.destroy',$product->id)}}" class="btn-delete"><i
                                            class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    {{-- <tfoot>
                    <tr>
                        <th>Name
                        </th>
                        <th>Position
                        </th>
                        <th>Office
                        </th>
                        <th>Age
                        </th>
                        <th>Start date
                        </th>
                        <th>Salary
                        </th>
                    </tr>
                    </tfoot> --}}
                </table>
                {{$products->links()}}
            @else
                <h1>Chưa có thể loại nào</h1>
            @endif
        </div>
    </div>
    <script>
        $(".btn-delete").click(function () {
            var Id = $(this).attr('id').replace('btn-delete ', '');
            var confirms = confirm('Ơ xóa thật à ?');
            if (confirms) {
                $.ajax({
                    url: 'http://127.0.0.1:8000/admin/product/ ' + Id,
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