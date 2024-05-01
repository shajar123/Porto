<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
</script>
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('/frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/frontend/js/optional/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/frontend/js/plugins.min.js')}}"></script>
<script src="{{asset('/frontend/js/jquery.appear.min.js')}}"></script>


<!-- Main JS File -->
<script src="{{asset('/frontend/js/main.min.js')}}"></script>
<script src="{{asset('frontend/libs/growl/jquery.growl.js')}}"></script>

    $('#addToCartBtn').click(function(){
        var userId = $(this).data('user');
        var productId = $(this).data('product');

        $.ajax({
            url: "{{ route('add.to.cart') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                user_id: userId,
                product_id: productId
            },

            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
$(document).ready(function(){
    $('#addToWishlistBtn').click(function(){
        var userId = $(this).data('user');
        var productId = $(this).data('product');

        $.ajax({
            url: "{{ route('wish.list') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                user_id: userId,
                product_id: productId
            },

            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>

