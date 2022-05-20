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
				<form action="addcart.php?id" method="POST" >
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
                                    <div><strong class="order-total">{{ number_format($thongtinsp -> price,0,',','.')  }}VND</strong></div>
                                </div>
                                <div class="order-products">
                                    <div class="order-col">
                                        <div><strong>Loại sản phẩm</strong></div>
                                        <div><span class="badge bg-primary"><strong>{{ $thongtinsp ->protype-> type_name  }}</strong></span> </div>
                                       
                                    </div>
                                    <form action="route('cart.add',['id' => $thongtinsp->id])" method="get">
                                        <div class="order-col">
                                            <div><strong>Số Lượng Mua</strong></div>
                                            <div><input id="quantity" name="quantity" type="number" min="0" class="form-control" placeholder="Số Lượng" ></div>
                                        </div>
                                    </form>
                                    
                                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                                        <input name="submit" type="submit" value="Add to cart" class="btn btn-primary border-inner py-3 px-5 me-5">
                                    </div>
                                </div>
                            </div>
                            <div class="payment-method">
                                <h4 class="title">Mô Tả</h4></br>
                                <p>{{ $thongtinsp -> description  }}</p>
                            </div>
                        </div>
					<!-- /Order Details -->
                    </div>
                    
					</form>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@endsection