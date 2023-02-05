<?php session_start(); ob_start();?>
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
        <i>«Je ne suis pas sûre d'avoir tout compris mais je dirais la morsure d'araignée.»</i> réponds-tu sans aucune assurance. <br>
        <i>-«Très bien, voyons ça de suite.»</i> La mort laisse sortir une araignée de sa manche. Celle-ci commence à se déplacer sur le corps de Clément à travers le mur. <br>
        Puis après être arrivée au niveau de son cou, elle rentre magiquement dans le mur. <br>
        La mort s'avance vers toi d'un pas sûr. Une fois à ton niveau, elle pose sa main sur ton épaule.<br>
        <i>«Je crois qu'on est reparti pour un tour toi et moi, ça va être si amusant !»</i> <br>
        Tu la regardes, anxieuse. Tu n'as pas vraiment envie de te faire faucher à nouveau. Mais ton corps refuse de te répondre. <br>
        La mort amène la faux au niveau de ton cou. <br>
        <i>«Je crois que je pourrais passer l'éternité à tous vous faire ça.»</i> lance-t'elle dans un éclat de rire.
        Finalament, elle amorce son coup et vient à nouveau te faucher. <br>
        Et après avoir rouvert les yeux, tu te retrouves une nouvelle fois devant le lycée, avec une nouvelle fois le tigre au sol. <br>
        Mais cette fois-ci, aucune trace de quiconque. Tu es seule. <br>
      </p> </div>
      <div class="paragraphe2">
        <p class="droite" style="margin-top : 75px">
          Et à nouveau tu n'as aucune idée d'où tu dois te rendre. Pire encore, tu ne sais pas ce que sont devenus Prisca et Clément. <br>
          Tu décides de commencer à marcher desespérement dans les rues, en mettant des coups de pied dans des canettes au sol. <br>
          <i>«C'est quoi cette merde ? Pourquoi ça nous arrive ? Où sont-ils tous ?»</i> <br>
          <i>-«Je te l'ai dit, je suis là moi.»</i> Tu reconnais cette voix provenant de derrière toi, c'est la mort. <br>
          <i>-«Va te faire foutre toi, si tu veux me faucher te gêne pas mais ferme ta gueule.»</i> <br>
          La mort explose de rire. <i>«Alors ça c'est du jamais vu, personne n'avait osé me parler comme tu l'as fait <?php echo $_SESSION['Prénom']; ?>»</i> <br>
          Elle se téléporte alors devant toi. <br>
          <i>«Es-tu prête à mettre fin à tout ça ? Sache que si tu as fait les bons choix tu les reverras tous. Et sinon... Oh je ne t'en dis pas plus»</i> <br>
          Tu fermes les yeux sans dire un mot, résignée à ce qu'il va t'arriver. <br>
          A nouveau, tu entends le bruit de la faux dans l'air. <br>
          Puis plus rien. Plus aucune sensation. <br>
          <?php
          if (isset($_SESSION['mortP'])) {
            echo "<a href='pagebadending.php'>Rendez vous</a> de l'autre côté du miroir.";
          }
          else{
            echo "<a href='pageendingmortClem.php'>Rendez vous</a> de l'autre côté du miroir.";
          } ?>
        </p></div>
      </body>
      </html>
