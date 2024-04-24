
@extends('admin.layout.layout')
@section('body')


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


                                            <div class="col-6">
                                                <label class="form-label"  for="input-date1">TITLE</label>
                                                <input id="input-date1" name="title" class="form-control input-mask">

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
                                    <div class="col-12 mb-4">
                                        IMAGE:
                                        <br>
                                        <div class="w-100 h-100 d-flex align-items-center">
                                            <img onclick="$(this).next().click()" id="previewBlogImg" style="height: 100px;
                                                width: 400px;
                                                object-fit: cover;" src="https://via.placeholder.com/1000x1000" alt="">
                                            <input onchange="showSelectedImage($(this),'previewBlogImg')" type="file"
                                                   class="d-none" name="image">
                                        </div>
                                    </div>

                                </div>


                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary w-100">SAVE</button>
                </div>
                    </form>
                </div>
            </div>
            <!-- end row -->



        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->
    @endsection



    <!-- end main content-->

    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    @section('custom-scripts')

    <script>
        $(document).ready(function() {
            $('#blog-create').submit(function(event) {
                event.preventDefault();

                // Create FormData object
                var formData = new FormData($(this)[0]);

                $.ajax({
                    type: 'POST',
                    url: 'blogs-store',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        Swal.fire("Blogs has been Saved successfully", "", "success");
                        $('#blog-create')[0].reset();
                        setTimeout(function() {
                            window.location.reload();
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






<!-- JAVASCRIPT -->




<!-- Mirrored from themesbrand.com/foxia/layouts/form-mask.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 18:46:05 GMT -->
