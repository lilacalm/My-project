<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tibb</title>
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php require './blocks/header.php'; ?>

	<div class="container mt-5">
		<form action="./check.php" method="post" id="enter_form" >
		<h3>Əlaqə forumu</h3>
			<input type="email" name="email" placeholder="E-mail daxil edin" class="form-control">
			<br>
			<input type="password" name="message" class="form-control" placeholder="Parolu yazın">
			<br>
			<button type="submit" name="send" class="btn btn-success">Göndər</button>
		</form>
	</div>
	
	<!-- <script>
		var enter_form = document.getElementById('enter_form');
		function bEnter() {
			enter_form.style.transform = "translateY(5%)";
			enter_form.style.position = "relative";
		}
	</script> -->

	<?php require './blocks/footer.php'; ?>
</body>
</html>
