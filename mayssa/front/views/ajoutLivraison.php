<?PHP
include "../entities/livraison.php";
include "../core/livraisonL.php";


if (isset($_POST['ref']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['numtel']) and isset($_POST['ville'])  and isset($_POST['adresse']) and isset($_POST['codepostal'])  and isset($_POST['livreur'])){
$livraison1=new livraison($_POST['ref'],$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['numtel'],$_POST['ville'],$_POST['adresse'],
	$_POST['codepostal'],$_POST['livreur']);

//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$livraison1L=new LivraisonL();
$livraison1L->ajouterLivraison($livraison1);
header('Location: checkout.php');
  
}else{
	echo "vérifier les champs";
}
//*/

?>