<!doctype html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $company_name }}</title>
</head>
<body>
<p>
    Pojawiła się nowa wiadomość w panelu administratora
</p>
<p>
    Adres e-mail: {{ $email }}
</p>
<p>
    Imię i nazwisko: {{ $full_name }}
</p>
<p>
    Nazwa firmy: {{ $company_name }}
</p>
<p>
    Wiadomość: {{ $content }}
</p>
<p>
    <a href="{{ $url }}">{{ $url }}</a>
</p>
</body>
</html>
