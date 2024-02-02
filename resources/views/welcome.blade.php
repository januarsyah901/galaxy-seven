<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&family=Montserrat:wght@400;500;600;700&family=Outfit:wght@400;500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Glx 7</title>
    @vite('resources/js/app.js')
    {{-- @vite('resources/css/app.css') --}}
</head>

<body>
    <div id="root">
    </div>
    <script type="text/javascript">
        var url = `{{ URL::asset('assets/images/') }}/`
        var urlAds = `{{ URL::asset('assets/images/mediapartner/') }}/`
        var urlRegister = `{{ url('register') }}`
        var link = `{{ url('/') }}`


        // console.log(window.urlRegister)
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
