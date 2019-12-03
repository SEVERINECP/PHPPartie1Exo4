<?php
$name = 'Alexander';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHPPartie1Exo4</title>
  </head>
  <body>
    <p>Bonjour <?php echo $name;?>, Comment ça va?</p>
    /* autre code possible: <p><?php echo 'Bonjour' . $name . ', comment vas-tu?'; ?>
      la première solution étant la meilleure car le texte statique est intégré au html directement,
      ce qui permet au site d'être plus efficace. Seule les variables sont en PHP*/
  </body>
</html>
