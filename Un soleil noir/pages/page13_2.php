<?php session_start(); ob_start();
if (isset($_SESSION['abandon'])) {
  unset( $_SESSION['abandon']);
}
unset( $_SESSION['mortP']);
unset( $_SESSION['mortC']);?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 13</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Chapitre Quatre</h1>
      <p class="seul">
        Cette musique tu la connais et étrangement, c'est une musique que tu as découverte avec Clément. <br>
        Ce n'est pas un hasard, tu en es sûre ! <br>
        <i>«Désolé Prisca, j'ai déjà vu mourir Clément une fois, je refuse que ça se passe deux fois.»</i> penses-tu. <br>
        Tu suis la musique à travers les immenses rayons du supermarché. <br>
        Tu entends le son de plus en plus fort.  <br>
        Tu te rapproches ça y est ! <br>
        Tu tournes à gauche, puis à droite, puis 2 rayons à gauche, puis tout droit puis... <br>
        Tu arrives à l'origine de cette musique. <br>
        Une épaisse brume y est présente. <br>
        Tu t'avances en faisant attention quand tu arrives  soudain en face d'une grande roue à laquelle est attaché un homme nu. <br>
        La brume est épaisse, distinguer son visage est complexe. <br>
        Soudain une grande voix roque s'élève derrière toi. <br>
        <i>«Ainsi tu es arrivée ici [prénom].»</i> <br>
      </p> </div>
      <div class="paragraphe2">
        <p class="droite" style="margin-top : px">
          La brume se dissipe soudainement. Tu te retournes pour voir à qui appartient cette voix. <br>
          Il s'agit d'une personne habillée avec une cape noire recouvrant tout son corps avec une faux en main. Oui, cette personne est habillée comme la mort. <br>
          La roue derrière toi se met à tourner. Tu l'aurais presque oubliée. La brume s'étant dissipée tu peux enfin savoir à qui appartient ce visage. <br>
          Stupeur ! C'est celui de Clément. <br>
          La mort arrive derrière toi et pose sa main sur ton épaule.  <br>
          <i>«Tu n'as pas pu le sauver la première fois, ressayons si tu le veux bien.»</i> <br>
          Un tableau numérique sort du sol en face de toi.
          Il s'allume et écrit la chose suivante :
          Un tableau numérique sort du sol en face de toi. <br>
          Il s'allume et écrit la chose suivante : <br>
          <i>Quelle est l'heure de naissance de Clément ?</i> <br>
          <a href="page14_2B.php">Réponse A : 21h02</a> <br>
          <a href="page14_2A.php">Réponse B : 20h02</a> <br>
          <?php if (isset($_SESSION['yin'])) {
          echo "Ou bien<a href='page14_2B'>utiliser</a> ton yin yang pour te donner la réponse au risque d'en avoir besoin plus tard. <br>";
          $_SESSION['yin'] = 'used';
          } ?>
        </p></div>
      </body>
      </html>
