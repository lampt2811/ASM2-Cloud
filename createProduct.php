<?php  include('template/header.php'); ?>
<?php  include('database.php'); ?>

<?php
    $name = "";
	$quantity = "";
	$price = 0;

	if (isset($_POST['save'])) {
        //header("Location: http://localhost/ASM2-Cloud/product.php"); 
		$name = $_POST['name'];
		$quantity = $_POST['quantity'];
		$price = $_POST['price'];
        try {
            pg_query($conn, "insert into product (Name, Quantity, Price) values ('".$_POST['name']."','".$_POST['quantity']."','".$_POST['price']."')"); 
		    echo '<script>window.location.href = "product.php";</script>';
            exit();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
		
	}
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
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter name" name="name">
                                    
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quantity</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter quanity" name="quantity">
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