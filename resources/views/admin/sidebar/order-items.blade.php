



@extends('admin.layout.layout')
@section('body')



                <div class="page-content">
                    <div class="container-fluid">

                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">ORDER DETAILS</h6>

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
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title">TOTAL ORDERS</h4>

                                        <div class="table-responsive">
                                            <table class="table table-editable table-nowrap align-middle table-edits">
                                                <thead>
                                                    <tr>
                                                        <th>title</th>
                                                        <th>image</th>
                                                        <th>sales-price</th>
                                                        <th>Category</th>
                                                        <th>Color</th>
                                                        <th>Size</th>





                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($products as $product)


                                                    <tr data-id="1">
                                                        <td >{{ $product->title }}</td>
                                                        <td ><img src="{{ asset($product->image) }}"
                                                            style="height: 50px;width: 50px;object-fit: cover" alt=""></td>
                                                        <td>{{ $product->sale_price }}</td>
                                                        @php
                                                            $categories=App\Models\Category::where('id',json_decode($product->category_id),)->get();
                                                        @endphp
                                                        @foreach ($categories as $category)
                                                        <td>{{ $category->title }}</td>


                                                        @endforeach

                                                        @php
                                                            $colors = App\Models\Color::where('id',json_decode($product->color_id))->get();
                                                        @endphp

                                                        @foreach($colors as  $color)
                                                        <td>{{ $color->name}}</td>


                                                        @endforeach
                                                        @php
                                                            $sizes = App\Models\Size::where('id',json_decode($product->size_id))->get();
                                                        @endphp
                                                        @foreach ($sizes as $size)
                                                        <td>{{ $size->name }}</td>


                                                        @endforeach
                                                    </tr>
                                                    @endforeach



                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->





            <!-- end main content-->

        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->

        <!-- /Right-bar -->

        <!-- Right bar overlay-->


@endsection
