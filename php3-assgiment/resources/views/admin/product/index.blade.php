@extends('admin._layouts._index')
@section('title','Products')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6">

        </div>
        <div class="col-sm-12 col-md-6" style="text-align: right">
            <div class="dataTables_filter">
                <form action="" method="get">
                    <label><span style="float: left">Search:</span>

                        <input type="search"
                               name="keyword" value="" class="form-control form-control-sm"
                               placeholder="">

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
            <th scope="col">Name</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>

            <th scope="col">Price</th>
            <th scope="col">Views</th>
            <th scope="col" class="text-center">Album</th>
            <th scope="col" class="text-center" colspan="2"><a href="{{route('products.create')}}"
                                                               class="btn  btn-success"><i
                        class="fas fa-plus"></i> Create</a></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $key=>$pro)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$pro->name}}<br>
                    ID:{{$pro->id}}
                </td>

                <td>{{$pro->category->cate_name}}</td>
                <td><img width="100px" src="{{asset($pro->image)}}" alt=""></td>
                <td>{{$pro->price}}</td>
                <td>{{$pro->views}}</td>
                <td class="text-center"><a href="{{route('product_galleries.show',['product_gallery'=>$pro->id])}}"
                                           class="btn btn-primary"><i class="fas fa-images"></i></a></td>
                <td class="text-center"><a href="{{route('products.edit',['product'=>$pro->id])}}"
                                           class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                <td class="text-center"><a
                        onclick="openConfirm('{{route('products.destroy',['id'=>$pro->id])}}')"
                        href="javascript:;"
                        class="btn btn-danger"><i class="fas fa-trash"></i> </a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div class=" col-6 ">
        {{ $products->withQueryString()->links() }}
    </div>
@endsection
@section('script')
    <script>function openConfirm(removeUrl) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure  want to delete it !!',
                text: "You cannot restore it",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonText: 'No',
                confirmButtonText: 'Yes',

                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    window.location = removeUrl
                }
            })
        }</script>
@endsection
