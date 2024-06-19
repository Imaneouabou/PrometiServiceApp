<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="template/custom/images/shortcut.png">

    <title> Software Solution</title>
    
    <!-- animate.css-->  
    <link href="template/vendor/animate.css-master/animate.min.css" rel="stylesheet">
    <!-- Load Screen -->
    <link href="template/vendor/loadscreen/css/spinkit.css" rel="stylesheet">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- Font Awesome 5 -->
    <link href="template/vendor/fontawesome/css/fontawesome-all.min.css" rel="stylesheet">
    <!-- Fables Icons -->
    <link href="template/custom/css/fables-icons.css" rel="stylesheet"> 
    <!-- Bootstrap CSS --> 
    <link href="template/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="template/vendor/bootstrap/css/bootstrap-4-navbar.css" rel="stylesheet">
    <!-- portfolio filter gallery -->
    <link href="template/vendor/portfolio-filter-gallery/portfolio-filter-gallery.css" rel="stylesheet">
    <!-- FANCY BOX -->
    <link href="template/vendor/fancybox-master/jquery.fancybox.min.css" rel="stylesheet"> 
    <!-- RANGE SLIDER -->
    <link href="template/vendor/range-slider/range-slider.css" rel="stylesheet">
    <!-- OWL CAROUSEL  --> 
    <link href="template/vendor/owlcarousel/owl.carousel.min.css" rel="stylesheet">
    <link href="template/vendor/owlcarousel/owl.theme.default.min.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS FILE -->
    <link href="template/custom/css/custom.css" rel="stylesheet">
    <!-- FABLES CUSTOM CSS RESPONSIVE FILE -->
    <link href="template/custom/css/custom-responsive.css" rel="stylesheet">
     
     
</head>


<body>

  
<!-- Loading Screen -->
    <div id="ju-loading-screen">
      <div class="sk-double-bounce">
        <div class="sk-child sk-double-bounce1"></div>
        <div class="sk-child sk-double-bounce2"></div>
      </div>
    </div>


<!-- Start Fables Navigation -->

<div class="fables-transparent py-3 py-lg-0">
    <div class="container">
           <div class="row">
               <div class="col-12 col-md-10 pr-md-0">                       
                   <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
<!-- logo prometi-->
                        <a class="navbar-brand fables-logo-brand pl-0" href="index.html" ><img src="prometimage\logonew1.png" alt="Fables Template" class="fables-logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fables-iconmenu-icon text-white font-16"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="fablesNavDropdown"> 

                            <ul class="navbar-nav mx-auto fables-nav">   
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Acceuil
                                     </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item" href="{{route('acceuilsite')}}">acceuil</a></li>
                                         
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Corporate
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item" href="{{route('apropos')}}">A propos</a></li>
                                        <li><a class="dropdown-item" href="{{route('motprés')}}">Mot du président</a></li>
                                        <li><a class="dropdown-item" href="{{route('orga')}}">Organigramme</a></li> 
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Projets
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav3">
                                        <li><a class="dropdown-item" href="{{route('projetsencours')}}">Projets en cours</a></li>
                                        <li><a class="dropdown-item" href="{{route('projetsréalisés')}}">Nos réalisations</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Carrière
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav3">
                                        <li><a class="dropdown-item" href="{{route('recrut')}}">Recrutement</a></li>
                                    </ul>
                                  </li>

                                  <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Clients
                                     </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item" href="{{route('clientsite')}}">Clients</a></li>
                                         
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="white-space: nowrap;">AUTODESK departement</a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav4">
                                        <li><a class="dropdown-item" href="{{route('atc')}}">Authorized Training Center</a></li> 
                                        <li><a class="dropdown-item" href="{{route('softsolution')}}">Software Solutions</a></li> 
                                    </ul>
                                </li>
                                
                               <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Actualités
                                     </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item" href="{{route('actualitésite')}}">Actualités</a></li>
                                         
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       Contact
                                     </a>
                                    <ul class="dropdown-menu" aria-labelledby="sub-nav2">

                                        <li><a class="dropdown-item" href="{{route('contact')}}">Contact</a></li>
                                         
                                    </ul>
                                </li>
                            </ul> 

                </div>
            </nav>
               </div>
               
           </div>
    </div>
