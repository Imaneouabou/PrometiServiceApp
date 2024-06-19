<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Recrutement</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="templaterecrut/lib/animate/animate.min.css" rel="stylesheet">
    <link href="templaterecrut/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="templaterecrut/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="templaterecrut/css/style.css" rel="stylesheet">

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
                   <nav class="navbar navbar-expand-md btco-hover-menu py-lg-2" >
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
                                    <a class="nav-link dropdown-toggle" href="#" id="sub-nav4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AUTODESK departement</a>
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
        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative" >
                    <img class="img-fluid" src="templaterecrut/img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(95, 74, 121, 0.5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Cherchez et trouvez l'emploi parfait que vous méritez.</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">PROMETI grandit et nous voulons que vous grandissiez avec nous.</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Recherchez un stage</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="templaterecrut/img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(95, 74, 121, 0.5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Stages passionnants chez nous : Explorez votre avenir !</h1>
                                    <p class="fs-5 fw-medium text-white mb-4 pb-2">Découvrez des stages enrichissants où vos ambitions prennent vie !</p>
                                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Recherchez un emploi</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->







        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Mot clé" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected hidden>Categorie</option>
                                    <option value="1">Education</option>
                                    <option value="2">Project Managment</option>
                                    <option value="3">Ressources Humaines</option>
                                    <option value="3">Travaux Publiques</option>
                                    <option value="3">Electricité/Fluide</option>
                                    <option value="3">Maintenance/Installation</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected hidden>Location</option>
                                    <option value="1">Agadir</option>
                                    <option value="2">Casablanca</option>
                                    <option value="3">Fès</option>
                                    <option value="3">Béni Mellal</option>
                                    <option value="4">Marrakech</option>
                                    <option value="5">Rabat</option>
                                    <option value="6">Tanger</option>
                                    <option value="7">Meknès</option>
                                    <option value="8">Oujda</option>
                                    <option value="9">Kenitra</option>
                                    <option value="10">Tétouan</option>
                                    <option value="10">Autre..</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                      <a href=><button class="btn btn-dark border-0 w-100">Rechercher</button></a>  
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Explorer nos catégories</h1>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Services</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Ressource Humaine</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Communication</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Education</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="#">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Ingénierie</h6>
                            <p class="mb-0"></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End -->




        <!-- Jobs Start -->
        <div class="" >
            <div class="container" >
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Offres d'emploi</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s" >
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <h6 class="mt-n1 mb-0">Présenté</h6>
                            </a>
                        </li>
                        
                    </ul>

            
                    <div class="tab-content"style="margin-bottom: 100px;" >
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                                
                    @if($Offre->count() > 0)
                    @foreach($Offre as $of)
                            <div class="job-item p-4 mb-4">
                                <div class="row g-4">
                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid border rounded" src="/images/logoprometi.jpg" alt="" style="width: 80px; height: 80px;">
                                        <div class="text-start ps-4">
                                            <h5 class="mb-3">{{$of->titre}}</h5>
                                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$of->location}}</span>
                                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$of->prix}}DH</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                        <div class="d-flex mb-3">
                                            <a class="btn btn-primary" href="{{ route('recrut.detail', ['id'=> $of->id]) }}">Postuler maintenant</a>
                                        </div>
                                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date limite : {{ \Carbon\Carbon::parse($of->datelim)->format('d-m-Y') }}</small>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    @else
                            <tr>
                                <td class="text-center" colspan="5">Offre non disponible</td>
                            </tr>
                    @endif
                              
                              <a class="btn btn-primary py-3 px-5" href=""  >Afficher plus</a>
                             
                    </div>

                </div>
            </div>
        </div>
            
        <!-- Jobs End -->


        

      
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
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="templaterecrut/lib/wow/wow.min.js"></script>
    <script src="templaterecrut/lib/easing/easing.min.js"></script>
    <script src="templaterecrut/lib/waypoints/waypoints.min.js"></script>
    <script src="templaterecrut/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="templaterecrut/js/main.js"></script>


    
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