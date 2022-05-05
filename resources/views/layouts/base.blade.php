<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">

    @yield('head-scripts')

    <title>Comics @yield('title')</title>
</head>
<body>
        
    @include('partials.header',["headerNav" => config('headerNav')])

    @yield('jumbotron')

    <main>
        @yield('main-content')
    </main>
    
    @include('partials.footer',[ "footerLinks" => config('footerLinks'), "footerLogos" => config('footerLogos')])
</body>
</html>