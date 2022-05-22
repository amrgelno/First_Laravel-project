

<?php $__env->startSection('content'); ?>

 <!-- Page Header Start -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2><?php echo e(__('lang.about')); ?></h2>
            </div>            
        </div>
    </div>
</div>
<!-- Page Header End -->


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
                    <?php if(Session()->get('applocale') == 'nl'): ?>
                        <p>
                            Perfectie in elk detail.
                        </p>
                        <p>
                            Trust Klusbedrijf is trots om zich een van de meest geliefde dienstverleners op het gebied van interieur, stukadoorswerk, gipsdecoraties, renovatie op hoog niveaus en MEP (Mechanica, Electrical & Plumbing) in de BENELUX te noemen. We zetten onze waarden op een ethische verantwoorde wijze in, om elke klant tevreden te stellen. Trust Klusbedrijf is een in BENELUX gevestigde organisatie en biedt gespecialiseerde diensten aan op het gebied van renovatie-, gips-diensten en MEP vanaf het jaar 2018. Wij zijn onze professionele reis begonnen in 1988 buiten Europa waar wij veel ervaringen hebben opgebouwd.
                        </p>
                        <p>
                            Wij streven er altijd naar om een unieke werkwijze te volgen die ons in staat stelt om aan elke specifieke behoefte, wens en eisen van het aangenomen opdracht te voldoen, ook door ervoor te zorgen dat we het op tijd afleveren en aan alle verwachtingen van de opdracht voldoen. We zijn enthousiast en trots om nu te worden beschouwd als een van de top renovatie, gips en MEP-bedrijven in de BENELUX, met een lijst van tevreden klanten die verdeeld zijn over de hele regio. Wij zijn een team van zeer deskundige en gekwalificeerde professionals, die competente managers, ingenieurs, supervisors en technici zijn, waardoor wij een van de meest betrouwbare en vertrouwde Interieur-bedrijf in de BENELUX, zijn geworden.
                        </p>
                        <p>
                            Onze missie bij Trust Klusbedrijf blijft altijd het leveren van de hoogste normen en kwaliteiten van gipswerk, MEP installatie en diensten, door verder samen te werken in de juiste omvang van het werk voor ontwikkeling. Als een van de meest geprefereerde stukadoor, innovatief gips en MEP aannemers in de BENELUX, voeren wij alle soorten mechanische, elektrische en loodgieterswerkzaamheden uit voor elk type accommodatie, of het nu gaat om villa's, hotels, residentiële gebouwen, commerciële gebouwen, magazijnen, enzovoort. Om een van de top stukadoor, gips en MEP-bedrijven in de BENELUX te worden. Ons hard werkende team werkt altijd gepassioneerd om de hoogste kwaliteit diensten te leveren door klanttevredenheid als een van onze topprioriteiten te maken.
                        </p>
                    <?php else: ?>
                        <p>
                            Perfection in every detail.
                        </p>
                        <p>
                            Trust Klusbedrijf is proud to call itself one of the most popular service providers in the field of interior design, plastering, plaster decorations, renovation at high levels and MEP (Mechanics, Electrical & Plumbing) in the BENELUX. We deploy our values in an ethically responsible manner to satisfy every customer. Trust Klusbedrijf is a BENELUX based organization and offers specialized services in the field of renovation, plastering services and MEP from the year 2018. We started our professional journey in 1988 outside Europe where we have built up a lot of experience.
                        </p>
                        <p>
                            We always strive to follow a unique working method that allows us to meet every specific need, desire and requirements of the contract contracted, also by ensuring that we deliver it on time and meet all expectations of the contract to fulfil. We are excited and proud to be now considered one of the top renovation, plaster and MEP companies in the BENELUX, with a list of satisfied customers spread across the region. We are a team of highly skilled and qualified professionals, who are competent managers, engineers, supervisors and technicians, making us one of the most reliable and trusted Interior company in the BENELUX.  
                        </p>
                        <p>
                            Our mission at Trust Klusbedrijf always remains to provide the highest standards and qualities of plasterwork, MEP installation and services, by continuing to work together in the right scope of work for development. As one of the most preferred plasterer, innovative plaster and MEP contractors in the BENELUX, we carry out all types of mechanical, electrical and plumbing work for any type of accommodation, be it villas, hotels, residential buildings, commercial buildings, warehouses, etc. . To become one of the top plasterer, plaster and MEP companies in the BENELUX. Our hard working team is always working passionately to provide the highest quality services by making customer satisfaction one of our top priorities.
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <div class="row align-items-center" style="margin-top: 100px">
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <h2><?php echo e(__('lang.our_vision')); ?></h2>
                </div>
                <div class="about-text">
                    <?php if(Session()->get('applocale') == 'nl'): ?>
                    <p>
                        Wij zijn een bedrijf dat zich laat leiden door onze kernwaarden, waar cliënten de beste totaalervaring hebben; een bedrijf waar ze veilig, zelfverzekerd, zeker en zonder stress zijn.
                    </p>
                    <?php else: ?>
                    <p>
                        We are a company guided by our core values, where clients have the best total experience; a company where they are safe, confident, secure and stress free.
                    </p>
                    <?php endif; ?>
                   
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo e(asset('img/vision.jpg')); ?>" alt="Image">
                </div>
            </div>            
        </div>



        <div class="row align-items-center" style="margin-top: 100px">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="<?php echo e(asset('img/mission.jpg')); ?>" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">                
                    <h2><?php echo e(__('lang.our_mission')); ?></h2>
                </div>
                <div class="about-text">
                    <?php if(Session()->get('applocale') == 'nl'): ?>
                        <p>
                            Geleid door onze visie leveren wij kwalitatief hoogwaardige, kosteneffectieve werken binnen de gestelde termijn en vergroten wij de tevredenheid van onze klanten door voortdurende verbetering van kwaliteit, dienstverlening, levering en milieubescherming.
                        </p>
                    <?php else: ?>
                        <p>
                            Guided by our vision, we deliver high-quality, cost-effective work on time and increase our customers' satisfaction through continuous improvement of quality, service, delivery and environmental protection.
                        </p>
                    <?php endif; ?>
                                                           
                </div>
            </div>
        </div>


    </div>
</div>
<!-- About End -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.include.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel Projects\trustklusbedrijf\resources\views/front/about.blade.php ENDPATH**/ ?>