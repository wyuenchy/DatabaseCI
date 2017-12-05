<h1>Browse Session</h1>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>Title</th>
      <th>Trainer</th>
      <th>Organizer</th>
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
      echo"<td>".$row->trainer_name."</td>";
      echo"<td>".$row->organizer_name."</td>";
      echo"<td>".$row->date."</td>";
      echo"<td>".$row->venue_name."</td>";
      echo"<td>".$row->time."</td>";
      echo"<td>".$row->no_of_tickets."</td>";
      echo"<td>".$row->level."</td>";
      echo"<td><a href='".base_url()."pages/details/".$row->session_ID."'>Here</a></td>";
      echo"</tr>";
    }
     ?>
    <tr>
      <td>Basketball</td>
      <td>John</td>
      <td>Happy Inc.</td>
      <td>2017-12-12</td>
      <td>Wan Chai</td>
      <td>1200</td>
      <td>20</td>
      <td>1</td>
      <td><a href='#'>Here</a></td>
    </tr>
    <tr>
      <td>Dancing</td>
      <td>Mary</td>
      <td>Sad Inc.</td>
      <td>2017-12-20</td>
      <td>Sheung Wan</td>
      <td>1500</td>
      <td>25</td>
      <td>3</td>
      <td><a href='#'>Here</a></td>
    </tr>
    <tr>
      <td>Kick Boxing</td>
      <td>Tim</td>
      <td>Crying Fitness.</td>
      <td>2017-12-02</td>
      <td>Tsuen Wan</td>
      <td>1100</td>
      <td>15</td>
      <td>2</td>
      <td><a href='#'>Here</a></td>
    </tr>
    <tr>
      <td>Dancing</td>
      <td>Terry</td>
      <td>Heinz Inc.</td>
      <td>2017-12-27</td>
      <td>Kowloon Bay</td>
      <td>1800</td>
      <td>50</td>
      <td>1</td>
      <td><a href='#'>Here</a></td>
    </tr>
  </tbody>
</table>
