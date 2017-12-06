

<h1>Search</h1>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Title</th>
      <th>Date</th>
      <th>Time</th>
      <th>Duration</th>
      <th>Format</th>
      <th>Level</th>
      <th>Short_D</th>
      <th>Trainer</th>
      <th>Organizer</th>
      <th>Ticket_price</th>
      <th>Details</th>
    

    </tr>
  </thead>

  <tbody>
    <?php
    foreach ($session->result() as $row) {
      echo"<tr>";
      echo"<td>".$row->session_title."</td>";
      echo"<td>".$row->date."</td>";
      echo"<td>".$row->time."</td>";
      echo"<td>".$row->duration."</td>";
      echo"<td>".$row->format."</td>";
      echo"<td>".$row->level."</td>";
      echo"<td>".$row->short_description."</td>";
      echo"<td>".$row->trainer_name."</td>";
      echo"<td>".$row->organizer_name."</td>";
      echo"<td>".$row->ticket_price."</td>";
      echo"<td><a href='".base_url()."pages/details/".$row->session_ID."'>Here</a></td>";
      echo"</tr>";
    }
     ?>
  </tbody>
</table>
