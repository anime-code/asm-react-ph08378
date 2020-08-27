@extends('_layouts._index')
@section('title','Shop')
@section('content')
    <!-- Start of Breadcrumbs -->
    <div class="breadcrumb-section bgc-offset mb-full">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12">
                    <nav class="breadcrumb">
                        <a class="breadcrumb-item" href="index.html">Home</a>
                        <span class="breadcrumb-item active">Shop</span>
                    </nav>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
    <!-- End of Breadcrumbs -->

    <!-- Start of Main Content Wrapper -->
    <div id="content" class="main-content-wrapper">

        <!-- Start of Products Wrapper -->
        <div class="products-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                        <main id="primary" class="site-main">
                            <div class="shop-wrapper">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <h1>Shop</h1>
                                        <div class="shop-toolbar">
                                            <div class="toolbar-inner">
                                                <div class="product-view-mode">
                                                    <ul role="tablist" class="nav shop-item-filter-list">
                                                        <li role="presentation" class="active"><a href="#grid"
                                                                                                  aria-controls="grid"
                                                                                                  role="tab"
                                                                                                  data-toggle="tab"
                                                                                                  class="active show"
                                                                                                  aria-selected="true"><i
                                                                    class="ion-md-grid"></i></a></li>
                                                        <li role="presentation"><a href="#list" aria-controls="list"
                                                                                   role="tab" data-toggle="tab"><i
                                                                    class="ion-md-list"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="toolbar-amount">
                                                    <span>Showing 10 to 18 of 27</span>
                                                </div>
                                            </div>
                                            <div class="product-select-box">
                                                <div class="product-sort">
                                                    <p>Sort By:</p>
                                                    <select class="nice-select" name="sortby">
                                                        <option value="trending">Relevance</option>
                                                        <option value="sales">Name (A - Z)</option>
                                                        <option value="sales">Name (Z - A)</option>
                                                        <option value="rating">Price (Low > High)</option>
                                                        <option value="date">Rating (Lowest)</option>
                                                        <option value="price-asc">Model (A - Z)</option>
                                                        <option value="price-asc">Model (Z - A)</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of row -->

                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12">
                                        <div class="shop-products-wrapper">
                                            <div class="tab-content">
                                                <div id="grid" class="tab-pane anime-tab active show" role="tabpanel">
                                                    <div class="row">
                                                        @foreach($products as$pro)
                                                            <article
                                                                class="product-layout col-6 col-sm-6 col-md-4 col-lg-4">
                                                                <div class="product-thumb">
                                                                    <div class="product-inner">
                                                                        <div class="product-image">
                                                                            <div class="label-product label-sale">-20%
                                                                            </div>
                                                                            <div class="label-product label-new">New
                                                                            </div>
                                                                            <a href="{{route('page.product',['id'=>$pro->id])}}">
                                                                                <img
                                                                                    src="{{asset($pro->image)}}"
                                                                                    alt="{{$pro->name}}"
                                                                                    title="{{$pro->name}}">
                                                                            </a>
                                                                            <div class="action-links">
                                                                                <a class="action-btn btn-cart" href="#"
                                                                                   title="Add to Cart"><i
                                                                                        class="pe-7s-shopbag"></i></a>
                                                                                <a class="action-btn btn-wishlist"
                                                                                   href="#"
                                                                                   title="Add to Wishlist"><i
                                                                                        class="pe-7s-like"></i></a>
                                                                                <a class="action-btn btn-compare"
                                                                                   href="#"
                                                                                   title="Add to Compare"><i
                                                                                        class="pe-7s-refresh-2"></i></a>
                                                                                <a class="action-btn btn-quickview"
                                                                                   data-toggle="modal"
                                                                                   data-target="#product_quick_view"
                                                                                   href="#" title="Quick View"><i
                                                                                        class="pe-7s-search"></i></a>
                                                                            </div>
                                                                        </div> <!-- end of product-image -->

                                                                        <div class="product-caption">
                                                                            <div
                                                                                class="product-meta d-flex justify-content-between align-items-center">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">{{$pro->category->cate_name}}</a>
                                                                                </div>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline disabled"></i>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <h4 class="product-name"><a
                                                                                    href="{{route('page.product',['id'=>$pro->id])}}">{{$pro->name}}</a>
                                                                            </h4>
                                                                            <p class="product-price">

                                                                                <span
                                                                                    class="price-new">{{$pro->price}}</span>
                                                                            </p>
                                                                        </div><!-- end of product-caption -->
                                                                    </div><!-- end of product-inner -->
                                                                </div><!-- end of product-thumb -->
                                                            </article> <!-- end of product-layout -->
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div id="list" class="tab-pane anime-tab" role="tabpanel">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-12 col-md-12">
                                                            @foreach($products as $pro)
                                                                <article class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div
                                                                            class="product-inner media align-items-center">
                                                                            <div
                                                                                class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-sale">
                                                                                    -20%
                                                                                </div>
                                                                                <div class="label-product label-new">New
                                                                                </div>
                                                                                <a href="{{route('page.product',['id'=>$pro->id])}}">
                                                                                    <img style="width: 200px"
                                                                                         src="{{asset($pro->image)}}"
                                                                                         title="{{$pro->name}}"
                                                                                         alt="{{$pro->name}}">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart"
                                                                                       href="#"
                                                                                       title="Add to Cart"><i
                                                                                            class="pe-7s-shopbag"></i></a>
                                                                                    <a class="action-btn btn-wishlist"
                                                                                       href="#" title="Add to Wishlist"><i
                                                                                            class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare"
                                                                                       href="#"
                                                                                       title="Add to Compare"><i
                                                                                            class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview"
                                                                                       data-toggle="modal"
                                                                                       data-target="#product_quick_view"
                                                                                       href="#" title="Quick View"><i
                                                                                            class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-manufacturer">
                                                                                    <a href="#">{{$pro->category->cate_name}}</a>
                                                                                </div>
                                                                                <h4 class="product-name">
                                                                                    <a href="{{route('page.product',['id'=>$pro->id])}}">{{$pro->name}}</a>
                                                                                </h4>
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex">
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline"></i>
                                                                                            </li>
                                                                                            <li>
                                                                                                <i class="ion ion-md-star-outline disabled"></i>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <p class="product-price">

                                                                                    <span
                                                                                        class="price-new">${{$pro->price}}</span>
                                                                                </p>
                                                                                <div class="product-des">
                                                                                    <p>{{$pro->short_desc}}</p>
                                                                                </div>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </article> <!-- end of product-layout -->
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end of shop-products-wrapper -->

                                        <div class="pagination-area">
                                            <div class="row align-items-center">
                                                <div class="col-12 order-2 col-sm-12 col-md-6 order-md-1 col-lg-6">
                                                    <div
                                                        class="page-amount d-flex justify-content-center justify-content-md-start">
                                                        <p>Showing 10 to 18 of 27 (3 Pages)</p>
                                                    </div>
                                                </div>
                                                <div class="col-12 order-1 col-sm-12 col-md-6 order-md-2 col-lg-6">
                                                    {{ $products->withQueryString()->links() }}
                                                </div>
                                            </div>
                                        </div> <!-- end of pagination-area -->
                                    </div>
                                </div> <!-- end of row -->
                            </div> <!-- end of shop-wrapper -->
                        </main> <!-- end of #primary -->
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                        <aside id="secondary" class="widget-area">
                            <div class="sidebar-widget list-categories-widget">
                                <h2 class="widgettitle">Categories</h2>
                                <div class="cat-accordion">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                @foreach($category as$cate)
                                                    <button type="button" data-toggle="collapse"><a
                                                            href="{{route('page.product.by.cate',['id'=>$cate->id])}}">{{$cate->cate_name}}</a>
                                                    </button>
                                                @endforeach
                                            </h5>
                                        </div>
                                    </div>

                                </div>

                            </div>


                            <div class="sidebar-widget list-widget">
                                <h2 class="widgettitle">Price</h2>
                                <div class="list-widget-wrapper">
                                    <div class="list-group">
                                        <a href="#">$43.00 - $45.00 (10)</a>
                                        <a href="#">$54.00 - $58.00 (4)</a>
                                        <a href="#">$62.00 - $70.00 (5)</a>
                                        <a href="#">$78.00 - $83.00 (10)</a>
                                        <a href="#">$85.00 - $89.00 (13)</a>
                                    </div>
                                </div>
                            </div> <!-- end of sidebar-widget -->

                            <div class="sidebar-widget color-widget">
                                <h2 class="widgettitle">Color</h2>
                                <div class="color-widget-wrapper">
                                    <ul class="color-options">
                                        <li>
                                            <span class="white"></span>
                                            <a href="#">white (4)</a>
                                        </li>
                                        <li>
                                            <span class="orange"></span>
                                            <a href="#">Orange (2)</a>
                                        </li>
                                        <li>
                                            <span class="blue"></span>
                                            <a href="#">Blue (6)</a>
                                        </li>
                                        <li>
                                            <span class="yellow"></span>
                                            <a href="#">Yellow (8)</a>
                                        </li>
                                        <li>
                                            <span class="black"></span>
                                            <a href="#">black (6)</a>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- end of sidebar-widget -->

                            <div class="sidebar-widget tag-cloud">
                                <h2 class="widgettitle">Popular Tags</h2>
                                <div class="tags-widget">
                                    <ul>
                                        <li><a href="#">Ecommerce</a></li>
                                        <li><a href="#">Shoes</a></li>
                                        <li><a href="#">bags</a></li>
                                        <li><a href="#">Accessories</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Trending</a></li>
                                        <li><a href="#">Clothing</a></li>
                                        <li><a href="#">Smart</a></li>
                                    </ul>
                                </div>
                            </div> <!-- end of sidebar-widget -->
                        </aside> <!-- end of #secondary -->
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Products Wrapper -->
    </div>
    <!-- End of Main Content Wrapper -->
@endsection