</div>
<!-- /End Fables Navigation -->


<!-- Start Header -->
<div class="fables-header fables-after-overlay bg-rules">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s"><img src="prometimage/image8.jpg" alt=""></h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-gary-background">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 

<div class="container"> 
    <div class="row mt-4 my-md-5 overflow-hidden">
        <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".3s">
            <div class="border p-4">
                <div class="row text-center text-lg-left">
                    <div class="col-12 col-lg-3 mb-3 mb-md-0">
                        <span class="fables-iconlamp-icon fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-lg-9">
                        <h2 class="fables-second-text-color font-20 semi-font my-2 mb-lg-3 about-block-heading">Solutions pour tous vos problèmes</h2>
                        <div class="font-15 fables-forth-text-color">
                            Votre entreprise se trouve-t-elle face à une infrastructure technologique de plus en plus complexe, que votre service informatique peine à gérer ?
                            N'hésitez pas à faire appel à nous ! Nous sommes là pour vous aider !
                        </div>

                    </div>
                </div>
            </div>
        </div>
            
</div> 
           
    




    <div class="row overflow-hidden"> 
            <div class="col-12 col-md-6">
                 <div class="image-container translate-effect-right">
                    <img src="prometimage/image9.jpg" alt="Fables Template" class="img-fluid">
                 </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <span class="fables-iconrocket-icon fables-second-text-color fa-3x"></span>
                <h2 class="font-30 font-weight-bold fables-second-text-color my-4 d-inline-block d-lg-block wow fadeInRight" data-wow-duration="1.5s">Notre Mission</h2> 
                <div class="fables-vision-detail fables-forth-text-color wow fadeInRight" data-wow-duration="1.5s">
                    Depuis plus de 25 ans, les revendeurs AUTODESK s'efforcent de fournir les solutions, logiciels et services appropriés pour répondre aux besoins des entreprises. <br><br>
                    Nous sommes heureux d'être un Revendeur à Valeur Ajoutée (VAR) d'AUTODESK.
                </div>
            </div>
      </div>   
    </div>
   



    <div class="fables-testimonial fables-after-overlay my-4 my-md-5 py-4 py-md-5 bg-rules">
        <div class="container">
            <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4"></h2> 
        </div>
    </div>
    
    <div class="container"> 
       <div class="row overflow-hidden">
            <div class="col-12 col-md-6">
                <span class="fables-iconvision-icon fables-second-text-color fa-4x"></span>
                <h2 class="font-30 font-weight-bold fables-second-text-color my-4 wow fadeInLeft d-inline d-lg-block" data-wow-duration="1.5s">Notre Vision</h2>
                <div class="fables-forth-text-color mt-4 wow fadeInLeft" data-wow-duration="1.5s">
                    Achetez des produits AUTODESK officiels, dont AutoCAD, Revit, BIM 360, 3ds Max et bien d'autres.
                    Découvrez comment votre entreprise de conception et de construction peut améliorer ses performances, sa créativité et sa rentabilité grâce à la modélisation des informations du bâtiment (BIM), des outils de collaboration et diverses solutions technologiques innovantes.
                </div>
            </div>
            <div class="col-12 col-md-6 mt-4 mt-md-0">
                <div class="image-container translate-effect-right">
                     <img src="prometimage/image10.jpg" alt="Fables Template" class="img-fluid">
                </div>
               
            </div>
      </div> 
    </div>



    
<div class="fables-testimonial fables-after-overlay my-4 my-md-5 py-4 py-md-5 bg-rules">
    <div class="container">
        <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4"></h2> 
    </div>
</div>





