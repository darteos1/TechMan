<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- Page CSS -->
    <link rel="stylesheet" href="{{ url('styles\app.css') }}">
    @yield('styles')
</head>
<body>
    <img class="border-0 position-relative top-0 start-50 translate-middle-x mt-4" src='{{ asset("image/techman.png") }}' alt="Logotipo">
    {{-- @guest --}}
    {{-- @else(Auth::user()) --}}
        <div class="btn-group-vertical position-fixed top-50 start-0 translate-middle-y menu" role="group">
            <button type="button" class="btn"><img style="width: 1.5rem; height: auto; border-style: none;" src='{{ asset("image/app/icons/user.png") }}' alt="User Icon"></button>
            <button type="button" class="btn"><i class="fa-solid fa-list-ul fs-5"></i></button>
            <button type="button" class="btn"><i class="fa-solid fa-plus fs-5"></i></button>
        </div>
    {{-- @endguest --}}
    <main class="mt-5">
        @yield('content')
    </main>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>