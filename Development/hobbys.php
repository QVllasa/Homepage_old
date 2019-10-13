<!doctype html>
<html class="js" lang="de">

<head>

    <meta charset="utf-8">
    <title>Qendrim Vllasa</title>
    <meta name="description" content="This is me. Qendrim Vllasa">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/blogs.css">
    <link rel="stylesheet" href="css/isotopestyle.css">


    <meta name="theme-color" content="#fafefa">




    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700&display=swap" rel="stylesheet">

    <!-- google fonts -->

    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <link rel="stylesheet" href="css/companyLogoStyle.scss" type="text/scss">


</head>

<body data-spy="scroll" data-target=".navbar" data-offset="145">


<!--NAVIGATION-->
<?php require("./parts/navigation.php")?>
<!--<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-0 " id="navbar-top">
    <div class="container">
        <div class="navbar-brand" id="navbar-name">
            <a class="navbar-brand" id="logoQ" href="#">Qendrim</a>
            <br>
            <a class="navbar-brand" id="logoV" href="#">Vllasa</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav" id="menuItems">
                <li class="nav-item active">
                    <a class="nav-link underlining" href="#">Home<span class="sr-only">()</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link underlining"
                       href="#my-about-me-section">Über&nbsp;Mich</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link underlining"
                       href="#my-portfolio-section">Projekte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link underlining"
                       href="#my-skills-section">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link underlining"
                       href="#my-resume-section">Laufbahn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link underlining"
                       href="#my-feedback-section">Stationen</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle underlining" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Leidenschaften
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Leidenschaft 1</a>
                        <a class="dropdown-item" href="#">Leidenschaft 1</a>
                        <a class="dropdown-item" href="#">Leidenschaft 1</a>
                        <a class="dropdown-item" href="#">Leidenschaft 1</a>
                        <a class="dropdown-item" href="#">Leidenschaft 1</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link underlining"
                       href="#my-contact-section">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>

</nav>-->

<header class="page-header">



    <!-- Header Background -->
    <div class="row align-items-end pb-5" id="header-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="container icon-container align-items-center justify-content-center">
                    <i class="fas fa-briefcase fa-2x" style="color:white"></i>
                </div>
            </div>
            <div class="row justify-content-center mt-4 section-title-white"
            >
                <h1 style="color:white">MEINE<span class="bg-me ml-2 p-2">LEIDENSCHAFTEN</span>
                </h1>
            </div>
        </div>
    </div>


</header>

