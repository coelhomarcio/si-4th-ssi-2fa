<?php
	if (isset($_POST["username"]) && isset($_POST["password"])) {
		?>
		<input type="hidden" name="username"
		       value="<?php echo "$_POST[username]"; ?>">
		<input type="hidden" name="password"
		       value="<?php echo "$_POST[password]"; ?>">
		<?php
	}
