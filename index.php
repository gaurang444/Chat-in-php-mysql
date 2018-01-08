<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>real time chat system in php</title>
	<link rel="stylesheet" href="styles.css">
	<script type="text/javascript">
		function ajax(){
		var req=new XMLHttpRequest();
		req.onreadystatechange=function(){
		if(req.readyState==4 && req.status==200){
		document.getElementById('chat').innerHTML=req.responseText;

	}

	}
	req.open('GET','chat.php',true);
	req.send();


	}
	setInterval(function(){ajax()},1000);

	</script>
</head>
<body onload="ajax()">
	<div id="container">
	<div id="chat_box">
		<div id="chat">
		</div>

	</div>
		<form method="post" action="index.php">
			<input type="text" name="name" placeholder="Enter name">
			<textarea name="msg" placeholder="Enter the meassage:)"></textarea>
			<input type="submit" name="submit" value="Sendit">

		</form>
<?php
if (isset($_POST['submit'])) {
	$name  = $_POST['name'];
	$msg   = $_POST['msg'];
	$query = "INSERT INTO chat (name,msg) values ('$name','$msg')";
	$run   = $conn->query($query);
	if ($run) {
		echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'>";
	}

}
?>
</div>

</body>
</html>
