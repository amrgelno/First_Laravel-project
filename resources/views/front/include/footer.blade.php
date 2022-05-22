<!-- Footer Start -->
<div class="footer wow fadeIn" data-wow-delay="0.3s">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-contact">
                    <h2>Contact</h2>
                    {{-- <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p> --}}
                    <p><i class="fa fa-phone-alt"></i>+31 6 3333 0410</p>
                    <p><i class="fa fa-envelope"></i>info@trsutklusbedrijif.nl</p>
                    <div class="footer-social">
                        {{-- <a href=""><i class="fab fa-twitter"></i></a> --}}
                        <a href="https://www.facebook.com/Trust-_klusbedrijf-114581344056622" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        {{-- <a href=""><i class="fab fa-youtube"></i></a> --}}
                        <a href="https://www.instagram.com/Trust_klusbedrijf" target="_blank"><i class="fab fa-instagram"></i></a>
                        {{-- <a href=""><i class="fab fa-linkedin-in"></i></a> --}}
                        <a href="https://api.whatsapp.com/send/?phone=%2B+31633330410&text&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>            

            <div class="col-md-6 col-lg-4">
                <div class="footer-link">
                    <h2>Useful Pages</h2>
                    <a href="{{route('projects')}}">{{__('lang.projects_gallery')}}</a>
                    <a href="{{route('about')}}">{{__('lang.about')}}</a>
                    <a href="{{route('contact')}}">{{__('lang.contact')}}</a>                                          
                </div>
            </div>

            <div class="col-md-6 col-lg-4">                
                <img src="{{asset('img/logo_trans.png')}}" width="90%" height="100%">               
            </div>
           
        </div>
    </div>
      
</div>
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

