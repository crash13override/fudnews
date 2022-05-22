<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>F.U.D. News - Flovatar Universe Daily</title>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="text/javascript">
            window.fudNews = [];
            window.fudPages = {!! json_encode($fudPages) !!};
        </script>
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="container">
                <div class="flip-book" id="fud-news"></div>
            </div>

            <div class="container">
                <div class="page-controller">
                    <button type="button" class="btn-prev">Previous page</button>
                    [<span class="page-current">1</span> of <span class="page-total">-</span>]
                    <button type="button" class="btn-next">Next page</button>
                </div>
            </div>
        </div>
    </body>
</html>
