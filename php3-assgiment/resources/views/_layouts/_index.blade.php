<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from preview.hasthemes.com/pebona-v1/pebona/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Apr 2020 15:09:12 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="robots" content="noindex, follow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('_layouts._style')
</head>

<body>

<!-- Start of Whole Site Wrapper with mobile menu support -->
<div id="whole" class="whole-site-wrapper">
@yield('newletter')

<!-- Start of Header -->
@include('_layouts._header')
<!-- End of Header -->

    <div class="fixed-header-space"></div> <!-- empty placeholder div for Fixed Menu bar height-->

    <!-- Start of Main Content Wrapper -->
@yield('content')
<!-- End of Main Content Wrapper -->

    <!-- Start of Footer -->
@include('_layouts._footer')
<!-- End of Footer -->

    <!-- Quick View Content Start -->
    <div class="product-quick-view">
        <div class="container">
            <!-- Start of Modal -->
            <div class="modal fade" id="product_quick_view">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div> <!-- end of modal-header -->

                        <div class="modal-body">
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-7">
                                    <div class="product-gallery">
                                        <div class="gallery-with-thumbs" data-nav-center="false">
                                            <div class="product-image-container">
                                                <div class="product-full-image main-slider image-popup">

                                                    <!-- Slides -->
                                                    <div class="swiper-wrapper">
                                                        <figure class="swiper-slide">
                                                            <a href="assets/images/products/single/product-1.jpg"
                                                               data-size="600x600">
                                                                <img src="assets/images/products/single/product-1.jpg"
                                                                     alt="Product Image">
                                                                <div class="image-overlay"><i
                                                                        class="fa fa-search-plus"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Product Image</span>
                                                            </figcaption>
                                                        </figure>
                                                        <figure class="swiper-slide">
                                                            <a href="assets/images/products/single/product-2.jpg"
                                                               data-size="600x600">
                                                                <img src="assets/images/products/single/product-2.jpg"
                                                                     alt="Product Image">
                                                                <div class="image-overlay"><i
                                                                        class="fa fa-search-plus"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Product Image</span>
                                                            </figcaption>
                                                        </figure>
                                                        <figure class="swiper-slide">
                                                            <a href="assets/images/products/single/product-3.jpg"
                                                               data-size="600x600">
                                                                <img src="assets/images/products/single/product-3.jpg"
                                                                     alt="Product Image">
                                                                <div class="image-overlay"><i
                                                                        class="fa fa-search-plus"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Product Image</span>
                                                            </figcaption>
                                                        </figure>
                                                        <figure class="swiper-slide">
                                                            <a href="assets/images/products/single/product-4.jpg"
                                                               data-size="600x600">
                                                                <img src="assets/images/products/single/product-4.jpg"
                                                                     alt="Product Image">
                                                                <div class="image-overlay"><i
                                                                        class="fa fa-search-plus"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Product Image</span>
                                                            </figcaption>
                                                        </figure>
                                                        <figure class="swiper-slide">
                                                            <a href="assets/images/products/single/product-5.jpg"
                                                               data-size="600x600">
                                                                <img src="assets/images/products/single/product-5.jpg"
                                                                     alt="Product Image">
                                                                <div class="image-overlay"><i
                                                                        class="fa fa-search-plus"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Product Image</span>
                                                            </figcaption>
                                                        </figure>
                                                        <figure class="swiper-slide">
                                                            <a href="assets/images/products/single/product-6.jpg"
                                                               data-size="600x600">
                                                                <img src="assets/images/products/single/product-6.jpg"
                                                                     alt="Product Image">
                                                                <div class="image-overlay"><i
                                                                        class="fa fa-search-plus"></i></div>
                                                            </a>
                                                            <figcaption class="visually-hidden">
                                                                <span>Product Image</span>
                                                            </figcaption>
                                                        </figure>
                                                    </div>
                                                </div> <!-- end of product-full-image -->
                                            </div>

                                            <div class="product-thumb-container">
                                                <div class="product-thumb-image pos-r">
                                                    <div class="nav-slider">
                                                        <!-- Slides -->
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <img
                                                                    src="assets/images/products/single/product-thumb-1.jpg"
                                                                    alt="Product Thumbnail Image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img
                                                                    src="assets/images/products/single/product-thumb-2.jpg"
                                                                    alt="Product Thumbnail Image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img
                                                                    src="assets/images/products/single/product-thumb-3.jpg"
                                                                    alt="Product Thumbnail Image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img
                                                                    src="assets/images/products/single/product-thumb-4.jpg"
                                                                    alt="Product Thumbnail Image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img
                                                                    src="assets/images/products/single/product-thumb-5.jpg"
                                                                    alt="Product Thumbnail Image">
                                                            </div>
                                                            <div class="swiper-slide">
                                                                <img
                                                                    src="assets/images/products/single/product-thumb-6.jpg"
                                                                    alt="Product Thumbnail Image">
                                                            </div>
                                                        </div>

                                                        <!-- Navigation -->
                                                        <div class="swiper-arrow next"><i class="fa fa-angle-down"></i>
                                                        </div>
                                                        <div class="swiper-arrow prev"><i class="fa fa-angle-up"></i>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of product-thumb-image -->
                                            </div>
                                        </div> <!-- end of gallery-with-thumbs -->
                                    </div> <!-- end of product-gallery -->
                                </div>
                                <div class="col-12 col-md-6 col-lg-5">
                                    <div class="product-details">
                                        <h3 class="product-name">Cas Meque Metus</h3>
                                        <div class="product-ratings">
                                            <ul class="rating d-flex">
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                                <li><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <div class="product-price">
                                            <p class="d-flex align-items-center">
                                                <span class="price-old">$54.65</span>
                                                <span class="price-new">$43.72</span>
                                                <span class="price-discount">-20%</span>
                                            </p>
                                        </div>
                                        <div class="product-description">
                                            <p>Regular fit, round neckline, short sleeves. Made of extra long staple
                                                pima cotton.</p>
                                        </div>
                                        <form action="#" class="product-actions">
                                            <h3>Available Options</h3>
                                            <div class="product-size-color d-flex">
                                                <div class="product-size">
                                                    <label>Size</label>
                                                    <select class="nice-select">
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                    </select>
                                                </div>
                                                <div class="product-color">
                                                    <label>color</label>
                                                    <ul class="color-list">
                                                        <li>
                                                            <a class="white" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="orange active" href="#"></a>
                                                        </li>
                                                        <li>
                                                            <a class="paste" href="#"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-stock">
                                                <label>Quantity</label>
                                                <ul class="d-flex flex-wrap align-items-center">
                                                    <li class="box-quantity">
                                                        <div class="cart-input">
                                                            <input class="cart-input-box" type="text" value="0">
                                                            <div class="dec qtybutton"><i class="fa fa-angle-down"></i>
                                                            </div>
                                                            <div class="inc qtybutton"><i class="fa fa-angle-up"></i>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <button type="button" class="default-btn">Add to Cart</button>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="wishlist-compare">
                                                <button class="btn-wishlist" type="button" title="Add to Wishlist">Add
                                                    to Wishlist
                                                </button>
                                                <button class="btn-compare" type="button" title="Add to Compare">Add to
                                                    Compare
                                                </button>
                                            </div>
                                        </form>
                                    </div> <!-- end of product-details -->
                                </div>
                            </div> <!-- end of row -->
                        </div> <!-- end of modal-body -->

                        <div class="modal-footer justify-content-start">
                            <div class="social-sharing d-flex align-items-center">
                                <span>Share</span>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip"
                                                                    data-position="top" data-original-title="Facebook"
                                                                    target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip"
                                                                    data-position="top" data-original-title="Twitter"
                                                                    target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip"
                                                                    data-position="top"
                                                                    data-original-title="Google Plus" target="_blank"><i
                                                class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                    <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip"
                                                                    data-position="top" data-original-title="Pinterest"
                                                                    target="_blank"><i
                                                class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                </ul>
                            </div>
                        </div> <!-- end of modal-footer -->
                    </div> <!-- end of modal-content -->
                </div> <!-- end of modal-dialog -->
            </div> <!-- end of modal -->
        </div> <!-- end of container -->
    </div>
    <!-- Quick View Content End -->

    <!-- Start of Scroll to Top -->
    <div id="to_top">
        <i class="ion ion-ios-arrow-forward"></i>
        <i class="ion ion-ios-arrow-forward"></i>
    </div>
    <!-- End of Scroll to Top -->
</div>
<!-- End of Whole Site Wrapper -->

<!-- Initializing Photoswipe -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="pswp__bg"></div>
    <div class="pswp__scroll-wrap">
        <div class="pswp__container">
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
            <div class="pswp__item"></div>
        </div>
        <div class="pswp__ui pswp__ui--hidden">
            <div class="pswp__top-bar">
                <div class="pswp__counter"></div>
                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
                <button class="pswp__button pswp__button--share" title="Share"></button>
                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
                <div class="pswp__preloader">
                    <div class="pswp__preloader__icn">
                        <div class="pswp__preloader__cut">
                            <div class="pswp__preloader__donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                <div class="pswp__share-tooltip"></div>
            </div>
            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
            </button>
            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
            </button>
            <div class="pswp__caption">
                <div class="pswp__caption__center"></div>
            </div>
        </div>
    </div>
</div>
@include('_layouts._script')

</body>

<!-- Mirrored from preview.hasthemes.com/pebona-v1/pebona/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Apr 2020 15:09:31 GMT -->
</html>
