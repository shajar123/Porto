@extends('admin.layout.layout')
@section('title')
    Products
@endsection
@section('body')

    <div class="page-content">
        <div class="container-fluid">
            <div class="page-title-box d-flex justify-content-between">

                <h2> Products Page</h2>
                <div><a class="btn btn-primary" href="{{ route('create.products') }}">Add +</a></div>
                
            </div>

            <div class="card ">

                <div class="card-body py-3">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example2">
                            <thead>
                                <tr>
                                    <th class="wd-15p border-bottom-0">Title</th>

                                    <th class="wd-15p border-bottom-0">Price</th>
                                    <th class="wd-15p border-bottom-0">Sale Price</th>
                                    <th class="wd-15p border-bottom-0">Image</th>
                                    <th class="wd-20p border-bottom-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->title ?? '' }}</td>

                                        <td>{{ $product->price ?? '' }}</td>
                                        <td>{{ $product->sale_price ?? '' }}</td>
                                        <td><img src="{{ asset($product->image) }}"
                                                style="height: 50px;width: 50px;object-fit: cover" alt=""></td>
                                        <td>

                                                <a  class="btn btn-success" href="{{ route('edit.products',$product->slug) }}"><i class="fa fa-edit"></i></a>
                                            <button onclick="deleteProducts('{{ $product->id }}',$(this))" type="button"
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


@endsection

@section('custom-scripts')
    <script>




        function setValues(id, title, description, sale_price, price, image) {
            $('#edit_category_id').val(id);
            $('#edit_title').val(title);
            $('#categoryImgPreview').attr('src', image);
        }



        function deleteProducts(id, element) {
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
