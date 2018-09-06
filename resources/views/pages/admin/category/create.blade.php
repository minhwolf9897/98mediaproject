@extends('admin.master')
@section('content')
    <div class="card">
        <div class="card-header unique-color-dark">
            {{-- <div class="row d-flex justify-content-center"> --}}
            <h5 class="h5-reponsive white-text text-uppercase">Thêm mới danh mục sản phẩm</h5>
            {{-- </div> --}}
        </div>
        <div class="card-body mx-4 mt-4">
            <div class="btn-group d-flex justify-content-end" role="group" aria-label="Các nút trang thể loại">
                <a href="/admin/category" class="btn btn-indigo" role="button">Trở về danh sách</a>
            </div>
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
            <form action="/admin/category" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Tên</label>
                    <div class="row ml-1">
                        <input type="text" name="name" class="form-control w-25 mr-2">
                        @if($errors->has('name'))
                            <label class="text-danger">*</label>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label>Kiểu danh mục</label>
                    <select name="type" class="form-control w-50" style="display: block!important;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    @if($errors->has('type'))
                        <label class="text-danger">*</label>
                    @endif
                </div>
                <div class="btn-group d-flex justify-content-end">
                    <input type="submit" value="Lưu thông tin" class="btn btn-green mr-2">
                    <input type="reset" value="Làm lại" class="btn btn-grey">
                </div>
            </form>
        </div>
    </div>
@endsection
