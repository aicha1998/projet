<?PHP
include "../entities/panier.php";
include "../core/panierC.php";
$panierC=new panierC();
if (isset($_POST["idproduit"])){
$panierC->supprimerpanier($_POST["idproduit"]);
header('Location: Gpanier.php');
}

?>