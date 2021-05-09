<?php
	if (isset($_GET['option'])):
		switch ($_GET['option']):
			case 'categories':
				include './view/show_category.php';
				break;
			case 'newmusic':
				include './view/newmusic.php';
				break;
			case 'top100':
				include './view/top100.php';
				break;
			case 'home':
				include './view/home.php';
				break;
			case 'Sign-in':
				include './view/Sign-in.php';
				break;
			case 'Create-account':
				include './view/Create-account.php';
				break;
		endswitch;
	endif;

?>