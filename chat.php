<?php
include 'db.php';
$query = "SELECT * FROM chat ORDER BY id DESC";
$run   = $conn->query($query);
while ($row = $run->fetch_array()):
?>
<div id="chat_data">
				<span style="color:green;"><?php echo $row['name'];
?>:</span>
				<span style="color:red;"><?php echo $row['msg'];
?></span>
				<span style="float:right;"><?php echo $row['date'];
?></span>


			</div>
<?php endwhile;?>