<main id="main-content">
    <!-- HOBBYS -->
    <div class="container-fluid">


        <!-- Portfolio -->
        <div class="container pb-5" id="portfolio-tiles">
            <div class="grid m-auto" id="portfolio-content">
                <div class="element-item" data-category="">
                    <div class="img-hover-zoom">
                        <img
                                alt=""
                                class="img-fluid " onerror='this.onerror = null; this.src="img/articles/projects/dronegraphy/thumbnail_dronegraphy.png"'
                                src="img/articles/projects/dronegraphy/thumbnail_dronegraphy.webp">
                        <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                           data-target="#computerzusammenbau"
                           data-toggle="collapse" href="#project-description">
                            <div class="text">
                                <h4>computerzusammenbau</h4>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="element-item" data-category="">
                    <div class="img-hover-zoom ">
                        <img alt=""
                             class="img-fluid "
                             onerror='this.onerror = null; this.src="img/articles/projects/iotforum/thumbnail_iotforum.png"' src="img/articles/projects/iotforum/thumbnail_iotforum.webp">
                        <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                           data-target="#trading"
                           data-toggle="collapse" href="#project-description">
                            <div class="text">
                                <h4>trading</h4></div>
                        </a>
                    </div>
                </div>
                <div class="element-item" data-category="">
                    <div class="img-hover-zoom">
                        <img alt=""
                             class="img-fluid "
                             onerror='this.onerror = null; this.src="img/articles/projects/djigoesmindsphere/thumbnail_djimind.png"'
                             src="img/articles/projects/djigoesmindsphere/thumbnail_djimind.webp">
                        <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                           class="overlay"
                           data-target="#vrprogramming"
                           data-toggle="collapse" href="#project-description">
                            <div class="text">
                                <h4>vrprogramming</h4></div>
                        </a>
                        <a aria-label="Open Project Description" href="#project-description"></a>
                    </div>
                </div>
                <div class="element-item" data-category="">
                    <div class="img-hover-zoom">
                        <img alt="" class="img-fluid"
                             onerror='this.onerror = null; this.src="img/articles/projects/heatpower/thumbnail_heatpower.png"'
                             src="img/articles/projects/heatpower/thumbnail_heatpower.webp">
                        <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                           data-target="#drone"
                           data-toggle="collapse" href="#project-description">
                            <div class="text">
                                <h4>drone</h4></div>
                        </a>
                    </div>
                </div>
                <div class="element-item" data-category="">
                    <div class="img-hover-zoom">
                        <img alt="" class="img-fluid"
                             onerror='this.onerror = null; this.src="img/articles/projects/heatpower/thumbnail_heatpower.png"'
                             src="img/articles/projects/heatpower/thumbnail_heatpower.webp">
                        <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                           data-target="#drone"
                           data-toggle="collapse" href="#project-description">
                            <div class="text">
                                <h4>videoediting</h4></div>
                        </a>
                    </div>
                </div>



            </div>

        </div>


        <!-- PROJECT DESCRIPTIONS -->
        <div class="container" id="project-description">


            <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="computerzusammenbau">
                <div class="arrow-down m-auto"></div>
                <div class="row justify-content-end py-3 pr-5">

                    <a data-target="#computerzusammenbau" data-toggle="collapse"
                       href="#portfolio-icon">
                        <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>
                    </a>


                </div>
                <div class="row justify-content-center p-5">
                    <div class="col-12 text-center">
                        <img alt="dronegraphy" class="img-fluid lazy"
                             data-src="img/articles/projects/dronegraphy/dronegraphy.png">
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1>dronegraphy.de</h1>
                        <h3>Ein Marktplatz für Drohnenaufnahmen und Drohnen-Serivces</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-justify ">
                    <div class="col-md-8  blocktext px-5">
                        <p>Dieser Artikel wird fortlaufend erweitert sobald neue Informationen hinzukommen oder der
                            Status sich ändert.
                            <br>
                            <br>
                            01.09.2019 Idee: Mit Dronegraphy verfolge ich ein lang ersehntes Ziel, dass meine
                            Leidenschaft des Programmierens und der Drohnen miteinander kombiniert. Es soll eine Website
                            entstehen, auf welcher ich meine Drohnenaufnahmen, von denen ich noch reichlich auf Lager
                            habe, der Öffentlichkeit zur Verfügung gestellt werden. In unserem schnelllebigen
                            Informationszeitalter gehören Videos zu einem immer stärker werdenden Medium, durch das
                            Informationen authentischer überbracht werden. Sei es in der Lehre im Marketing oder sonst
                            einem anderen Bereich. Genau hier knüpfe ich mit Dronegraphy an und erstelle eine Plattform,
                            die zunächst damit beginnt nur meine Drohnenaufnahmen zum Kauf anzubieten. In einem weiteren
                            Schritt entsteht dann auch die Option für jedermann sich anzumelden und eigene Aufnahmen auf
                            Dronegraphy zu verkaufen. Ich werde dabei auf ein modernes und sehr nutzerfreundliches
                            Design großen Wert legen, so dass die Seite in Sachen Qualität und Performance hervorsticht.
                            Ferner füge ich auch langfristig auch eine Art Marketplace hinzu, durch die Fotografen mit
                            Drohnen ihre Dienstleistungen anbieten können. Das besondere an Dronegraphy ist die
                            Spezialisierung und die intensive Filterfunktion. Es geht rein um das Thema Drohnen. Es
                            werden Artikel und Newsletter erscheinen, die auf neue eine Gesetzgebung hinweisen und über
                            besondere Angebote informieren. Das geplante Startdatum habe ich vorerst auf Frühjahr 2020
                            gelegt. Ob ich für dieses Projekt ein vorgefertigtes CMS verwendet oder das Backend
                            vollständig selbst programmiere steht noch in den Sternen.
                            Du kannst aber definitiv gespannt bleiben. Mir ist jedoch wichtig, dass sich dieses Projekt
                            zeitlich in einem Rahmen befindet, welches es mir erlaubt nebensächlich daran zu arbeiten.
                            Einmal angelaufen, geht es eigentlich nur noch um einfache Wartungsarbeiten und den Support.
                            <br>
                            <br>
                            Nächster Schritt: Logo-Design</p>
                    </div>
                </div>
            </div>

            <!------------------------------------------------------------------------>
            <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="trading">
                <div class="arrow-down m-auto"></div>
                <div class="row justify-content-end py-3 pr-5">
                    <a data-target="#IoT-forum" data-toggle="collapse"
                       href="#portfolio-icon">
                        <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>
                    </a>
                    <!--  -->
                </div>
                <div class="row justify-content-center p-5">
                    <img alt="iotforum_image" class="lazy" data-src="img/articles/projects/iotforum/iotforum.jpg">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1>IoT Forum</h1>
                        <h3>Kurzbeschreibung</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-justify ">
                    <div class="col-md-8  blocktext px-5">
                        <p>In meinem Studium habe ich mich im Bereich der Industrie 4.0 spezialisiert und derzeit
                            arbeite
                            ich bei Siemens PLM Software im MindSphere Umfeld. Daher liegt es mir am Herzen meine
                            Erfahrungen und Kenntnisse in diesem Bereich zu teilen und Use Cases sowie die weitere
                            Entwicklung mit anderen Interessenten zu diskutieren. Hierzu werde ich jedoch ein modernes
                            IoT
                            Forum entwickeln, mit welchem sich Ingenieure untereinander austauschen können und ihre
                            Projekte
                            und aktuelle Themen diskutieren können. Was ich in aktuellen Foren vermisse, sind
                            Anleitungen zu
                            IoT Projekten, die einfach nachgebaut werden können. Eine Domain steht hierfür noch nicht
                            fest,
                            da ich dieses Projekt erst nach Dronegraphy beginnen werde. Auch ein genauer Funktionsumfang
                            ist
                            noch nicht definiert. Was jedoch feststeht ist, dass vor allem auf das Design und die
                            Reichweite
                            großen Wert gelegt wird und ich mit den ersten Thread bzw. Anleitung mit meinem Projekt ‘DJI
                            goes MindSphere’ beginnen werde.</p>
                    </div>
                </div>
            </div>


            <!------------------------------------------------------------------------>
            <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="vrprogramming">
                <div class="arrow-down m-auto"></div>
                <div class="row justify-content-end py-3 pr-5">
                    <a data-target="#DJI-goes-MindSphere" data-toggle="collapse"
                       href="#portfolio-icon">
                        <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>
                    </a>
                </div>
                <div class="row justify-content-center p-5">
                    <img alt="" class="img-fluid lazy"
                         data-src="img/articles/projects/djigoesmindsphere/thumbnail_djimind.png">
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1>DJI goes MindSphere</h1>
                        <h3>Kurzbeschreibung</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-justify ">
                    <div class="col-md-8  blocktext px-5">
                        <p>Bald bin ich nun fast über ein Jahr in der MindSphere Academy, in der wir andere Unternehmen
                            und
                            Personen dazu befähigen MindSphere in vollem Umfang zu nutzen. Auch ich habe bis auf das
                            ‘Edge
                            Analytics’ Training nun alle Trainings besucht und will aktiv meine erlangten Kenntnisse im
                            IoT
                            Umfeld mit meinem ersten Projekt in MindSphere anwenden. Dazu nutze, wie man fast ahnen
                            könnte,
                            meine Drohne, die nur so vollgepackt ist mit Sensoren. Damit will ich auch gleichzeitig
                            zeigen,
                            dass man mittlerweile fast jeden sonst wo verbauten Sensor auf irgendeine Art mit MindSphere
                            verknüpfen kann. Meine Mavic Pro von DJI eignet sich meiner Ansicht nach bestens für dieses
                            Projekt, da ich als Mitarbeiter sowieso schon kostenfreien Zugang zu einem MindSphere Tenant
                            habe. Gleichzeitig nutze ich dieses eigene Projekt auch um mich leichter als ‘IoT
                            Application
                            Developer’ und ‘Cloud Solution Architect’ zertifizieren zu lassen und versuche meine Zeit in
                            der
                            Academy nach dem Master so optimal wie möglich zu nutzen und nicht nur als Übergangsphase.
                            Für
                            das Projekt werde ich die MindConnect IoT Extension sowie MQTT verwenden. Was nun noch erst
                            von
                            meiner Seite entwickelt werden muss, ist eine iOS App, mit welcher sämtliche Daten aus der
                            DJI
                            GO App herausgelesen werden können und diese über MQTT und der integrierten IoT Extension
                            App
                            von MindSphere in die Cloud laden. Was im Anschluss mit den Daten passiert, werde ich
                            vermutlich
                            erst im Laufe der Entwicklungsphase genauer festlegen. Du kannst auf jeden Fall gespannt
                            bleiben! </p>
                    </div>
                </div>
            </div>

            <!------------------------------------------------------------------------>
            <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="drones">
                <div class="arrow-down m-auto"></div>
                <div class="row justify-content-end py-3 pr-5">
                    <a data-target="#heatpower" data-toggle="collapse"
                       href="#portfolio-icon">
                        <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>
                    </a>
                </div>
                <div class="row justify-content-center p-5">
                    <div class="col text-center">
                        <div class="carousel slide project-description-slider" data-interval="false"
                             data-ride="carousel"
                             id="heatpower_indicators">
                            <ol class="carousel-indicators p-5">
                                <li class="active" data-slide-to="0" data-target="#heatpower_indicators"></li>
                                <li data-slide-to="1" data-target="#heatpower_indicators"></li>
                                <li data-slide-to="2" data-target="#heatpower_indicators"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img alt="First slide"
                                         class="d-block w-100 lazy"
                                         data-src="img/articles/projects/heatpower/Logo_Nr.7-BlackRed.png">
                                </div>
                                <div class="carousel-item">
                                    <img alt="Second slide"
                                         class="d-block w-100 lazy"
                                         data-src="img/articles/projects/heatpower/Logo_Nr.7-BlackRed.png">
                                </div>
                                <div class="carousel-item">
                                    <img alt="Third slide"
                                         class="d-block w-100 lazy"
                                         data-src="img/articles/projects/heatpower/Logo_Nr.7-BlackRed.png">
                                </div>
                            </div>
                            <a class="carousel-control-prev" data-slide="prev" href="#heatpower_indicators"
                               role="button">
                                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-slide="next" href="#heatpower_indicators"
                               role="button">
                                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1>Heat & Power</h1>
                        <h3>Entwicklung einer vollständigen Webpräsenz der Firma 'Heat & Power' inklusive geschäftlicher
                            Beratung</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-justify ">
                    <div class="col-md-8  blocktext px-5">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo
                            duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                            dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod
                            tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam
                            et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem
                            ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

            <!------------------------------------------------------------------------>
            <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="videoediting">
                <div class="arrow-down m-auto"></div>
                <div class="row justify-content-end py-3 pr-5">
                    <a data-target="#Homepage" data-toggle="collapse"
                       href="#portfolio-icon">
                        <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                        </svg>
                    </a>
                </div>
                <div class="row justify-content-center p-5">
                    <div class="col text-center">
                        <div class="carousel slide project-description-slider" data-interval="false"
                             data-ride="carousel"
                             id="homepage_indicator">
                            <ol class="carousel-indicators">
                                <li class="active" data-slide-to="0" data-target="#homepage_indicator"></li>
                                <li data-slide-to="1" data-target="#homepage_indicator"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img alt="First slide"
                                         class="img-fluid lazy"
                                         data-src="img/articles/projects/homepage/developing_website.png">
                                </div>
                                <div class="carousel-item">
                                    <img alt="Second slide" class="img-fluid lazy"
                                         data-src="img/articles/projects/homepage/homepage.png">
                                </div>

                            </div>
                            <a class="carousel-control-prev" data-slide="prev" href="#homepage_indicator"
                               role="button">
                                <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" data-slide="next" href="#homepage_indicator"
                               role="button">
                                <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6 text-center">
                        <h1>Meine Homepage</h1>
                        <h3>Kurzbeschreibung</h3>
                    </div>
                </div>
                <div class="row justify-content-center text-justify ">
                    <div class="col-md-8  blocktext px-5">
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt
                            ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
                            justo
                            duo
                            dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum
                            dolor
                            sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                            eirmod
                            tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam
                            et
                            justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                            Lorem
                            ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>


</main>


<footer>
    <div class="container-fluid" id="footer-section">
        <div class="container pt-5">
            <div class="row align-items-center pt-5">
                <div class="container  ">
                    <div class="row justify-content-center">
                        <a href="impressum.php">Impressum</a>
                        <a>|</a>
                        <a href="datenschutz.php">Datenschutz</a>
                    </div>
                    <div class="row justify-content-center mt-1">
                        <p>&copy; Qendrim Vllasa 2019</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--<script>-->
<script src="js/vendor/modernizr-3.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-3.4.1.js"></script>
<script src="js/plugins.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/dcc0002124.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.0.1/progressbar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
<script src="js/main_blog.js"></script>


<!--<script>
  window.ga = function () {
    ga.q.push(arguments)
  };
  ga.q = [];
  ga.l = +new Date;
  ga('create', 'UA-XXXXX-Y', 'auto');
  ga('set', 'transport', 'beacon');
  ga('send', 'pageview')
</script>
<script src="https://www.google-analytics.com/analytics.js" async></script>-->
</body>

</html>
