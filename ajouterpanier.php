<?PHP
include "../entities/panier.php";
include "../core/panierC.php";

if (isset($_POST['idproduit']) and isset($_POST['nomproduit']) and isset($_POST['qt']) ){
$Panier1=new panier($_POST['idproduit'],$_POST['nomproduit'],$_POST['qt']);
//Partie2
/*
var_dump($Produit1);
}
*/
//Partie3
$Panier1C=new PanierC();
$Panier1C->ajouterPanier($Panier1);
header('Location: Gpanier.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>