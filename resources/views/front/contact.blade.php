@extends('front.include.layout')

@section('content')

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>{{__('lang.contact')}}</h2>
            </div>            
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="contact wow fadeInUp">
    <div class="container">

        <div class="text-center">
            @if (\Session::has('message'))
                <div class="alert alert-success text-center">                            
                    {!! \Session::get('message') !!}</li>                            
                </div>
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger text-center">                            
                        {!! $error !!}</li>                            
                    </div>
                @endforeach
        @endif
        </div>


        <div class="section-header text-center">
            <p>{{__('lang.get_in_touch')}}</p>
            <h2>{{__('lang.for_query')}}</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="flaticon-address"></i>
                        <div class="contact-text">
                            <h2>{{__('lang.location')}}</h2>
                            <p>Jagrskamp 15 - 6932BV Westervoort - Nederland</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-call"></i>
                        <div class="contact-text">
                            <h2>{{__('lang.phone')}}</h2>
                            <p>+31 6 3333 0410</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="flaticon-send-mail"></i>
                        <div class="contact-text">
                            <h2>{{__('lang.email')}}</h2>
                            <p>info@trsutklusbedrijif.nl</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{route('send_message')}}" method="POST" name="sentMessage" id="contactForm" >
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" id="name"  placeholder="{{__('lang.your_name')}}"  data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{__('lang.your_mail')}}"  data-validation-required-message="Please enter your email" required />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('lang.subject')}}"  data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" name="message" id="message" placeholder="{{__('lang.message')}}" data-validation-required-message="Please enter your message" required ></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn" type="submit" id="sendMessageButton">{{__('lang.send_message')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
