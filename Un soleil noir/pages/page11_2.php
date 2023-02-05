<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 11</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <?php if (isset($_SESSION['mortC'])) {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Quatre</h1>
    <p class='seul'>
    <i>«Le tigre pose un bien trop gros problème, désolé Clément mais pas le choix»</i> viens-tu à penser. <br>
    <i>«Bon Prisca, on va devoir essayer de trouver une autre sortie, mais dis-moi cet établissement t'est-il familier ?» <br>
    «Pas le moins du monde» </i> te répond elle. <br>
    Cela ne t'arrange pas. Il va falloir essayer de voir si tu ne trouves pas une autre porte. Tu fais donc demi-tour et tu t'engages dans le couloir à droite puisque celui à ta gauche est obstrué. <br>
    Vous marchez quelques mètres quand Prisca te signale que l'une des portes de classe semble ouverte. Vous y entrez et l'une des fenêtres de la salle est ouverte. Voici votre moyen de sortir d'ici. <br>
    Vous passez donc par la fenêtre et vous vous retrouvez en face d'un grand terrain de basket. Au loin vous pouvez voir un gymnase qui semble être le seul endroit où vous pouvez actuellement vous rendre. <br>
    <i>«On dirait qu'on va devoir aller au gymnase, moi qui n'avait pas envie de faire de sport.»</i> te lance Prisca. <br>
    Tu la regardes en souriant. Ce n'est pas vraiment le moment de faire ce genre de blague mais bon, mieux vaut éviter les discordes entre vous. <br>
    Après quelques minutes vous arrivez au niveau du gymnase. Vous entendez une voix provenir de celui-ci. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    <i>«C'est la voix de ma meilleure pote !»</i> hurle Prisca en fonçant à l'intérieur. <br>
    Tu la regardes, intriguée. Pour toi c'était une voix masculine. Pas le temps d'y penser tu cours derrière elle entrant à ton tour dans le gymnase. <br>
    <i>«Hé Prisca attend moi !»</i> cries-tu. Mais aucune réponse ne te revient. Tu arrives finalement à l'intérieur du gymnase et tu y vois un gigantesque portail ainsi qu'une personne non identifiée en face de celui-ci. <br>
    Il s'agit d'une personne habillée avec une cape noire recouvrant tout son corps avec une faux en main. Oui, cette personne est habillée comme la mort. <br>
    L'individu entre dans le portail. Te voilà bien perdue. Prisca a disparu, il y a un énorme portail et la mort. <br>
    Tu souffles un grand coup. Ce n'est pas le moment de paniquer. Et pourtant tu aimerais pouvoir hurler un grand coup mais le temps joue contre toi. <br>
    <i>«Bon on dirait que je vais pas pouvoir y couper, direction le portail magique qui mènera vers je ne sais pas où, youhou»</i> dis-tu avec un sacarsme prononcé. <br>
    <a href='page12_2.php'>Prendre le portail</a> et aller vers un monde inconnu. <br>
    </p>
    </div>";
  }
  else {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Deux</h1>
    <p class='seul'>
    <i>«Je sais pas pour vous, mais l'idée de passer près de ce fichu tigre ne m'enchante pas trop. Je préfèrerais qu'on cherche une autre sortie.»</i> <br>
    Tes deux compagnons acquiescent allegrement. Vous faites donc demi-tour et vous commencez à vous promener dans les couloirs du rez-de-chaussée du lycée. <br>
    Soudain, une souris apparaît devant vous. Celle-ci est spéciale. En effet elle a un chapeau sur la tête et des yeux violets. <br>
    Lorsqu'elle remarque votre présence, la souris commence à courir. Vous décidez de la suivre. Après avoir parcouru l'intégralité du couloir, elle rentre dans un petit trou. <br>
    <i>«Et merde, on l'a perdu.»</i> t'exclames-tu. <br>
    Clément se met alors à genoux et regarde dans le trou par lequel la souris est passé. <br>
    <i>«Qu'est-ce que tu fais au juste ?»</i> demande Prisca. <br>
    <i>«Après tout ce qu'on a vécu, ça vous choquerait si on pouvait passer par un trou de souris ? Parce que moi non»</i> <br>
    A moitié convaicue, vous imitez alors Clément et vous mettez tous les trois vos doigts dans le trou de souris espérant que quelque chose se produise. <br>
    Dix secondes passent, puis vingt, puis trente. <i>«Tu vois que c'était complètement...»</i> <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    Prisca n'a pas le temps de finir sa phrase que vous vous retrouvez happés dans le trou. <br>
    Une fois de l'autre côté, tu rouvres les yeux. Le monde te semble si petit. Tu te regardes et tu te rends compte que tu possèdes une sublime fourrure verte et que tu as un trèfle dans la bouche que tu ne peux pas lacher. <br>
    A côté de toi, tu vois une souris avec une magnifique fourrure blanche, des cheveux oranges et un sabre dans la bouche. <br>
    <i>«Hé ?»</i> murmures-tu hésitante. <i> -«"; echo $_SESSION['Prénom']; echo " , c'est toi ?»</i> Tu n'en reviens pas, c'est la voix de Clément que tu entends à travers cette souris.<br>
    Vous regardez autour de vous. Vous êtes dans sur un transat au bord du piscine en tant que souris. <br>
    <i>«Bon bah on est devenus des souris. C'était pas prévu oopsii»</i> chuchote Clément. <br>
    <i>-«Pas bien grave. Allons chercher Prisca maintenant.»</i> Tu lui fais signe de te suivre. Vous passez par une maison puis un pont. Vous semblez être au village. D'autres souris sont présentes. <br>
    L'une d'entre elle parle d'une récupération importante de fromage. <br>
    <i>«Si y a du monde, c'est là qu'on a le plus de chance de trouver Prisca. Allons y !»</i> t'exclames-tu. <br>
    <a href='page12_2.php'>Vous vous dirigez</a> donc en tant que souris vers la récupération de ce fromage.
    </p>
    </div>";
  } ?>
</body>
</html>
