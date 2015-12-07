<!doctype html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>{{ isset($title) ? $title . ' - ' : '' }}Zach Saunders</title>
        <link href="//fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,900" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{elixir('css/main.css')}}" />
        <link rel="stylesheet" href="/css/prism.css" />
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-71046819-1', 'auto');
          ga('send', 'pageview');

        </script>
    </head>
    <body>
        <header>
            <div class="container">
            <a href="/" class="me">
                <div class="flipCont">
                    <div class="flipInner">
                        <span class="img"></span>
                        <span class="imgBak"></span>
                    </div>
                </div>
                <h1>Zach Saunders</h1>
                <h2>Web Developer &amp; Code Spelunker</h2>
            </a>
                <ul>
                    <li>
                        <a href="/">About</a>
                    </li>
                    <li>
                        <a href="/blog">Blog</a>
                    </li>
                    <!-- <li>
                        <a href="labs">Labs</a>
                    </li> -->
                </ul>
            </div>
        </header>
            @yield('content')
        <footer>
            <p>
                <span class="copyright">&copy; Zach Saunders</span>
                <a href="https://github.com/zmsaunders/zmsaunders.com"><img alt="Build Status" src="https://codeship.com/projects/95bee7e0-75bc-0133-ad7d-1e4476f09bd8/status?branch=master"></a>
            </p>
        </footer>
        <script src="/js/prism.js"></script>
    </body>
</html>
