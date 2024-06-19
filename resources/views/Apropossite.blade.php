
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="template/custom/images/shortcut.png">

    <title> A propos</title>
    
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
         <h2 class="fables-page-title fables-second-border-color wow fadeInLeft" data-wow-duration="1.5s">A propos</h2>
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
            <div class="border p-3 p-md-4 text-center text-lg-left">
                <div class="row">
                    <div class="col-12 col-lg-3 text-center mb-3 mb-lg-0">
                        <span class="fables-iconlamp-icon fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-lg-9">
                        <h2 class="fables-second-text-color font-20 semi-font mb-3 about-block-heading">Créativité</h2>
                        <div class="font-15 fables-forth-text-color">
                            Nous offrons des services d'étude, de conception et de conseil pour optimiser les installations techniques.
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".6s">
           <div class="border p-3 p-md-4 text-center text-lg-left">
                <div class="row">
                    <div class="col-12 col-lg-3 text-center mb-3 mb-lg-0">
                        <span class="fables-icongears-icon fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-lg-9">
                       <h2 class="fables-second-text-color font-20 semi-font mb-3 about-block-heading">Expertise en travaux</h2>
                       <div class="font-15 fables-forth-text-color">
                        Nous offrons des services complets d'aménagement, de réhabilitation et d'intégration des systèmes techniques.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-4 mb-4 mb-md-0 wow fadeInDown" data-wow-delay=".9s">
           <div class="border p-3 p-md-4 text-center text-lg-left">
                <div class="row">
                    <div class="col-12 col-lg-3 text-center mb-3 mb-lg-0">
                        <span class="fables-iconheadset-icon fables-second-text-color fa-3x"></span>
                    </div>
                    <div class="col-12 col-lg-9">
                       <h2 class="fables-second-text-color font-20 semi-font mb-3 about-block-heading">Engagements et Valeurs</h2>
                        <div class="font-15 fables-forth-text-color">
                            Nous sommes à votre écoute, toujours disponibles pour vous aider. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
<div class="fables-bussiness-section bg-rules">
    <div class="container-fluid">
        <div class="row overflow-hidden">  
            <div class=" py-3 py-lg-0 col-sm-6 offset-sm-6 p-sm-0"> 
                <div class="fables-bussiness-caption p-4" >
                    <h2 class="fables-second-text-color my-0 font-30 font-weight-bold position-relative z-index wow fadeInRight" data-wow-duration="2s">Votre Partenaire Multi-Technique : Une Expérience Exceptionnelle Garantie</h2>
                    <div class="fables-forth-text-color position-relative z-index  mt-4 mb-5  wow fadeInRight" data-wow-duration="2s">
                        PROMETI, implantée à Casablanca, est une société spécialisée dans les travaux et la maintenance multi-technique. <br><br>
                        En mettant l'accent sur l'approche partenariale et intégrée, notre objectif est de fournir une gamme complète de solutions à nos clients et partenaires. <br><br> 
                        Nos services s'étendent au-delà de Casablanca, couvrant les régions de Rabat, Marrakech, Tanger, et tout le Maroc, afin de répondre à vos besoins et de concrétiser vos projets. <br><br>
                        Notre entreprise génére un chiffre d'affaires de 80 millions de dirhams, et est dotée d'une équipe permanente de plus de 100 ingénieurs et techniciens spécialisés qualifiés engagés en contrat CDI. <br><br>
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>


<div class="fables-counter-section fables-counter-no-background mt-5 my-3 my-md-5">
    <div class="container">
        <div class="row">
               <div class="col-6 col-md-3">
                   <div class="fables-counter" >
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4"  >100%</h2>
                       <h3 class="font-14 semi-font fables-forth-text-color">SATISFACTION CLIENT</h3>
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
                       <h2 class="fables-counter-value font-40 font-weight-bold mb-3 fables-main-text-color border fables-second-border-color d-inline-block px-4 py-2 mb-4" >+15 ans</h2>
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
</div>



