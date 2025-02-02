<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Noslēguma darbs</title>
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <!-- Navigācija -->
    @include('partials.navigacija')
    <!-- /Navigācija -->

    <div id="fons"></div>

    @yield('content')



    <!-- Apakša -->
    @include('partials.apaksa')
    <!-- /Apakša -->
    <!-- Bulta uz augšu -->
    <!-- <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a> -->
    <button type="button" class="btn btn-dark btn-toTop"><img src="https://img.icons8.com/color/48/000000/chevron-up.png"></button>
    <!-- /Bulta uz augšu -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="/js/noslegums.js"></script>

    {{-- <script>
            $.validate({
                language: lvLang
            });
        </script> --}}
  </body>
</html>