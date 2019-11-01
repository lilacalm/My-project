<?php 
if (isset ($_POST["send"])) {

$error = false;
$error_email = '';
$error_message = '';
$email = $_POST['email'];
$message = $_POST['message'];

if (trim($email) == '') {
	$error_email = 'E-mail daxil edin';
	$error = true;
}
else if (trim($message) == '') {
	$error_message = 'Mesajınızı daxil edin';
	$error = true;
}
if ($email == '' & $message == '') {
	$error = true;
	exit();
}
}
$subject = "?=utf8?B?".base64_encode($subject)."=?";
$headrs = "From: $email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";
mail("example@example.com", $subject, $message,$headers);
header("Location:./stories.php");

?>
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

	<span class="badge badge-warning mt-5"><?php echo $error_email ?></span>
	<br>
	<span class="badge badge-warning mt-5"><?php echo $error_message ?></span>
<br>

	<?php require './blocks/footer.php'; ?>
</body>
