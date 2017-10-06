<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <section class="hero is-fullheight is-primary is-bold">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title has-text-centered">
                        Airport Codes
                    </h1>
                    <form method="get" action="/airport/">
                        <div class="field">
                            <div class="control">
                                <input name="q" class="input is-large has-text-centered" type="text" placeholder="Airport?" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
