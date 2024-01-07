@extends('frontend.layout.master')
@section('content')
    <!-- main content -->
    <div class="main-content">
        <div class="wrap-banner">
            <!-- slide show -->
            <div class="section banner">
                <div class="tiva-slideshow-wrapper">
                    <div id="tiva-slideshow" class="nivoSlider">
                        <a href="#">
                            <img class="img-responsive" src="/assets/frontend/img/home/home1-banner1.jpg" title="#caption1" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/assets/frontend/img/home/home1-banner2.jpg" title="#caption2" alt="Slideshow image">
                        </a>
                        <a href="#">
                            <img class="img-responsive" src="/assets/frontend/img/home/home1-banner3.jpg" title="#caption3" alt="Slideshow image">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- main -->
        <div id="wrapper-site">
            <div id="content-wrapper" class="full-width">
                <div id="main">
                    <section class="page-home">
                        <div class="container">

                            <!-- delivery form -->
                            <div class="section policy-home col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy1">
                                                        <img src="/assets/frontend/img/home/home1-policy.png" alt="img">
                                                        <div class="policy-name mb-5">Miễn phí vận chuyển từ 499,000đ</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy2">
                                                        <img src="/assets/frontend/img/home/home1-policy2.png" alt="img">
                                                        <div class="policy-name mb-5">Cam kết hàng chính hãng</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tiva-html col-lg-4 col-md-4">
                                        <div class="block">
                                            <div class="block-content">
                                                <div class="policy-item">
                                                    <div class="policy-content iconpolicy3">
                                                        <img src="/assets/frontend/img/home/home1-policy3.png" alt="img">
                                                        <div class="policy-name mb-5">Đảm bảo hoàn tiền</div>
                                                        <div class="policy-des">Lorem ipsum dolor amet consectetur</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product living room -->
                        <div class="section living-room">
                            <div class="container">
                                <div class="tiva-row-wrap row">
                                    <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                        <div class="grouptab row">
                                            <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                <div class="block-title-content">
                                                    <h2 class="title-block">
                                                        Living Room
                                                    </h2>
                                                </div>
                                                <!-- <div class="btn dropdown-toggle toggle-cate-child-vertical hidden-md-up mr-auto">Select category</div> -->
                                                <div class="cate-child-vertical">
                                                    <ul class="d-flex align-items-start flex-column">
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">SIDE TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">FIREPLACE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">FLOOR LAMP</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">OTTOMAN</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">ARMCHAIR</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">CUSHION</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">DRESSING TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">WALL CLOCK</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">BEDSIDE TABLE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">PICTURE</a>
                                                        </li>
                                                        <li>
                                                            <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                        </li>
                                                        <li class="last float-right">
                                                            <a href="product-grid-sidebar-left.html">View all</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                <div class="title-tab-content d-flex justify-content-start">
                                                    <ul class="nav nav-tabs">
                                                        <li>
                                                            <a href="#new" data-toggle="tab" class="active">New Arrivals</a>
                                                        </li>
                                                        <li>
                                                            <a href="#best" data-toggle="tab">Best Sellers</a>
                                                        </li>
                                                        <li>
                                                            <a href="#sale" data-toggle="tab">Special Products</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="new" class="tab-pane fade in active show">
                                                        <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                            <div class="item text-center">
                                                                <div class="product-miniature first-item js-product-miniature item-one">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/1.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/5.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/3.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/9.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/2.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/17.jpg" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Phasellus vitae...</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="best">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/4.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/10.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nam semper a ligula nec</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/5.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/12.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-10%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/6.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/13.jpg" alt="img">
                                                                        </a>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="tab-pane fade" id="sale">
                                                        <div class="category-product-index owl-carousel owl-theme">
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/7.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/14.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-30%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/8.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/15.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="item text-center">
                                                                <div class="product-miniature js-product-miniature item-one first-item">
                                                                    <div class="thumbnail-container">
                                                                        <a href="product-detail.html">
                                                                            <img class="img-fluid image-cover" src="/assets/frontend/img/product/9.jpg" alt="img">
                                                                            <img class="img-fluid image-secondary" src="/assets/frontend/img/product/16.jpg" alt="img">
                                                                        </a>
                                                                        <div class="product-flags discount">-20%</div>
                                                                        <div class="highlighted-informations">
                                                                            <div class="variant-links">
                                                                                <a href="#" class="color beige" title="Beige"></a>
																				<a href="#" class="color orange" title="Orange"></a>
																				<a href="#" class="color green" title="Green"></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-description">
                                                                        <div class="product-groups">
                                                                            <div class="product-title">
                                                                                <a href="product-detail.html">Nulla et justo non augue</a>
                                                                            </div>
                                                                            <div class="rating">
                                                                                <div class="star-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                    <div class="star"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-group-price">
                                                                                <div class="product-price-and-shipping">
                                                                                    <span class="price">£20.08</span>
                                                                                    <del class="regular-price">£28.68</del>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-buttons d-flex justify-content-center">
                                                                            <form action="#" method="post" class="formAddToCart">
                                                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                </a>
                                                                            </form>
                                                                            <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                                                            </a>
                                                                            <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <!-- banner -->
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect1.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect2.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- best seller -->
                            <div class="section best-sellers col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="groupproductlist">
                                            <div class="row d-flex align-items-center">
                                                <!-- column 4 -->
                                                <div class="flex-4 col-lg-4 flex-4">
                                                    <h2 class="title-block">
                                                        <span class="sub-title">Sản phẩm bán chạy</span>Bán chạy
                                                    </h2>
                                                    <div class="content-text">
                                                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                            tempor incididunt ut labore dolore magna aliqua.
                                                        </p>
                                                        <div>
                                                            <a href="product-grid-sidebar-left.html"> Tất cả sản phẩm</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- column 8 -->
                                                <div class="block-content col-lg-8 flex-8">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                @foreach ($topSellingProducts as $index=>$product)
                                                                    @if ($index % 2 == 0)
                                                                    <div class="item text-center">
                                                                    @endif
                                                                        @include('frontend.layout.product-info')
                                                                    @if ($index % 2 != 0 || $index == count($topSellingProducts) - 1)
                                                                    </div>
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- product kitchen -->
                        <div class="section kitchen">
                            <div class="living-room">
                                <div class="container">
                                    <div class="tiva-row-wrap row">
                                        <div class="groupcategoriestab-vertical col-md-12 col-xs-12">
                                            <div class="grouptab row">
                                                <!-- column 3 -->
                                                <div class="categoriestab-right col-lg-3 align-items-start d-flex flex-column col-md-3 flex-3">
                                                    <div class="block-title-content">
                                                        <h2 class="title-block">
                                                            Kitchen
                                                        </h2>
                                                    </div>
                                                    <div class="cate-child-vertical">
                                                        <ul class="d-flex align-items-start flex-column">
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Kitchen Shears</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Colander</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Mixing Bowls</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Grater</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Vegetable Peeler</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Rolling Pin</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Baking Sheet</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Oven Mitts</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Dutch Oven</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">Salad Bowl</a>
                                                            </li>
                                                            <li>
                                                                <a href="product-grid-sidebar-left.html">WINDOW</a>
                                                            </li>
                                                            <li class="last float-right">
                                                                <a href="product-grid-sidebar-left.html">View All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- column 9 -->
                                                <div class="categoriestab-left product-tab col-md-9 flex-9">
                                                    <div class="title-tab-content d-flex justify-content-start">
                                                        <ul class="nav nav-tabs">
                                                            <li>
                                                                <a href="#new_kitchen" data-toggle="tab" class="active">New Arrivals</a>
                                                            </li>
                                                            <li>
                                                                <a href="#best_kitchen" data-toggle="tab">Best Sellers</a>
                                                            </li>
                                                            <li>
                                                                <a href="#sale_kitchen" data-toggle="tab">Special Products</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-content">
                                                        <!-- new kitchen -->
                                                        <div id="new_kitchen" class="tab-pane fade in active show">
                                                            <div class="category-product-index owl-carousel owl-theme owl-loaded owl-drag">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/6.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/4.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/11.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-10%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">

                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/16.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/14.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">

                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- best kitchen -->
                                                        <div id="best_kitchen" class="tab-pane fade">
                                                            <div class="category-product-index owl-carousel owl-theme">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/8.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/13.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/4.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/12.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-10%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/13.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/6.jpg" alt="img">
                                                                            </a>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- sale kitchen -->
                                                        <div id="sale_kitchen" class="tab-pane fade">
                                                            <div class="category-product-index owl-carousel owl-theme">
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/10.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/8.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-30%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/11.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/14.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-20%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="item text-center">
                                                                    <div class="product-miniature js-product-miniature item-one first-item">
                                                                        <div class="thumbnail-container">
                                                                            <a href="product-detail.html">
                                                                                <img class="img-fluid image-cover" src="/assets/frontend/img/product/6.jpg" alt="img">
                                                                                <img class="img-fluid image-secondary" src="/assets/frontend/img/product/16.jpg" alt="img">
                                                                            </a>
                                                                            <div class="product-flags discount">-20%</div>
                                                                            <div class="highlighted-informations">
                                                                                <div class="variant-links">
                                                                                    <a href="#" class="color beige" title="Beige"></a>
																					<a href="#" class="color orange" title="Orange"></a>
																					<a href="#" class="color green" title="Green"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                            <div class="product-groups">
                                                                                <div class="product-title">
                                                                                    <a href="product-detail.html">Nulla et justo non augue</a>
                                                                                </div>
                                                                                <div class="rating">
                                                                                    <div class="star-content">
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="product-group-price">
                                                                                    <div class="product-price-and-shipping">
                                                                                        <span class="price">£20.08</span>
                                                                                        <del class="regular-price">£28.68</del>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-buttons d-flex justify-content-center">
                                                                                <form action="#" method="post" class="formAddToCart">
                                                                                    <input type="hidden" name="id_product" value="1">
                                                                                    <a class="add-to-cart" href="#" data-button-action="add-to-cart">
                                                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                                                    </a>
                                                                                </form>
                                                                                <a class="addToWishlist" href="#" data-rel="1" onclick="">
                                                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                                                </a>
                                                                                <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- banner -->
                        <div class="container">
                            <div class="section spacing-10 group-image-special col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect3.jpg" alt="banner-1" title="banner-1">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="effect">
                                            <a href="#">
                                                <img class="img-fluid" src="/assets/frontend/img/home/effect4.jpg" alt="banner-2" title="banner-2">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- testimonial -->
                            <div class="section testimonial-block col-lg-12 col-xs-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 ">
                                        <div class="block">
                                            <div class="owl-carousel owl-theme testimonial-type-one">
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">David Jame</h5>
                                                            <p class="box-dress">DESIGNER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">Max Control</h5>
                                                            <p class="box-dress">DEVELOPER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">John Do</h5>
                                                            <p class="box-dress">CSS - HTML</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item type-one d-flex align-items-center flex-column">
                                                    <div class="textimonial-image">
                                                        <i class="icon-testimonial"></i>
                                                    </div>
                                                    <div class="desc-testimonial">
                                                        <div class="testimonial-content">
                                                            <div class="text">
                                                                <p>" Liquam quis risus viverra, ornare ipsum vitae, congue tellus.
                                                                    Vestibulum nunc lorem, scelerisque a tristique non, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum, accumsan
                                                                    ornare eros. Nullam sapien metus, volutpat dictum "</p>
                                                            </div>
                                                        </div>
                                                        <div class="testimonial-info">
                                                            <h5 class="mt-0 box-info">Elizabeth Pham</h5>
                                                            <p class="box-dress">DEVELOPER</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- SHOP THE LOOK -->
                        <div class="section spacing-10 groupbanner-special ">
                            <div class="title-block">
                                <span class="sub-title">shop the lookbook</span>
                                <span>SHOP THE LOOK</span>
                                <span>Our Lookbook 2018
                                    <br> hand-picked arrivals from
                                    <br>the best designer</span>
                            </div>
							
                            <div class="row">
                                <div class="tiva-lookbook default col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="/assets/frontend/img/home/home1-tolltip1.jpg" alt="lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
                                <!-- Module Lookbooks -->
                                <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="/assets/frontend/img/home/home1-tolltip2.jpg" alt="lookbook">
                                            </div>
                                            <div class="info-lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Module Lookbooks -->
                                <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="/assets/frontend/img/home/home1-tolltip3.jpg" alt="lookbook">
                                            </div>
											
                                            <div class="info-lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Module Lookbooks -->
                                <div class="tiva-lookbook default  col-lg-6 col-md-6 col-xs-12">
                                    <div class="row">
                                        <div class="items col-lg-12 col-sm-12 col-xs-12">
                                            <div class="tiva-content-lookbook">
                                                <img class="img-fluid img-responsive" src="/assets/frontend/img/home/home1-tolltip4.jpg" alt="lookbook">
                                            </div>
											
                                            <div class="info-lookbook">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- recent posts -->
                        <div class="container">
                            <div class="section recent-post">
                                <div class="title-block">Tin tức và sự kiện</div>
                                <div class="row">
                                    @foreach ($newPosts as $post)
                                    <div class="col-md-4">
                                        <div class="item-post">
                                            <div class="thumbnail-img">
                                                <a href="{{route('blog.detail', $post)}}">
                                                    <img src="{{$post->thumbnail}}" alt="img" width="100%">
                                                </a>
                                            </div>
                                            <div class="post-content">
                                                <div class="post-info">
                                                    <span class="comment">
                                                        <i class="fa fa-comments-o" aria-hidden="true"></i>
                                                        <span>{{$post->view}} lượt xem</span>
                                                    </span>
                                                    <span class="datetime">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        <span>{{date_format($post->created_at, 'd/m/Y')}}</span>
                                                    </span>
                                                </div>
                                                <div class="post-title">
                                                    <a href="{{route('blog.detail', $post)}}">{{$post->title}}</a>
                                                </div>
                                                <div class="post-desc">
                                                    {{$post->shortContent($post->content)}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>

                            <!-- partner -->
                            <div class="section introduct-logo">
                                <div class="row">
                                    <div class="tiva-manufacture  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="block">
                                            <div id="manufacture" class="owl-carousel owl-theme owl-loaded owl-drag">
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo1.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo2.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo3.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo4.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo5.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="logo-manu">
                                                        <a href="#" title="view products">
                                                            <img class="img-fluid" src="/assets/frontend/img/home/icon-logo6.jpg" alt="img" />
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
