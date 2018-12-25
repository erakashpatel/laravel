<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <style type="text/css">
         .container {
                text-align: left;
                margin-left:50px;
                padding: 15px 
            }

            .menu .menu-list li {
            display: inline-block;
            }
        </style>
        <!-- Styles -->
      
    </head>
    <body>
        <div class="container">
         

            <div class="menu">
                

                <ul class="menu-list">

                    <li><a href="https://laravel.com/docs">Documentation</a></li>
                    <li><a href="/projects">Projects</a></li>
                  
                </div>
                 <div class="title m-b-md">
                    @yield('content')
                </div>
            </div>
           
        </div>
    </body>
</html>
