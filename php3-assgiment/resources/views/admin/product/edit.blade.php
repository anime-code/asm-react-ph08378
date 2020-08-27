@extends('admin._layouts._index')
@section('title','Edit Product')
@section('content')
    <form action="{{route('products.update',['product'=>$productEdit->id])}}" method="post" class="form-group"
          enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="hidden" value="{{$productEdit->id}}" name="id">
        <div class="row">
            <div class="col-2">
                <div class="preview-img row">
                    <div class="col-8 offset-2">
                        <img class="img-preview img-fluid" src="{{asset($productEdit->image)}}" alt="">
                        <input type="hidden" value="{{$productEdit->image}}" name="oldImage">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input onchange="encodeImageFileAsURL(this)" type="file" name="image" class="form-control">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-10">
                <div class="row">
                    <div class="form-group col-6">
                        <label for="">Name*</label>
                        <input type="text" class="form-control" name="name" value="{{$productEdit->name}}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Category*</label>
                        <select name="cate_id" id="" class="form-control">
                            @if(isset($categories))
                                @foreach($categories as $cate)
                                    <option
                                        @if($cate->id==$productEdit->cate_id )
                                        selected
                                        @endif value="{{$cate->id}}">{{$cate->cate_name}}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('cate_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 form-group">
                        <label for="">Short Desc*</label>
                        <input type="text" name="short_desc" class="form-control" value="{{$productEdit->short_desc}}">
                        @error('short_desc')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Price*</label>
                        <input type="number" class="form-control" name="price" value="{{$productEdit->price}}">
                        @error('price')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Star*</label>
                        <input type="number" class="form-control" name="star" value="{{$productEdit->star}}">
                        @error('star')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-12">
                        <label for="">Detail*</label>
                        <textarea id="demo" name="detail" col="30"
                                  class="form-control ckeditor">{{$productEdit->detail}}</textarea>
                    </div>
                    @error('detail')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 text-left">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('categories.index')}}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
