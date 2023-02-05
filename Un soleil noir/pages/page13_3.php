<?php session_start(); ob_start();unset( $_SESSION['mortP']);?>
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
        Après une marche qui te semble interminable, l'homme finit par te dire de te stopper. <br>
        Tu t'exécutes. Il retire le sac de ta tête, t'attaches les poignets. Tu te rends compte que la nuit est déjà tombée. <br>
        <i>«Y a vraiment un truc qui cloche avec ce monde, y avait du soleil y a même pas une heure»</i> te dis-tu. <br>
        Soudain, une main se pose sur ton épaule et donne une impulsion pour que tu te retournes. <br>
        Tu te retrouves face à une femme avec de la peinture de guerre sur le visage. <br>
        <i>«C'est elle que tu as trouvé dans la forêt alors ?»</i> demande-t-elle à l'homme au couteau d'un ton sec. Celui-ci acquiesse timidement. <br>
        Tu comprends bien vite que cette femme est importante dans la hiérarchie, enfin s'il y a bien une ici. <br>
        <i>«Ça fait déjà trois, entre le grand maigrichon tout blanc et la fille qui arrêtait pas de hurler, on a un sacré arrivage de gamins dis donc. Bon je pose la question pour la forme mais j'imagine que tu viens aussi d'un portail magique.»</i> <br>
        Tu hoches la tête de haut en bas. <i>«Et voilà, ils sont tous tarés, on est en pleine apocalypse zombie et ils voient des portails les gosses. Bon foutez là autour du feu, c'est l'heure pour le chef.»</i> <br>
      </p> </div>
      <div class="paragraphe2">
        <p class="droite" style="margin-top : px">
          L'homme s'exécute. Il te prend par le bras et t'amène vers un grand feu alimenté par des cadavres de zombie. <br>
          Des dizaines de personnes sont déjà présentes à genoux devant ce brasier. <br>
          L'homme au couteau te fait à ton tour te mettre dans la même position. Tu regardes les gens autour de toi. Ils sont tous effrayés. Mais plus important encore, Prisca est aussi là. <br>
          Tu regardes le feu et la tenue que tu veux ne laisse pas le moindre doute. C'est cette personne que tu avais vu entrer dans le portail. C'est la mort. <br>
          Sa voix retentit alors dans toute la forêt. <br>
          <i>«Aujourd'hui plusieurs parmi vous vont mourir»</i> Il tend alors sa faux vers le ciel. <i>«Lucille a soif de sang et je me dois de l'aider à s'épancher.»</i><br>
          Une voix à ta gauche te chuchotte : <i>«La folie est bien grande chez cette personne, c'est quand même de sa faux dont elle parle là.»</i><br>
          Tu tournes ta tête dans la direction de la voix afin de voir à qui elle appartient. Il s'agit d'une vieille femme. <br>
          <i>«Bon <?php echo $_SESSION['Prénom']; ?> je vais être franche avec toi. Prisca va mourir en deuxième. Cependant je te donne une chance d'annuler ceci. <br>
            Faisons un pari tu veux bien ? La première personne qui va mourir est soit le jeune homme asiatique nommé Glenn, soit le jeune homme avec un mulet nommé Eugène. Sur qui paries-tu ?»</i> <br>
            <a href="page14_3B">Parier sur l'homme avec un mulet.</a> <br>
            <a href="page14_3A">Parier sur l'homme asiatique.</a> <br>
            <?php if (isset($_SESSION['yin'])) {
            echo "Ou bien <a href='page14_3A'>utiliser</a> ton yin yang pour te donner la réponse au risque d'en avoir besoin plus tard. <br>";
            $_SESSION['yin'] = 'used';
            } ?>
          </p></div>
        </body>
        </html>
