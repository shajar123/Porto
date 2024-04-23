@extends('frontend.layout.layout')
@section('title')
    Dashboard
@endsection
@section('body')


<main class="main">
    <div class="page-header">
        <div class="container d-flex flex-column align-items-center">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="demo4.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="category.html">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            My Account
                        </li>
                    </ol>
                </div>
            </nav>

            <h1>My Account</h1>
        </div>
    </div>

    <div class="container login-container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">

                    <div class="col-md-6">
                        <div class="heading mb-1">
                            <h2 class="title">Register</h2>
                        </div>

                        <form id="addRegisterForm">
                            <label for="register-email">
                                Name
                                <span class="required">*</span>
                            </label>
                            <input type="text" name="name" class="form-input form-wide" id="register-email" required />
                            <label for="register-email">
                                Email address
                                <span class="required">*</span>
                            </label>
                            <input type="email" name="email" class="form-input form-wide" id="register-email" required />

                            <label for="register-password">
                                Password
                                <span class="required">*</span>
                            </label>
                            <input type="password" class="form-input form-wide" id="register-password"
                                required />
                                <label for="register-password">
                                    Country
                                    <span class="required">*</span>
                                </label>
                                <select class="form-control" aria-label="Default select example" >
                                    @foreach ($country as $countries )
                                    <option >{{ $countries->name }}</option>
                                    @endforeach
                                  </select>

                                  <label for="register-password">
                                    State
                                    <span class="required">*</span>
                                </label>
                                <select class="form-control" aria-label="Default select example" >
                                    @foreach ($states as $state )
                                    <option >{{ $state->name }}</option>
                                    @endforeach
                                  </select>


                                  <label for="register-password">
                                    City
                                    <span class="required">*</span>
                                </label>
                                <select class="form-control" aria-label="Default select example" >
                                    @foreach ($city as $c )
                                    <option >{{ $c->name }}</option>
                                    @endforeach


                                  </select>

                            <div class="form-footer mb-2">
                                <button type="submit" class="btn btn-dark btn-md w-100 mr-0">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection
@section('custom-scripts')
<script>
           $('#addRegisterForm').on("submit", function(e) {
            e.preventDefault()
            var form = $('#addRegisterForm')[0];
            var formdata = new FormData(form);
            $('.submitBtn2').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn2').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '',
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
                            }else{
                                window.location.href = '{{ route('dashboard') }}';

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
@endsection