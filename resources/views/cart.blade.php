@extends('layouts.app')
@section('content')

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url({{asset('images/heading-pages-01.jpg')}});">
		<h2 class="l-text2 t-center">
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite">
					@if(count($cart))
					<table class="table-shopping-cart">
						<tr class="table-head">
							<th class="column-1"></th>
							<th class="column-2">Product</th>
							<th class="column-3">Price</th>
							<th class="column-4 p-l-70">Quantity</th>
							<th class="column-5">Total</th>
						</tr>

						@foreach($cart as $item)
						<tr class="table-row">
							<td class="column-1">
								<div class="cart-img-product b-rad-4 o-f-hidden">
									<img src="{{asset('images/item-10.jpg')}}" alt="IMG-PRODUCT">
								</div>
							</td>
							<td class="column-2">{{$item->name}}</td>
							<td class="column-3">${{$item->price}}</td>
							{{--<td class="column-4">
								<div class="flex-w bo5 of-hidden w-size17">
									<button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-minus" aria-hidden="true"></i>
									</button>

									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

									<button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
										<i class="fs-12 fa fa-plus" aria-hidden="true"></i>
									</button>
								</div>
							</td>--}}
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href="{{url("cart?product_id=$item->id&increment=1")}}"> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{ $item->qty }}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href="{{url("cart?product_id=$item->id&decrease=1")}}"> - </a>
								</div>
							</td>
							<td class="column-5">${{$item->subtotal}}</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{url("cart?product_id=$item->id&delete=1")}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
@endforeach

					</table>
					@else
						<p class="alert-info">No items in shopping cart</p>
					@endif
				</div>
			</div>



			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						${{Cart::subTotal()}}
					</span>
				</div>


				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm">
						${{$cart::subTotal()}}
					</span>
				</div>

				<div class="size15 trans-0-4">

					@if(!Auth::check())

						<div class="row">
							<div class="col-12">
								{!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}
								<div class="form-group">
									{!! Form::label('name', 'Name:') !!}
									{!! Form::text('name', null, ['class'=>'form-control'])!!}
								</div>
								<div class="form-group">
									{!! Form::label('email', 'Email:') !!}
									{!! Form::email('email', null, ['class'=>'form-control'])!!}
								</div>

								<div class="form-group">
									{!! Form::label('password', 'Password:') !!}
									{!! Form::password('password', ['class'=>'form-control'])!!}
								</div>

								<div class="form-group">
									{!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
								</div>

								{!! Form::close() !!}
							</div>
						</div>
					@else
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Proceed to Checkout
						</button>
				@endif

					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Proceed to Checkout
					</button>
				</div>
			</div>
		</div>
	</section>

	<script src="https://js.braintreegateway.com/web/dropin/1.13.0/js/dropin.min.js"></script>
	<script>
        var form = document.querySelector('#payment-form');
        var client_token = "{{$token}}";
        braintree.dropin.create({
            authorization: client_token,
            selector: '#bt-dropin',
            paypal: {
                flow: 'vault'
            }
        }, function (createErr, instance) {
            if (createErr) {
                console.log('Create Error', createErr);
                return;
            }
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                instance.requestPaymentMethod(function (err, payload) {
                    if (err) {
                        console.log('Request Payment Method Error', err);
                        return;
                    }
                    // Add the nonce to the form and submit
                    document.querySelector('#nonce').value = payload.nonce;
                    form.submit();
                });
            });
        });
	</script>

@endsection