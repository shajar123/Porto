@extends('admin.layout.layout')
@section('body')

    <div class="page-content">
        <div class="container-fluid">

            <div class="page-title-box">
               <h3>Contact page</h3>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">ADD CONTACT</h4>
                            <form id="contact-us">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div>
                                            <div class="mb-4">
                                                <label class="form-label" for="input-date1">ADDRESS</label>
                                                <input id="input-date1" value="{{$contact->address ?? ''}}" name="address" class="form-control input-mask"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy">
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="input-date1">E-MAIL</label>
                                                <input  value="{{$contact->email ?? ''}}" id="input-date1" name="email" class="form-control input-mask"
                                                    data-inputmask="'alias': 'datetime'"
                                                    data-inputmask-inputformat="dd/mm/yyyy">
                                            </div>





                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mt-4 mt-lg-0">
                                            <div class="mb-4">
                                                <label class="form-label" for="input-repeat">PHONE NO</label>
                                                <input value="{{$contact->phone ?? ''}}" id="input-repeat" name="phone" class="form-control input-mask"
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
    @endsection





    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->



@section('custom-scripts')
    <script>
        $(document).ready(function() {
            $('#contact-us').submit(function(event) {
                event.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'admin-create',
                    data: $(this).serialize(),
                    success: function(response) {
                        Swal.fire("Contact has been Saved successfully", "", "success");

                        $('#contact-us')[0].reset();
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







<!-- Mirrored from themesbrand.com/foxia/layouts/form-mask.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Dec 2023 18:46:05 GMT -->
