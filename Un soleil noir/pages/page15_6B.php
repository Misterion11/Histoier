<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 15</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class='paragraphe'>
    <div class='paragraphe1'>
      <h1>Chapitre Quatre</h1>
      <p class='seul'>
        Malgré la pression, tu murmures ta réponse <br>
        <i>«You are my ennemy.»</i>
        <i>-«Très bien nous saurons bien vite si tu as donné la bonne réponse.  <br>
          Pour le moment c'est l'heure d'un retour dans le temps.»</i>
          Au même instant le chaman lance un boulet sur Prisca. As-tu réussi ? <br>
          Tu n'as pas le temps de te poser la question que tu te fais faucher dans le dos. <br>
          Tu reviens à nouveau sur le transat du début. Agacée tu fais le trajet juqu'au centre du village mais celui-ci est vide. <br>
          <i>«Où ils sont tous passés ?»</i> te demandes-tu. <br>
          <i>-«J'ai préféré m'en débarasser ils n'étaient pas utiles pour la fin de ce petit jeu.»</i> <br>
          Un frisson parcourt ton corps. <i>«Encore elle ?»</i> <br>
          Tu te retournes lentement. Mais personne derrière toi. <br>
          <i>«A bientôt si tu t'es trompée, sinon adieu.»</i> te murmure-t'on à l'oreille. <br>
          <?php
          elseif ($_SESSION['Prénom']=="Margaux"||$_SESSION['Prénom']=="margaux") {
            echo "<a href='pagehappyendMargaux.php'>Rendez vous</a> de l'autre côté du miroir.";
          }
          else{
            echo "<a href='pagehappyend.php'>Rendez vous</a> de l'autre côté du miroir.";
          }
          ?>
        </body>
        </html>
