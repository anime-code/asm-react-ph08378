@extends('admin._layouts._index')
@section('title','Categories')
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
            <th scope="col">Category</th>
            <th scope="col">Show Menu</th>
            <th scope="col" class="text-center" colspan="2"><a href="{{route('categories.create')}}"
                                                               class="btn  btn-success"><i
                        class="fas fa-plus"></i> Create</a></th>
        </tr>
        </thead>
        <tbody>
        @if(isset($categories))
            @foreach($categories as $key=>$cate)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$cate->cate_name}}<br>ID:
                        {{$cate->id}}</td>
                    <td>@if($cate->show_menu==1)
                            <p class="text-success">Active</p>
                        @else
                            <p class="text-danger">Disabled</p>
                        @endif</td>
                    <td class="text-center"><a href="{{route('categories.edit',['category'=>$cate->id])}}"
                                               class="btn btn-primary"><i class="fas fa-edit"></i></a></td>
                    <td class="text-center"><a
                            onclick="openConfirm('{{route('categories.destroy',['id'=>$cate->id])}}')"
                            href="javascript:;"
                            class="btn btn-danger"><i class="fas fa-trash"></i> </a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class=" col-6 ">
        {{ $categories->withQueryString()->links() }}
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