<div class="fables-testimonial fables-after-overlay py-3 py-lg-5 bg-rules">
    <div class="container">
        <h2 class="position-relative z-index white-color font-35 font-weight-bold text-center mb-4">Domaine D'activité</h2> 
        <div class="owl-carousel owl-theme" id="fables-testimonial-carousel">

              <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
                   <div class="col-12 col-md-3" style="margin-top: 65px; transform: scale(1);">
                      <img src="template/custom/images/atc_about.jpg" alt="Fables Template" class="fables-testimonial-carousel-img">                        
                   </div>
                   <div class="col-12 col-md-9 p-0 p-md-2">
                        <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                            Renseignez-vous sur l'ATC de PROMETI (Autodesk Authorized Training Center). 
                            Nous offrons des expériences d'apprentissage de qualité aux étudiants et aux professionnels.
                            Nos services et réalisations s’étendent aux zones de Casablanca, Rabat, Marrakech, Tanger et sur tout le territoire du Maroc.
                        </div>
                   </div>
              </div>

              <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
                   <div class="col-12 col-md-3" style="margin-top: 65px; transform: scale(1);">
                      <img src="template/custom/images/var_about.jpg" alt="Fables Template" class="fables-testimonial-carousel-img" >  
                   </div>
                   <div class="col-12 col-md-9 p-0 p-md-2">
                        <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                            Nous sommes ravis d'être un revendeur Autodesk (VAR). 
                            Découvrez comment vous pouvez stimuler les performances, la créativité et la rentabilité grâce à la modélisation des informations du bâtiment (BIM), 
                            aux outils de collaboration et à diverses solutions technologiques innovantes.
                        </div>
                   </div>
              </div>


            <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
                <div class="col-12 col-md-3" >
                   <img src="prometimage/image12.jpg" alt="Fables Template" class="fables-testimonial-carousel-img" >  
                </div>
                <div class="col-12 col-md-9 p-0 p-md-2">
                     <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                        PROMETI offre des solutions multi techniques adaptées à vos besoins. Nous vous aidons à prendre des décisions avisées pour réduire les coûts d'exploitation grâce à des systèmes efficaces. Notre entreprise propose des contrats de maintenance pour les bâtiments industriels, commerciaux et tertiaires, couvrant une vaste zone géographique au profit de nos clients.
                     </div>
                </div>
           </div>
           
        <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
            <div class="col-12 col-md-3" >
               <img src="prometimage/image13.jpg" alt="Fables Template" class="fables-testimonial-carousel-img" >  
            </div>
            <div class="col-12 col-md-9 p-0 p-md-2">
                 <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                    Nous proposons des services complets pour les bâtiments, notamment : chauffage, climatisation, ventilation, désenfumage, courants forts, courants faibles, éclairage, GTC/GTB, détection incendie, protection incendie, toiture-terrasse, moyens et équipements de levage, ainsi que des portes et barrières automatiques.
                 </div>
            </div>
       </div>

       <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
        <div class="col-12 col-md-3">
           <img src="prometimage/image14.jpg" alt="Fables Template" class="fables-testimonial-carousel-img" >  
        </div>
        <div class="col-12 col-md-9 p-0 p-md-2">
             <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                Nous offrons une gamme complète de services aux utilités industrielles, incluant : vapeur, brûleurs, air comprimé, froid industriel, revêtements des sols (résines et gerflex), portes automatiques étanches, transport pneumatique, traitement des eaux industrielles, station de dépollution, périphérie du process, et courants forts, courants faibles, éclairage.
             </div>
        </div>
       </div>



       <div class="row text-center fables-testimonial-carousel-item rounded py-4"> 
        <div class="col-12 col-md-3" >
           <img src="prometimage/image15.jpg" alt="Fables Template" class="fables-testimonial-carousel-img" >  
        </div>
        <div class="col-12 col-md-9 p-0 p-md-2">
             <div class="fables-testimonial-detail font-15 font-italic text-white p-4 position-relative"> 
                Nous fournissons une gamme complète de services aux utilités médicales, tels que la climatisation et le traitement de l'air, les revêtements spéciaux de type salle blanche, les revêtements de sol (résines et gerflex), les portes automatiques étanches, les protections murales médicales, le transport pneumatique, le traitement de l'eau, ainsi que les installations électriques, les courants forts, les courants faibles et l'éclairage.
             </div>
        </div>
       </div>
              

        </div>
    </div>
