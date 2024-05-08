<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ledindustrie.demo/gtec-mg</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="shortcut icon" href="{{ asset('img/LOGO DEFINITIF.jpg') }}" type="image/x-icon">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-between">
            <div class="contact-info d-flex align-items-center">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope"></i> <a href="mailto:{{ $information->email }}">{{ $information->email }}</a>
                    <i class="bi bi-phone"></i> {{ $information->phone }}
                </div>
            </div>

            <div class="d-none d-lg-flex social-links align-items-center">
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-moon"></i></a>
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo me-auto" style="font-size: 20px;">
                <a href="index.html">
                    <i class="fas fa-lightbulb" style="color: #FD7E14;"></i> Led-Solutions Madagascar
                </a>
            </h1>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
                    <li><a class="nav-link scrollto" href="#why-us">À propos</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto" href="#produits">Produits</a></li>
                    <li><a class="nav-link scrollto" href="#portfolio">Galerie</a></li>
                    <li><a class="nav-link scrollto" href="#faq">FAQ</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <a href="#contact" class="appointment-btn scrollto"><span class="d-none d-md-inline">Contact</span></a>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <video autoplay muted loop>
            <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
        </video>
        <div class="container">
            <h1 data-aos="fade-left" data-aos-duration="1500" style="color: rgb(72, 70, 70)">Led-Solutions Madagascar</h1>
            <h2 data-aos="fade-right" data-aos-duration="1500" style="color: rgb(72, 70, 70)">Éclairons votre monde avec l'innovation LED</h2>
            <a href="#why-us" class="btn-get-started scrollto" style="background: linear-gradient(to right, #FD7E14, #FFD700);">En savoir plus</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us" data-aos="fade-up" data-aos-duration="1500">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content" style="background-color: gray;">
                            <h3 style="background: linear-gradient(to right, #FD7E14, #FFD700); -webkit-background-clip: text; color: transparent;">Pourquoi choisir Led Industrie?</h3>
                            <p style="opacity: 0.8;">Chez Led Industrie Madagascar, nous sommes déterminés à fournir les solutions d'éclairage les plus avancées pour répondre aux besoins de nos clients. En tant que leader dans l'industrie des LED à Madagascar.</p>
                            <div class="text-center">
                                <a href="#lire-plus" class="more-btn">Lire plus <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-comments" style="color: #FD7E14;"></i>
                                        <h4>Conseil et Consultation</h4>
                                        <p>Nos experts en éclairage sont là pour vous aider à trouver les meilleures solutions LED pour votre projet.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-pencil-alt" style="color: #FD7E14;"></i>
                                        <h4>Conception sur mesure</h4>
                                        <p>Nous proposons des services de conception sur mesure pour créer des solutions d'éclairage uniques.</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="fas fa-wrench" style="color: #FD7E14;"></i>
                                        <h4>Installation et Maintenance</h4>
                                        <p>Notre équipe d'installation professionnelle assure une mise en place sans tracas de vos systèmes d'éclairage LED.</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Produits ======= -->
        <section id="boutons-stylés" style="background-color: #f8f9fa;">
            <div class="container text-center py-5">
                <div class="section-title">
                    <h2>Nos Produits</h2>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-lg-2 col-md-3">
                        <button type="button" class="btn btn-primary btn-block mb-3 filter-btn" data-filter="all">ALL</button>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <button type="button" class="btn btn-primary btn-block mb-3">Éclairage intérieur</button>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <button type="button" class="btn btn-primary btn-block mb-3">Éclairage extérieur</button>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <button type="button" class="btn btn-primary btn-block mb-3">Jardins/Piscine</button>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <button type="button" class="btn btn-primary btn-block mb-3">Décorations</button>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <button type="button" class="btn btn-primary btn-block mb-3">Divers</button>
                    </div>
                </div>
            </div>
            <div class="container" data-aos="fade-up" data-aos-duration="1500">
                <div class="header-search-container">
                </div>

                <div class="swiper-slide swiper-slide-mobile">
                    <div class="team-slider swiper">
                        <div class="swiper-wrapper align-items-stretch">
                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm rounded-top">
                                    <div class="member-img">
                                        <img src="{{ asset('img/produits/6.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span>Jiro Jiro Jiro</span> <br>
                                        <span>Mirehiitra tsara</span> <br>
                                        <span>Mahafapo tsaera</span> <br>
                                        <span>Oay izany izy....</span> <br>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> 3.750.000 Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i></i> Commander</button>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm  rounded-top">
                                    <div class="member-img">
                                        <img src="{{ asset('img/produits/7.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span>Jiro Jiro Jiro</span> <br>
                                        <span>Mirehiitra tsara</span> <br>
                                        <span>Mahafapo tsaera</span> <br>
                                        <span>Oay izany izy....</span> <br>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> 3.750.000 Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i></i> Commander</button>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm  rounded-top">
                                    <div class="member-img">
                                        <img src="{{ asset('img/produits/8.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span>Jiro Jiro Jiro</span> <br>
                                        <span>Mirehiitra tsara</span> <br>
                                        <span>Mahafapo tsaera</span> <br>
                                        <span>Oay izany izy....</span> <br>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> 3.750.000 Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i></i> Commander</button>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm  rounded-top">
                                    <div class="member-img">
                                        <img src="{{ asset('img/produits/9.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span>Jaro</span> <br>
                                        <span>Mirehiitra tsara</span> <br>
                                        <span>Mahafapo tsaera</span> <br>
                                        <span>Oay izany izy....</span> <br>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> 3.750.000 Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i></i> Commander</button>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm  rounded-top">
                                    <div class="member-img">
                                        <img src="{{ asset('img/produits/10.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span>Jiro Jiro Jiro</span> <br>
                                        <span>Mirehiitra tsara</span> <br>
                                        <span>Mahafapo tsaera</span> <br>
                                        <span>Oay izany izy....</span> <br>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> 3.750.000 Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i></i> Commander</button>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="member border p-3 shadow-sm  rounded-top">
                                    <div class="member-img">
                                        <img src="{{ asset('img/produits/11.png') }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="member-info">
                                        <br>
                                        <span>Jiro Jiro Jiro</span> <br>
                                        <span>Mirehiitra tsara</span> <br>
                                        <span>Mahafapo tsaera</span> <br>
                                        <span>Oay izany izy....</span> <br>
                                    </div>
                                </div>
                                <div class="member-price border p-3 shadow-sm rounded-bottom" style="background-color: rgba(128, 125, 122, 0.189);">
                                    <p style="font-weight: bolder;"><i class="fas fa-tag"></i> 3.750.000 Ar</p>
                                    <p style="font-size: 12px;"><i class="fas fa-truck"></i> Livraison partout à Madagascar</p>
                                    <button class="btn btn-danger btn-sm sm mx-auto d-block commanderBtn"><i class="fas fa-shopping-cart"></i></i> Commander</button>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div id="contactCard" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background-color: white; padding: 20px; border: 1px solid #ccc; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);z-index: 9999;">
                    <button style="position: absolute; top: 10px; right: 10px; background-color: transparent; color: red; border: none; font-size: 20px; cursor: pointer;" onclick="document.getElementById('contactCard').style.display = 'none'">&times;</button>
                    <h3><i class="fas fa-shopping-cart" style="color: #007bff;"></i> Commandez sur :</h3> <br>
                    <button style="background-color: #25d366; color: white; border-radius: 5px; transition: background-color 0.3s; border: none;" onclick="window.open('https://api.whatsapp.com/send?phone=NUMÉRO_DE_TÉLÉPHONE', '_blank')"><i class="fab fa-whatsapp"></i> WhatsApp</button>
                    <button style="background-color: #007bff; color: white; border-radius: 5px; transition: background-color 0.3s; border: none;" onclick="window.open('mailto:adresse@email.com')"><i class="fas fa-envelope"></i>
                        E-mail</button>
                    <button style="background-color: #3b5998; color: white; border-radius: 5px; transition: background-color 0.3s; border: none;" onclick="window.open('https://www.facebook.com/VotrePageFacebook', '_blank')"><i class="fab fa-facebook"></i> Facebook</button>
                </div>
        </section>

        <!-- ======= About Section ======= -->
        <section id="lire-plus" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3 style="color: gray;">
                            Led Industrie est une entreprise spécialisée dans la production, la distribution et
                            l'installation de solutions d'éclairage LED.</h3>
                        <p>Voici quelques aspects qui pourraient être pertinents pour décrire l'entreprise :</p>

                        <div class="icon-box">
                            <div class="icon" style="background: linear-gradient(to right, #FD7E14, #FFD700);"><i class="fa fa-gem" style="color: #ffffff;"></i></div>
                            <h4 class="title"><a href="">Produits de haute qualité</a></h4>
                            <p class="description"> Led Industrie propose une large gamme de produits d'éclairage LED de
                                haute qualité, respectant les normes les plus élevées de qualité et de fiabilité.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon" style="background: linear-gradient(to right, #FD7E14, #FFD700);"><i class="fa fa-bolt" style="color: #ffffff;"></i></div>
                            <h4 class="title"><a href="">Économies d'énergie</a></h4>
                            <p class="description">Les produits LED sont reconnus pour leur efficacité énergétique,
                                permettant aux clients de réaliser des économies sur leurs coûts énergétiques tout en
                                bénéficiant d'un éclairage performant.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon" style="background: linear-gradient(to right, #FD7E14, #FFD700);"><i class="fa fa-comments" style="color: #ffffff;"></i></div>
                            <h4 class="title"><a href="">Service client de qualité :</a></h4>
                            <p class="description">Led Industrie met l'accent sur la satisfaction de ses clients en
                                offrant un excellent service après-vente et en étant à l'écoute des besoins et des
                                préoccupations de ses clients.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services" style="background-color: #f1f7fd;">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Led Industrie propose une gamme de services destinés à satisfaire les besoins de ses clients en
                        matière d'éclairage LED.</p>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon" style="background: linear-gradient(to right,#FFD700, #FD7E14);"><i class="fa fa-lightbulb"></i></div>
                            <h4 class="title"><a href="">Conseil personnalisé</a></h4>
                            <p class="description">Led Industrie offre des services de conseil pour aider les clients à
                                choisir les solutions d'éclairage les plus adaptées à leurs besoins spécifiques. Les
                                experts de l'entreprise peuvent évaluer les espaces et proposer des produits qui
                                optimisent l'éclairage tout en minimisant la consommation d'énergie.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon" style="background: linear-gradient(to right,#FFD700, #FD7E14);"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href="">Vente de produits d'éclairage LED</a></h4>
                            <p class="description"> L'entreprise propose une large gamme de produits d'éclairage LED,
                                notamment des ampoules, des projecteurs, des rubans lumineux, des panneaux, des
                                luminaires, etc. Les clients peuvent trouver des solutions pour tous types
                                d'applications, qu'il s'agisse de besoins résidentiels, commerciaux ou industriels.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon" style="background: linear-gradient(to right,#FFD700, #FD7E14);"><i class="fa fa-cog"></i></div>
                            <h4 class="title"><a href="">Installation et mise en service</a></h4>
                            <p class="description">Led Industrie propose des services d'installation professionnelle
                                pour s'assurer que les produits sont correctement installés et configurés pour un
                                fonctionnement optimal. L'entreprise peut prendre en charge l'installation complète des
                                systèmes d'éclairage LED.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon" style="background: linear-gradient(to right,#FFD700, #FD7E14);"><i class="fa fa-tools"></i></div>
                            <h4 class="title"><a href="">Maintenance et support technique</a></h4>
                            <p class="description">Pour assurer la durabilité des installations d'éclairage, Led
                                Industrie offre des services de maintenance et de support technique. L'entreprise peut
                                intervenir rapidement pour résoudre tout problème lié à l'éclairage LED.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Services Section -->


        <style>
            #particles-js {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                z-index: -1;
            }

            #faq {
                position: relative;
                z-index: 0;
            }
        </style>

        <!-- ======= Gallerie Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Galerie</h2>
                    <p>Découvrez notre expertise en matière d'éclairage LED à travers une sélection de nos réalisations
                        les plus marquantes.</p>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                </div>
            </div>
        </section><!-- End Gallerie Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div id="particles-js"></div>
            <div class="container">
                <div class="section-title">
                    <h2>Foire Aux Questions <span style="font-size: 65px;margin-top: -20px;position: absolute; color: #FD7E14; ">?</span>
                    </h2>
                    <p>Nous sommes engagés à vous fournir les meilleures solutions d'éclairage LED et un service client
                        exceptionnel. Pour vous aider à trouver rapidement des réponses à vos questions, nous avons
                        rassemblé ici les questions les plus fréquentes sur nos produits et services. </p>
                </div>
                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Quels types de produits LED proposez-vous ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Les clients pourraient vouloir connaître les différentes catégories de produits LED
                                    disponibles, comme les ampoules, les luminaires, les projecteurs, les bandes LED,
                                    etc.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Quelle est la durée de vie moyenne de vos
                                produits LED ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Les clients peuvent s'intéresser à la longévité des produits LED proposés par
                                    l'entreprise.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Offrez-vous des services d'installation
                                pour vos produits ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Les clients peuvent vouloir savoir s'ils peuvent bénéficier de services
                                    d'installation ou de conseils professionnels sur l'installation des produits LED.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Proposez-vous des garanties sur vos
                                produits LED ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Les clients pourraient s'interroger sur les garanties offertes sur les produits LED,
                                    telles que la durée et les conditions de la garantie.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Quels sont les avantages de l'éclairage
                                LED par rapport aux autres types d'éclairage ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Les clients pourraient vouloir comprendre les avantages de l'éclairage LED, tels que
                                    la consommation d'énergie plus faible, la durabilité, la meilleure qualité de
                                    lumière, etc..
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <section id="contact">
            <div class="container">
                <div class="section-title">
                    <h2 data-aos="fade-left" data-aos-duration="1500">Contact</h2>
                    <p data-aos="fade-right" data-aos-duration="1500">Votre avis nous intéresse ! Chez Led Industrie,
                        nous nous efforçons de fournir des produits et
                        services de haute qualité. Vos retours nous aident à nous améliorer continuellement. Partagez
                        votre expérience avec nous et aidez-nous à mieux répondre à vos attentes. Si vous avez un
                        message urgent ou une demande spéciale, n'hésitez pas à nous contacter dès maintenant.</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 shadow-box">
                        <br>
                        <form action="{{ route('envoyer.message') }}" method="POST" id="message-form">
                            @csrf
                            <div class="text-center">
                                <span style="color: #FFD700; font-size: 20px;">&#9733;</span>
                                <span style="color: #FFD700; font-size: 30px;">&#9733;</span>
                                <span style="color: #FFD700; font-size: 20px;">&#9733;</span>
                            </div>
                            <h3 class="text-center">Laissez-nous votre avis:</h3>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Nom :</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="email">Email :</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message :</label>
                                <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" style="background-color: #FD7E14; border: none;" id="submit-btn">
                                    Envoyer <i class="fas fa-paper-plane"></i>
                                </button>
                                @if ($errors->any() && empty($request->input('name')) && empty($request->input('email')) && empty($request->input('message')))
                                <div class="alert alert-danger">
                                    Veuillez remplir tous les champs du formulaire.
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                    <style>
                        .shadow-box {
                            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
                            padding: 20px;
                        }

                        .form-right-border {
                            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.2), 0 2px 5px rgba(0, 0, 0, 0.2);
                        }

                        .map-left-border {
                            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2), -2px 0 5px rgba(0, 0, 0, 0.2);
                        }
                    </style>

                    <div class="col-md-6 shadow-box">
                        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1967.0935156354584!2d47.5414!3d-18.8574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x22d3701c50df70e1%3A0x2a85f7dbab4a1f9d!2sAmbohimanarina%2C%20Antananarivo%2C%20Madagascar!5e0!3m2!1sen!2sus!4v1645793277383!5m2!1sen!2sus" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3 class="logo me-auto" style="color: gary;"><i class="fas fa-lightbulb" style="color: #FD7E14;"></i> <a href="index.html" style="color: rgb(72, 70, 70);">Led-Solutions Madagascar</a></h3>
                        <p>
                            {{ $information->address }}<br>
                            Madagascar <br><br>
                            <strong>Téléphone:</strong> {{ $information->phone }}<br>
                            <strong>Email:</strong> {{ $information->email }}<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Autres Liens</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Acceuil</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#produits">Produits</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Gallérie</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#faq">FAQ</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Nos Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Ventes Produits</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Conseil / Consultation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Concéption sur mésure</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Installation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Maintenance</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Qu'attendez vous ? </h4>
                        <p>Led Industrie est votre partenaire de confiance pour des solutions d'éclairage LED innovantes
                            et de qualité, adaptées à tous vos besoins.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Led-Solutions Madagascar</span></strong>. Tous droits réservés.
                </div>
                <div class="credits">
                    By <a href="https://www.g-tec.mg/">G-Tec Madagascar</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/gasytechnology23?locale=fr_FR" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"><i class="fas fa-lightbulb" style="color: #FD7E14; font-size: 30px;"></i></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script>
        document.querySelectorAll('.commanderBtn').forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('contactCard').style.display = 'block';
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault(); // Empêche le rechargement de la page par défaut lors de la soumission du formulaire
            Swal.fire({
                title: 'Êtes-vous sûr ?',
                text: 'Voulez-vous vraiment envoyer ce message ?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Oui',
                cancelButtonText: 'Annuler'
            }).then((result) => {
                if (result.isConfirmed) {
                    var formData = new FormData(document.getElementById('message-form'));

                    // Envoi des données du formulaire via AJAX
                    var xhr = new XMLHttpRequest();
                    xhr.open('POST', '/envoyer-message', true);
                    xhr.onload = function() {
                        if (xhr.status === 200) {
                            // Affiche une alerte personnalisée si le message est envoyé avec succès
                            Swal.fire({
                                icon: 'success',
                                title: 'Message envoyé !',
                                text: 'Votre message a été envoyé avec succès.',
                            });
                            // Réinitialise le formulaire
                            document.getElementById('message-form').reset();
                        } else {
                            // Affiche une alerte personnalisée en cas d'erreur lors de l'envoi du message
                            Swal.fire({
                                icon: 'error',
                                title: 'Erreur',
                                text: 'Une erreur est survenue. Veuillez réessayer plus tard.',
                            });
                        }
                    };
                    xhr.send(formData);
                }
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ asset('js/particle.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".team-slider", {
            slidesPerView: 4,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                400: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 3,
                },
                1200: {
                    slidesPerView: 4,
                },
            },
        });
    </script>
    <!-- Vendor JS Files -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>