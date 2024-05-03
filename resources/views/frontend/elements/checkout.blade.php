@extends('frontend.layout.layout')
@section('body')
    <div class="page-wrapper">

        <!-- End .top-notice -->


        <!-- End .header -->

        <main class="main main-test">
            <div class="container checkout-container">


                <div class="login-form-container">


                    <div id="collapseOne" class="collapse">
                        <div class="login-section feature-box">
                            <div class="feature-box-content">
                                <form action="#" id="login-form">
                                    <p>
                                        If you have shopped with us before, please enter your details below. If you are a
                                        new customer, please proceed to the Billing & Shipping section.
                                    </p>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Username or email <span
                                                        class="required">*</span></label>
                                                <input type="email" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="mb-0 pb-1">Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn">LOGIN</button>

                                    <div class="form-footer mb-1">
                                        <div class="custom-control custom-checkbox mb-0 mt-0">
                                            <input type="checkbox" class="custom-control-input" id="lost-password" />
                                            <label class="custom-control-label mb-0" for="lost-password">Remember
                                                me</label>
                                        </div>

                                        <a href="forgot-password.html" class="forget-password">Lost your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-lg-7">
                        <ul class="checkout-steps">
                            <li>
                                <h2 class="step-title">Billing details</h2>

                                <form id="checkout-form">
                                    @csrf
                                   

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>First name
                                                    <abbr class="required" title="required">*</abbr>
                                                </label>
                                                <input name="first_name" type="text" class="form-control" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Last name
                                                    <abbr class="required" title="required">*</abbr></label>
                                                <input name="last_name" type="text" class="form-control" required />
                                            </div>
                                        </div>
                                    </div>



                                    <div class="select-custom">
                                        <label>Country / Region
                                            <abbr class="required" title="required">*</abbr></label>
                                        <select name="country_id" id="select_country" name="orderby" class="form-control">
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->id }}" selected="selected">{{ $country->name }}
                                                </option>
                                            @endforeach

                                        </select>

                                    </div>
                                    <div class="form-group">

                                        <label>States <abbr class="required" title="required">*</abbr></label>

                                        <select name="state_id" id="select_state" name="orderby" class="form-control">
                                            @foreach ($states as $state)
                                                <option value="{{ $state->id }}" selected="selected">
                                                    {{ $state->name }}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="select-custom">
                                        <label>City <abbr class="required" title="required">*</abbr></label>

                                        <select name="city_id" id="select_city" name="orderby" class="form-control">
                                            <option value="" selected="selected"></option>
                                        </select>

                                    </div>

                                    <div class="form-group mb-1 pb-2">
                                        <label>Street address
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input name="address" type="text" class="form-control"
                                            placeholder="House number and street name" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Postcode / Zip
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input name="postcode" type="text" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Phone <abbr class="required" title="required">*</abbr></label>
                                        <input name="phone" type="tel" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label>Email address
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input name="email" type="email" class="form-control" required />
                                    </div>

                                    <div class="form-group">
                                        <label class="order-comments">Order notes (optional)</label>
                                        <textarea name="description" class="form-control"
                                            placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                                    </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End .col-lg-8 -->

                    <div class="col-lg-5">
                        <div class="order-summary">
                            <h3>YOUR ORDER</h3>

                            <table class="table table-mini-cart">
                                <thead>
                                    <tr>
                                        <th colspan="2">Product</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $totalprice = 0;
                                @endphp
                                    @foreach ($productTitles as $title)
                                        <tr>

                                            <td class="product-col">


                                                <h3 class="product-title">

                                                    {{ $title->title }}


                                                </h3>

                                            </td>



                                            <td class="price-col">

                                                <span>{{ $title->sale_price }}</span>

                                            </td>

                                        </tr>
                                        @php
        $totalprice += $title->sale_price;
    @endphp
@endforeach

<tr>
    <td colspan="2">
        <strong>Total Price:</strong> <span>{{ $totalprice }}</span>
    </td>
</tr>





                            </tbody>
                            </table>

                            <div class="payment-methods">
                                <h4 class="">Payment methods</h4>
                                <div class="info-box with-icon p-0">
                                    <p>
                                        Sorry, it seems that there are no available payment methods for your state. Please
                                        contact us if you require assistance or wish to make alternate arrangements.
                                    </p>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-dark btn-place-order" form="checkout-form">
                                Place order
                            </button>
                        </div>
                        </form>


                        <!-- End .cart-summary -->
                    </div>
                    <!-- End .col-lg-4 -->
                </div>
                <!-- End .row -->
            </div>
            <!-- End .container -->
        </main>
        <!-- End .main -->


        <!-- End .footer -->
    </div>
    <!-- End .page-wrapper -->





    <!-- Plugins JS File -->
@endsection
@section('custom-scripts')
    <script>
        $('#select_country').on("change", function() {
            var country = $(this).val();
            $.ajax({
                type: 'POST',
                url: '{{ route('register.select_country') }}',
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}',
                    country: country
                },
                success: function(res) {
                    if (res.Error == false) {
                        $('#select_state').html('');
                        $('#select_state').html(res.html);
                    }
                },
                error: function(e) {
                    // Handle error if needed
                }
            });
        });
        $('#select_state').on("change", function() {
            var city = $(this).val();
            $.ajax({
                type: 'POST',
                url: '{{ route('register.select_state') }}',
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}',
                    city: city
                },
                success: function(res) {
                    if (res.Error == false) {
                        $('#select_city').html('');
                        $('#select_city').html(res.html);
                    }
                },
                error: function(e) {
                    // Handle error if needed
                }
            });
        });
        $('#checkout-form').on("submit", function(e) {
            e.preventDefault()
            var form = $('#checkout-form')[0];
            var formdata = new FormData(form);
            $('.submitBtn2').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn2').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '{{ route('checkout.form') }}',
                dataType: 'json',
                data: formdata,
                contentType: false,
                processData: false,
                cache: false,
                mimeType: 'multipart/form-data',

                success: function(res) {
                    if (res.Error == false) {
                        $.growl.notice({
                            message: res.Message
                        });
                        $('#addColorModal').modal('hide');
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $.growl.error({
                            message: res.Message
                        });
                    }
                    $('.submitBtn2').html('Save');
                    $('.submitBtn2').prop('disabled', false);

                },
                error: function(e) {

                    var first_error = '';
                    var count = 0;

                    $.each(e.responseJSON.errors, function(index, item) {

                        if (count == 0) {
                            first_error = item[0];
                        }

                        count++;
                    });
                    $.growl.error({
                        message: first_error
                    });

                    $('.submitBtn2').html('Save');
                    $('.submitBtn2').prop('disabled', false);

                }

            });
        });
    </script>
@endsection
