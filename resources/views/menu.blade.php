@extends('layout.master')
@section('content')
    <!-- Page Header Start -->
    <!-- <div class="container-fluid bg-dark bg-img p-5 mb-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 text-uppercase text-white">Menu & Pricing</h1>
                <a href="">Home</a>
                <i class="far fa-square text-primary px-2"></i>
                <a href="">Menu & Pricing</a>
            </div>
        </div>
    </div> -->
    <!-- Page Header End -->


    <!-- Products Start -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Menu & Pricing</h2>
                <h1 class="display-4 text-uppercase">Explore Our Cakes</h1>
            </div>
            <div class="row">
                <div class="col-md-2">
                @foreach($dulieu as $row)
                    <div class="form-check">
                        <input class="cateCheck form-check-input" name="cateCheck" type="checkbox" value="{{ $row->type_name }}" id="{{ $row->type_id }}" >
                        <label class="form-check-label" for="{{ $row->type_id }}">{{ $row->type_name }}</label>
                    </div>
                    @endforeach
                </div>
                <div class="col-md-10">
                    <div class="list-product row">
                    @foreach($sp_theoloai as $sp)
                                    <div class="product mb-5 col-xs-3 col-md-4">
										<div class="product-img">
											<img src="../img/{{ $sp-> image }}" alt="" >
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
									    </div>
										<div class="product-body">
                                            <div class="product-btns">
												<button class="add-to-wishlist"><i class="fa fa-heart"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
											<h3 class="product-name"><a href="#">{{ $sp-> product_name }}</a></h3>
											<h4 class="product-price"> {{ $sp-> price }} <del class="product-old-price">$990.00</del></h4>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
										</div>
									</div>
                    
                    @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-class text-center">
                <!-- <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active ">
                        <div class="row g-3">
                            <div class="col-lg-6"> 
                                <div class="d-flex h-100">
                                    <div class="flex-shrink-0">
                                        <img class="img-fluid" src="img/" alt="" style="width: 200px; height: 185px;">
                                        <h4 class="bg-dark text-primary p-2 m-0"></h4>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center text-start bg-secondary border-inner px-4">                                    
                                        <h5 class="text-uppercase"></h5>
                                        <h5 class="text-uppercase"></h5>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title position-relative text-center mx-auto mb-4 pb-3" style="max-width: 600px;">
                        <h2 class="text-primary font-secondary">Special Kombo Pack</h2>
                        <h1 class="display-4 text-uppercase text-white">Super Crispy Cakes</h1>
                    </div>
                    <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="" class="btn btn-primary border-inner py-3 px-5 me-3">Shop Now</a>
                    <a href="" class="btn btn-dark border-inner py-3 px-5">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->

    @endsection