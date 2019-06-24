
            <div class="table-responsive">
          <table class="table" id="table">
    <h3 class="text-center">All Feedbacks</h3>
    <tr>
        <th>Feedback By</th>
        <th>Feedback To</th>
        <th>Feedbacks</th>
        <th>Date Posted</th>
        </tr>
    <?php

foreach ($feedback as $row)
 { 
?>
 <tr>
     <td><?php echo $row['fname']." ".$row['lname'] ?></td>
     <td><?php echo $row['sname']." ".$row['slname'] ?></td>
     <td><?php echo $row['feedback'] ?></td>
     <td><?php echo $row['date'] ?></td>
     </tr>
<?php
 }

?>
</table>  
        </div>
