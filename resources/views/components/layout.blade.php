<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cost | {{$title}}</title>
    <link rel="icon" href="{{asset('./img/icon.svg')}}">
    @vite([
    'resources/sass/app.scss',
    'resources/js/app.js'])
</head>

<body>

    <main class="dashboard-bg">
        @isset($errors)
        @if($errors->any())
        <ul class="alert alert-danger position-absolute w-100">
            @foreach($errors->all() as $erro)
            <li class="nav-link">{{$erro}}</li>
            @endforeach

        </ul>

        @endif
        @endisset
        @isset($success)
    <div class="alert alert-success">
        {{ $success }}
    </div>
    @endisset
        <section class="min-vh-100">
            {{$slot}}

        </section>
    </main>

</body>

</html>