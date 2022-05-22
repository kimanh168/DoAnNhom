@extends('layout.master')
@section('content')
<!-- SECTION -->
<div class="section">
			<!-- container -->
			<div class="container-fluid about py-5">
                <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                    <h2 class="text-primary font-secondary">Great Choice</h2>
                    <h1 class="display-4 text-uppercase">{{ $thongtinsp -> product_name  }}</h1>
                </div>
            <div class="container">
                <!-- row -->
                <div class="row">
                        <!--  Details -->
                        <div class="col-md-6">
                            <div class="billing-details">
                                <div class="product-img" style="margin-left:50px">
                                    <img src="/img/{{ $thongtinsp -> image  }}" width="400px">
                                </div>
                            </div>
                            <!--  Details -->
                        </div>
                        <!-- Order Details -->
                        <div class="col-md-6 order-details">
                            <div class="section-title text-center">
                                <h3 class="title">Detail</h3>
                            </div>
                            <div class="order-summary">
                                <div class="order-col">
                                    <div><strong>Giá</strong></div>
                                    <div><h5 class="text-primary">{{ number_format($thongtinsp -> price,0,',','.')  }} VND</h5></div>
                                </div>
                                <div class="order-products">
                                    <div class="order-col">
                                        <div><strong>Loại bánh</strong></div>
                                        <div><strong>{{ $thongtinsp ->protype-> type_name  }}</strong></div>
                                    </div>
                                    <form action="{{route('cart.add',['id' => $thongtinsp->id])}}" method="get">
                                        <div class="order-col">
                                            <div><strong>Số Lượng Mua</strong></div>
                                            <div><input id="quantity" name="quantity" type="number" min="0" class="form-control" placeholder="Số Lượng" ></div>
                                        </div>
                                    <div class="order-col">
                                        <div><strong>Hạn dử dụng</strong></div>
                                        <div><span class="badge bg-primary"><strong>{{ $thongtinsp ->expiry  }} Ngày</strong></span> </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                                        <input name="submit" type="submit" value="Add to cart" class="btn btn-primary border-inner py-3 px-5 me-5">
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <div class="payment-method">
                                <h4 class="title">Mô Tả</h4></br>
                                <p>{{ $thongtinsp -> description  }}</p>
                            </div>
                        </div>
					<!-- /Order Details -->
                    </div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
         <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Testimonial</h2>
                <h1 class="display-4 text-uppercase">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <form action="" method="post">
                        <input type="text">
                        <input type="button">
                    </form>
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                </div>
                <div class="testimonial-item bg-dark text-white border-inner p-4">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid flex-shrink-0" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;">
                        <div class="ps-3">
                            <h4 class="text-primary text-uppercase mb-1">Client Name</h4>
                            <span>Profession</span>
                        </div>
                    </div>
                    <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    <div class="container-fluid about py-5">
        <div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Other products in the same category</h2>
            </div>
            <div class="tab-class text-center">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active ">
                        <!-- Products tab & slick -->
							<!-- tab -->
                            <div class="row multiple-items ">
									<!-- product -->
                                    @foreach($sp_cungloai as $row)
									<div class="product mb-5 col-xs-3">
										<div class="product-img">
											<img class="newProductsImg" src="/img/{{ $row-> image }}" alt="" style="margin: 0 auto">
												<div class="product-label">
                                                    @if( $row-> promotion != 0 )
                                                        <span class="sale">-{{ $row-> promotion }}%</span>
                                                    @endif
                                                    <span class="new">NEW</span>
												</div>
									    </div>
										<div class="product-body">
											<h3 class="product-name"><a href="{{ route('thongtinsp',$row->id) }}">{{ $row-> product_name }}</a></h3>
                                            @if( $row-> promotion != 0 )
                                                <h4 class="product-price"> {{ number_format($row->sale_price,0,',','.') }} VND <del class="product-old-price">{{ number_format($row->price,0,',','.') }}</del></h4>
                                            @else
                                            <h4 class="product-price"> {{ number_format($row->price,0,',','.') }} VND</h4>
                                            @endif
											
										</div>
										<div class="add-to-cart">
                                            <a href="{{ route('cart.add',['id' => $row->id]) }}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>Add cart</button></a>
										</div>
									</div>
									<!-- /product -->
                                    @endforeach
							</div>  
                            <!-- Products tab & slick -->
					</div>
                </div>
            </div>
        </div>
    </div>
@endsection