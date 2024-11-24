<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GALAXY 8</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&family=Montserrat:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css" />



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8569cd71e9.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <script src="https://apis.google.com/js/api:client.js"></script>
    <link rel="stylesheet" href="{{ url('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/animate/animate.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ url('assets/plugins/venobox/venobox.css') }}">
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ url('assets/images/icon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ url('assets/images/icon.png') }}" type="image/x-icon">
</head>

<body>
    <section id="jaringan" class=""></section>

    @include('templates.navbar')

    @yield('container')

    @include('templates.footer')




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="{{ url('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ url('assets/plugins/aos/aos.js') }}"></script>
    <script src="{{ url('assets/plugins/venobox/venobox.min.js') }}"></script>
    <script src="{{ url('assets/plugins/mixitup/mixitup.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places">
    </script>
    <script src="{{ url('assets/plugins/google-map/gmap.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
    <script src="{{ url('assets/js/script.js') }}"></script>

</body>

</html>
