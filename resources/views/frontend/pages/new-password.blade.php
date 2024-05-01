@extends('frontend.layout.layout')
@section('body')
	<div class="page-wrapper">



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
								<form id="new-password" class="mb-0" action="#">
                                    @csrf

									<div class="form-group mb-0">
										<label for="reset-email" class="font-weight-normal">Enter Password</label>
										<input type="password"  class="form-control" id="reset-email" name="password"
											required />
									</div>
                                    <div class="form-group mb-0">
										<label for="reset-email" class="font-weight-normal">Confirm Password</label>
										<input type="password"  class="form-control" id="reset-email" name="confirm_password"
											required />
									</div>

									<div class="form-footer mb-0">


										<button type="submit"
											class="btn btn-md btn-primary form-footer-right font-weight-normal text-transform-none mr-0">
											submit
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
 $('#new-password').on("submit", function(e) {
            e.preventDefault()
            var form = $('#new-password')[0];
            var formdata = new FormData(form);
            $('.submitBtn2').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn2').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '{{ route('change.password') }}',
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

                        setTimeout(function() {
window.location.href='{{ route('get.login') }}';

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





