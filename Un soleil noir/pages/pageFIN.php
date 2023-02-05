<?php session_start(); ob_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page Fin</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <h1>Fin</h1>
    <div class="paragraphe">
      <div class="paragraphe1">
        <p class="seul">
          <?php echo $_SESSION['Prénom']; ?> tu as choisi d'accepter ta fin aussi cruelle soit-elle. <br>
          Tu prends la pilule bleue et tu fermes les yeux acceptant que le monde soit tel que tu l'as laissé. <br>
        </p>
      </div>
  </body>
</html>
