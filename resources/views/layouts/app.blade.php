<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="container">
    <main>
        <div class="py-2 text-center">
            <img class="d-block mx-auto mb-4" src="https://papik.pro/uploads/posts/2021-11/thumbs/1636205925_14-papik-pro-p-logotip-biblioteki-foto-14.png" alt="" width="100" height="100">
            <h2>Library</h2>
            <p class="lead">This library was created for a test task. Here you can see the list of books, their authors and publishers</p>
        </div>

        <div class="row">
            @yield('content')
        </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2022 WladGin</p>
    </footer>
    @yield('scripts')
</div>
</body>
</html>
