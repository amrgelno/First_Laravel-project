<!-- Nav Bar Start -->
<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{route('home')}}" class="nav-item nav-link">{{__('lang.home')}}</a>
                    <a href="{{route('about')}}" class="nav-item nav-link">{{__('lang.about')}}</a>
                    {{-- <a href="service.html" class="nav-item nav-link">Services</a>                     --}}
                    <a href="{{route('projects')}}" class="nav-item nav-link">{{__('lang.projects_gallery')}}</a>            
                    <a href="{{route('contact')}}" class="nav-item nav-link">{{__('lang.contact')}}</a>
                </div>
              
            </div>
            
            <div class="nav-item dropdown">
                {{-- Language --}}                
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{-- <span class="flag-icon flag-icon-en flag-icon-{{Config::get('languages')[App::getLocale()]['flag-icon']}}"></span> --}}
                {{-- <span class="flag-icon flag-icon-gr"></span> --}}
                <img src="{{asset('img/'.Config::get('languages')[App::getLocale()]['flag-icon'].'.svg')}}" width="25px" >
                 {{ Config::get('languages')[App::getLocale()]['display'] }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale() && $lang != 'ar')
                            <a class="dropdown-item" href="{{ route('lang.switch', $lang) }}"><img src="{{asset('img/'.$language['flag-icon'].'.svg')}}" width="25px" > {{$language['display']}}</a>
                    @endif
                @endforeach
                </div>          
            </div>
        </nav>
    </div>
</div>
<!-- Nav Bar End -->