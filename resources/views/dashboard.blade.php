<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        @livewireStyles
    </head>
    <body>
        <div class="container py-5">
            <x-action-button
                action="/logout"
                method="POST"
                class="btn btn-link"
            >
                Logout
            </x-action-button>

            <h1>Password confirmation modal examples</h1>

            @if(session('message'))
                <div class="alert alert-info">
                    {{ session('message') }}
                </div>
            @endif

            <p>This button will ask the user to confirm their password before executing the POST request. When the password is confirmed, the component will save the timestamp into the session and the <code>password.confirm</code> middleware will let us pass without redirection to a confirm password page.</p>
            <x-action-button
                :confirm="true"
                action="/protected"
                method="POST"
                class="btn btn-primary mb-3"
            >
                Perform protected action (with modal)
            </x-action-button>

            <p>This button will execute the POST request on specified without a confirmation modal, but Laravel will redirect to a password confirm page because of the <code>password.confirm</code> middleware. This is the default behaviour, but in some cases it is not the best UX.</p>
            <x-action-button
                :confirm="false"
                action="/protected"
                method="POST"
                class="btn btn-primary mb-3"
            >
                Perform protected action! (w/o modal)
            </x-action-button>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        @livewireScripts
    </body>
</html>
