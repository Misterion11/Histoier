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
          echo "
          Clément est au sol, inconscient. Il ne pourra donc pas t'aider. <br>
          Mais tu ne peux pas mourir ici, tu dois les affronter. <br>
          <i>' J'vais vous défracter !' </i> hurles-tu comme pour te donner du courage. <br>
          Tu saisis une chaise à ta gauche et tu la brandis telle une arme. <br>
          Tu t'avances vers la sorcière de droite en hurlant et tu lui brises la chaise sur la tête. <br>
          Cela ne semble pas avoir le moindre effet sur elle. <br>
          Que faire maintenant ? C'était ta seule solution. <br>
          Tu jettes un coup d'œil sur la deuxième sorcière et tu te rends compte que celle-ci s'approche dangereusement du corps de Clément. <br>
          Ton sang ne fait qu'un tour, tu fonces vers elle. <br>
          Son couteau n'est plus qu'à quelques centimètres de la jugulaire du jeune homme. <br>
          Dans un dernier espoir, tu te jettes sur elle espérant pouvoir l'interrompre au dernier instant. <br>
          </p>
          </p>
          </div>
          <div class='paragraphe2'>
          <p class='droite' style='margin-top : 50px'>
          Tu tombes alors au sol. Cependant pas l'ombre d'une sorcière entre tes bras. <br>
          Tu te relèves en essuyant la poussière sur ton pantalon et... Clément ? <br>
          Tu regardes à droite, à gauche puis en face de toi. Tu observes ce symbole infini qui s'efface lentement sous tes yeux. <br>
          Tu te retournes et le corps de Clément est allongé dans les escaliers. <br>
          Tu fonces vers lui et passes ta main au niveau de sa blessure qui ne semble plus saigner. Il finit par se réveiller et se relève doucement. <br>
          <i>'Il s'est passé quoi là au juste ?' </i> te demande-t-il alors qu'il est encore à moitié assommé. <br>
          <i> -'Euuh, je saurais même pas comment te l'expliquer...'</i> lui réponds-tu. <br>
          Tu l'aides à se relever. <br>
          <i>-'Bon... Vu que l'infini s'est effacé tu penses qu'on... peut descendre ?'</i> demande Clément. <br>
          Tu hausses les épaules, c'est possible après tout. <br>
          Vous <a href='Page8_2.php'>descendez donc les escaliers</a> à nouveau après être passés à quelques centimètres de la mort.
          </p>";
        }
        else {
          echo "Tu regardes Clément. Vous êtes deux contre deux, vous pouvez vous en sortir. <br>
          Vous saisissez tous les deux une chaise et vous vous approchez respectivement de la sorcière en face de vous. <br>
          Celles-ci restent stoïque, mais cela ne perturbe pas votre volonté. <br>
          Vous continuez à vous approchez armant votre frappe et vous assénez un violent coup à la sorcière que vous avez défié. <br>
          Vos deux chaises de brisent sur leurs têtes. Cependant les deux sorcières ne semblent avoir aucune réaction... Enfin, tu croyais. <br>
          Celle que tu avais tapé te saisit par la main et brandit son couteau près de ta tête. <br>
          En voyant ça Clément court vers toi.<br>
          Le couteau n'est plus qu'à quelques centimètres de ton visage mais tu es paralysée par la peur. <br>
          Tu fermes les yeux et tu sens ton corps tomber vers la gauche. <br>
          Tu finis par les rouvrir et tu te rends compte que Clément est effondré sur toi. <br>
          </p>
          </p>
          </div>
          <div class='paragraphe2'>
          <p class='droite' style='margin-top : 75px'>
          Les deux sorcières se sont évaporées. <br>
          <i>'On a réussi elles ont disparus'</i> cries-tu. <br>
          Mais aucune réaction de Clément.<br>
          Tu passes ta main dans ton dos et tu sens du sang. Tu te rends compte qu'il y a un couteau planté dans son dos.  <br>
          Tu te dégages tant bien que mal et tu te mets à genoux devant le corps. <br>
          Les larmes commencent à couler sur ton visage. <br>
          Tu fermes les yeux et tu entends une voix dans ta tête que tu connais bien, celle de celui qui est mort en face de toi. <br>
          Celle-ci te dit : <i>'Vis !'</i> <br>
          Tu rouvres les yeux et tu te retrouve à nouveau dans les escaliers en face du symbole infini. <br>
          Cependant celui-ci commence à s'effacer devant tes yeux. <br>
          Le couloir à ta droite que vous aviez empruntés est maintenant barricadé. <br>
          Tu décides donc de <a href='page8_1.php'>descendre les escaliers</a> après que Clément ait été tué par ces sorcières. <br>";
        }?>
      </div>
    </body>
    </html>
