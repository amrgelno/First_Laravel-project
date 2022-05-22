

<?php $__env->startSection('content'); ?>

<!-- Carousel Start -->
<div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(asset('img/slider/carousel-1.jpg')); ?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?php echo e(__('lang.we_professional')); ?></p>
                <h1 class="animated fadeInLeft"><?php echo e(__('lang.your_dream_project')); ?></h1>
                
            </div>
        </div>

        <div class="carousel-item">
            <img src="<?php echo e(asset('img/slider/carousel-2.jpg')); ?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?php echo e(__('lang.prof_contractors')); ?></p>
                <h1 class="animated fadeInLeft"><?php echo e(__('lang.change_your_home')); ?></h1>
                
            </div>
        </div>

        <div class="carousel-item">
            <img src="<?php echo e(asset('img/slider/carousel-3.jpg')); ?>" alt="Carousel Image">
            <div class="carousel-caption">
                <p class="animated fadeInRight"><?php echo e(__('lang.we_trusted')); ?></p>
                <h1 class="animated fadeInLeft"><?php echo e(__('lang.your_dream_home')); ?></h1>
                
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
                        <h3><?php echo e(__('lang.expert_worker')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-building"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?php echo e(__('lang.quality_work')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="flaticon-call"></i>
                    </div>
                    <div class="feature-text">
                        <h3><?php echo e(__('lang.support')); ?></h3>
                        
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
                    <img src="<?php echo e(asset('img/logo.jpg')); ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p><?php echo e(__('lang.welcome_to')); ?> Trust Klusbedrijf</p>
                    <h2>20 <?php echo e(__('lang.years_experience')); ?></h2>
                </div>
                <div class="about-text">
                    <p>
                        Wij zijn onze professionele reis begonnen in het jaar 2018 wij zijn trots op te zien dat we als een van de meest geprefereerde bedrijf gespecialiseerd in (decoraties, Gips, renovaties, Elektrische & Loodgieterswerk) dienstverleners in de BENELUX. Wij werken ethisch en hard om aan de kern van onze waarden te werken, om zo elk van cliënt tevreden te maken. TRUST KLUSBEDRIJF is in Nederland gevestigde organisatie en biedt gespecialiseerde diensten aan op het gebied van renovatie, gips, bouwdiensten en Electra sinds het jaar 2020.
                    </p>                   
                    <a class="btn" href="<?php echo e(route('about')); ?>"><?php echo e(__('lang.learn_more')); ?></a>
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
                            <p><?php echo e(__('lang.expert_workers')); ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-building"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">485</h2>
                            <p><?php echo e(__('lang.happy_clients')); ?></p>
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
                            <p><?php echo e(__('lang.completed_projects')); ?></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="fact-icon">
                            <i class="flaticon-crane"></i>
                        </div>
                        <div class="fact-text">
                            <h2 data-toggle="counter-up">890</h2>
                            <p><?php echo e(__('lang.running_projects')); ?></p>
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
            <p><?php echo e(__('lang.our_services')); ?></p>
            <h2><?php echo e(__('lang.provide_services')); ?></h2>
        </div>
        <div class="row">           
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/Schilderen.jpg')); ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.paint')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.paint')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/Vloer_en_wandtegels.jpg')); ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.floor_wall_tiles')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.floor_wall_tiles')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/Decoratieve_Verf_en_gips_aanbrengen2.jpg')); ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.decorative_paint_plaster')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.decorative_paint_plaster')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" >
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/Loodgieterij_en_sanitair.jpg')); ?>" alt="Image" height="200px">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.plumbing_sanitary')); ?>

                            </p>
                        </div>                        
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.plumbing_sanitary')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/AC_Onderhoudswerken.jpg')); ?>" alt="Image"> 
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.ac_maintenance')); ?>

                            </p>
                        </div>                        
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.ac_maintenance')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/Elektro_Montage_en_Inrichtingen.jpg')); ?>" alt="Image"> 
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.electrical_fittings_fixtures')); ?>

                            </p>
                        </div>                       
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.electrical_fittings_fixtures')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/Woonkamer.jpg')); ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.living_room')); ?>

                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.living_room')); ?></h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/slaapkamer.jpg')); ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.bedrooms')); ?> 
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.bedrooms')); ?> </h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="<?php echo e(asset('img/services/badkamer2.jpg')); ?>" alt="Image">
                        <div class="service-overlay">
                            <p>
                                <?php echo e(__('lang.bathrooms')); ?> 
                            </p>
                        </div>
                    </div>
                    <div class="service-text">
                        <h3><?php echo e(__('lang.bathrooms')); ?> </h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.include.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projects\trustklusbedrijf\resources\views/front/index.blade.php ENDPATH**/ ?>