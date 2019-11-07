<div class="container-fluid portfolio-section pt-5 pb-4" id="my-portfolio-section">
    <!--icon-->
    <div class="container on-animate" id="portfolio-icon">
        <div class="row justify-content-center">
            <div class="container icon-container align-items-center justify-content-center">
                <svg class="main-icon" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z"
                          fill="white"></path>
                </svg>
            </div>
        </div>
        <div class="row justify-content-center mt-4 section-title-white"
        >
            <h1 style="color:white">MY<span class="bg-me ml-2 p-2">PROJECTS</span></h1>
        </div>
    </div>
    <!-- sections links -->
    <div class="container mt-5 mb-2 on-animate" id="portfolio-section-links">
        <div class="row justify-content-center">

            <div class="port-filter button-group filters">
                <ul>
                    <li>
                        <a class="link-element is-checked " data-filter="*" id="all-projects-link"><span
                            >All</span></a>
                    </li>
                    <li>
                        <a class="link-element" data-filter=".planning" id="latest-projects-link"><span
                            >Next</span></a>
                    </li>
                    <li>
                        <a class="link-element " data-filter=".current"
                           id="upcoming-projects-link"><span>Current</span></a>
                    </li>
                    <li>
                        <a class="link-element" data-filter=".done"
                           id="archived-projects-link"><span>Finished</span></a>
                    </li>
                </ul>
            </div>


        </div>
    </div>
    <!-- Portfolio -->
    <div class="container on-animate pb-5" id="portfolio-tiles">
        <div class="grid m-auto" id="portfolio-content">
            <div class="element-item planning" data-category="planning">
                <div class="img-hover-zoom">
                    <img
                            alt="dronegraphy"
                            class="img-fluid "
                            onerror='this.onerror = null; this.src="img/articles/projects/dronegraphy/thumbnail_dronegraphy.png"'
                            src="img/articles/projects/dronegraphy/thumbnail_dronegraphy.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                       data-target="#dronegraphy"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>dronegraphy.de</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="element-item planning" data-category="planning">
                <div class="img-hover-zoom ">
                    <img alt="iotforum"
                         class="img-fluid "
                         onerror='this.onerror = null; this.src="img/articles/projects/iotforum/thumbnail_iotforum.png"'
                         src="img/articles/projects/iotforum/thumbnail_iotforum.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                       data-target="#IoT-forum"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>IoT-Forum</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item current " data-category="current">
                <div class="img-hover-zoom">
                    <img alt="djigoesmindsphere"
                         class="img-fluid "
                         onerror='this.onerror = null; this.src="img/articles/projects/djigoesmindsphere/thumbnail_djimind.png"'
                         src="img/articles/projects/djigoesmindsphere/thumbnail_djimind.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#DJI-goes-MindSphere"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>DJI&nbsp;goes&nbsp;MindSphere</h4></div>
                    </a>
                    <a aria-label="Open Project Description" href="#project-description"></a>
                </div>
            </div>
            <div class="element-item current" data-category="current">
                <div class="img-hover-zoom">
                    <img alt="heatandpower" class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/heatpower/thumbnail_heatpower.png"'
                         src="img/articles/projects/heatpower/thumbnail_heatpower.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                       data-target="#heatpower"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Webdesign&nbsp;&amp;&nbsp;Consulting</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item current " data-category="current">
                <div class="img-hover-zoom">
                    <img alt="myhomepage" class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/homepage/thumbnail_homepage.png"'
                         src="img/articles/projects/homepage/thumbnail_homepage.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                       data-target="#Homepage"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Webdesign&nbsp;Homepage</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom">
                    <img alt="vffactorio"
                         class=" img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/vrfactorio/thumbnail_vrfactorio.png"'
                         src="img/articles/projects/vrfactorio/thumbnail_vrfactorio.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                       data-target="#VR-Factorio"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>VR&nbsp;Factorio</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom">
                    <img alt="virtualtwin"
                         class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/virtual_twin/thumbnail_virtualtwin.png"'
                         src="img/articles/projects/virtual_twin/thumbnail_virtualtwin.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true" class="overlay"
                       data-target="#VirtualTwin"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Virtual&nbsp;Twin</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom">
                    <img alt="trainingtool" class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/training_tool/thumbnail_tt.png"'
                         src="img/articles/projects/training_tool/thumbnail_tt.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#TrainingTool"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Training&nbsp;Tool</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom">
                    <img alt="materialgenerator"
                         class=" img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/material_generator/thumbnail_mg.png"'
                         src="img/articles/projects/material_generator/thumbnail_mg.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#MaterialGenerator"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Material&nbsp;Generator</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom">
                    <img alt="certificategenerator"
                         class=" img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/certificate_generator/thumbnail_cf.png"'
                         src="img/articles/projects/certificate_generator/thumbnail_cf.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#CertificateGenerator"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Certificate&nbsp;Generator</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom text-center">
                    <img alt="passwordgenerator" class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/password_manager/thumbnail_pm.png"'
                         src="img/articles/projects/password_manager/thumbnail_pm.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#PasswordManager"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Password&nbsp;Manager</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done" data-category="done">
                <div class="img-hover-zoom">
                    <img alt="moviemaking" class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/crete/thumbnail_crete.png"'
                         src="img/articles/projects/crete/thumbnail_crete.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#latest-movies"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>Latest&nbsp;Filmmaking</h4></div>
                    </a>
                </div>
            </div>
            <div class="element-item done " data-category="done">
                <div class="img-hover-zoom">
                    <img alt="macossupport" class="img-fluid"
                         onerror='this.onerror = null; this.src="img/articles/projects/macos/thumbnail_macos.png"'
                         src="img/articles/projects/macos/thumbnail_macos.webp">
                    <a aria-controls="collapseExample" aria-expanded="false" aria-hidden="true"
                       class="overlay"
                       data-target="#macOSMojaveSupport"
                       data-toggle="collapse" href="#project-description">
                        <div class="text ">
                            <h4>macOS&nbsp;Support</h4></div>
                    </a>
                </div>
            </div>


        </div>
    </div>
    <!-- PROJECT DESCRIPTIONS -->
    <div class="container" id="project-description">


        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="dronegraphy">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">

                <a data-target="#dronegraphy" data-toggle="collapse"
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
                <div class="col-10 col-10 col-md-6 text-center">
                    <h1>dronegraphy.de</h1>
                    <h3>A marketplace for drone recordings and drone services</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>This article will be continuously updated as new information is added or the status changes.
                        <br>
                        <br>
                        01.09.2019 Idea: With Dronegraphy I'm pursuing a long-awaited goal that combines my passion for
                        programming and drones. I want to create a website on which my drone recordings, which I still
                        have a lot of in stock, will be made available to the public. In our fast-paced information age,
                        videos are an increasingly powerful medium for delivering information more authentically. Be it
                        in teaching in marketing or any other field. Exactly here I tie up with Dronegraphy and create a
                        platform, which initially begins to offer only my drone recordings for sale. In a further step I
                        create the option for everyone to register and sell their own recordings on Dronegraphy. I will
                        attach great importance to a modern and very user-friendly design, so that the site stands out
                        in terms of quality and performance. I'm also adding a long-term Art Marketplace that allows
                        photographers with drones to offer their services. The special thing about Dronegraphy is the
                        specialization and the intensive filter function. It's all about drones. Articles and
                        newsletters will appear, which point out new legislations and inform about special offers. For
                        the time being, I have set the planned start date for spring 2020. Whether I use a prefabricated
                        CMS for this project or program the backend completely by myself is still in the stars. But you
                        can definitely stay excited. However, it is important to me that this project is within a
                        timeframe that allows me to work on it in a marginal way. Once started, it's just a matter of
                        simple maintenance and support.
                        <br>
                        <br>
                        Next step: Logo design

                    </p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">

                <a data-target="#dronegraphy" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>


            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="IoT-forum">
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
                <div class="col text-center">
                    <img alt="iotforum_image" class="img-fluid lazy"
                         data-src="img/articles/projects/iotforum/iotforum.jpg">
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>IoT Forum</h1>
                    <h3>IoT can also be simple with enough support!</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>During my studies I specialized in the field of industry 4.0 and currently I work at Siemens PLM
                        Software in the MindSphere environment. Therefore it is close to my heart to share my experience
                        and knowledge in this area and to discuss use cases and further development with other
                        interested parties. For this purpose I will develop a modern IoT forum where engineers can
                        exchange ideas and discuss their projects and current topics. What I miss in current forums are
                        instructions for IoT projects that can be easily rebuilt. A domain for this is not fixed yet,
                        because I will start this project after Dronegraphy. Also an exact function range is not yet
                        defined. What is certain, however, is that great importance is attached above all to the design
                        and the range and I will begin with the first thread and/or guidance with my project 'DJI goes
                        MindSphere'.
                    </p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#IoT-forum" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
                <!--  -->
            </div>
        </div>


        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="DJI-goes-MindSphere">
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
                <div class="col-12 text-center">
                    <img alt="" class="img-fluid lazy"
                         data-src="img/articles/projects/djigoesmindsphere/thumbnail_djimind.png">
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>DJI goes MindSphere</h1>
                    <h3>Link the sensor data of a drone to MindSphere</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Soon I will be in the MindSphere Academy for almost a year, where we will enable other companies
                        and individuals to use MindSphere to its full potential. I also attended all trainings except
                        the 'Edge Analytics' training and want to actively apply my knowledge in the IoT environment
                        with my first project in MindSphere. As you could almost guess, use my drone, which is packed
                        with sensors. At the same time I want to show that you can connect almost any sensor with
                        MindSphere. In my opinion my Mavic Pro from DJI is very suitable for this project, as I already
                        have free access to a MindSphere Tenant as an employee. At the same time I use this own project
                        to get certified as 'IoT Application Developer' and 'Cloud Solution Architect' easier and try to
                        use my time in the Academy after the Master as best as possible and not only as a transition
                        phase. For the project I will use the MindConnect IoT Extension and MQTT. What I still have to
                        develop is an iOS App, with which all data can be read out of the DJI GO App and loaded into the
                        cloud via MQTT and the integrated IoT Extension App from MindSphere. What will happen with the
                        data afterwards, I will probably define in more detail in the course of the development phase.
                        You can stay curious in any case!
                    </p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#DJI-goes-MindSphere" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="heatpower">
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
                <div class="col-10 col-md-6 text-center">
                    <h1>Heat & Power</h1>
                    <h3>Development of a complete website for the company 'Heat & Power' including marketing and
                        business advice</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The results of my work with the company 'Heat & Power', which specialises in innovative and
                        environmentally friendly heating systems, will be published here shortly. Stay tuned!</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#heatpower" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="Homepage">
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
                <div class="col-10 col-md-6 text-center">
                    <h1>My Homepage</h1>
                    <h3>Get a comprehensive overview of me!</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 mt-2">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Hi, and thanks for visiting my homepage. :)
                        <br>
                        <br>
                        In today's world online marketing plays an increasingly important role and I am spreading
                        rapidly on all channels. I wonder now when a peak has been reached here or if one can be reached
                        at all! Nevertheless, this is an unstoppable train, which I am less interested in. I am
                        particularly interested in the technologies behind it. That's why I'm now taking another big
                        step into web development with a completely self-developed homepage and marketing something with
                        it, namely Mich. By 'me' I mean my skills and competences, which I have now accumulated in my
                        career and do not want to withhold from anyone, because in today's world quality makes the
                        difference. With my own homepage, which runs on my own server in Falkenstein, I would like to
                        draw your attention to the quality and diligence of mine. For the website I used the Bootstrap 4
                        Framework, CSS3, JavaScript and PHP. Unfortunately I had the idea to use SCSS quite late, which
                        would have saved me a lot of time. Nevertheless, I am glad that you are now perhaps still
                        further on my homepage rumbs and we, if I have convinced you, soon successfully cooperate.
                        <br>
                        <br>
                        This project will probably be classified as 'Current' for a longer time, because I am always
                        expanding and optimizing the site and will soon switch to Angular.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#Homepage" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="VR-Factorio">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#VR-Factorio" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center" id="vimeo_vrfactorio">
                <div class="col-md-12 text-center m-0 embed-responsive embed-responsive-16by9 px-5">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/359957410" width="640"
                            height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>VR Factorio</h1>
                    <h3>Core Developer in the project 'VR-Factorio' within a Virtual Engineering internship</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 mt-2">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The aim of the entire internship was to introduce students to the technology of Virtual Reality
                        and to show them its possibilities. The lecture Virtual Engineering was already incredibly
                        interesting, but without being able to apply the knowledge, such knowledge quickly fades into
                        the background in the long run. Therefore I wanted to complement the theory with practice and so
                        I was fascinated by the technology of virtual reality in the context of a Virtual Reality or
                        Virtual Engineering internship on the project 'VR Factorio' and applied successfully as a core
                        developer for several months to deepen my knowledge in the field of VR and apply this
                        specifically. I was also interested in advancing my programming skills in order to give my
                        specialization in industry 4.0 a solid foundation. The game Factorio deals with the topic
                        production structure and the defense of attackers on a foreign planet. With a player that you
                        could control with the keyboard, you had to collect resources and build production facilities
                        from them, which eventually formed entire production lines including transport routes. Due to
                        the extensive subject matter, our entire team consisted of eight people, four of whom were
                        responsible for modelling the assets and four others, including myself, for communication
                        between the game and the VR interface 'PolyVR' specially developed at the institute. The goal of
                        the whole project was to run the game 'Factorio' in the backend and to manage the control and
                        playability of the game in the frontend under 'PolyVR'. My main tasks were the programming of
                        the controls, the playable level as well as all camera perspectives and the assignment of the
                        keyboard inputs. I also took care of the project video. From my point of view a very successful
                        project, which exactly met my taste. We were allowed to carry out all test runs in a so-called
                        CAVE (CAVE Automated Virtual Environment), in which you were virtually in the middle of the
                        virtual scene, but collaboration with other colleagues could take place simultaneously without
                        any problems, since several people could be in a CAVE. I particularly enjoyed the lively
                        discussions, in which one could actively express one's suggestions and suggestions, but at the
                        same time criticize the working methods of other team members. All in all, however, it was a
                        very exciting and experiential time in which I was able to refine my skills once again. In the
                        end we created a virtual reality game out of a commercial game, which would not only be playable
                        in a CAVE but also on an Oculus Rift.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#VR-Factorio" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="VirtualTwin">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#VirtualTwin" data-toggle="collapse"
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
                         id="virtualtwin_indicators">
                        <ol class="carousel-indicators bg-light">
                            <li class="active" data-slide-to="0" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="1" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="2" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="3" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="4" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="5" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="6" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="7" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="8" data-target="#virtualtwin_indicators"></li>
                            <li data-slide-to="9" data-target="#virtualtwin_indicators"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img alt="First slide"
                                     class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/MA_Thesis_cover.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/VIz1.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/Viz2.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/VIz3.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/VIz4.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/GUI1.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/GUI2.png">
                            </div>
                            <div class="carousel-item">
                                <img alt="Second slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/GUI3.png">
                            </div>
                            <div class="carousel-item">
                                <img alt="Third slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/GUI4.png">
                            </div>
                            <div class="carousel-item">
                                <img alt="Third slide" class="img-fluid lazy"
                                     data-src="img/articles/projects/virtual_twin/GUI5.png">
                            </div>
                        </div>
                        <a class="carousel-control-prev" data-slide="prev" href="#virtualtwin_indicators"
                           role="button">
                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" data-slide="next" href="#virtualtwin_indicators"
                           role="button">
                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>Virtual Twin</h1>
                    <h3>Methodology and implementation of automated plant virtualization</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 ">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>With the so-called Virtual Twin, I have moved into a rather young field of research within the
                        scope of my master thesis, which still has a lot of potential. In my master thesis with the
                        topic 'Automated virtualization of systems by combining ECAD, MCAD and programming' I opened up
                        a completely new field of research for the Institute for Information Management in Engineering.
                        I must add that the original title from the call for proposals was different, because it is
                        common for tasks to expand rapidly in such dynamic projects. For this reason, the official title
                        in my final documents differs slightly from the title under which my work was submitted and
                        published. The goal was to virtualize an existing product development process and move from
                        digital engineering to virtual engineering. The starting point was an extruder of the company
                        Gabler Engineering GmbH. I first analyzed all mechanical and electrical CAD data as well as the
                        entire programming and then used the VR interface 'PolyVR' to link these data in a virtual
                        reality environment. The special thing about this topic was that the machine in its entirety was
                        also made functional under the virtual reality environment. This means that the model of the
                        extruder could be switched on and operated in virtual reality, since all electronics, mechanics
                        and programming were interlocked. The usual digital engineering process requires the machine to
                        be built first in order to initiate validation steps, but with my developed methodology this may
                        not be necessary in the future. Another advantage of my work is that existing design and
                        development processes do not have to be fundamentally changed, which saves time and money.
                        Furthermore, the sensor data could be read out to cover the topic of IoT. My work also served as
                        a use case for virtual reality technology. For example, Gabler could remotely monitor the
                        machine using my program, as they have a realistic virtual representation in a virtual
                        environment on their own premises. For the development of my methodology I used the programming
                        language Python to process the data in the VR interface and C# to develop an export interface
                        from TIA Portal and EPLAN. I used JavaScript and HTML for the Graphical User Interface within
                        the virtual scene. All in all, the project was great fun for me, as I not only learned a lot,
                        but also gained deep insights into the product development process. What's more, my work dealt
                        with a topic that was perfectly tailored to my needs and required a high potential of
                        problem-solving competence. I am proud of the result and firmly convinced. A copy of the master
                        thesis can be requested from the Institute for Information Management in Engineering at KIT.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#VirtualTwin" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="TrainingTool">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#TrainingTool" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center p-5">
                <div class="col text-center p-5">
                    <div class="carousel slide project-description-slider" data-interval="false"
                         data-ride="carousel"
                         id="trainingtool_indicators">
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#trainingtool_indicators"></li>
                            <li data-slide-to="1" data-target="#trainingtool_indicators"></li>
                            <li data-slide-to="2" data-target="#trainingtool_indicators"></li>
                            <li data-slide-to="3" data-target="#trainingtool_indicators"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img alt="Third slide"
                                     class="img-fluid lazy"
                                     data-src="img/articles/projects/training_tool/tt_icon_sm.png">
                            </div>
                            <div class="carousel-item ">
                                <img alt="First slide"
                                     class="img-fluid lazy"
                                     data-src="img/articles/projects/training_tool/tt_screenshot1.png">
                            </div>
                            <div class="carousel-item">
                                <img alt="Second slide"
                                     class="img-fluid lazy"
                                     data-src="img/articles/projects/training_tool/tt_screenshot2.png">
                            </div>
                            <div class="carousel-item">
                                <img alt="Third slide"
                                     class="img-fluid lazy"
                                     data-src="img/articles/projects/training_tool/tt_screenshot3.png">
                            </div>

                        </div>
                        <a class="carousel-control-prev" data-slide="prev" href="#trainingtool_indicators"
                           role="button">
                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" data-slide="next" href="#trainingtool_indicators"
                           role="button">
                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>Training Tool</h1>
                    <h3>Water marking, certification and dispatch all in one</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 ">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>With the 'Training Tool', on which I worked a little longer, a more comprehensive tool based on
                        Python and QT has been created, which combines several work processes within the MindSphere
                        Academy and thus also automates them. This enabled me to save about 80% of my time. The tool,
                        which can also filter Excel lists, automatically collects all information about participants,
                        creates the corresponding material and certificate and finally opens a personalized e-mail,
                        which is sent to the participants after the training, including the files. In addition, several
                        people can work with it at the same time. As with all other tools that I developed before, I was
                        given full responsibility for this, so that at the beginning only the problem was briefly
                        discussed and a little later I presented a ready-made solution. The 'Training Tool' is also
                        based on open source libraries and is therefore published by me under Github. As in my other
                        tools, I prefer an object-oriented development approach, which allows the tool to be easily
                        extended with additional functionalities and adapted if necessary. For further information like
                        architecture etc. a discussion thread can be opened in Github.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#TrainingTool" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="MaterialGenerator">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#MaterialGenerator" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center p-5">

                <div class="col-12 text-center">
                    <img alt="" class="img-fluid lazy"
                         data-src="img/articles/projects/material_generator/m_generator.png" style="max-height: 500px">
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>Material Generator</h1>
                    <h3>For the generation of water-labelled PDF files</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 ">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The 'Material Generator Tool' was one of the first smaller programming tasks I had at MindSphere
                        Academy. The goal of this small and simple but effective tool was to put an individual watermark
                        on the training material after the training. Previously this had to be done manually, which
                        saved a lot of time from the time the tool was used. The tool is based on C# and was developed
                        in the Visual Studio development environment using open source libraries. Today the tool is no
                        longer used because it was replaced by another program written by me, the 'Training Tool'.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#MaterialGenerator" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="CertificateGenerator">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#CertificateGenerator" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center p-5">
                <div class="col-12 text-center">
                    <img alt="" class="img-fluid lazy"
                         data-src="img/articles/projects/certificate_generator/cf_generator.png"
                         style="max-height: 500px">
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>Certificate Generator</h1>
                    <h3>For the generation of individual attendance certificates</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Just like the 'Material Generator Tool', I developed the 'Certificate Generator Tool' within a
                        very short time, which can be used to generate a large number of individual certificates for the
                        participants after the training. This tool is also based on C# and Open Source libraries. Today
                        this tool is also no longer used, as it has been replaced by the larger and more comprehensive
                        'Training Tool'.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#CertificateGenerator" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="PasswordManager">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#PasswordManager" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center p-5">


                <div class="col-12 text-center">
                    <img alt="password manager image" class="img-fluid lazy"
                         data-src="img/articles/projects/password_manager/pw_manager_screenshot.png"
                         style="transform: scale(1.5)">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>Password Manager</h1>
                    <h3>To change passwords of many accounts simultaneously</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The 'Password Manager' has the goal to change passwords for MindSphere accounts. The only thing
                        you can store in the Password Manager are the account names, which of course I will not publish
                        in Github. The program is based on Python using PyQT and Selenium among others and automates the
                        whole process for changing passwords for more than 100 accounts and then generates a Word file
                        in a certain format where errors can be found. Also here I insisted on a user friendly GUI, so
                        that a layman doesn't have to learn the scripts forever. The 'Password Manager' is still used
                        regularly today and is an integral part of password management, which is also part of my work at
                        the MDSP Academy.</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#PasswordManager" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="latest-movies">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#latest-movies" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center" id="vimeo_movies">
                <div class="col-md-12 text-center m-0 embed-responsive embed-responsive-16by9 px-5">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/355854154" width="640"
                            height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>


            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>My Trip to Mexico</h1>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Only recently, I once again had the desire for a creative phase to, as I like to say, fill up my
                        reserves. This resulted in two films with different shots from Mexico, Kosovo and Crete. Since
                        my own homepage has gone online in the meantime, I uploaded it to Vimeo for the first time,
                        because Vimeo is known for its professional content. So I will continue to upload all my
                        creations to Vimeo in the future. One of the movies (about Mexico) can already be seen above
                        this article. I've published more movies, but they were much shorter and less extensive. You can
                        watch them on my Instagram account or under my passions.
                        <br>
                        I hope you like them and that you will be captivated by spectacular voyages of discovery!</p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#latest-movies" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>

        <!------------------------------------------------------------------------>
        <div class="collapse mb-3 custom-border bg-white" data-parent="#main-content" id="macOSMojaveSupport">
            <div class="arrow-down m-auto"></div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#macOSMojaveSupport" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
            <div class="row justify-content-center">
                <img alt="" class="lazy" data-src="img/articles/projects/macos/macOS_image.png">


            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-6 text-center">
                    <h1>macOS Support</h1>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>For over 4 years now I have built up a deep expertise in Apple's operating systems. Today this is
                        enough for me to be able to take on orders from time to time through various channels, where my
                        customers have problems upgrading because their Mac is too outdated. I support them wherever I
                        can, remotely or on-site. I mainly make changes to the so-called bootloaders and manipulate DSDT
                        and SSDT files (BIOS files), which contain the functionalities of a computer and are read by the
                        operating system. In my last order from August 2019 I made two Macs from 2009 and 2011 fully
                        functional again, so that they can continue to install the latest macOS operating system in the
                        future. I also had to do some hardware repairs to ensure compatibility. To date, I have been
                        able to successfully help around 40 customers in this way and earn some money in addition to my
                        studies. Nowadays I only accept orders from old regular customers, because I simply don't have
                        the time for scaling this branch of business and I prefer to deepen my knowledge in other areas
                        as well.
                    </p>
                </div>
            </div>
            <div class="row justify-content-end py-3 pr-5">
                <a data-target="#macOSMojaveSupport" data-toggle="collapse"
                   href="#portfolio-icon">
                    <svg class="main-icon img-fluid" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8zm121.6 313.1c4.7 4.7 4.7 12.3 0 17L338 377.6c-4.7 4.7-12.3 4.7-17 0L256 312l-65.1 65.6c-4.7 4.7-12.3 4.7-17 0L134.4 338c-4.7-4.7-4.7-12.3 0-17l65.6-65-65.6-65.1c-4.7-4.7-4.7-12.3 0-17l39.6-39.6c4.7-4.7 12.3-4.7 17 0l65 65.7 65.1-65.6c4.7-4.7 12.3-4.7 17 0l39.6 39.6c4.7 4.7 4.7 12.3 0 17L312 256l65.6 65.1z"></path>
                    </svg>
                </a>
            </div>
        </div>


    </div>

</div>
