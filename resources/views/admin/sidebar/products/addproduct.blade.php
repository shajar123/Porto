@extends('admin.layout.layout')
@section('title')
    Products
@endsection
@section('body')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Products add</h4>
        </div>
    </div>
    <!--End Page header-->

    <!--div-->
    <div class="card">
        <div class="card-header">
            <div class="card-title">Products</div>
        </div>
        <div class="card-body">
            <form id="addProductsForm">
                @csrf
                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for=""><b>Title</b></label>
                            <input autocomplete="off" type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Categories</label>
                            <select autocomplete="off" class="form-control select2" name="category_id[]" id="categories"
                                data-placeholder="Select Category" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">
                                        {{ $category->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <div class="form-group">

                            <br>
                            <img style="height: 100px;
  width: 100px;object-fit: cover" id="categoryImagePreview"
                                src="https://via.placeholder.com/1000x1000" onclick="$(this).next().click()" alt="">
                            <input hidden="" onchange="showSelectedImage($(this),'categoryImagePreview')"
                                autocomplete="off" type="file" name="image" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""><b>Color</b></label>

                    <select class="form-select select2" name="color_id[]" id="color" aria-label="Default select example"
                        multiple>
                        @foreach ($colors as $color)
                            <option value="{{ $color->id }}">{{ $color->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for=""><b>Size</b></label>

                    <select class="form-select select2" id="size" name="size_id[]" aria-label="Default select example"
                        multiple>
                        @foreach ($sizez as $size)
                            <option value="{{ $size->id }}">{{ $size->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label for=""><b>Description</b></label>
                    <input autocomplete="off" type="text" name="description" class="form-control">
                </div>

                <div class="form-group">
                    <label for=""><b>Price</b></label>
                    <input autocomplete="off" type="text" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for=""><b>Sale Price</b></label>
                    <input autocomplete="off" type="text" name="sale_price" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary mt-4 mb-0 submitBtn2">Save</button>
                </div>

            </form>
        </div>
    </div>
    <!--/div-->
@endsection

@section('custom-scripts')
    <script>
        $('#addProductsForm').on("submit", function(e) {
            e.preventDefault()
            var form = $('#addProductsForm')[0];
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

        function setValues(image) {

            $('#categoryImgPreview').attr('src', image);
        }
    </script>
@endsection
