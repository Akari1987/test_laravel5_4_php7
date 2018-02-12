<!DOCTYPE html>
<html>
    <head>
        <link href="https://unpkg.com/vuetify/dist/vuetify.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons' rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <vuetify></vuetify>
        </div> 
        <!-- Main Scripts -->
        <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
        <!--<script src="{{ secure_asset('js/jquery.min.js') }}"></script>-->
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
       