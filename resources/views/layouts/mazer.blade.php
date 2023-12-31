<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('assets/themes/mazer/css/app.css') }}>

    <link rel="stylesheet" href={{ asset("assets/themes/mazer/vendors/iconly/bold.css")}}>

    <link rel="stylesheet" href={{ asset("assets/themes/mazer/vendors/perfect-scrollbar/perfect-scrollbar.css") }}>
    <link rel="stylesheet" href={{ asset("assets/themes/mazer/vendors/bootstrap-icons/bootstrap-icons.css") }}>
    <link rel="stylesheet" href={{ asset("assets/themes/mazer/css/bootstrap.css") }}>
    <link rel="shortcut icon" href={{ asset("assets/themes/mazer/images/favicon.svg") }} type="image/x-icon">
</head>

<body>
    <div id="app">
        @yield("sidebar")
        <div id="main">
            @yield("header")

            @yield("page-heading")
            @yield("page-content")

            @yield("footer")
        </div>
    </div>
    <script src={{ asset("assets/themes/mazer/vendors/perfect-scrollbar/perfect-scrollbar.min.js") }}></script>
    <script src={{ asset("assets/themes/mazer/js/bootstrap.bundle.min.js") }}></script>

    <script src={{ asset("assets/themes/mazer/vendors/apexcharts/apexcharts.js") }}></script>
    <script src={{ asset("assets/themes/mazer/js/pages/dashboard.js") }}></script>

    <script src={{ asset("assets/themes/mazer/js/main.js") }}></script>
</body>

</html>