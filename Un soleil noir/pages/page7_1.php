<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 7</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Chapitre Deux</h1>
      <p class="seul">
        <?php if (isset($_SESSION['assommé'])){
          echo "Tu n'as pas le choix, tu brises le miroir derrière toi. Celui-ci vole en éclats laissant soudain apparaître une pièce avec une porte au fond de celle-ci. <br>
          Les sorcières ne réagissent pas à ton action. <br>
          Elles sont comme figées. C'est ta chance ! <br>
          Tu te rues vers le corps de Clément et tu commences à le tirer, essayant d'atteindre cette nouvelle porte. <br>
          Tu parcours les premiers mètres, non sans mal. <br>
          Quand soudainement, l'une des deux sorcières se met à courir vers toi. <br>
          Tu commences à paniquer. Tu n'auras jamais le temps d'atteindre la porte à ce rythme. <br>
          Tu sens une main sur la tienne. Tu te rends compte que c'est celle de Clément. Il te regarde dans les yeux en te souriant. <br>
          Tu comprends ce qu'il veut te dire. Une larme coule le long de ta joue. Hors de question de le laisser ! <br>
          </p>
          </div>
          <div class='paragraphe2'>
          <p class='droite' style='margin-top : 50px'>
          Tu entends alors une voix dans ta tête, c'est la sienne, tu la reconnaîtrais entre mille. Il te dit de te sauver. Les larmes coulent de plus en plus sur ton visage. <br>
          Tu finis par accepter de le laisser et tu cours vers la porte. <br>
          Avant de passer le pas, tu entends le bruit du couteau qui vient se planter dans son corps suivi d'un cri étouffé. <br>
          Au même instant, tu entends ce dernier mot dans ton esprit : <i>'Vis !'</i> <br>
          Tu ouvres la porte finalement la porte et tu te retrouves face au mur avec le symbole infini. <br>
          Cependant celui-ci commence à s'effacer devant tes yeux. <br>
          Le couloir à ta droite que vous aviez empruntés est maintenant barricadé. <br>
          Tu décides donc de <a href='page8_1.php'>descendre les escaliers</a> après que Clément ait été tué par ces sorcières. <br>
          </p>";
        }
        else {
          echo "Tu regardes Clément, et tu comprends qu'il a la même idée que toi. <br>
          Vous prenez tous les deux une chaise et vous brisez ensemble le miroir derrière vous. <br>
          Celui-ci vole en éclats laissant soudain apparaître une pièce avec une porte au fond de celle-ci. <br>
          Vous courrez le plus vite possible pour tenter d'atteindre cette porte, poursuivis par les deux sorcières. <br>
          Vous sentez qu'elles se rapprochent de vous, encore quelques mètres avant la porte et... <br>
          Soudain l'une des sorcières pose sa main sur ton épaule, et brandit son couteau. <br>
          Clément attrape ton bras et ouvre la porte. <br>
          Le couteau n'est plus qu'à quelques centimètres de ton visage et... <br>
          </p>
          </div>
          <div class='paragraphe2'>
          <p class='droite' style='margin-top : 150px'>
          Après quelques secondes, Clément te dit de rouvrir les yeux. <br>
          Tu les ouvres lentement et tu te rends compte qu'il n'y a plus de sorcière et de couteau. <br>
          Vous vous retrouvez à nouveau devant le symbole infini qui s'efface lentement sous vos yeux. <br>
          Le passage que vous aviez pris à droite est maintenant barricadé. <br>
          <i>'Bon... Vu que l'infini s'est effacé tu penses qu'on... peut descendre ?' </i> demande Clément. <br>
          Tu hausses les épaules, c'est possible après tout. <br>
          Vous <a href='page8_2.php'>descendez donc les escaliers</a> à nouveau après être passé à quelques centimètres de la mort.<br>
          </p>";
        }?>
      </div>
    </body>
    </html>
