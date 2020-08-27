@extends('admin._layouts._index')
@section('title','Create Category')
@section('content')
    <form action="{{route('categories.store')}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="form-group col-12">
                        <label for="">Name*</label>
                            <input type="text" class="form-control" name="cate_name" value="{{old('cate_name')}}">
                        @error('cate_name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group form-check col-6">
                        <input type="checkbox" value="1" class="form-check-input">
                        <label class="form-check-label font-weight-bold">Show Menu*</label>
                    </div>
                    <div class="form-group col-12">
                        <label for="">Describe*</label>
                        <textarea id="demo" name="desc" col="30" class="form-control ckeditor">{{old('desc')}}</textarea>
                    </div>
                    @error('desc')
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
