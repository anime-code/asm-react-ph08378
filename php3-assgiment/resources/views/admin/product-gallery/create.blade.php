@extends('admin._layouts._index')
@section('title','Create Galleries')
@section('content')
    <form action="{{route('product_galleries.store')}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="preview-img row">
                    <div class="col-8 offset-2">
                        <img class="img-preview img-fluid" src="{{asset('default-img.png')}}" alt="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Ảnh sản phẩm</label>
                    <input onchange="encodeImageFileAsURL(this)" type="file" name="image[]" multiple
                           class="form-control">
                    @error('image')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-6">
                <div class="row">

                    <div class="form-group col-12">
                        <label for="">Product*</label>
                        <select readonly name="product_id" id="" class="form-control">
                            <option value="{{$product->id}}">{{$product->name}}</option>
                        </select>
                        @error('cate_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    @error('detail')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-12 text-left">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('products.index')}}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
