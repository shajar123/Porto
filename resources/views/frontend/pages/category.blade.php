@extends('frontend.layout.layout')
@section('body')
    <div class="page-wrapper">

        <!-- End .top-notice -->


        <!-- End .header -->

        <main class="main">
            <div class="category-banner-container bg-gray">
                <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('assets/images/banners/banner-top.jpg');">
                    <div class="container position-relative">
                        <div class="row">
                            <div class="pl-lg-5 pb-5 pb-md-0 col-sm-5 col-xl-4 col-lg-4 offset-1">
                                <h3>Electronic<br>Deals</h3>
                                <a href="category.html" class="btn btn-dark">Get Yours!</a>
                            </div>
                            <div class="pl-lg-3 col-sm-4 offset-sm-0 offset-1 pt-3">
                                <div class="coupon-sale-content">
                                    <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                                    </h4>
                                    <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-dark">$100</b> OFF</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <nav aria-label="breadcrumb" class="breadcrumb-nav">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Men</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-9 main-content">
                        <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                            <div class="toolbox-left">
                                <a href="#" class="sidebar-toggle">
                                    <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
										<line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
										<line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
										<line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
										<line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
										<line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
										<line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
										<path
											d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
										<path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
										<path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
										<path
											d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
											class="cls-2"></path>
									</svg>
                                    <span>Filter</span>
                                </a>

                                <div class="toolbox-item toolbox-sort">
                                    <label>Sort By:</label>

                                    <div class="select-custom">
                                        <select name="orderby" class="form-control">
											<option value="menu_order" selected="selected">Default sorting</option>
											<option value="popularity">Sort by popularity</option>
											<option value="rating">Sort by average rating</option>
											<option value="date">Sort by newness</option>
											<option value="price">Sort by price: low to high</option>
											<option value="price-desc">Sort by price: high to low</option>
										</select>
                                    </div>
                                    <!-- End .select-custom -->


                                </div>
                                <!-- End .toolbox-item -->
                            </div>
                            <!-- End .toolbox-left -->

                            <div class="toolbox-right">
                                <div class="toolbox-item toolbox-show">
                                    <label>Show:</label>

                                    <div class="select-custom">
                                        <select name="count" class="form-control">
											<option value="12">12</option>
											<option value="24">24</option>
											<option value="36">36</option>
										</select>
                                    </div>
                                    <!-- End .select-custom -->
                                </div>
                                <!-- End .toolbox-item -->

                                <div class="toolbox-item layout-modes">
                                    <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                        <i class="icon-mode-grid"></i>
                                    </a>
                                    <a href="category-list.html" class="layout-btn btn-list" title="List">
                                        <i class="icon-mode-list"></i>
                                    </a>
                                </div>
                                <!-- End .layout-modes -->
                            </div>
                            <!-- End .toolbox-right -->
                        </nav>

                        <div class="row">
                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-1.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-1-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Ultimate 3D Bluetooth
												Speaker</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-2.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-2-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Brown Women Casual HandBag</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="product-price">$33.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-3.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-3-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-20%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Circled Ultimate 3D
												Speaker</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>

                                        </div>
                                        <!-- End .price-box -->
                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-4.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-4-2.jpg')}}" width="280" height="280" alt="product">
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-30%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Blue Backpack for the Young -
												S</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-5.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-5-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Casual Spring Blue Shoes</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-6.jpg')}}" width="280" height="280" alt="product">
                                            <img src="{{asset('frontend/images/products/product-6-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-8%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Men Black Gentle Belt</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-7.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-7-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-8%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual
												Glasses</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-8.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-8-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-40%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Brown-Black Men Casual
												Glasses</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-9.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-9-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Black Men Casual Glasses</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="product.html" class="btn-icon btn-add-cart"><i
													class="fa fa-arrow-right"></i><span>SELECT
													OPTIONS</span></a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-10.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-10-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-sale">-30%</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Basketball Sports Blue
												Shoes</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-11.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-11-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Men Sports Travel Bag</a>
                                        </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->

                            <div class="col-6 col-sm-4">
                                <div class="product-default">
                                    <figure>
                                        <a href="product.html">
                                            <img src="{{asset('frontend/images/products/product-12.jpg')}}" width="280" height="280" alt="product" />
                                            <img src="{{asset('frontend/images/products/product-12-2.jpg')}}" width="280" height="280" alt="product" />
                                        </a>

                                        <div class="label-group">
                                            <div class="product-label label-hot">HOT</div>
                                        </div>
                                    </figure>

                                    <div class="product-details">
                                        <div class="category-wrap">
                                            <div class="category-list">
                                                <a href="category.html" class="product-category">category</a>
                                            </div>
                                        </div>

                                        <h3 class="product-title"> <a href="product.html">Brown HandBag</a> </h3>

                                        <div class="ratings-container">
                                            <div class="product-ratings">
                                                <span class="ratings" style="width:100%"></span>
                                                <!-- End .ratings -->
                                                <span class="tooltiptext tooltip-top"></span>
                                            </div>
                                            <!-- End .product-ratings -->
                                        </div>
                                        <!-- End .product-container -->

                                        <div class="price-box">
                                            <span class="old-price">$90.00</span>
                                            <span class="product-price">$70.00</span>
                                        </div>
                                        <!-- End .price-box -->

                                        <div class="product-action">
                                            <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
													class="icon-heart"></i></a>
                                            <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
													class="icon-shopping-cart"></i>ADD TO CART</a>
                                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View"><i class="fas fa-external-link-alt"></i></a>
                                        </div>
                                    </div>
                                    <!-- End .product-details -->
                                </div>
                            </div>
                            <!-- End .col-sm-4 -->
                        </div>
                        <!-- End .row -->

                        <nav class="toolbox toolbox-pagination">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
										<option value="12">12</option>
										<option value="24">24</option>
										<option value="36">36</option>
									</select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->

                            <ul class="pagination toolbox-item">
                                <li class="page-item disabled">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>
                                </li>
                                <li class="page-item active">
                                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><span class="page-link">...</span></li>
                                <li class="page-item">
                                    <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- End .col-lg-9 -->

                    <div class="sidebar-overlay"></div>
                    <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                        <div class="sidebar-wrapper">
                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                                </h3>

                                <div class="collapse show" id="widget-body-2">
                                    <div class="widget-body">
                                        <ul class="cat-list">
                                            <li>
                                                <a href="#widget-category-1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="widget-category-1">
													Accessories<span class="products-count">(3)</span>
													<span class="toggle"></span>
												</a>
                                                <div class="collapse show" id="widget-category-1">
                                                    <ul class="cat-sublist">
                                                        <li>Caps<span class="products-count">(1)</span></li>
                                                        <li>Watches<span class="products-count">(2)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-2" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-2">
													Dress<span class="products-count">(4)</span>
													<span class="toggle"></span>
												</a>
                                                <div class="collapse" id="widget-category-2">
                                                    <ul class="cat-sublist">
                                                        <li>Clothing<span class="products-count">(4)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-3" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-3">
													Electronics<span class="products-count">(2)</span>
													<span class="toggle"></span>
												</a>
                                                <div class="collapse" id="widget-category-3">
                                                    <ul class="cat-sublist">
                                                        <li>Headphone<span class="products-count">(1)</span></li>
                                                        <li>Watch<span class="products-count">(1)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#widget-category-4" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-4">
													Fashion<span class="products-count">(6)</span>
													<span class="toggle"></span>
												</a>
                                                <div class="collapse" id="widget-category-4">
                                                    <ul class="cat-sublist">
                                                        <li>Shoes<span class="products-count">(4)</span></li>
                                                        <li>Bag<span class="products-count">(2)</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="#">Music<span class="products-count">(2)</span></a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                                </h3>

                                <div class="collapse show" id="widget-body-3">
                                    <div class="widget-body pb-0">
                                        <form action="#">
                                            <div class="price-slider-wrapper">
                                                <div id="price-slider"></div>
                                                <!-- End #price-slider -->
                                            </div>
                                            <!-- End .price-slider-wrapper -->

                                            <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                                <div class="filter-price-text">
                                                    Price:
                                                    <span id="filter-price-range"></span>
                                                </div>
                                                <!-- End .filter-price-text -->

                                                <button type="submit" class="btn btn-primary">Filter</button>
                                            </div>
                                            <!-- End .filter-price-action -->
                                        </form>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-color">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Color</a>
                                </h3>

                                <div class="collapse show" id="widget-body-4">
                                    <div class="widget-body pb-0">
                                        <ul class="config-swatch-list">
                                            <li class="active">
                                                <a href="#" style="background-color: #000;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #0188cc;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #81d742;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #6085a5;"></a>
                                            </li>
                                            <li>
                                                <a href="#" style="background-color: #ab6e6e;"></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-size">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
                                </h3>

                                <div class="collapse show" id="widget-body-5">
                                    <div class="widget-body pb-0">
                                        <ul class="config-size-list">
                                            <li class="active"><a href="#">XL</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">S</a></li>
                                        </ul>
                                    </div>
                                    <!-- End .widget-body -->
                                </div>
                                <!-- End .collapse -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-featured">
                                <h3 class="widget-title">Featured</h3>

                                <div class="widget-body">
                                    <div class="owl-carousel widget-featured-products">
                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{asset('frontend/images/products/small/product-4.jpg')}}" width="75" height="75" alt="product" />
                                                        <img src="{{asset('frontend/images/products/small/product-4-2.jpg')}}" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Blue Backpack for
															the Young - S</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{asset('frontend/images/products/small/product-5.jpg')}}" width="75" height="75" alt="product" />
                                                        <img src="{{asset('frontend/images/products/small/product-5-2.jpg')}}" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Casual Spring Blue
															Shoes</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{asset('frontend/images/products/small/product-6.jpg')}}" width="75" height="75" alt="product" />
                                                        <img src="{{asset('frontend/images/products/small/product-6-2.jpg')}}" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Men Black Gentle
															Belt</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->

                                        <div class="featured-col">
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{asset('frontend/images/products/small/product-1.jpg')}}" width="75" height="75" alt="product" />
                                                        <img src="{{asset('frontend/images/products/small/product-1-2.jpg')}}" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Ultimate 3D
															Bluetooth Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{asset('frontend/images/products/small/product-2.jpg')}}" width="75" height="75" alt="product" />
                                                        <img src="{{asset('frontend/images/products/small/product-2-2.jpg')}}" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Brown Women Casual
															HandBag</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                            <div class="product-default left-details product-widget">
                                                <figure>
                                                    <a href="product.html">
                                                        <img src="{{asset('frontend/images/products/small/product-3.jpg')}}" width="75" height="75" alt="product" />
                                                        <img src="{{asset('frontend/images/products/small/product-3-2.jpg')}}" width="75" height="75" alt="product" />
                                                    </a>
                                                </figure>
                                                <div class="product-details">
                                                    <h3 class="product-title"> <a href="product.html">Circled Ultimate
															3D Speaker</a> </h3>
                                                    <div class="ratings-container">
                                                        <div class="product-ratings">
                                                            <span class="ratings" style="width:100%"></span>
                                                            <!-- End .ratings -->
                                                            <span class="tooltiptext tooltip-top"></span>
                                                        </div>
                                                        <!-- End .product-ratings -->
                                                    </div>
                                                    <!-- End .product-container -->
                                                    <div class="price-box">
                                                        <span class="product-price">$49.00</span>
                                                    </div>
                                                    <!-- End .price-box -->
                                                </div>
                                                <!-- End .product-details -->
                                            </div>
                                        </div>
                                        <!-- End .featured-col -->
                                    </div>
                                    <!-- End .widget-featured-slider -->
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .widget -->

                            <div class="widget widget-block">
                                <h3 class="widget-title">Custom HTML Block</h3>
                                <h5>This is a custom sub-title.</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
                            </div>
                            <!-- End .widget -->
                        </div>
                        <!-- End .sidebar-wrapper -->
                    </aside>
                    <!-- End .col-lg-3 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->

            <div class="mb-4"></div>
            <!-- margin -->
        </main>
        <!-- End .main -->


        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->



    <div class="mobile-menu-overlay"></div>
    <!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo4.html">Home</a></li>
                    <li>
                        <a href="category.html">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
										class="tip tip-new">New</span></a></li>
                            <li><a href="category.html">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
							Special Offer!
						</a>
                    </li>
                    <li class="border-0">
                        <a href="#" target="_blank">
							Buy Porto!
							<span class="tip tip-hot">Hot</span>
						</a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav>
            <!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank">
                </a>
            </div>
        </div>
        <!-- End .mobile-menu-wrapper -->
    </div>
    <!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo4.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="category.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
					<span class="cart-count badge-circle">3</span>
				</i>Cart
            </a>
        </div>
    </div>

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
@endsection
