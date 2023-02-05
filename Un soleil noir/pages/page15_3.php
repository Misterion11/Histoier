<?php session_start(); ob_start();
$_SESSION['mortP']=true;?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 15</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Chapitre Quatre</h1>
      <p class="seul">
        La réponse te semble évidente, Ban n'aurait aucune raison de faire du mal à Merlin alors qu'Escanor aurait des motifs. Tu le désignes donc. <br>
        Le détective l'arrête tandis que Ban fond en larme dans les bras de Prisca. <br>
        «<i>J'ai eu si peur, si vous saviez j'ai eu si peur !»</i> <br>
        À cet instant, la sirène retentit à nouveau. Puis les lumières du train s'éteignent. Puis, un flash aveuglant t'illumines ! <br>
        Lorsque tu parviens à rouvrir les yeux, la mort est en face de toi et te fauche la seconde d'après. <br>
        Tu prends un paquet de chocolatine sur une étagère et tu regardes la date limite de consommation : <i>20 mars 2035</i>. <i>«Encore vraiment ?!»</i> <br>
        En effet, te revoilà de retour devant le paquet de chocolatine. <br>
        Cependant tu es seule, Prisca n'est pas en face de toi et il n'y a plus aucune musique. <br>
        As-tu réussi ? As-tu échoué ? Tu n'en as pas la moindre idée. <br>
        La mort arrive à nouveau en face de toi. <br>
        <i>«Le jeu va enfin prendre fin, qui est le grand vainqueur ?»</i> <br>
        Il pointe ton coeur avec sa faux. <br>
        <i>«C'est la denière fois que je te faucherai. Ou peut être pas qui sait le temps est assassin.»</i> <br>
        Tu fermes les yeux et tu sens la faux s'abattre sur toi. <br>
        <?php
        if (isset($_SESSION['mortCl'])) {
          echo "<a href='pagebadending.php'>Rendez vous</a> de l'autre côté du miroir.";
        }
        elseif($_SESSION['mortP']==true){
          echo "<a href='pageendingmortPrisca.php'>Rendez vous</a> de l'autre côté du miroir.";
        }
    ?>
        </body>
        </html>
