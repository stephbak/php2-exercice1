<?php
$age = 17;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>php partie2</title>
</head>
<body>
    <?php if ($age >= 18){ ?>
      <p id="major">Vous êtes majeur.</p>
      <?php }else{ ?>
      <p id="minor">Vous êtes mineur.</p>
  <?php } ?>
</body>
</html>
