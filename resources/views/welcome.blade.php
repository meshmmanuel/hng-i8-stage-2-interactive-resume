<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Mesole Emmanuel Ariyo</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ secure_asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Mesole Emmanuel</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ secure_asset('assets/img/profile.jpg') }}" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                </ul>
            </div>
            <!-- <a target="_blank" href="https://ingressive.org/" class="mb-2">
                <img width="120" src="{{ secure_asset('assets/img/i4g2.png')}}" />
            </a>
            <a target="_blank" href="https://hng.tech/" class="mb-2">
                <img width="120" src="{{ secure_asset('assets/img/hng2.png')}}" />
            </a>
            <a target="_blank" href="https://internship.zuri.team/" class="mb-2">
                <img width="120" src="{{ secure_asset('assets/img/zuri.png')}}" />
            </a> -->
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Mesole
                        <span class="text-primary">Emmanuel</span>
                    </h1>
                    <div class="subheading mb-5">
                        13 Adisa Bakare Street · Ayobo-Ipaja, Lagos · (+234)8108227747 ·
                        <a href="mailto:meshmmanuel@gmail.com">meshmmanuel@gmail.com</a>
                    </div>
                    <p class="lead mb-5">I am a professional software engineer from Lagos Nigeria that leverages agile methodologies to build scalable web application. I work smoothly on AWS to deploy and monitor online systems.</p>
                    <div class="social-icons">
                        <a class="social-icon" href="https://www.linkedin.com/in/mesole-emmanuel-70b90b1bb/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/meshmmanuel"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Backend Developer Intern</h3>
                            <div class="subheading mb-3">Zuri Chat</div>
                            <p>I worked as a QA Tester, worked on a Todo Plugin, Setup Centrifugo RTC to cummunicate with the main application</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2021 - October 2021</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Fullstack Software Developer</h3>
                            <div class="subheading mb-3">Liveable NG</div>
                            <p>Writing and documentation of APIs that were consumed by a react application. Build a react application that collects rental information from customers.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">March 2021 - Present</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Fullstack Software Developer</h3>
                            <div class="subheading mb-3">Mealimeter</div>
                            <p>Mealimeter is an IOT backed company. So my duties were to write API's that can communicate with the vending machine, manage mobile application through which users communicate with the vending machine and to manage the PWA which customers use in making orders.</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">April 2020 - February 2021</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Fullstack Software Developer</h3>
                            <div class="subheading mb-3">Happyworld Mealgate</div>
                            <p>Wrote and tested code in PHP using Laravel Framework. Wrote and optimized MySQL queries for database with more than million active users. Used Neo4J - Graph Database to manage relationships and hierarchy</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">Movember 2016 - June 2019</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">HNG-i8 Internship</h3>
                            <div class="subheading mb-3">Backend Development with PHP</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">August 2021 - October 2021</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Osun State Polytechnic</h3>
                            <div class="subheading mb-3">Higher Diploma</div>
                            <div>Computer Science</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2012 - 2014</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Kogi State Polytechnic</h3>
                            <div class="subheading mb-3">Diploma</div>
                            <div>Computer Science</div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">2007 - 2009</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                    <div class="subheading mb-3">Programming Languages & Tools</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-laravel"></i></li>
                        <li class="list-inline-item"><i class="fab fa-aws"></i></li>
                        <li class="list-inline-item"><i class="fab fa-git"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mobile-First, Responsive Design
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Contact-->
            <!-- <section class="resume-section" id="contact">
                <div class="resume-section-content">
                    <h2 class="mb-5">Contact</h2>
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <form method="POST" action="{{ route('submit.contact-form') }}">
                        @csrf
                        <div class="col-md-6 form-line">
                              <div class="form-group">
                                  <label for="exampleInputUsername">Your name</label>
                                <input type="text" name="name" required="required" class="form-control" id="" placeholder=" Enter Name">
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail">Email Address</label>
                                <input type="email" name="email" required="required" class="form-control" id="exampleInputEmail" placeholder=" Enter Email address">
                              </div>	
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                    <label for ="description"> Message</label>
                                    <textarea name="message"  class="form-control" id="description" placeholder="Enter Your Message"></textarea>
                                </div>
                                <div>
                                    <input type="submit" class="btn btn-primary mt-2" value=" Send Message" />
                                </div>
                        </div>
                    </form>
                </div>
            </section> -->
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ secure_asset('js/scripts.js') }}"></script>
    </body>
</html>
