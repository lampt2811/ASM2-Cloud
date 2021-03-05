<?php  include('template/header.php'); ?>
<?php  include('database.php'); ?>
<?php
    $productCode = "";
	$bill = "";
	$quantity = "";

	if (isset($_POST['save'])) {
		$productCode = $_POST['OrderID'];
		$bill = $_POST['BillID'];
        $quantity = $_POST['Qty'];
        try {
            $query = "INSERT INTO orderproduct (OrderID, BillID, Qty) VALUES ('$productCode', '$bill', '$quantity')";
            $orderproduct = pg_query($conn, $query);
            if(!$orderproduct) {
                echo 'Something went wrong, please try again';
            }
            echo '<script>window.location.href = "order.php";</script>';
            exit();
        } catch (Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
		
		
	}
	
?> 
            <!-- Begin Page Content -->
            <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Order Table</h1>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    
                </div>
                <div class="card-body">
                    <form method="post" action="addorder.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ProductCode</label>
                            <br>
                            <select name='ProductCode'>
                            <option >Select Product</option>
                            <?php
                                $sqlie = "select * from product";
                                $results = pg_query($conn,$sqlie);
                                while ($rows = pg_fetch_row($results)){
                                    echo "<option value=".$rows['ProductCode']." >".$rows['Name']."</option>";
                                }
                            ?>
                            </select>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">BillID</label>
                            <br>
                            <select name='BillID'>
                            <option >Select Bill</option>
                            <?php
                                $sqlie = "select * from bill";
                                $results = pg_query($conn,$sqlie);
                                while ($rows = pg_fetch_row($results)){
                                    echo "<option value=".$rows['BilID']." >".$rows['Date']."</option>";
                                }
                            ?>
                            </select>

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Quantity </label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter quantity" name="Qty">
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