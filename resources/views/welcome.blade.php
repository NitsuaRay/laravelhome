<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HomePro - Landing Page</title>
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo.png') }}" />
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    @include('layouts.partials.nav')

    @include('layouts.partials.landinglayouts')

    @include('layouts.partials.services')

    @include('layouts.partials.contact')

    @include('layouts.partials.footer')
</body>

</html>