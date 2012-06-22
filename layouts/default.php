<!DOCTYPE html>
<html lang="fr">
<head>
<title></title>							  
<meta charset="utf-8" />
<link href="style.css"	title="Défaut" rel="stylesheet" type="text/css" media="screen" />
<link href="form.css"	title="Défaut" rel="stylesheet" type="text/css" media="screen" />
<link href="jqtransform/jqtransform.css"	title="Défaut" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="formToWizard.js"></script>
<script type="text/javascript" src="jqtransform/jquery.jqtransform.js"></script>

<script src="vanadium.js" type="text/javascript"></script>

<script type="text/javascript">
$(function() {
    //find all form with class jqtransform and apply the plugin    
    //$("form.jqtransform").jqTransform();
    $("#Form").formToWizard();
    
});
</script>
</head>
<body>

<div id="conteneur"><!-- Global -->
<div id="header"><!-- Header --> 

<div id="Espace_Membre"><!-- Espace_Membre -->	

<form action="connexion" method="post">
<div>  

<input type="image" alt="ok" id="ok" src="images/go.png" title="Connexion" style="float:right;padding:10px 6px 0 0"/>	
<div class="con1">E-mail :<input type="email" value="webmaster@votresite.com" class="champ" name="pseudo" onclick="effacer(this, 'Pseudo');" onblur="restaurer(this, 'Pseudo');" /></div>
<div class="con1">Mot de passe :<input type="password" name="connect_pass" class="champ" value="motdepasse" onclick="effacer(this, 'motdepasse');" onblur="restaurer(this, 'motdepasse');" /></div>
</div>
</form>


<p><img src="images/fleche.png" alt=""/><a href="inscription">Inscription</a> | <a href="">Mot de passe perdu?</a></p>
</div><!-- Fin Espace_Membre -->

</div><!-- Fin Header -->  

<div id="brmenu"><!-- Fond Menu -->

<ul id="menu">
      <li><a href="#">Rubrique</a>

        <ul>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
        </ul>
      </li>

	  
      <li><a href="#">Rubrique</a>
        <ul>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
        </ul>
      </li>

      <li><a href="#">Rubrique</a>
        <ul>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
        </ul>
      </li>
	  
      <li><a href="#">Rubrique</a>
        <ul>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
        </ul>
      </li>
	  
      <li><a href="#">Rubrique</a>
        <ul>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
          <li class="lien"><a href="#">Lien</a></li>
        </ul>
      </li>
</ul>

</div><!-- Fin Fond Menu -->
	

          <div class="contenu2"><!-- Contenu blanc -->	 
            <?php
              echo $DIV_MESSAGE;
            ?>
     <div class="left"><!-- Colonne Gauche -->
         
        <?php echo $content_for_layout; ?>

	</div><!-- Fin Colonne gauche --> 
	
	<div class="right"><!-- Colonne Droite -->
	     <div class="cadre" style="margin:0"><!-- Cadre --> 
<span>Contenu de l'archive :</span><br />
L'archive que vous venez de télécharger contient les fichiers suivants :<br /><br />
<img src="images/deco1.png" style="float:left;padding:0 10px 0 10px" alt="" /> 
<div style="padding:3px 0 0 0">- un fichier index.html et un fichier style.css</div>	<br />
<div style="padding:3px 0 0 0">- un dossier "images" contenant toutes les images du kit</div><br />
<div style="padding:3px 0 0 0">- Le ou les .PSD</div><br />
<div style="padding:3px 0 0 0">- la présente licence</div><br />
	     <div class="clear"></div></div><!-- Fin Cadre --> 
		 
		 	     <div class="cadre"><!-- Cadre -->  
<span>Nous contacter :</span><br />
Pour toutes informations supplémentaires, d'aide, de modification ou de réalisation n'hésitez pas<br />
<a href="http://www.kitgraphiquegratuit.org" style="float:left;padding:3px 10px 0 0px" onclick="window.open(this.href); return false;"><img src="http://www.kitgraphiquegratuit.org/images/bouton3.jpg" alt="kits graphiques gratuits"/></a>
<div style="padding:5px 0 0 0">
à nous contacter : <a href="webmaster@kitgraphiquegratuit.org"> E-mail</a><br />
ou à visiter le forum : <a href="http://www.kitgraphiquegratuit.org/forum/"> Forum</a>
</div>
         </div><!-- Fin Cadre --> 
	</div><!-- Fin Colonne Droite -->	  

<div class="texte"><!-- Mise en forme du texte -->
<hr />
<span class="boldspan">Etiam ac lacus sapien. Sed lobortis mauris nec magna pretium mattis.</span><br /> 
<hr />
Aenean fermentum metus a turpis bibendum congue. 
In purus erat, gravida a euismod ac, cursus pellentesque odio. Praesent interdum accumsan dapibus.
</div><!-- Mise en forme du texte -->
          <div class="clear"></div></div><!-- Fin Contenu blanc --> 

<div id="pied"><!-- Pied -->
<!-- mention de copyright Ne pas retirer sans autorisation écrite Design <a href="http://www.kitgraphiquegratuit.org" onclick="window.open(this.href); return false;" title="kits graphiques gratuits" > Kit graphique</a>-->	
<div class="copyright">©<a href=""> SilverEntertainement</a> | Design <a href="http://www.kitgraphiquegratuit.org" onclick="window.open(this.href); return false;" title="kits graphiques gratuits" > Kit graphique</a> | <a href="http://validator.w3.org/check?uri=referer" onclick="window.open(this.href); return false;">HTML5 strict</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" onclick="window.open(this.href); return false;">CSS3</a></div>
<!-- mention de copyright Ne pas retirer sans autorisation écrite -->	
</div><!-- Fin Pied --> 
  
</div><!-- Fin global -->

</body>
</html>