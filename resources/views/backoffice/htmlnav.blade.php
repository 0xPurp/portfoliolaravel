<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1 class="tlen">BackOffice</h1>
    </center>
    <div class="div">
        <a href="{{route("home")}}">Home</a>
        <a href="{{route("backblog")}}">Blog</a>
        <a href="{{route("backportfolio")}}">Portfolio</a>
    </div>

@yield('content')

<style>
    .tlen{
        color: blue;
    }

    .div{
        display: flex;
        justify-content: space-between;
        width: 40%;
        margin-left: 550px;
    }
</style>

</body>
</html>