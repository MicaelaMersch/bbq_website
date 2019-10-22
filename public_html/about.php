<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>About Us | Bagel's BBQ Sauce</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<style>
	    table {
    border-style: solid;
    border-color: black;
    border-width: 2px;
}
</style>
</head>

<body>
	<header>
		<img src="img/content/logo.png" alt="Bagel's Logo" class="logo">
		<?php include '../resources/navigation.php'; ?>
	</header>

    <h1>About Us</h1>
    <img src="img/content/group_photo.png" alt="Group Photo">
    <p>We are very passionate about barbecue sauce, so we made this website to advertise our amazing one of a kind sauces. Our famous sauces are made with absolute perfection, with effort and heart put into every bottle. Our world famous sauces are derived from ingredients found all over the world, from chili peppers in Australia, to the venom of secret dragon sleeping at the tip of the Himalayan Mountains. Due to all of this effort, you can be sure to get your money's worth out of our sauces. <!-- Um, don't think I'm going to include this: (Also we need to pay for college so please buy them) --></p>
    <p>Our background is that we are all recent college graduates pursuing our dream of selling barbecue sauce. Our various backgrounds and degrees will help us sell our sauces at our growing number of locations and partnering stores. We have also been able to travel across the globe to find the best sources for our ingredients. We firmly believe that once you buy our sauce, you'll never go back! </p>
<hr><br>

	<table>
	<tr>
	<th style="text-align: center;"><b>Sign up to become a member!</b></th></tr>
	<tr><td><form style="text-align: center;">
		E-Mail:<br>
		<input type="text" name="E-Mail"><br>
		Username:<br>
		<input type="text" name="Username"><br>
		Password:<br>
		<input type="password" name="Password"><br>
		<input type="checkbox" name="updates" value="signup" checked>Sign me up to receive updates and newsletter e-mails!<br>
		<input type="submit" value="Sign up">
		<input type="submit" value="Already Have An Account">
	</form></td></tr></table>

	<footer>

<?php include '../resources/footer.php'; ?>

	</footer>
</body>
</html>