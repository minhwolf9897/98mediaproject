@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title float-left">Thêm mới dịch vụ</h5>
            <a href="/admin/" class="float-right"><i class="fas fa-list-ul"></i> Danh sách dịch vụ</a>
            <div class="clearfix"></div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    Vui lòng sửa các lỗi bên dưới và thử lại.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>

                </div>
            @endif
            <form action="{{route('admin.product.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Tên</label>
                    <div class="row ml-1">
                        <input type="text" id="name" name="name" class="form-control w-50 mr-2">
                        @if($errors->has('name'))
                            <label class="text-danger">*{{$errors->first('name')}}</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="category_id">Danh mục</label>
                    <select id="category_id" name="category_id" class="form-control w-25"
                            style="display: block!important;">
                        <option value="0">Chọn danh mục sản phẩm</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    @if($errors->has('description'))
                        <label class="text-danger">*{{$errors->first('description')}}</label>
                    @endif
                </div>

                <div class="form-group">
                    <label>Đăng video</label>
                    <div class="row ml-1">
                        <div>
                            <input type="text" name="item" id="item" placeholder="Điền link video"
                                   class="form-control w-5">
                        </div>
                    </div>
                </div>

                <div>
                    <input type="submit" value="Lưu thông tin" class="btn btn-primary btn_save">
                    <input type="reset" value="Làm lại" class="btn btn-dark">
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    {{-- <script>
        $(document).ready(function () {
            var i = 1;
            $('#add').click(function () {
                i++;
                $('#dynamic_field').append(
                    '<div id="row' + i + '"><input type="text" name="item[]" id="item" placeholder="Điền link ảnh" class="form-control name_list w-50 mr-2"><a name="remove" id="' + i + '" class="btn btn-sm btn-danger btn_remove">Xóa</a></div>'
                );
            });
            $(document).on('click', '.btn_remove', function () {
                var button_id = $(this).attr("id");
                $("#row" + button_id + "").remove();
            });

        });
    </script> --}}
@endsection