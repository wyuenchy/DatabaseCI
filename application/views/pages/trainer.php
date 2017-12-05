<h2>Trainer Information</h2>
<table>
  <?php
  foreach($trainer->result() as $tra){
    echo "<tr><td>Trainer Name :&nbsp&nbsp&nbsp</td><td>".$tra->trainer_name."</td></tr>";
    echo "<tr><td>Trainer Description :&nbsp&nbsp&nbsp</td><td>".$tra->trainer_description."</td></tr>";
    echo "<tr><td>Trainer Curriculum :&nbsp&nbsp&nbsp</td><td>".$tra->trainer_curriculum."</td></tr>";
  }
   ?>
 </table><br>
 <h3>Session trainer take part in: </h3>
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
