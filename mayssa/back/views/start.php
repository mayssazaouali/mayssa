<?PHP
include "../entities/livreur.php";
include "../core/livreurL.php";
$livreur=new livreur(75757575,'BEN Ahmed','Salah',50,20);
$livreurL=new LivreurL();
$livreurL->afficherLivreur($livreur);
echo "****************";
echo "<br>";
echo "cin:".$employe->getCin();
echo "<br>";
echo "nom:".$employe->getNom();
echo "<br>";
echo "prenom:".$employe->getPrenom();
echo "<br>";
echo "Num:".$employe->getNum();
echo "<br>";
echo "Mail:".$employe->getMail();
echo "<br>";
echo "nbH:".$employe->getNbHeures();
echo "<br>";
echo "tarif:".$employe->getTarifHoraire();
echo "<br>";
echo "le salaire est : ";
$livreur->calculerSalaire($livreur); 
echo "<br>";


?>