<div class="row overflow-hidden" style="height: 500px"> 
    <div class="col-12 col-md-6">
         <div class="image-container translate-effect-right" style="margin-left:30px; margin-bottom:30px;">
            <img src="prometimage/image11.png" alt="Fables Template" class="img-fluid">
         </div>
    </div>
    <div class="col-12 col-md-6 mt-4 mt-md-0">
        <span class="fables-iconrocket-icon fables-second-text-color fa-3x"></span>
        <h2 class="font-30 font-weight-bold fables-second-text-color my-4 d-inline-block d-lg-block wow fadeInRight" data-wow-duration="1.5s">Nos Traces</h2> <br>
        <div class="fables-vision-detail fables-forth-text-color wow fadeInRight" data-wow-duration="1.5s">
            Nous offrons nos services et avons réalisé des projets dans les régions avoisinant Casablanca, Rabat, Marrakech, Tanger, ainsi que dans tout le territoire du Maroc.
        </div>
    </div>
</div>   


<!-- /End page content -->
    
<!-- Start Footer 2 Background Image  -->
<div class="fables-footer-image fables-after-overlay white-color py-4 py-lg-5 bg-rules">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mb-5 text-center">
                <h2 class="font-30 semi-font mb-5"></h2>
                
                
            </div>
            <div class="col-12 col-lg-4 mb-4 mb-lg-0">
                <a href="#" class="fables-second-border-color border-bottom pb-3 d-block mb-3 mt-minus-13"><img src="prometimage\logonew1.png" alt="fables template"></a> <br>
                <p class="font-15 fables-third-text-color"> 
                    La Créativité est la puissante opportunité de concevoir, 
                    d'innover et de partager nos valeurs avec le monde.
                </p> 
                
            </div>
             
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3">Contactez-nous</h2>
               <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconmap-icon fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span>Addresse</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">Green Works Center,
                        Building #D, 5th Floor, D17 & D19,
                        Sidi Maarouf, Casablanca</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconphone fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Appellez maintenant</h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">+212 522 47 10 66</p>
                </div>
                <div class="my-3">
                    <h4 class="font-16 semi-font"><span class="fables-iconemail fables-second-text-color pr-2 font-20 mt-1 d-inline-block"></span> Mail </h4>
                    <p class="font-14 fables-fifth-text-color mt-2 ml-4">contact@prometi.ma</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <h2 class="font-20 semi-font fables-second-border-color border-bottom pb-3 mb-3">Découvrez notre site</h2>
                <ul class="nav fables-footer-links">
                   <li><a href="{{route('acceuilsite')}}">Acceuil</a></li>
                    <li><a href="{{route('apropos')}}">Corporate</a></li>
                    <li><a href="{{route('projetsréalisés')}}">Projets</a></li>
                    <li><a href="{{route('atc')}}">AUTODESK Departement</a></li>
                    <li><a href="{{route('actualitésite')}}">Actualités</a></li>
                    <li><a href="{{route('contact')}}">Contact</a></li>
                </ul>
            </div>
                      
           </div> 
        
        </div>

</div>

<div class="copyright fables-main-background-color mt-0 border-0 white-color">
        <ul class="nav fables-footer-social-links just-center fables-light-footer-links">
            <li><a href="#" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
        <p class="mb-0">Copyright © Prometi 2023.  Tous droits réservés.</p> 

</div>
</div>
    
<!-- /End Footer 2 Background Image -->


<script src="template/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="template/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="template/vendor/jquery-circle-progress/circle-progress.min.js"></script>
<script src="template/vendor/popper/popper.min.js"></script>
<script src="template/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="template/vendor/timeline/jquery.timelify.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="template/vendor/WOW-master/dist/wow.min.js"></script>
<script src="template/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="template/custom/js/jquery-data-to.js"></script>   
<script src="template/vendor/jquery-circle-progress/circle.js"></script>
<script src="template/custom/js/custom.js"></script>
     
    
</body>
</html>