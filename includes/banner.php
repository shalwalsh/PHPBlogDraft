<?php if (isset($_SESSION['user']['username'])) { ?>
	<div class="logged_in_info">
		<span>welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="logged_in_info">
		<span><a href="register.php">Join us!</a><?php echo ' | '?></span>

		<span><a href="login.php">Log in</a></span>
	</div>
<?php } ?>
