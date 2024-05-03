<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/frontend/js/optional/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('/frontend/js/plugins.min.js') }}"></script>
<script src="{{ asset('/frontend/js/jquery.appear.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Main JS File -->
<script src="{{ asset('/frontend/js/main.min.js') }}"></script>
<script src="{{ asset('frontend/libs/growl/jquery.growl.js') }}"></script>

<script>
    function addToCart(element) {
        var userId = element.getAttribute('data-user');
        var productId = element.getAttribute('data-product');
        var csrfToken = '{{ csrf_token() }}'; // Retrieve CSRF token

        // AJAX request to add product to cart
        $.ajax({
            type: 'POST',
            url: '{{ route('add.to.cart') }}', // Replace this with your actual route to add to cart
            data: {
                user_id: userId,
                product_id: productId,
                _token: csrfToken // Include CSRF token in the data
            },
            success: function(response) {
                // Handle success response (e.g., update UI)
                Swal.fire({
                    title: "Add Successfully in your Cart!",

                    icon: "success"
                });
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    }
</script>
<script>

    function addToWishlist(userId, productId) {
        var csrfToken = '{{ csrf_token() }}'; // Retrieve CSRF token

        // AJAX request to add product to wishlist
        $.ajax({
            type: 'POST',
            url: '{{ route('wish.list') }}', // Replace this with your actual route to store the wishlist item
            data: {
                user_id: userId,
                product_id: productId,
                _token: csrfToken // Include CSRF token in the data
            },
            success: function(response) {

                Swal.fire({
                    title: "Product added to wishlist successfully!",

                    icon: "success"
                });
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    }
</script>
