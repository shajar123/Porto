
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
                            <form id="submitBtn">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">

                                            <div class="mb-4">
                                                <label class="form-label"  for="input-date1">TITLE</label>
                                                <input id="input-date1" name="title" class="form-control input-mask"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy">
                                            </div>


                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-4 mt-lg-0">
                                            <div class="mb-4">
                                                <label class="form-label" name="description" for="input-repeat">DESCRIPTION</label>
                                                <input id="input-repeat" class="form-control input-mask"
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

@endsection
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
@section('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#submitBtn').click(function(e) {
                e.preventDefault();

                var formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('image', $('#image')[0].files[0]);

                $.ajax({
                    url: '{{ route('blogs.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert(response.message);
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
