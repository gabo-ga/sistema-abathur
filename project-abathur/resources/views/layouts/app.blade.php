<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Sistema Abathur</title>
</head>

<body class="bg-gray-100 flex flex-col min-h-screen">
    <x-header></x-header>
    @yield('content')
</body>



</html>
