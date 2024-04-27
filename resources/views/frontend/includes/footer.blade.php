@php
$footer = \App\Models\Footer::first();

@endphp
<footer class="footer bg-dark">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Contact Info</h4>
                        <ul class="contact-info">
                            <li>
                                <span class="contact-info-label">Address:</span>{{ $footer->address }}
                            </li>
                            <li>
                                <span class="contact-info-label">Phone:</span><a href="tel:">{{ $footer->phone }}</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Email:</span> <a href="">{{ $footer->email }}</a>
                            </li>
                            <li>
                                <span class="contact-info-label">Working Days/Hours:</span> Mon - Sun / 9:00 AM - 8:00 PM
                            </li>
                        </ul>
                        <div class="social-icons">
                            <a href="" class="social-icon social-facebook icon-facebook" target="_blank" title="Facebook"></a>
                            <a href="" class="social-icon social-twitter icon-twitter" target="_blank" title="Twitter"></a>
                            <a href="" class="social-icon social-instagram icon-instagram" target="_blank" title="Instagram"></a>
                        </div>
                        <!-- End .social-icons -->
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Our Pages</h4>

                        <ul class="links">
                            <li><a href="">Products</a></li>
                            <li><a href="{{ route('category') }}">Category</a></li>
                            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                            <li><a href="{{ route('checkout') }}">Checkout</a></li>
                            <li><a href="{{ route('blogs') }}">Blogs</a></li>
                            <li><a href="{{ route('contact.us') }}">Contact Us</a></li>
                            <li><a href="{{ route('about.us') }}">About Us</a></li>
                            <li><a href="{{ route('shopping.cart') }}">Shopping Cart</a></li>

                        </ul>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->


                <!-- End .col-lg-3 -->

                <div class="col-lg-3 col-sm-6">
                    <div class="widget widget-newsletter">
                        <h4 class="widget-title">Subscribe newsletter</h4>
                        <p>Get all the latest information on events, sales and offers. Sign up for newsletter:
                        </p>
                        <form id="email" class="mb-0">
                            @csrf
                            <input name="email" type="email" class="form-control m-b-3" placeholder="Email address" required>

                            <input type="submit" class="btn btn-primary shadow-none submitBtn2" value="Subscribe">
                        </form>
                    </div>
                    <!-- End .widget -->
                </div>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End .footer-middle -->

    <div class="container">
        <div class="footer-bottom">
            <div class="container d-sm-flex align-items-center">
                <div class="footer-left">
                    <span class="footer-copyright">© Porto eCommerce. 2021. All Rights Reserved</span>
                </div>

                <div class="footer-right ml-auto mt-1 mt-sm-0">
                    <div class="payment-icons">
                        <span class="payment-icon visa" style="background-image: url(assets/images/payments/payment-visa.svg)"></span>
                        <span class="payment-icon paypal" style="background-image: url(assets/images/payments/payment-paypal.svg)"></span>
                        <span class="payment-icon stripe" style="background-image: url(assets/images/payments/payment-stripe.png)"></span>
                        <span class="payment-icon verisign" style="background-image:  url(assets/images/payments/payment-verisign.svg)"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .footer-bottom -->
    </div>
    <!-- End .container -->
</footer>
@section('custom-scripts')
<script>

    $('#email').on("submit", function(e) {
            e.preventDefault()
            var form = $('#email')[0];
            var formdata = new FormData(form);
            $('.submitBtn2').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn2').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '{{ route('user.email') }}',
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
