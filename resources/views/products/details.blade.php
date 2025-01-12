@extends('layouts.app')
@section('title', $category->name ?? 'Категория')
@section('description', $category->description ?? "Нет описания")
@section('content')
    <div class="ps-breadcrumb ps-breadcrumb--2">
        <div class="ps-container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 ">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="index.html">Woman</a></li>
                        <li class="active">Smocked blouse</li>
                    </ol>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 ">
                    <ul class="ps-breadcrumb__link">
                        <li><a href="#"><i class="exist-leftarrow"></i></a></li>
                        <li><a href="#"><i class="exist-rightarrow"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-product--detail">
        <div class="ps-container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-product__thumbnail">
                        <div class="ps-product__images-large">
                            <div class="item"><img src="/assets/images/product-creative-content/50000_Post.jpg" alt=""><a
                                    class="ps-product__zoom single-image-popup"
                                    href="/assets/images/product-creative-content/50000_Post.jpg"><i class="exist-zoom"></i></a>
                            </div>
                            <div class="item"><img src="/assets/images/product-creative-content/60000_Post.jpg" alt=""><a
                                    class="ps-product__zoom single-image-popup"
                                    href="/assets/images/product-creative-content/60000_Post.jpg"><i class="exist-zoom"></i></a>
                            </div>
                            <div class="item"><img src="/assets/images/product-creative-content/70000_Post.jpg" alt=""><a
                                    class="ps-product__zoom single-image-popup"
                                    href="/assets/images/product-creative-content/70000_Post.jpg"><i class="exist-zoom"></i></a>
                            </div>
                        </div>
                        <div class="ps-product__nav">
                            <div class="item"><img src="/assets/images/product-creative-content/thumbnail-1.jpg" alt="">
                            </div>
                            <div class="item"><img src="/assets/images/product-creative-content/thumbnail-2.jpg" alt="">
                            </div>
                            <div class="item"><img src="/assets/images/product-creative-content/thumbnail-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        {{--<div class="ps-product__video">
                            <a class="video-popup" href="https://www.youtube.com/watch?v=4ZighUyrsRU"><i class="exist-play"></i>Watch Video</a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 ">
                    <div class="ps-product__info">
                        <h1 class="ps-product__title">Smocked blouse</h1>
                        <h4 class="ps-product__price">$39.00</h4>
                        <div class="ps-product__rating">
                            <select class="ps-rating">
                                <option value="1">1</option>
                                <option value="1">2</option>
                                <option value="1">3</option>
                                <option value="1">4</option>
                                <option value="2">5</option>
                            </select><span>(2 customers review)</span>
                        </div>
                        <div class="ps-product__short-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed fermentum nibh, vel
                                aliquet massa. Etiam in magna id risus lacinia luctus eget eu est.</p>
                        </div>
                        <div class="ps-product__variants">
                            <h5>Color</h5>
                            <div class="ps-radio ps-radio--inline black">
                                <input class="form-control" type="radio" id="color-1" name="type-1">
                                <label for="color-1"></label>
                            </div>
                            <div class="ps-radio ps-radio--inline white">
                                <input class="form-control" type="radio" id="color-2" name="type-1">
                                <label for="color-2"></label>
                            </div>
                            <div class="ps-radio ps-radio--inline brown">
                                <input class="form-control" type="radio" id="color-3" name="type-1">
                                <label for="color-3"></label>
                            </div>
                            <div class="ps-radio ps-radio--inline gray">
                                <input class="form-control" type="radio" id="color-4" name="type-1">
                                <label for="color-4"></label>
                            </div>
                            <h5 class="mt-30"> Size</h5>
                            <ul class="ps-product__size">
                                <li><a href="#"><span>xs</span></a></li>
                                <li><a href="#"><span>S</span></a></li>
                                <li class="current"><a href="#"><span>M</span></a></li>
                                <li><a href="#"><span>
                            <del>L</del></span></a></li>
                                <li><a href="#"><span>
                            <del>XL</del></span></a></li>
                            </ul>
                        </div>
                        <div class="ps-product__divider"></div>
                        <div class="ps-product__shopping">
                            <div class="form-group form-group--number">
                                <input class="form-control" type="text" value="1"><span class="down">-</span><span
                                    class="up">+</span>
                            </div>
                            <button class="ps-btn ps-btn--black"><i class="exist-minicart mr-5"></i> Add to cart
                            </button>
                            <ul class="ps-product__cart-action">
                                <li><a href="#"><i class="exist-heart"></i>Add to Whishlist</a></li>
                                <li><a href="#"><i class="exist-compare"></i>Compare</a></li>
                            </ul>
                            <p><strong>SKU:</strong>N/A</p>
                            <p><strong>Category:</strong><a href="#">Woman</a>,<a href="#">Top</a></p>
                        </div>
                        <div class="ps-product__divider"></div>
                        <p class="ps-product__sharing">Share:<a href="#"><i class="fa fa-facebook"></i></a><a
                                href="#"><i class="fa fa-twitter"></i></a><a href="#"><i
                                    class="fa fa-instagram"></i></a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-product__content">
            <div class="ps-container-fluid">
                <ul class="tab-list" role="tablist">
                    <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab"
                                          data-toggle="tab">Description</a></li>
                    <li><a href="#tab_02" aria-controls="tab_02" role="tab" data-toggle="tab">Details</a></li>
                    <li><a href="#tab_03" aria-controls="tab_03" role="tab" data-toggle="tab">Reviews(2)</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="tab_01">
                        <div class="ps-content">
                            <p><strong>Duis rutrum, ante id volutpat vehicula, ante enim luctus dolor, id tincidunt mi
                                    augue quis est.</strong></p>
                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt
                                mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et
                                mollis. Sed sit amet eros vel orci porta maximus non commodo mi. Morbi tincidunt dolor
                                elit, a condimentum tortor facilisis sed.</p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_02">
                        <div class="ps-content">
                            <p><strong>Duis rutrum, ante id volutpat vehicula, ante enim luctus dolor, id tincidunt mi
                                    augue quis est.</strong></p>
                            <p>Maecenas quis convallis velit. Aliquam laoreet leo non viverra tempor. Aliquam tincidunt
                                mollis lacus, in condimentum ante scelerisque eu. Integer dapibus commodo elit et
                                mollis. Sed sit amet eros vel orci porta maximus non commodo mi. Morbi tincidunt dolor
                                elit, a condimentum tortor facilisis sed.</p>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab_03">
                        <p class="mb-20">0 review for <strong>Smocked blouse</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--relate-products">
        <div class="ps-container-fluid">
            <div class="ps-section__header text-center mb-80">
                <h3 class="ps-heading">Related Products</h3>
            </div>
            <div class="ps-slider--related-products owl-slider" data-owl-auto="true" data-owl-loop="true"
                 data-owl-speed="5000" data-owl-gap="20" data-owl-nav="true" data-owl-dots="false" data-owl-item="6"
                 data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1"
                 data-owl-duration="1000" data-owl-mousedrag="on"
                 data-owl-nav-left="&lt;i class='exist-leftarrow'&gt;&lt;/i&gt;"
                 data-owl-nav-right="&lt;i class='exist-rightarrow'&gt;&lt;/i&gt;">
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail">
                        <div class="ps-badge ps-badge--hot"><span>hot</span></div>
                        <div class="ps-badge ps-badge--sale-off ps-badge--2nd"><span>-25%</span></div>
                        <img src="/assets/images/product/home-1/1.jpg" alt=""><a class="ps-btn ps-product__shopping"
                                                                                 href="#"><i class="exist-minicart"></i>Add
                            to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> T-shirt
                            with slogan</a><span class="ps-product__price">$5250.00</span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail"><img src="/assets/images/product/home-1/2.jpg" alt=""><a
                            class="ps-btn ps-product__shopping" href="#"><i class="exist-minicart"></i>Add to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> White
                            crossbody bag</a><span class="ps-product__price">$1250.00</span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail">
                        <div class="ps-badge ps-badge--new"><span>New</span></div>
                        <img src="/assets/images/product/home-1/3.jpg" alt=""><a class="ps-btn ps-product__shopping"
                                                                                 href="#"><i class="exist-minicart"></i>Add
                            to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> Velvet
                            backpack</a><span class="ps-product__price">$5250.00</span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail">
                        <div class="ps-badge ps-badge--new"><span>New</span></div>
                        <div class="ps-badge ps-badge--sale-off ps-badge--2nd"><span>-25%</span></div>
                        <img src="/assets/images/product/home-1/4.jpg" alt=""><a class="ps-btn ps-product__shopping"
                                                                                 href="#"><i class="exist-minicart"></i>Add
                            to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> Square
                            cream sunglasses</a><span class="ps-product__price">$5250.00
                    <del>$725.00</del></span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail"><img src="/assets/images/product/home-1/5.jpg" alt=""><a
                            class="ps-btn ps-product__shopping" href="#"><i class="exist-minicart"></i>Add to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> Shirt
                            Regular fit</a><span class="ps-product__price">$95.00
                    <del>$725.00</del></span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail"><img src="/assets/images/product/home-1/6.jpg" alt=""><a
                            class="ps-btn ps-product__shopping" href="#"><i class="exist-minicart"></i>Add to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> T-shirt
                            with slogan</a><span class="ps-product__price">$1250.00
                    <del>$725.00</del></span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail"><img src="/assets/images/product/home-1/7.jpg" alt=""><a
                            class="ps-btn ps-product__shopping" href="#"><i class="exist-minicart"></i>Add to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> Leather
                            brown belt</a><span class="ps-product__price">$350.00</span>
                    </div>
                </div>
                <div class="ps-product--1" data-mh="product-item">
                    <div class="ps-product__thumbnail">
                        <div class="ps-badge ps-badge--new"><span>New</span></div>
                        <img src="/assets/images/product/home-1/8.jpg" alt=""><a class="ps-btn ps-product__shopping"
                                                                                 href="#"><i class="exist-minicart"></i>Add
                            to cart</a>
                        <ul class="ps-product__actions">
                            <li><a href="#" data-label="Favorite"><i class="exist-heart"></i></a></li>
                            <li><a href="#" data-label="Compare"><i class="exist-compare"></i></a></li>
                            <li><a class="ps-modal-trigger" href="#quick-view" data-label="Quick View"><i
                                        class="exist-quickview"></i></a></li>
                        </ul>
                    </div>
                    <div class="ps-product__content"><a class="ps-product__title" href="product-detail-1.html"> Denim
                            shorts</a><span class="ps-product__price">$5250.00</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-subscribe--2 bg--cover" data-background="images/background/subscribe-2.jpg">
        <div class="container">
            <form class="ps-form--subscribe-2" action="do_action" method="post">
                <h3 class="ps-heading">Get 15% Off Your Next Order</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed fermentum nibh,
                    <br> vel aliquet massa. Etiam in magna id risus lacinia luctus eget eu est.</p>
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Your Email Address">
                    <button class="ps-btn">Sign up now</button>
                </div>
            </form>
        </div>
    </div>

@endsection
