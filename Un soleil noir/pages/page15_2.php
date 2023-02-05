<?php
session_start();
ob_start();
$_SESSION['mortCl']=true;
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
        Tu en es sûre, la bonne heure c'est 20h02 ! <br>
        Tu t'empresses de cliquer sur la bonne réponse. <br>
        La roue s'arrête soudainement. Laissant Clément suspendu, tête à l'envers. <br>
        Tu te retournes afin de comprendre ce qu'il se passe quand tu vois la mort te faucher.
        Tu regardes tout autour de toi, le magasin est rempli à ras bord. Tu prends un paquet de chocolatine sur une étagère et tu regardes la date limite de consommation : "20 mars 2035". <br>
        «Encore vraiment ?!» <br>
        En effet, te revoilà de retour devant le paquet de chocolatine. <br>
        Cependant tu es seule, Prisca n'est pas en face de toi et il n'y a plus aucune musique. <br>
        As-tu réussi ? As-tu échoué ? Tu n'en as pas la moindre idée. <br>
        La mort arrive à nouveau en face de toi. <br>
        <i>«Le jeu va enfin prendre fin, qui est le grand vainqueur ?»</i> <br>
        Il pointe ton coeur avec sa faux. <br>
        <i>«C'est la denière fois que je te faucherai. Ou peut être pas qui sait le temps est assassin.»</i> <br>
        Tu fermes les yeux et tu sens la faux s'abattre sur toi. <br>
        <?php
        if (isset($_SESSION['abandon'])&&isset($_SESSION['mortP'])) {
          echo "<a href='pagealternativeending.php'>Rendez vous</a> de l'autre côté du miroir.";
        }
        elseif (isset($_SESSION['mortP'])) {
          echo "<a href='pagebadending.php'>Rendez vous</a> de l'autre côté du miroir.";
        }
        elseif($_SESSION['mortCl']==true){
          echo "<a href='pageendingmortClem.php'>Rendez vous</a> de l'autre côté du miroir.";
        }?>
        </body>
        </html>
