



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
                                                        <th>id</th>
                                                        <th>order_id</th>
                                                        <th>product_id</th>
                                                        <th>Button</th>



                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orderitems as $orderitem)

                                                    <tr data-id="1">
                                                        <td data-field="id" style="width: 80px">{{ $orderitem->id }}</td>
                                                        <td data-field="name">{{ $orderitem->order_id }}</td>
                                                        <td data-field="age">{{$orderitem->product_id }}</td>
                                             


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