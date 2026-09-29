<?php
$nom = $prenom = $email= $tel = $comment =' ';
$nomError = $prenomError = $emailError= $telError = $commentError =' ';
$isSuccess = false;
$mailto= "contact@livre-education.com";

if($_SERVER['REQUEST_METHOD'] == "POST"){
	$nom = verifyInput($_POST["name"]);
	$prenom = verifyInput($_POST["surname"]);
	$email = verifyInput($_POST["mail"]);
	$tel = verifyInput($_POST["phone"]);
	$comment = verifyInput($_POST["commentaire"]);
	$isSuccess = true;
	$mailtext = " ";


	if(empty($nom)){
		$nomError = "N'oubliez pas votre nom !";
		$isSuccess = false;
	}

	else {
		$mailtext .= "Nom: $nom \n";
	}

	if(empty($prenom)){
		$prenomError = "N'oubliez pas votre prenom !";
		$isSuccess = false;
	}

	else {
		$mailtext .= "Prenom: $prenom \n";
	}

	if(!isEmail($email)){
		$emailError = "Adresse mail invalide";
		$isSuccess = false;
	}

	else {
		$mailtext .= "Adresse mail: $email \n";
	}

	if(!isPhone($tel)){
		$telError = "N'entrez que des chiffres";
		$isSuccess = false;
	}

	else {
		$mailtext .= "Tel: $tel \n";
	}

	if(empty($comment)){
		$commentError = "N'oubliez pas votre message !";
		$isSuccess = false;
	}

	else {
		$mailtext .= "Message: $comment \n";
	}

	if ($isSuccess) {

		$headers = "From: $nom $prenom <$email>\r\nReply-to: $email";
		mail ($mailto, "<strong>Un message de votre site.</strong>", $mailtext, $headers);
		$nom = $prenom = $email = $tel = $comment = " ";
	}
}

function isEmail($var){

	return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function isPhone($var){
	return preg_match("/^[0-9 ]*$/", $var);

}

function verifyInput($var){
	$var = trim($var);
	$var = stripslashes($var);
	$var = htmlspecialchars($var);
	return ($var);
}


?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Ecoutez vos livres partout</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width initial-scale=1.0"/>
	<link rel="stylesheet" href="css/index.css"/>
	<script src="js/jquery-3.6.0.js"></script>
	<link href="https://fonts.googleapis.com/css2? family=Montserrat:wght@100;200&display=swap" >
	<link href="https://fonts.googleapis.com/css2? family=Poppins:wght@200;400;500&display=swap">
    <script>
        $(document).ready(function(){
            $('#btn').on({
                click: function(){
                    $('ul').toggleClass('show'); 
                },

                mousedown: function(){
                    $(this).css('border','2px solid sandybrown');
                    $(this).css('border-radius','5px');
					$(this).css('color','sandybrown');
                },

                mouseup: function(){
                    $(this).css('border','');
					$(this).css('color','white');
                }
            });

            $('#liens').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien2').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien3').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien4').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });

            $('#lien5').on({
                click: function(){
                    $('ul').toggleClass('show');
                }
            });


        });

    </script>
