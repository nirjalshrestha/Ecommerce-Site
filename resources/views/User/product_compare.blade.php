@extends('User.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<body>

<!--================Categories Banner Area =================-->
<section class="categories_banner_area">
    <div class="container">
        <div class="c_banner_inner">
            <h3>simple product Layout 03</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li class="current"><a href="{{asset('product-details2.html')}}">Simple Product 03</a></li>
            </ul>
        </div>
    </div>
</section>
<!--================End Categories Banner Area =================-->

<!--================Product Compare Area =================-->
<section class="product_compare_area">
    <div class="container">
        <div class="compare_table">
            <div class="table-responsive-md">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Samsunga galaxy l7</th>
                        <th scope="col">xiaomi redmi note 4</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row"><span>Summary</span></th>
                        <td>
                            <img src="{{asset('img/product/compare/compare-1.png')}}" alt="">
                            <h3><span>Price</span> $250.00</h3>
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                        </td>
                        <td>
                            <img src="{{asset('img/product/compare/compare-2.png')}}" alt="">
                            <h3><span>Price</span> $200.00</h3>
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Network</span></th>
                        <td>
                            <h6>GSM / HSPA / LTE</h6>
                        </td>
                        <td><h6>GSM / HSPA / LTE</h6></td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Launch</span></th>
                        <td><h6>2016, August</h6></td>
                        <td><h6>2016, August</h6></td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Body</span></th>
                        <td><h6>151.7 x 75 x 8 mm</h6></td>
                        <td><h6>151.7 x 75 x 8 mm</h6></td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Display</span></th>
                        <td><h6>PLS TFT Capacitive Touchscreen</h6></td>
                        <td><h6>PLS TFT Capacitive Touchscreen</h6></td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Platform</span></th>
                        <td><h6>Android OS</h6></td>
                        <td><h6>Android OS</h6></td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Memory</span></th>
                        <td><h6>MicroSD,Up to 256 GB</h6></td>
                        <td><h6>MicroSD,Up to 256 GB</h6></td>
                    </tr>
                    <tr>
                        <th scope="row"><span>Camera</span></th>
                        <td><h6>13 MP, f/1.9 28, Autofocus</h6></td>
                        <td><h6>13 MP, f/1.9 28, Autofocus</h6></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <a class="add_cart_btn continue" href="#">continue shopping</a>
        </div>
    </div>
</section>
<!--================End Product Compare Area =================-->

<!--================End Related Product Area =================-->
<section class="related_product_area">
    <div class="container">
        <div class="related_product_inner">
            <h2 class="single_c_title">Related Product</h2>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-5.jpg')}}" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Samsung A5</h4>
                            <h5>$150.00</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-6.jpg')}}" alt="">
                            <h5 class="new">New</h5>
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Iphone 6</h4>
                            <h5>
                                <del>$800</del>
                                $650
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-7.jpg')}}" alt="">
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Galaxy S8 4G 64GB</h4>
                            <h5>$800</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img class="img-fluid" src="{{asset('img/product/related-product/r-product-8.jpg')}}" alt="">
                            <h5 class="sale">Sale</h5>
                        </div>
                        <div class="l_p_text">
                            <ul>
                                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                            </ul>
                            <h4>Sony Xperia Z3</h4>
                            <h5>$350</h5>
                        </div>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example" class="pagination_area">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item next"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!--================End Related Product Area =================-->


</body>
</html>
@endsection
