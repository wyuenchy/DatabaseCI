<h1>Details Of the session</h1>
<div class='container'><br><br>
  <table>
<?php
foreach ($session->result() as $row) {
  echo "<tr><td>Session Name: </td><td>".$row->session_title."</td></tr>";
  echo "<tr><td>Organizer Name: </td><td>".$row->organizer_name."</td></tr>";
  echo "<tr><td>Session Date: </td><td>".$row->date."</td></tr>";
  echo "<tr><td>Session Venue: </td><td>".$row->venue_name."</td></tr>";
  echo "<tr><td>Session Start Time:&nbsp&nbsp</td><td>".$row->time."</td></tr>";
  echo "<tr><td>Trainer Name:</td><td>".$row->trainer_name."</td></tr>";
}
 ?>
</table>
</div>
