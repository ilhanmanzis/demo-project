<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $app_name }}</title>
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/main/app.css">
    <link rel="stylesheet" href="{{ asset('mazer') }}/assets/css/pages/auth.css">
    <link rel="shortcut icon" href="{{ asset('mazer') }}/assets/images/logo/logo.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('mazer') }}/assets/images/logo/logo.png" type="image/png">
</head>

<body>
    <div id="auth">

        @yield('content')

    </div>
</body>

</html>
