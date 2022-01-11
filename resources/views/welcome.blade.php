@extends('layouts.main_page')

@section('content')
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-secondary mb-0">HealthCare Facilities <br>in the Province of Cavite</br></h1>
        </div>
    </header>

    <section class="page-section portfolio" id="portfolio">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary mb-0 d-inline-block">INFOGRAPH</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Portfolio Grid Items-->
            <div class="row justify-content-center">
                <!-- Portfolio Items-->
                <div class="col-md-20 col-lg-20 mb-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal0">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center ">
                            
                        </div><img class="img-fluid" src="assets/img/portfolio/infograph 1.jpg" alt="Log Cabin"/>
                    </div>
                </div>
                <div class="col-md-20 col-lg-20 mb-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center ">
                            
                        </div><img class="img-fluid" src="{{asset('assets/img/portfolio/infograph 2.jpg')}}" alt="Tasty Cake"/>
                    </div>
                </div>
                <div class="col-md-20 col-lg-20 mb-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center ">
                            
                        </div><img class="img-fluid" src="{{asset('assets/img/portfolio/infograph 3.jpg')}}" alt="Circus Tent"/>
                    </div>
                </div>
                <div class="col-md-20 col-lg-20 mb-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center ">
                            
                        </div><img class="img-fluid" src="{{asset('assets/img/portfolio/infograph 4.jpg')}}" alt="Controller"/>
                    </div>
                </div>
                <div class="col-md-20 col-lg-20 mb-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center ">
                            
                        </div><img class="img-fluid" src="{{asset('assets/img/portfolio/infograph 5.jpg')}}" alt="Locked Safe"/>
                    </div>
                </div>
                <div class="col-md-20 col-lg-20 mb-4">
                    <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal5">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center ">
                            
                        </div><img class="img-fluid" src="{{asset('assets/img/portfolio/infograph 6.jpg')}}" alt="Submarine"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">ABOUT</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- About Section Content-->
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <p class="pre-wrap lead">Health care Facilities in the Province of Cavite is a web-based application where it shows the various hospitals according to their level in cavite province along with information, contact, and location.</p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <p class="pre-wrap lead">You can view the information, contacts and location of your chosen hospital to make sure if that hospital can provide your medical needs.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section" id="contact">
        <div class="container">
            <!-- Contact Section Heading-->
            <div class="text-center">
                <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
            </div>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Contact Section Content-->
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                        <div class="text-muted">Phone</div>
                        <div class="lead font-weight-bold"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex flex-column align-items-center">
                        <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                        <div class="text-muted">Email</div><a class="lead font-weight-bold" href="https://www.facebook.com/HCFPC-100435472394698"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
