@extends('frontend.layout.layout')
@section('body')
	<div class="page-wrapper">
		<div class="top-notice bg-primary text-white">
			<div class="container text-center">
				<h5 class="d-inline-block">Get Up to <b>40% OFF</b> New-Season Styles</h5>
				<a href="category.html" class="category">MEN</a>
				<a href="category.html" class="category ml-2 mr-3">WOMEN</a>
				<small>* Limited time only.</small>
				<button title="Close (Esc)" type="button" class="mfp-close">×</button>
			</div><!-- End .container -->
		</div><!-- End .top-notice -->

		<!-- End .header -->

		<main class="main">
			<div class="page-header">
				<div class="container d-flex flex-column align-items-center">
					<nav aria-label="breadcrumb" class="breadcrumb-nav">
						<div class="container">

						</div>
					</nav>

					<h1>Forgot Password</h1>
				</div>
			</div>

			<div class="container reset-password-container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3">
						<div class="feature-box border-top-primary">
							<div class="feature-box-content">
								<form id="forgot-password-form" class="mb-0" action="#">
                                    @csrf
									<p>
										Lost your password? Please enter your
										username or email address. You will receive
										a link to create a new password via email.
									</p>
									<div class="form-group mb-0">
										<label for="reset-email" class="font-weight-normal">Username or email</label>
										<input type="email" class="form-control" id="reset-email" name="reset-email"
											required />
									</div>

									<div class="form-footer mb-0">
										<a href="login.html">Click here to login</a>

										<button type="submit"
											class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
											Reset Password
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main><!-- End .main -->

	<!-- End .footer -->
	</div>

    @endsection
    @section('custom-scripts')
    <script>
        $(document).ready(function() {
    $('#forgot-password-form').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: '{{ route('forgot.password.form') }}',
            data: $(this).serialize(),
            success: function(response) {
                // Handle success response
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });
});
    </script>
    @endsection





