<?php 

require('model/config.inc.php');


function getProjNews () {
$bdd = new PDO('mysql:host=SERVEUR;dbname=BASE; charset=utf8', USER , PASS );
$req = "SELECT * FROM projects WHERE proj_statut = 'in progress' ORDER BY proj_id DESC LIMIT 0,4"	;
$state = $bdd->query($req);
//$results = array_reverse($results);
$getProjNews = $state-> fetchAll();
return $getProjNews;
}

$news = getProjNews ();
// version texte
$txt = "N'oublie pas de passer au tabac Bart.";
// version html
$html = "	<html>
			<head>
				<style>
					h1{
						font-size : 30px;
						color:rgb(0,0,0);
					}
					p {
						color:20px;
						color:rgb(0,0,0);
					}
					samp{
						font-size : 10px;
					}
					h2 {
						font-size:26px;
						color:rgb(0,0,0);
					}
					a:link, a {
						color:rgb(0,0,0);
					}
					h4 {
						font-size:18px;
						color:rgb(0,0,0);
					}
					h3 {
						font-size:18px;
						color:rgb(0,0,0);
					}
				</style>
			</head>
			<body>

			<center>
				<a href='http://195.83.128.55/~mmid114a12/beever/controler/c_index.php'><img src=\"http://195.83.128.55/~mmid114b02/projetS3/Beever/img/logo_newsletter.png\" width=\"200\"  alt=\"\"></a>
				<h1> What's up on Beever ? </h1>
				<p>Our newsletter has the pleasure to present you the last four projects appeared on Beever : </p> <hr>
			";

foreach ($news as $news):
$html .= '<p> <h2><a href ="http://195.83.128.55/~mmid114a12/beever/controler/c_project.php?name='.$news["proj_name"] .'"> ' .$news["proj_name"] .'</a></h2></p>
			<img height="200px; "src="http://195.83.128.55/~mmid114a12/beever/projects/upload/'.$news['proj_photo'] .'">
			<h4>' .$news['proj_present'] ."</h4> <hr> <br>";
endforeach;

$html .= "
		<h3>Follow us on <a href='http://195.83.128.55/~mmid114a12/beever/controler/c_index.php'>Twitter</a> and <a href='http://195.83.128.55/~mmid114a12/beever/controler/c_index.php'> Facebook </a> </center>
			</body>
			</html>
			";

// on génère un séparateur
// il séparera les différentes versions du corps de l'email
// parmis lesquelles le logiciel de mail fera son choix
$sepAlternative = '-----='.md5(uniqid(mt_rand()));

// entete du message
$entete = "From: \"BEEVER\" <newsletter@beever.com>>\r\n";
$entete .= "Reply-to: \"BEEVER\" <newsletter@beever.com>>\r\n";
$entete .= "Organization: \"Gemini int.\"\r\n";
$entete .= "MIME-Version: 1.0\r\n";
$entete .= "X-Mailer:PHP".phpversion()."\r\n";
// dans l'entete on définit le séparateur qui sera utilisé dans le corps du message
$entete .= "Content-type: multipart/alternative; boundary=\"$sepAlternative\"\r\n";

// corps du message
// 1- on commence par un séparateur pour signifier la début des versions alternatives
// on affiche toujours deux tirets avant le séparateur
$msg = "--$sepAlternative\n";
// 2- on affiche des entêtes pour la version texte
$msg .= "Content-Type: text/plain; charset=\"UTF-8\"\n";
$msg .= "Content-Transfer-Encoding: 8bits\n\n";
// 3- on place la version texte
$msg .= $txt."\n\n";
// 4- on ajoute un séparateur pour signifier la fin d'une version alterntive et le début d'une autre
$msg .= "--$sepAlternative\n";
// 5- on affiche des entêtes pour la version HTML
$msg .= "Content-Type: text/html; charset=\"UTF-8\"\n";
$msg .= "Content-Transfer-Encoding: 8bits\n\n";
// 6- on affiche la version HTML
$msg .= $html."\n\n";
// 7- on affiche un séparateur suivi de deux tirets pour signifier la fin des versions alternatives
// Attention.
// N'oubliez pas de rajouter les deux tirets après le séparateur
// sinon vous aurez des problèmes à l'affichage
$msg .= "--$sepAlternative--\n";

$mailto  = 'ga.aubertot@gmail.com , david.annebicque@univ-reims.fr , sandrine.piat@univ-reims.fr'; 



//echo $mail;
// envoi l'email
mail($mailto , '[Newsletter] Beever : Discover the four last projects !', $msg, $entete);

header('Location: newsletter.php');
?>
