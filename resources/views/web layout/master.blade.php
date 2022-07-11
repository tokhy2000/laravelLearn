<!DOCTYPE html>
<html lang="en">
    <head>
        @include('web includes.head')
    </head>
    <body id="page-top">
        <!-- Navigation-->

        @include('web includes.navbar')

        <!-- content-->
        
        @yield('content')


        <!-- Footer-->
        @include('web includes.footer')        
        
        <!-- js-->
        @include('web includes.js')        


    </body>
</html>
