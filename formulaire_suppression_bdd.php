<?php
include("fonctions.php");
connectMaBase();
?>
<html>
<head><title>Formulaire de saisie utilisateur </title>
<meta charset="UTF-8">
</head>
<body>
<h1>Inscrivez-vous !</h1>
<h2>Ajouter supprimer et modifier les donnees demandées :</h2>
<form name="inscription" method="post" action="form.php">
Entrez votre pseudo : <input type="text" name="pseudo"/> <br/>
Sexe ? <input type="radio" name="sexe" value="G"/>Garcon<input type="radio" name="sexe" value="F"/>Fille<br/>
Entrez votre age : <input type="int" name="age"/><br/>
<input type="submit" name="valider" value="Ajouter"/>
<input name="Afficher" type="submit" ID="Afficher" value="Afficher" />
</form>
<form action="form.php?ID= <?php echo $ID;?>" method="post">
<input type="submit" name="Supprimer" value="Supprimer <?php echo $ID;?>" />
</form>
<?php
if (isset ($_POST['valider'])){
//On récupère les valeurs entrées par l'utilisateur :
$pseudo=$_POST['pseudo'];
$age=$_POST['age'];
$sexe=$_POST['sexe'];
//On construit la date d'aujourd'hui
//strictement comme sql la construit
$today = date("y-m-d");
//On prépare la commande sql d'insertion
$sql = 'INSERT INTO Utilisateurs VALUES("","'.$pseudo.'","'.$sexe.'","'.$age.'","'.$today.'")';
/*on lance la commande (mysql_query) et au cas où,
on rédige un petit message d'erreur si la requête ne passe pas (or die)
(Message qui intègrera les causes d'erreur sql)*/
mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
echo '<p>Le pseudo à été ajouter avec succès. <a href=form.php>Retour au Formulaire.</a></p>';
// on ferme la connexion
mysql_close();
}
//supprimer
if (isset($_POST['Afficher']))
$sql = mysql_query("SELECT * FROM Utilisateurs" );
while($data = mysql_fetch_array($sql))
{
echo $data['ID']." ".$data['pseudo']." ".$data['sexe']." ".$data['age']." ".'<input type= "checkbox" name="case" ID="case"></a>' . "<br/>" ;
}
?>
<?php
// On place dans une variable l'id transmit dans l'url
if(isset($_POST["Supprimer"]) & isset($_GET["ID"]) ){
// on se connecte à la base de données
$sql = mysql_query("DELETE FROM Utilisateurs WHERE ID ='form.php?ID= '") or die('Requête invalide : ' . mysql_error());
//on informe que le message est supprimé
echo '<p>votre nom à été supprimé avec succès.</p>';
// Fermeture de la connexion à la base de données
mysql_close();
}
?>
</body>
</html>
