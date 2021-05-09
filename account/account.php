<?php if (empty($_SESSION['customer'])):?>
	<section class="account">
		<button type="button"><a href="?option=Sign-in"><i class='fas fa-user-alt'></i> Sign in</a></button> or <button type=""><a href="?option=Create-account"><i class='fas fa-user-plus'></i> Create account</a></button>
	</section>
<?php else:?>
	<section  style="text-align: center; background: yellow; border: solid thin green">Hello: <?=$_SESSION['customer']?> [<a href="?option=Logout">Logout</a>]</section> 
<?php endif; ?>