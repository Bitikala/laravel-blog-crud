<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre', 'Mon Blog')</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        max-width: 700px;
        margin: 30px auto;
        padding: 0 15px;
    }

    .success {
        background: #d4edda;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 15px;
    }

    .error {
        color: #c0392b;
        font-size: 14px;
    }

    input,
    textarea {
        width: 100%;
        padding: 8px;
        margin: 5px 0 10px;
        box-sizing: border-box;
    }

    .btn {
        background: #2d6cdf;
        color: #fff;
        padding: 8px 14px;
        border: none;
        border-radius: 4px;
        text-decoration: none;
        cursor: pointer;
    }

    .carte {
        border: 1px solid #ddd;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 10px;
    }

    </style>
</head>

<body>
    <h1><a href="{{ route('posts.index') }}" style="text-decoration:none;color:inherit;">Mon Blog</a></h1>

    @if(session('success'))
    <div class="success">{{ session('success') }}</div>
    @endif

    @yield('contenu')
</body>

</html>
