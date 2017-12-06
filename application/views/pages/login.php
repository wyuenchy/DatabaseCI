<?php
// Include config file
//require_once 'config.php';

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$servername = "localhost";
$un = "admin";
$pw = "root";
$database = "sport_system";

// Create connection
$conn = new mysqli($servername, $un, $pw,$database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
    }

    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT username, password FROM user WHERE username = ?";

        if($stmt = mysqli_prepare($conn, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);

                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        //if(password_verify($password, $hashed_password)){
                        if($password == $hashed_password){
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            session_start();
                            $_SESSION['username'] = $username;
                            $sql_string = "SELECT user_ID FROM user WHERE username ='".$username . "' ";
                        		//echo "<br /><b>SQL COMMAND:</b> " . $sql_string;
                        		$sql_query = $this->db->query($sql_string);
                            $_SESSION['user_ID']="";
                            foreach ($sql_query->result() as $row)
                            			{
                                  $_SESSION['user_ID'] = $row->user_ID;
                                  }
                            //header("location: welcome.php");
                            header("location: user");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = 'The password you entered was not valid.';
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = 'No account found with that username.';
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
      //  mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($conn);
}
?>
    <div style="padding-left: 25%; padding-right: 25%;">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="form-horizontal">

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 25px;">Username:</label>
                <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 25px;">Password:</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <!--<input type="submit" class="btn btn-primary" value="Submit">-->
                <button type="submit" class="btn btn-primary">Login</button>
            </div>

        </form>
        <p style="font-size: 25px;">Don't have an account? <button class="btn btn-primary"><a href="register" style="color: white;">Sign up now</a>.</button></p>
    </div>
