@extends('front.include.layout')

@section('content')

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('img/slider/carousel-1.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{__('lang.we_professional')}}</p>
                <h1 class="animated fadeInLeft">{{__('lang.your_dream_project')}}</h1>
                {{-- <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a> --}}
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('img/slider/carousel-2.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{__('lang.prof_contractors')}}</p>
                <h1 class="animated fadeInLeft">{{__('lang.change_your_home')}}</h1>
                {{-- <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a> --}}
            </div>
        </div>

        <div class="carousel-item">
            <img src="{{asset('img/slider/carousel-3.jpg')}}" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight">{{__('lang.we_trusted')}}</p>
                <h1 class="animated fadeInLeft">{{__('lang.your_dream_home')}}</h1>
                {{-- <a class="btn animated fadeInUp" href="https://htmlcodex.com/construction-company-website-template">Get A Quote</a> --}}
            </div>
        </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- Carousel End -->


 <!-- Feature Start-->
 <div class="feature wow fadeInUp" data-wow-delay="0.1s">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-worker"></i>
                    </div>
                    <div class="feature-text">
                        <h3>{{__('lang.expert_worker')}}</h3>
                        {{-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3>{{__('lang.quality_work')}}</h3>
                        {{-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3>{{__('lang.support')}}</h3>
                        {{-- <p>Lorem ipsum dolor sit amet elit. Phasus nec pretim ornare velit non</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End-->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{asset('img/logo.jpg')}}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>{{__('lang.welcome_to')}} Trust Klusbedrijf</p>
                    <h2>20 {{__('lang.years_experience')}}</h2>
                </div>
                <div class="about-text">
                    <p>
                        Wij zijn onze professionele reis begonnen in het jaar 2018 wij zijn trots op te zien dat we als een van de meest geprefereerde bedrijf gespecialiseerd in (decoraties, Gips, renovaties, Elektrische & Loodgieterswerk) dienstverleners in de BENELUX. Wij werken ethisch en hard om aan de kern van onze waarden te werken, om zo elk van cliënt tevreden te maken. TRUST KLUSBEDRIJF is in Nederland gevestigde organisatie en biedt gespecialiseerde diensten aan op het gebied van renovatie, gips, bouwdiensten en Electra sinds het jaar 2020.
                    </p>                   
                    <a class="btn" href="{{route('about')}}">{{__('lang.learn_more')}}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->



<!-- Fact Start -->
<div class="fact">
    <div class="container-fluid">
        <div class="row counters">
            <div class="col-md-6 fact-left wow slideInLeft">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-worker"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">109</h2>
                            <p>{{__('lang.expert_workers')}}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">485</h2>
                            <p>{{__('lang.happy_clients')}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 fact-right wow slideInRight">
                <div class="row">
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-address"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">789</h2>
                            <p>{{__('lang.completed_projects')}}</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">890</h2>
                            <p>{{__('lang.running_projects')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fact End -->



<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center">
            <p>{{__('lang.our_services')}}</p>
            <h2>{{__('lang.provide_services')}}</h2>
        </div>
        <div class="row">           
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/Schilderen.jpg')}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.paint')}}
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.paint')}}</h3>
                        {{-- <a class="btn" href="img/service-4.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/Vloer_en_wandtegels.jpg')}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.floor_wall_tiles')}}
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.floor_wall_tiles')}}</h3>
                        {{-- <a class="btn" href="img/service-5.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/Decoratieve_Verf_en_gips_aanbrengen2.jpg')}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.decorative_paint_plaster')}}
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.decorative_paint_plaster')}}</h3>
                        {{-- <a class="btn" href="img/service-6.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/Loodgieterij_en_sanitair.jpg')}}" alt="Image" height="200px">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.plumbing_sanitary')}}
                            </p>
                        </div>                        
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.plumbing_sanitary')}}</h3>
                        {{-- <a class="btn" href="img/service-1.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/AC_Onderhoudswerken.jpg')}}" alt="Image"> 
                        <div class="service-overlay">
                            <p>
                                {{__('lang.ac_maintenance')}}
                            </p>
                        </div>                        
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.ac_maintenance')}}</h3>
                        {{-- <a class="btn" href="img/service-2.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/Elektro_Montage_en_Inrichtingen.jpg')}}" alt="Image"> 
                        <div class="service-overlay">
                            <p>
                                {{__('lang.electrical_fittings_fixtures')}}
                            </p>
                        </div>                       
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.electrical_fittings_fixtures')}}</h3>
                        {{-- <a class="btn" href="img/service-3.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/Woonkamer.jpg')}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.living_room')}}
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.living_room')}}</h3>
                        {{-- <a class="btn" href="img/service-6.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/slaapkamer.jpg')}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.bedrooms')}} 
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.bedrooms')}} </h3>
                        {{-- <a class="btn" href="img/service-6.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{asset('img/services/badkamer2.jpg')}}" alt="Image">
                        <div class="service-overlay">
                            <p>
                                {{__('lang.bathrooms')}} 
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3>{{__('lang.bathrooms')}} </h3>
                        {{-- <a class="btn" href="img/service-6.jpg" data-lightbox="service">+</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



    
@endsection