<!doctype html>
<html lang='en'>
<head>
    <title>P3</title>
    <meta charset='utf-8'>

    {{-- CSS global to every page can be loaded here --}}
    <link rel='stylesheet' href='https://bootswatch.com/4/spacelab/bootstrap.min.css' type='text/css'>

    {{-- CSS specific to a given page/child view can be included via a stack --}}
    @stack('head')
</head>
<body>

<header>
    <h2>Sishir Yeety</h2>
    <h4>Project 3: Food Ordering System (Laravel)</h4><br>
</header>

<section>
    @yield('content')
</section>

<footer>
    DWA15 &copy; {{ date('Y') }}
</footer>

{{-- JS global to every page can be loaded here; jQuery included just as an example --}}
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>

{{-- JS specific to a given page/child view can be included via a stack --}}
@stack('body')

</body>
</html>
