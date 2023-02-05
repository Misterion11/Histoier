<?php session_start(); ob_start();
?>
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
        Bon, tu as certes confiance en ton instinct mais pas au point de laisser Prisca seule avec un robot. <br>
        Tu accélères le pas pour la rejoindre. <br>
        «<i>Tout va bien ?»</i> te demande-t-elle lorsque tu la rejoins. <br>
        «<i>Oui t'en fais pas, c'est juste un feeling bizarre rien de plus.»</i> <br>
        San vous interrompt soudain. <br>
        «<i>Mesdemoiselles, c'est par ici je vous prie.»</i> <br>
        Elle vous montre un grande porte située aux rayons jouet. <br>
        Tu passes devant et tu l'ouvres, Prisca te suivant à quelques pas derrière. <br>
        Lors des premiers mètres, vous ne voyez strictement rien si ce n'est la lumière provenant de là où vous venez. <br>
        Soudain la porte se claque ce qui fait sursauter Prisca. Dans la foulée, vous entendez la sirène d'un train ce qui fait à nouveau sursauter Prisca. <br>
      </p> </div>
      <div class="paragraphe2">
        <p class="droite" style="margin-top : px">
          «<i>C'est pas possible»</i> hurle-t-elle. <br>
          -«<i>Silence ! Ça tourne ! Que la lumière soit !»</i> <br>
          Et la lumière fut à cet instant précis. <br>
          Vous voilà débarquées en plein tournage d'un film dans un train et pas n'importe lequel. L'orient Express. <br>
          Est-ce la chose la plus folle de cette journée ? Pas vraiment. <br>
          Vous vous retrouvez dans un wagon en face d'une personne habillée avec une cape noire recouvrant tout son corps avec une faux en main. <br>
          Oui, cette personne est habillée comme la mort. Celle-ci vous raconte qu'un meurtre a eu lieu. La victime était nommée Merlin et que les deux hommes présents ici était sur les lieux du crime. <br>
          Il finit par indiquer c'que ce n'est pas un crime passionnel. Il vous demande ensuite d'établir lequel des deux est le meurtrier : <br>
          <a href="page14_1B">Choisir l'homme</a> au chapeau nommé Escanor <br>
          <a href="page14_1A">Choisir l'homme</a> au costard nommé Ban. <br>
          <?php if (isset($_SESSION['yin'])) {
          echo "<a href='page14_1A'>Utiliser</a> ton yin yang pour te donner la réponse au risque d'en avoir besoin plus tard. <br>";
          $_SESSION['yin'] = 'used';
          } ?>
        </p></div>
      </body>
      </html>