</div>
<div class="container">  
    <div class="row my-4 my-md-5">
          <div class="col-12">
              <h2 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center">Notre Experience</h2> 
          </div>
          <div class="col-12 col-md-6 offset-md-3 mt-0 mb-4">
              
          </div>
          <div class="col-12 offset-lg-2 col-lg-8">
              <div class="row">
                  <div class="col-6 col-md-3 text-center">
                      <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="100" data-fill="{&quot;color&quot;: &quot;#42E563&quot;}">
                            <div style="color:#42E563; "></div>
                            <h3 class="fables-circle-head fables-main-text-color">Management des projets</h3>
                        </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-3 text-center">
                      <div class="progressbar" data-animate="false" >
                        <div class="circle" data-percent="100" data-fill="{&quot;color&quot;: &quot;#4252E5&quot;}">
                            <div style="color:#4252E5; "></div>
                            <h3 class="fables-circle-head fables-main-text-color">Installation</h3>
                        </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-3 text-center">
                      <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="100" data-fill="{&quot;color&quot;: &quot;#AE42E5&quot;}">
                            <div style="color:#AE42E5; "></div>
                            <h3 class="fables-circle-head fables-main-text-color">Maintenance</h3>
                        </div>
                      </div>
                  </div>
                  <div class="col-6 col-md-3 text-center">
                      <div class="progressbar" data-animate="false">
                        <div class="circle" data-percent="100" data-fill="{&quot;color&quot;: &quot;#E54D42&quot;}">
                            <div style="color:#E54D42; "></div>
                            <h3 class="fables-circle-head fables-main-text-color">Construction</h3>
                        </div>
                      </div>
                  </div>

              </div>
          </div>

    </div> 


<div class="fables-team" style="margin-top: 100px">
    <h2 class="font-35 font-weight-bold fables-main-text-color mb-4 text-center">Groupe Créatif</h2> 
    <div class="row my-3 my-md-5 overflow-hidden" style="justify-content: center; width=70%">
        <div class="col-6 col-md-3 mb-4 wow fadeInDown" data-wow-delay="1.2s">
            <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
               <div class="image-container shine-effect">
                  <img class="w-100" src="template/custom/images/equipe1.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <h5><p href="" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">Des auditeurs tierce partie dans les systèmes: ISO 9001, ISO 14001, ISO 45001, HQE, BREEAM...Des ingénieurs études et méthodes.</p></h5>
                <p class="font-13 fables-forth-text-color my-0"></p> 
    
                    
              </div>
            </div>
        </div>


    

        <div class="col-6 col-md-3 mb-4 wow fadeInDown" data-wow-delay="1.2s">
            <div class="card fables-team-block fables-second-hover-text-color fables-team-border fables-second-border-color">
               <div class="image-container shine-effect">
                   <img class="w-100" src="template/custom/images/equipe2.jpg" alt="Card image cap">
              </div>
              <div class="card-body">
                <h5><p href="#" class="font-20 semi-font fables-forth-text-color fables-second-hover-color team-name">Des techniciens <br>avec une grande expérience dans <br>des projets d’ampleur(Mall, hôpitaux, industrie, hôtels,…)</p></h5>
                
                
              </div>
            </div>
        </div>
    </div>  

</div>      
</div>



<div class="fables-testimonial fables-after-overlay py-5 bg-rules">
           <div class="container">
               <div class="row">
                   <div class="col-12 col-md-8">
                       <div class="fables-contact-caption-txt"> 
                           <h3 class="font-25 font-weight-bold white-color mb-3 position-relative z-index">Notre entreprise se démarque en tant que prestataire d'exception pour la maintenance, l'installation et la formation!!</h3>   
                       </div>
                   </div>
                   <div class="col-12 col-md-3 offset-xl-2 col-xl-2">
                        <a href="{{route('contact')}}" class="btn fables-second-background-color fables-btn-rounded white-color mt-3 position-relative z-index font-19 px-5 py-2 white-color-hover">rester en contact</a> 
                   </div>
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