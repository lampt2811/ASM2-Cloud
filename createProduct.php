<?php  include('template/header.php'); ?>
<?php  include('database.php'); ?>

<?php
    $name = "";
	$quantity = "";
	$price = 0;

	if (isset($_POST['save'])) {
        //header("Location: http://localhost/ASM2-Cloud/product.php"); 
		$name = $_POST['name'];
		$quantity = $_POST['qtyInStock'];
		$price = $_POST['price'];

            pg_query($conn, "INSERT INTO product (Name, QtyInStock, Price) 
            VALUES ('$name', '$quantity', '$price')"); 
            $result = pg_query($connect, $query);
            echo '<script>window.location.href = "product.php";</script>';
            pg_close($connect);
 

		
    }
    
            pg_query($conn, "INSERT INTO product (Name, QtyInStock, Price) 
            VALUES ('$name', '$quantity', '$price')"); 
            $result = pg_query($connect, $query);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Products Table</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            
                        </div>
                        <div class="card-body">
                            <form method="post" action="createProduct.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name Product</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter name" name="name">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quantity in stock</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter quanity" name="qtyInStock">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Price</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter price" name="price">
                                </div>
                                
                                <button type="submit" class="btn btn-primary" name="save">Submit</button>
                            </form>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

<?php  include('template/footer.php'); ?>           

/*
if ($connect === false) 
    {
      die("ERROR: Could not connect to the database server!");
    } 
  else 
    {
      echo ("Connect successfully!");
      $product_name = $_POST['product-name'];
      $product_price = $_POST['product-price'];
      $product_amount = $_POST['product-amount'];
    }
    */