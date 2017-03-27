<?php
$result=null;
if(isset($_POST['nomprenoms'])  AND !empty ($_POST['email']) AND !empty ($_POST['message'])){
	extract($_POST); 
	$nomprenoms=nl2br(stripslashes($nomprenoms));
	$email=nl2br(stripslashes($email));
	$message=nl2br(stripslashes($message));
	
	$destinataire="faysalgluma@gmail.com";
	$sujet="Formulaire de contact depuis faysalsanda.herokuapp.com";
	$entete='De : '.$email.'';
	$message='Nom : '.$nomprenoms.' '."\n".$email.' '."\n"."\n".'Message : '.$message;
	
	
	mail($destinataire, $sujet, $message, $entete);
	
	$result="Votre émail a été envoyé avec succès.";
	
	unset($_POST, $nomprenoms, $email, $message);
	//header('location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Faysal SANDA">

    <title>FAYSAL SANDA</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  	

  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Accueil</a></li>
			<li> <a href="#greywrap" class="smoothScroll"> A propos de moi</a></li>
			<li> <a href="#about" class="smoothScroll"> Mes compétences</a></li>
			<li> <a href="#portfolio" class="smoothScroll"> Portfolio</a></li>
			<li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

  
		
		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider" id="home" style="background-color: #327684; padding-bottom: 50px;">
			<div class="container">
				<h1 style="padding: 10px;">ANALYSTE PROGRAMMEUR</h1>
				<hr>
				<p>Salut, Je suis SANDA Faysal, Consultant en informatique, Analyste programmeur Développeur web et android, Technicien Réseaux informatiques et maintenance.</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="container">
			<br>
				<div class="row">
					<div class="col-lg-3 centered">
						<img class="img-responsive" src="assets/img/FAYSAL_TOF.jpg" align="">
					</div>
					<div class="col-lg-9" >
						<h2 style="margin: 0px;">A propos de moi</h2>
						<p>Analyste programmeur, Technicien Réseaux informatiques et maintenance et Consultant en informatique avec plus de 3 ans d'expérience. J’ai parcouru un peu pas mal d’entreprise à savoir : 
						-CNHU ou j’ai notamment travailler  aux services Réseaux informatiques et maintenance
						-TEKXL ou j’ai fait une période brève de 1 mois
						-STRATEX ou j’ai été Consultant sur Excel avancé et Conception d’applications Excel VBA
						-et actuellement Développeur Web/Android à INOVACT SARL.
						Tout ceci m’a permis d’avoir pas mal d’expérience dans le domaine des TIC et donc de développer quelques applications et site web que j'ai développé à des entreprises et des particuliers et que je vous laisse découvrir dans mon portfolio.
						</p>
					</div>	
				

				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->


		<!-- ==== ABOUT ==== -->

		<div class="container" id="about" name="about" style="margin-bottom: 15px;">
			<div class="row white">
				<h1 class="centered">MES COMPETENCES</h1>
				<hr>
				
				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">Langages de programmation</h4>
                     <div class="price-tax">Java, Java EE, PHP, Visual Basic</div>
                </div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					<h4 class="price">Front-End</h4>
                    <div class="price-tax">HTML5-CSS3, XML, BootStrap, SASS</div>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">Base de donnée</h4>
                     <div class="price-tax">MYSQL, JPQL, SQLITE, ACCESS</div>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">JS</h4>
                     <div class="price-tax">Javascript, JQuery</div>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">FrameWorks</h4>
                     <div class="price-tax">CodeIgniter, Annotation JPA</div>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">CMS</h4>
                     <div class="price-tax">Wordpress, SPIP</div>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">Versionnage</h4>
                     <div class="price-tax">GIT, SVN</div>
				</div>
				</div>

				<div class="col-lg-4">
				<div class="product_price">
					 <h4 class="price">Outils Gestion de projets</h4>
                     <div class="price-tax">Trello</div>
				</div>
				</div>


			</div><!-- row -->
		</div><!-- container -->
		
	  

		<!-- ==== PORTFOLIO ==== -->
		<div class="" id="portfolio" name="portfolio" style="background-color: #f5f5f5;">
		<br>
			<div class="row">
				<br>
				<h1 class="centered">PORTFOLIO</h1>
				<hr>
				<br>
				<br>
			</div><!-- /row -->
			<div class="container">
			<div class="row">	
			
				<!-- PORTFOLIO IMAGE 1 -->
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="assets/img/portfolio/simulex-folio.PNG" alt="">
							<figcaption>
								<h5>SIMULEX</h5>
								<a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Visualiser </a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->
				
				
						 <!-- MODAL SHOW THE PORTFOLIO IMAGE. In this demo, all links point to this modal. You should create
						      a modal for each of your projects. -->
						      
						  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						    <div class="modal-dialog">
						      <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						          <h4 class="modal-title">SIMULEX</h4>
						        </div>
						        <div class="modal-body">
						          <p><img class="img-responsive" src="assets/img/portfolio/simulex-folio.PNG" alt=""></p>
						          <p><strong>Simulex </strong>est une plateforme web qui permet de réaliser des simulations PMP et de se préparer au examen PMP en faisant des exercices en ligne et des simulations d’examen.</p>
						          <p><b><a href="http://www.simulex.inovact.com/">Visiter le site</a></b></p>
						        </div>
						        <div class="modal-footer">
						          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
						        </div>
						      </div><!-- /.modal-content -->
						    </div><!-- /.modal-dialog -->
						  </div><!-- /.modal -->

						  		<!-- PORTFOLIO IMAGE 4 -->
			
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="assets/img/portfolio/groupec-folio.PNG" alt="">
							<figcaption>
								<h5>GROUPE C</h5>
								<a data-toggle="modal" href="#myModal4" class="btn btn-primary btn-lg">Visualiser</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->

				 <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title">GROUPE C</h4>
				        </div>
				        <div class="modal-body">
				          <p><img class="img-responsive" src="assets/img/portfolio/groupec-folio.PNG" alt=""></p>
				          <p><strong>GROUPE C </strong>est une entreprise informatique qui œuvre dans le domaine des TIC, qui aide les jeunes à maitriser les technologies du web à travers ces formations et diverses prestations et créer des applications innovantes afin apporter des solutions numériques adaptées aux besoins des utilisateurs. </p>
				          <p><b><a href="http://www.groupec.net/">Visiter le site</a></b></p>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div><!-- /.modal -->
				

						<!-- PORTFOLIO IMAGE 4 -->
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="assets/img/portfolio/gestion-depot-folio.PNG" alt="">
							<figcaption>
								<h5>GESDEPOT</h5>
								<a data-toggle="modal" href="#myModal6" class="btn btn-primary btn-lg">Visualiser</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->

				 <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title">GESDEPOT</h4>
				        </div>
				        <div class="modal-body">
				          <p><img class="img-responsive" src="assets/img/portfolio/gestion-depot-folio.PNG" alt=""></p>
				          <p><strong>GESDEPOT</strong> est un logiciel de gestion développé en Java qui permet de gérer les opérations d’une cimenterie avec des critères spécifiques demandées par le client.. </p>
				         
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div><!-- /.modal -->
				
						
			</div><!-- /row -->

			<div class="row">
					<!-- PORTFOLIO IMAGE 2 -->
				<div class="col-md-4">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="assets/img/portfolio/cnss-folio.PNG" alt="">
							<figcaption>
								<h5>CNSS</h5>
								<a data-toggle="modal" href="#myModal2" class="btn btn-primary btn-lg">Visualiser</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->

				  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title">CNSS</h4>
				        </div>
				        <div class="modal-body">
				          <p><img class="img-responsive" src="assets/img/portfolio/cnss-folio.PNG" alt=""></p>
				          <p>Projet de conception de site internet, intranet et extranet à la CNSS du Togo qui permet aux clients de suivre les différentes actualités de la CNSS et d'effectuer leurs différentes opérations en ligne.</p>
				          <p><b><a href="http://www.cnsstogo.tg/">Visiter le site</a></b></p>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div><!-- /.modal -->
				
				<!-- PORTFOLIO IMAGE 3 -->
				<div class="col-md-4">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="assets/img/portfolio/segim-folio.PNG" alt="">
							<figcaption>
								<h5>SEGIM</h5>
								<a data-toggle="modal" href="#myModal3" class="btn btn-primary btn-lg">Visualiser</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->
			
			 <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title">SEGIM</h4>
				        </div>
				        <div class="modal-body">
				          <p><img class="img-responsive" src="assets/img/portfolio/segim-folio2.PNG" alt=""></p>
				          <p>Site web réalisé à la SEGIM-SA du Togo lui permettant de promouvoir ses parcelles et pavillons en ligne.</p>
				          <p><b><a href="http://www.segimtogo.tg">Visiter le site</a></b></p>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div><!-- /.modal -->
				

				<!-- PORTFOLIO IMAGE 4 -->
				<div class="col-md-4 ">
			    	<div class="grid mask">
						<figure>
							<img class="img-responsive" src="assets/img/portfolio/access-project-portfolio.PNG" alt="">
							<figcaption>
								<h5>ACCESS PROJECT</h5>
								<a data-toggle="modal" href="#myModal7" class="btn btn-primary btn-lg">Visualiser</a>
							</figcaption><!-- /figcaption -->
						</figure><!-- /figure -->
			    	</div><!-- /grid-mask -->
				</div><!-- /col -->

				 <div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				    <div class="modal-dialog">
				      <div class="modal-content">
				        <div class="modal-header">
				          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				          <h4 class="modal-title">ACCESS PROJECT</h4>
				        </div>
				        <div class="modal-body">
				          <p><img class="img-responsive" src="assets/img/portfolio/access-project-portfolio.PNG" alt=""></p>
				          <p><strong>ACCESS PROJECT</strong> est une application web développée à la société IBT SARL dans le cadre d’un projet de collecte d’information dans divers communes du Bénin. </p>
				        </div>
				        <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
				        </div>
				      </div><!-- /.modal-content -->
				    </div><!-- /.modal-dialog -->
				  </div><!-- /.modal -->
				
			</div>





			<br>
			<br>
		</div><!-- /row -->
	</div><!-- /container -->

		<!-- ==== SECTION DIVIDER4 ==== 
		<section class="section-divider textdivider divider4">
			<div class="container">
				<h1>DESIGN CREATES EMOTIONAL CONNECTION</h1>
				<hr>
				<p>There’s more to design than meets the eye. It’s when it meets the heart that design creates a meaningful, lasting connection with the audience.</p>
			</div>
			</section>--><!-- section -->
		
	<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h1 class="centered">CONTACTEZ-MOI</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3>Informations de contact</h3>
					<p><span class="icon icon-home"></span> Cotonou, Zogbo<br/>
						<span class="icon icon-phone"></span> +229 67590465 <br/>
						<span class="icon icon-facebook"></span> <a href="#">Faysal SANDA </a> <br/>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-8">
					<h3>Formulaire de contact</h3>
					<p>
						<form class="form-horizontal" role="form" method="post" action="index.php">
						  <div class="form-group">
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-12">
						      <input type="text" class="form-control" name="nomprenoms" id="text1" placeholder="Nom et prénoms" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-12">
						      <input type="email"  class="form-control" name="email" id="text2" placeholder="Email" required>
						    </div>
						  </div>
						   <div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-12">
						      <textarea class="form-control" name="message" id="text3" placeholder="Message" required></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-lg-10">
						      <button type="submit" class="btn btn-success">Envoyer</button>
						    </div>
						  </div>
					   </form><!-- form -->
					</p>
				</div><!-- col -->
				
				

			</div><!-- row -->
		
		</div><!-- container -->


		<div id="footerwrap" style="padding: 18px;">
			<div class="container">
				<h4>Réalisé par  <strong>Faysal SANDA</strong> - Copyright 2017</h4>
			</div>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>

	<!-- Regler probleme lorsqu'on clique dur Accueil -->
	<script type="text/javascript">
		// Controller scroll sur click des menus
		$('.smoothScroll').click(function(){
			var a=$(this).attr('href');
			if(a=="#home")
			{
				$('#home').find('h1').attr('style', 'padding: 20px;');
			}
			else
			{
				$('#home').find('h1').attr('style', 'padding: 10px;');
			}
			
		});

		// Message apres envoi formulaire de contact
		var result="<?php if(isset($result)){echo $result;} ?>";
		if(result!="")
		{
			alert('Merci de m’avoir contacté, je vous répondrai dès que possible.');
			// Changer l'url du navigateur
            window.history.pushState(document.title,document.title,"index.php");
		}

	</script>

  </body>
</html>
