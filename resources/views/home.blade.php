<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>F.U.D. News - Flovatar Universe Daily</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="text/javascript">
            window.fudNews = {!! json_encode($fudNews) !!};
            window.fudPages = [];
        </script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="main-container">
            <ul class="volumes-list">
            @foreach($fudNews as $issue)
                <li>
                    <a href="/volumes/{{ $issue['name'] }}">
                        <img src="{{ $issue['path'] }}">
                    </a>
                </li>
            @endforeach
            </ul>
        </div>
    </body>
</html>
