<div><h1>Quick Access</h1></div>
<table>
  <tr>
    <td valign='top'>
      <ul style="list-style-type:none">
          <li><h3>Featured Trainer</h3></li>
        <?php
        foreach ($trainer->result() as $temp) {
          echo "<li><h4><a href='".base_url()."pages/trainer/".$temp->trainer_ID."'>".$temp->trainer_name."</a></h4></li>";
        }
         ?>
      </ul>
    </td>
    <td valign='top'>
      <ul style="list-style-type:none">
        <li><h3>Featured Organizer</h3></li>
        <?php
        foreach ($organizer->result() as $temp) {
          echo "<li><h4><a href='".base_url()."pages/org/".$temp->organizer_ID."'>".$temp->organizer_name."</a></h4></li>";
        }
         ?>
      </ul>
    </td>
    <td valign='top'>
      <ul style="list-style-type:none">
        <li><h3>Session By Price</h3></li>
        <li><h4><a href='<?php base_url();?>pages/price/1'>0-100</a></h4></li>
        <li><h4><a href='<?php base_url();?>pages/price/2'>100-400</a></h4></li>
        <li><h4><a href='<?php base_url();?>pages/price/3'>400-750</a></h4></li>
        <li><h4><a href='<?php base_url();?>pages/price/4'>750-1000</a></h4></li>
        <li><h4><a href='<?php base_url();?>pages/price/5'>1000 above</a></h4></li>
      </ul>
    </td>
  </tr>
</table>
