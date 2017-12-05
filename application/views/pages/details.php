<?php
foreach ($session->result() as $row) {
  echo$row->session_title."<br>";
  echo$row->trainer_name."<br>";

}
 ?>
