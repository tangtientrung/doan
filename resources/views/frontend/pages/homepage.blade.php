@extends('frontend.layouts.index')
@section('css')
<link href="frontend/css/sweetalert.css" rel="stylesheet">
@endsection
@section('content')
<!-- banner -->
<section class="banner">
        <div class="container">
            <div class="row">

                <!-- left -->
                <div class="col-sm-8 banner__left">
                    <img src="asset/image/ad1.jpg" alt="" class="banner__left__img" />
                    <div class="banner--position">
                        <p class="banner__left__title">Two High-end Materials</p>
                        <button type="button" class="btn-shop">Shop now</button>
                    </div>
                </div>
                <!-- /left -->

                <!-- right-->
                <div class="col-sm-4 banner__right">
                    <div class="row">
                        <!-- top -->
                        <div class="col-sm-12 banner__right__top">
                            <img src="asset/image/ad2.png" alt="" class="banner__right__top__img" />
                            <div class="banner--position">
                                <a href="">
                                    <p class="banner__right__top__name">SMALL THING</p>
                                    <p class="banner__right__top__title">MAKE DIFFERENT</p>
                                </a>
                            </div>
                        </div>
                        <!-- /top-->
                        <!-- bottom -->
                        <div class="col-sm-12 banner__right__bottom">
                            <img src="asset/image/ad3.png" alt="" class="banner__right__bottom__img" />
                            <div class="banner--position">
                                <p class="banner__right__bottom__name">FOLIO</p>
                                <p class="banner__right__bottom__title">BACKPACK</p>
                                <button type="button" class="btn-shop">Shop now</button>
                            </div>
                        </div>
                        <!-- /bottom-->
                    </div>
                </div>
            </div>
            <!-- /right-->
        </div>
        </div>
