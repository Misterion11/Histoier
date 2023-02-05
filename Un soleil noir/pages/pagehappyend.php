<?php session_start(); ob_start()?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page Happy End</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <div class="paragraphe">
    <div class="paragraphe1">
      <h1>Happy End</h1>
      <p class="seul">
        Te voilà en weekend. Enfin ! <br>
        Le réveil est compliqué mais tu as dormi comme un bébé. <br>
        Tu sors de ton lit et te dirige vers ton salon prête à te faire ton bol de Frosties. <br>
        Tu t'assieds dans le canapé avec celui-ci et tu commences à te promener sur les réseaux.<br>
        <i>«Oh c'est aujourd'hui, j'avais oublié.»</i> <br>
        Tu fonces sur Youtube pour suivre en direct le grand reportage dédié au soleil noir. <br>
        <i>«Déjà un an que le phénomène connu sous le nom de soleil noir a frappé sur toute la planète. <br>
          Nous laissons la parole à Rousselet Sophie, physicienne quantique de renommée.» <br>
          -«Beurk de la physique» </i> penses-tu.<br>
          <i>-«Merci, le soleil noir est donc une anomalie spatio-temporelle qui s'est produite dans le monde entier.<br>
            Les humains se sont retrouvés en groupe mais on ne sait pas l'élément qui a permis de sortir de tout cela.» </i><br>
          </i> <br>
        </p> </div>
        <div class="paragraphe2">
          <p class="droite" style="margin-top : -25px">
            Un appel te sort du reportage et ce n'est pas pour te déplaire car la physicienne commençait à partir dans des explications quantiques ou tu ne sais pas trop quoi.<br>
            Tu décroches finalement.<br>
            <i>«Allo ?»</i> c'est Clément au bout du fil. <i>«Toi aussi le reportage il te saoule je me trompe ?» <br>
              -«Bien vu monsieur le détective.» <br>
              -«Quand on y pense c'est quand même étrange que tu sois la seule d'entre nous à te souvenir de tout ça.» <br>
              -«J'y peux rien moi.» <br>
              -«J'sais bien, oh tiens j't'ai pas dit, j'viens de recevoir 50 minutes de vocaux de Prisca j'ai pas la foi d'écouter» <br>
              -«Elle abuse un peu non» </i> dis-tu en rigolant <i>«bon on joue ?» <br>
                -«Carrément ! J'allume mon pc !» </i> <br>
                <?php if (isset($_SESSION['yin'])) {
                  echo " Au passage, tu vas te chercher du jus de fruits au frigo. Sur ton frigo tu vois le fameux yin yang que tu n'as pas utilisé. «J'aurais même pas eu besoin de toi» dis-tu en souriant.» <br>";
                } ?>
                La vie a repris son cours. Grâce à toi ? Tu n'en sais rien, mais c'est une expérience que tu n'oublieras jamais. <br>
              </p> </div>
            </body>
            </html>
