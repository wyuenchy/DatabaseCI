<h1>Welcome To the Reservation System</h1>
<?php echo "<img src='".base_url()."images/banner.jpg' width='100%'>"; ?>
<h3>Feature Session</h3>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Title</th>
      <th>Date</th>
      <th>Venue</th>
      <th>Time</th>
      <th>Duration(in Hours)</th>
      <th>Capacity</th>
      <th>Level</th>
      <th>Price</th>
      <th>Details</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($session->result() as $row) {
      echo"<tr>";
      echo"<td>".$row->session_title."</td>";
      echo"<td>".$row->date."</td>";
      echo"<td>".$row->venue_name."</td>";
      echo"<td>".$row->time."</td>";
      echo"<td>".$row->duration."</td>";
      echo"<td>".$row->no_of_tickets."</td>";
      echo"<td>".$row->level."</td>";
      echo"<td>$".$row->ticket_price."</td>";
      echo"<td><a href='".base_url()."pages/details/".$row->session_ID."'>Here</a></td>";
      echo"</tr>";
    }
     ?>
  </tbody>
</table>