</head>
<body>
	<nav>
        
		<label class="logo"><span>L</span>ivre<span>E</span>ducation</label>
		<label id="btn" for="check">☰</label>
        <ul class="menu1">
            <li id="liens"><a href="https://livre-education.com" class="active" >Accueil</a></li>
            <li id="lien2"><a href="http://apropos.livre-education.com" >A propos</a></li>
            <li id="lien3"><a href="http://livres.livre-education.com">Livres</a></li>
            <li id="lien4" ><a href="http://sinscrire.livre-education.com">S'inscrire</a></li>
            <li id="lien5"><a href="http://contact.livre-education.com">Contact</a></li>
        </ul>
        
        <label id="btnfermer">&times;</label>
    </nav>



     <section class="contenant" id="accueil">
		<h1 class="texte_centrer">Ecoutez vos livres préférés partout où vous êtes</h1>
		 <div class="home">
		 <div class="wrap">
			<img class="image1"  src="images/Livre-Audio-developpement-personnel.jpg" alt="Livres_audios" title="Ecoutez vos livres quand vous le voulez"/>
		</div>
		</div>
            	
	 </section> 
	<section class="debut" id="apropos">
		<div class="apropos" >
			<h2 >A propos de nous</h2>
		</div>
		<div>
			<p class="mo1"> LivreEducation a été créée en 2022 par Mouhtadi TOUKOUROU étudiant et web entrepreneur, avec l'envie d'amener les jeunes et tout autre personne voulant entreprendre, à s'informer à ce sujet de la manière la plus simple possible. Dans un univers où tout le monde veut entreprendre et monter un business (en ligne ou physique), comprendre ce que cache le mot <strong>entreprenariat</strong> s'avère primordial. Nombreux sont les entrepreneurs à succès qui ont partagé leurs expériences du domaine dans les livres qu'ils ont produits. Nous œuvrons ainsi à vous faire télécharger ces livres en format audio pour vous permettre de vous instruire à tout moment et partout où vous le voulez.</p>
		</div>
	</section>
	<section class="menu" id="livres">
		<div class="titre">
			<h2 >Quelques livres</h2><br>
			<p>Parmi ces livres, on a entre autre : </p>
		</div>
		<div class="contenu">
			<div class="box">
				<div class="imbox">
					<a href="https://amzn.to/36xE77G"><img src="images/Robert KIYOZAKI2.png" alt="Robert KIYOZAKI"/></a>
				</div>
				<div class="text">
					<p>C'est un livre qui vous enseignera les bases de l'éducation financière. <strong>Robert KIYOZAKI</strong> y a détaillé tout ce que vous devez savoir à propos de l'argent. Ce livre vous fera comprendre dans quel système vous vivez. </p>
				</div>
			</div>
			<div class="box">
				<div class="imbox">
					<img src="images/Maxime Victor2.jpg" alt="Maxime Victor"/>
				</div>
				<div class="text">
					<p>Si vous voulez savoir comment gérer votre business pour l'amener à un niveau supérieur et atteindre vos objectifs, alors ce livre est celui qu'il vous convient le mieux. <strong>Maxime Victor</strong>  y a détaillé tout ce dont vous avez besoins pour réussir en entreprenariat. </p>
				</div>
			</div>
			<div class="box">
				<div class="imbox">
					<a href="https://amzn.to/3uVuokT"><img src="images/Olivier.jpg" alt="Olivier Roland"></a>
				</div>
				<div class="text">
					<p>Dans son livre <strong>Olivier Roland</strong> explique comment le système éducatif classique endicape pleins de personnes et montre comment hacker ce système (en devenant <strong>Rebelle Intelligent</strong>) et créer une entreprise au service de votre vie.</p>
				</div>
			</div><br>
			<p class="mot">Par ailleurs, plusieurs personnes pourtant passionnées par l'entreprenariat n'arrivent pas à satisfaire cette envie de lire -de s'éduquer à travers ces livres- par manque de temps. Voilà ainsi une plateforme <strong>(audible)</strong>  qui leur permettra de satisfaire leur envie de lecture d'une manière plus simple et efficace.</p>
		</div>
	</section>

	<section class="Audible" id="inscription">
	
		<h2 class="audible">Qu'est ce qu'audible ?</h2><br>
		<p class="mo1"> Audible est une plateforme d'amazon qui permet de télécharger des livres en format audio de tout genre. Cette plateforme dispose également d'une application mobile, que vous pouvez donc télécharger sur votre smartphone, qui vous permettra d'accéder plus facilement à vos livres téléchargés.  </p>
	
	<p class="mot" > En outre, vous disposez dès votre inscription de deux semaines d'essai gratuit sur audible (qui vous donne la possibilité de télécharger un livre gratuit) sans payer un seul centime.</p>
	<p class="mot" >Vous n'avez qu'à <a  class="lienAmazon" href="https://www.amazon.fr/hz/audible/mlp?ie=UTF8&linkCode=ll2&tag=jamatouk-21&linkId=52eec23190953a0118c921e0cd3e1efe&ref_=as_li_ss_tl" target="_blank">cliquer ici</a>  pour vous inscrire gratuitement et pleinement profiter de vos livres préférés en format audio.</p>
	<p class="mot" ><strong>Nous vous souhaitons une bonne écoute!!</strong> </p></br>

	</section>
	<div class="parent" id="contact">
		<div class="barre_two"></div>
		<div class="titre2">
			<h2><span>C</span>ontact</h2>
		</div>
	
		<div  class="col-lg-10 col-lg-offset-1" >
			<form id="formulaire" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="formContent">
				<div class="premier">
					<div><label for="nom">Nom<span class="blue">*</span></label><br>
					<input type="text" name="name" id="nom" class="case" placeholder="Votre nom" value="<?php  echo $nom;  ?>"/>
					<p class="erreur"><?php echo $nomError ; ?></p>
					</div>
	
					<div class="element2"><label for="prenom">Prénom<span class="blue">*</span class="blue"></label><br>
					<input type="text" name="surname" id="prenom" class="case" placeholder="Votre prénom" value="<?php  echo $prenom;  ?>"/>
					<p class="erreur"><?php echo $prenomError ; ?></p>
					</div>
				</div>
				<div class="deuxième">
					<div><label for="email">Email<span class="blue">*</span></label><br>
					<input type="email" name="mail" id="email" class="case" placeholder="exemple@gmail.com" value="<?php  echo $email; ?>"/>
					<p class="erreur"><?php echo $emailError ; ?></p>
					</div>
	
					<div class="element2"><label for="phone">Téléphone</label><br>
					<input type="tel" name="phone" placeholder="Votre numéro" id="phone" class="case" value="<?php  echo $tel;  ?>"/>
					<p class="erreur"><?php echo $telError ; ?></p>
					</div>
				</div>
				<div class="troisième">
					<label for="texte">Message<span class="blue">*</span></label><br>
					<textarea name="commentaire" id="texte" placeholder="Message" class="case2" rows="5"><?php  echo $comment; ?></textarea>
					<p class="erreur"><?php echo $commentError ; ?></p>
				</div><br>
				<p class="blue1">*Ces informations sont requises.</p>
				<div class="soumettre">
					<input type="submit" value="Envoyer" class="envoyer" />
				</div><br>
				
				<p class="thankyou" style="display: <?php if($isSuccess) echo 'block' ; else echo 'none' ;  ?>">Merci pour votre message, vous aurez un retour dans 24h:)</p>
				</div>
			</form>
		</div>
		</div><br><br>
		<div class="footer">
			<p><span>© Copyright</span> 2022 <span class="jama">JamaTouk,</span> tous droits réservés </p>
		</div>


</body>
</html>