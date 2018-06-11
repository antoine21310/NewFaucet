<?php require ("tpl.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titleHome; ?></title>
	<?php echo $css; ?>
	<?php echo $js; ?>
</head>
<body>
	<?php echo $navbarHome; ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<?php echo $adTop; ?>
				<?php echo $news; ?>
				<?php echo $whIsBitcoin; ?>
				<?php echo $adBot; ?>
				<?php echo $modal; ?>
				<?php echo $_COOKIE['username']; ?>
			</div>
			<div class="col-md-4">

				<?php echo $lastClaims; ?>
				<?php echo $adRight; ?>
				<?php echo $lastWithdrawals; ?>
			</div>
		</div>
	</div>

	<div class="container-fluid">
		<div class="row">
			<?php //echo $price; ?>
		</div>
	</div>
	<?php echo $footer; ?>

</body>

</html>