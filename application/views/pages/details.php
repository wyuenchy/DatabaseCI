<h2>Details Of the session</h2>
<div class='container'><br>

<?php
foreach ($session->result() as $row) {
  echo "<img src='".base_url()."/images/".$row->session_photo.".jpg' width='400px'><br><br>";
  echo "<table>";
  echo "<tr><td width ='200px'>Session ID:</td><td>".$row->session_ID."</td></tr>";
  echo "<tr><td width ='200px'>Session Name: </td><td>".$row->session_title."</td></tr>";
  echo "<tr><td width ='200px'>Organizer Name: </td><td>";
  foreach($org->result() as $organizer){
    echo "<a href='".base_url()."pages/org/".$organizer->organizer_ID."'>".$organizer->organizer_name."&nbsp&nbsp</a>";
  }
  echo "</td></tr>";
  echo "<tr><td width ='200px'>Session Date: </td><td>".$row->date."</td></tr>";
  echo "<tr><td width ='200px'>Session Venue: </td><td>".$row->venue_name."</td></tr>";
  echo "<tr><td width ='200px'>Session Start Time:</td><td>".$row->time."</td></tr>";
  echo "<tr><td width ='200px'>Session Duration(in Hour):</td><td>".$row->duration."</td></tr>";
  echo "<tr><td width ='200px'>Ticket Available:</td><td>".$row->ticket_available."</td></tr>";
  echo "<tr><td width ='200px'>Ticket Price:</td><td>$".$row->ticket_price."</td></tr>";
  echo "<tr><td width ='200px'>Trainer Name:</td><td>";
  foreach($trainer->result() as $tra){
    echo "<a href='".base_url()."pages/trainer/".$tra->trainer_ID."'>".$tra->trainer_name."&nbsp&nbsp</a>";
  }
  echo "</td></tr>";
  echo "<tr><td width ='200px'>Category:</td><td>".$row->category."</td></tr>";
  echo "</table><br>";
  if($row->ticket_available=="0"){
    echo "<a href='#' class='btn btn-default btn-lg'>Ticket Unavailable</a>";
  }else{
    echo "<a href='#' class='btn btn-primary btn-lg'>Get Ticket</a>";
    }
}
 ?>
<br>
</div>
