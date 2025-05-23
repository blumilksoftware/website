<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $topic }}</title>
</head>
<body>
<p>
    Pojawiła się nowa wiadomość w panelu administratora
</p>
<p>
    Adres e-mail: {{ $email }}
</p>
<p>
    Tytuł: {{ $topic }}
</p>
<p>
    Wiadomość: {{ $content }}
</p>
<p>
    <a href="{{ $url }}">{{ $url }}</a>
</p>
</body>
</html>
