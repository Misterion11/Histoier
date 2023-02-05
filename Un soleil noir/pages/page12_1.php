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
    Tu jettes un coup d'oeil sur l'un des panneaux de rue et tu remarques qu'il est écrit ceci <i>Unter den Linden</i>. On dirait de l'allemand. <br>
    <i>«Attend on est en Allemagne ?»</i> t'exclames-tu. <br>
    Prisca ne te répond pas et te pointe simplement un deuxième panneau où il est écrit <i>ты мне нравишься</i>. <br>
    Tu reconnais l'alphabet cyrillique. C'est donc ça qu'il voulait dire par «partout à la fois». Russie, France, Allemagne. <br>
    Cela explique aussi les différentes architectures des bâtiments autour de toi. <br>
    Tu continues à suivre Prisca jusqu'à apercevoir le carrefour. Il serait donc à l'intérieur, du moins tu l'espères. Vous vous approchez toutes les deux. <br>
    Le carrefour semble assez futuriste, contrastant avec les bâtiments en ruine tout autour. <br>
    Lorsque vous arrivez devant les portes automatiques, une petite voix vous lance  <i>«Bonjour mesdemoiselles, et bienvenue dans notre somptueux magasin. Je suis San, votre assistante pour vos courses.»</i> <br>
    Au même moment un robot s'active en se débranchant d'une borne et c'est à nouveau la voix de San que vous pouvez entendre par l'intermédiaire de celui-ci. <br>
    <i>«Veuillez me suivre s'il vous plaît.» </i> <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 50px'>
    Vous obéissez et décidez de rentrer. <br>
    <i>«Dis San, t'aurais pas vu un mec brun entrer dans le magasin ?»</i> demandes-tu.<br>
    <i>-«La confidentialité de mes clients est ma priorité, par conséquent, je ne peux vous renseigner»</i> répond elle. <br>
    Désespérées, vous continuez à la suivre sans guère savoir où elle veut vous emmener. <br>
    Tu regardes tout autour de toi, le magasin est rempli à ras bord. Tu prends un paquet de chocolatine sur une étagère et tu regardes la date limite de consommation : <i>20 mars 2035</i>. <br>
    Le monde n'a plus aucun sens et cela ne te surprend plus vraiment. Tu reposes le paquet et tu t'apprêtes à rejoindre Prisca et San sauf que tu entends une musique au loin. <br>
    C'est de l'italien, tu en es quasiment sûr. <br>
    Quelque chose te dit qu'il pourrait être intéressant d'y aller. Après tout si ce robot de pacotille refuse de te guider vers Clément, autant le faire par toi même. <br>
    Mais en même temps, peux-tu laisser Prisca seule avec San ? Il est impossible de l'emmener avec toi, le robot s'y opposerait. <br>
    Deux choix s'offrent donc à toi : <br>
    <a href='page13_1.php'>Retourner vers Prisca.</a> <br>
    <a href='page13_2.php'>Ou suivre la musique et ton instinct.</a>
    </p>
    </div>";
  }
  else {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Quatre</h1>
    <p class='seul'>
    <i>«Pfiouuu, enfin en dehors de ce lycée. C'est déjà une petite victoire. Maintenant quelqu'un à une idée de comment on se débarasse du tigre qui nous suit.»</i> <br>
    Prisca et Clément haussent les épaules. Votre regard est bloqué sur la créature. Vous savez que trop bien ce qu'il se passera si vous déviez vos yeux de l'animal. <br>
    Soudain, un coup de feu retentit. Quelques instants plus tard, l'animal commence à perdre l'équilibre mais reste sur ses 4 pattes. <br>
    <i>«Poussez-vous les jeunes, vous gênez !»</i> vous hurle-t'on. Voyant que l'animal moins agressif, vous reculez plus rapidement et vous vous écartez laissant la voie libre au tireur. <br>
    Celui-ci finit la recharge de son fusil puis tire à nouveau. <i>«En pleine poire !»</i> hurle l'homme. Le tigre s'écroule alors au sol. <br>
    Finalament, l'homme agé d'une quarantaine d'années vous rejoint. <br>
    <i>«Vous l'avez abattu ?»</i> demandes-tu soucieuse. <i><br>-«Mais non mamzelle, c'est des flèchettes tranquillisantes, j'tue pas les grosses bestioles comme ça.»</i><br>
    <i>-«Il fait exprès d'être beauf ou c'est un talent inné d'après vous les filles ?»</i> murmure Clément de manière à ce que le chasseur ne l'entende pas. <br>
    Vous rigolez toutes les deux. <i>«Ah les jeunes toujours en train de rire pour tout hein.»</i> s'exclame votre nouveau compagnon. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    <i>«Au fait moi c'st John !»</i> Vous vous présentez tour à tour. <br>
    Il vous explique qu'il s'est retrouvé comme vous coincé dans ce monde étrange. Il est chasseur de profession ce qui explique son arme. <br>
    Enfin, il vous raconte avoir entendu du bruit ce qui l'a attiré par ici. Cependant ce n'était pas les bruits du tigre. Il comparera les bruits entendus à des gigantesques bruits de pas. <br>
    Vous vous regardez inquiets. Après toutes les horreurs que vous avez vu. Qu'elle peut bien être la suivante... <br>
    <i>«Bon et maintenant où va t'on ? Sortir du lycée c'était bien mais, on devient quoi ?»</i> demandes-tu au groupe. <br>
    John vous regarde et vous lance : <i>«Vous allez où vous voulez les gamins, moi j'dois retrouver mon chien.»</i> <br>
    <i>-«Est-ce que ça serait pas une meilleure idée de rester tous ensemble vu ce sur quoi on peut tomber ici ?»</i> enchaîne alors Clément. <br>
    Vous vous regardez avec Prisca et acquiescez. <br>
    <i>«Bon il est parti par où votre chien monsieur.»</i> demande timidement Prisca. <br>
    <i>-«Par là, suivez moi les jeunes.»</i> ordonne t'il. <br>
    <a href='page13_4.php'>  Vous suivez donc John </a>à la recherche de son chien.
    </p>
    </div>";
  } ?>
</body>
</html>
