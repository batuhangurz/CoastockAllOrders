<style>
    .order-button {
        background-color: #343a40; /* dark */
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        border-radius: 25px;
        transition: background-color 0.3s, color 0.3s;
    }
    .order-button.completed {
        background-color: #28a745; /* green */
        color: white;
    }
</style>

@extends('layout.master')
@section('body')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Orders</h1>
            </div>
            <div class="col-sm-6"></div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body table-responsive">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Delivery Turn</th>
                                    <th>Order id</th>
                                    <th>Customer Name</th>
                                    <th>IMO Number</th>
                                    <th>Action</th>
                                    <th>Order Completion</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($arr2 as $order)
                                <tr>
                                    <td>1</td>
                                    <td>{{ $order['id'] }}</td>
                                    <td>{{ $order['customer_name'] }}</td>
                                    <td>{{ $order['imo_number'] }}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#modal-lg" type="button" id="order-{{ $order['id'] }}" class="btn btn-dark show-suppliers-btn" data-id="{{ $order['id'] }}" data-products="{{ implode('|', array_map(function($product, $quantity) { return $product . ' ⋯ ' . $quantity; }, array_keys($order['products']), $order['products'])) }}">Order Details</button>
                                    </td>
                                    <td>
                                        <button class="order-button" id="orderButton-{{ $order['id'] }}">Click to Complete</button>
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
</section>

                <!-- Order Details Button Modal --> 

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <span id="product-name">Order Products</span>
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modal-body-suppliers">
            </div>
            <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
            </div>
        </div>
    </div>
</div>

                <!-- Order Completed Button -->

<script>
    document.querySelectorAll('.order-button').forEach(function(button) {
        button.addEventListener('click', function() {
            this.classList.add('completed');
            this.textContent = 'Order Completed';
        });
    });
</script>


                <!-- Order Details Button -->

<script type="module">
    $(document).ready(function() {
        console.log("ready!");

        $(".show-suppliers-btn").on("click", function() {
            let productsData = $(this).data("products");
            let productsHtml = productsData.replace(/\|/g, "<br>");
            $("#modal-body-suppliers").html(productsHtml);
        });
    });

    function cas(params) {
        console.log(params)
    }
</script>


@endsection
