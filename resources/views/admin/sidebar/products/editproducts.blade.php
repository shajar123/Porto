@extends('admin.layout.layout')
@section('title')
    Products
@endsection
@section('body')
    <!--Page header-->
    <div class="page-header">
        <div class="page-leftheader">
            <h4 class="page-title mb-0">Edit Manage Products</h4>
        </div>
    </div>
    <!--End Page header-->

    <!--div-->
    <div class="card">
        <div class="card-header">
            <div class="card-title">Edit Products</div>
        </div>
        <div class="card-body">
            <form id="editProductsForm">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id" id="edit_product_id">

                <div class="row">
                    <div class="col-md-10">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Title</label>

                            <input value="{{ $product->title }}" id="edit_title" autocomplete="off" type="text"
                                class="form-control" name="title">
                        </div>
                        @php

                            $cat = App\Models\Category::whereIn('id', json_decode($product->category_id))->pluck('id');
                            $cat = $cat->toArray();
                            $colour = App\Models\Color::whereIn('id', json_decode($product->color_id))->pluck('id');
                            $colour = $colour->toArray();
                            $s = App\Models\Size::whereIn('id', json_decode($product->size_id))->pluck('id');
                            $s = $s->toArray();
                        @endphp

                        <div class="form-group">
                            <label class="form-label">Categories</label>
                            <select autocomplete="off" class="form-control select2" name="category_id[]" id="categories"
                                data-placeholder="Choose Browser" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ in_array($category->id, $cat) ? 'selected' : '' }}>
                                        {{ $category->title ?? '' }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for=""><b>Color</b></label>
        
                            <select class="form-select select2" name="color_id[]" id="color" aria-label="Default select example"
                                multiple>
                                @foreach ($colors as $color)
                                    <option value="{{ $color->id }}"
                                        {{ in_array($color->id, $colour) ? 'selected' : '' }}>
                                        {{ $color->name }}
                                    </option>
                                @endforeach
                            </select>
        
                        </div>
                        <div class="form-group ">
                            <label for=""><b>Size</b></label>
        
                            <select class="form-select select2" id="size" name="size_id[]" aria-label="Default select example"
                                multiple>
                                @foreach ($sizez as $size)
                                    <option value="{{ $size->id }}"
                                        {{ in_array($size->id, $s) ? 'selected' : '' }}>
                                        {{ $size->name }}
                                        </option>
                                @endforeach
                            </select>
        
                        </div>
                    </div>
                    <div class="col-md-2 d-flex justify-content-center align-items-center">
                        <div class="form-group mb-0">
                            <img id="categoryImgPreview" src="{{ asset($product->image) }}" onclick="$(this).next().click()"
                                src="" style="height: 100px;width: 100px;object-fit: cover" alt="">
                            <input autocomplete="off" type="file" hidden="" name="image"
                                onchange="showSelectedImage($(this),'categoryImgPreview')">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for=""><b>Description</b></label>
                            <input id="edit_description" value="{{ $product->description }}" type="text"
                                name="description" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for=""><b>Price</b></label>
                            <input id="edit_price" value="{{ $product->price }}" type="text" name="price"
                                class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for=""><b>Sale Price</b></label>
                    <input autocomplete="off" type="text" value="{{ $product->sale_price }}" name="sale_price"
                        class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary  submitBtn2">Save</button>
                </div>
                
            </form>
        </div>
    </div>
    <!--/div-->
@endsection

@section('custom-scripts')
    <script>
       

        $('#editProductsForm').on("submit", function(e) {
            e.preventDefault()
            var form = $('#editProductsForm')[0];
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
    </script>
@endsection
