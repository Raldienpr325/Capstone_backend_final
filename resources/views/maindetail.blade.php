<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="dicoding:email" content="mhusein463@gmail.com">
    <meta name="description" content="AJARI : Platform Pembelajaran Anak Disabilitas Sensorik">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classes.css') }}">
    @stack('css')

    <title>Document</title>
</head>

<body>
    <a class="skip-to-main" tabindex="0" href="#mainContent">Skip to main content</a>
    <main tabindex="0" id="mainContent">
        @yield('content')
    </main>

    <script src="{{ asset('js/classes.js') }}"></script>
    @stack('js')
</body>

</html>
