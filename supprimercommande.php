<?PHP
include "../entities/commande.php";
include "../core/commandeC.php";
$CommandeC=new CommandeC();
if (isset($_POST["idCom"])){
	$CommandeC->supprimercommande($_POST["idCom"]);
	header('Location: Gcommande.php');
}

?>