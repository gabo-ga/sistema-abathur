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
    <div class="container">
        @yield('content')
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</html>
