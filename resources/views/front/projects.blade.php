@extends('front.include.layout')

@section('content')

 <!-- Page Header Start -->
 <div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('lang.our_projects')}}</h2>
            </div>           
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Portfolio Start -->
<div class="portfolio">
    <div class="container">
        <div class="section-header text-center">
            {{-- <p>Our Projects</p> --}}
            <h2>{{__('lang.our_projects')}}</h2>
        </div>
        <div class="row">
            {{-- <div class="col-12">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".first">Complete</li>
                    <li data-filter=".second">Running</li>
                    <li data-filter=".third">Upcoming</li>
                </ul>
            </div> --}}
        </div>
        <div class="row portfolio-container">
            @foreach ($projects as $project)
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                <div class="portfolio-warp">
                    <div class="portfolio-img">
                        {{-- <img src="{{asset($project->cover_img)}}" alt="Image"> --}}
                        <img src="{{asset('storage/'.$project->cover_img)}}" alt="Image">
                        <div class="portfolio-overlay">
                            <p>
                                
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-text">
                        <h3>{{ $project->title }}</h3>
                        <a class="btn" href="{{asset($project->images[0]->img_path)}}" data-lightbox="{{$project->id}}{{$project->title}}">+</a> 
                        @foreach ($project->images as $index=>$image)
                            @if($index > 0)
                            <a href="{{asset($project->images[$index]->img_path)}}" data-lightbox="{{$project->id}}{{$project->title}}"></a>
                            @endif
                        @endforeach                      
                        
                    </div>
                </div>
            </div>
            @endforeach
          
        </div>
        <div class="row">
            <div class="col-12 load-more">
                {{-- <a class="btn" href="#">{{__('lang.learn_more')}}</a> --}}
              
                <!-- Pagination -->
                <div style="text-align: center">
                    <div class="pagination justify-content-center">
                    {!! $projects->links("pagination::bootstrap-4") !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Portfolio End -->

@endsection 