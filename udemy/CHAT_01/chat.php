<?php
include './db.php';

$query = "SELECT * FROM chat_01 ORDER BY id DESC";
$run = $con->query($query);

while ($row = $run->fetch_array()):
    ?>
    <div id="chat_data">
        <span style="color: black;"><?php echo $row['name']; ?>:</span>
        <span style="color: white; margin-left: 10%;"><?php echo $row['msg']; ?></span>
        <span style="color: aquamarine; float: right;"><?php echo formatDate($row['date']); ?></span>
    </div>
    <?php
endwhile;
