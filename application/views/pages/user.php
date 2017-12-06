<?php
session_start();
if(empty($_SESSION['user_ID'])){
header("location: login");}
$ID = $_SESSION['user_ID'];
?>
    <div style="padding-left: 25%; padding-right: 25%;">
        <p style="font-size: 50px;">Welcome back, <?php echo $_SESSION['username']; ?></p>
        <form class="form-horizontal">
            <a href="<?php echo base_url()?>pages/Check/<?php echo $ID ?>" class="btn btn-primary" style="width: 100%;">Check your sports session</a></form>
            </br>

          </br>
            <a href="<?php echo base_url()?>pages/edituser" class="btn btn-primary" style="width: 100%;">edit your information</a>
            </br>
          </br>

          <a href="<?php echo base_url()?>pages/logout" class="btn btn-primary" style="width:100%;">log out</a>



        </form>
    </div>
