<?php session_start(); $connect = new Mysqli("localhost", "root", "", "musicworld") ?>
<!DOCTYPE html>
<html>
<head>
	<title>Music World</title>
	<link rel="stylesheet" type="text/css" href="css/Css.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<meta charset="utf-8">
</head>
<body>
	<section>
		<section class="body">
			<aside><?php include 'layout/left.php'; ?></aside>
			<article>
				<nav class="nav-account"><?php include 'account/account.php'; ?></nav>
				<section class="display">
					<?php include 'layout/get-requests.php';?>
				</section>
			</article>
		</section>
	</section>
</body>
</html>