<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $mobileno = $city = $address = $password = $confirm_password = "";
$username_err = $mobileno_err = $city_err = $address_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } 
    else{
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
		// validate mobile no
        $param_mobileno = trim($_POST["mobileno"]);
        if(empty($param_mobileno)){
            $mobileno_err = "Please enter an mobileno.";     
        }elseif(strlen(trim($_POST["mobileno"])) < 10){
            $mobileno_err = "mobile no must have atleast 10 characters.";
        }elseif(strlen(trim($_POST["mobileno"])) > 10){
            $mobileno_err = "mobile no must have  10 characters.";
        }else{
            $mobileno = $param_mobileno;
        }
		// validate city
			$param_city = trim($_POST["city"]);
			if(empty($param_city)){
				$city_err = "Please enter an city.";     
			} else{
				$city = $param_city;
			}
			
		 // Validate address
			$input_address = trim($_POST["address"]);
			if(empty($input_address)){
				$address_err = "Please enter an address.";     
			} else{
				$address = $input_address;
			}
            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($username_err) && empty($mobileno_err) && empty($city_err) && empty($address_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, mobileno, city, address, password) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_mobileno, $param_city, $param_address, $param_password);
            
            // Set parameters
            $param_username = $username;
			$param_mobileno =$mobileno;
			$param_city =$city;
			$param_address = $address;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body {
            font: 15px sans-serif;
            color: black;
            background-image: url("vegetableimg.jpg");
            opacity: 10px;
            image-opacity: -10px;
            background-size: cover;
        }

        .wrapper {
            width: 350px;
            padding: 12px;
            background-color: rgba(245, 245, 153, 0.425);
            border-radius: 46px;
            margin-left: 30px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" pattern="[A-Za-z]+" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($mobileno_err)) ? 'has-error' : ''; ?>">
                <label>Mobile No</label>
                <input type="number" name="mobileno" class="form-control" value="<?php echo $mobileno; ?>">
                <span class="help-block"><?php echo $mobileno_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
                <label>City</label>
                <input name="city" class="form-control" value="<?php echo $city; ?>">
                <span class="help-block"><?php echo $city_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>">
                <label>Address</label>
                <textarea name="address" pattern="[A-Za-z]" class="form-control"><?php echo $address; ?></textarea>
                <span class="help-block"><?php echo $address_err;?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control"
                    value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="User Submit">

                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Already have an account? <a href="login.php">Login here</a>.</p>
            <p>Farmer/Admin registration? <a href="http://localhost/farm/farmer_register.php">Sign Up For New Farmer</a></p>
        </form>
    </div>
    <?php
    include 'footer.php';
?>

</body>

</html>