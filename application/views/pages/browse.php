<h1>Browse Session</h1>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Trainer</th>
      <th>Organizer</th>
      <th>Date</th>
      <th>Venue</th>
      <th>time</th>
      <th>Capacity</th>
      <th>Level</th>
      <th>Booking</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($session->result() as $row) {

    }
     ?>
    <tr>
      <td>1</td>
      <td>Basketball</td>
      <td>John</td>
      <td>Happy Inc.</td>
      <td>2017-12-12</td>
      <td>Wan Chai</td>
      <td>12:00~13:50</td>
      <td>20</td>
      <td>1</td>
      <td><a href='#'>Here</a></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Dancing</td>
      <td>Mary</td>
      <td>Sad Inc.</td>
      <td>2017-12-20</td>
      <td>Sheung Wan</td>
      <td>15:00~16:50</td>
      <td>25</td>
      <td>3</td>
      <td><a href='#'>Here</a></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Kick Boxing</td>
      <td>Tim</td>
      <td>Crying Fitness.</td>
      <td>2017-12-02</td>
      <td>Tsuen Wan</td>
      <td>11:00~12:50</td>
      <td>15</td>
      <td>2</td>
      <td><a href='#'>Here</a></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Dancing</td>
      <td>Terry</td>
      <td>Heinz Inc.</td>
      <td>2017-12-27</td>
      <td>Kowloon Bay</td>
      <td>18:00~19:50</td>
      <td>50</td>
      <td>1</td>
      <td><a href='#'>Here</a></td>
    </tr>
  </tbody>
</table>
