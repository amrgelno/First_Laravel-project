<!DOCTYPE html>
<html lang="en">
    @include('front.include.head')

    <body>
        <div class="wrapper">

        @include('front.include.top_bar')

        @include('front.include.navigation')

        @yield('content')

        @include('front.include.footer')

        </div>
        
    @include('front.include.scripts')
    @yield('script')

    </body>
</html>