@extends('admin.layout.layout')
@section('body')
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
                        <h6 class="page-title">Data Tables</h6>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="#">Foxia</a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Default Datatable</h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($blogs as $blog)
                                        <tr>
                                            <td>{{ $blog->id }}</td>
                                            <td>{{ $blog->title }}</td>
                                            <td>{{ $blog->description }}</td>

                                                <td>
                                                    <img style="height: 50px; width: 50px; object-fit: cover;"   src="{{!empty($blog->image) ? asset($blog->image) : 'https://via.placeholder.com/1000x1000'}}" alt="">

                                                </td>
                                                <td>
                                                <button
                                                    onclick="setEditValues('{{ $blog->title }}','{{ $blog->description }}','{{ asset($blog->image) }}','{{ $blog->id }}')"
                                                    type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal" data-whatever="@getbootstrap"><i
                                                        class="fas fa-edit"></i>
                                                </button>
                                                <a onclick="setDeleteValues('{{ $blog->id }}')"
                                                    class="btn btn-primary">DELETE</a>

                                            </td>


                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel"> EDIT
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form id="blog-edit" action="{{ route('edit.blogs') }}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" id="blog-id" >
                                                                    <div class="form-group">
                                                                        <label for="recipient-name"
                                                                            class="col-form-label">Title</label>
                                                                        <input type="text" name="title" id="title-id"
                                                                            class="form-control">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="message-text"
                                                                            class="col-form-label">Description</label>
                                                                        <textarea name="description" id="description-id" class="form-control"></textarea>
                                                                    </div>
                                                                    <div class="w-100 h-100 d-flex align-items-center">
                                                                        <img id="image-id" onclick="$(this).next().click()"
                                                                            style="height: 100px;
                                                                                width: 500px;
                                                                                object-fit: cover;"
                                                                            src="https://via.placeholder.com/1000x1000"
                                                                            alt="">
                                                                        <input
                                                                            onchange="showSelectedImage($(this),'previewBlogImg')"
                                                                            type="file" class="d-none" name="image" id="image-id">
                                                                    </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Edit</button>
                                                            </div>
                                                            </form>


                                                        </div>
                                                    </div>
                                                </div>


                                        </tr>
                                    @endforeach


                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

            <!-- end row -->



        </div> <!-- container-fluid -->
    </div>


    @endsection

@section('custom-scripts')
    <script>
  $(document).ready(function() {
    $('#blog-edit').submit(function(e) {
        e.preventDefault(); // Prevent the form from submitting

        var formData = new FormData(this); // Create a FormData object from the form

        // Manually append the id field to the FormData object
        formData.append('id', $('#blog-id').val());

        $.ajax({
            url: '{{ route("edit.blogs") }}', // Route to handle the AJAX request
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                $('#exampleModal').modal('hide'); // Hide the modal
                swal.fire('Data stored successfully');
            },
            error: function(xhr, status, error) {
                console.error(error);
                alert('An error occurred while storing data');
            }
        });
    });
});




function setEditValues(title, description, image, id) {
            $('#title-id').val(title);
            $('#description-id').val(description);
            $('#image-id').attr('src',image);
            $('#blog-id').val(id);

        }

        function setDeleteValues(id) {
            Swal.fire({
                title: "Do you want to save the changes?"
                , showDenyButton: true
                , showCancelButton: true
                , confirmButtonText: "Save"
                , denyButtonText: `Don't save`
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    $.ajax({
                        url: "{{ route('blog.delete') }}"
                        , type: 'POST'
                        , data: {
                            _token: "{{ csrf_token() }}"
                            , id: id

                        },


                        success: function(response) {
                            Swal.fire("Slider has been deleted successfully", "", "success");

                            $('#dataForm')[0].reset();
                        }
                        , error: function(xhr, status, error) {
                            var err = eval("(" + xhr.responseText + ")");
                        }
                    });

                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        }




    </script>
@endsection


