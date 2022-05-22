@extends('layout.master')
@section('content')

	<!-- SECTION -->
		<div class="section mt-5">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-7">
						<form action="" method="post">
						@csrf
						<!-- Billing Details -->
						<div class="row billing-details">
							<div class="mb-3">
								<h3 class="title">Your Information</h3>
							</div>
							<div class="col-8 mb-3">
								<label for="name" class="form-label">Full Name</label>
								<input class="form-control" type="text" id="name" name="first-name" placeholder="Your Name" value="{{ Auth::guard('cus')->user()->customer_name }}">
							</div>
							<div class="col-8 mb-3">
								<label for="email" class="form-label">Email</label>
								<input class="form-control" type="email" id="email" name="email" placeholder="exam@email.com" value="{{ Auth::guard('cus')->user()->email }}">
							</div>
							<div class="col-8 mb-3">
								<label for="address" class="form-label">Address</label>
								<input class="form-control" type="text" name="address" placeholder="Your Address" value="{{ Auth::guard('cus')->user()->address }}">
							</div>
							<div class="col-8 mb-3">
								<label for="phone" class="form-label">Phone Number</label>
								<input class="form-control" type="tel" name="phone" placeholder="Telephone" value="{{ Auth::guard('cus')->user()->phone }}">
							</div>
						</div>
						<!-- /Billing Details -->
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
						<div class="order-summary">
							<table id="cart" class="table table-hover table-condensed"> 
								<thead> 
									<tr> 
										<th style="width:33%">Mã Vận Đơn</th>
										<th style="width:33%">Trạng Thái</th>  
										<th style="width:33%">Chi Tiết </th> 
									</tr> 
								</thead> 
								<tbody>
									@foreach($orderbycustomer as $item)
									<tr>
										<td>{{ $item['id'] }}</td>
										@if($item['status'] == 0)
										<td><span class="badge bg-warning">Chờ xác nhận</span></td>
										@endif
										<td><a class="text-info" href="{{ route('thongtindh',$item['id']) }}">Hiển thị</a> </td>	
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					</form>
					<!-- /Order Details -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
@stop