<?php session_start(); ob_start();
?>
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
        De retour au village, vous êtes accueillis par les souris restées au village qui vous acclame tels des grands sportifs.  <br>
        Après ça, l'intégralité des habitants se dirige vers le bar. <br>
        <i>«C'est la maison qui paye les vainqueurs, prenez ce que vous voulez !»</i> vous lance le barman. <br>
        Vous ne vous gênez pas et commandez chacun une boisson. Un Schweppes sans agrumes pour toi et un Ice tea pour Clément. <br>
        Tu observes les gens autour de toi et quelqu'un attire ton attention. En effet une souris estest habillée avec une cape noire recouvrant tout son corps avec une faux en bouche avec une fourrure blanche. Oui, elle est habillée comme la mort. <br>
        <i>«Hé Clément, t'as remarqué la souris là à gauche.»</i> <br>
        Tu désignes alors la souris que tu as vu juste avant mais celle-ci a disparu. <br>
        Tu t'interroges. Comment a-t'elle pu disparaître aussi vite. Pendant que tu réfléchis tu remaques l'arrivée tardive de deux souris à une minute d'intervalle. Celles-ci ont chacune un shuriken dans la bouche. <br>
        Tu n'y fais pas plus attention. Ils avaient forcément une raison d'être en retard. <br>
        Une souris en panique vient te tirer de tes pensées. <br>
        <i>«C'est horrible, c'est horrible ! Une souris a été tué !»</i> hurle-t'il dans tout le bar. <br>
      </p>
    </div>
        <div class="paragraphe2">
          <p class="droite" style="margin-top : 50px">

            Très vite, une cohue se forme, tout le monde semble vouloir aller voir ce qu'il s'est passé. <br>
            Complètement perdus, vous décidez de suivre le rythme. <br>
            Vous arrivez à l'endroit du meurtre. Une souris avec des yeux rouges est au sol, morte, avec une blessure à l'arme blanche dans le dos. <br>
            <i>«C'est horrible, il y a un tueur parmi nous. C'est horrible !»</i> braille une souris. <br>
            <i>-«C'est une blessure à l'arme blanche et regardez ce qu'à le vainqueur dans la bouche»</i> crie quelqu'un dans la foule. <br>
            Tous se retourne alors vers Clément et son sabre dans la bouche. <br>
            <i>«Mais c'est pas lui.»</i> dis-tu avec énervement. <i>«On était ensemble en permanence et on était tout le temps entourés de monde.»</i>
            <i>-«Alors madame l'inspectrice qui est le meurtrier. Celui qui n'est pas revenu au village avec les autres.»</i> te lance une souris dans la foule. <br>
            Tu n'as pas la moindre piste. A moins que... Tu te souviens alors des deux souris arrivées en retard. <br>
            Leurs deux noms te revient en tête. Naruto et Sasuke. <br>
              <?php if (isset($_SESSION['yin'])) {
            echo " Tu sens au même moment une drôle de sensation sur ton poignet. Tu regardes et tu vois un yin yang";
          }?>
            Mais alors qui de <a href="page14_5A.php">Naruto</a> ou de <a href="page14_5B">Sasuke</a> n'est pas retourné au village ? <br>
            <?php if (isset($_SESSION['yin'])) {
              echo "Ou bien <a href='page14_5B'>utiliser</a> ton yin yang pour te donner la réponse au risque d'en avoir besoin plus tard. <br>";
              $_SESSION['yin'] = 'used';
            } ?>
          </p></div>
        </body>
        </html>
