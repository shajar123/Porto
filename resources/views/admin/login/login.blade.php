


<!-- Mirrored from themesbrand.com/foxia/layouts/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 18:46:31 GMT -->
@include('admin.includes.head')


        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="account-pages mt-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-5 col-xl-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex p-3">
                                    <div>
                                        <a href="index.html" class="">
                                            <img src="{{ asset('admin_assets/images/logo_dark.png') }}" alt="" height="22" class="auth-logo logo-dark">
                                            <img src="{{ asset('admin_assets/images/logo.png') }}" alt="" height="22" class="auth-logo logo-light">
                                        </a>
                                    </div>
                                    <div class="ms-auto text-end">
                                        <h4 class="font-size-18">Welcome Back !</h4>
                                        <p class="text-muted mb-0">Sign in to continue to Foxia.</p>
                                    </div>
                                </div>
                                <div class="p-3">

                                    <form id="addRegisterForm">
                                        @csrf

                                        <div class="mb-3">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" id="username" name="email" class="form-control" placeholder="Enter username" required>
                                        </div>

                                        <div class="mb-3">
                                            <label  class="form-label" for="userpassword">Password</label>
                                            <input type="password" name="password" id="userpassword" class="form-control" placeholder="Enter password" required>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-sm-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="customControlInline">
                                                    <label class="form-check-label" for="customControlInline">
                                                        Remember me
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-end">
                                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit submitBtn2">Log In</button>
                                            </div>
                                        </div>

                                        <div class="mb-0 row">
                                            <div class="col-12 mt-4 text-center">
                                                <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> Forgot your password?</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>


        <!-- JAVASCRIPT -->
        @include('admin.includes.script')

        <script>
             $('#addRegisterForm').on("submit", function(e) {
            e.preventDefault()
            var form = $('#addRegisterForm')[0];
            var formdata = new FormData(form);
            $('.submitBtn2').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn2').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '{{ route('add.login') }}',
                dataType: 'json',
                data: formdata,
                contentType: false,
                processData: false,
                cache: false,
                mimeType: 'multipart/form-data',

                success: function(res) {

                    if (res.Error == false) {

                        $.growl.notice({message: res.Message});

                        setTimeout(function() {
                            if (res.user_type==0) {
                                window.location.href = '{{ route('admin.dashboard') }}';
                            }
                            else{
                                $.growl.error({message: 'Email or Password is incorrect'});

                            }

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



