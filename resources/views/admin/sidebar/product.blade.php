@extends('admin.layout.layout')
@section('title')
    Products
@endsection
@section('body')
    <style>
        .pagination {
            justify-content: end;
        }

        .dataTables_filter {
            text-align: end;
        }
    </style>
    <div class="page-content">
        <div class="container-fluid">
            <div class="page-title-box ">
                <h2> Products Page</h2>
            </div>

            <div class="card ">
                <div class="card-header d-flex justify-content-end">

                    <div><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal"
                            href="javascript:void(0)">Add +</a></div>
                </div>
                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example2">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Title</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->title ?? '' }}</td>
                                        <td><img src="{{ asset($product->image) }}"
                                                style="height: 50px;width: 50px;object-fit: cover" alt=""></td>
                                        <td>
                                            <button
                                                onclick="setValues('{{ $product->id }}','{{ $product->title }}','{{ asset($product->image) }}')"
                                                data-toggle="modal" data-target="#editCategoryModal" type="button"
                                                class="btn btn-success"><i class="fa fa-edit"></i></button>
                                            <button onclick="deleteCategory('{{ $product->id }}',$(this))" type="button"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/div-->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-bs-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Products</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                        <span aria-bs-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addCategoryForm">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""><b>Title</b></label>
                            <input autocomplete="off" type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Categories</b></label>

                            <select class="form-select" name="category_id[]" aria-label="Default select example" multiple>
                                @foreach ($categories as $category )

                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                @endforeach
                              </select>

                        </div>
                        <div class="form-group">
                            <label for=""><b>Color</b></label>

                            <select class="form-select" name="color_id[]" aria-label="Default select example" multiple>
                                @foreach ($colors as $color )

                                <option value="{{ $color->id }}">{{ $color->name }}</option>
                                @endforeach
                              </select>

                        </div>
                        <div class="form-group">
                            <label for=""><b>Size</b></label>

                            <select class="form-select" name="size_id[]" aria-label="Default select example" multiple>
                                @foreach ($sizez as $size )

                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                              </select>

                        </div>
                        <div class="form-group">
                            <label for=""><b>Description</b></label>
                            <input autocomplete="off" type="text" name="description" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Sale Price</b></label>
                            <input autocomplete="off" type="text" name="sale_price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><b>Price</b></label>
                            <input autocomplete="off" type="text" name="price" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for=""><b>Image</b></label>
                            <br>
                            <img style="height: 100px;
  width: 100px;object-fit: cover" id="categoryImagePreview"
                                src="https://via.placeholder.com/1000x1000" onclick="$(this).next().click()" alt="">
                            <input hidden="" onchange="showSelectedImage($(this),'categoryImagePreview')"
                                autocomplete="off" type="file" name="image" class="form-control">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submitBtn2">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editCategoryForm">
                    @csrf
                    <input type="hidden" name="id" id="edit_category_id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for=""><b>Title</b></label>
                            <input id="edit_title" type="text" name="title" class="form-control">
                        </div>
                        <div class="modal-body">
                            <img id="categoryImgPreview" onclick="$(this).next().click()" src=""
                                style="height: 100px;width: 100px;object-fit: cover" alt="">
                            <input value="" autocomplete="off" type="file" hidden="" name="image"
                                onchange="showSelectedImage($(this),'categoryImgPreview')">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary submitBtn3">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        $('#addCategoryForm').on("submit", function(e) {
            e.preventDefault()
            var form = $('#addCategoryForm')[0];
            var formdata = new FormData(form);
            $('.submitBtn2').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn2').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '{{ route('add.products') }}',
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
                        $('#addCategoryModal').modal('hide');
                        setTimeout(function() {
                            window.location.reload();
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

        function setValues(id, title, image) {
            $('#edit_category_id').val(id);
            $('#edit_title').val(title);
            $('#categoryImgPreview').attr('src', image);
        }

        $('#editCategoryForm').on("submit", function(e) {
            e.preventDefault()
            var form = $('#editCategoryForm')[0];
            var formdata = new FormData(form);
            $('.submitBtn3').html('<span class="me-2"><i class="fa fa-spinner fa-spin"></i></span> Processing');
            $('.submitBtn3').prop('disabled', true);
            $.ajax({
                type: 'POST',
                url: '{{ route('update.products') }}',
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
                        $('#editCategoryModal').modal('hide');
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $.growl.error({
                            message: res.Message
                        });
                    }
                    $('.submitBtn3').html('Save');
                    $('.submitBtn3').prop('disabled', false);

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

                    $('.submitBtn3').html('Save');
                    $('.submitBtn3').prop('disabled', false);

                }

            });
        });

        function deleteCategory(id, element) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('delete.products') }}',
                        data: {
                            id: id,
                            _token: '{{ csrf_token() }}'
                        },
                        dataType: 'json',
                        success: function(res) {
                            if (res.Error == false) {
                                element.parent().parent().remove();
                                $.growl.notice({
                                    message: res.Message
                                });
                            }
                        },
                        error: function(e) {
                            $.each(e.responseJSON.errors, function(index, item) {

                                if (count == 0) {
                                    first_error = item[0];
                                }

                                count++;
                            });
                            $.growl.error({
                                message: first_error
                            });
                        }
                    });
                }
            })
        }
    </script>
@endsection
