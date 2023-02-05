<?php
session_start();
ob_start();
unset( $_SESSION['mortP']);
unset( $_SESSION['mortCl']);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 10</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <?php if (isset($_SESSION['mortC'])) {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Deux</h1>
    <p class='seul'>
    Une fois arrivée dans la cours tu avances de quelques pas mais bien vite tu sens le sol trembler à ta droite. <br>
    Tu tournes ta tête et tu vois une femme métisse qui court vers toi, suivi du... tigre vert. <br>
    Elle te fait signe de courir en agitant ses bras. <br>
    Dans la panique tu retournes vers le lycée, tu ouvres la porte. La jeune femme te rattrape, rentre avec toi et ferme la porte derrière vous. <br>
    Vous patientez quelques secondes priant pour ne pas voir le tigre foncer sur la porte vitrée mais il semble avoir disparu. <br>
    Ta nouvelle compagnon s'effondre au sol, essoufflée. <br>
    <i>«Me-, Mer-, Mer-...» </i> lâche-t-elle en tentant de reprendre son souffle. <br>
    Tu te mets près d'elle. <br>
    <i>-«Prends ton temps, récupères ton souffle, tout va bien, le tigre vert semble être parti.» <br>
    -«Mercii» </i> finit-elle par te dire. <i>«Je retombe enfin sur un humain». </i> <br>
    Tu baisses la tête <i>«Moi j'étais avec Clément mais...» </i> <br>
    En disant cette phrase tu te rends compte qu'elle ne peut pas connaître le jeune homme. <br>
    Tu t'apprêtes à lui expliquer quand elle te coupe. <br>
    <i>«Clément ? Un grand brun ? Mais attend, tu ne serais pas "; echo $_SESSION['Prénom']; echo " ?» </i> te demande-t-elle. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    <i>«Euh si, mais comment le sais-tu ?» </i> lui réponds-tu étonnée. <br>
    <i>«Ah euh, moi c'est Prisca»</i> te dit-il en souriant. <br>
    Prisca. Ce prénom ne t'est pas inconnu, il s'agit d'une amie du défunt Clément. <br>
    Tu la regardes et lui dis d'un air triste. <br>
    <i>«Clément est... mort» </i> murmures-tu. <br>
    <i>-«Mort ? Mais non il était avec moi avant que le tigre nous course, on s'est séparés mais il est bel et bien en vie». </i> <br>
    Tu regardes la jeune femme d'un air étonné, ce n'est pas la première chose choquante que tu entends après tout. <br>
    Tu te souviens alors du papier qu'il t'avait donné disant qu'il n'était pas mort tant que le soleil était noir. <br>
    Prisca semble enfin avoir repris son souffle. Il va être temps pour vous de décider ce que vous allez faire. <br>
    <i>«Bon»</i> t'exclames-tu. <i>«Dehors y a donc Clément, qui serait en vie cependant il y a aussi un tigre.  <br>
    On peut aussi décider de continuer à se promener dans ce rez de chaussée et espérer trouver une autre sortie, on s'éloigne certes du tigre, mais aussi de Clément...»</i> <br>
    Vous pouvez donc <a href='page11_1.php'>sortir par la porte principale.</a> <br>
    Ou bien <a href='page11_2.php'>chercher une autre sortie</a> abandonnant Clément.
    </p>
    </div>";
  }
  else {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Deux</h1>
    <p class='seul'>
    Vous avancez de quelques pas, mais bien vite vous sentez le sol trembler à votre droite. <br>
    Tu tournes ta tête, et tu vois une femme métisse qui court vers toi, suivi du... tigre vert. <br>
    Elle te fait signe de courir en agitant ses bras. <br>
    Dans la panique vous retournez vers le lycée, tu ouvres la porte et Clément fait signe à la jeune femme de rentrer et ferme la porte derrière vous. <br>
    Vous patientez quelques secondes, mais le tigre semble avoir disparu. <br>
    Ta nouvelle compagnon s'effondre au sol, essoufflée. <br>
    <i>«Me-, Mer-, Mer-...»</i> lâche-t-elle en tentant de reprendre son souffle. <br>
    Clément la regarde et lance : <br>
    <i>«Prisca, mais qu'est-ce que tu fais ici ?»</i> <br>
    Ce prénom n'est pas inconnu à tes oreilles, il s'agit d'une de ses amies. <br>
    Tu te mets près d'elle. <br>
    <i>«Prends ton temps, récupères ton souffle, tout va bien, le tigre vert semble être parti.» <br>
    -«Merci», </i> finit-elle par te dire. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    <i>«Vous êtes les premiers humains que je rencontre. Vous savez ce qu'il se passe ici ?» </i> <br>
    <i>-«Non pas plus que toi, on s'est retrouvé par hasard, même si je pense pas que ça soit vraiment un hasard qu'on soit ensemble pour être franc.»</i> s'exclame Clément. <br>
    Prisca semble enfin avoir repris son souffle. Il va être temps pour vous de décider ce que vous allez faire. <br>
    <i> -«Bon» </i> t'exclames-tu. <i> «Dehors y a un tigre, donc passer par là semble une mauvaise idée. On va devoir chercher un autre passage par le lycée.» </i> <br>
    Prisca vous regarde, prend une grande inspiration et dit : <br>
    <i>«En fait le tigre ne nous attaque que si on lui tourne le dos.» </i> Elle sort un papier de sa poche et vous le tend. Sur celui-ci, vous lisez ce qu'elle vient de vous dire. <br>
    <i> «J'avais réussi à m'en sortir en restant toujours en face de lui mais j'ai trébuché et en me relevant, je lui ai tourné le dos...» </i> <br>
    Cette information en poche, deux choix s'offrent à toi : <br>
    Tu peux soit <a href='page11_1.php'>sortir par la porte principale</a> et utiliser la technique de Prisca. <br>
    Ou bien <a href='page11_2.php'>chercher une autre sortie.</a> <br>
    </p>
    </div>";
  } ?>
</body>
</html>