</section>
    <!-- /banner -->

    <!-- product -->
    <section class="product">
        <div class="container">
            <!-- introduce -->
            <header class="introduce">
                    <p class="introduce__article">FRANCO</p>
                    <p class="introduce__title">FEATURED ITEMS</p>
                    <p class="introduce__underline"></p>
            </header>
            <!-- /introduce -->
            <div class="product__detail">
                <div class="row">
                    <!-- item-->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p1.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Suspendisse id volutpat</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-black"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <strike class="product__infor__price__discount">$99.00</strike>
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item-->
                    <!-- item-->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p2.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Lorem ipsum dolor</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-black"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <strike class="product__infor__price__discount">$99.00</strike>
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- item-->
                    <!-- item-->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p3.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Proin sed nulla mi</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-black"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item-->
                    <!-- item -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p4.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Aenean placerat</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <strike class="product__infor__price__discount">$99.00</strike>
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item-->
                    <!-- item -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p5.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Suspendisse id volutpat</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-black"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <strike class="product__infor__price__discount">$99.00</strike>
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item -->
                    <!-- item -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p6.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Lorem ipsum dolor</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-black"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <strike class="product__infor__price__discount">$99.00</strike>
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item -->
                    <!-- item -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p7.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Proin sed nulla mi</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-black"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item -->
                    <!-- item -->
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="item">
                            <a href=""  >
                                <div class="product__image">
                                    <img src="asset/image/p8.jpg" alt="" />
                                    <button class="btn-add-cart">ADD TO CART</button>
                                </div>
                                <div class="product__infor">
                                    <div class="product__infor__name">Aenean placerat</div>
                                    <div class="product__infor__star">
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                        <i class="fas fa-star star-yellow"></i>
                                    </div>
                                    <div class="product__infor__price">
                                        <strike class="product__infor__price__discount">$99.00</strike>
                                        <span class="product__infor__price__final">$84.00</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /item -->
                </div>
            </div>
        </div>
    </section>
    <!-- /product -->

    <!-- slider -->
    <section class="slider">
        <div class="container">
            <!-- introduce -->
            <header class="introduce">
                <div class="introduce--center">
                    <p class="introduce__article">LATEST</p>
                    <p class="introduce__title">NEWS & EVENTS</p>
                    <p class="introduce__underline"></p>
                </div>
            </header>
            <!-- introduce -->

            <!-- main-slider -->
            <section class="slider__main-slider">
                <div class="row">
                    <div class="owl-carousel owl-theme">
                        <div class="item-slider">
                            <a href="#"  >
                                <div class="slider__main-slider__image">
                                    <img src="asset/image/s1.jpg" class="slider__main-slider__image__main-image" alt="">
                                    <div class="slider-date">
                                        <div class="slider-date__frame"></div>
                                        <p class="slider-date__month">Jan</p>
                                        <p class="slider-date__date">23</p>
                                    </div>
                                </div>
                                <div class="slider__main-slider__infor">
                                    <p class="slider__main-slider__title">In commodo dolor vitae</p>
                                    <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                    <div class="slider__main-slider__underline"></div>
                                    <div class="slider__main-slider__social">
                                        <span class="slider__main-slider__social__comment">
                                            <i class="far fa-comment"></i><span class="span-slider">12</span>
                                        </span>
                                        <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item-slider">
                            <div class="slider__main-slider__item">
                                <a href="#"  >
                                    <div class="slider__main-slider__image">
                                        <img src="asset/image/s2.jpg" class="slider__main-slider__image__main-image" alt="">
                                        <div class="slider-date">
                                            <div class="slider-date__frame"></div>
                                            <p class="slider-date__month">Jan</p>
                                            <p class="slider-date__date">23</p>
                                        </div>
                                    </div>
                                    <div class="slider__main-slider__infor">
                                        <p class="slider__main-slider__title">Vivamus non dignissim elit</p>
                                        <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam
                                            risus consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                        <div class="slider__main-slider__underline"></div>
                                        <div class="slider__main-slider__social">
                                            <span class="slider__main-slider__social__comment">
                                                <i class="far fa-comment"></i><span class="span-slider">12</span>
                                            </span>
                                            <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item-slider">
                            <a href="#"  >
                                <div class="slider__main-slider__image">
                                    <img src="asset/image/s3.jpg" class="slider__main-slider__image__main-image" alt="">
                                    <div class="slider-date">
                                        <div class="slider-date__frame"></div>
                                        <p class="slider-date__month">Jan</p>
                                        <p class="slider-date__date">23</p>
                                    </div>                                </div>
                                <div class="slider__main-slider__infor">
                                    <p class="slider__main-slider__title">Ut lacinia erat ut diam volutpat</p>
                                    <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                    <div class="slider__main-slider__underline"></div>
                                    <div class="slider__main-slider__social">
                                        <span class="slider__main-slider__social__comment">
                                            <i class="far fa-comment"></i><span class="span-slider">12</span>
                                        </span>
                                        <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item-slider">
                            <a href="#"  >
                                <div class="slider__main-slider__image">
                                    <img src="asset/image/s1.jpg" class="slider__main-slider__image__main-image" alt="">
                                    <div class="slider-date">
                                        <div class="slider-date__frame"></div>
                                        <p class="slider-date__month">Jan</p>
                                        <p class="slider-date__date">23</p>
                                    </div>                                </div>
                                <div class="slider__main-slider__infor">
                                    <p class="slider__main-slider__title">In commodo dolor vitae</p>
                                    <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                    <div class="slider__main-slider__underline"></div>
                                    <div class="slider__main-slider__social">
                                        <span class="slider__main-slider__social__comment">
                                            <i class="far fa-comment"></i><span class="span-slider">12</span>
                                        </span>
                                        <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item-slider">
                            <div class="slider__main-slider__item">
                                <a href="#"  >
                                    <div class="slider__main-slider__image">
                                        <img src="asset/image/s2.jpg" class="slider__main-slider__image__main-image" alt="">
                                        <div class="slider-date">
                                            <div class="slider-date__frame"></div>
                                            <p class="slider-date__month">Jan</p>
                                            <p class="slider-date__date">23</p>
                                        </div>                                    </div>
                                    <div class="slider__main-slider__infor">
                                        <p class="slider__main-slider__title">Vivamus non dignissim elit</p>
                                        <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam
                                            risus consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                        <div class="slider__main-slider__underline"></div>
                                        <div class="slider__main-slider__social">
                                            <span class="slider__main-slider__social__comment">
                                                <i class="far fa-comment"></i><span class="span-slider">12</span>
                                            </span>
                                            <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item-slider">
                            <a href="#"  >
                                <div class="slider__main-slider__image">
                                    <img src="asset/image/s3.jpg" class="slider__main-slider__image__main-image" alt="">
                                    <div class="slider-date">
                                        <div class="slider-date__frame"></div>
                                        <p class="slider-date__month">Jan</p>
                                        <p class="slider-date__date">23</p>
                                    </div>                                </div>
                                <div class="slider__main-slider__infor">
                                    <p class="slider__main-slider__title">Ut lacinia erat ut diam volutpat</p>
                                    <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                    <div class="slider__main-slider__underline"></div>
                                    <div class="slider__main-slider__social">
                                        <span class="slider__main-slider__social__comment">
                                            <i class="far fa-comment"></i><span class="span-slider">12</span>
                                        </span>
                                        <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item-slider">
                            <a href="#"  >
                                <div class="slider__main-slider__image">
                                    <img src="asset/image/s1.jpg" class="slider__main-slider__image__main-image" alt="">
                                    <div class="slider-date">
                                        <div class="slider-date__frame"></div>
                                        <p class="slider-date__month">Jan</p>
                                        <p class="slider-date__date">23</p>
                                    </div>                                </div>
                                <div class="slider__main-slider__infor">
                                    <p class="slider__main-slider__title">In commodo dolor vitae</p>
                                    <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                    <div class="slider__main-slider__underline"></div>
                                    <div class="slider__main-slider__social">
                                        <span class="slider__main-slider__social__comment">
                                            <i class="far fa-comment"></i><span class="span-slider">12</span>
                                        </span>
                                        <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="item-slider">
                            <div class="slider__main-slider__item">
                                <a href="#"  >
                                    <div class="slider__main-slider__image">
                                        <img src="asset/image/s2.jpg" class="slider__main-slider__image__main-image" alt="">
                                        <div class="slider-date">
                                            <div class="slider-date__frame"></div>
                                            <p class="slider-date__month">Jan</p>
                                            <p class="slider-date__date">23</p>
                                        </div>                                    </div>
                                    <div class="slider__main-slider__infor">
                                        <p class="slider__main-slider__title">Vivamus non dignissim elit</p>
                                        <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam
                                            risus consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                        <div class="slider__main-slider__underline"></div>
                                        <div class="slider__main-slider__social">
                                            <span class="slider__main-slider__social__comment">
                                                <i class="far fa-comment"></i><span class="span-slider">12</span>
                                            </span>
                                            <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="item-slider">
                            <a href="#"  >
                                <div class="slider__main-slider__image">
                                    <img src="asset/image/s3.jpg" class="slider__main-slider__image__main-image" alt="">
                                    <div class="slider-date">
                                        <div class="slider-date__frame"></div>
                                        <p class="slider-date__month">Jan</p>
                                        <p class="slider-date__date">23</p>
                                    </div>                                </div>
                                <div class="slider__main-slider__infor">
                                    <p class="slider__main-slider__title">Ut lacinia erat ut diam volutpat</p>
                                    <p class="slider__main-slider__desc">Aliquam tempor sagittis neque, vel aliquam risus
                                        consectetur vel. Aenean hendrerit, elit a lacinia suscipit, orci mauris.</p>
                                    <div class="slider__main-slider__underline"></div>
                                    <div class="slider__main-slider__social">
                                        <span class="slider__main-slider__social__comment">
                                            <i class="far fa-comment"></i><span class="span-slider">12</span>
                                        </span>
                                        <i class="far fa-heart"></i><span class="span-slider"></span>0</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /main-slider-->
        </div>
    </section>
    <!-- /slider -->

  @endsection
  @section('script')
  <script src="frontend/js/sweetalert.js"></script>
  <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){
              var id = $(this).data('id_product');
              var product_name = $('.cart_product_name_' + id).val();
              var product_image = $('.cart_product_image_' + id).val();
              var product_price = $('.cart_product_price_' + id).val();
              var product_qty = $('.cart_product_qty_' + id).val();
              var token = $('input[name="_token"]').val();
              //swal("Hello world!");
              //alert(product_name);

              $.ajax({
                     method:'POST',
                     url:'/them-gio-hang',
                    data:{product_id:id,
                          product_name:product_name,
                          product_image:product_image,
                          product_price:product_price,
                          product_qty:product_qty,
                          _token:token},
                    success:function(){
                      //alert(data);
                      swal("Đã thêm sản phẩm vào giỏ hàng!","", "success");
                      

                    }

                });

            });

            
        });
    </script>

  @endsection