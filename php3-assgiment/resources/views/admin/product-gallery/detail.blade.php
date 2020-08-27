@extends('admin._layouts._index')
@section('title','Product Gallery')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-6">

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
            <th scope="col">Image</th>
            <th scope="col" class="text-center" colspan="2"><a
                    href="{{route('product_galleries.create.detail',['id'=>$pro_galleries[0]->product_id])}}"
                    class="btn  btn-success"><i
                        class="fas fa-plus"></i> Create</a></th>
        </tr>
        </thead>
        <tbody>
        @if(isset($pro_galleries))
            @foreach($pro_galleries as $key=>$img_pro)
                <tr>
                    <td>{{$key+1}}</td>
                    <td><img width="100px" src="{{asset($img_pro->img_url)}}" alt=""></td>
                    <td class="text-center"><a
                            onclick="openConfirm('{{route('product_galleries.destroy',['id'=>$img_pro->id,'product'=>$img_pro->product_id])}}')"
                            href="javascript:;"
                            class="btn btn-danger"><i class="fas fa-trash"></i> </a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div class=" col-6 ">
        {{ $pro_galleries->withQueryString()->links() }}
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
