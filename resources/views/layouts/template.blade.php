<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <section>
        @yield('content')
    </section>


    <footer>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="col-sm-12 text-center">
                    <span>2ps.com <br> problemas precisam de solução</span>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
