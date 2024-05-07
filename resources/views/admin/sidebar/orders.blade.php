



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
                                                        <th>user_id</th>
                                                        <th>Total_Amount</th>
                                                        <th>Status</th>
                                                        <th>Action</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($orders as  $order)

                                                    <tr data-id="1">

                                                        <td data-field="id" style="width: 80px">{{ $order->id }}</td>
                                                        <td data-field="name">{{ $order->user_id }}</td>
                                                        <td data-field="age">{{ $order->total_amount }}</td>

                                                        <td>
                                                            <div class="btn-group">
                                                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    {{ $order->status }}
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item status-change" href="#" data-status="0" data-order-id="{{ $order->id }}">Pending</a>
                                                                    <a class="dropdown-item status-change" href="#" data-status="1" data-order-id="{{ $order->id }}">Completed</a>
                                                                    <a class="dropdown-item status-change" href="#" data-status="2" data-order-id="{{ $order->id }}">Rejected</a>
                                                                    <div class="dropdown-divider"></div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td><a href="{{ route('admin.orders',$order->id) }}" class="btn btn-success">See orders</a></td>

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
@section('custom-scripts')
<script>
    $(document).ready(function() {
        $('.status-change').click(function(e) {
            e.preventDefault();
            var status = $(this).data('status');
            var orderId = $(this).data('order-id');
            $.ajax({
                type: 'POST',
                url: '{{ route('order.status') }}',
                dataType: 'json',
                data: {
                    status: status,
                    order_id: orderId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(res) {
                    if (res.Error == false) {
                        $.growl.notice({
                            message: res.Message
                        });
                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else {
                        $.growl.error({
                            message: res.Message
                        });
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    // Handle errors if any
                },
                complete: function() {
                    $('.submitBtn2').html('Save');
                    $('.submitBtn2').prop('disabled', false);
                }
            });
        });
    });
</script>

@endsection
