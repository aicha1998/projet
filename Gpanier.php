<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Gretong a Ecommerce Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gretong Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!-- header_top -->
<div class="top_bg">
	<div class="container">
		<div class="header_top">
			<div class="top_right">
				<ul>
					<li><a href="#">Aide</a></li>|
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="top_left">
				<h2><span></span> 54 168 811</h2>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- header -->
<div class="header_bg">
<div class="container">
	<div class="header">
	<div class="head-t">
		<div  style="float: left; margin-right: 100px;  width: 15px;">
			<a href="index.html"><img src="images/wapi_final.png"alt=""/> </a>
		</div>
        
        
		<!-- start header_right -->
		<div class="header_right">
			<div class="rgt-bottom">
				<div class="log">
					<div class="login" >
						<div  id="loginContainer" style="margin-top: 20px;"><a href="#" id="loginButton" ><span style="margin-top: 20px;">login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Adresse Email</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Mot de Passe</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Se souvenir de moi </i></label>
						            	</fieldset>
						            <span><a href="#"> Mot de pase oublié</a></span>
								</form>
							</div>
						</div>
					</div>
				</div>
				
			<div class="cart box_1">
				<a href="checkout.html">
					<h3> <span class="simpleCart_total">0.00 DT</span> (<span id="simpleCart_quantity" class="simpleCart_quantity">0</span> article(s))<a href="file:///C:/Users/Asus/Desktop/web_version1.0/panier.html"><img src="images/bag.png"></h3>
				</a>	
				<p><a href="javascript:;" class="simpleCart_empty">(carte vide)</a></p>
				<div class="clearfix"> </div>
			</div>
			
			<div class="clearfix"> </div>
		</div>
		<div class="search">
		    <form>
		    	<input type="text" value="" placeholder="chercher...">
				<input type="submit" value="">
                <br> 
                <div class="create_btn" style="float: right;"> 
				<a href="checkout.html" style="margin-top: 20px;"> Verifier</a>
			</div>
			</form>
		</div>
		<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
		<!-- start header menu -->
		<ul class="megamenu skyblue" style="width: 1280px;" >
<li class="grid"><a class="color2" href="#">   Acceuil </a> </li>
			<li class="active grid"><a class="color1" href="index.html">Cuisines</a></li>
			<li class="grid"><a class="color2" href="#">Dressings</a> </li>
		<li class="active grid"><a class="color1" href="index.html">	Meuble Salle de bain </a> </li>
            
			<li class="grid"><a class="color2" href="#">  	Salon</a>
				<div class="megapanel" style="width: 500px;" "float: right";>
				
						
							<div class="h_nav">
								<ul>
									<li><a href="women.html">Séjour</a></li>
									<li><a href="women.html">Tables basses</a></li>
									<li><a href="women.html">Tables TV</a></li>
                                    <li><a href="women.html">Salle à manger</a></li> 
								</ul>	
							</div>							
					
                 
                    </div>
					<li class="active grid"><a class="color1" href="index.html"> Meuble de jardin </a> </li>
        <li class="grid"><a class="color2" href="#"> 	   Accessoires et décoration </a> </li>
   
	<li class="active grid"><a class="color8" href="index.html"> Contact </a> </li>

            
        </ul>
    </div>
    </div>
    </div>
            
            
      <?PHP
				include "../core/panierC.php";
				$panier1C=new panierC();
				$listePaniers=$panier1C->afficherpaniers();
				?>



<table class="table table-bordered table-striped mb-none"  id="myTable2" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
							<thead>
								<tr>
										<th onclick="sortTable(0)">idproduit</th>
										<th onclick="sortTable(1)">nomproduit</th>
										<th>qt</th>
										

										
										</tr>
</thead>
<?PHP
foreach($listePaniers as $row){
?>
	<tbody>
	<tr class="gradeX">

	<td ><?PHP echo $row['idproduit']; ?></td>
	<td><?PHP echo $row['nomproduit']; ?></td>
	<td><?PHP echo $row['qt']; ?></td>
	

	
<?PHP
}
?>





										</tr>
									</tbody>
								</table>
					
		
	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
            	<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

	
<div class="foot-top">
	<div class="container">
		<div class="col-md-6 s-c">
			<li>
				<div class="fooll">
					<h5>Trouvez-nous sur les réseaux sociaux</h5>
				</div>
			</li>
			<li>
				<div class="social-ic">
					<ul>
						<li><a href="#"><i class="facebok"> </i></a></li>
						<li><a href="#"><i class="twiter"> </i></a></li>
						<li><a href="#"><i class="goog"> </i></a></li>
						<li><a href="#"><i class="be"> </i></a></li>
						<li><a href="#"><i class="pp"> </i></a></li>
							<div class="clearfix"></div>	
					</ul>
				</div>
			</li>
				<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 s-c">
			<div class="stay">
						<div class="stay-left">
							<form>
								<input type="text" placeholder="Entrez votre adresse pour s'abonner aux newsletters" required="">
							</form>
						</div>
						<div class="btn-1">
							<form>
								<input type="submit" value="s'abonner">
							</form>
						</div>
							<div class="clearfix"> </div>
			</div>
		</div>
			<div class="clearfix"> </div>
	</div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 cust">
			<h4>SERVICE CLIENT</h4>
				<li><a href="#">Centre d'aide </a></li>
				<li><a href="#">FAQ</a></li>
			
				<li><a href="#">Livraison</a></li>
		</div>
		<div class="col-md-2 abt">
			<h4>A PROPOS DE NOUS </h4>
				<li><a href="#">Nos Stories</a></li>
				<li><a href="contact.html">Contact</a></li>
		</div>
		<div class="col-md-2 myac">
			<h4>MON COMPTE</h4>
				<li><a href="register.html">S'inscrire</a></li>
				<li><a href="#">Mon panier</a></li>
			
				<li><a href="buy.html">Paiement</a></li>
		</div>
		<div class="col-md-5 our-st">
			<div class="our-left">
				<h4>NOS MAGASINS</h4>
			</div>
			<div class="our-left1">
				<div class="cr_btn">
					<a href="#">SOLO</a>
				</div>
			</div>
			<div class="our-left1">
				<div class="cr_btn1">
					<a href="#">BOGOR</a>
				</div>
			</div>
			<div class="clearfix"> </div>
				<li><i class="add"> </i>Jl. Haji Muhidin, Blok G no.69</li>
				<li><i class="phone"> </i>025-2839341</li>
				<li><a href="mailto:info@example.com"><i class="mail"> </i>info@sitename.com </a></li>
			
		</div>
		<div class="clearfix"> </div>
			<p>Copyrights © 2015 Gretong. All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
	</div>
</div>
</body>
</html>