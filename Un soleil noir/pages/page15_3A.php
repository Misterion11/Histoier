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
        <i>«Hmm les deux réponses sont logiques. Mais je vais répondre Simon !»</i> <br>
        Au moment de ta réponse, tu entends la cloche d'entrée de la porte de la station service <br>
        Le serpent te regarde : <i>«Ainssssssssssi c'est votre réponse. Très bien.»</i> Il s'arrête.
        <i>«Je vous conssssssssseille de vous retourner jeune humaine. Cccccccccelui qui vient de rentrer souhaite vous faucher.»</i> <br>
        <i>-«Me faucher ? Hein ? Quoi ?»</i> Tu te retournes et tu regardes la persone qui vient de rentrer. <br>
        Il s'agit ni plus ni moins que de la mort en personne. Elle est en face de toi. Sa faux vient frôler ta gorge. <br>
        <i>«Que dirais-tu de revenir là où tout a commencé une fois de plus»</i> te dit l'effrayant personnage avant d'abattre sa faux sur toi. <br>
        Tu fermes les yeux par réflexe. Tu ne sens aucune douleur. Es-tu morte ? <br>
        Tu finis par rouvrir tes yeux et tu te trouves à nouveau à l'endroit où le portail t'a fait sortir. <br>
        Tes poignets sont cette fois-ci détachés. Enfin tu es libre de tes mouvements. <br>
        Tu regardes tout autour de toi. Que faire ? Où que tu ailles les problèmes te suivent. <br>
      </p> </div>
      <div class="paragraphe2">
        <p class="droite" style="margin-top : 75px">
          Subitement, tu entends le brame d'un cerf. Tu te retournes et il s'agit du cerf que tu as vu se faire attaquer par les zombies. <br>
          Celui-ci commence à te parler. <i>«Bonjour. Je suis le dieu-cerf. Je suis là pour te faire patienter le temps qu'elle revienne.»<br>
            -«Le temps que qui revienne au juste ? La mort ? Elle va revenir ici ?» <br>
            -«Bien évidemment, il est temps que tu vois le résultat de ton épreuve.» </i>
            Tu ne comprends pas un traître mot de ce qu'il te raconte. De quelle épreuve parle-t'il au juste ? <br>
            Résolue à ne pas pouvoir échapper à la mort, tu t'assieds dans l'herbe. <br>
            <i>«Et elle arrive quand la mort au juste ?»</i> Le cerf rigole. <i>«C'est une question que tous les humains se posent mais en ce qui te concerne il te suffit de te retourner.»</i><br>
            Tu te retournes. <i>«Oh je t'avais manqué ?»</i> te dit-elle. <br>
            <i>«Pas vraiment mais bon, faut en finir non ?»</i> lâches-tu en t'allongeant dans l'herbe. <i>«Allez dépêchons !»</i><br>
            La mort éclate de rire puis te fauche pour tu l'espères la dernière fois.
            <?php if (isset($_SESSION['abandon'])) {
            echo "<a href='pagealternativeending.php'>Rendez vous de l'autre côté du miroir.</a>";
            }
            elseif (isset($_SESSION['mortP'])) {
              echo "<a href='pagebadending.php'>Rendez vous de l'autre côté du miroir.</a>";
            }
            else {
                echo "<a href='pageendingmortClem.php'>Rendez vous de l'autre côté du miroir.</a>";
            } ?>
            </p></div>
            </body>
            </html>
