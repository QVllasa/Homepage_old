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
                            alt=""
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
                    <img alt=""
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
                    <img alt=""
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
                    <img alt="" class="img-fluid"
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
                    <img alt="" class="img-fluid"
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
                    <img alt=""
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
                    <img alt=""
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
                    <img alt="" class="img-fluid"
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
                    <img alt=""
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
                    <img alt=""
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
                    <img alt="" class="img-fluid"
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
                    <img alt="" class="img-fluid"
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
                    <img alt="" class="img-fluid"
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
                    <h3>Ein Marktplatz für Drohnenaufnahmen und Drohnen-Serivces</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>This article will be continuously updated as new information is added or as new information
                        becomes available.
                        Status changes.
                        <br>
                        <br>
                        01.09.2019 Idea: With Dronegraphy I am pursuing a long-awaited goal, which my
                        Passion of programming and drones combined with each other. It should be a website
                        on which I will make my drone recordings, of which I still have plenty in stock.
                        be made available to the public. In our fast-paced
                        information age, videos belong to a medium that is becoming more and more powerful, by which
                        information more authentically. Be it in the teaching of marketing or otherwise
                        another area. Exactly here I connect with Dronegraphy and create a platform,
                        who's beginning to offer only my drone recordings for sale. In another
                        step, there is also the option for everyone to register and make their own recordings on the
                        Dronegraphy for sale. I am going to be looking at a modern and very user-friendly
                        design, so that the site stands out in terms of quality and performance.
                        In the long run, I will also add a kind of Marketplace where photographers can
                        drones can offer their services. The special thing about Dronegraphy is the
                        specialization and the intensive filter function. It's all about drones. It
                        articles and newsletters will appear, which point to new legislations and provide information
                        about
                        special offers. I have the planned start date for the time being on spring 2020.
                        in the first place. Whether I am using a ready-made CMS for this project or the backend
                        completely self-programming is still in the stars.
                        But you can definitely stay curious. However, it is important to me that this project is
                        is within a timeframe that allows me to work on it in an insignificant way.
                        Once started, it's just a matter of simple maintenance and support.
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
                    <h3>IoT kann auch einfach sein mit genug Unterstützung!</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>In my studies I have specialized in the field of industry 4.0 and currently
                        work
                        at Siemens PLM Software in the MindSphere environment. That's why it's so important to me to
                        have my
                        to share experience and knowledge in this area and use cases as well as the further
                        development with other interested parties. For this purpose, however, I will present a modern
                        IoT
                        forum, with which engineers can exchange ideas and experience with each other, and to
                        projects
                        and discuss current topics. What I miss in current forums are
                        Instructions for
                        IoT projects that can be easily replicated. A domain for this does not yet exist
                        solid,
                        because I won't start this project until after Dronegraphy. Also an exact range of functions
                        is
                        is not yet defined. What is certain, however, is that the main focus is on the design and the
                        range
                        and I will be with the first thread and instructions with my project 'DJI
                        goes MindSphere' will begin.

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
                    <h3>Verknüpfe die Sensordaten einer Drohne mit MindSphere</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Soon I am now almost over a year in the MindSphere Academy, where we have other companies
                        and
                        Enable people to use MindSphere to its full extent. I too have, except for the
                        Edge
                        Analytics' Training now attends all trainings and wants to actively use the knowledge I have
                        gained in the
                        IoT
                        environment with my first project in MindSphere. To do this, use how you can almost guess
                        could,
                        my drone, just so packed with sensors. With it I want also at the same time
                        show,
                        that you can now use almost every sensor installed elsewhere with MindSphere in some way.
                        can link. In my opinion my Mavic Pro from DJI is best suited for this
                        project, because as an employee I already have free access to a MindSphere Tenant
                        I have. At the same time I also use this own project to make myself lighter than 'IoT
                        application
                        Developer' and 'Cloud Solution Architect' and try to certify my time in
                        that
                        Academy as optimally as possible after the Master's and not just as a transition phase.
                        For
                        the project I will use the MindConnect IoT extension as well as MQTT. What I'm going to do now
                        by
                        of my site, is an iOS app, with which all the data from the
                        DJI
                        GO App and can be read via MQTT and the integrated IoT Extension.
                        app
                        from MindSphere to the cloud. What happens to the data afterwards, I will do
                        probable
                        only in the course of the development phase. In any case, you can be curious about
                        stay!

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
                    <h3>Entwicklung einer vollständigen Webpräsenz der Firma 'Heat & Power' samt marketingtechnischer
                        und geschäftlicher
                        Beratung</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Soon the results of my work with the company 'Heat & Power' will be published here.
                        the innovative and environmentally friendly heating construction. Stay
                        Excited!</p>
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
                    <h1>Meine Homepage</h1>
                    <h3>Verschaffe dir einen umfangreichen Überblick über mich!</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 mt-2">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>Hi,
                        and thank you for visiting my homepage. :)
                        <br>
                        <br>
                        In today's world, online marketing plays an increasingly important role and I spread
                        on all channels. Meanwhile I wonder when a peak has been reached here or when
                        if anyone can be reached at all?! Nevertheless, this is an unstoppable train,
                        which, however, interests me less. I am particularly interested in the following technologies
                        behind it. Therefore I also make now with a completely self-developed homepage a
                        another big step into web development and marketed something with it, namely Mich. With
                        I mean my skills and competences, which I have now developed in my career.
                        and does not want to deprive anyone, because in today's world we are showing the way
                        quality makes all the difference. With my own homepage, which is based on my own
                        server is running in Falkenstein, I would like to focus on, among other things, also the quality and the
                        to call my attention to diligence. For the website I have the Bootstrap 4 Framework
                        CSS3, JavaScript and PHP. Unfortunately I got the idea quite late
                        SCSS, which would have saved me a lot of time. Still, I'm happy,
                        that maybe you'll browse my homepage even further and we'll, if I can get you
                        I've convinced myself will soon be working together successfully.
                        <br>
                        <br>
                        This project will probably be classified under 'Current' for a longer time, because I always want to keep the site up to date.
                        and will soon switch to Angular as well.</p>
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
                    <h3>Core Developer im Projekt 'VR-Factorio' im Rahmen eines Virtual Engineering Praktikum</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 mt-2">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The aim of the entire internship was to give students a better understanding of the technology of Virtual Reality.
                        and show them their possibilities. The lecture Virtual Engineering was
                        already
                        unbelievably interesting, but without being able to apply the knowledge, such knowledge
                        in the long run quickly into the background. I therefore wanted to combine theory with practice
                        add
                        and so I was fascinated by the technology of the virtual reality in the context of a
                        Virtual Reality or Virtual Engineering Internship applied to the project 'VR Factorio
                        and
                        successfully worked as a Core Developer for several months in the field of VR
                        hollow
                        and apply them in a targeted manner. I was also interested in my programming knowledge
                        on
                        to advance my specialization on the industry 4.0 a stable foundation.
                        too
                        ...and I'll give you a little more. The game Factorio deals with the topic production structure and the defense against
                        Attackers on a foreign planet. With a player that you can control with the keyboard
                        resources had to be collected and used to build production facilities, which could be used to
                        finally formed entire production lines including transport routes.
                        Due to
                        of the extensive topic, our entire team consisted of eight people, four of whom were responsible for the
                        Modeling of the assets and four others, including myself, for the communication between
                        that
                        game and the VR interface 'PolyVR' developed by the institute.
                        Goal
                        of the entire project was to run the game 'Factorio' in the backend and to
                        control
                        or the playability of the game in the frontend under 'PolyVR'. To my
                        The main tasks included the programming of the control system, the playable level and the
                        all camera perspectives and the assignment of keystrokes. In addition, I took care of
                        that
                        I took care of the project video. From my point of view a very successful project, which is exactly what I wanted to do.
                        I think he's got a good taste for it. We were allowed to carry out all test runs in a so-called CAVE (CAVE
                        Automated Virtual Environment), in which you can find yourself virtually in the middle of the virtual
                        scene
                        but collaboration with other colleagues takes place simultaneously without any problems.
                        as several people could be in one CAVE. I particularly enjoyed
                        me
                        the lively discussions in which one could actively express one's suggestions and suggestions,
                        but also criticized the way other team members worked at the same time.
                        All
                        in all, however, it was a very exciting and experiential time, in which I once again
                        I was able to refine my skills. In the end, we were able to create a project that was a
                        a Virtual Reality game, which is not only available in a CAVE
                        but could also be played on an Oculus Rift, for example.</p>
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
                    <h3>Methodik und Implemenetierung der automatisierten Virtualisierung von Anlagen</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 ">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>With the so called Virtual Twin I have integrated myself in the context of my master thesis in a quite
                        young
                        research area that still has a lot of potential. In my master thesis with the
                        Topic 'Automated virtualization of plants by combining ECAD, MCAD and
                        Programming' I have developed a new software for the Institute for Information Management in Engineering.
                        completely new field of research, whereby I have to add that the original
                        title from the tender was different, because it is common for the tasks to be performed in
                        such
                        rapidly expand dynamic projects. For this reason, the official
                        title
                        in my graduation documents slightly different from the title under which my work was submitted and
                        was published. The aim of the work was to develop an existing product development process for
                        virtualize and thus move from digital engineering to virtual engineering.
                        As
                        The exit was served by an extruder of the company Gabler Engineering GmbH. I have
                        first all mechanical and electrical CAD data as well as the entire programming
                        and then the VR interface 'PolyVR' is used to store this data in a
                        virtual
                        Reality environment with each other. The special thing about this topic was that
                        that
                        Machine in its entirety also works under the Virtual Reality environment
                        made
                        was. This means that the model of the extruder can now be used in Virtual Reality, quasi
                        and could switch on and operate, since all electronics, mechanics and the programming
                        were intertwined. The usual digital engineering process requires that the
                        machine
                        must first be built in order to initiate validation steps, but with my
                        developed
                        methodology, this may no longer be necessary in the future. The advantage is also due to my
                        work
                        in that existing construction and development processes are not fundamentally altered
                        which will save time and money. In addition, the sensor data could be read out in order to
                        subject
                        IoT to cover. My work also served as a use case for the technology of the
                        virtual
                        Reality. For example, Gabler could use my program to remotely
                        virtual mapping in a virtual environment to a virtual environment.
                        hers
                        own company premises. For the development of my methodology I have used the
                        programming language Python is used to process the data in the VR interface and to
                        C#,
                        to develop an export interface from TIA Portal and EPLAN. JavaScript and HTML
                        me
                        for the Graphical User Interface within the virtual scene. All in all
                        has
                        the project is a lot of fun for me, because not only have I learned a lot, but I've also
                        also gained deep insights into the product development process. What's more, I have
                        with
                        a topic perfectly tailored to my work, that has a high degree of
                        potential for problem-solving competence. I am proud of the result and I am the
                        solid
                        Conviction. A copy of the Master's thesis can be obtained on request from the Institute for
                        Information Management in Engineering at KIT.</p>
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
                    <h3>Wasserkennzeichnung, Zertifizierung und Versand in einem</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 ">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>With the 'Training Tool', on which I have worked a little longer, is based on Python and
                        QT
                        a more comprehensive tool was developed, which allows several work processes within the MindSphere
                        academy
                        combined with each other and thus also automated. This saved me a lot of time.
                        by
                        about 80%. The tool, which can also filter Excel lists, automatically records all
                        Information about participants, creates the corresponding material and certificate
                        and
                        opens in the last step a personalized e-mail, which is sent together with the files to the
                        attendee
                        after training. In addition, several persons can be sent at the same time
                        work.
                        As with all the other tools I have developed before, I am also interested in the
                        full responsibility, so that at the beginning only the problem was briefly
                        critiqued
                        and a little later I presented a ready-made solution for it. The
                        Training
                        Tool' is also based on open source libraries and is therefore used by me under Github
                        published. As in my other tools, I also prefer to use an
                        object-oriented development approach, which makes it easy to add further functionalities to the tool.
                        can be extended and, if necessary, adapted. For further information
                        how
                        Architecture etc. a discussion thread can be opened in Github. </p>
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
                    <h3>Zur Generierung von wassergekennzeichneten PDF Dateien</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5 ">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The 'Material Generator Tool' was one of the first smaller programming tasks, the
                        me
                        at MindSphere Academy. The aim of this small and simple, but nevertheless
                        effective
                        Tools, it was an individual watermark on the training materials after the training sessions.
                        too
                        to put the gun down. Previously, this activity had to be carried out manually, which means that from the use of the
                        Tools, an enormous time saving could be determined. The tool is based on C# and
                        was in
                        the Visual Studio development environment with integration of open source libraries
                        developed.
                        Today the tool is no longer in use, because it was written by another
                        program
                        was replaced by the 'Training Tool'.</p>
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
                    <h3>Zur Generierung von individuellen Anwesenheitszertifikaten</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>As well as the 'Material Generator Tool' I have within shortest time also the
                        Certificate
                        Generator Tool', with which a large number of individual certificates can be generated for the
                        Participants can be generated after the courses. This tool is also based on C# and
                        used Open Source libraries. Today this tool is also no longer used, since it
                        has also been replaced by the larger and more comprehensive 'Training Tool'.</p>
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
                    <h3>Zur Änderung von Passwörtern vieler Accounts gleichzeitig</h3>
                </div>
            </div>
            <div class="row justify-content-center text-justify pb-5">
                <div class="col-10 col-sm-10 col-md-8  blocktext">
                    <p>The 'Password Manager' has the goal to change passwords for MindSphere accounts. The only thing
                        what
                        that can be saved in the Password Manager are the account names that I naturally use.
                        not
                        I'm going to publish in Github. The program is based on Python and uses
                        PyQT and Selenium and automates the entire password change process.
                        by
                        over 100 accounts and then generates a corresponding Word file in a
                        assign
                        Format in which errors can also be extracted. Also here I insisted on a
                        User-friendly GUI, so that the layman doesn't have to spend a lot of time in the scripts.
                        incorporate
                        must. The 'Password Manager' is still regularly used today and is a fixed component of the
                        that
                        password management, which is also part of my work at the MDSP Academy
                        ...has.  </p>
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
                    <p>Only recently, I once again had the desire for a creative phase to, as I said.
                        thus
                        to replenish my reserves. This resulted in two films with different
                        Recordings from Mexico, Kosovo and Crete. Since in the meantime now also my own homepage
                        went online, I uploaded it to Vimeo for the first time, because Vimeo was the
                        professional content is known. I will therefore continue to use all of my
                        creations
                        on Vimeo. One of the movies (the one about Mexico) is already available about this article about
                        see.
                        Although I have published further films, but these were by far the most
                        shorter
                        and in its scope also less costly. You can see them among other things on my
                        Instagram account or under my passions.
                        <br>
                        I hope you enjoy them and that you will be captivated by spectacular voyages of discovery!</p>
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
                    <p>For more than 4 years now, I have gained a deep expertise in Apple's operating systems
                        is set up.
                        Today, this is sufficient to the extent that I still receive orders from time to time via various channels.
                        where my customers have problems making upgrades, for example,
                        because
                        her Mac is too out of date. I support you wherever I can, be it remotely or before
                        Location. I mainly make changes to the so-called boot loaders and manipulate the
                        DSDT
                        and SSDT files (BIOS files), which are simply the functionalities of a computer.
                        and be read by the operating system. In my last order from August 2019
                        have
                        I made two Macs from 2009 and 2011 fully functional again, so that they are
                        too
                        continue to be able to install the latest macOS operating system. I had to
                        also carry out some hardware repairs in order to ensure the compatibility of the
                        to ensure the safety of the To date, I have successfully helped around 40 customers in this way
                        and
                        I'm earning some extra money while I'm studying. Nowadays I only take orders from
                        old
                        regular customers, as I simply don't have the time to scale this line of business.
                        and
                        I'd rather get absorbed in other areas as well.
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
