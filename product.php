<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = $price = $prodesc = $qty = $category = $pimage = "";
$name_err = $price_err = $prodesc_err = $qty_err = $category_err = $pimage_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
     // Validate price
    $input_price = trim($_POST["price"]);
    if(empty($input_price)){
        $price_err = "Please enter the product price.";     
    } elseif(!ctype_digit($input_price)){
        $price_err = "Please enter a positive integer value.";
    } else{
        $price = $input_price;
    }
	
   // Validate product description 
    $input_prodesc = trim($_POST["prodesc"]);
    if(empty($input_prodesc)){
        $prodesc_err = "Please enter an product description .";     
    } else{
        $prodesc = $input_prodesc;
    }
    
    // Validate Quantity
    $input_qty = trim($_POST["qty"]);
    if(empty($input_qty)){
        $qty_err = "Please enter the Quantity.";     
    } elseif(!ctype_digit($input_qty)){
        $qty_err = "Please enter a positive integer value.";
    } else{
        $qty = $input_qty;
    }
 
  // Validate category
	 
    $input_category = trim($_POST["category"]);
    if(empty($input_category)){
        $category_err = "Please select the category .";     
    } else{
        $category = $input_category;
    }
	
	
	// Validate product image 
    $input_pimage = trim($_POST["pimage"]);
    if(empty($input_pimage)){
        $pimage_err = "Please select the product image .";     
    } else{
        $pimage = $input_pimage;
    }
	
    // Check input errors before inserting in database
    if(empty($name_err) && empty($price_err) && empty($prodesc_err) && empty($qty_err)  && empty($category_err) && empty($pimage_err)){
        // Prepare an update statement
        $sql = "UPDATE farmer_product SET name=?, price=?, prodesc=?, qty=?, category=?, pimage=? WHERE id=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssssi", $param_name, $param_price, $param_prodesc, $param_qty, $param_category, $param_pimage, $param_id);
            
            // Set parameters
            $param_name = $name;
			$param_price = $price;
            $param_prodesc = $prodesc;
            $param_qty = $qty;
			$param_category = $category;
			$param_pimage = $pimage;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: farmer_product.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
	
    
    // Close connection
    mysqli_close($link);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM farmer_product WHERE id = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $name = $row["name"];
					$price = $row["price"];
                    $prodesc = $row["prodesc"];
                    $qty = $row["qty"];
					$category = $row["category"];
					$pimage = $row["pimage"];
					
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>">
                            <span class="help-block"><?php echo $name_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($price_err)) ? 'has-error' : ''; ?>">
                            <label>Price</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $price; ?>">
                            <span class="help-block"><?php echo $price_err;?></span>
                        </div>
                          <div class="form-group <?php echo (!empty($prodesc_err)) ? 'has-error' : ''; ?>">
                            <label>product description </label>
                            <textarea name="prodesc" class="form-control"><?php echo $prodesc; ?></textarea>
                            <span class="help-block"><?php echo $prodesc_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($qty_err)) ? 'has-error' : ''; ?>">
                            <label>Quantity</label>
                            <input type="text" name="qty" class="form-control" value="<?php echo $qty; ?>">
                            <span class="help-block"><?php echo $qty_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($category_err)) ? 'has-error' : ''; ?>">
                            <label>Category</label>
							   <select name="category" class="form-control" value="<?php echo $category; ?>">
								  <option value="">Select...</option>
								  <option value="Fruits">Fruits</option>
								  <option value="Vegetable">Vegetable</option>
								  <option value="Grain">Grain</option>
								</select>
                            <span class="help-block"><?php echo $category_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($pimage_err)) ? 'has-error' : ''; ?>">
                            <label>Product Image</label>
                            <input type="file" name="pimage" class="form-control" value="<?php echo $pimage; ?>">
                            <span class="help-block"><?php echo $pimage_err;?></span>
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="product.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
    <?php
    include 'footer.php';
?>

</body>
</html>