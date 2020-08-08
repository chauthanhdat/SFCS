@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!-- header -->
        @include('client.layouts.header')
        <!-- //header -->

        <!-- navigation -->
        <div class="navigation-agileits">
            <div class="container">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html" class="act">Trang Chủ</a></li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Groceries<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>All Groceries</h6>
                                                <li><a href="groceries.html">Dals & Pulses</a></li>
                                                <li><a href="groceries.html">Almonds</a></li>
                                                <li><a href="groceries.html">Cashews</a></li>
                                                <li><a href="groceries.html">Dry Fruit</a></li>
                                                <li><a href="groceries.html"> Mukhwas </a></li>
                                                <li><a href="groceries.html">Rice & Rice Products</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="">Logout</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- //navigation -->

        <!-- top-brands -->
        <!-- <div class="top-brands"> -->
        <div class="container">
            <!-- <h2>Top selling offers</h2> -->
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">Cửa Hàng A</a></li>
                        <li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours">Cửa Hàng B</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                            <div class="agile_top_brands_grids">
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " class="img-responsive" src="assets/client/images/1.png" style="width:150px;height:150px;" /></a>
                                                            <p>Cơm Tấm</p>
                                                            <h4>20.000 ₫</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Cơm Tấm" />
                                                                    <input type="hidden" name="amount" value="25000" />
                                                                    <input type="hidden" name="discount_amount" value="5000" />
                                                                    <input type="hidden" name="currency_code" value="VND" />
                                                                    <inbrandsut type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="thêm vào giỏ" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img src="assets/client/images/2.png" alt=" " class="img-responsive" style="width:150px;height:150px;" /></a>
                                                            <p>Hủ Tiếu</p>
                                                            <h4>20.000 ₫</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Hủ Tiếu" />
                                                                    <input type="hidden" name="amount" value="25000" />
                                                                    <input type="hidden" name="discount_amount" value="5000" />
                                                                    <input type="hidden" name="currency_code" value="VND" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img src="assets/client/images/3.png" alt=" " class="img-responsive" style="width:150px;height:150px;" /></a>
                                                            <p>Mì Trộn</p>
                                                            <h4>20.000 ₫</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Mì Trộn" />
                                                                    <input type="hidden" name="amount" value="25000" />
                                                                    <input type="hidden" name="discount_amount" value="5000" />
                                                                    <input type="hidden" name="currency_code" value="VND" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
                            <div class="agile_top_brands_grids">
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img title=" " alt=" " class="img-responsive" src="assets/client/images/4.jpg" style="width:150px;height:150px;" /></a>
                                                            <p>Bánh Tráng Trộn</p>
                                                            <h4>20.000 ₫</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Bánh Tráng Trộn" />
                                                                    <input type="hidden" name="amount" value="25000" />
                                                                    <input type="hidden" name="discount_amount" value="5000" />
                                                                    <input type="hidden" name="currency_code" value="VND" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 top_brand_left">
                                    <div class="hover14 column">
                                        <div class="agile_top_brand_left_grid">
                                            <div class="agile_top_brand_left_grid1">
                                                <figure>
                                                    <div class="snipcart-item block">
                                                        <div class="snipcart-thumb">
                                                            <a href="products.html"><img src="assets/client/images/5.jpg" alt=" " class="img-responsive" style="width:150px;height:150px;" /></a>
                                                            <p>Bánh Tráng Nướng</p>
                                                            <h4>20.000 ₫</h4>
                                                        </div>
                                                        <div class="snipcart-details top_brand_home_details">
                                                            <form action="#" method="post">
                                                                <fieldset>
                                                                    <input type="hidden" name="cmd" value="_cart" />
                                                                    <input type="hidden" name="add" value="1" />
                                                                    <input type="hidden" name="business" value=" " />
                                                                    <input type="hidden" name="item_name" value="Bánh Tráng Nướng" />
                                                                    <input type="hidden" name="amount" value="25000" />
                                                                    <input type="hidden" name="discount_amount" value="5000" />
                                                                    <input type="hidden" name="currency_code" value="VND" />
                                                                    <input type="hidden" name="return" value=" " />
                                                                    <input type="hidden" name="cancel_return" value=" " />
                                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>brands
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block">
                                                    <div class="snipcart-thumb">
                                                        <a href="products.html"><img src="assets/client/images/6.jpg" alt=" " class="img-responsive" style="width:150px;height:150px;" /></a>
                                                        <p>Bắp Xào</p>
                                                        <h4>20.000 ₫</h4>
                                                    </div>
                                                    <div class="snipcart-details top_brand_home_details">
                                                        <form action="#" method="post">
                                                            <fieldset>
                                                                <input type="hidden" name="cmd" value="_cart" />
                                                                <input type="hidden" name="add" value="1" />
                                                                <input type="hidden" name="business" value=" " />
                                                                <input type="hidden" name="item_name" value="Bắp Xào" />
                                                                <input type="hidden" name="amount" value="25000" />
                                                                <input type="hidden" name="discount_amount" value="5000" />
                                                                <input type="hidden" name="currency_code" value="VND" />
                                                                <input type="hidden" name="return" value=" " />
                                                                <input type="hidden" name="cancel_return" value=" " />
                                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>brandsipcart-details top_brand_home_details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Thập Cẩm" />
                                                        <input type="hidden" name="amount" value="25000" />
                                                        <input type="hidden" name="discount_amount" value="5000" />
                                                        <input type="hidden" name="currency_code" value="VND" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                        </div>
                                    </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="products.html"><img src="assets/client/images/5.jpg" alt=" " class="img-responsive" style="width:150px;height:150px;" /></a>
                                                <p>Bánh Tráng Nướng</p>
                                                <h4>20.000 ₫</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form actbrandsdset>
                                                    <input type="hidden" name="cmd" value="_cart" />
                                                    <input type="hidden" name="add" value="1" />
                                                    <input type="hidden" name="business" value=" " />
                                                    <input type="hidden" name="item_name" value="Hủ Tiếu" />
                                                    <input type="hidden" name="amount" value="25000" />
                                                    <input type="hidden" name="discount_amount" value="5000" />
                                                    <input type="hidden" name="currency_code" value="VND" />
                                                    <input type="hidden" name="return" value=" " />
                                                    <input type="hidden" name="cancel_return" value=" " />
                                                    <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 top_brand_left">
                        <div class="hover14 column">
                            <div class="agile_top_brand_left_grid">
                                <div class="agile_top_brand_left_grid1">
                                    <figure>
                                        <div class="snipcart-item block">
                                            <div class="snipcart-thumb">
                                                <a href="products.html"><img src="assets/client/images/6.jpg" alt=" " class="img-responsive" style="width:150px;height:150px;" /></a>
                                                <p>Bắp Xào</p>
                                                <h4>20.000 ₫</h4>
                                            </div>
                                            <div class="snipcart-details top_brand_home_details">
                                                <form action="#" method="post">
                                                    <fieldset>
                                                        <input type="hidden" name="cmd" value="_cart" />
                                                        <input type="hidden" name="add" value="1" />
                                                        <input type="hidden" name="business" value=" " />
                                                        <input type="hidden" name="item_name" value="Mì Trộn" />
                                                        <input type="hidden" name="amount" value="25000" />
                                                        <input type="hidden" name="discount_amount" value="5000" />
                                                        <input type="hidden" name="currency_code" value="VND" />
                                                        <input type="hidden" name="return" value=" " />
                                                        <input type="hidden" name="cancel_return" value=" " />
                                                        <input type="submit" name="submit" value="Add to cart" class="button" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- //top-brands -->

<!--brands-->
<div class="brands">
    <div class="container">
        <h3>Cửa Hàng</h3>
        <div class="brands-agile">
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng A</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng B</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng C</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng D</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng E</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng F</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng G</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng H</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng I</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng K</a></p>
                </div>
            </div>
            <div class="col-md-2 w3layouts-brand">
                <div class="brands-w3l">
                    <p><a href="#">Cửa Hàng L</a></p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--//brands-->

<!-- Bootstrap Core JavaScript -->
<script src="assets/client/js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        	};
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<script src="assets/client/js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
<!-- main slider-banner -->
<script src="assets/client/js/skdslider.min.js"></script>
<link href="assets/client/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#demo1').skdslider({
            'delay': 5000,
            'animationSpeed': 2000,
            'showNextPrev': true,
            'showPlayButton': true,
            'autoSlide': true,
            'animationType': 'fading'
        });

        jQuery('#responsive').change(function() {
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
<!-- //main slider-banner -->
</div>
</div>
@endsection