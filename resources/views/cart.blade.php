@extends('layout.master')
@section('content')
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
			<!-- container -->
    <div class="container-fluid about py-5">
		<div class="container">
            <div class="section-title position-relative text-center mx-auto mb-5 pb-3" style="max-width: 600px;">
                <h2 class="text-primary font-secondary">Check & Payment</h2>
                <h1 class="display-4 text-uppercase">Your Cart</h1>
            </div>
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->
        <div class="container"> 
                <table id="cart" class="table table-hover table-condensed"> 
                <thead> 
                <tr> 
                    <th style="width:5%">STT</th> 
                    <th style="width:40%">Tên sản phẩm</th> 
                    <th style="width:20%">Giá</th> 
                    <th style="width:8%">Số lượng</th> 
                    <th style="width:10%">Thao Tac</th> 
                </tr> 
                </thead> 
                <tbody>
                    <?php $n = 1; ?>
                    @foreach($cart->items as  $item)
                    <tr> 
                        <td>{{$n}}</td>
                        <td data-th="Product"> 
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="{{ asset('/img') }}/{{ $item['image'] }}" style="width: 70px" alt="">
                                </div> 
                                <div class="col-sm-10"> 
                                    <h4 class="nomargin"><a href="">{{ $item['product_name'] }}</a></h4>  
                                </div> 
                            </div> 
                        </td> 
                        <td data-th="Price">{{ number_format($item['price'],0,',','.') }} VND</td> 
                        <td data-th="Quantity">{{ $item['quantity'] }}</td> 
                        <td class="actions" data-th="">
                            <a href=""><button class="btn btn-danger btn-sm" ><i class="fa fa-trash"></i>
                            </button></a>
                        </td>
                    </tr>
                    <?php $n++ ?>
                    @endforeach
                    
                </tbody>         
        <tfoot> 
            <tr> <td></td>
                <td><a  href="index.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                </td> 
                <td class="hidden-xs text-center">Total: <strong>{{number_format($cart ->total_price,0,',','.')}} VND</strong>
                </td> 
                <td><a href="checkout.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td> 
            </tr> 
        </tfoot> 
        </table>
</div>
@stop