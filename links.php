<?php require ("tpl.php");
?>

<!DOCTYPE html>
<html>
<head>
   <title><?php echo $titleHome; ?></title>
   <?php echo $css; ?>
   <?php echo $js; ?>
</head>
<body>
   <?php echo $navbarLinks; ?>

   <div class="container-fluid">
      <div class="row">
         <div class="col-md-8">
            <?php echo $adTop; ?>
            <?php echo $links; ?>
            <?php echo $whIsBitcoin; ?>
            <?php echo $adBot; ?>
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
         <?php echo $price; ?>
      </div>
   </div>
   <?php echo $footer; ?>

</body>
</html>