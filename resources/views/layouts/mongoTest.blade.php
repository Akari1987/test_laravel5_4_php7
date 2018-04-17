<!DOCTYPE html>
<html>
     <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- UI Packages -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css"></link>
        
        
        <link href="{{ secure_asset('css2/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css2/style.css') }}" rel="stylesheet">
        <!--<link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">-->

        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <div id="app">
            @yield('content')
        </div>
    </body>
    <script src="{{ secure_asset('js/app2.js') }}"></script>
</html>

<style type="text/css">
    #wrapper {
        position: relative;
        margin-top: auto;
        margin-bottom: auto;
    }
</style>
