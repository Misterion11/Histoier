<?php session_start(); ob_start();unset( $_SESSION['mortP']);?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 14</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Chapitre Quatre</h1>
      <p class="seul">
        Vous avancez donc dans les rues de la ville passant entre les immeubles parfois comme neufs et parfois complètement fissurés par le temps. <br>
        <i>«Et sinon John, il s'appelle comment votre chien ?»</i> demande alors Clément. <br>
        <?php if ($_SESSION['Prénom']=="Margaux"||$_SESSION['Prénom']=="margaux") {
          echo "<i>-«Ah c'est une chienne et elle s'appelle Morine.»</i><br>
          Clément et toi ne pouvez vous empêcher de vous regarder et d'exploser de rire.</i><br>";
        }
        else {
          echo "<i>-«Ah c'est une chienne et elle s'appelle Atila.»<br>
          -«Oh et quel age a-t'elle ?»</i> enchaine alors Clément tentant d'engager une conversation.<br>";
        }
        ?>
        <i>«Silence !»</i> vous ordonne soudainement John. <i>«Je crois avoir entendu des aboiements.»</i> <br>
        Un silence de mort retentit alors. Chacun d'entre vous se concentre sur son ouïe espérant entendre les cris de l'animal. <br>
        <i>«Je viens de l'entendre.»</i> affirme Prisca. <i>«Au nord-ouest je dirais.»
          «Dépêchons ! Si elle aboie c'est qu'elle se sent en danger»</i> <br>
          Vous vous exécutez et accélérez le pas. Après quelques centaines de mètres vous arrivez au niveau d'un gigantesque cratère. <br>
          Au milieu de celui-ci deux personnes. L'une d'entre elle est habillée avec une cape noire recouvrant tout son corps avec une faux en main. Oui, cette personne est habillée comme la mort. <br>
          L'autre est un homme aux cheveux longs, il est torse nu. Plus exactement ses vêtements semblent déchirés. <br>
          Voyant votre arrivée, la mort disparait sous vos yeux. <br>
        </p> </div>
        <div class="paragraphe2">
          <p class="droite" style="margin-top : -25px; font-size : 24px;">
            L'autre personne reste immobile, dressée sur ses deux jambes, le regard porté vers le sol. <br>
            John te tend alors son arme et te dit la chose suivante : <i>«T'nez ma p'tite dame, gardez mon fusil pendant que je vais lui parler. Si vous deviez tirer, sachez que mon fusil possède deux gâchettes, une pour chaque canon mais qu'à cause d'un défaut de fabrication, vous ne pourrez pas appuyer sur les deux en même temps. Si j'vous spécifie ça, c'est qu'il n'y a qu'un tranquilisant chargé dans le fusil.»</i> <br>
            Après t'avoir expliqué cela, il s'avance instantanément vers le centre du cratère de manière déterminée. <i>«Hé p'tit gars ça va ? T'sais d'où il vient c'cratère ? Et t'aurais pas vu mon chien par hasard ?»</i><br>
            Prisca commence à le suivre tandis que Clément et toi restez plus en arrière, méfiants de ce qu'il pourrait se passer. <br>
            L'homme en face de John relève la tête sans dire un mot, puis se mord la main. Un éclair survient alors. <br>
            C'est alors qu'une créature titanesque apparaît fumant de la tête au pied. Elle écrase d'un simple mouvement le corps de John puis se rapproche dangeureusement de Prisca. <br>
            Tu te mets soudainement en joue, prête à tirer sur le titan. Mais tu te souviens de ce que t'avait dit John : Un seul tranquilisant et 2 gâchettes. Tu sens une chaleur dans ta poche et tu te souviens de ton yin yang. <br>
            Tu vas devoir faire un choix : <br>
            <a href="page14_4A">Gâchette de gauche</a> ou <a href="page14_4B">gâchette de droite</a> <br>
            <?php if (isset($_SESSION['yin'])) {
              echo " Ou bien <a href='page14_4'>utiliser ton yin yang</a> pour t'aider au risque d'en avoir besoin plus tard. <br>";
              $_SESSION['yin'] = 'used';
            } ?>
          </p></div>
        </body>
        </html>
