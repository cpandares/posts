<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Courses</title>
</head>
<body>

    <header class="shadow-lg">
        <div class="bg-indigo-600 py-1">
            <nav class="bg-indigo-800 py-2">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/6318579.jpg') }}" class="h-12 mx-auto"/>
                </a>
            </nav>
        </div>
    </header>

    <main class="py-10">
        <div class="container mx-auto px-4">
            @yield('content')
        </div>
    </main>

    <footer class="py-4 text-center">
        @auth
            <a href="{{ url('dashboard') }}" class="text-sm text-gray-700 underline">
                Dashboard
            </a>
        @else
            <a href=" {{url('login')}} " class="text-sm text-gray-700 underline">
                Login
            </a>
            <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 underline">
                Register
            </a>
        @endif
    </footer>
    
</body>
</html>