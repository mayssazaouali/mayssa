<?PHP
include "../entities/livraison.php";
include "../core/livraisonL.php";
$livraison=new livraison(75757575,'BEN Ahmed','Salah',50,20);
$livraisonL=new livraisonL();
$livraisonL->afficherLivraison($livraison);
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



?>