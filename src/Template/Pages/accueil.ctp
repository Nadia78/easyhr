<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$this->layout = false;
$cakeDescription = 'CakePHP: the rapid development php framework';
?>

<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
       Accueil
    </title>

    // <?= $this->Html->meta('icon') ?>

    <!-- chargement des css -->
    <?= $this->Html->css('bootstrap.min') ?>
    <?= $this->Html->css('grayscale') ?>
    <?= $this->Html->css('font-awesome.min') ?>
    <?= $this->Html->css('main') ?>
    <?= $this->Html->css(array('bordered-pulled','fixed-width','icons','larger','list','mixings','path','rotated-flipped','spinning','stacked','variable')) ?>

    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">


</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Easy</span> HR
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">

                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">Accueil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#apropos">A propos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#actualites">Actualités</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div  id="about" class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Easy HR</h1>
                        <p class="intro-text">Simplifier les ressources humaines ! </p>


                        <button type="button" id="btnEntrepriseId" class="btn btn-primary btn-lg btn-block" >Vous êtes une entreprise partenaire</button>


                        <div id="form1" class="form-padding">
                            <form  method="post"  action="#" >
                                <div class="form-group">
                                    <input type="email" class="form-control" name="" placeholder=" rh@entreprise.com" >
                                    <button  type="submit"  class="btn btn-primary  padding" name="action" value="send" >Envoyer</button>
                                </div>
                            </form>
                        </div >

                        <button type="button" id="btnSalarieId" class="btn btn-success btn-lg btn-block" >Vous êtes salarié d'une entreprise partenaire</button>

                        <div  id="form2" class="form-padding">
                            <form method="post"  action="#">
                                <div class="form-group ">
                                    <input type="email" class="form-control " name="" placeholder="salarie@entreprise.com" >
                                    <button type="submit"  class="btn btn-primary padding" name="action" value="send" >Envoyer</button>
                                </div>
                            </form>
                        </div>


                        <a href="#apropos" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="apropos" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2 class="tailleText">A propos de EASYHR</h2>
                <p class="tailleText">
                    Easy HR est une start-up spécialisée dans l'externalisation de la gestion sociale des entreprises et du conseils en entreprise.
                </p>
                <ul id="liste">
                        <li>information des tâches administratives</li>
                        <li>mise en relation en temps réel à nos partenaires de travail temporaire suite à une absence de vos salariés</li>
                        <li>conseil et audit aux entreprises </li>

                </ul>
                </p>
            </div>
        </div>
    </section>

    <!-- Download Section -->
    <section id="actualites" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download Grayscale</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact</h2>
                <form id="tailleContact">
                 <div class="form-group">      
                    <label for="entrepriseId" id="">Entreprise</label>
                    <input type="text" id="entrepriseId" name="" class="form-control">
                </div>
                <div class="form-group">
                <label for=" " id="">Prénom</label>
                <input type="text" id="" name="" class="form-control"></div>
                <div class="form-group">
                <label for=" " id="">Nom</label>
                <input type="text" id="" name="" class="form-control"></div>
                <div class="form-group">
                <label for=" " id="">Adresse de l'entreprise</label>
                <input type="text" id="" name="" class="form-control"></div>
                <div class="form-group">
                <label for=" " id="">Statut dans l'entreprise</label>
                <input type="text" id="" name="" class="form-control"></div>
                <div class="form-group">
                <label for=" " id="">Téléphone</label>
                <input type="text" id="" name="" class="form-control"></div>
                <div class="form-group">
                <label for=" " id="">Email</label>
                <input type="text" id="" name="" class="form-control"></div>
                <div class="form-group">
                <label for=" " id="">Message</label>
                <input type="textarea" id="" name="" class="form-control"></div>
                </form>
                <p><a href="mailto:contact@easyhr.com">contact@easyhr.com</a>
                </p>





                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Your Website 2014</p>
        </div>
        <!-- chargement des scripts -->
        <?= $this->Html->script('bootstrap'); ?>
        <?= $this->Html->script('bootstrap.min'); ?>
        <?= $this->Html->script('grayscale'); ?>
        <?= $this->Html->script('jquery.easing.min');  ?>
        <?= $this->Html->script('jquery-2.1.4.min'); ?>
        <?= $this->Html->script('main'); ?>
     
    </footer>
</html>
