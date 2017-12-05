<h2>Organizer Information</h2><br>
<div class = container>
  <table>
  <?php
  foreach($org->result() as $temp){
    echo "<tr><td width ='160px'>Organizer Name:</td><td>".$temp->organizer_name."</td></tr>";
    echo "<tr><td width ='160px'>&nbsp</td><td>&nbsp</td></tr>";
    echo "<tr><td width ='160px'>Organizer Description:</td><td>".$temp->organizer_description."</td></tr>";
  }
   ?>
 </table><br>
 <h3>Session organizer held: </h3>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Title</th>
      <!-- <th>Trainer</th>
      <th>Organizer</th> -->
      <th>Date</th>
      <th>Venue</th>
      <th>Time</th>
      <th>Capacity</th>
      <th>Level</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($session->result() as $row) {
      echo"<tr>";
      echo"<td>".$row->session_title."</td>";
      // echo"<td>".$row->trainer_name."</td>";
      // echo"<td>".$row->organizer_name."</td>";
      echo"<td>".$row->date."</td>";
      echo"<td>".$row->venue_name."</td>";
      echo"<td>".$row->time."</td>";
      echo"<td>".$row->no_of_tickets."</td>";
      echo"<td>".$row->level."</td>";
      echo"<td><a href='".base_url()."pages/details/".$row->session_ID."'>Here</a></td>";
      echo"</tr>";
    }
     ?>
  </tbody>
</table><br>
</div>
