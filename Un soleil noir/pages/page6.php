<?php
session_start();
ob_start();
unset( $_SESSION['abandon']);
unset( $_SESSION['mortC']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 6</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Chapitre Deux</h1>
      <p class="seul">
        Vous arrivez tous les deux à l'étage inférieur et cette fois-ci l'escalier de l'étage d'en dessous n'est pas bloqué. <br>
        Cependant quelque chose attire ton œil, un tag infini sur le mur en face. <br>
        A peine le temps de le remarquer que Clément commence déjà à emprunter l'escalier afin de descendre. <br>
        Tu le suis et vous arrivez à l'étage inférieur. A nouveau l'escalier est dégagé. <br>
        Vous continuez innocemment à descendre puis arrivés au palier suivant Clément s'arrête. <br>
        Tu fais de même. Vous vous regardez. Sans dire un mot. Vous avez tous les deux compris. <br>
        La vue par la fenêtre ne change pas, et le tag infini est toujours présent. <br>
        <i>"Clément tu crois que ?...". <br>
          -"Qu'on descend le même escalier en boucle ?". <br>
          -"Alors ... On va devoir prendre ce couloir je crois". <br> </i>
          Vous vous apprêtez à rentrer dans le couloir. Au passage tu essaies d'effacer le tag infini mais sans succès. <br>
          Vous franchissez le couloir et vous vous retrouvez dans une grande pièce intégralement carrelé au sol avec diverses meubles. <br>
          Vous remarquez d'immenses miroir aux 4 coins de la pièces reflétant tout... sauf vous. <br>
        </p>
      </div>
      <div class="paragraphe2">
        <p class="droite" style="margin-top : 0px; font-size: 21px;">
          <i>"Hé c'est quoi ce truc"</i> s'exclama Clément <i> "il est où le couloir ?". </i> <br>
          Tu t'apprêtes à lui répondre quand 2 personnes apparaissent dans les miroirs.<br>
          2 femmes pour être exact, habillées comme les sorcières dans les contes de fées armées de couteau de boucher. <br>
          <i>"Ainsi voici la fin..." </i> commence l'une. <br>
          <i>"Mais ce n'est que le début" </i> termine l'autre. <br>
          Un son strident survient à cet instant, comme une craie sur un tableau. <br>
          Les 2 sorcières sortent du miroir derrière vous. <br>
          <i>"Ainsi soit-il..." -"...Vous serez nos victimes."</i> <br>
          Par réflexe vous reculez tous les deux jusqu'au mur le plus loin d'elles et vous vous regardez. <br>
          <i>"On fait quoi ?" </i>te demande-t-il. <br>
          Vous voilà collés au mur miroir avec deux "sorcières" en face de vous. <br>
          Tu te rends compte que cela sonne creux derrière toi. Serait-ce une sortie ? <br>
          De plus tu observes qu'une porte est apparue venant du miroir où les sorcières sont sorties. <br>
          Autour de vous il y a plein de chaises, cela pourrait servir d'arme ou d'objet pour briser le miroir. <br>
          <?php if (isset($_SESSION['assommé'])){
            echo "À cet instant Clément s'évanouit, c'était bien le moment ! Mais tu t'aperçois que sa blessure à la tête saigne vivement.. et d'ailleurs cela semble distraire les deux sorcières. <br>";
          }
           if (isset($_SESSION['yin'])){
             echo "Tu observes aussi que de la lumière émane de ton yin yang cependant tu as le sentiment que si tu l'utilises maintenant tu ne pourras plus l'utiliser à nouveau. <br>";
           }?>
          Plusieurs solutions s'offrent à toi : <br>
          Tu peux soit <a href="page7_1.php">tenter de briser le miroir</a> derrière toi avec une chaise.<br>
          Soit <a href="page7_2.php">faire face aux sorcières</a> en sachant qu'elles sont armées. <br>
          <?php if (isset($_SESSION['assommé'])){
            echo 'Soit <a href="page7_3.php">foncer vers la porte</a> en abandonnant Clément.<br>';
          }
          if (isset($_SESSION['yin'])){
          echo 'Soit <a href="page7_4.php">utiliser</a> ton yin yang. <br>';
          }?>
        </p>
      </div>
    </body>
    </html>
