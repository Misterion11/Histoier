<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 12</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <?php if (isset($_SESSION['mortC'])) {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Quatre</h1>
    <p class='seul'>
    Tu tombes du portail qui t'a fait sortir à quelques mètres du sol. Tu te relèves en enlevant les feuilles sur tes fesses. <br>
    Tu observes autour de toi. Tu trouves dans une gigantesque forêt extrêmement verdoyante. <br>
    Le soleil est caché mais les rayons de celui-ci te semble être de la couleur de notre bonne vieille étoile. <br>
    <i>«Donc en suivant la mort dans un portail, le soleil redevient jaune. C'est bien noté.»</i> ne peux-tu t'empêcher de penser ironiquement. <br>
    Tu commences à avancer, essayant de trouver un indice pour retrouver Prisca et surtout pour ne pas rester statique en sachant que la mort rode dans le coin. <br>
    Seulement tu ne vois rien ne pouvant t'aider. Ni trace de pas, ni même des branches brisées indiquant le passage de quiconque. <br>
    D'ailleurs, tu n'entends aucun oiseau. Tu n'as pas vu la moindre mouche. Et evidemment aucun mammifère à l'horizon. <br>
    Cette forêt commence à te sembler de plus en plus étrange. Même l'air te semble bizarre. Tu y sens une odeur de... mort ? <br>
    Quelque chose cloche, tu en es sûre. Tu accélères le pas, décidée à trouver le moindre signe de vie.
    Quand soudain, au loin, tu vois un cerf. <br>
    <i>«Enfiiin un être vivant !»</i> t'exclames-tu enjouée.
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 0px'>
    Tu t'approches discrètement du cerf afin de pouvoir mieux l'observer. <br>
    Son pelage est magnifique. Tu n'es plus qu'à quelques mètres de lui quand tu entends un râle. <br>
    Tu regardes vers ta droite et tu vois un humain foncer vers le cerf et commencer à le mordre. <br>
    Dans la panique, tu hurles mais l'humain ne semble pas s'en préoccuper. Mais est-ce vraiment un humain ? <br>
    Tu entends à nouveau des râles. Plus nombreux cette fois-ci, et c'est alors que 5 humains sortent de derrière les arbres et courent vers le cerf blessé au sol. <br>
    Cependant le cri que tu as lancé semble avoir attiré les nouvelles créatures et 2 d'entre eux foncent vers toi. <br>
    Tu commences à courir dans la direction inverse mais ils sont bien plus rapide que toi. Ils sont bientôt arrivés sur toi quand tu entends deux petits cris derrière toi. <br>
    Par réflexe tu te retournes et tu remarques que les créatures que tu peux officiellement identifier comme des zombies ont chacun une flèche plantée dans la tête. <br>
    Tu n'as pas le temps de rechercher d'où provient ces flèches qu'on te met un sac sur la tête et qu'un couteau vient se poser dans ton dos. <br>
    <i>«Tu vas gentiment nous suivre, dis le moindre mot je te plante, fais le moindre mouvement suspect je te plante.»</i> te dit ton agresseur. <br>
    <a href='page13_3.php'>Tu suis</a> donc à contrecoeur cet homme.
    </p>
    </div>";
  }
  else {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Deux</h1>
    <p class='seul'>
    Vous voici arrivés au fameux endroit. Une corde magique vient alors s'étendre entre Clément et toi, vous liant à la taille. <br>
    Une voix retentit alors. <i>«Vous devez passer tous les sauts, monter le mur, prendre le fromage puis revenir ici avec. Le premier couple d'âme soeur qui y parviendra gagnera le titre de Shinobi»</i>
    Vous vous mettez en place. Il y a au moins une bonne dizaine de groupe sur cette ligne de départ. Vous remarquez alors qu'au dessus de la tête de chaque souris est écrit son nom. <br>
     <i>«3,2,1 C'est parti !»</i> <br>
    Toutes les souris foncent vers le premier saut. Clément et toi n'étant pas aussi à l'aise que les autres vous partez légèrement en retard mais votre efficacité vous permet bien vite d'arriver au niveau du peloton de tête. <br>
    Le premier couple saute et loupe la plateforme, tombant dans le vide et se transformant en bulle. <br>
    <i>«On dirait qu'il faut éviter de tomber ou c'est la mort.»</i> dis-tu à Clément. <i>«Mais t'en fais pas suis-moi, je le sens bien.»</i> <br>
    En effet tu réussis aisément les premiers sauts permettant facilement à ton âme soeur d'en faire de même. <br>
    Vous voici arrivés les premiers face au mur à grimper. Tu y arrives sans aucun soucis. Clément te regarde puis après quelques secondes parvient à faire de même. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    Une fois ce mur passé, vous arrivez les premiers au fromage que vous récupérez. Le chemin inverse n'est pas fondamentalement plus dur que l'aller. <br>
    Au contraire vous semblez tous les deux être très à l'aise avec votre nouveau corps.
    <i>«Et nous avons nos vainqueurs !»</i> hurle le commentateur dans son micro. <i>«Un petit mot les vainqueurs ?»</i> <br>
    Tu prends le micro <i>«Oui en effet, nous recherchons notre amie Prisca. Prisca si tu m'entends on est là ! Viens nous retrouver on t'attendra au village.»</i> <br>
    Le commentateur reprend son micro et fait une annonce : <br>
    <i>«A toutes les souris de MiceCity si vous voyez une souris nommée Prisca n'hésitez pas à contacter ces deux là» <br>
    «Mais c'est maintenant l'heure de la récompense. Chose promise, chose due voici votre titre de Shinobi.» </i> <br>
    Ce titre vient s'inscrire au dessus de vos têtes sous vos prénoms. <br>
    <i>«Et maintenant, c'est l'heure du repos ! Tous au village ! Il est l'heure d'aller se relaxer au bar.»</i><br>
    Vous suivez tous les deux le mouvement de foule et <a href='page13_5.php'>vous revenez à nouveau au village. </a>
    </p>
    </div>";
  } ?>
</body>
</html>
