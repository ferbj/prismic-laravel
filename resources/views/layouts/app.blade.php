<!DOCTYPE html>
<html lang="en">
<head>
    {{--  Meta  --}}
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    {{--  Meta Title --}}
    <title>Laravel starter for prismic.io</title>

    {{--  Scripts  --}}
    <script>
        // Required for previews and experiments
        window.prismic = {
            endpoint: '{{ $endpoint }}'
        };
    </script>
    <script src="https://static.cdn.prismic.io/prismic.js"></script>
    
</head>

<body>
    <div class="container">
    <main>
        @yield('content')
    </main>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>
</body>

</html>
