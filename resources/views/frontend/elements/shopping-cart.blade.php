@extends('frontend.layout.layout')
@section('body')

	<div class="page-wrapper">
		<!-- End .top-notice -->

		<!-- End .header -->

		<main class="main">
			<div class="container">
				<ul class="checkout-progress-bar d-flex justify-content-center flex-wrap">
					<li class="active">
						<a href="cart.html">Shopping Cart</a>
					</li>
					<li>
						<a href="checkout.html">Checkout</a>
					</li>
					<li class="disabled">
						<a href="cart.html">Order Complete</a>
					</li>
				</ul>

				<div class="row">
					<div class="col-lg-8">
						<div class="cart-table-container">
							<table class="table table-cart">
								<thead>
									<tr>
										<th class="thumbnail-col"></th>
										<th class="product-col">Product</th>
										<th class="price-col">Price</th>
                                        <th class="price-col">Sales Price</th>

										<th class="qty-col">Quantity</th>
										<th class="text-right">Subtotal</th>
									</tr>
								</thead>
								<tbody>
                                    @php
                                        $totalprice = 0;
                                    @endphp
									@foreach($cartdetails   as  $cartdetail)


									<tr class="product-row">
										<td>
											<figure class="product-image-container">
												<a href="product.html" class="product-image">
													<img src="{{ asset($cartdetail->image) }}" style="width: 200px" height="200px" alt="product">
												</a>

												<a href="#" class="btn-remove icon-cancel" title="Remove Product"></a>
											</figure>
										</td>
										<td class="product-col">
											<h5 class="product-title">
												<a href="product.html">{{ $cartdetail->title }}</a>
											</h5>
										</td>

                                        <td>
                                            <span class="old-price">{{ $cartdetail->price }}</span>
                                         </td>

                                        <td>{{ $cartdetail->sale_price }}</td>
                                        @php
                                            $totalprice +=$cartdetail->sale_price;

                                        @endphp
										<td>
											<div class="product-single-qty">
												<input class="horizontal-quantity form-control" type="text">
											</div><!-- End .product-single-qty -->
										</td>
										<td>


                                            <button onclick="deleteProducts('{{ $cartdetail->id }}',$(this))" type="button"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></button>

                                    </td>
									</tr>
                                    @endforeach
								</tbody>
								<tfoot>
									<tr>
										<td colspan="5" class="clearfix">


											<div class="float-right">
												<button type="submit" class="btn btn-shop btn-update-cart">
													Update Cart
												</button>
											</div><!-- End .float-right -->
										</td>
									</tr>
								</tfoot>
							</table>
						</div><!-- End .cart-table-container -->
					</div><!-- End .col-lg-8 -->

					<div class="col-lg-4">
						<div class="cart-summary">
							<h3>CART TOTALS</h3>

							<table class="table table-totals">
								<tbody>
									<tr>
										<td>Subtotal</td>
										<td>{{ $totalprice}}</td>
									</tr>

									<tr>
										<td colspan="2" class="text-left">


										</td>
									</tr>
								</tbody>

								<tfoot>

								</tfoot>
							</table>

							<div class="checkout-methods">
                                <p>if you sure you want to checkout click on this button</p>
								<a href="{{ route('checkout') }}" class="btn btn-block btn-dark">Proceed to Checkout
									<i class="fa fa-arrow-right"></i></a>
							</div>
						</div><!-- End .cart-summary -->
					</div><!-- End .col-lg-4 -->
				</div><!-- End .row -->
			</div><!-- End .container -->

			<div class="mb-6"></div><!-- margin -->
		</main><!-- End .main -->

		<!-- End .footer -->
	</div><!-- End .page-wrapper -->




	<!-- Plugins JS File -->
    @endsection
    @section('custom-scripts')

    <script>
          function deleteProducts(id, element) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('cart.delete') }}',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(res) {
                            if (res.Error == false) {
                                element.parent().parent().remove();
                                $.growl.notice({
                                    message: res.Message
                                });
                            }
                        },
                        error: function(e) {
                            $.each(e.responseJSON.errors, function(index, item) {

                                if (count == 0) {
                                    first_error = item[0];
                                }

                                count++;
                            });
                            $.growl.error({
                                message: first_error
                            });
                        }
                    });
                }
            })
        }
    </script>
    @endsection

