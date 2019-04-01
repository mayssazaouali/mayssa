<?PHP
include "../core/livraisonL.php";
$livraison1L=new LivraisonL();
$listelivraisons=$livraison1L->afficherLivraisons();

//var_dump($listeEmployes->fetchAll());
?>
<table border="1">
<tr>
<td>Reference</td>
<td>Nom</td>
<td>Prenom</td>
<td>E-Mail</td>
<td>Telephone</td>
<td>Ville</td>
<td>adresse</td>
<td>Code postal</td>
<td>Livreur</td>
<td>Supprimer</td>
<td>Modifier</td>
</tr>

<?PHP
foreach($listelivraisons as $row){
	?>
	<tr>
	<td><?PHP echo $row['ref']; ?></td>
	<td><?PHP echo $row['nom']; ?></td>
	<td><?PHP echo $row['prenom']; ?></td>
	<td><?PHP echo $row['mail']; ?></td>
	<td><?PHP echo $row['numtel']; ?></td>
	<td><?PHP echo $row['ville']; ?></td>
	<td><?PHP echo $row['adresse']; ?></td>
	<td><?PHP echo $row['codepostal']; ?></td>
	<td><?PHP echo $row['livreur']; ?></td>
	<td><form method="POST" action="supprimerLivraison.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['ref']; ?>" name="ref">
	</form>
	</td>
	
	</tr>
	<?PHP
}
?>
</table>


