<?php
  $name = $_GET['name'];
  $age = $_GET['age'];
  $mail = $_GET['mail'];
?>

<h2><?=$name?></h2>
<h2><?=$age?></h2>
<h2><?=$mail?></h2>

<?php
  if ( (strlen($name) <= 3) || (is_numeric($age) === false) || (strpos($mail, '@') === false) || (strpos($mail, '.') === false) ) { ?>
    <h1>Accesso negato</h1>
  <?php } else { ?>
    <h1>Accesso riuscito</h1>
  <?php }
?>
