<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fables">
    <meta name="author" content="Enterprise Development">
    <link rel="shortcut icon" href="template/custom/images/shortcut.png">
    <title>Gallery Filter</title>
    
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

<div class="search-section">
    <a class="close-search" href="#"></a>
    <div class="d-flex justify-content-center align-items-center h-100">
        <form method="post" action="#" class="w-50">
            <div class="row">
                <div class="col-10">
                    <input type="search" value="" class="form-control palce bg-transparent border-0 search-input" placeholder="Search Here ..." /> 
                </div>
                <div class="col-2 mt-3">
                     <button type="submit" class="btn bg-transparent text-white"> <i class="fas fa-search"></i> </button>
                </div>
            </div>
        </form>
    </div>
         
</div>
    
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
         <h2 class="fables-page-title fables-second-border-color">projets... </h2>
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
       <div class="row mt-3 mt-lg-5 mb-2">
           <div class="col-12 col-md-10 offset-md-1 col-lg-8 offset-lg-2">
               <div class="text-center">
                   <h2 class="fables-main-text-color font-35 bold-font my-3">Nos projets</h2>
                   <p class="fables-forth-text-color my-4">
                   </p>
               </div>
           </div>
       </div>

       <div class="gallery-filter">
            <div class="portfolioFilter mb-lg-5 clearfix">
              <a href="#" data-filter="*" class="current">Tous</a>
              <a href="#" data-filter=".webDesign" class="fables-forth-text-color">Construction</a>
              <a href="#" data-filter=".appDesign" class="fables-forth-text-color">Aménagement</a>
              <a href="#" data-filter=".brand" class="fables-forth-text-color">Installation</a>
              <a href="#" data-filter=".development" class="fables-forth-text-color">Maintenance</a>
            </div> 



        <div class="portfolioContainer mt-4 my-lg-5 row">
 
              <div class="webDesign objects col-sm-6 col-md-3 mb-4">
                 <div class="filter-img-block position-relative image-container translate-effect-right">  
                         <img src="template/custom/images/blog-slider1.jpg" alt="image"> 
                         <div class="img-filter-overlay fables-main-color-transparent row m-0">
                            <a href="" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                            <a  data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>



              <div class="drawings places col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="webDesign food col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="appDesign brand col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="webDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="development col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="brand col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="webDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="brand col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>
              <div class="appDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image" >
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>
              <div class="development col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image" >
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div> 
              <div class="appDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image" >
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div> 
              <div class="webDesign objects col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="brand places col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="webDesign food col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image" >
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="appDesign brand col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="webDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image" >
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="development col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="brand col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="webDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>

              <div class="brand col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider3.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>
              <div class="appDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider1.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div>
              <div class="development col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider2.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider2.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
              </div> 
              <div class="appDesign col-sm-6 col-md-3 mb-4">
                <div class="filter-img-block position-relative image-container translate-effect-right">
                     <img src="template/custom/images/blog-slider1.jpg" alt="image">
                     <div class="img-filter-overlay fables-main-color-transparent row m-0">
                         <a href="#" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconlink"></span></a>
                         <a data-fancybox="gallery" href="template/custom/images/blog-slider3.jpg" class="gallery-filter-icon white-color fables-second-hover-color"><span class="fables-iconsearch-icon"></span></a>
                     </div>
                 </div>
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
<script src="template/vendor/bootstrap/js/bootstrap-4-navbar.js"></script>
<script src="template/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="template/vendor/portfolio-filter-gallery/jquery.isotope.min.js"></script>
<script src="template/vendor/portfolio-filter-gallery/portfolio-filter-gallery.js"></script>
<script src="template/vendor/owlcarousel/owl.carousel.min.js"></script>  
<script src="template/vendor/WOW-master/dist/wow.min.js"></script>
<script src="template/vendor/timeline/jquery.timelify.js"></script>
<script src="template/vendor/fancybox-master/jquery.fancybox.min.js"></script>
<script src="template/vendor/timeline/timeline.js"></script>
<script src="template/vendor/timeline/modernizr.js"></script> 
<script src="template/custom/js/custom.js"></script> 
    
</body>
</html>