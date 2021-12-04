<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infodec</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
    body{
        margin:10px;
        padding:10px;
        font-family:sans-serif;
    }
    .color-container{
        width: 16px;
        height:16px;
        display:inline-block;
        border-radius:4px;
    }

    </style>
    <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>
<body>

@yield('contenido')
</body>
</html>