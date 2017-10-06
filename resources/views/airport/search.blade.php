<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Searching for "" - {{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <ul>
            @foreach ($results as $result)
                <li>
                    <a href="{{ $result->link() }}">
                        {{ $result->name }} - {{ $result->type }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>
