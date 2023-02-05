<?php session_start(); ob_start();?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Page 0</title>
    <link rel="stylesheet" href="../style.css">
  </head>
  <body>
    <h1>Histoire</h1>
    <div class="paragraphe">
      <div class="paragraphe1">
        <p class="seul">
          <?php echo $_SESSION['Prénom']; ?>, te voilà propulsée dans une histoire un peu spéciale.<br>
          Tu vas pouvoir réaliser tes propres choix, sache que lorsque ta souris passera sur un choix celle-ci affichera un tourbillon. <br>
          Des personnes te suivront dans ton aventure, mais attention. Ils peuvent mourir selon les décisions que tu prendras. <br>
          Sois attentive, chaque choix peut avoir de grandes répercussions. <br>
          Suis ta route et tente de finir cette histoire dont tu es l'héroïne.<br/><br/>
          <a href="page1.php">Commencer l'histoire</a>
        </p>
      </div>
  </body>
</html>
