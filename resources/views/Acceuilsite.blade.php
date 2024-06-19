
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="template/custom/images/shortcut.png">

    <title> Acceuil </title>
      
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
<!-- /End Top Header -->

<!-- Start Fables Navigation -->

<div class="fables-transparent py-3 py-lg-0">
    <div class="container">
           <div class="row">
               <div class="col-12 col-md-10 pr-md-0">                       
                   <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2">
<!-- logo prometi-->
                        <a class="navbar-brand fables-logo-brand pl-0" href="index.html" ><img src="prometimage\logonew1.png" alt="Fables Template" class="fables-logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fablesNavDropdown" aria-controls="fablesNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
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
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="white-space: nowrap;" >AUTODESK departement</a>
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
<!--end fable navigation -->
     
<!-- Start Header -->
<div class="fables-header fables-after-overlay overlay-lighter index-traingle bg-rules" style="background-image: url(template/custom/images/index-background.jpg);">
    <div class="container">  
        <div class="row">
            <div class="col-md-10 col-lg-7 mr-auto index-carousel">
                  <div class="owl-carousel owl-theme default-carousel nav-0 z-index mt-md-4 mt-xl-5 pt-md-4 pt-xl-5 dots-0 pb-md-5">
                      <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".4s">
                          <h1 class="fables-main-text-color font-weight-bold mb-1">VOTRE PARTENAIRE
                             <span class="fables-second-text-color">MULTI-TECHNIQUE</span>
                          </h1>  
                          <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                            Notre accompagnement se matérialise par notre écoute active de vos besoins avec la recherche de solutions adaptées à toutes les étapes de la vie du contrat.
                          </p>
                          <a href="{{route('apropos')}}" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Nos Services</a> 
                      </div> 
                      <div class="pt-0 mt-0 pt-xl-5 mt-xl-5 wow slideInUp" data-wow-duration="2s" data-wow-delay=".8s">
                          <h1 class="fables-main-text-color font-weight-bold mb-1"> VOTRE GUIDE EXPERT
                             <span class="fables-second-text-color">VERS LE SUCCES</span>
                          </h1>  
                          <p class="fables-forth-text-colo mb-3 light-font fables-header-slider-details">
                            Boostez votre carrière avec PROMETI ! Développez votre expertise produit et atteignez vos objectifs professionnels. Apprenez ce que l'école ne vous enseigne pas. Rejoignez-nous à l'ATC de PROMETI dès maintenant !
                          </p>
                          <a href="{{route('apropos')}}" class="btn fables-second-background-color fables-second-border-color white-color rounded-0 mr-4 px-3 px-md-4 py-2 bg-hover-transparent fables-second-hover-color">Nos Services</a> 
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>  
<!-- /End Header -->
     

     
<!-- Start page content -->    
       <div class="container">
             <div class="row my-3 my-md-5 overflow-hidden">
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".4s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness fables-second-text-color fa-3x"></span>
                      <h2 class="fables-main-text-color font-18 my-2">NOUS FAIRE CONFIANCE</h2>
                      <p class="fables-forth-text-color font-15">
                        Notre capital humain bien formé et diplômé pour assurer un travail de qualité.
                      </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay=".8s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness2 fables-second-text-color fa-3x"></span>
                      <h2 class="fables-main-text-color font-18 my-2">RASSUREZ-VOUS</h2>
                      <p class="fables-forth-text-color font-15">
                        Nous mettrons tout en œuvre pour vous offrir un confort optimal.
                      </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness3 fables-second-text-color fa-3x"></span>
                      <h2 class="fables-main-text-color font-18 my-2">ECONOMIE</h2>
                      <p class="fables-forth-text-color font-15">
                         Profitez d'offres spéciales pour économiser davantage tout en bénéficiant d'un service de qualité.
                     </p>
                  </div>
                  <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow fadeInDown" data-wow-delay="1.6s" data-wow-duration="1.5s">
                      <span class="fables-iconbussiness4 fables-second-text-color fa-3x"></span>
                      <h2 class="fables-main-text-color font-18 my-2">AUGUMENTER VOTRE SAVOIR</h2>
                      <p class="fables-forth-text-color font-15">
                          Notre formation est unique.
                      </p>
                  </div>
            </div> 
        </div>

       <div class="fables-choose-background fables-after-overlay py-4 py-md-5 bg-rules overflow-hidden px-3 px-md-0">
           <div class="container position-relative z-index">
             <div class="row">
                <div class="col-12 col-lg-6 p-0 image-container translate-effect-right wow fadeInLeft mb-3 mb-md-0" data-wow-delay="1s" data-wow-duration="1.5s">
                    <img src="template/custom/images/choose-img.jpg" alt="" class="w-100">
                </div>
                <div class="col-12 col-lg-6 bg-white px-6 py-3 py-md-5 wow fadeInRight" data-wow-delay="1s" data-wow-duration="1.5s">
                    <h2 class="font-30 font-weight-bold fables-second-text-color">Pourquoi Nous choisir ?</h2>
                    <p class="fables-main-text-color font-14 my-3">
                        Nous somme votre partenaire en travaux et maintenance multi-technique. Notre approche intégrée offre des solutions complètes à nos clients et partenaires. Excellence, innovation et partenariat sont au cœur de notre engagement envers votre succès.</p>
                    <div id="accordion">
                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingOne">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    INSTALLATIONS TECHNIQUES
                                </button>
                              </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Electricité : Courants Forts / Courants faibles.
                                Fluides : Chauffage, Ventilation, Plomberie, sanitaire, protection incendie.                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-2">
                            <div class="card-header bg-transparent p-0 border rounded-0" id="headingTwo">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                 MAINTENANCE MULTI-TECHNIQUE
                                </button>
                              </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Maintenance préventive et curative des bâtiments industriels, commerciaux et tertiaires.                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingThree">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  FORMATION
                                </button>
                              </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Nous offrons des expériences d'apprentissage de qualité aux étudiants et aux professionnels.                              </div>
                            </div>
                          </div>
                          <div class="card border-0 mb-2">
                            <div class="card-header p-0 border bg-transparent rounded-0" id="headingfour">
                              <h5 class="mb-0 position-relative">
                                <span class="fables-second-background-color white-color d-inline-block position-absolute fables-lus-icon pt-2 text-center">
                                    <i class="fas fa-plus"></i>  
                                </span>
                                <button class="btn fables-main-text-color bg-transparent font-18 focus-0 d-block position-relative z-index pl-6 pt-2 pb-2 w-100 text-left border-0 text-truncate collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                 SOLUTIONS TECHNIQUES
                                </button>
                              </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                              <div class="card-body fables-forth-text-color font-14 py-1 py-xl-2 pl-6 pr-0">
                                Chez PROMETI, votre satisfaction est notre moteur d'innovation. Notre structure souple nous permet de façonner des solutions sur mesure pour répondre à vos besoins actuels et futurs.                              </div>
                            </div>
                          </div>
                        </div>
                </div>
             </div>

           </div>
       </div>
       <div class="container">
           <div class="row">
               <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2 text-center"> 
                   <h2 class="fables-second-text-color font-35 font-weight-bold my-3 mt-md-5 mb-md-4">Notre créativité est notre force.</h2>
                   <p class="fables-forth-text-color">
                    PROMETI prospère : 80 millions de dirhams de chiffre d'affaires, +100 ingénieurs et techniciens spécialisés en CDI, et 15 ans d'expérience. Confort et performance garantis.
                    
                   </p> 
               </div>
           </div>
           <div class="row mt-4 mt-md-5">
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4" >100%</h2> 
                       <h3 class="font-14 semi-font fables-forth-text-color">SATISFACTION DES CLIENTS</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4" >+90</h2>
                       <h3 class="font-14 semi-font fables-forth-text-color">COLLABORATEURS</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4" >+15ans</h2>
                       <h3 class="font-14 semi-font fables-forth-text-color">STAFF EXPERIENCE</h3>
                   </div>
               </div>
               <div class="col-6 col-md-3">
                   <div class="fables-counter">
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4" >+50</h2>
                       <h3 class="font-14 semi-font fables-forth-text-color">PROJETS RÉUSSIS</h3>
                   </div>
               </div>
           </div>
       </div>



       <div class="fables-price-bg fables-after-overlay py-4 py-lg-5 my-4 my-lg-5 bg-rules overflow-hidden"> 
           <div class="container position-relative z-index">
               <h2 class="fables-main-text-color font-35 font-weight-bold text-center mb-4 mb-md-5">AUTODESK DEPARTEMENT</h2> 
               <div class="row" style="justify-content: center">


                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.2s" data-wow-duration="1.5s" >
                    <div class="table-border-light fables-second-hover-border colored-table">
                       <div class="bg-primary py-4" >
                           <h2 class="white-color font-weight-bold position-relative fables-third-after font-30 table-title"><img src="prometimage/atc.jpg" alt="" style="width:200px; height:60px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);  border-radius: 0 0 4px 4px;" ></h2>
                           <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                           <p class="white-color font-13 mb-4">AUTODESK Authorized Training Center</p> 
                           <span class="fables-table-arrow border-2 bg-primary white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                       </div> 
                       <div class="bg-white py-4">
                           <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                            Boostez votre carrière avec nos cours BIM de pointe ! 
                            Formation en collaboration avec des experts de l'industrie, offrant des informations pertinentes et à jour. 
                           </p>
                           <a href="{{route('atc')}}" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Voir plus</a>
                       </div>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                    <div class="table-border-light fables-second-hover-border colored-table">
                       <div class="bg-primary py-4">
                           <h2 class="white-color font-weight-bold position-relative fables-third-after font-30 table-title"><img src="prometimage/alp.jpg" alt="" style="width:200px; height:60px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);  border-radius: 0 0 4px 4px;"></h2>
                           <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                           <p class="white-color font-13 mb-4"> AUTODESK Learning Partner</p> 
                           <span class="fables-table-arrow border-2 bg-primary white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                       </div> 
                       <div class="bg-white py-4">
                           <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                            Formations BIM en collaboration avec experts de l'industrie. Gérez efficacement l'information dans vos projets de construction. À la pointe des tendances du marché.
                           </p>
                           <a href="{{route('atc')}}" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Voir Plus</a>
                       </div>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 text-center mb-4 mb-lg-0 wow bounceInDown" data-wow-delay="1.2s" data-wow-duration="1.5s">
                    <div class="table-border-light fables-second-hover-border colored-table">
                       <div class="bg-primary py-4">
                           <h2 class="white-color font-weight-bold position-relative fables-third-after font-30 table-title"><img src="prometimage/image8.jpg" alt="" style="width:200px; height:60px; box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);  border-radius: 0 0 4px 4px;"></h2>
                           <h2 class="white-color font-weight-bold font-35 position-relative mt-4 d-inline-block"><span class="table-badge white-color position-absolute"></span></h2>
                           <p class="white-color font-13 mb-4"> AUTODESK Reseller</p> 
                           <span class="fables-table-arrow border-2 bg-primary white-color rounded-circle border-white position-absolute"><i class="fas fa-arrow-down"></i></span>
                       </div> 
                       <div class="bg-white py-4">
                           <p class="fables-forth-text-color my-4 px-4 line-height-large font-15">
                            Depuis plus de 25 ans, nous sommes des experts en solutions AUTODESK. Notre statut de revendeur témoigne de notre engagement envers la satisfaction de nos clients.  </p>
                           <a href="{{route('softsolution')}}" class="btn fables-second-background-color white-color white-color-hover fables-btn-rounded px-4 py-2">Voir Plus</a>
                       </div>
                    </div>

                </div>
               </div>
           </div>  
       </div>
       
       <div class="container mb-4 mb-md-5"> 
            <div class="row">
               <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                   <div class="text-center">
                       <h2 class="fables-main-text-color font-35 font-weight-bold mb-4">Nos Projets</h2>
                   </div>
               </div>
           </div> 
                 
               <div class="gallery-filter">
                    
                    <div class="portfolioContainer row filter-masonry"> 
                        @foreach ($projet as $pr)
                          <div class="{{$pr->catégorie}} col-sm-6 col-md-3 mb-2">
                            <div class="filter-img-block position-relative image-container translate-effect-right">
                                 <img src="/images/{{$pr->image}}" alt="image" class="w-100">
                                 <div class="img-filter-overlay fables-main-color-transparent row m-0">
                                     <a href="{{route('projetencours.detail', ['id'=> $pr->id])}}" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                                     <a data-fancybox="gallery" href="/images/{{$pr->image}}" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                                 </div>
                             </div>
                          </div>
                        @endforeach 
                         
                          
                       
                    </div> 
                    <div class="text-center">
                        <a href="{{route('projetsréalisés')}}" class="btn fables-main-border-color fables-main-text-color mt-md-4 px-5 py-2 fables-btn-rounded fables-main-hover-background-color white-color-hover">Voir Tous Les Projets</a>
                    </div>
               </div> 
       </div>
       <div class="fables-testimonial fables-after-overlay py-5 bg-rules">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-md-8">
                       <div class="fables-contact-caption-txt"> 
                           <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">Nous sommes le choix incontestable pour tous vos besoins de maintenance, services et formation, à tout moment !!</h3>  
                           <p class="fables-third-text-color position-relative z-index font-weight-light">N'hésitez pas à nous contacter pour obtenir davantage d'informations et pour collaborer avec nous. </p>
                        </div>
                   </div>

                   <div class="col-12 col-md-4 offset-xl-2 col-xl-2 text-center">
                        <a href="{{route('contact')}}" class="btn fables-second-background-color fables-btn-rounded white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">Contactez-nous</a> 
                   </div>
               </div>
               
           </div>
       </div>
       <div class="container">
           <div class="row overflow-hidden">
              <div class="col-12">
                  <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-4 my-lg-5">Nos Actualités</h2>
              </div>
              @foreach ($actualite as $ac )
               <div class="col-12 col-md-4 mb-4 mb-lg-5 wow bounceInLeft" data-wow-delay=".4s" data-wow-duration="1.5s"> 
                      <div class="image-container translate-effect-right">
                          <a href="#"><img src="/images/{{$ac->image}}" alt=""></a>  
                      </div>
                      <h2 class="font-18 semi-font font-18  mt-3"><a href="#" class="fables-main-text-color fables-second-hover-color">{{$ac->titre}}</a></h2>
                      <p class="fables-fifth-text-color font-13 my-1"> {{$ac->date_creation}} </p>
                      <p class="fables-forth-text-color font-14">
                        <?php
                        $descriptionWords = preg_split('/\s+/', $ac->description, -1, PREG_SPLIT_NO_EMPTY); 
                        $firstTenWords = implode(' ', array_slice($descriptionWords, 0, 14)); 
                        echo $firstTenWords . '...'; 
                        ?>
                      
                      </p>
                      <a href="" class="btn fables-main-text-color fables-second-hover-color p-0 underline mt-2">Lire plus</a>      
              </div>
              @endforeach
           </div>
     </div>   
     
     
 <div class="fables-testimonial fables-after-overlay py-4 py-lg-5 bg-rules">
    <div class="container">
        <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4"></h2> 
        <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">
             


              
        </div>
    </div>
</div>



 <div class="container"> 
         <h2 class="font-35 font-weight-bold text-center fables-main-text-color my-3 my-lg-5">Nos Clients</h2>          
         
          
        <div class="row my-3 my-lg-5">
            
          <div class="owl-carousel owl-theme px-6 my-0" id="fables-partner-carousel">
                @foreach ($client as $cl)

                    <div> 
                        <img src="/images_clients/{{$cl->image}}" alt="Fables Template" class="fables-partner-carousel-img">  
                    </div>
                    
                @endforeach
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
<script src="template/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
<script src="template/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script>
<script src="template/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="template/custom/js/custom.js"></script>

 
</body>
</html>