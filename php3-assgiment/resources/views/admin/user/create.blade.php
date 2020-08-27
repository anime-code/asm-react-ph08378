@extends('admin._layouts._index')
@section('title','Create User')
@section('content')
    <form action="{{route('users.store')}}" method="post" class="form-group" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-2">
                <div class="preview-img row">
                    <div class="col-8 offset-2">
                        <img class="img-preview img-fluid" src="{{asset('default-img.png')}}" alt="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Avatar*</label>
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
                        <input type="text" class="form-control" name="name" value="{{old('name')}}">
                        @error('name')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Role*</label>
                        <select name="role" readonly id="" class="form-control" >
                            <option value="0">User</option>
                        </select>
                        @error('role')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6 form-group">
                        <label for="">Email*</label>
                        <input type="email" name="email" class="form-control" value="{{old('email')}}">
                        @error('email')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-6">
                        <label for="">Password*</label>
                        <input type="password" class="form-control" name="password" value="{{old('password')}}">
                        @error('password')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-12 text-left">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{route('users.index')}}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
