<!-- Mirrored from themesbrand.com/foxia/layouts/form-mask.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 18:46:05 GMT -->


@extends('admin.layout.layout')
@section('body')

    <!-- Loader -->


    <!-- Begin page -->



    <!-- ========== Left Sidebar Start ========== -->

    <!-- Left Sidebar End -->





    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->

    <div class="page-content">
        <div class="container-fluid">

            <div class="page-title-box">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h6 class="page-title">Form Mask</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Mask</li>
                        </ol>
                    </div>
                    <div class="col-md-4">
                        <div class="float-end d-none d-md-block">
                            <div class="dropdown">
                                <button class="btn btn-primary btn-rounded dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
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
                            <h4 class="card-title mb-4">ADD BLOGS</h4>
                            <form id="blog-create">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-4">
                                                <label class="form-label"  for="input-date1">TITLE</label>
                                                <input id="input-date1" name="title" class="form-control input-mask"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy">
                                            </div>



                                            <div class="col-4 mb-4">
                                                IMAGE:
                                                <br>
                                                <div class="w-100 h-100 d-flex align-items-center">
                                                    <img onclick="$(this).next().click()" id="previewBlogImg" style="height: 100px;
                                                        width: 200px;
                                                        object-fit: cover;" src="https://via.placeholder.com/1000x1000" alt="">
                                                    <input onchange="showSelectedImage($(this),'previewBlogImg')" type="file"
                                                           class="d-none" name="image">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-4 mt-lg-0">
                                            <div class="mb-4">
                                                <label class="form-label"  for="input-repeat">DESCRIPTION</label>
                                                <input id="input-repeat" name="description" class="form-control input-mask"
                                                    data-inputmask="'mask': '9', 'repeat': 10, 'greedy' : false">
                                            </div>



                                        </div>

                                    </div>

                                </div>


                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary w-100">SAVE</button>
                    </form>



                </div>
            </div>
            <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->




    <!-- end main content-->

    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @section('custom-scripts')
    <script>
         $(document).ready(function() {
        $('#blog-create').submit(function(event) {
            event.preventDefault();
            var formData = new FormData($(this)[0]);

            $.ajax({
                type: 'POST',
                url: '{{ route("blogs.setting.create") }}',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    swal.fire('Data stored successfully!');
                    $('#dataForm')[0].reset();
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
    </script>
    @endsection






<!-- JAVASCRIPT -->
@endsection



<!-- Mirrored from themesbrand.com/foxia/layouts/form-mask.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 18:46:05 GMT -->