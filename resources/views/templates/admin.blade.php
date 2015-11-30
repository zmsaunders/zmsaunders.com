<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin</title>
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,900" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{elixir('css/admin.css')}}" />
    </head>
    <body>
        <header>
            <div class="container">
                <h1>Admin</h1>
            </div>
        </header>
            @yield('content')
        <footer>
            <p>
                <span class="copyright">&copy; Zach Saunders</span>
                <a href="https://github.com/zmsaunders/zmsaunders.com"><img alt="Build Status" src="https://codeship.com/projects/95bee7e0-75bc-0133-ad7d-1e4476f09bd8/status?branch=master"></a>
            </p>
        </footer>
    </body>
</html>