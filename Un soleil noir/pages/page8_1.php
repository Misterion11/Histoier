<?php
session_start();
ob_start();
$_SESSION['mortC'] =true;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 8</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Chapitre Trois</h1>
      <p class="seul">
        Clément est mort, tu essuies tes larmes, et descends les marches machinalement. <br>
        Tu fouilles ta poche gauche et tu te rends compte qu'il y a un papier dans celle-ci. <br>
        Tu le déplies, l'écriture ne te semble pas familière. <br>
        Quand soudain tu te souviens, Clément avait un crayon dans sa main lorsque tu l'as rencontré. <br>
        Tu y lis ceci : <br>
        <i>"Je ne suis pas mort tant que le soleil est noir et cela vaudra pour ta prochaine rencontre. Tu peux nous encore nous sauver. Je crois en toi". </i><br>
        Après avoir lu ce message, tu presses le pas. <br>
        <?php if (isset($_SESSION['abandon'])){
          echo "Tu repenses à la décision que tu as prise. N'y avait-il aucun moyen de le sauver. Tu n'as même pas essayée, tu t'es simplement enfuie. <br>";
        } ?>
        <i>"Il faut que je sorte de là" </i> te dis-tu. <br>
        Tu n'es sûre d'avoir compris ce que ce message voulait dire, mais il semble rester un espoir. <br>
        Tu arrives à l'étage suivant et encore une fois l'escalier pour continuer est obstrué. <br>
        <i>"Lol, je commence à être habituée" </i> te dis-tu légèrement desespérée. <br>
        Tu soupires, et empruntes le couloir à ta droite. <br>
      </p>
    </div>
    <div class="paragraphe2">
      <p class="droite" style="margin-top : -25px">
        <i>"Encore le même couloir long avec des portes, et sûrement des sorcières à l'intérieur pffff" </i> t'exclames-tu à haute voix.
        Tu avances, pas à pas quand... <br>
        Le sol commence à se dérober sous tes pieds. <br>
        <i>"C'est quoi ça encore !" </i> hurles-tu. <br>
        Par réflexe tu commences à courir, espérant pouvoir échapper au sol qui disparaît petit à petit. <br>
        Sauf que le sol en face de toi commence aussi à disparaitre. <br>
        En clair, il n'y a aucune échappatoire.<br>
        Tu ne sens plus rien sous tes pieds, et tu commences à tomber dans un vide qui te semble être infini.<br>
        Tu te relèves sans blessure mais quelque chose cloche, les portes de ce nouveau couloir dans lequel tu te situes commencent au plafond.<br>
        C'est comme si le couloir était retourné ou comme si tu marchais toi même au plafond.<br>
        Tu décides de continuer à marcher ne comprenant rien à ce qu'il se passe quand tu entends un bruit derrière toi ressemblant à...<br>
        Un... Rugissement... Un rugissement de tigre ?! <br>
        Tu te retournes et tu te retrouves face à face avec un tigre vert. <br>
        Tu prends peur et tu commences à courir dans la direction opposée au tigre. <br>
        Cependant celui-ci te rattrape aisément, te plaque au sol quand soudain tu entends : <br>
        <i>"Bon alors, t'es prête à connaître ton tirage ?" </i> <br>
        <a href="page9.php">Se relever</a> pour voir à qui appartient cette voix.
      </p>
    </div>
  </body>
  </html>
