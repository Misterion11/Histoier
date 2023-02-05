<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Page 9</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  <?php if (isset($_SESSION['mortC'])) {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Deux</h1>
    <p class='seul'>
    Tu te redresses péniblement, tu frottes tes yeux. <br>
    <i>«J'suis où au juste» </i> te demandes-tu, la vue encore trouble. <br>
    Tu entends à nouveau cette voix qui te sort de ton sommeil : <i>«Bon alors t'es prête à connaître ton tirage ?»</i> <br>
    Cette voix tu la reconnais, c'est bien Manon, ta meilleure amie, celle qui t'avait fait le tirage. <br>
    Peu après tu entends une voix derrière toi : <i>«Et donc là j'ai couché avec un troisième gars juste après, mais tu le répètes pas hein ?» </i> <br>
    Tu fronces les sourcils, Pourquoi tout se reproduit ? Pourquoi te pose-t-elle la même question ? Pourquoi entends-tu à nouveau la voix d'Inès ? Était-ce un rêve ? <br>
    <i>«Le tirage, mais tu me l'as déjà fait, et le soleil est devenu noir, et après j'ai rencontré Clément et il est mort et ...» </i> t'exclames-tu.<br>
    <i>Manon te coupe «Hé meuf calme toi. T'as juste du faire un cauchemar c'est rien, personne n'est mort et puis qu'est ce que tu veux que Clément vienne faire au lycée ? Tu sais quoi oublions cette idée de tirage hein.» <br>
    -«En effet, c'est sûrement une meilleure idée» </i> te dis-tu en acquiesçant à la remarque de Manon. <br>
    Le cours de philo avance, sans grand intérêt. Le plus important, c'est surtout qu'il n'y a aucun soleil noir à déclarer. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 75px'>
    Tu envoies un message à Clément, mais tu n'as pas de réponse. <br>
    Finalement, la sonnerie retentit. Vous sortez avec Manon de la classe. <br>
    Toujours inquiète, tu jettes un coup d'oeil sur ton portable et tu vois une notification d'un numéro inconnu disant : <i>«Il est mort, le soleil noir est la seule vérité.» </i> <br>
    Ce message a pour effet de te faire paniquer. <br>
    Au même instant, une main vient se poser sur ton épaule. <br>
    <i>«Manon, je viens de recevoir un message vraiment bizarre, je dois te parler d'un truc.» </i> dis-tu innocemment. <br>
    Tu vas pour te retourner cependant... tu ne vois qu'un squelette derrière toi. <br>
    Tu bascules en arrière, la lumière se noircit soudainement. <br>
    Tu es de retour dans ce monde sombre avec ce putain de soleil noir. <br>
    <i>«À quoi ça rime ce chou-fleur de monde !»</i> hurles-tu. <br>
    Autour de toi plus l'ombre d'un tigre, d'une sorcière, ni même d'une présence. <br>
    Cependant tu te rends compte que tu es au rez de chaussée du lycée, ce qui veut dire que tu vas pouvoir en sortir. <br>
    Tu <a href='page10.php'>passes la porte vitrée</a> afin de te retrouver dans la grande cour. <br>
    </p>
    </div>";
  }
  else {
    echo "<div class='paragraphe'>
    <div class='paragraphe1'>
    <h1>Chapitre Deux</h1>
    <p class='seul'>
    Tu te redresses péniblement, tu frottes tes yeux. <br>
    <i>«J'suis où au juste» </i> te demandes-tu, la vue encore trouble. <br>
    Tu entends à nouveau cette voix qui te sort de ton sommeil «Bon alors t'es prête à connaître ton tirage ?»
    Cette voix tu la reconnais, c'est bien Manon, ta meilleure amie, celle qui t'avait fait le tirage.
    Peu après tu entends une voix derrière toi : <i>«Et donc là j'ai couché avec un troisième gars juste après, mais tu le répètes pas hein ?» </i> <br>
    Tu fronces les sourcils, Pourquoi tout se reproduit ? Pourquoi te pose-t-elle la même question ? Pourquoi entends-tu à nouveau la voix d'Inès ? Était-ce un rêve ? <br>
    <i>  «Le tirage, mais tu me l'as déjà fait, et le soleil est devenu noir, et après j'ai rencontré Clément et on était ensemble et on s'est fait prendre en chasse par un tigre vert...» </i> t'exclames-tu.
    <i>Manon te coupe «Hé, meuf, calme toi, t'as juste du faire un cauchemar, c'est rien, personne n'est mort, et puis qu'est ce que tu veux que Clément vienne faire au lycée ?
    Tu sais quoi oublions cette idée de tirage hein.»
    «En effet, c'est sûrement une meilleure idée» </i> te dis-tu en acquiesçant à la remarque de Manon. <br>
    Le cours de philo avance, sans grand intérêt. Le plus important, c'est surtout qu'il n'y a aucun soleil noir à déclarer. <br>
    Tu envoies un message à Clément, mais tu n'as pas de réponse. <br>
    </p>
    </div>
    <div class='paragraphe2'>
    <p class='droite' style='margin-top : 25px'>
    Finalement, la sonnerie retentit, vous sortez avec Manon de la classe. <br>
    Toujours inquiète, tu jettes un coup d'oeil sur ton portable, et tu vois une notification d'un numéro inconnu te disant : <i>«Je suis là, mais tu es dans un rêve, réveille toi "; echo $_SESSION['Prénom']; echo " !» </i> <br>
    Au même instant, une main vient se poser sur ton épaule, tu supposes que c'est celle de Manon. <br>
    <i>«Manon, je viens de recevoir un message vraiment bizarre, je dois te parler d'un truc.» </i> dis-tu innocemment. <br>
    Tu vas pour te retourner cependant... tu ne vois personne. <br>
    Tu rouvres les yeux, allongée au sol. <br>
    Clément est penché au dessus de toi, il te regarde inquiet. <br>
    <i>«Hé hé, ça va ?»</i> te dit-il d'une petite voix. <br>
    Il t'aide à te redresser et tu scrutes autour de toi. <br>
    Plus l'ombre d'un tigre cependant tu remarques que tu es au rez-de-chaussée du lycée, ce qui veut dire que vous allez pouvoir en sortir. <br>
    <i>«Oui, oui ça va, il y avait le tigre et j'ai rêvé j'étais de retour en classe et je... Qu'est-ce qui se passe au juste ?» </i> lances-tu. <br>
    Clément hausse les épaules et te raconte qu'il s'est retrouvé dans sa chambre durant ce laps de temps et qu'il s'est réveillé à tes côtés, quelques minutes auparavant. <br>
    Vous décidez finalement de <a href='page10.php'>passer la porte vitrée</a> et vous vous retrouvez dans une grande cour. <br>
    </p>
    </div>";
  } ?>
</body>
</html>
