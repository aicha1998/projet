<?PHP
include "../config.php";
class CommandeC {
function afficherCommande($commande){
		echo "idCom: ".$commande->getidCom()."<br>";
		echo "nomproduit: ".$commande->getnomproduit()."<br>";
		echo "dateEmis: ".$commande->getdateEmis()."<br>";
		echo "EtatCom: ".$commande->getEtatCom()."<br>";
		echo "email: ".$commande->getemail()."<br>";
		echo "prix: ".$commande->getprix()."<br>";

	}

	function ajouterCommande($commande){
		$sql="insert into commande (idCom,nomproduit,dateEmis,EtatCom,email,prix) values (:idCom, :nomproduit,:dateEmis,:EtatCom,:email,:prix)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idCom=$commande->getidCom();
        $nomproduit=$commande->getnomproduit();
        $dateEmis=$commande->getdateEmis();
        $EtatCom=$commande->getEtatCom();
		$email=$commande->getemail();
		$prix=$commande->getprix();
		
	
		$req->bindValue(':idCom',$idCom);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':dateEmis',$dateEmis);
		$req->bindValue(':EtatCom',$EtatCom);
		$req->bindValue(':email',$email);
		$req->bindValue(':prix',$prix);
		
		
  
            $req->execute();
	
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}
        
		function supprimercommande($idCom){
		$sql="DELETE FROM commande where idCom=:idCom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCom',$idCom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifiercommande($commande,$idCom){
		$sql="UPDATE commande SET idCom=:idCom, nomproduit=:nomproduit,dateEmis=:dateEmis,EtatCom=:EtatCom,email=:email,prix=:prix WHERE idCom=:idCom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idCom=$commande->getidCom();
        $nomproduit=$commande->getnomproduit();
        $dateEmis=$commande->getdatedebut();
        $EtatCom=$commande->getEtatCom();
		$email=$commande->getemail();
		$prix=$commande->getprix();
		$datas = array(':idCom'=>$idCom, ':idCom'=>$idCom, ':nomproduit'=>$nomproduit,':dateEmis'=>$dateEmis,':EtatCom'=>$EtatCom,':email'=>$email ,':prix'=>$prix);
		$req->bindValue(':idCom',$idCom);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':dateEmis',$dateEmis);
		$req->bindValue(':EtatCom',$EtatCom);
		$req->bindValue(':email',$email);
		$req->bindValue(':prix',$prix);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function afficherCommandes(){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		$sql="SElECT * From commande";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
}



	function afficherCommande1(){
		//$sql="SElECT * From Produit e inner join formationphp.Produit a on e.idproduit= a.idproduit";
		$sql="SElECT * From commande where idCom='1'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }	


function supprimercommande($idCom){
		$sql="DELETE FROM commande where idCom=:idCom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idCom',$idCom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

	function recuperercommande($idCom){
		$sql="SELECT * from commande where idCom=$idCom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function modifiercommande($commande,$idCom){
		$sql="UPDATE commande SET idCom=:idCom, nomproduit=:nomproduit,dateEmis=:dateEmis,EtatCom=:EtatCom,email=:email,prix=:prix WHERE idCom=:idCom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$idCom=$commande->getidCom();
        $nomproduit=$commande->getnomproduit();
        $dateEmis=$commande->getdatedebut();
        $EtatCom=$commande->getEtatCom();
		$email=$commande->getemail();
		$prix=$commande->getprix();
		$datas = array(':idCom'=>$idCom, ':idCom'=>$idCom, ':nomproduit'=>$nomproduit,':dateEmis'=>$dateEmis,':EtatCom'=>$EtatCom,':email'=>$email ,':prix'=>$prix);
		$req->bindValue(':idCom',$idCom);
		$req->bindValue(':idcomm',$idcomm);
		$req->bindValue(':nomproduit',$nomproduit);
		$req->bindValue(':dateEmis',$dateEmis);
		$req->bindValue(':EtatCom',$EtatCom);
		$req->bindValue(':email',$email);
		$req->bindValue(':prix',$prix);
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}


?>