@extends('admin._layouts._index')
@section('title','Product Gallery')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6">

        </div>
        <div class="col-sm-12 col-md-6" style="text-align: right">
            <div class="dataTables_filter">
                <form action="" method="get">
                    <label><span style="float: left">Search:</span>

                        <input type="search"
                               name="keyword" value="" class="form-control form-control-sm" placeholder="">

                    </label>
                    <button class="btn btn-primary">Search</button>
                </form>

            </div>
        </div>
    </div>
    @if(session('msg'))
        <p class="text-success">
            {{session('msg')}}
        </p>
    @endif
    @if(session('error'))
        <p class="text-danger">
            {{session('error')}}
        </p>
    @endif
    <table class="table table-bordered table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product</th>
            <th scope="col">Show Menu</th>
            <th scope="col" class="text-center" colspan="2"><a href="{{route('categories.create')}}"
                                                               class="btn  btn-success"><i
                        class="fas fa-plus"></i> Create</a></th>
        </tr>
        </thead>
        <tbody>
        @if(isset($roduct_galleries))
            @foreach($roduct_galleries as $key=>$pro)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$pro->product_id}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class=" col-6 ">
        {{ $product_galleries->withQueryString()->links() }}
    </div>
@endsection
