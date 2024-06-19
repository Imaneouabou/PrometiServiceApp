
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="template/custom/images/shortcut.png">

    <title>Authorized training center</title>
    
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
         <h2 class="fables-page-title fables-second-border-color"><img src="template/custom/images/atc_about.jpg" alt=""></h2>
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


<div class="container">
    <div class="row mt-4 my-md-5"> 
         <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                <div class="image-container circle-effect">
                    <a href="#"><img src="prometimage/image1.jpg" alt="" class="w-100"></a> 
                </div>
                 
                 <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
                 <div class="row my-2">
                     <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                     </div>
                 </div>
                 <p class="fables-fifth-text-color font-14">
                    Le BIM est essentiel pour l'avancement de votre carrière ! Nos cours de BIM (Modélisation des Informations du Bâtiment) sont développés en collaboration avec des consultants de premier plan de l'industrie et suivent les tendances actuelles. Nos formations offrent les informations les plus pertinentes et à jour du marché. Vous apprendrez à gérer efficacement les informations à toutes les étapes de vos projets de construction.                 </p>
                    
              
           </div>
         <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                 <div class="image-container circle-effect">
                    <a href="#"><img src="prometimage/image2.jpg" alt="" class="w-100"></a> 
                </div>
                 <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
                 <div class="row my-2">
                     <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle">  </span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                     </div>
                 </div>
                 <p class="fables-fifth-text-color font-14">
                    Le leader incontournable sur le marché du BIM. Concevez, simulez, visualisez et collaborez pour exploiter pleinement les avantages des données interconnectées au sein d'un modèle BIM. Aucune expérience approfondie en Autocad n'est nécessaire. Tout ce que vous pouvez imaginer, REVIT l'offre !                 </p>
                
               
         </div>
         <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                 <div class="image-container circle-effect">
                    <a href="#"><img src="prometimage/image3.jpg" alt="" class="w-100"></a> 
                </div>
                 <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
                <div class="row my-2">
                     <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                     </div>
                 </div>
                 <p class="fables-fifth-text-color font-14">
                    Modélisation 3D, rendu de scènes et création d'animations. L'outil 3D le plus pratique d'Autodesk. Si vous êtes passionné par le BIM, 3DSMAX INTERACTIVE vous permettra de lier des fichiers MAX et RVT pour une modélisation 3D des plus éloquentes.
                </p>
               
             
         </div> 
         <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                 <div class="image-container circle-effect">
                    <a href="#"><img src="prometimage/image4.jpg" alt="" class="w-100"></a> 
                </div>
                 <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
                 <div class="row my-2">
                     <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                     </div>
                      <div class="col-12 col-lg-4">
                         <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                         <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                     </div>
                 </div>
                 <p class="fables-fifth-text-color font-14">
                    D'une utilisation basique des commandes 2D pour affiner et modifier des dessins de production, jusqu'aux commandes 3D avancées pour rendre des modèles de surfaces et de solides, AutoCAD est le produit idéal. Toujours l'outil agréable, mais sa fin approche !                 
                </p>
                  
          </div>
          <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
            <div class="image-container circle-effect">
               <a href="#"><img src="prometimage/image5.jpg" alt="" class="w-100"></a> 
           </div>
            <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
            <div class="row my-2">
                <div class="col-12 col-lg-4">
                    <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                    <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                </div>
                 <div class="col-12 col-lg-4">
                    <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                    <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                </div>
                 <div class="col-12 col-lg-4">
                    <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                    <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                </div>
            </div>
            <p class="fables-fifth-text-color font-14">
                Un logiciel d'analyse de charges structurelles qui vérifie la conformité aux codes et utilise des flux de travail intégrés au BIM pour échanger des données avec Revit. Il peut vous aider à créer des conceptions plus résilientes et constructibles, précises, coordonnées et connectées au BIM.             
            </p>
            </div> 
            
            <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                <div class="image-container circle-effect">
                   <a href="#"><img src="prometimage/image6.jpg" alt="" class="w-100"></a> 
               </div>
                <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
                <div class="row my-2">
                    <div class="col-12 col-lg-4">
                        <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                        <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                    </div>
                     <div class="col-12 col-lg-4">
                        <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                        <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                    </div>
                     <div class="col-12 col-lg-4">
                        <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                        <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                    </div>
                </div>
                <p class="fables-fifth-text-color font-14">
                    Réunissez les données de conception et de construction dans un modèle unique. Identifiez et résolvez les problèmes de conflit et d'interférence avant la construction. Rassemblez les données de plusieurs métiers pour mieux contrôler les résultats.
                </p>
            </div> 

            <div class="col-12 col-sm-6 mb-4 mb-lg-5"> 
                <div class="image-container circle-effect">
                   <a href="#"><img src="prometimage/image7.jpg" alt="" class="w-100"></a> 
               </div>
                <h2 class="my-3"><a href="#" class="fables-main-text-color fables-second-hover-color font-26 semi-font gallery-title"></a></h2>
                <div class="row my-2">
                    <div class="col-12 col-lg-4">
                        <span class="fables-main-text-color semi-font font-14 gallery-subtitle"></span>
                        <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                    </div>
                     <div class="col-12 col-lg-4">
                        <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                        <span class="fables-forth-text-color font-14 gallery-subtitle"></span>
                    </div>
                     <div class="col-12 col-lg-4">
                        <span class="fables-main-text-color semi-font font-14 gallery-subtitle"> </span>
                        <span class="fables-forth-text-color font-14 gallery-subtitle"> </span>
                    </div>
                </div>
                <p class="fables-fifth-text-color font-14">
                    Accélérez et améliorez la prise de décision, connectez vos équipes et anticipez les résultats du projet. Centralisez les données de votre projet et accédez aux informations dont vous avez besoin en temps réel, n'importe où, afin de suivre votre projet et prendre des décisions sur le terrain.</p>
                </div> 
    </div>  
</div>

           




       <div class="fables-blog-slider py-4 py-lg-5 fables-light-background-color"> 
             <div class="container">
                 <h2 class="fables-main-text-color text-center mt-lg-4 mb-4 mb-lg-5 font-26 bold-font">
                    Nos cours et programmes sont développés en collaboration avec des consultants et des tendances de l'industrie de premier plan, avec une forte orientation vers le BIM, fournissant les informations les plus pertinentes et à jour du marché. Vous apprendrez comment gérer efficacement les informations à toutes les étapes de vos projets de construction.   
                </h2> 
                 
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
<script src="template/vendor/timeline/jquery.timelify.js"></script>
<script src="template/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="template/vendor/WOW-master/dist/wow.min.js"></script>
<script src="template/vendor/owlcarousel/owl.carousel.min.js"></script> 
<script src="template/custom/js/custom.js"></script>  
    
</body>
</html>