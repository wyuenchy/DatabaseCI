<?php session_start(); ?>
<?php

$username = $password = $firstname = $lastname = $email = $phone = "";
$username_err = $password_err = $firstname_err = $lastname_err = $email_err = $phone_err = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){

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

    if(empty(trim($_POST['firstname']))){
        $firstname_err = 'Please enter your name.';
    } else{
      $firstname = trim($_POST['firstname']);
      $firstname_err = '';
    }
    if(empty(trim($_POST["lastname"]))){
        $lastname_err = 'Please enter lastname.';
    } else{
        $lastname = trim($_POST["lastname"]);
        $lastname_err = '';
    }
    if(empty(trim($_POST["phone"]))){
        $phone_err = 'Please enter phone.';
    } else{
        $phone = trim($_POST["phone"]);
        $phone_err = '';
    }
    if(empty(trim($_POST["email"]))){
        $email_err = 'Please enter email.';
    } else{
        $email = trim($_POST["email"]);
        $email_err = '';
    }

    if(empty($username_err) && empty($password_err) && empty($firstname_err) && empty($lastname_err) && empty($email_err) && empty($phone_err)){
                  $ID = $_SESSION['user_ID'];
                  $sql = "UPDATE user SET username = '$username', password = '$password', fristname = '$firstname',lastname = '$lastname', email = '$email' , phone_no='$phone' WHERE user_ID = $ID;";
                   $this->db->query($sql);
                    header("location: edituser");
                }
              }



        // Close statement
      //  mysqli_stmt_close($stmt);

    // Close connection

?>
<div style="padding-left: 25%; padding-right: 25%;">
                  <p style="font-size: 50px;">Edit your information</p>
                  <form method="post" class="form-horizontal">
                      <?php
                      foreach ($query_userdata->result() as $row)
          			         {
                           if($row->user_ID == $_SESSION["user_ID"]){
                             $var = "First Name: ";
                             $lb = "</br>";
                             echo $var;
                             echo $lb;
                             echo '<input required  type = "text" name = "firstname" value="' . $row->fristname . '" />';
                             echo $lb;
                             echo $lb;
                             echo $firstname_err;
                              $var = "Last Name: ";
                              echo $var;
                             echo $lb;
                             echo '<input required  type = "text" name = "lastname" value="' . $row->lastname . '" />';
                             echo $lb;
                             echo $lb;
                             echo $lastname_err;
                              $var = "Email: ";
                              echo $var;
                             echo $lb;
                             echo '<input required  type = "text" name = "email" value="' . $row->email . '" />';
                             echo $lb;
                             echo $lb;
                             echo $email_err;
                              $var = "Phone: ";
                              echo $var;
                             echo $lb;
                             echo '<input required  type = "text" name = "phone" value="' . $row->phone_no . '" />';
                             echo $lb;
                             echo $lb;
                             echo $phone_err;
                             $var = "Username: ";
                             echo $var;
                             echo $lb;
                             echo '<input required  type = "text" name = "username" value="' . $row->username . '" />';
                             echo $lb;
                             echo $username_err;
                             echo $lb;
                             $var = "Password: ";
                             echo $var;
                             echo $password_err;
                             echo $lb;
                             echo '<input required  type = "text" name = "password" value="' . $row->password . '" />';

                           }
                         }
                         ?>
                       </br></br>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<?php

/*foreach ($query_userdata->result() as $row)
			{
      echo "<p class='testing'>" . $row->name . "</p>";

    }*/
?>
