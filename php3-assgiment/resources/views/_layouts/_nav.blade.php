<div class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-6 order-2 col-sm-6 order-sm-2 col-md-4 order-md-1 col-lg-3">
                <div class="header-search-area">
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search entire store here ...">
                            <div class="input-group-append">
                                <button class="header-search-btn" type="submit"><i class="pe-7s-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 order-1 col-sm-12 order-sm-1 col-md-4 order-md-2 col-lg-6">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('assets/images/logo.png')}}" alt="Logo"
                                              class="img-fluid"></a>
                </div>
            </div>
            <div class="col-6 order-3 col-sm-6 col-md-4 col-lg-3">
                <div class="header-cart-area">
                    <div class="header-cart">
                        <div class="btn-group">
                            <button class="btn-link dropdown-toggle icon-cart">
                                <i class="pe-7s-shopbag"></i>
                                <span class="count-style">2</span>
                            </button>
                            <div class="dropdown-menu">
                                <div class="shopping-cart-content">
                                    <ul class="list-unstyled">
                                        <li class="single-cart-item media">
                                            <div class="shopping-cart-img mr-4">
                                                <a href="#">
                                                    <img class="img-fluid" alt="Cart Item"
                                                         src="assets/images/cart/cart-1.jpg">
                                                    <span class="product-quantity">1x</span>
                                                </a>
                                            </div>
                                            <div class="shopping-cart-title media-body">
                                                <h4><a href="#">Rival Field Messenger</a></h4>
                                                <p class="cart-price">$120.00</p>
                                                <div class="product-attr">
                                                    <span>Size: S</span>
                                                    <span>Color: Black</span>
                                                </div>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="ion ion-md-close"></i></a>
                                            </div>
                                        </li>
                                        <li class="single-cart-item media">
                                            <div class="shopping-cart-img mr-4">
                                                <a href="#">
                                                    <img class="img-fluid" alt="Cart Item"
                                                         src="assets/images/cart/cart-2.jpg">
                                                    <span class="product-quantity">2x</span>
                                                </a>
                                            </div>
                                            <div class="shopping-cart-title media-body">
                                                <h4><a href="#">Fusion Backpack</a></h4>
                                                <p class="cart-price">$200.00</p>
                                                <div class="product-attr">
                                                    <span>Color: White</span>
                                                    <span>Accessories: Yes</span>
                                                </div>
                                            </div>
                                            <div class="shopping-cart-delete">
                                                <a href="#"><i class="ion ion-md-close"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="shopping-cart-total">
                                        <h4>Sub-Total : <span>$320.00</span></h4>
                                        <h4>Total : <span>$320.00</span></h4>
                                    </div>
                                    <div class="shopping-cart-btn">
                                        <a class="default-btn" href="cart.html">view cart</a>
                                        <a class="default-btn" href="checkout.html">checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="list-inline">
                        <li class="top-links list-inline-item">
                            <div class="btn-group">
                                <button class="btn-link dropdown-toggle"><i class="pe-7s-config"></i></button>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- end of header-cart-area -->
            </div>
        </div>
    </div> <!-- end of container -->
</div> <!-- end of header-top -->


<!-- Start of Main and Mobile Navigation -->
<div class="main-nav-area bgc-white">
    <div class="container">
        <nav id="main_nav" class="stellarnav desktop"><a href="#" class="menu-toggle full"><i class="fa fa-bars"></i>
                Menu</a>
            <ul>
                <li class="has-sub active"><a href="{{route('page.index')}}"><span>Home</span></a></li>
                <li class="has-sub active"><a href="{{route('page.shop')}}"><span>Shop</span></a>
                    <ul>
                        @foreach($category as $cate)
                            <li class="active"><a
                                    href="{{route('page.product.by.cate',[$cate->id])}}">{{$cate->cate_name}}</a></li>
                        @endforeach
                    </ul>
                    <a class="dd-toggle" href="#"><i class="fa fa-plus"></i></a></li>
                <li><a href=""><span>About Us</span></a></li>
                <li><a href="{{route('page.contact')}}"><span>Contact Us</span></a></li>
            </ul>
        </nav>
    </div> <!-- end of container -->
</div>
<!-- End of Main and Mobile Navigation -->
