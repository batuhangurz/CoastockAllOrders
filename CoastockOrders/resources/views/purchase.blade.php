@extends('layout.master')
@section('body')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Purchase</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid ">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #E0E0E0">
                        <h3 class="card-title">Product Quantity Counting Table</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 350px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Search Product Name</span>
                                </div>
                                <input type="text" id="table_search" name="table_search" class="form-control" placeholder="Search">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-default" onclick="searchTable()">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive p-0" style="max-height: 400px; overflow-y: auto;">

                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Order Total Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($arr as $product)
                                <tr>
                                    <td>{{ $product['product_name'] }}</td>
                                    <td>{{ $product['quantity'] }}</td>
                                    <td>
                                        <button data-toggle="modal" data-target="#modal-lg" type="button" id="product-{{ $product["id"] }}" class="btn btn-dark show-suppliers-btn" data-product_name="{{ $product['product_name'] }}" data-suppliers="{{ implode(" , ",$product["suppliers"]) }}">Show Suppliers</button>
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

<!-- Show Suppliers Button Modal -->

<div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <span id="product-name"></span>
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

<!-- Show Suppliers Button -->

<script type="module">
    $(document).ready(function() {
        console.log("ready!");

        $(".show-suppliers-btn").on("click", function() {
            $("#modal-body-suppliers").html($("#" + this.id).data("suppliers"));
            $("#product-name").html($("#" + this.id).data("product_name"));

        });
        $('#modal-lg').on('shown.bs.modal', function() {

        });

    });

    function cas(params) {
        console.log(params)
    }
</script>


<!-- Search Button -->

<script>
    function searchTable() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("table_search");
        filter = input.value.toUpperCase();
        table = document.getElementsByClassName("table")[0];
        tr = table.getElementsByTagName("tr");

        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

@endsection