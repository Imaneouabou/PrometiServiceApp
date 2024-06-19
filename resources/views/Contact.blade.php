
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="template/custom/images/shortcut.png">

    <title>Contact</title>
    
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
<div class="fables-header fables-after-overlay">
    <div class="container"> 
         <h2 class="fables-page-title fables-second-border-color">Contact </h2>
    </div>
</div>  
<!-- /End Header -->
     
<!-- Start Breadcrumbs -->
<div class="fables-light-background-color">
    <div class="container"> 
        <nav aria-label="breadcrumb">
          <ol class="fables-breadcrumb breadcrumb px-0 py-3">
            
          </ol>
        </nav> 
    </div>
</div>
<!-- /End Breadcrumbs -->
     
<!-- Start page content --> 
   <div class="mb-4 mb-md-5" >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.657110659728!2d-7.634972824357458!3d33.510297173365885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62dc5c73bcd6d%3A0xc9f8444f044bab81!2sPROMETI!5e0!3m2!1sen!2sma!4v1690655946119!5m2!1sen!2sma" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>

   </div>
    <div class="container"> 
        <div class="row overflow-hidden">
             <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".5s">
                  <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                        <span class="fables-iconmap-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span> 
                        <h2 class="font-16 semi-font fables-main-text-color my-3">Addresse</h2>
                        <p class="font-14 fables-forth-text-color">
                            Green Works Center,
                            Building #D, 5th Floor, D17 & D19,
                            Sidi Maarouf, Casablanca</p>        
                  </div> 
             </div>
             <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay=".8s">
                  <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                    <span class="fables-iconphone fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                    <h2 class="font-16 semi-font fables-main-text-color my-3">Mail et numéro de téléphone</h2>
                    <p class="font-14 fables-forth-text-color text-truncate">contact@prometi.ma</p>
                    <p class="font-14 fables-forth-text-color">+212 522 47 10 66</p>
                 </div> 
             </div>
             <div class="col-12 col-md-4 text-center px-4 px-lg-5 my-4 my-lg-5 wow fadeInDown" data-wow-delay="1.1s">
                 <div class="fables-second-border-color border fables-contact-block-border fables-rounded px-2">
                        <span class="fables-iconshare-icon fa-3x fables-second-text-color fables-contact-icon bg-white d-inline-block px-4"></span>
                        <h2 class="font-16 semi-font fables-main-text-color my-3">Restez en contact</h2>
                        <ul class="nav fables-contact-social-links"> 
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f fables-forth-text-color fa-fw"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram fables-forth-text-color  fa-fw"></i></a></li> 
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin fables-forth-text-color   fa-fw"></i></a></li>
                        </ul>
                 </div> 
             </div>
        </div>        
        <div class="row mt-0 mb-4 my-md-5 overflow-hidden"> 
           <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                <h3 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center" style="color:blue;">Contactez-nous</h3>
                <p class="fables-contact-text fables-forth-text-color text-center">Envie de nous contacter ? Nous serions ravis d'avoir de vos nouvelles. Voici comment vous pouvez nous joindre...</p>
           </div>  
                  
        </div>    
        <div class="row">
            <div class="col-12 wow fadeInLeft">
                <form class="fables-contact-form">
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 fables-rounded"  placeholder="Prénom">   
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 fables-rounded"  placeholder="Nom">  
                      </div> 
                  </div>
                  <div class="form-row">
                      <div class="form-group col-md-6">
                          <input type="email" class="form-control p-3 fables-rounded" placeholder="Email"> 
                      </div>
                      <div class="form-group col-md-6">
                          <input type="text" class="form-control p-3 fables-rounded" placeholder="Sujet"> 
                      </div> 
                  </div> 
                  <div class="form-row"> 
                       <div class="form-group col-md-12">
                           <textarea class="form-control p-3 fables-rounded" placeholder="Message" rows="4"></textarea>
                      </div> 
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn fables-second-background-color 
                         text-white fables-btn-rounded px-7 py-2 font-20">Envoyer</button>
                    </div>
                  </div>
                </form>
                
                   
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
        <p class="mb-0">Copyright © Prometi 2023.Tous droits réservés.</p> 

</div>
</div>
    
<!-- /End Footer 2 Background Image -->


<script src="template/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="template/vendor/timeline/jquery.timelify.js"></script>
<script src="template/vendor/loadscreen/js/ju-loading-screen.js"></script>
<script src="template/vendor/popper/popper.min.js"></script>
<script src="template/vendor/WOW-master/dist/wow.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="template/vendor/jQuery.countdown-master/jquery.countdown.min.js"></script>
<script src="template/vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="template/custom/js/custom.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyApW03tvAPTXWd1RHJBF2Up3iJMVu1wHi4&callback=JaMap"></script>
   
    
</body>
</html>