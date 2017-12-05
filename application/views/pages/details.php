<h2>Details Of the session</h2>
<div class='container'><br>
  <table>
<?php
foreach ($session->result() as $row) {
  echo "<tr><td>Session ID:</td><td>".$row->session_ID."</td></tr>";
  echo "<tr><td>Session Name: </td><td>".$row->session_title."</td></tr>";
  echo "<tr><td>Organizer Name: </td><td>";
  foreach($org->result() as $organizer){
    echo "<a href='".base_url()."pages/org/".$organizer->organizer_ID."'>".$organizer->organizer_name."&nbsp&nbsp</a>";
  }
  echo "</td></tr>";
  echo "<tr><td>Session Date: </td><td>".$row->date."</td></tr>";
  echo "<tr><td>Session Venue: </td><td>".$row->venue_name."</td></tr>";
  echo "<tr><td>Session Start Time:&nbsp&nbsp</td><td>".$row->time."</td></tr>";
  echo "<tr><td>Trainer Name:</td><td>";
  foreach($trainer->result() as $tra){
    echo "<a href='".base_url()."pages/trainer/".$tra->trainer_ID."'>".$tra->trainer_name."&nbsp&nbsp</a>";
  }
  echo "</td></tr>";
  echo "<tr><td>Category:</td><td>".$row->category."</td></tr>";
  echo "<tr><td>&nbsp</td><td>&nbsp</td></tr>";}
 ?>
</table>
</div>
