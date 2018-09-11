@extends('admin.master')
@section('content')
<div class="card">
    <div class="card-body">
        <h5 class="card-title float-left">Thêm mới dịch vụ</h5>
        <a href="{{route('admin.product.index')}}" class="float-right"><i class="fas fa-list-ul"></i> Danh sách dịch vụ</a>
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
        <form action="{{route('admin.product.update',$obj->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Tên</label>
                <div class="row ml-1">
                    <input type="text" value="{{$obj->name}}" id="name" name="name" class="form-control w-50 mr-2">
                    @if($errors->has('name'))
                    <label class="text-danger">*{{$errors->first('name')}}</label>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label>Danh mục</label>
                <select name="category_id" class="form-control w-25" style="display: block!important;">
                    @foreach($categories as $category)
                    <option value="{{$category->id}}" {{$obj->category_id == $category->id ? 'selected' : ''}}>{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$obj->description}}</textarea>
                @if($errors->has('description'))
                <label class="text-danger">*{{$errors->first('description')}}</label>
                @endif
            </div>
            <div class="form-group">
                @if(count($obj->items) > 0)
                
                <iframe class="video-fluid" width="420" height="315" src="{{$obj->items->first()->link}}">
                    </iframe>
                @else 
                    Chưa có video nào
                @endif
                <label>Sửa link video</label>
                <div class="row ml-1">
                    <div>
                        <input type="text" name="item" id="item" placeholder="Điền link video" class="form-control w-5">
                    </div>
                </div>
            </div>
            <div>
                <input type="submit" value="Lưu thông tin" class="btn btn-primary">
                <input type="reset" value="Làm lại" class="btn btn-dark">
            </div>
        </form>
    </div>
</div>
@foreach($obj->items as $item)

<figure class="col-md-4">
    <a href="{{$item->link}}" data-size="1600x1067">
        <img src="{{$item->link}}" alt="placeholder" class="img-fluid" />
    </a>
</figure>
@endforeach
@endsection

@section('scripts')

@endsection