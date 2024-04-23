

@extends('admin.layout.layout')
@section('body')

        <!-- Loader -->

        <!-- Begin page -->
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary btn-rounded dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ti-settings me-1"></i> Settings <i class="mdi mdi-chevron-down"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">INPUTS</h4>
                                        <form id="footer-form">
                                            @csrf
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="input-date1">Address</label>
                                                            <input name="address"  class="form-control input-mask" >
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="input-date1">Phone</label>
                                                            <input  type="number" name="phone" class="form-control input-mask" >
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="input-email">Email address::</label>
                                                            <input  type="email" name="email" class="form-control input-mask">
                                                        </div>


                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                        <div class="mb-4">
                                                            <label class="form-label" for="input-repeat">Facebook Link</label>
                                                            <input id="input-repeat" class="form-control input-mask" name="facebook">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="input-repeat">Twitter Link</label>
                                                            <input id="input-repeat" class="form-control input-mask" name="twitter">
                                                        </div>
                                                        <div class="mb-4">
                                                            <label class="form-label" for="input-repeat">Instagram Link</label>
                                                            <input id="input-repeat" class="form-control input-mask" name="instagram">
                                                        </div>

                                                    </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary w-100">SAVE</button>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->




            <!-- end main content-->

        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        @endsection
        @section('custom-scripts')
        <script>
            $(document).ready(function() {
                $('#footer-form').submit(function(event) {
                    event.preventDefault();
                    var formData = new FormData($(this)[0]);

                    $.ajax({
                        type: 'POST',
                        url: '{{ route("admin.footer.create") }}',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            Swal.fire('Data stored successfully!', '', 'success');

                            // Reset the form with the correct ID
                            $('#footer-form')[0].reset();

                            // Reload the page after 1 second
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script>

        @endsection

