<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>{{ config('app.name', 'Laravel') }}</title>
    
        <!-- Styles -->
        <link href="{{ secure_asset('css/inspinia/plugins/summernote/summernote.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/inspinia/plugins/summernote/summernote-bs3.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/inspinia/plugins/iCheck/custom.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/inspinia/animate.css') }}" rel="stylesheet">
        <link href="{{ secure_asset('css/perfect-scrollbar.css') }}" rel="stylesheet">
        <!--<link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet" type="text/css">-->
    
    
        <!--<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">-->
    
        <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
        <!-- Scripts -->
        <script>
        if(window.matchMedia('(min-width: 1024px)').matches)
                {
                    console.log('true');
                } else
                {
                    console.log('false');
                }
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
    </head>
    <body>
        <!--@@@vue-infinte-loading-error-point-->
        <!--<div id="wrapper" class="nonedit">-->
            <div id="editingOverlay"></div>
            <div id="app">
                @yield('sidebar')
                <div id="page-wrapper" class="gray-bg">
                        @yield('content')
                </div>
            </div>
        <!-- Main Scripts -->
        <script
            src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
            crossorigin="anonymous"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script
          src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
          integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
          crossorigin="anonymous"></script>
        <script src="{{ secure_asset('js/app.js') }}"></script>
        <script src="{{ secure_asset('js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
        <script src="{{ secure_asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ secure_asset('js/inspinia.js') }}"></script>
        <script src="{{ secure_asset('js/plugins/pace/pace.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ secure_asset('js/plugins/iCheck/icheck.min.js') }}"></script>
    </body>
</html>
