<?php 
include "../entities/commande.php";
include  "../core/commandeC.php";
$idCom=$_POST['idCom'];
$nomproduit=$_POST['nomproduit'];

$dateEmis=$_POST['dateEmis'];

$EtatCom=$_POST['EtatCom'];

$email=$_POST['email'];
$prix=$_POST['prix'];
if (isset($_POST['modifier']) and isset($_POST['idCom']) and isset($_POST['nomproduit']) and isset($_POST['dateEmis']) and isset($_POST['EtatCom']) and  isset($_POST['email']) and  isset($_POST['prix'])){
$commandeC1=new commandeC();
$commande= new commande($_POST['idCom'],$_POST['nomproduit'],$_POST['dateEmis'],$_POST['EtatCom'],$_POST['email'],$_POST['prix']);
$commandeC1->modifiercommande($commande,$_POST['idCom']);
header('Location:Gcommandephp');





