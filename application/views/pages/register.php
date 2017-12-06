<?php

$username = $password = $passwordCheck = "";
$username_err=$password_err=$passwordCheck_err="";
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty

    if(empty(trim($_POST["username"]))){
        $username_err = 'Please enter username.';
    } else{
        $username = trim($_POST["username"]);
        $username_err = '';
    }

    // Check if password is empty
    if(empty(trim($_POST['password']))){
        $password_err = 'Please enter your password.';
    } else{
        $password = trim($_POST['password']);
        $password_err = '';
    }

    if(empty(trim($_POST['passwordCheck']))){
        $passwordCheck_err = 'This must not be empty.';
    } else{
        $passwordCheck = trim($_POST['passwordCheck']);
        if($password != $passwordCheck){
          $passwordCheck_err = 'password is not matched';
        }else
        $passwordCheck_err = '';
    }

    $counter="0";

    if(empty($username_err) && empty($password_err) && empty($passwordCheck_err)){
        foreach ($query_userdata->result() as $row){
          $counter++;
        }
        foreach ($query_userdata->result() as $row)
              {
                if($username == $row->username){
                  $username_err = 'This username is registered';
                  break;
                }else{
                  $counter = $counter+501;
                  $sql = "INSERT INTO user (username, password, user_ID) VALUES ('$username','$password',' $counter')";
                   $this->db->query($sql);
                   header("location: login");
                   break;
                }
              }



        // Close statement
      //  mysqli_stmt_close($stmt);
    }
    // Close connection
}
?>
   <div style="padding-left: 25%; padding-right: 25%;">

     <form method="post"  class="form-horizontal" >

       <label style="font-size: 25px;">Username:</label>
       <input style="width:100%" type="text" name="username"value="<?php echo $username; ?>"  size="40">
       <span><?php echo $username_err; ?></span>

       <label style="font-size: 25px;">Password:</label>
       <input style="width:100%" type="text" name="password"value="<?php echo $password; ?>"  size="40">
       <span><?php echo $password_err; ?></span>
       <label style="font-size: 25px;">Confirm Password:</label>
       <input style="width:100%;"type="text" name="passwordCheck"value="<?php echo $passwordCheck; ?>"  size="40">
       <span><?php echo $passwordCheck_err; ?></span>
     </br></br>

          <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
