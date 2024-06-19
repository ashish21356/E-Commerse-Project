<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Admin|Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <base href="<?= base_url() ?>">
    <?php $this->load->view('links'); ?>

    <!-- Styles -->
    <style>
        .pagination-btn {
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            cursor: pointer;
        }

        .pagination-btn:hover {
            background-color: #ddd;
        }

        .pagination-btn.active {
            background-color: #007bff;
            color: white;
        }
    </style>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Serch product by input text start -->
    <script>

        $(document).ready(function () {
            var currentPage = 1;
            var itemsPerPage = 5;

            function loadProducts(page) {
                console.log("Loading products for page: ", page);
                $.ajax({
                    url: "<?php echo base_url('Product_ctr/Get_all_Product'); ?>",
                    method: "GET",
                    data: { page: page },
                    dataType: "json",
                    success: function (data) {
                        console.log("Data received: ", data);
                        var products = data.data;
                        var totalProducts = data.total;
                        var totalPages = Math.ceil(totalProducts / itemsPerPage);
                        console.log("Total products:", totalProducts, "Total pages:", totalPages);

                        if (totalPages > 0) {
                            var html = '<table class="table align-middle table-nowrap mb-0"><tr><th>S. No</th><th>Product ID</th><th>Product Name</th><th>Brand</th><th>Product Price</th><th>In Stock</th><th>Actions</th></tr>';
                            var startSerialNumber = (page - 1) * itemsPerPage + 1;

                            for (var i = 0; i < products.length; i++) {
                                var serialNumber = startSerialNumber + i;
                                html += '<tr>';
                                html += '<td>' + serialNumber + '</td>';
                                html += '<td><img src="uploads/' + products[i].pro_main_image + '" class="product-image"  width="100"/></td>';
                                html += '<td>' + products[i].pro_name + '</td>';
                                html += '<td>' + products[i].brand + '</td>';
                                html += '<td>' + products[i].mrp + '</td>';
                                html += '<td>' + products[i].stock + '</td>';
                                html += '<td>' +
                                    '<div class="d-flex gap-3">' +
                                    '<a  onClick="update_product(' + products[i].pro_id + ');" class="btn btn-success btn-sm"><i class="mdi mdi-pencil"></i></a>' +
                                    '<a  onClick="unitdelete(' + products[i].pro_id + ');" class="btn btn-danger btn-sm"><i class="mdi mdi-delete"></i></a>' +
                                    '</div>' +
                                    '</td>';
                                html += '</tr>';
                            }
                            html += '</table>';
                            $('#productTable').html(html);
                            myFunction();

                            var paginationHtml = '<div>';
                            for (var i = 1; i <= totalPages; i++) {
                                paginationHtml += '<button class="pagination-btn" data-page="' + i + '">' + i + '</button>';
                            }
                            paginationHtml += '</div>';
                            $('#paginationControls').html(paginationHtml);

                            // Set active class for the current page button
                            $('.pagination-btn').removeClass('active');
                            $('.pagination-btn[data-page="' + page + '"]').addClass('active');

                            // Pagination button click event
                            $('.pagination-btn').click(function () {
                                var clickedPage = $(this).data('page');
                                console.log("Pagination button clicked for page: ", clickedPage);
                                loadProducts(clickedPage);
                            });
                        } else {
                            $('#paginationControls').html('');
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.error("AJAX Request Failed: ", textStatus, errorThrown);
                        $('#productTable').html('<p>An error occurred while fetching product data.</p>');
                    }
                });
            }
        

            // Call loadProducts with currentPage to ensure the first page loads correctly
            loadProducts(currentPage);
        });


// Function to filter products based on input
function myFunction(page) {
    //alert("hii");
    $.ajax({
                    url: "<?php echo base_url('Product_ctr/Get_all_Product'); ?>",
                    method: "GET",
                    data: { page: page },
                    dataType: "json",
                    success: function (data) {
                        console.log("Data received: ", data);
                        var products = data.data;

            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("productTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2]; // Assuming you want to filter based on the first column
                //console.log("what is td",td);
                if (td) {
                    //console.log("fdggggd",td.textContent);
                    //console.log("inner text",td.innerText);
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        //alert('nothing found');
                        tr[i].style.display = "none";
                    }
                }       
            }
        }
    });}
        // Attach event listener to the input field
        $('#myInput').on('input', function() {
            myFunction();
        });





        // unit delete---------------------------
        function unitdelete(b) {
            var id = b;
            //alert(id);
            var hr = new XMLHttpRequest();
            var url = "<?= base_url(); ?>Product_ctr/product_delete?pro_id=" + id;
            //alert(url);
            var vars = "";

            hr.open("GET", url, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    var MyObj = JSON.parse(return_data);
                    document.getElementById('processdata').innerHTML = MyObj.msg;
                    alert(MyObj.msg);
                    // Reload the products list after deletion
                    location.reload();
                    //loadProducts(1);
                }
            }
            hr.send(vars);
            document.getElementById('processdata').innerHTML = "Please Wait";
        }
        // update product
        function update_product(b) {
            var id = b;
            alert(id);
            var hr = new XMLHttpRequest();
            var url = "<?= base_url(); ?>Product_ctr/product_update?pro_id=" + id;
            alert(url);
            var vars = "";

            hr.open("GET", url, true);
            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            hr.onreadystatechange = function () {
                if (hr.readyState == 4 && hr.status == 200) {
                    var return_data = hr.responseText;
                    document.getElementById('processdata').innerHTML = return_data;
                }
            }
            hr.send(vars);
            document.getElementById('processdata').innerHTML = "Please Waituu";
        }

    </script>

</head>

<body>
    <?php $this->load->view('header'); ?>

    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid" id="processdata">
                <!-- this is sucess msg show -->
                <?php if ($this->session->flashdata('successmag')) { ?>
                    <div class="alert alert-success">
                        <?= $this->session->flashdata('successmag') ?>
                    </div>

                <?php } ?>
                <!-- this is err msg show -->
                <?php if ($this->session->flashdata('Errmsg')) { ?>
                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('Errmsg') ?>
                    </div>

                <?php } ?>
                <title>Product List with Pagination</title>
                <div id="productTable">
                    <!-- Product table will be displayed here -->
                </div>
                <div id="paginationControls">
                    <!-- Pagination buttons will be displayed here -->
                </div>

                <div id="tabledata">
                    <!-- Pagination buttons will be displayed here -->
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('footer'); ?>
</body>

</html>